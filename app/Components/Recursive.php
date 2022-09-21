<?php

namespace App\Components;

class Recursive {
    static private $result = '';
    
    static function recursiveCategory($data, $parent_id = '', $id = 0, $text = '') {
        foreach ($data as $value) {
            if ($value['parent_id'] == $id) {
                if( !empty( $parent_id ) && $parent_id == $value['id'] ){
                    Recursive::$result .= "<option selected value=" . $value['id'] . ">" . $text.$value['name'] . "</option>";
                }else{
                    Recursive::$result .= "<option value=" . $value['id'] . ">" . $text.$value['name'] . "</option>";
                }
                Recursive::recursiveCategory($data, $parent_id, $value['id'], $text . '&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp');
            }
        }
        return Recursive::$result;
    }
}
