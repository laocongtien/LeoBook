<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;

class AdminController extends Controller
{
   public function index() {
    return view('admin.admin');
   }
}
