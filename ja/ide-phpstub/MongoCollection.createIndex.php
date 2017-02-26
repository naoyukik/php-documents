/**
 * (PECL mongo >=1.5.0)<br/>
 * @link http://php.net/manual/en/mongocollection.createindex.php
 * @param array $keys [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return bool Returns an array containing the status of the index creation. The array
 * contains whether the operation succeeded ("ok"), the
 * number of indexes before and after the operation
 * ("numIndexesBefore" and
 * "numIndexesAfter"), and whether the collection that the
 * index belongs to has been created
 * ("createdCollectionAutomatically"). If the index already
 * existed and did not need to be created, a "note" field may
 * be present in lieu of "numIndexesAfter"."ok""numIndexesBefore""numIndexesAfter""createdCollectionAutomatically""note""numIndexesAfter"With MongoDB 2.4 and earlier, a status document is only returned if the
 * write concern is at least
 * 1. Otherwise, TRUE is returned. The fields in the status
 * document are different, except for the "ok" field, which
 * signals whether the index creation was successful. Additional fields are
 * described in the documentation for
 * MongoCollection::insert.write concern1TRUE"ok"MongoCollection::insert
 */
function MongoCollection.createIndex($keys, $options = array()) {}