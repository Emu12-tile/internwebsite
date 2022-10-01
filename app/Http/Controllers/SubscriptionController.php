<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Mail;
class SubscriptionController extends Controller
{
    // public function send(Request $request){
    //     $request->validate([
            
    //         'email'=>'required|email',
            
    
    //     ]);
    
    //        if($this->isOnline()){
    //         $mail_data=[
    //             'reciepent'=>'emuaniley@gmail.com',
    //             'fromEmail'=>$request->email,
                
    //         ];
    //         Mail::send($mail_data,function($message) use ($mail_data){
    //            $message->to($mail_data['reciepent'])
    //                     ->from($mail_data['fromEmail']);
    //                     // ->message($mail_data['message']);
    //         });
    //         return redirect()->back()->with('succes','');
    //     }
    //           else{
    //             return redirect()->back()->withInput()->withS('error','check your internet connection');
    //           }
    //        }
        
    // public function isOnline($site="https://youtube.com/"){
    // if(@fopen($site,"r")){
    //     return true;
    // }else{
    //     return false;
    // }
    // }
}
