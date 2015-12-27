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
class Func extends Eloquent{
    
    static function aaa($model, $colum, $text) {
            switch ($text) {
                case 'new':
                    
                    return $model::orderBy($colum,'ASC');
                case 'name_ASC':
                    
                    return ;
                case 'name_DESC':
                    
                    return ;
                case 'cost_DESC':
                    
                    return ;
                case 'cost_ASC':
                    
                    return ;
                case 'discount_DESC':
                    
                    return ;
                case 'discount_ASC':
                    
                    return ;
                case 'best':
                    
                    return ;   
                default:
                    
                    return ;
            }
        }
}
