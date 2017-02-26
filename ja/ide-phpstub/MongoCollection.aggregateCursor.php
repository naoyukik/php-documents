/**
 * (PECL mongo >=1.5.0)<br/>
 * @link http://php.net/manual/en/mongocollection.aggregatecursor.php
 * @param array $command [optional] <p> TODO DESCRIPTION </p>
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return MongoCommandCursor Returns a MongoCommandCursor object. Because this
 * implements the Iterator interface you can 
 * iterate over each of the results as returned by the command query. The
 * MongoCommandCursor also implements the
 * MongoCursorInterface interface which adds the
 * MongoCommandCursor::batchSize,
 * MongoCommandCursor::dead,
 * MongoCommandCursor::info methods.MongoCommandCursorIteratorMongoCommandCursorMongoCursorInterfaceMongoCommandCursor::batchSizeMongoCommandCursor::deadMongoCommandCursor::info
 */
function MongoCollection.aggregateCursor($command, $options) {}