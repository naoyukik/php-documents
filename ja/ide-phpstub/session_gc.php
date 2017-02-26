/**
 * @link http://php.net/manual/en/function.session-gc.php
 * @return int session_gc returns number of deleted session
 * data for success, FALSE for failure.session_gcFALSEOld save handlers do not return number of deleted session data, but 
 * only success/failure flag. If this is the case, number of deleted
 * session data became 1 regardless of actually deleted data.
 */
function session_gc() {}