<?php

namespace App\Http\Controllers\Backend\Employee;

use App\Models\User;
use App\Models\LeavePurpose;
use Illuminate\Http\Request;
use App\Models\EmployeeLeave;
use App\Http\Controllers\Controller;

class EmployeeLeaveController extends Controller
{
    public function LeaveView()
    {
        $data['allData']=EmployeeLeave::orderBy('id','desc')->get();
        return view('backend.employee.employee_leave.employee_leave_view',$data);
    }
    public function LeaveAdd()
    {
        $data['employees']=User::where('usertype','Employee')->get();
        $data['leave_purpose']=LeavePurpose::all();
        return view('backend.employee.employee_leave.employee_leave_add',$data);
    }
    public function LeaveStore(Request $request)
    {
        $leave_purpose_id=0;
        if($request->leave_purpose_id=="0"){
            $leavePurpose=new LeavePurpose();
            $leavePurpose->name=$request->name;
            $leavePurpose->save();
            $leave_purpose_id=$leavePurpose->id;
        }
        else{
            $leave_purpose_id=$request->leave_purpose_id;
        }
        

        $leave= new EmployeeLeave();
        $leave->employee_id=$request->employee_id;
        $leave->leave_purpose_id=$leave_purpose_id;
        $leave->start_date=date('Y-m-d',strtotime($request->start_date));
        $leave->end_date=date('Y-m-d',strtotime($request->end_date));
        $leave->save();
        $notification = array(
            'message' => 'Employee Leave  Data Inserted Successsfully',
            'alert-type' => 'success'
        );
        return redirect()
            ->route('employee.leave.view')
            ->with($notification);
         
    }

    public function LeaveEdit($id)
    {
        $data['employees']=User::where('usertype','Employee')->get();
        $data['leave_purpose']=LeavePurpose::all();
        $data['editData']=EmployeeLeave::find($id);
        return view('backend.employee.employee_leave.employee_leave_edit',$data);
    }

    public function LeaveUpdate(Request $request,$id)
    {
        $leave_purpose_id=0;
        if($request->leave_purpose_id=="0"){
            $leavePurpose=new LeavePurpose();
            $leavePurpose->name=$request->name;
            $leavePurpose->save();
            $leave_purpose_id=$leavePurpose->id;
        }
        else{
            $leave_purpose_id=$request->leave_purpose_id;
        }
        

        $leave= EmployeeLeave::find($id);
        $leave->employee_id=$request->employee_id;
        $leave->leave_purpose_id=$leave_purpose_id;
        $leave->start_date=date('Y-m-d',strtotime($request->start_date));
        $leave->end_date=date('Y-m-d',strtotime($request->end_date));
        $leave->save();
        $notification = array(
            'message' => 'Employee Leave Data Updated Successsfully',
            'alert-type' => 'info'
        );
        return redirect()
            ->route('employee.leave.view')
            ->with($notification);
         
    }

    public function LeaveDelete($id)
    {
        $data=EmployeeLeave::find($id);
    $data->delete();
    $notification=array(
        'message'=>'Employee leave Data Deleted Successsfully',
        'alert-type'=>'info'
    );
    return redirect()
    ->route('employee.leave.view')
    ->with($notification);
        
    }
}
