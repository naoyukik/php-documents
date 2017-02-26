/**
 * (PECL sphinx >= 0.1.0)<br/>
 * @link http://php.net/manual/en/sphinxclient.query.php
 * @param string $query [optional] <p> TODO DESCRIPTION </p>
 * @param string $index [optional] <p> TODO DESCRIPTION </p>
 * @param string $comment [optional] <p> TODO DESCRIPTION </p>
 * @return array On success, SphinxClient::query returns a list of 
 * found matches and additional per-query statistics. The result set is a 
 * hash utilize other structures instead of hash) with the following keys and
 * values:
 * Result set structure
 * Key
 * Value description
 * "matches"
 * An array with found document IDs as keys and their weight and
 * attributes values as values
 * "total"
 * Total number of matches found and retrieved (depends on your
 * settings)
 * "total_found"
 * Total number of found documents matching the query
 * "words"
 * An array with words (case-folded and stemmed) as keys and
 * per-word statistics as values
 * "error"
 * Query error message reported by searchd
 * "warning"
 * Query warning reported by searchdSphinxClient::queryResult set structure
 * Key
 * Value description
 * "matches"
 * An array with found document IDs as keys and their weight and
 * attributes values as values
 * "total"
 * Total number of matches found and retrieved (depends on your
 * settings)
 * "total_found"
 * Total number of found documents matching the query
 * "words"
 * An array with words (case-folded and stemmed) as keys and
 * per-word statistics as values
 * "error"
 * Query error message reported by searchd
 * "warning"
 * Query warning reported by searchdKey
 * Value description
 * "matches"
 * An array with found document IDs as keys and their weight and
 * attributes values as values
 * "total"
 * Total number of matches found and retrieved (depends on your
 * settings)
 * "total_found"
 * Total number of found documents matching the query
 * "words"
 * An array with words (case-folded and stemmed) as keys and
 * per-word statistics as values
 * "error"
 * Query error message reported by searchd
 * "warning"
 * Query warning reported by searchdKey
 * Value descriptionKey
 * Value descriptionKeyValue description"matches"
 * An array with found document IDs as keys and their weight and
 * attributes values as values
 * "total"
 * Total number of matches found and retrieved (depends on your
 * settings)
 * "total_found"
 * Total number of found documents matching the query
 * "words"
 * An array with words (case-folded and stemmed) as keys and
 * per-word statistics as values
 * "error"
 * Query error message reported by searchd
 * "warning"
 * Query warning reported by searchd"matches"
 * An array with found document IDs as keys and their weight and
 * attributes values as values"matches"An array with found document IDs as keys and their weight and
 * attributes values as values"total"
 * Total number of matches found and retrieved (depends on your
 * settings)"total"Total number of matches found and retrieved (depends on your
 * settings)"total_found"
 * Total number of found documents matching the query"total_found"Total number of found documents matching the query"words"
 * An array with words (case-folded and stemmed) as keys and
 * per-word statistics as values"words"An array with words (case-folded and stemmed) as keys and
 * per-word statistics as values"error"
 * Query error message reported by searchd"error"Query error message reported by searchd"warning"
 * Query warning reported by searchd"warning"Query warning reported by searchd
 */
function SphinxClient.query($query, $index = "*", $comment = "") {}