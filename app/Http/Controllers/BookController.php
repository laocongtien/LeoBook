<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use App\Http\Requests\CateRequest;

class BookController extends Controller
{
    public function getAdd() {
    	return view('admin.book.add');
    }

    public function postAdd(CateRequest $request) {
    	print_r($request->txtCateName);
    }
   
    public function getList() {
    	return view('admin.book.list');
    }

    public function postList(CateRequest $request) {
    	print_r($request->txtCateName);
    }

    public function getEdit() {
        return view('admin.book.edit');
    }

    public function postEdit(CateRequest $request) {
        print_r($request->txtCateName);
    }

    public function getComment() {
        return view('admin.book.comment');
    }

    public function postComment(CateRequest $request) {
        print_r($request->txtCateName);
    }
}
