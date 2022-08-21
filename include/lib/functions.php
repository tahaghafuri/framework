<?php if(stristr($_SERVER['PHP_SELF'],basename(__file__))){exit(header("Location: /"));}
// Not Empty Function
function not_empty($var) {
    if(!empty($var)){
        $r=false;
    }else{
        $r=true;
    }
    return !empty($var);
}
// Clean Function
function clean($text){
    $text=trim($text);
	if(not_empty($text)) {
	    $text=str_replace('/','',$text);
	    $text=str_replace('*','',$text);
	    $text=str_replace('+','',$text);
	    $text=str_replace('-',' ',$text);
	    $text=str_replace('_',' ',$text);
	    $text=str_replace('=','',$text);
	    $text=str_replace('`','',$text);
	    $text=str_replace('"','',$text);
	    $text=str_replace("'",'',$text);
	    $text=str_replace('!','',$text);
	    $text=str_replace('~','',$text);
	    $text=str_replace('@','',$text);
	    $text=str_replace('#','',$text);
	    $text=str_replace('$','',$text);
	    $text=str_replace('%','',$text);
	    $text=str_replace('^','',$text);
	    $text=str_replace('&','',$text);
	    $text=str_replace(')','',$text);
	    $text=str_replace('(','',$text);
	    $text=str_replace('|','',$text);
	    $text=str_replace('{','',$text);
	    $text=str_replace('}','',$text);
	    $text=str_replace('[','',$text);
	    $text=str_replace(']','',$text);
	    $text=str_replace(':','',$text);
	    $text=str_replace(';','',$text);
	    $text=str_replace('?','',$text);
		$text=str_replace('؟','',$text);
		$text=str_replace('،','',$text);
		$text=str_replace('؛','',$text);
	    $text=str_replace('<','',$text);
	    $text=str_replace('>','',$text);
	    $text=str_replace(',','',$text);
		$text=str_replace(' ','',$text);
	    $text=str_replace('.','',$text);
		$text=str_replace('insert','',$text);
		$text=str_replace('into','',$text);
		$text=str_replace('limit','',$text);
		$text=str_replace('offset','',$text);
		$text=str_replace('select','',$text);
	    $text=str_replace('from','',$text);
	    $text=str_replace('delete','',$text);
        $text=str_replace('where','',$text);
	    $text=str_replace('update','',$text);
		$text=str_replace('set','',$text);
	    $r=stripslashes(trim($text));
	}else{
        $r=err('clean function inputs cannot be empty!');
	}
	return $r;
}
// URL Function
function url_clean($text){
    $text=trim($text);
	if(not_empty($text)) {
	    $text=str_replace('/','',$text);
	    $text=str_replace('*','',$text);
	    $text=str_replace('+','',$text);
	    $text=str_replace('-',' ',$text);
	    $text=str_replace('_',' ',$text);
	    $text=str_replace('=','',$text);
	    $text=str_replace('`','',$text);
	    $text=str_replace('"','',$text);
	    $text=str_replace("'",'',$text);
	    $text=str_replace('!','',$text);
	    $text=str_replace('~','',$text);
	    $text=str_replace('@','',$text);
	    $text=str_replace('#','',$text);
	    $text=str_replace('$','',$text);
	    $text=str_replace('%','',$text);
	    $text=str_replace('^','',$text);
	    $text=str_replace('&','',$text);
	    $text=str_replace(')','',$text);
	    $text=str_replace('(','',$text);
	    $text=str_replace('|','',$text);
	    $text=str_replace('{','',$text);
	    $text=str_replace('}','',$text);
	    $text=str_replace('[','',$text);
	    $text=str_replace(']','',$text);
	    $text=str_replace(':','',$text);
	    $text=str_replace(';','',$text);
	    $text=str_replace('?','',$text);
		$text=str_replace('؟','',$text);
		$text=str_replace('،','',$text);
		$text=str_replace('؛','',$text);
	    $text=str_replace('<','',$text);
	    $text=str_replace('>','',$text);
	    $text=str_replace(',','',$text);
		$text=str_replace(' ','',$text);
	    $text=str_replace('.','',$text);
	    $r=stripslashes(trim($text));
	}else{
        $r=err('url_clean function inputs cannot be empty!');
	}
	return $r;
}
// FClean Function
function f_clean($text){
    $text=trim($text);
	if(not_empty($text)) {
	    $text=str_replace('/','',$text);
	    $text=str_replace('*','',$text);
	    $text=str_replace('+','',$text);
	    $text=str_replace('-',' ',$text);
	    $text=str_replace('_',' ',$text);
	    $text=str_replace('=','',$text);
	    $text=str_replace('`','',$text);
	    $text=str_replace('"','',$text);
	    $text=str_replace("'",'',$text);
	    $text=str_replace('!','',$text);
	    $text=str_replace('~','',$text);
	    $text=str_replace('@','',$text);
	    $text=str_replace('#','',$text);
	    $text=str_replace('$','',$text);
	    $text=str_replace('%','',$text);
	    $text=str_replace('^','',$text);
	    $text=str_replace('&','',$text);
	    $text=str_replace(')','',$text);
	    $text=str_replace('(','',$text);
	    $text=str_replace('|','',$text);
	    $text=str_replace('{','',$text);
	    $text=str_replace('}','',$text);
	    $text=str_replace('[','',$text);
	    $text=str_replace(']','',$text);
	    $text=str_replace(':','',$text);
	    $text=str_replace(';','',$text);
	    $text=str_replace('?','',$text);
		$text=str_replace('؟','',$text);
		$text=str_replace('،','',$text);
		$text=str_replace('؛','',$text);
	    $text=str_replace('<','',$text);
	    $text=str_replace('>','',$text);
	    $text=str_replace(',','',$text);
		$text=str_replace(' ','',$text);
	    $text=str_replace('.','',$text);
		$text=str_replace('insert','',$text);
		$text=str_replace('into','',$text);
		$text=str_replace('limit','',$text);
		$text=str_replace('offset','',$text);
		$text=str_replace('select','',$text);
	    $text=str_replace('from','',$text);
	    $text=str_replace('delete','',$text);
        $text=str_replace('where','',$text);
	    $text=str_replace('update','',$text);
		$text=str_replace('set','',$text);
	    $r=stripslashes($text);
	}else{
        $r=err('f_clean function inputs cannot be empty!');
	}
	return $r;
}
// Email Clean Function
function mail_clean($text){
    $text=trim($text);
	if(not_empty($text)) {
	    $text=str_replace('/','',$text);
	    $text=str_replace('*','',$text);
	    $text=str_replace('+','',$text);
	    $text=str_replace('=','',$text);
	    $text=str_replace('`','',$text);
	    $text=str_replace('"','',$text);
	    $text=str_replace("'",'',$text);
	    $text=str_replace('!','',$text);
	    $text=str_replace('~','',$text);
	    $text=str_replace('#','',$text);
	    $text=str_replace('$','',$text);
	    $text=str_replace('%','',$text);
	    $text=str_replace('^','',$text);
	    $text=str_replace('&','',$text);
	    $text=str_replace(')','',$text);
	    $text=str_replace('(','',$text);
	    $text=str_replace('|','',$text);
	    $text=str_replace('{','',$text);
	    $text=str_replace('}','',$text);
	    $text=str_replace('[','',$text);
	    $text=str_replace(']','',$text);
	    $text=str_replace(':','',$text);
	    $text=str_replace(';','',$text);
	    $text=str_replace('?','',$text);
		$text=str_replace('؟','',$text);
		$text=str_replace('،','',$text);
		$text=str_replace('؛','',$text);
	    $text=str_replace('<','',$text);
	    $text=str_replace('>','',$text);
	    $text=str_replace(',','',$text);
		$text=str_replace(' ','',$text);
		$text=str_replace('insert','',$text);
		$text=str_replace('into','',$text);
		$text=str_replace('limit','',$text);
		$text=str_replace('offset','',$text);
        $text=str_replace('select','',$text);
	    $text=str_replace('from','',$text);
	    $text=str_replace('delete','',$text);
        $text=str_replace('where','',$text);
	    $text=str_replace('update','',$text);
	    $text=str_replace('set','',$text);
	    $r=stripslashes(trim($text));
	}else{
        $r=err('main_clean function inputs cannot be empty!');
	}
	return $r;
}
// Err Function
function err($name) {
    if(not_empty($name)) {
        return trigger_error($name,E_USER_ERROR);
    }else{
        return trigger_error('err function input cannot be empty!',E_USER_ERROR);
    }
}
// Redirect Function
function redirect($go) {
    if(not_empty($go) && $go != 10) {
        $r=header('Location: '.$go);
    }else{
        $r=null;
    }
    return $r;
}
// MB Word Count
function mb_str_word_count($str='ERR',$f=0) {
	if (empty($str) || $str == 'ERR') {
		return err("Error, value can't be empty!");
	} else {
            $as = explode(" ", $str);

            switch ($f) {
                case 0:
                    $r = count($as);
                    break;
                case 1:
                case 2:
                    $r = array_values($as);
                    break;
                default:
                    $r = err("The format can only contain 0, 1 and 2!");
                    break;
            }

            return $r;
	}
}
// Upload Function
function upload($file,$path) {
    if(not_empty($file,$path)){
		if(move_uploaded_file($file['tmp_name'],$path)){
			$r=true;
		}else{
			$r=false;
		}
    }else{
        $r=false;
    }
    return $r;
}
// URL
$_SERVER['url']=$_SERVER["REQUEST_SCHEME"].'://'.$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
//IP
$_SERVER['ip']=$_SERVER['REMOTE_ADDR'];
// DS
define('DS',DIRECTORY_SEPARATOR); ?>