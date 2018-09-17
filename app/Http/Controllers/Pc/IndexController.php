<?php

namespace App\Http\Controllers\Pc;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo 'Pc';
    }

    public function test()
    {
        echo 'Pc is a test.';
    }
}
