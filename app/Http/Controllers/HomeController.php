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
use App\Http\functions;

class HomeController extends Controller
{
    public function sort($model, $text) {
            switch ($text) {
                case 'new':
                    return $model->orderBy('publishing_date','ASC');
                case 'name_ASC':
                    return $model->orderBy('name','ASC');
                case 'name_DESC':
                    return $model->orderBy('name','DESC');
                case 'price_DESC':
                    return $model->orderBy('price','DESC');
                case 'price_ASC':
                    return $model->orderBy('price','ASC');
                case 'discount_DESC':
                    return $model->orderBy('discount','DESC');
                case 'discount_ASC':
                    return $model->orderBy('discount','ASC');
                case 'best':
                    return $model->orderBy('qty_saled','ASC'); 
                default:
                    return $model;
            }
        }

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
                return view('front.partials.list_book_detail_item_page',[
                    'data' => $authors,
                    'list' => ''
                ]);
            }elseif ($data == '03'){
                return view('front.partials.list_book_detail_item_page',[
                    'data' => $cates,
                    'list' => ''
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
            $sort = Request::get('sort');
            $bestsellers = book::where('publishing_date','<',date('y-m-d'))->orderBy('qty_saled','DESC');
            $bestsellers = HomeController::sort($bestsellers,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $bestsellers,
                'list' => $data
            ]);
        }

        $bestsellers = book::where('publishing_date','<',date('y-m-d'))->orderBy('qty_saled','DESC')->paginate(5);
        return view('front.xemthem',[
            'data' =>  $bestsellers,
             'name' =>  'Bán chạy nhất',
        ]);
    }

    public function newbook() {
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $page = Request::get('page');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC');
            $newests = HomeController::sort($newests,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $newests,
                'list' => $data
            ]);
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
            $sort = Request::get('sort');
            $commings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC');
            $commings = HomeController::sort($commings,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $commings,
                'list' => $data
            ]);
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
            $sort = Request::get('sort');
            $discounts = book::orderBy('discount','DESC');
            $discounts = HomeController::sort($discounts,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $discounts,
                'list' => $data
            ]);
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
            $sort = Request::get('sort');
            $bestsellers = book::where('cate_id',$id)->orderBy('qty_saled','DESC');
            $bestsellers = HomeController::sort($bestsellers,$sort)->paginate($limit);
            
            return view('front.partials.list_book_item_info_page',[
                'data' => $bestsellers,
                'list' => $data
            ]);
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
            $sort = Request::get('sort');
            $newests = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'));
            $newests = HomeController::sort($newests,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $newests,
                'list' => $data
            ]);
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
            $sort = Request::get('sort');
            $commings = book::where('cate_id',$id)->where('publishing_date','>',date('y-m-d'));
            $commings = HomeController::sort($commings,$sort)->paginate($limit);

            return view('front.partials.list_book_item_info_page',[
                'data' => $commings,
                'list' => $data
            ]);
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
            $sort = Request::get('sort');
            $discounts = book::where('cate_id',$id)->orderBy('discount','DESC');
            $discounts = HomeController::sort($discounts,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $discounts,
                'list' => $data
            ]);
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
