/**
 * (PECL mongo >= 1.5.0)<br/>
 * @link http://php.net/manual/en/mongowritebatch.execute.php
 * @param array $write_options [optional] <p> TODO DESCRIPTION </p>
 * @return array Returns an array containing statistical information for the full batch.
 * If the batch had to be split into multiple batches, the return value will aggregate
 * the values from individual batches and return only the totals.If the batch was empty, an array containing only the 'ok' field is returned (as TRUE) although
 * nothing will be shipped over the wire (NOOP).TRUENOOPArray key
 * Value meaning
 * Returned for batch type
 * nInserted
 * Number of inserted documents
 * MongoWriteBatch::COMMAND_INSERT batch
 * nMatched
 * Number of documents matching the query criteria
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nModified
 * Number of documents actually needed to be modied
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nUpserted
 * Number of upserted documents
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nRemoved
 * Number of documents removed
 * MongoWriteBatch::COMMAND_DELETE batch
 * ok
 * Command success indicator
 * AllArray key
 * Value meaning
 * Returned for batch type
 * nInserted
 * Number of inserted documents
 * MongoWriteBatch::COMMAND_INSERT batch
 * nMatched
 * Number of documents matching the query criteria
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nModified
 * Number of documents actually needed to be modied
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nUpserted
 * Number of upserted documents
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nRemoved
 * Number of documents removed
 * MongoWriteBatch::COMMAND_DELETE batch
 * ok
 * Command success indicator
 * AllArray key
 * Value meaning
 * Returned for batch typeArray key
 * Value meaning
 * Returned for batch typeArray keyValue meaningReturned for batch typenInserted
 * Number of inserted documents
 * MongoWriteBatch::COMMAND_INSERT batch
 * nMatched
 * Number of documents matching the query criteria
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nModified
 * Number of documents actually needed to be modied
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nUpserted
 * Number of upserted documents
 * MongoWriteBatch::COMMAND_UPDATE batch
 * nRemoved
 * Number of documents removed
 * MongoWriteBatch::COMMAND_DELETE batch
 * ok
 * Command success indicator
 * AllnInserted
 * Number of inserted documents
 * MongoWriteBatch::COMMAND_INSERT batchnInsertedNumber of inserted documentsMongoWriteBatch::COMMAND_INSERT batchnMatched
 * Number of documents matching the query criteria
 * MongoWriteBatch::COMMAND_UPDATE batchnMatchedNumber of documents matching the query criteriaMongoWriteBatch::COMMAND_UPDATE batchnModified
 * Number of documents actually needed to be modied
 * MongoWriteBatch::COMMAND_UPDATE batchnModifiedNumber of documents actually needed to be modiedMongoWriteBatch::COMMAND_UPDATE batchnUpserted
 * Number of upserted documents
 * MongoWriteBatch::COMMAND_UPDATE batchnUpsertedNumber of upserted documentsMongoWriteBatch::COMMAND_UPDATE batchnRemoved
 * Number of documents removed
 * MongoWriteBatch::COMMAND_DELETE batchnRemovedNumber of documents removedMongoWriteBatch::COMMAND_DELETE batchok
 * Command success indicator
 * AllokCommand success indicatorAll
 */
function MongoWriteBatch.execute($write_options) {}