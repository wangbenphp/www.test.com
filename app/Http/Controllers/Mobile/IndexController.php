<?php

namespace App\Http\Controllers\Mobile;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class IndexController extends Controller
{
    public function index()
    {
        echo 'Mobile';
    }

    public function test()
    {
        echo 'Moble is a test.';
    }
}
