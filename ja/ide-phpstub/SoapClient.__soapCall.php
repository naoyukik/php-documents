/**
 * (PHP 5 >= 5.0.1, PHP 7)<br/>
 * @link http://php.net/manual/en/soapclient.soapcall.php
 * @param string $function_name [optional] <p> TODO DESCRIPTION </p>
 * @param array $arguments [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $input_headers [optional] <p> TODO DESCRIPTION </p>
 * @param array $output_headers [optional] <p> TODO DESCRIPTION </p>
 * @return mixed SOAP 関数は、一つまたは複数の値を返す可能性があります。
 * SOAP 関数によって返される値が 1 つだけの場合、__soapCall
 * の返す値は単純な値 (例えば、整数型、文字列など) になります。
 * 複数の値が返される場合、__soapCall
 * は出力パラメータの名前を連想配列として返します。__soapCall__soapCallエラーの場合は、SoapClient オブジェクトの作成時に exceptions
 * オプションが FALSE となっていれば SoapFault オブジェクトを返します。exceptionsFALSE
 */
function SoapClient.__soapCall($function_name, $arguments, $options, $input_headers, $output_headers) {}