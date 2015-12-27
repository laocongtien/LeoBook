<?php

namespace App\Http\Controllers;

use Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cart, App\Book;
use Input;



class AjaxController extends Controller
{
    public function buy() {
        if(Request::ajax()){
            $id = Request::get('id');
            $qty = Request::get('qty');
            $book = book::where('id',$id)->first();
            $price = $book->price - $book->price * $book->discount /100;
            Cart::add([
                'id'=>$id,
                'name' => $book->name,
                'qty' => $qty,
                'price' => $price,
                'options' => ['image' => $book->image]
            ]);
            $cart = '';
            //print_r(Cart::content()->toArray()) ;
            foreach (Cart::content() as $item) {
                $cart = $cart.'
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
            $data = [
            	'cart' => $cart,
            	'total' => Cart::total()
            ];
            return $data;
        }else
        return redirect()->route('home.index');
    }

    public function delete() {
        if(Request::ajax()){
            $id = Request::get('rowid');
            $book_id = Cart::get($id);
            Cart::remove($id);
            $data = [
            	'id' => $book_id,
            	'total' => Cart::total()
            ];
            return $data;
        }else
        return redirect()->route('home.index');
    }

    public function update() {
        if(Request::ajax()){
            $id = Request::get('rowid');
            $qty = Request::get('qty');
            Cart::update($id,['qty'=>$qty]);
            return (Cart::total());
            // $member = array('
            // 	username' => 'phucvh',
            // 	'password' => '123456',
            // 	'email' => 'ahoangphuc@gmail.com'
            // 	);
    	   //echo json_encode($member);
            //echo (json_encode(Cart::content()));
        }else
        return redirect()->route('home.index');

    }
    public function getAuthor(){
        if(Request::ajax()){
        $author_list = Author::orderBy('name','ASC')->paginate(9);
        }
    }
}
