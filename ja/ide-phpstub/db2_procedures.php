/**
 * (PECL ibm_db2 >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.db2-procedures.php
 * @param resource $connection [optional] <p> TODO DESCRIPTION </p>
 * @param string $qualifier [optional] <p> TODO DESCRIPTION </p>
 * @param string $schema [optional] <p> TODO DESCRIPTION </p>
 * @param string $procedure [optional] <p> TODO DESCRIPTION </p>
 * @return resource 指定したパラメータに一致するストアドプロシージャの情報を含む結果セットの
 * ステートメントリソースを返します。
 * 行の内容は、以下のカラムで構成されています。
 * カラム名
 * 説明
 * PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * NUM_INPUT_PARAMS
 * ストアドプロシージャの入力 (IN) パラメータの数。
 * NUM_OUTPUT_PARAMS
 * ストアドプロシージャの出力 (OUT) パラメータの数。
 * NUM_RESULT_SETS
 * ストアドプロシージャが返す結果セットの数。
 * REMARKS
 * ストアドプロシージャのコメント。
 * PROCEDURE_TYPE
 * 常に 1 を返します。これは、
 * ストアドプロシージャが返り値を返さないことを意味します。カラム名
 * 説明
 * PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * NUM_INPUT_PARAMS
 * ストアドプロシージャの入力 (IN) パラメータの数。
 * NUM_OUTPUT_PARAMS
 * ストアドプロシージャの出力 (OUT) パラメータの数。
 * NUM_RESULT_SETS
 * ストアドプロシージャが返す結果セットの数。
 * REMARKS
 * ストアドプロシージャのコメント。
 * PROCEDURE_TYPE
 * 常に 1 を返します。これは、
 * ストアドプロシージャが返り値を返さないことを意味します。カラム名
 * 説明
 * PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * NUM_INPUT_PARAMS
 * ストアドプロシージャの入力 (IN) パラメータの数。
 * NUM_OUTPUT_PARAMS
 * ストアドプロシージャの出力 (OUT) パラメータの数。
 * NUM_RESULT_SETS
 * ストアドプロシージャが返す結果セットの数。
 * REMARKS
 * ストアドプロシージャのコメント。
 * PROCEDURE_TYPE
 * 常に 1 を返します。これは、
 * ストアドプロシージャが返り値を返さないことを意味します。カラム名
 * 説明カラム名
 * 説明カラム名説明PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。
 * PROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。
 * PROCEDURE_NAME
 * プロシージャの名前。
 * NUM_INPUT_PARAMS
 * ストアドプロシージャの入力 (IN) パラメータの数。
 * NUM_OUTPUT_PARAMS
 * ストアドプロシージャの出力 (OUT) パラメータの数。
 * NUM_RESULT_SETS
 * ストアドプロシージャが返す結果セットの数。
 * REMARKS
 * ストアドプロシージャのコメント。
 * PROCEDURE_TYPE
 * 常に 1 を返します。これは、
 * ストアドプロシージャが返り値を返さないことを意味します。PROCEDURE_CAT
 * プロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。PROCEDURE_CATプロシージャを含むカタログ。テーブルがカタログを保持していない場合は NULL。NULLPROCEDURE_SCHEM
 * ストアドプロシージャを含むスキーマの名前。PROCEDURE_SCHEMストアドプロシージャを含むスキーマの名前。PROCEDURE_NAME
 * プロシージャの名前。PROCEDURE_NAMEプロシージャの名前。NUM_INPUT_PARAMS
 * ストアドプロシージャの入力 (IN) パラメータの数。NUM_INPUT_PARAMSストアドプロシージャの入力 (IN) パラメータの数。NUM_OUTPUT_PARAMS
 * ストアドプロシージャの出力 (OUT) パラメータの数。NUM_OUTPUT_PARAMSストアドプロシージャの出力 (OUT) パラメータの数。NUM_RESULT_SETS
 * ストアドプロシージャが返す結果セットの数。NUM_RESULT_SETSストアドプロシージャが返す結果セットの数。REMARKS
 * ストアドプロシージャのコメント。REMARKSストアドプロシージャのコメント。PROCEDURE_TYPE
 * 常に 1 を返します。これは、
 * ストアドプロシージャが返り値を返さないことを意味します。PROCEDURE_TYPE常に 1 を返します。これは、
 * ストアドプロシージャが返り値を返さないことを意味します。1
 */
function db2_procedures($connection, $qualifier, $schema, $procedure) {}