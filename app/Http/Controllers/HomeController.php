<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use DB;
use App\Cate;
use App\Book;
use App\OrderDetail;
use App\Author;
use Cart;
use Hash;
use Input;

class HomeController extends Controller
{
    public function index() {
        $books = book::all()->take(10);
        //$bestseller = orderdetail::select('book_id', DB::raw('SUM(qty) as qty'))->groupBy('book_id')->orderBy('qty','DESC')->take(10)->get();
        $bestseller = book::orderBy('qty_saled','DESC')->orderBy('name','DESC')->take(10)->get();
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
        echo (Cart::content());
    }

    

    public function detail($id) {
        $details = book::find($id);
        $cates = book::where('type_id',$details->type_id)->paginate(4);
        $authors = book::where('author_id',$details->author_id)->paginate(4);
        if (Request::ajax())
        {
            $data = Request::get('data');
            $page = Request::get('page');
            //echo gettype($data);
            if ($data == '01'){
                return view('front.partials.list_book_item_info',[
                    'data' => $authors
                ]);
            }elseif ($data == '03'){
                return view('front.partials.list_book_item_info',[
                    'data' => $cates
                ]);
            }elseif ($data == '02'){
                return 'chưa làm';
                // return view('front.partials.list_book_item_info',[
                //     'data' => $cates
                // ]);
            }
        }else
        return view('front.chitiet',[
            'item' => $details,
            'cates' =>  $cates,
            'authors'   =>  $authors
        ]);
    }



    public function bestseller() {
        //$bestsellers = orderdetail::select('book_id', DB::raw('SUM(qty) as qty'))->groupBy('book_id')->orderBy('qty','DESC')->get();
        
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $bestsellers = book::orderBy('qty_saled','DESC')->paginate($limit);
            if($data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $bestsellers,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info_page',[
                'data' => $bestsellers,
                'list' => ''
            ]);}
        }

        $bestsellers = book::orderBy('qty_saled','DESC')->paginate(5);
        return view('front.xemthem',[
            'data' =>  $bestsellers,
             'name' =>  'Bán chạy nhất'
        ]);
    }

    public function newbook() {
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate($limit);
            if($page == 1 && $data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $newests,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info',[
                'data' => $newests
            ]);}
        }
        $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate(5);
        return view('front.xemthem',[
            'data' =>  $newests,
             'name' =>  'Sách mới'
        ]);
    }

    public function comming() {
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $commings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate($limit);
            if($page == 1 && $data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $commings,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info',[
                'data' => $commings
            ]);}
        }
        $commings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate(5);
        return view('front.xemthem',[
            'data' =>  $commings,
             'name' =>  'Sắp phát hành'
        ]);
    }

    public function discount() {
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $discounts = book::orderBy('discount','DESC')->paginate($limit);
            if($page == 1 && $data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $discounts,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info',[
                'data' => $discounts
            ]);}
        }
        $discounts = book::orderBy('discount','DESC')->paginate(5);
        return view('front.xemthem',[
            'data' =>  $discounts,
             'name' =>  'Sách giảm giá'
        ]);
    }

    public function bestseller_cate($id) {
        
        if (Request::ajax())
        {
            //get from ajax
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $bestsellers = book::where('cate_id',$id)->orderBy('qty_saled','DESC')->paginate($limit);
            
            if($page == 1 && $data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $bestsellers,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info',[
                'data' => $bestsellers
            ]);}
        }
        $bestsellers = book::where('cate_id',$id)->orderBy('qty_saled','DESC')->paginate(5);
        $cate_name = cate::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $bestsellers,
            'name' =>  $cate_name,
            'filter' => 'Bán chạy nhất',
            'route' => 'home.bestseller'
        ]);
    }

    public function newbook_cate($id) {
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $newests = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->paginate($limit);
            $cate_name = cate::where('id',$id)->first()->name;
            if($page == 1 && $data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $newests,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info',[
                'data' => $newests
            ]);}
        }
        $newests = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->paginate(5);
        $cate_name = cate::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $newests,
             'name' =>  $cate_name,
            'filter' => 'Sách mới',
            'route' => 'home.newbook'
        ]);
    }

    public function comming_cate($id) {
        
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $commings = book::where('cate_id',$id)->where('publishing_date','>',date('y-m-d'))->paginate($limit);
            $cate_name = cate::where('id',$id)->first()->name;
            if($page == 1 && $data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $commings,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info',[
                'data' => $commings
            ]);}
        }
        $commings = book::where('cate_id',$id)->where('publishing_date','>',date('y-m-d'))->paginate(5);
        $cate_name = cate::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $commings,
             'name' =>  $cate_name,
            'filter' => 'Sắp phát hành',
            'route' => 'home.comming'
        ]);
    }

    public function discount_cate($id) {
        
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $discounts = book::where('cate_id',$id)->orderBy('discount','DESC')->paginate($limit);
            $cate_name = cate::where('id',$id)->first()->name;
            if($page == 1 && $data == 'list'){
            return view('front.partials.list_book_item_info_page',[
                'data' => $discounts,
                'list' => 'list'
            ]);}else{
            return view('front.partials.list_book_item_info',[
                'data' => $discounts
            ]);}
        }
        $discounts = book::where('cate_id',$id)->orderBy('discount','DESC')->paginate(5);
        $cate_name = cate::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $discounts,
             'name' =>  $cate_name,
            'filter' => 'Giảm giá',
            'route' => 'home.discount'
        ]);
    }

    public function cate() {
        // $order = Input::get('order');
        // if($order == 'bestseller'){
        //     $cate = book::where('cate_id',$id)->orderBy('qty_saled','DESC')->paginate(5);
        //     $cate_name = cate::where('id',$id)->first()->name;
        // }elseif($order == 'new'){
        //     $cate = book::where('cate_id',$id)->orderBy('publishing_date','<',date('y-m-d'))->paginate(5);
        //     $cate_name = cate::where('id',$id)->first()->name;
        // }elseif($order == 'comming'){
        //     $cate = book::where('cate_id',$id)->orderBy('publishing_date','>',date('y-m-d'))->paginate(5);
        //     $cate_name = cate::where('id',$id)->first()->name;
        // }elseif($order == 'discount'){
        //     $cate = book::where('cate_id',$id)->orderBy('discount','DESC')->paginate(5);
        //     $cate_name = cate::where('id',$id)->first()->name;
        // }else{
        //     $cate = book::where('cate_id',$id)->orderBy('publishing_date','DESC')->paginate(5);
        //     $cate_name = cate::where('id',$id)->first()->name;
        // }
        
        // return view('front.xemthem',[
        //     'data' =>  $cate,
        //      'name' =>  $cate_name
        // ]);
        return view('front.danhmuc');
    }

    public function combo() {
        return view('front.index');
    }

    public function author() {
        $author_list = Author::orderBy('name','ASC')->paginate(9);
        if(Request::ajax()){
            return view('front.partials.list_item',[
                'data'          =>  $author_list
            ]);
        }
        $author_word = Author::select(DB::raw('substr(name,1,1) as alpha'))->groupBy(DB::raw('substr(name,1,1)'))->get();
        
        return view('front.tacgia',[
            'author_word' => $author_word,
            'data'          =>  $author_list
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

    

    
}
