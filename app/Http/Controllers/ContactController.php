<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
//   public function submit(Request $request){
//     $validated=$request->validate([
//         'name'=>'required',
//         'email'=>['required','email'],
//         'message'=>'required'

//   ]);
//   Mail::to('emuaniley@gmail.com')->send(new ContactMail($validated['name'],$validated['email'],$validated['message']));
//   return $request->all();
//   }


  public function send(Request $request){
    $request->validate([
        'name'=>'required',
        'email'=>'required|email',
        'message'=>'required',


    ]);

       if($this->isOnline()){
        $mail_data=[
            'reciepent'=>'emuaniley@gmail.com',
            'fromEmail'=>$request->email,
            'fromName'=>$request->name,
            'body'=>$request->message
        ];
        Mail::send('email-template',$mail_data,function($message) use ($mail_data){
           $message->to($mail_data['reciepent'])
                    ->from($mail_data['fromEmail'],$mail_data['fromName']);
                    // ->message($mail_data['message']);
        });
        return redirect()->back()->with('succes','');
    }
          else{
            return redirect()->back()->withInput()->withS('error','check your internet connection');
          }
       }
    
public function isOnline($site="https://youtube.com/"){
if(@fopen($site,"r")){
    return true;
}else{
    return false;
}
}
    

}
