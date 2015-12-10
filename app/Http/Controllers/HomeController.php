<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Cate;
use App\Book;
use App\OrderDetail;

class HomeController extends Controller
{
    public function index() {
        $books = book::all()->take(10);
        //$bestseller = orderdetail::select('book_id', DB::raw('SUM(qty) as qty'))->groupBy('book_id')->orderBy('qty','DESC')->take(10)->get();
        $bestseller = book::orderBy('qty_saled','DESC')->take(10)->get();
        $comings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC')->take(10)->get();
        $counts = book::orderBy('discount','DESC')->take(10)->get();
        $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC')->take(10)->get();        
        return view('front.index',[
            'books'      => $books,
            'newests'    => $newests,
            'comings'    => $comings,
            'counts'     => $counts,
            'bestseller' => $bestseller
        ]);
    }
    public function test($id) {
        $today = date("y-m-d");
        echo "<pre>";
        print_r($today);
        echo "</pre>";
        $details = book::find($id);
        $cates = book::where('type_id',$details->type_id)->first();
        echo "<pre>";
        // foreach($bestseller as $book)
        // print_r($book->name);
         print_r($cates->name);
        echo "</pre>";
    }
    public function detail($id) {
        $details = book::find($id);
        $cates = book::where('type_id',$details->type_id)->get();
        $authors = book::where('author_id',$details->author_id)->get();
        return view('front.chitiet',[
            'data' => $details,
            'cates' =>  $cates,
            'authors'   =>  $authors
        ]);
    }



    public function bestseller() {
        //$bestsellers = orderdetail::select('book_id', DB::raw('SUM(qty) as qty'))->groupBy('book_id')->orderBy('qty','DESC')->get();
         $bestsellers = book::orderBy('qty_saled','DESC')->take(10)->get();
        return view('front.xemthem',[
            'data' =>  $bestsellers,
             'name' =>  'Bán chạy nhất'
        ]);
    }

    public function newbook() {
        $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC')->get();
        return view('front.xemthem',[
            'data' =>  $newests,
             'name' =>  'Sách mới'
        ]);
    }

    public function comming() {
        $commings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC')->get();
        return view('front.xemthem',[
            'data' =>  $commings,
             'name' =>  'Sắp phát hành'
        ]);
    }

    public function discount() {
        $counts = book::orderBy('discount','DESC')->get();
        return view('front.xemthem',[
            'data' =>  $counts,
             'name' =>  'Sách giảm giá'
        ]);
    }

    public function combo() {
        return view('front.index');
    }

    public function author() {
        return view('front.tacgia');
    }

    public function publisher() {
        return view('front.nxb');
    }

    public function issuer() {
        return view('front.issuers');
    }

    public function search() {
        return view('front.timkiem');
    }

    public function customer() {
        return view('front.trangcanhan');
    }

    public function checkout() {
        return view('front.checkout');
    }

    public function cate() {
        return view('front.danhmuc');
    }
}
