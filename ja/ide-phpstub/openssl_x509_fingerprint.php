/**
 * (PHP 5.6, PHP 7)<br/>
 * @link http://php.net/manual/en/function.openssl-x509-fingerprint.php
 * @param mixed $x509 [optional] <p> TODO DESCRIPTION </p>
 * @param string $hash_algorithm [optional] <p> TODO DESCRIPTION </p>
 * @param bool $raw_output [optional] <p> TODO DESCRIPTION </p>
 * @return bool Returns a string containing the calculated certificate fingerprint as lowercase hexits unless raw_output is set to TRUE in which case the raw binary representation of the message digest is returned.raw_outputTRUEReturns FALSE on failure.FALSE
 */
function openssl_x509_fingerprint($x509, $hash_algorithm = "sha1", $raw_output) {}