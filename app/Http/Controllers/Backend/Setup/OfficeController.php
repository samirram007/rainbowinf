<?php

namespace App\Http\Controllers\Backend\Setup;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Office;

class OfficeController extends Controller
{
    public function ViewOffice()
    {
        $data['allData']=Office::all();
        return view('backend.setup.office.view_office',$data);
    }
    public function OfficeAdd()
    {
        $data['allData']=Office::all();
        return view('backend.setup.office.add_office',$data);
    }
    public function OfficeStore(Request $request)
    {
        $vallidatedData=$request->validate([ 
            'name'=>'required|unique:offices,name|min:3'
        ]);
        $data=new Office(); 
        $data->name = $request->name;
        $data->address = $request->address;

        $data->save();
        $notification=array(
            'message'=>'Office Inserted Successsfully',
            'alert-type'=>'success'
        );
        return redirect()
        ->route('office.view')
        ->with($notification);
    }
    public function OfficeEdit($id)
    {
        $editData=Office::find($id); 
        return view('backend.setup.office.edit_office',compact('editData'));
    }
    public function OfficeUpdate(Request $request, $id)
    {
        $data=Office::find($id); 
        $vallidatedData=$request->validate([ 
            'name'=>'required|unique:offices,name,'.$data->id.'|min:3'
        ]);
        
        $data->name = $request->name;
        $data->address = $request->address;
        $data->save();
        $notification=array(
            'message'=>'Office Updated Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('office.view')
        ->with($notification);
    }
    public function OfficeDelete($id)
    {
        $studentGroup=Office::find($id);
    $studentGroup->delete();
    $notification=array(
        'message'=>'Office Deleted Successsfully',
        'alert-type'=>'info'
    );
    return redirect()
    ->route('office.view')
    ->with($notification);
        
    }


}
