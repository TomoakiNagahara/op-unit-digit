<?php
/** op-unit-digit:/index.php
 *
 * @created   2017-01-19
 * @version   1.0
 * @package   op-unit-digit
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP;

//	Load the Digit class.
require_once(__DIR__."/Digit.class.php");

/**
 *
 * Only ready.
 *
spl_autoload_register(function ($name){
	$path = __DIR__."/{$name}.class.php";
	if( file_exists($path) ){
		include($path);
	}
});
*/