<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\EmployeeSalaryLog;
use App\Http\Controllers\Controller;

class EmployeeSalaryController extends Controller
{
    public function SalaryView()
    {
        $data['allData']=User::where('usertype','Employee')->get();
        return view('backend.employee.employee_salary.employee_salary_view', $data);
        
    }
    public function SalaryIncrement($id)
    {
        $data['editData']=User::find($id);
        return view('backend.employee.employee_salary.employee_salary_increment', $data);
        
    }
    public function SalaryIncrementStore(Request $request, $id)
    {
        $user=User::find($id);
        $increment_salary=$request->increment_salary;
        $previous_salary=$user->salary;
        $present_salary=(float)$previous_salary+(double)$increment_salary;
        $user->salary=$present_salary;
        $user->save();
        $salaryData=new EmployeeSalaryLog();
        $salaryData->employee_id=$user->id;
        $salaryData->previous_salary=$previous_salary;
        $salaryData->present_salary=$present_salary;
        $salaryData->increment_salary=$increment_salary;
        $salaryData->effected_salary = date('Y-m-d',strtotime($request->effected_salary));
        $salaryData->save();
        $notification = array(
            'message' => 'Employee Salary Increment Successsfully',
            'alert-type' => 'success'
        );
        return redirect()
            ->route('employee.salary.view')
            ->with($notification);
        

    }
    public function SalaryDetails($id)
    {
        $data['details']=User::find($id);
         
        $data['salary_log']=EmployeeSalaryLog::where('employee_id',$data['details']->id)->get();
        
         // $data['editData']=AssignStudent::find($student_id);
         return View('backend.employee.employee_salary.employee_salary_details', $data); 
      
    }
}