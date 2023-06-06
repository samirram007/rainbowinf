<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Models\Designation;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class DesignationController extends Controller
{
    public function ViewDesignation()
    {
        $data['allData']=Designation::all();
        return view('backend.setup.designation.view_designation',$data);
    }
    public function DesignationAdd()
    {
        $data['allData']=Designation::all();
        return view('backend.setup.designation.add_designation',$data);
    }
    public function DesignationStore(Request $request)
    {
        $vallidatedData=$request->validate([ 
            'name'=>'required|unique:designations,name|min:3'
        ]);
        $data=new Designation(); 
        $data->name = $request->name;

        $data->save();
        $notification=array(
            'message'=>'Designation Inserted Successsfully',
            'alert-type'=>'success'
        );
        return redirect()
        ->route('designation.view')
        ->with($notification);
    }
    public function DesignationEdit($id)
    {
        $editData=Designation::find($id); 
        return view('backend.setup.designation.edit_designation',compact('editData'));
    }
    public function DesignationUpdate(Request $request, $id)
    {
        $data=Designation::find($id); 
        $vallidatedData=$request->validate([ 
            'name'=>'required|unique:designations,name,'.$data->id.'|min:3'
        ]);
        
        $data->name = $request->name;
        $data->save();
        $notification=array(
            'message'=>'Designation Updated Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('designation.view')
        ->with($notification);
    }
    public function DesignationDelete($id)
    {
        $studentGroup=Designation::find($id);
    $studentGroup->delete();
    $notification=array(
        'message'=>'Designation Deleted Successsfully',
        'alert-type'=>'info'
    );
    return redirect()
    ->route('designation.view')
    ->with($notification);
        
    }


}