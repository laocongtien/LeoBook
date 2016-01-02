<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;

class ComboController extends Controller
{
    public function getAdd() {
    	return view('admin.combo.add');
    }

    public function postAdd(CateRequest $request) {
    	print_r($request->txtCateName);
    }
   
    public function getList() {
    	return view('admin.combo.list');
    }

    public function postList(CateRequest $request) {
    	print_r($request->txtCateName);
    }

    public function getEdit() {
        return view('admin.combo.edit');
    }

    public function postEdit(CateRequest $request) {
        print_r($request->txtCateName);
    }
}
