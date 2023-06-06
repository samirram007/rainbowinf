<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\Department;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DepartmentController extends Controller
{
    public function ViewDepartment()
    {
        $data['allData']=Department::all();
        return view('backend.setup.department.view_department',$data);
    }
    public function DepartmentAdd()
    {
        $data['allData']=Department::all();
        return view('backend.setup.department.add_department',$data);
    }
    public function DepartmentStore(Request $request)
    {
        $vallidatedData=$request->validate([ 
            'name'=>'required|unique:departments,name|min:3'
        ]);
        $data=new Department(); 
        $data->name = $request->name;

        $data->save();
        $notification=array(
            'message'=>'Department Inserted Successsfully',
            'alert-type'=>'success'
        );
        return redirect()
        ->route('department.view')
        ->with($notification);
    }
    public function DepartmentEdit($id)
    {
        $editData=Department::find($id); 
        return view('backend.setup.department.edit_department',compact('editData'));
    }
    public function DepartmentUpdate(Request $request, $id)
    {
        $data=Department::find($id); 
        $vallidatedData=$request->validate([ 
            'name'=>'required|unique:departments,name,'.$data->id.'|min:3'
        ]);
        
        $data->name = $request->name;
        $data->save();
        $notification=array(
            'message'=>'Department Updated Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('department.view')
        ->with($notification);
    }
    public function DepartmentDelete($id)
    {
        $studentGroup=Department::find($id);
    $studentGroup->delete();
    $notification=array(
        'message'=>'Department Deleted Successsfully',
        'alert-type'=>'info'
    );
    return redirect()
    ->route('department.view')
    ->with($notification);
        
    }


}
