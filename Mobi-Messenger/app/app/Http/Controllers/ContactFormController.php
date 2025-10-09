<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;

class ContactFormController extends Controller
{

    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $input = $request->all();
 
         $validate = Validator::make($input, [
            'g-recaptcha-response' => 'required|recaptchav3:register,0.5'
        ]);
        
        //        $requestData = $request->all();

        $name = $request->input('fullname');
        $email = $request->input('email');
        $message = $request->input('message');

        $contactMailer = new ContactMail(name: $name, email: $email, message: $message);

        Mail::to("clientservices@mobivs.com")
            ->send($contactMailer);

        return redirect('/');

       
    }
}
