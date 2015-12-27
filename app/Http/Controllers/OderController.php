<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;

class OderController extends Controller
{
   public function oder() {
    return view('admin.oder');
   }
}
