<?php
/** op-unit-digit:/Digit.class.php
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
namespace OP\UNIT;

/** Digit
 *
 * @created   2017-01-19
 * @version   1.0
 * @package   op-unit-digit
 * @author    Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright Tomoaki Nagahara All right reserved.
 */
class Digit
{
	/** trait
	 *
	 */
	use OP_CORE;

	/** Checking to whether is 64 bit CPU (bit of memory).
	 *
	 * @return boolean
	 */
	static function is64bit()
	{
		return intval("9223372036854775807") === 9223372036854775807 ? true: false;
	}

	/** Convert to easy to readable binary string.
	 *
	 * @param  integer $int
	 * @param  integer $bit Number of digits
	 * @return string
	 */
	static function toBinary($int, $bit)
	{
		if(!$bit){
			$bit = self::is64bit() ? 64: 32;
		}
		$str = decbin($int);
		return str_pad($str, $bit, 0, STR_PAD_LEFT);
	}
}