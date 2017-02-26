/**
 * (PECL paradox >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.px-get-info.php
 * @param resource $pxdoc [optional] <p> TODO DESCRIPTION </p>
 * @return array paradox ファイルに関する多くの情報を含む連想配列を返します。
 * この配列は、将来的にさらに拡張される予定です。fileversion
 * ファイルのバージョンを 10 倍した値。例えば 70。
 * tablename
 * ファイルに格納されているテーブルの名前。pxlib
 * が作成したデータベースの場合は、
 * ファイル名から拡張子を取り除いたものになります。
 * numrecords
 * このテーブルのレコード数。
 * numfields
 * このテーブルのフィールド数。
 * headersize
 * ヘッダが使用しているバイト数。通常は 0x800。
 * recordsize
 * 各レコードが使用しているバイト数。すべてのフィールドサイズの和です
 * (バージョン 1.4.2 以降で使用可能です)。
 * maxtablesize
 * データブロックのバイト数に 0x400 をかけた値。
 * numdatablocks
 * ファイル内のデータブロック数。各データブロックには
 * 複数のレコードが含まれます。そのレコード数は、
 * レコードサイズおよびデータブロックサイズ (maxtablesize)
 * に依存します。データブロック内が完全にデータで埋め尽くされる必要はありません。
 * numindexfields
 * プライマリインデックスに使用されるフィールドの数。
 * このフィールドは、常にフィールド番号 1 番から始まります。
 * codepage
 * 文字データのフィールドをエンコードするために使用される
 * DOS コードページ。px_set_targetencoding
 * で対象のエンコーディングが指定されていない場合、これが、
 * px_get_record あるいは
 * px_retrieve_record
 * でレコードが関連付けられた際の
 * 文字フィールドのエンコーディングとなります。fileversion
 * ファイルのバージョンを 10 倍した値。例えば 70。fileversionファイルのバージョンを 10 倍した値。例えば 70。ファイルのバージョンを 10 倍した値。例えば 70。tablename
 * ファイルに格納されているテーブルの名前。pxlib
 * が作成したデータベースの場合は、
 * ファイル名から拡張子を取り除いたものになります。tablenameファイルに格納されているテーブルの名前。pxlib
 * が作成したデータベースの場合は、
 * ファイル名から拡張子を取り除いたものになります。ファイルに格納されているテーブルの名前。pxlib
 * が作成したデータベースの場合は、
 * ファイル名から拡張子を取り除いたものになります。numrecords
 * このテーブルのレコード数。numrecordsこのテーブルのレコード数。このテーブルのレコード数。numfields
 * このテーブルのフィールド数。numfieldsこのテーブルのフィールド数。このテーブルのフィールド数。headersize
 * ヘッダが使用しているバイト数。通常は 0x800。headersizeヘッダが使用しているバイト数。通常は 0x800。ヘッダが使用しているバイト数。通常は 0x800。recordsize
 * 各レコードが使用しているバイト数。すべてのフィールドサイズの和です
 * (バージョン 1.4.2 以降で使用可能です)。recordsize各レコードが使用しているバイト数。すべてのフィールドサイズの和です
 * (バージョン 1.4.2 以降で使用可能です)。各レコードが使用しているバイト数。すべてのフィールドサイズの和です
 * (バージョン 1.4.2 以降で使用可能です)。maxtablesize
 * データブロックのバイト数に 0x400 をかけた値。maxtablesizeデータブロックのバイト数に 0x400 をかけた値。データブロックのバイト数に 0x400 をかけた値。numdatablocks
 * ファイル内のデータブロック数。各データブロックには
 * 複数のレコードが含まれます。そのレコード数は、
 * レコードサイズおよびデータブロックサイズ (maxtablesize)
 * に依存します。データブロック内が完全にデータで埋め尽くされる必要はありません。numdatablocksファイル内のデータブロック数。各データブロックには
 * 複数のレコードが含まれます。そのレコード数は、
 * レコードサイズおよびデータブロックサイズ (maxtablesize)
 * に依存します。データブロック内が完全にデータで埋め尽くされる必要はありません。ファイル内のデータブロック数。各データブロックには
 * 複数のレコードが含まれます。そのレコード数は、
 * レコードサイズおよびデータブロックサイズ (maxtablesize)
 * に依存します。データブロック内が完全にデータで埋め尽くされる必要はありません。numindexfields
 * プライマリインデックスに使用されるフィールドの数。
 * このフィールドは、常にフィールド番号 1 番から始まります。numindexfieldsプライマリインデックスに使用されるフィールドの数。
 * このフィールドは、常にフィールド番号 1 番から始まります。プライマリインデックスに使用されるフィールドの数。
 * このフィールドは、常にフィールド番号 1 番から始まります。codepage
 * 文字データのフィールドをエンコードするために使用される
 * DOS コードページ。px_set_targetencoding
 * で対象のエンコーディングが指定されていない場合、これが、
 * px_get_record あるいは
 * px_retrieve_record
 * でレコードが関連付けられた際の
 * 文字フィールドのエンコーディングとなります。codepage文字データのフィールドをエンコードするために使用される
 * DOS コードページ。px_set_targetencoding
 * で対象のエンコーディングが指定されていない場合、これが、
 * px_get_record あるいは
 * px_retrieve_record
 * でレコードが関連付けられた際の
 * 文字フィールドのエンコーディングとなります。文字データのフィールドをエンコードするために使用される
 * DOS コードページ。px_set_targetencoding
 * で対象のエンコーディングが指定されていない場合、これが、
 * px_get_record あるいは
 * px_retrieve_record
 * でレコードが関連付けられた際の
 * 文字フィールドのエンコーディングとなります。px_set_targetencodingpx_get_recordpx_retrieve_record
 */
function px_get_info($pxdoc) {}