<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * CakePHP Helper
 * @author Loi
 */
App::uses('Product','Model');
App::uses('Country','Model');
App::uses('Smallpacket','Model');
App::uses('Parcel','Model');
App::uses('Combo','Model');
App::uses('Combovalue','Model');
class ToolHelper extends AppHelper {

    public function substr($string, $start, $length) {
        $cut = mb_substr($string, $start, $length, 'UTF-8');
        $str_length = strlen($string);
        if ($str_length > $length) {
            $cut .= '...';
        }
        return $cut;
    }
    
}
