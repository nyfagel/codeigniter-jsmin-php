<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

if ( ! function_exists('minifyjs')) {
	function minifyjs($js) {
		require_once dirname(__FILE__).'../libraries/JSMin.php';
		$jsmin = new JSMin($js);
		return $jsmin->min();
	}
}

?>
