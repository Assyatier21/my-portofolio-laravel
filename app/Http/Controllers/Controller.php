<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;


class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function index()
    {
        return view('pages.index');
    }
    public function contact()
    {
        return view('pages.contact');
    }
    public function sendMailToMe(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $message = $request->message;

        return redirect()->route('user.index')->with('info', 'Success! Email Sent');
    }
    public function project()
    {
        return view('pages.project');
    }
}
