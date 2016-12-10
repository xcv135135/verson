<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<?php
/**
 * ckip-test-driver.php
 *
 * PHP version 5
 *
 * @category PHP
 * @package  /
 * @author   Fukuball Lin <fukuball@gmail.com>
 * @license  No Licence
 * @version  Release: <1.0>
 * @link     http://fukuball@github.com
 */

require_once "src/CKIPClient.php";

// change to yours
define("CKIP_SERVER", "140.109.19.104");
define("CKIP_PORT", 1501);
define("CKIP_USERNAME", "yancw");
define("CKIP_PASSWORD", "u06jo3");

$ckip_client_obj = new CKIPClient(
   CKIP_SERVER,
   CKIP_PORT,
   CKIP_USERNAME,
   CKIP_PASSWORD
);

$raw_text = "飼老鼠咬布袋！遭綁架撕票的施家金，早年從事網路簽賭百家樂，身價百億，傳出4年前險遭綁架，之後行事低調，出門由專屬司機接送，只是他作夢也沒想到，跟了他5年的司機謝源信，竟夥同另3名歹徒聯手策畫綁架案，橫死他鄉！";

echo  $raw_text ."<br/>";
echo "<br/>";
echo "<br/>";

$return_text = $ckip_client_obj->send($raw_text);
echo $return_text;
echo "<br/>";
echo "<br/>";

$return_sentence = $ckip_client_obj->getSentence();
print_r($return_sentence);
echo "<br/>";
echo "<br/>";

$return_term = $ckip_client_obj->getTerm();
print_r($return_term);

?>