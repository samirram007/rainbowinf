<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Models\User;
use App\Models\Designation;
use App\Models\Department;
use App\Models\Office;
use Illuminate\Http\Request;
use App\Models\EmployeeSalaryLog;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use PDF;

class EmployeeRegistrationController extends Controller
{
    public function EmployeeView()
    {
        $data['allData'] = User::where('usertype', 'Employee')->get();

        return view('backend.employee.employee_reg.employee_view', $data);
    }

    public function EmployeeAdd()
    {
        $data['designation'] = Designation::all();
        $data['department'] = Department::all();
        $data['office'] = Office::all();

        return view('backend.employee.employee_reg.employee_add', $data);
    }
   
    public function EmployeeStore(Request $request)
    {
        DB::transaction(function ()
        use ($request) {
            $checkYear = date('Ym', strtotime($request->join_date));
            $employee = User::where('usertype', 'Employee')->orderBy('id', 'DESC')->first();
            if ($employee == null) {
                $firstReg = 0;
                $employeeId = $firstReg + 1;
                if ($employeeId < 10) {
                    $id_no = '000' . $employeeId;
                } elseif ($employeeId < 100) {
                    $id_no = '00' . $employeeId;
                } elseif ($employeeId < 1000) {
                    $id_no = '0' . $employeeId;
                }
            } else {
                $employee = User::where('usertype', 'Employee')->orderBy('id', 'DESC')->first()->id;
                $employeeId = $employee + 1;
                if ($employeeId < 10) {
                    $id_no = '000' . $employeeId;
                } elseif ($employeeId < 100) {
                    $id_no = '00' . $employeeId;
                } elseif ($employeeId < 1000) {
                    $id_no = '0' . $employeeId;
                }
            }
            $final_id = $checkYear . $id_no;
            $data = new User();
            $code = rand(0000, 9999);
            $data->id_no = $final_id;
            $data->password = bcrypt($code);
            $data->usertype = 'employee';
            $data->role = 'employee';
            $data->code = $code;
            $data->name = $request->name;
            $data->father_name = $request->father_name;
            $data->mother_name = $request->mother_name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->address = $request->address;
            $data->gender = $request->gender;
            $data->religion = $request->religion;
            $data->nationality = $request->nationality;
            $data->dob = date('Y-m-d', strtotime($request->dob));
            $data->join_date = date('Y-m-d', strtotime($request->join_date));
            $data->salary = $request->salary;
            $data->designation_id = $request->designation_id;
            $data->aadhaar_no = $request->aadhaar_no;
            $data->department_id = $request->department_id;
            $data->office_id = $request->office_id;
            $data->pan_no = $request->pan_no;
            if ($request->file('image')) {
                $file = $request->file('image');
                // @unlink(public_path('upload/student_images/'.$data->image));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/employee_images'), $filename);
                $data['image'] = $filename;
            }
            $data->save();
            $employee_salary = new EmployeeSalaryLog();
            $employee_salary->employee_id = $data->id;
            $employee_salary->previous_salary = $request->salary;
            $employee_salary->present_salary = $request->salary;
            $employee_salary->increment_salary = '0';
            $employee_salary->effected_salary = date('Y-m-d', strtotime($request->join_date));
            $employee_salary->save();
        });



        $notification = array(
            'message' => 'Employee Registration Inserted Successsfully',
            'alert-type' => 'success'
        );
        return redirect()
            ->route('employee.registration.view')
            ->with($notification);
    } // End Method
    public function EmployeeEdit($id)
    {
        $data['editData']=User::find($id);
       // dd($data);
        $data['designation'] = Designation::all();
        $data['department'] = Department::all();
        $data['office'] = Office::all();
        return view('backend.employee.employee_reg.employee_edit', $data);
    }
    public function EmployeeUpdate(Request $request,$id)
    {
            $data = User::find($id);
            $data->usertype = 'employee';
            $data->role = 'employee';
            $data->name = $request->name;
            $data->id_no = $request->id_no;
            $data->father_name = $request->father_name;
            $data->mother_name = $request->mother_name;
            $data->email = $request->email;
            $data->mobile = $request->mobile;
            $data->address = $request->address;
            $data->gender = $request->gender;
            $data->religion = $request->religion;
            $data->nationality = $request->nationality;
            $data->dob = date('Y-m-d', strtotime($request->dob));
            $data->join_date = date('Y-m-d', strtotime($request->join_date));
            $data->salary = $request->salary;
            $data->designation_id = $request->designation_id;
            $data->aadhaar_no = $request->aadhaar_no;
            $data->department_id = $request->department_id;
            $data->office_id = $request->office_id;
            $data->pan_no = $request->pan_no;
            if ($request->file('image')) {
                $file = $request->file('image');
                 @unlink(public_path('upload/employee_images/'.$data->image));
                $filename = date('YmdHi') . $file->getClientOriginalName();
                $file->move(public_path('upload/employee_images'), $filename);
                $data['image'] = $filename;
            }
            $data->save();
            // $employee_salary = new EmployeeSalaryLog();
            // $employee_salary->employee_id = $data->id;
            // $employee_salary->previous_salary = $request->salary;
            // $employee_salary->present_salary = $request->salary;
            // $employee_salary->increment_salary = '0';
            // $employee_salary->effected_salary = date('Y-m-d', strtotime($request->join_date));
            // $employee_salary->save();
      



        $notification = array(
            'message' => 'Employee Registration Updated Successsfully',
            'alert-type' => 'info'
        );
        return redirect()
            ->route('employee.registration.view')
            ->with($notification);
    } // End Method

    public function EmployeeDetails($id){
        $data['details']=User::find($id);
        // dd($data);
         // $data['editData']=AssignStudent::find($student_id);
         $pdf = PDF::loadView('backend.employee.employee_reg.employee_details_pdf', $data); 
     $pdf->SetProtection(['copy', 'print'], '', 'pass');
     return $pdf->stream('document.pdf');
    }
}