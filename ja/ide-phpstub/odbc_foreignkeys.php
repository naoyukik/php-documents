/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.odbc-foreignkeys.php
 * @param resource $connection_id [optional] <p> TODO DESCRIPTION </p>
 * @param string $pk_qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $pk_owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $pk_table [optional] <p> TODO DESCRIPTION </p>
 * @param string $fk_qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $fk_owner [optional] <p> TODO DESCRIPTION </p>
 * @param string $fk_table [optional] <p> TODO DESCRIPTION </p>
 * @return resource ODBC 結果 ID を返します。失敗した場合に FALSE を返します。FALSE結果は、以下のようなカラムを持つものとなります。
 * PKTABLE_QUALIFIER
 * PKTABLE_OWNER
 * PKTABLE_NAME
 * PKCOLUMN_NAME
 * FKTABLE_QUALIFIER
 * FKTABLE_OWNER
 * FKTABLE_NAME
 * FKCOLUMN_NAME
 * KEY_SEQ
 * UPDATE_RULE
 * DELETE_RULE
 * FK_NAME
 * PK_NAMEPKTABLE_QUALIFIER
 * PKTABLE_OWNER
 * PKTABLE_NAME
 * PKCOLUMN_NAME
 * FKTABLE_QUALIFIER
 * FKTABLE_OWNER
 * FKTABLE_NAME
 * FKCOLUMN_NAME
 * KEY_SEQ
 * UPDATE_RULE
 * DELETE_RULE
 * FK_NAME
 * PK_NAMEPKTABLE_QUALIFIERPKTABLE_QUALIFIERPKTABLE_OWNERPKTABLE_OWNERPKTABLE_NAMEPKTABLE_NAMEPKCOLUMN_NAMEPKCOLUMN_NAMEFKTABLE_QUALIFIERFKTABLE_QUALIFIERFKTABLE_OWNERFKTABLE_OWNERFKTABLE_NAMEFKTABLE_NAMEFKCOLUMN_NAMEFKCOLUMN_NAMEKEY_SEQKEY_SEQUPDATE_RULEUPDATE_RULEDELETE_RULEDELETE_RULEFK_NAMEFK_NAMEPK_NAMEPK_NAMEpk_table がテーブル名を有している場合、
 * odbc_foreignkeys は指定したテーブルの主キー
 * およびそのキーを参照する全ての外部キーのリストを結果として返します。pk_tableodbc_foreignkeysfk_table がテーブル名を有している場合、
 * odbc_foreignkeys は指定したテーブルにある全ての
 * 外部キーおよびそのキーが参照する(他のテーブルの)主キーのリストを
 * 結果として返します。fk_tableodbc_foreignkeyspk_table および
 * fk_table が共にテーブル名を有している場合、
 * odbc_foreignkeys は
 * pk_table で指定されたテーブルの主キーを参照する
 * fk_table で指定されたテーブルの外部キーを返します。
 * 返されるキーは最大でも一つだけです。pk_tablefk_tableodbc_foreignkeyspk_tablefk_table
 */
function odbc_foreignkeys($connection_id, $pk_qualifier, $pk_owner, $pk_table, $fk_qualifier, $fk_owner, $fk_table) {}