<?php

namespace App\Http\Controllers;

use Request;
use Mail;
use App\Http\Controllers\Controller;

class ContactController extends Controller
{
    public function getContact()
    {
        return view('contact');
    }

    public function postContact()
    {
        $data = ['name' => Request::input('name'), 'message' => Request::input('message')];
        Mail::send('blanks.blanks',$data, function($message) {
            $message->from('noreply@scepter.com','Scepter Shop');
            $message->to(Request::input('email'), Request::input('message'))->subject('Cảm ơn bạn đã góp ý');
        });


        echo "<script>
                alert('Cảm ơn bạn đã góp ý. Chúng tôi sẽ liên lạc với bạn trong thời gian sớm nhất');
                window.location = '" . url('/') . "';
              </script>";
    }

}
