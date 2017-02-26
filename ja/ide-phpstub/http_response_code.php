/**
 * (PHP 5 >= 5.4.0, PHP 7)<br/>
 * @link http://php.net/manual/en/function.http-response-code.php
 * @param int $response_code [optional] <p> TODO DESCRIPTION </p>
 * @return mixed response_code を指定した場合は、変更前に設定されていたステータスコードを返します。
 * response_code を省略した場合は、現在のステータスコードを返します。
 * どちらの場合でも、Web サーバー環境におけるデフォルトのステータスコードは
 * 200 です。response_coderesponse_code200response_code が省略されており、
 * かつ Web サーバー環境以外 (CLI アプリケーションなど) で実行した場合には、FALSE を返します。
 * response_code を指定して、
 * かつ Web サーバー環境以外 (CLI アプリケーションなど) で実行した場合
 * (ただし、事前にレスポンスのステータスが設定されていない場合に限る) には、TRUE を返します。response_codeFALSEresponse_codeTRUE
 */
function http_response_code($response_code) {}