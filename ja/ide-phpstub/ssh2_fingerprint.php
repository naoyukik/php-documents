/**
 * (PECL ssh2 >= 0.9.0)<br/>
 * @link http://php.net/manual/en/function.ssh2-fingerprint.php
 * @param resource $session [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @return string ホストキーのハッシュを文字列で返します。
 */
function ssh2_fingerprint($session, $flags = SSH2_FINGERPRINT_MD5 | SSH2_FINGERPRINT_HEX) {}