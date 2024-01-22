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

//	Include default class.
if(!include(__DIR__."/Digit.class.php")){
	Notice::Set("Include Digit.class.php was failed.");
	return;
}

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