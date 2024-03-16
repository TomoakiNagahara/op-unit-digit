<?php
/** op-unit-digit:/ci/Digit.php
 *
 * @created    2024-03-16
 * @version    1.0
 * @package    op-unit-digit
 * @author     Tomoaki Nagahara <tomoaki.nagahara@gmail.com>
 * @copyright  Tomoaki Nagahara All right reserved.
 */

/** namespace
 *
 */
namespace OP\UNIT\DIGIT;


/* @var $ci \OP\UNIT\CI */
$ci = new \OP\UNIT\CI;

//	...
$method = 'is64bit';
$result =  true;
$args = [];
$ci->Set($method, $result, $args);

//	...
$method = 'toBinary';
$result = '0111';
$args = ['7', '4'];
$ci->Set($method, $result, $args);

//	...
$method = 'toBinary';
$result = '01111110';
$args = ['126', '8'];
$ci->Set($method, $result, $args);

//	...
return $ci->GenerateConfig();
