<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Http\Controllers\Controller;
use App\Models\EmployeeAttendance;
use App\Models\EmployeeSalaryLog;
use App\Models\MonthlySalaryPdf;
use App\Models\User;
use Illuminate\Http\Request;

class MonthlySalaryController extends Controller
{
    public function MonthlySalaryView()
    {
        $data['collections'] = EmployeeSalaryLog::all();
        dd($data['collections']);
        return view('backend.employee.monthly_salary.monthly_salary_view', $data);
    }
    public function MonthlySalaryGet(Request $request)
    {
        $month = $request->month;
        if ($month != '') {
            $where[] = ['date', 'like', $month . '%'];
        }

        $data = EmployeeAttendance::select('employee_id')->groupBy('employee_id')
            ->with(['user'])->where($where)->get();
        foreach ($data as $key => $attend) {

            $totalAttend = EmployeeAttendance::with(['user'])
                ->where($where)
                ->where('employee_id', $attend->employee_id)
                ->get();
            $absentCount = count($totalAttend->where('attend_status', 'Absent'));
            $data[$key]['totalAttend'] = $totalAttend;
            $data[$key]['absentCount'] = $absentCount;
            $salary = (double) $attend['user']['salary'];
            $salaryPerDay = (double) $salary / 30;
            $totalSalaryMinus = (double) $absentCount * (double) $salaryPerDay;
            $totalSalary = (double) $salary - (double) $totalSalaryMinus;
            $data[$key]['totalSalary'] = $totalSalary;
        }

        return response()->json($data);
        // $data['employees']=User::where('usertype','Employee')->get();
        // return view('backend.employee.monthly_salary.monthly_salary_view',$data);

    }
    public function MonthlySalaryPayslip(Request $request, $id)
    {
        // $data['month'] = $month;
        // $id= EmployeeAttendance:: where('employee_id',$employee_id)->first();
        // $month = date('Y-m',strtotime());
        // $data['month']=$month;
        // dd($data['month']);
        $data['employees'] = User::find($id);
        // dd($data['employees']);
        // dd($data['employees']);
        // dd($data['employees']);
        //dd($month);
        // if ($month != '') {
        //     $where[] = ['date', 'like', $month . '%'];
        // }

        // $data['details']=EmployeeAttendance::with(['user'])->where($where)
        //                 ->where('employee_id',$id->employee_id)->get();
        //dd($data);
        // $pdf = PDF::loadView('backend.employee.monthly_salary.monthly_salary_pdf', $data);
        // $pdf->SetProtection(['copy', 'print'], '', 'pass');
        // return $pdf->stream('document.pdf');
        return view('backend.employee.monthly_salary.monthly_salary_upload', $data);

    }

    public function MonthlySalaryManage()
    {
        $data['collections'] = User::where('usertype', 'Employee')->get();
        // dd($data['allData']);
        return view('backend.employee.monthly_salary.monthly_salary_manage', $data);
    }

    public function show($id)
    {
        $data['employees'] = User::find($id);
        // $data = Salarypdf::where('employee_id','=',$id)->get();
        // dd($data);

        return view('backend.employee.monthly_salary.monthly_salary_upload', $data);
    }

    public function pdfupload(Request $request)
    {

        $request->validate([
            'employee_id' => 'required',
            'month_year' => 'required',
            'pdf_file' => 'required|mimes:pdf|max:2048',
        ]);

        // $employee = User::find($id);
        $employee = new MonthlySalaryPdf();
        $employee->month_year = $request->month_year;
        $employee->employee_id = $request->employee_id;
        if ($request->hasFile('pdf_file')) {
            $file = $request->file('pdf_file');
            $extention = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extention;
            $file->move('employee/salary_pdf', $filename);
            $employee->pdf_file = $filename;
        }
        $employee->save();
        return response()->json([
            'status' => true,
            'pdf_file'=>$filename,
            'employee_id'=>$request->employee_id,
            'month_year'=>$request->month_year,
            'message' => 'Salary PDF Uploaded Successfully',
        ]);
        // return redirect()->back();
        // 'pdf_file'=>$filename,
        // 'employee_id'=>$request->employee_id,
        // 'month_year'=>$request->month_year,
    }
    public function MonthlySalarySearch(Request $request)
    {
        // dd($request->all());
        $userData = User::where('usertype', 'Employee')->get();
        $pdf_file = "";
        //  dd($userData);
        $employeeData = [];
        foreach ($userData as $key => $user) {
            //  $pdf_file= $this->getSalaryPdf($user->id, $request->month);
            $pdf_file = MonthlySalaryPdf::select('pdf_file')
                ->where('month_year', $request->month)
                ->where('employee_id', $user->id)
                ->first();
            //@dd($pdf_file);
            if ($pdf_file != null) {
                $pdf_file = $pdf_file->pdf_file;
            } else {
                $pdf_file = null;
            }

            $employeeData[$key] = [
                'employee_id' => $user->id,
                'employee_code' => $user->id_no,
                'name' => $user->name,
                'salary' => $user->salary,
                'month' => $request->month,
                'pdf_file' => $pdf_file,
            ];
        }
        // dd($employeeData);
        $html = view('backend.employee.monthly_salary.partials.employee_salary_rows', compact('employeeData'))->render();
        //dd($data);
        return response()->json([
            'status' => true,
            'month' => $request->month,
            'html' => $html,
        ]);
        //dd($data);
        // return view('backend.employee.monthly_salary.monthly_salary_manage',$data);
    }
    public function getSalaryPdf($employee_id, $month)
    {
        $monthlySalaryData = MonthlySalaryPdf::where('month_year', $month)
            ->where('employee_id', $employee_id)
            ->first();
        if ($monthlySalaryData != null) {
            return $monthlySalaryData->pdf_file;
        } else {
            return "";
        }

    }
}
