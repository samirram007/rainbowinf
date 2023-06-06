<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    public function UserView(){
        //    $data['allData']=User::all();
           $data['allData']=User::where('usertype','Admin')->get();
           $data['edit-link']='users.edit';
           $data['delete-link']='users.delete';
           return view('backend.user.view_user',$data);
       }
       public function UserAdd(){
                 return view('backend.user.add_user');
       }
       public function UserStore(Request $request){
           $vallidatedData=$request->validate([
               'email'=> 'required|unique:users',
               'name'=>'required|min:3'
           ]);
           $data=new User();
           $code=rand(0000,9999);
           $data->usertype = 'Admin';
           $data->role = $request->role;
           $data->name = $request->name;
           $data->email = $request->email;
           $data->code = $code;
           $data->password = bcrypt($code);
           $data->save();
           $notification=array(
               'message'=>'User Inserted Successsfully',
               'alert-type'=>'success'
           );
           return redirect()
           ->route('user.view')
           ->with($notification);
    
    
       }
    
       public function UserEdit($id){
           $editData=User::find($id);
           return view('backend.user.edit_user',compact('editData') );
       }
       public function UserUpdate(Request $request,$id){
        $vallidatedData=$request->validate([
            'email'=> 'required',
            'name'=>'required|min:3'
        ]);
       
        $data=User::find($id);  
       
        $data->role = $request->role;
        $data->name = $request->name;
        $data->email = $request->email; 
        
        $data->save();
        $notification=array(
            'message'=>'User Updated Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('user.view')
        ->with($notification);
    }
    
    public function UserDelete($id){
        $user=User::find($id);
        $user->delete();
        $notification=array(
            'message'=>'User Deleted Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('user.view')
        ->with($notification);
    }
}
