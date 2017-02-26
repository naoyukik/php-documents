/**
 * (PHP 4 >= 4.2.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ini-get-all.php
 * @param string $extension [optional] <p> TODO DESCRIPTION </p>
 * @param bool $details [optional] <p> TODO DESCRIPTION </p>
 * @return array ディレクティブ名をキーとする連想配列を返します。details が TRUE (デフォルト) の場合、
 * 配列の値は、
 * global_value (php.iniで設定されている)、
 * local_value (おそらくini_setまたは
 * .htaccessでセットされている)、access (アクセスレベル)
 * を含む配列となります。detailsTRUEglobal_valuephp.inilocal_valueini_set.htaccessaccessdetails が FALSE の場合、
 * 配列の値はそのオプションの現在の値となります。detailsFALSEアクセスレベルの意味についてはマニュアルを参照ください。マニュアルひとつのディレクティブに複数のアクセスレベルを設定することができます。
 * access がビットマスク値となっているのはそのためです。ひとつのディレクティブに複数のアクセスレベルを設定することができます。
 * access がビットマスク値となっているのはそのためです。access
 */
function ini_get_all($extension, $details = true) {}