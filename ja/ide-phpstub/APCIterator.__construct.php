/**
 * (PECL apc >= 3.1.1)<br/>
 * @link http://php.net/manual/en/apciterator.construct.php
 * @param string $cache [optional] <p> TODO DESCRIPTION </p>
 * @param mixed $search [optional] <p> TODO DESCRIPTION </p>
 * @param int $format [optional] <p> TODO DESCRIPTION </p>
 * @param int $chunk_size [optional] <p> TODO DESCRIPTION </p>
 * @param int $list [optional] <p> TODO DESCRIPTION </p>
 * @return  成功した場合に APCIterator オブジェクト、
 * 失敗した場合に NULL を返します。APCIteratorNULL
 */
function APCIterator.__construct($cache, $search = null, $format = APC_ITER_ALL, $chunk_size = 100, $list = APC_LIST_ACTIVE) {}