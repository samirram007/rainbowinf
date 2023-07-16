<?php

namespace App\Http\Controllers\Backend\Notice;

use App\Models\Notice;
 
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class NoticeController extends Controller
{
   
        public function NoticeIndex()
        {
            //dd('2');
            $data['allData']=Notice::all();
           
            return view('backend.notice.index_notice',$data);
        }
        public function NoticeView()
        {
            $data['allData']=Notice::all();
            return view('backend.notice.view_notice',$data);
        }
        public function NoticeAdd()
        {
            $data['allData']=Notice::all();
            return view('backend.notice.add_notice',$data);
        }
        public function NoticeStore(Request $request)
        {
            $vallidatedData=$request->validate([ 
                'name'=>'required|min:3',
                'pdf_file' => 'required|mimes:pdf|max:2048',
            ]);
            $data=new Notice(); 
            $data->name = $request->name; 
            $data->published_at = $request->published_at; 
            if ($request->hasFile('pdf_file')) {
                $file = $request->file('pdf_file');
                $extention = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extention;
                $file->move('notice', $filename);
                $data->pdf_file = $filename;
            }
            $data->save();
            $notification=array(
                'message'=>'Notice Inserted Successsfully',
                'alert-type'=>'success'
            );
            return redirect()
            ->route('notice.index')
            ->with($notification);
        }
        public function NoticeEdit($id)
        {
            
            $data['noticeData']=Notice::find($id); 
            // dd($data);
            return view('backend.notice.edit_notice',$data);
        }
        public function NoticeUpdate(Request $request, $id)
        {
            $data=Notice::find($id); 
            $vallidatedData=$request->validate([ 
                'name'=>'required|min:3'
            ]);
            
            $data->name = $request->name; 
            $data->published_at = $request->published_at; 
           
          
            if ($request->hasFile('pdf_file')) {
                @unlink(public_path('notice/'.$data->pdf_file));
                $file = $request->file('pdf_file');
                $extention = $file->getClientOriginalExtension();
               
                $filename = time() . '.' . $extention;
                $file->move('notice', $filename);
                $data->pdf_file = $filename;
            }
            $data->save();
            $notification=array(
                'message'=>'Notice Updated Successsfully',
                'alert-type'=>'info'
            );
            return redirect()
            ->route('notice.index')
            ->with($notification);
        }
        public function NoticeDelete($id)
        {
            $studentGroup=Notice::find($id);
        $studentGroup->delete();
        $notification=array(
            'message'=>'Notice Deleted Successsfully',
            'alert-type'=>'info'
        );
        return redirect()
        ->route('notice.index')
        ->with($notification);
            
        } 
}
