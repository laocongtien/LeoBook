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
use App\User;
use App\Location;
use App\Ward, App\District, App\Province;


class HomeController extends Controller
{

    public function index() {
        
        //$books = book::where('publishing_date','<',date('y-m-d'))->take(10);
        //$bestseller = orderdetail::select('book_id', DB::raw('SUM(qty) as qty'))->groupBy('book_id')->orderBy('qty','DESC')->take(10)->get();
        $bestseller = book::where('publishing_date','<',date('y-m-d'))->orderBy('qty_saled','DESC')->orderBy('name','DESC')->take(10)->get();
        $comings = book::where('publishing_date','>',date('y-m-d'))->orderBy('publishing_date','DESC')->take(10)->get();
        $counts = book::orderBy('discount','DESC')->where('publishing_date','<',date('y-m-d'))->take(10)->get();
        $newests = book::where('publishing_date','<',date('y-m-d'))->orderBy('publishing_date','DESC')->take(10)->get();        
        $author = Author::take(10)->get();
        return view('front.index',[
            // 'books'      => $books,
            'newests'    => $newests,
            'comings'    => $comings,
            'counts'     => $counts,
            'bestseller' => $bestseller,
            'author'     =>  $author,
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
            'item'        => $details,
            'cates_slide' =>  $cates_slide,
            'cates'       =>  $cates,
            'authors'     =>  $authors
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
            $bestsellers = Func::sort($bestsellers,$sort)->paginate($limit);
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
            $newests = Func::sort($newests,$sort)->paginate($limit);
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
            $commings = Func::sort($commings,$sort)->paginate($limit);
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
            $discounts = Func::sort($discounts,$sort)->paginate($limit);
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
            $bestsellers = Func::sort($bestsellers,$sort)->paginate($limit);
            
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
            $newests = Func::sort($newests,$sort)->paginate($limit);
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
            $commings = Func::sort($commings,$sort)->paginate($limit);

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
            $discounts = Func::sort($discounts,$sort)->paginate($limit);
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
            $model = Func::sort($model,$sort)->paginate($limit);
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
                    $author = Func::sort($authors,$sort);
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
                    $author_book = Book::where('author_id',$list)->where('publishing_date','<',date('y-m-d'))->get();
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
                    $author = Func::sort($authors,$sort);
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

    public function author_detail_book($id){
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $model = book::where('author_id',$id)->where('publishing_date','<',date('y-m-d'));
            $model = Func::sort($model,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $model,
                'list' => $list
            ]);
        }

        $author_book = book::where('author_id',$id)->where('publishing_date','<',date('y-m-d'))->paginate(5);
        $cate_name = author::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $author_book,
             'name' => 'Sách của '.$cate_name ,
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
                    $source_book = Book::where('publisher_id',$list)->where('publishing_date','<',date('y-m-d'))->get();
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
                    $source = Func::sort($sources,$sort);
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

    public function publisher_detail_book($id){
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $model = book::where('publisher_id',$id)->where('publishing_date','<',date('y-m-d'));
            $model = Func::sort($model,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $model,
                'list' => $list
            ]);
        }

        $publisher_book = book::where('publisher_id',$id)->where('publishing_date','<',date('y-m-d'))->paginate(5);
        $cate_name = publisher::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $publisher_book,
             'name' => 'Sách của '.$cate_name ,
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
                    $source_book = Book::where('author_id',$list)->where('publishing_date','<',date('y-m-d'))->get();
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
                    $source = Func::sort($sources,$sort);
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

    public function issuer_detail_book($id){
        if (Request::ajax())
        {
            $limit = Request::get('limit');
            $data = Request::get('data');
            $sort = Request::get('sort');
            $list = Request::get('list');
            $model = book::where('issuer_id',$id)->where('publishing_date','<',date('y-m-d'));
            $model = Func::sort($model,$sort)->paginate($limit);
            return view('front.partials.list_book_item_info_page',[
                'data' => $model,
                'list' => $list
            ]);
        }

        $issuer_book = book::where('issuer_id',$id)->where('publishing_date','<',date('y-m-d'))->paginate(5);
        $cate_name = issuer::where('id',$id)->first()->name;
        return view('front.xemthem',[
            'data' =>  $issuer_book,
             'name' => 'Sách của '.$cate_name ,
        ]);
    }

    public function combo() {
        return view('front.combo');
    }

    public function search() {
        return view('front.timkiem');
    }

    public function customer() {
        if(Request::ajax()){
            $data = Request::get('data'); //tab name
            $limit = Request::get('limit');//user id
            $sort = Request::get('sort');   //id location
            $list = Request::get('list');
            switch ($data) {
                case 'profile':
                    $location = Location::where('user_id',$limit)->get();
                    if ($sort) {
                        Location::where('user_id',$limit)->update(['default'=>0]);
                        Location::where('id',$sort)->update(['default'=>1]);
                        return;
                    }
                    if ($list) {
                        Location::where('id',$list)->delete();
                        return;
                    }

                    return view('front.partials.customer.profile',[
                        'location'  =>  $location
                    ]);
                case 'wallet':
                    return view('front.partials.customer.wallet',[
                        
                    ]);
                case 'rated':
                    return view('front.partials.customer.rated',[
                        
                    ]);
                case 'noti':
                    return view('front.partials.customer.noti',[
                        
                    ]);
                case 'order':
                    return view('front.partials.customer.order',[
                        
                    ]);
                case 'fav':
                    return view('front.partials.customer.fav',[
                        
                    ]);
                default :
                    $sources = DB::table('Issuers');
                    $source = Func::sort($sources,$sort);
                    return view('front.partials.list_item_all',[
                        'data'  =>  $source->paginate(9),
                    ]);
            }
        }
        return view('front.trangcanhan');
    }

    public function checkout() {
        $content = Cart::content();
        return view('front.checkout',[
            'content' => $content
        ]);
    }


    

    
}
