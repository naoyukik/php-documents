/**
 * (PHP 4 >= 4.3.0, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.stream-select.php
 * @param array $read [optional] <p> TODO DESCRIPTION </p>
 * @param array $write [optional] <p> TODO DESCRIPTION </p>
 * @param array $except [optional] <p> TODO DESCRIPTION </p>
 * @param int $tv_sec [optional] <p> TODO DESCRIPTION </p>
 * @param int $tv_usec [optional] <p> TODO DESCRIPTION </p>
 * @return int 成功した場合 stream_select は、変更された
 * 配列に何個のストリームリソースが格納されたかを示す数を返します。
 * もしタイムアウトの時間内に何も規定された事象が起こらなかった場合は
 * 0 になることもあります。エラーの際は FALSE を返し、警告を発生させます
 * （システムコールが別のシグナルによって中断された場合などに起こりえます）。stream_selectFALSE
 */
function stream_select($read, $write, $except, $tv_sec, $tv_usec) {}