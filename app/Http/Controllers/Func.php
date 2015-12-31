<?php 

namespace App\Http\Controllers;

class Func {

    static public function sort($model ,$text) {
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
}