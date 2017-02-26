/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.ibase-query.php
 * @param resource $link_identifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param int $bind_args [optional] <p> TODO DESCRIPTION </p>
 * @return resource クエリが失敗した場合、FALSE を返します。成功した場合、
 * (SELECT クエリのような) 結果の行がある場合、結果 ID を返します。
 * クエリが成功し、結果がない場合は TRUE を返します。FALSETRUEPHP 5.0.0 以降では、INSERT・UPDATE・DELETE 文に対してはこの関数は
 * 変更された行数を返します。後方互換性を確保するため、これらの文で
 * クエリが成功したものの 1 行も更新されなかった場合には TRUE
 * を返します。PHP 5.0.0 以降では、INSERT・UPDATE・DELETE 文に対してはこの関数は
 * 変更された行数を返します。後方互換性を確保するため、これらの文で
 * クエリが成功したものの 1 行も更新されなかった場合には TRUE
 * を返します。TRUE
 */
function ibase_query($link_identifier, $query, $bind_args) {}