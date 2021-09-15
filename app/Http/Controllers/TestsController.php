<?php

namespace App\Http\Controllers;

use App\Models\Test;
use Illuminate\Http\Request;

class TestsController extends Controller
{
    public function add()
    {
        return view('index');
    }

    public function post(Request $request)
    {
        $test = new Test;
        $test->name = $request->name;
        $test->email = $request->email;
        $test->save();
        return view('thanks');
    }

    public function thanks()
    {
        return view('thanks');
    }

}
