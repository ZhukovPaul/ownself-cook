<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FeedBackContoller extends Controller
{
    //

    public function sendEmail(Request $request)
    {

        \Mail::to("79101535010@yandex.ru")->send(new  \App\Mail\FeedBackCreater($request));
       return redirect('contacts');
    }

}
