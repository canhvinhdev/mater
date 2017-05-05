<?php

App::uses('Component', 'Controller');
App::import(array('Security'));
App::uses('Combo', 'Model');
App::uses('Combovalue','Model');
App::uses('Param','Model');
class ToolComponent extends Component
{
	public function stripUnicode($string)
    {
        $unicode = array(
            'a' => 'à|á|ạ|ả|ã|â|ầ|ấ|ậ|ẩ|ẫ|ă|ằ|ắ|ặ|ẳ|ẵ|Á|À|Ả|Ã|Ạ|Ă|Ắ|Ặ|Ằ|Ẳ|Ẵ|Â|Ấ|Ầ|Ẩ|Ẫ|Ậ',
            'd' => 'đ|Đ',
            'e' => 'è|é|ẹ|ẻ|ẽ|ê|ề|ế|ệ|ể|ễ|É|È|Ẻ|Ẽ|Ẹ|Ê|Ế|Ề|Ể|Ễ|Ệ',
            'i' => 'ì|í|ị|ỉ|ĩ|Í|Ì|Ỉ|Ĩ|Ị',
            'o' => 'ò|ó|ọ|ỏ|õ|ô|ồ|ố|ộ|ổ|ỗ|ơ|ờ|ớ|ợ|ở|ỡ|Ó|Ò|Ỏ|Õ|Ọ|Ô|Ố|Ồ|Ổ|Ỗ|Ộ|Ơ|Ớ|Ờ|Ở|Ỡ|Ợ',
            'u' => 'ù|ú|ụ|ủ|ũ|ư|ừ|ứ|ự|ử|ữ|Ù|Ú|Ụ|Ủ|Ũ|Ư|Ừ|Ứ|Ự|Ử|Ữ',
            'y' => 'ỳ|ý|ỵ|ỷ|ỹ|Ỳ|Ý|Ỵ|Ỷ|Ỹ'
        );
        foreach ($unicode as $nonUnicode => $uni) {
            $string = preg_replace("/($uni)/", $nonUnicode, $string);
        }
        return $string;
        //exit;
    }
	public function slug($string, $character = '-')
    {
        $string = $this->stripUnicode($string);
        APP::uses('Inflector', 'Utility');
        $string = Inflector::slug($string, $character);
        return strtolower($string);
    }
    public function substr($string, $start, $length) {
        $cut = mb_substr($string, $start, $length, 'UTF-8');
        $str_length = strlen($string);
        if ($str_length > $length) {
            $cut .= '...';
        }
        return $cut;
    }
}