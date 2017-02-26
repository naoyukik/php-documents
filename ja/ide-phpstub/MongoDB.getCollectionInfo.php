/**
 * (PECL mongo >=1.6.0)<br/>
 * @link http://php.net/manual/en/mongodb.getcollectioninfo.php
 * @param array $options [optional] <p> TODO DESCRIPTION </p>
 * @return array This function returns an array where each element is an array describing a
 * collection. Elements will contain a name key denoting the
 * name of the collection, and optionally contain an options
 * key denoting an array of objects used to create the collection. For example,
 * capped collections will include capped and
 * size options.nameoptionscappedsize
 */
function MongoDB.getCollectionInfo($options = array()) {}