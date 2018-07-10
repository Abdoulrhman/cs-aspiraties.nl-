<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactFormRequest;
use App\Http\Requests\PlanFormRequest;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Mail;
use Symfony\Component\HttpFoundation\Session\Session;

class ContactMessageController extends Controller
{
    public function create()
    {

        return view('/index');
    }


    public function make()
    {

        return view('plan_result');
    }

    public function store(ContactFormRequest $request)
    {
        Mail::send('emails.contact', [], function ($m) use ($request) {


            $m->from($request->get('email'));
            $m->to('abdoulrhman_salah@hotmail.com')
                 ->subject('Your Reminder!');
        });

        Session::flash('email_sent', 'The Email Has Been Sent');


    }
public function send(PlanFormRequest $request){
$all = $request->all();
return view('plan_result',compact($all));

}
}
