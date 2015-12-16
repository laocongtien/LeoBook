<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Cart, App\Book;



class AjaxController extends Controller
{
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
    }

    public function delete($id) {
        $book_id = Cart::get($id);
        Cart::remove($id);
        $data = [
        	'id' => $book_id,
        	'total' => Cart::total()
        ];
        return $data;
    }

    public function update($id,$qty) {
        // Cart::update($id,['qty'=>$qty]);
        // echo (Cart::total());
        $member = array('
        	username' => 'phucvh',
        	'password' => '123456',
        	'email' => 'ahoangphuc@gmail.com'
        	);
	   //echo json_encode($member);
        echo (json_encode(Cart::content()));
    }
}
