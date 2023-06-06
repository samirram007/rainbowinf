<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function send_email(Request $request)
    {
      $data= $request->validate(([
           'name'=>'required',
           'email'=>'required|email',
           'subject'=>'required',
           'message'=>'required'
       ]));

      //dd($data);
Mail::to(env('MAIL_USERNAME'))->send(new ContactMail($data));
//return "Thanks for reaching out!";
$notification=array(
    'message'=>'Thanks for reaching out!',
    'alert-type'=>'success'
);
return redirect()
->back()
->with($notification);
    //    if($this->isOnline()){
    //        $mail_data=[
    //            'recipient'=>env('MAIL_USERNAME'),
    //            'fromEmail'=>$request->email,
    //            'fromName'=>$request->name,
    //            'subject'=>$request->subject,
    //            'body'=>$request->message
    //        ];
    //       //dd($mail_data);
    //        Mail::send('email-template',$mail_data, function($message) use($mail_data){
    //            $message->to($mail_data['recipient'])
    //                      ->from($mail_data['fromEmail'],$mail_data['fromName'])
    //                      ->subject($mail_data['subject']);
 
    //        });
    //      //   return redirect()->back()->with('success','Email Sent!');
    //        $notification=array(
    //          'message'=>'Email Sent',
    //          'alert-type'=>'success'
    //      );
    //      return redirect()
    //      ->back()
    //      ->with($notification);
 
    //    }
    //    else{
    //      //   return redirect()->back()->with('error','Check Your Internet  Connection');
    //      $notification=array(
    //          'message'=>'Check Your Internet  Connection',
    //          'alert-type'=>'error'
    //      );
    //      return redirect()
    //      ->back()
    //      ->with($notification);
    //    }
    }

   public function send_email_backup(Request $request)
   {
      $request->validate(([
          'name'=>'required',
          'email'=>'required|email',
          'subject'=>'required',
          'message'=>'required'
      ]));
     // dd($request);
      if($this->isOnline()){
          $mail_data=[
              'recipient'=>env('MAIL_USERNAME'),
              'fromEmail'=>$request->email,
              'fromName'=>$request->name,
              'subject'=>$request->subject,
              'body'=>$request->message
          ];
         //dd($mail_data);
          Mail::send('email-template',$mail_data, function($message) use($mail_data){
              $message->to($mail_data['recipient'])
                        ->from($mail_data['fromEmail'],$mail_data['fromName'])
                        ->subject($mail_data['subject']);

          });
        //   return redirect()->back()->with('success','Email Sent!');
          $notification=array(
            'message'=>'Email Sent',
            'alert-type'=>'success'
        );
        return redirect()
        ->back()
        ->with($notification);

      }
      else{
        //   return redirect()->back()->with('error','Check Your Internet  Connection');
        $notification=array(
            'message'=>'Check Your Internet  Connection',
            'alert-type'=>'error'
        );
        return redirect()
        ->back()
        ->with($notification);
      }
   }
   public function isOnline()
   {
    $response = null;
    system("ping google.com", $response);
    if($response == 0)
    {
       // dd($site);
        return true;
        // this means you are connected
    }
    else{
       // dd($site);
        return false;
    }

    //    if(@fopen($site, "r")){
          
    //        return true;
    //    }
    //    else{
    //     dd($site);
    //        return false;
    //    }
   }
}
