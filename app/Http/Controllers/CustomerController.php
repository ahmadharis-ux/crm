<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    function index(){
        $pageData = [
            'title' => "Dasboard",
        ];
        return view('customer.index', $pageData);
    }
}
