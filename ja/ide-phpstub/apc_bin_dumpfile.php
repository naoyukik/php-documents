/**
 * (PECL apc >= 3.1.4)<br/>
 * @link http://php.net/manual/en/function.apc-bin-dumpfile.php
 * @param array $files [optional] <p> TODO DESCRIPTION </p>
 * @param array $user_vars [optional] <p> TODO DESCRIPTION </p>
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param resource $context [optional] <p> TODO DESCRIPTION </p>
 * @return int The number of bytes written to the file, otherwise
 * FALSE if APC is not enabled, filename is an invalid file name,
 * filename can't be opened, the file dump can't be completed
 * (e.g., the hard drive is out of disk space), or an unknown error was encountered.FALSEfilenamefilename
 */
function apc_bin_dumpfile($files, $user_vars, $filename, $flags, $context = NULL) {}