<?php 
 function aaa($model, $colum, $text) {
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
