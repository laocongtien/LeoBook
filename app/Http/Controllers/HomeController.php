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
use App\Publisher, App\Issuer;
use Cart;
use Hash;
use Input;

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
        $cates_slide = book::where('cate_id',$details->cate_id)->take(15)->get();
        $cates = book::where('cate_id',$details->cate_id)->paginate(4);
        $authors = book::where('author_id',$details->author_id)->paginate(4);
        if (Request::ajax())
        {
            $data = Request::get('data');
            $page = Request::get('page');
            //echo gettype($data);
            if ($data == '01'){
                return view('front.partials.list_book_item_info_page_lbook',[
                    'data' => $authors,
                    'list' => ''
                ]);
            }elseif ($data == '03'){
                return view('front.partials.list_book_item_info_page_lbook',[
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
            'item'       => $details,
            'cates_slide' =>  $cates_slide,
            'cates'      =>  $cates,
            'authors'    =>  $authors
        ]);
    }

    public function bestseller() {
        //$bestsellers = orderdetail::select('book_id', DB::raw('SUM(qty) as qty'))->groupBy('book_id')->orderBy('qty','DESC')->get();
        
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $list = Request::get('list');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $bestsellers = book::where('publishing_date','<',date('y-m-d'))->orderBy('qty_saled','DESC');
            $bestsellers = HomeController::sort($bestsellers,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $bestsellers,
                'list' => $list
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
            $list = Request::get('list');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC');
            $newests = HomeController::sort($newests,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $newests,
                'list' => $list
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
            $list = Request::get('list');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $commings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC');
            $commings = HomeController::sort($commings,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $commings,
                'list' => $list
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
            $list = Request::get('list');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $discounts = book::where('publishing_date','<',date('y-m-d'))->orderBy('discount','DESC');
            $discounts = HomeController::sort($discounts,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $discounts,
                'list' => $list
            ]);
        }
        $discounts = book::where('publishing_date','<',date('y-m-d'))->orderBy('discount','DESC')->paginate(5);
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
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $bestsellers = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->orderBy('qty_saled','DESC');
            $bestsellers = HomeController::sort($bestsellers,$sort)->paginate($limit);
            
            return view('front.partials.list_book_item_info_page',[
                'data' => $bestsellers,
                'list' => $list
            ]);
        }
        $bestsellers = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->orderBy('qty_saled','DESC')->paginate(5);
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
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $newests = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC');
            $newests = HomeController::sort($newests,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $newests,
                'list' => $list
            ]);
        }
        $newests = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate(5);
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
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $commings = book::where('cate_id',$id)->where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC');
            $commings = HomeController::sort($commings,$sort)->paginate($limit);

            return view('front.partials.list_book_item_info_page',[
                'data' => $commings,
                'list' => $list
            ]);
        }
        $commings = book::where('cate_id',$id)->where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC')->paginate(5);
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
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $discounts = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->orderBy('discount','DESC');
            $discounts = HomeController::sort($discounts,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $discounts,
                'list' => $list
            ]);
        }
        $discounts = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->orderBy('discount','DESC')->paginate(5);
        $cate_name = cate::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $discounts,
             'name' =>  $cate_name,
            'filter' => 'Giảm giá',
            'route' => 'home.discount'
        ]);
    }

    public function cate($id) {
        
        if (Request::ajax())
        {            
            $limit = Request::get('limit');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $model = book::where('cate_id',$id)->where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC');
            $model = HomeController::sort($model,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $model,
                'list' => $list
            ]);
        }

        $bestsellers = book::where('publishing_date','<',date('y-m-d'))->orderBy('qty_saled','DESC')->paginate(5);
        $cate_name = cate::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $bestsellers,
             'name' => $cate_name ,
        ]);
    }

    public function combo() {
        return view('front.index');
    }

    public function author() {
        
        if(Request::ajax()){
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            switch ($data) {
                case 'pp':
                    $author = Author::find($list);
                    $author_book = Book::where('author_id',$list)->get();
                    return view('front.partials.list_item_pp_author',[
                        'data'  =>  $author,
                        'author_book' => $author_book,
                    ]);
                case 'word':
                    $author = Author::where('name','LIKE',$list.'%');
                    return view('front.partials.list_item_word',[
                        'data'  =>  $author->paginate(9),
                        'name_page' => 'Tác giả',
                        'word'  =>  $list,
                    ]);
                default :
                    $authors = DB::table('Authors');
                    $author = HomeController::sort($authors,$sort);
                    return view('front.partials.list_item_all',[
                        'data'  =>  $author->paginate(9),
                    ]);
            }
        }
        
        $author_list = Author::orderBy('name','ASC')->paginate(9);
        $author_word = Author::select(DB::raw('substr(name,1,1) as alpha'))->groupBy(DB::raw('substr(name,1,1)'))->get();

        return view('front.tacgia',[
            'author_word' => $author_word,
            'data'          =>  $author_list,
            'name_page' => 'Tác giả',
            'table_name'=>  'Authors',
            'id'    =>  $id,
        ]);
        
    }

    public function author_detail($id) {
        if(Request::ajax()){
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            switch ($data) {
                case 'pp':
                    $author = Author::find($list);
                    $author_book = Book::where('author_id',$list)->get();
                    return view('front.partials.list_item_pp_author',[
                        'data'  =>  $author,
                        'author_book' => $author_book,
                    ]);
                case 'word':
                    $author = Author::where('name','LIKE',$list.'%');
                    return view('front.partials.list_item_word',[
                        'data'  =>  $author->paginate(9),
                        'name_page' => 'Tác giả',
                        'word'  =>  $list,
                    ]);
                default :
                    $authors = DB::table('Authors');
                    $author = HomeController::sort($authors,$sort);
                    return view('front.partials.list_item_all',[
                        'data'  =>  $author->paginate(9),
                    ]);
            }
        }
        
        $author_list = Author::orderBy('name','ASC')->paginate(9);
        $author_word = Author::select(DB::raw('substr(name,1,1) as alpha'))->groupBy(DB::raw('substr(name,1,1)'))->get();
        $word = Author::find($id)->name;

        return view('front.tacgia',[
            'author_word' => $author_word,
            'data'          =>  $author_list,
            'name_page' => 'Tác giả',
            'table_name'=>  'Authors',
            'id'    =>  $id,
            'word'  =>  $word,
        ]);
    }

    public function publisher() {
        if(Request::ajax()){
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            switch ($data) {
                case 'pp':
                    $source = Publisher::find($list);
                    $source_book = Book::where('publisher_id',$list)->get();
                    return view('front.partials.list_item_pp_issuer',[
                        'data'  =>  $source,
                        'author_book' => $source_book,
                    ]);
                case 'word':
                    $source = Publisher::where('name','LIKE',$list.'%');
                    return view('front.partials.list_item_word',[
                        'data'  =>  $source->paginate(9),
                        'name_page' => 'Nhà xuất bản',
                        'word'  =>  $list,
                    ]);
                default :
                    $sources = DB::table('publishers');
                    $source = HomeController::sort($sources,$sort);
                    return view('front.partials.list_item_all',[
                        'data'  =>  $source->paginate(9),
                    ]);
            }
        }
        $source_list = Publisher::orderBy('name','ASC')->paginate(9);
        $source_word = Publisher::select(DB::raw('substr(name,1,1) as alpha'))->groupBy(DB::raw('substr(name,1,1)'))->get();

        return view('front.tacgia',[
            'author_word' => $source_word,
            'data'          =>  $source_list,
            'name_page' => 'Nhà xuất bản',
            'table_name'=>  'Publishers',
        ]);
    }

    public function issuer() {
        if(Request::ajax()){
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            switch ($data) {
                case 'pp':
                    $source = Issuer::find($list);
                    $source_book = Book::where('author_id',$list)->get();
                    return view('front.partials.list_item_pp_issuer',[
                        'data'  =>  $source,
                        'author_book' => $source_book,
                    ]);
                case 'word':
                    $source = Issuer::where('name','LIKE',$list.'%');
                    return view('front.partials.list_item_word',[
                        'data'  =>  $source->paginate(9),
                        'name_page' => 'Công ty phát hành',
                        'word'  =>  $list,
                    ]);
                default :
                    $sources = DB::table('Issuers');
                    $source = HomeController::sort($sources,$sort);
                    return view('front.partials.list_item_all',[
                        'data'  =>  $source->paginate(9),
                    ]);
            }
        }
        $source_list = Issuer::orderBy('name','ASC')->paginate(9);
        $source_word = Issuer::select(DB::raw('substr(name,1,1) as alpha'))->groupBy(DB::raw('substr(name,1,1)'))->get();

        return view('front.tacgia',[
            'author_word' => $source_word,
            'data'          =>  $source_list,
            'name_page' => 'Công ty phát hành',
            'table_name'=>  'Issuers',
        ]);
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
