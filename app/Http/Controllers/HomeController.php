<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Cate;
use App\Book;
use App\OrderDetail;
use App\Author;
use Cart;

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
    public function test($id, $qty) {
          Cart::destroy();
        $book = book::where('id',$id)->first();
        $price = $book->price - $book->price * $book->discount /100;
        // Cart::add([
        //     'id'=>$id, 
        //     'name' => $book->name, 
        //     'qty' => $qty,
        //     'price' => $price,
        //     'option' => ['image' => $book->image]
        // ]);
        Cart::add([
            'id'=>$id, 
            'name' => $book->name, 
            'qty' => $qty,
            'price' => $price,
            'options' => ['image' => $book->image]
        ]);
        //return view('front.test');
        //
        
        print_r(Cart::content()->toArray()) ;
        
        
    }

    public function buy($id,$qty) {
        $book = book::where('id',$id)->first();
        $price = $book->price - $book->price * $book->discount /100;
        Cart::add([
            'id'=>$id, 
            'name' => $book->name, 
            'qty' => $qty,
            'price' => $price,
            'options' => ['image' => $book->image]
        ]);
        $data = '';
        //print_r(Cart::content()->toArray()) ;
        foreach (Cart::content() as $item) {
            $data = $data.'
            <div class="lica mxClrAft" id="'.$item->rowid.'">
                <div class="ttl left">
                    <a href="'.route('home.detail' , $item->id) .'" class="is-2r">
                        '.$item->name.'
                    </a>
                </div>
                <div class="cartbox left">
                    <div class="num left">
                        <input type="text" class="n left" value="'.$item->qty.'">
                        <div class="ctrlnum left">
                            <div class="fa fa-angle-up is-up"></div>
                            <div class="fa fa-angle-down is-down"></div>
                        </div>
                        <div class="clear"></div>
                    </div>
                </div>
                <div class="sls left" value="'.$item->price.'">
                    '.number_format($item->price,0,',','.').'đ
                </div>
                <div class="fa fa-trash-o right"></div>
            </div>
            ';
        }
        echo $data;
    }

    public function delete($id) {
        $data = Cart::get($id);
        Cart::remove($id);
        return $data->id;
    }

    public function update($id,$qty) {
        Cart::update($id,['qty'=>$qty]);
        echo "success";
    }

    public function detail($id) {
        $details = book::find($id);
        $cates = book::where('type_id',$details->type_id)->get();
        $authors = book::where('author_id',$details->author_id)->get();
        return view('front.chitiet',[
            'item' => $details,
            'cates' =>  $cates,
            'authors'   =>  $authors
        ]);
    }



    public function bestseller() {
        //$bestsellers = orderdetail::select('book_id', DB::raw('SUM(qty) as qty'))->groupBy('book_id')->orderBy('qty','DESC')->get();
         $bestsellers = book::orderBy('qty_saled','DESC')->take(10)->paginate(10);
        return view('front.xemthem',[
            'data' =>  $bestsellers,
             'name' =>  'Bán chạy nhất'
        ]);
    }

    public function newbook() {
        $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate(10);
        return view('front.xemthem',[
            'data' =>  $newests,
             'name' =>  'Sách mới'
        ]);
    }

    public function comming() {
        $commings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate(10);
        return view('front.xemthem',[
            'data' =>  $commings,
             'name' =>  'Sắp phát hành'
        ]);
    }

    public function discount() {
        $counts = book::orderBy('discount','DESC')->paginate(10);
        return view('front.xemthem',[
            'data' =>  $counts,
             'name' =>  'Sách giảm giá'
        ]);
    }

    public function combo() {
        return view('front.index');
    }

    public function author() {
        $author = Author::select(DB::raw('substr(name,1,1) as alpha'))->groupBy(DB::raw('substr(name,1,1)'))->get();

        return view('front.tacgia',[
            'author_word' => $author
        ]);
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
        $content = Cart::content();
        return view('front.checkout',[
            'content' => $content
        ]);
    }

    public function cate() {
        return view('front.danhmuc');
    }

    
}
