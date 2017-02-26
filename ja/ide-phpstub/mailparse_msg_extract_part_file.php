/**
 * (PECL mailparse >= 0.9.0)<br/>
 * @link http://php.net/manual/en/function.mailparse-msg-extract-part-file.php
 * @param resource $mimemail [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $filename [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callbackfunc [optional] <p> TODO DESCRIPTION </p>
 * @return string callbackfunc が NULL でない場合は、
 * 成功時に TRUE を返します。callbackfuncNULLTRUEcallbackfunc が NULL の場合は、
 * 展開したセクションを文字列で返します。callbackfuncNULLエラー時には FALSE を返します。FALSE
 */
function mailparse_msg_extract_part_file($mimemail, $filename, $callbackfunc) {}