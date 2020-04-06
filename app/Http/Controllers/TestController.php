<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function foo()
    {
        session()->put('test','Test Session');
        return 'Foo Method';
    }
    public function bar($parameter)
    {
        $test=session()->get('test');
        return 'session: '.$test.'<br>'.
        'Bar method dengan parameter '.$parameter;

    }
}
