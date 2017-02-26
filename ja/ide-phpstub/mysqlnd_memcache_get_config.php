/**
 * (PECL mysqlnd_memcache >= 1.0.0)<br/>
 * @link http://php.net/manual/en/function.mysqlnd-memcache-get-config.php
 * @param mixed $connection [optional] <p> TODO DESCRIPTION </p>
 * @return array 成功した場合に mysqlnd_memcache の設定情報の配列、それ以外の場合に FALSE を返します。FALSE返される配列にはこれらの要素が含まれます。mysqlnd_memcache_get_config が返す配列の構造
 * 配列のキー
 * 説明
 * memcached
 * この MySQL 接続に
 * mysqlnd_memcache_set で関連づけた Memcached のインスタンス。
 * これを使って memcache 接続の設定を変更することもできるし、
 * この接続上のサーバーに直接問い合わせて設定を変更することもできます。
 * pattern
 * サーバーに送信された SQL クエリーにマッチさせるための PCRE 正規表現。
 * このパターンにマッチするクエリーをさらに分析し、
 * そのクエリーを横取りして memcache インターフェイスに送るのか
 * 普通の MySQL プロトコルでサーバーに送るのかを判断します。
 * デフォルトのパターン (MYSQLND_MEMCACHE_DEFAULT_REGEXP)
 * を使うか、あるいは mysqlnd_memcache_set でパターンを設定します。
 * mappings
 * プラグイン側から探す、すべての設定済みコンテナの一覧を含む連想配列。
 * 要素のキーが、MySQL の設定内のコンテナ名になります。
 * その値については後で説明します。このフィールドの中身を作るには、
 * mysqlnd_memcache_set
 * で MySQL と memcache の接続を関連づけるときに
 * MySQL Server に問い合わせます。
 * mapping_query
 * mysqlnd_memcache_set
 * で、利用可能なコンテナとマッピングを識別するときに使う SQL クエリー。
 * このクエリーの結果を mappings 要素に渡します。
 * mappings エントリの構造
 * 配列のキー
 * 説明
 * prefix
 * memcache 経由でデータにアクセスするときに使うプレフィックス。
 * MySQL InnoDB Memcache Deamon プラグインの場合、通常は @@
 * で始まって、最後は変更可能なセパレータになります。
 * このプレフィックスは、memcache プロトコルを使うときにキーの値の前に置かれます。
 * schema_name
 * アクセスするテーブルを含むスキーマ (データベース) の名前。
 * table_name
 * memcache プロトコルでアクセス可能なデータを含むテーブルの名前。
 * id_field_name
 * memcache 経由でテーブルにアクセスするときに、キーとして使う id が含まれるフィールド
 * (カラム) の名前。たいていは、主キーが設定されているフィールドとなります。
 * separator
 * フィールドの値を分割するときに使うセパレータ。
 * memcache が単一の値にしかアクセスできないのに対して
 * MySQL は複数のカラムをこの値に押し込めることができるので、
 * このセパレータが必要になります。
 * セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。
 * fields
 * このマッピングで利用可能なすべてのフィールド名の配列。mysqlnd_memcache_get_config が返す配列の構造
 * 配列のキー
 * 説明
 * memcached
 * この MySQL 接続に
 * mysqlnd_memcache_set で関連づけた Memcached のインスタンス。
 * これを使って memcache 接続の設定を変更することもできるし、
 * この接続上のサーバーに直接問い合わせて設定を変更することもできます。
 * pattern
 * サーバーに送信された SQL クエリーにマッチさせるための PCRE 正規表現。
 * このパターンにマッチするクエリーをさらに分析し、
 * そのクエリーを横取りして memcache インターフェイスに送るのか
 * 普通の MySQL プロトコルでサーバーに送るのかを判断します。
 * デフォルトのパターン (MYSQLND_MEMCACHE_DEFAULT_REGEXP)
 * を使うか、あるいは mysqlnd_memcache_set でパターンを設定します。
 * mappings
 * プラグイン側から探す、すべての設定済みコンテナの一覧を含む連想配列。
 * 要素のキーが、MySQL の設定内のコンテナ名になります。
 * その値については後で説明します。このフィールドの中身を作るには、
 * mysqlnd_memcache_set
 * で MySQL と memcache の接続を関連づけるときに
 * MySQL Server に問い合わせます。
 * mapping_query
 * mysqlnd_memcache_set
 * で、利用可能なコンテナとマッピングを識別するときに使う SQL クエリー。
 * このクエリーの結果を mappings 要素に渡します。mysqlnd_memcache_get_config配列のキー
 * 説明
 * memcached
 * この MySQL 接続に
 * mysqlnd_memcache_set で関連づけた Memcached のインスタンス。
 * これを使って memcache 接続の設定を変更することもできるし、
 * この接続上のサーバーに直接問い合わせて設定を変更することもできます。
 * pattern
 * サーバーに送信された SQL クエリーにマッチさせるための PCRE 正規表現。
 * このパターンにマッチするクエリーをさらに分析し、
 * そのクエリーを横取りして memcache インターフェイスに送るのか
 * 普通の MySQL プロトコルでサーバーに送るのかを判断します。
 * デフォルトのパターン (MYSQLND_MEMCACHE_DEFAULT_REGEXP)
 * を使うか、あるいは mysqlnd_memcache_set でパターンを設定します。
 * mappings
 * プラグイン側から探す、すべての設定済みコンテナの一覧を含む連想配列。
 * 要素のキーが、MySQL の設定内のコンテナ名になります。
 * その値については後で説明します。このフィールドの中身を作るには、
 * mysqlnd_memcache_set
 * で MySQL と memcache の接続を関連づけるときに
 * MySQL Server に問い合わせます。
 * mapping_query
 * mysqlnd_memcache_set
 * で、利用可能なコンテナとマッピングを識別するときに使う SQL クエリー。
 * このクエリーの結果を mappings 要素に渡します。配列のキー
 * 説明配列のキー
 * 説明配列のキー説明memcached
 * この MySQL 接続に
 * mysqlnd_memcache_set で関連づけた Memcached のインスタンス。
 * これを使って memcache 接続の設定を変更することもできるし、
 * この接続上のサーバーに直接問い合わせて設定を変更することもできます。
 * pattern
 * サーバーに送信された SQL クエリーにマッチさせるための PCRE 正規表現。
 * このパターンにマッチするクエリーをさらに分析し、
 * そのクエリーを横取りして memcache インターフェイスに送るのか
 * 普通の MySQL プロトコルでサーバーに送るのかを判断します。
 * デフォルトのパターン (MYSQLND_MEMCACHE_DEFAULT_REGEXP)
 * を使うか、あるいは mysqlnd_memcache_set でパターンを設定します。
 * mappings
 * プラグイン側から探す、すべての設定済みコンテナの一覧を含む連想配列。
 * 要素のキーが、MySQL の設定内のコンテナ名になります。
 * その値については後で説明します。このフィールドの中身を作るには、
 * mysqlnd_memcache_set
 * で MySQL と memcache の接続を関連づけるときに
 * MySQL Server に問い合わせます。
 * mapping_query
 * mysqlnd_memcache_set
 * で、利用可能なコンテナとマッピングを識別するときに使う SQL クエリー。
 * このクエリーの結果を mappings 要素に渡します。memcached
 * この MySQL 接続に
 * mysqlnd_memcache_set で関連づけた Memcached のインスタンス。
 * これを使って memcache 接続の設定を変更することもできるし、
 * この接続上のサーバーに直接問い合わせて設定を変更することもできます。memcachedこの MySQL 接続に
 * mysqlnd_memcache_set で関連づけた Memcached のインスタンス。
 * これを使って memcache 接続の設定を変更することもできるし、
 * この接続上のサーバーに直接問い合わせて設定を変更することもできます。mysqlnd_memcache_setpattern
 * サーバーに送信された SQL クエリーにマッチさせるための PCRE 正規表現。
 * このパターンにマッチするクエリーをさらに分析し、
 * そのクエリーを横取りして memcache インターフェイスに送るのか
 * 普通の MySQL プロトコルでサーバーに送るのかを判断します。
 * デフォルトのパターン (MYSQLND_MEMCACHE_DEFAULT_REGEXP)
 * を使うか、あるいは mysqlnd_memcache_set でパターンを設定します。patternサーバーに送信された SQL クエリーにマッチさせるための PCRE 正規表現。
 * このパターンにマッチするクエリーをさらに分析し、
 * そのクエリーを横取りして memcache インターフェイスに送るのか
 * 普通の MySQL プロトコルでサーバーに送るのかを判断します。
 * デフォルトのパターン (MYSQLND_MEMCACHE_DEFAULT_REGEXP)
 * を使うか、あるいは mysqlnd_memcache_set でパターンを設定します。MYSQLND_MEMCACHE_DEFAULT_REGEXPmysqlnd_memcache_setmappings
 * プラグイン側から探す、すべての設定済みコンテナの一覧を含む連想配列。
 * 要素のキーが、MySQL の設定内のコンテナ名になります。
 * その値については後で説明します。このフィールドの中身を作るには、
 * mysqlnd_memcache_set
 * で MySQL と memcache の接続を関連づけるときに
 * MySQL Server に問い合わせます。mappingsプラグイン側から探す、すべての設定済みコンテナの一覧を含む連想配列。
 * 要素のキーが、MySQL の設定内のコンテナ名になります。
 * その値については後で説明します。このフィールドの中身を作るには、
 * mysqlnd_memcache_set
 * で MySQL と memcache の接続を関連づけるときに
 * MySQL Server に問い合わせます。mysqlnd_memcache_setmapping_query
 * mysqlnd_memcache_set
 * で、利用可能なコンテナとマッピングを識別するときに使う SQL クエリー。
 * このクエリーの結果を mappings 要素に渡します。mapping_querymysqlnd_memcache_set
 * で、利用可能なコンテナとマッピングを識別するときに使う SQL クエリー。
 * このクエリーの結果を mappings 要素に渡します。mysqlnd_memcache_setmappings エントリの構造
 * 配列のキー
 * 説明
 * prefix
 * memcache 経由でデータにアクセスするときに使うプレフィックス。
 * MySQL InnoDB Memcache Deamon プラグインの場合、通常は @@
 * で始まって、最後は変更可能なセパレータになります。
 * このプレフィックスは、memcache プロトコルを使うときにキーの値の前に置かれます。
 * schema_name
 * アクセスするテーブルを含むスキーマ (データベース) の名前。
 * table_name
 * memcache プロトコルでアクセス可能なデータを含むテーブルの名前。
 * id_field_name
 * memcache 経由でテーブルにアクセスするときに、キーとして使う id が含まれるフィールド
 * (カラム) の名前。たいていは、主キーが設定されているフィールドとなります。
 * separator
 * フィールドの値を分割するときに使うセパレータ。
 * memcache が単一の値にしかアクセスできないのに対して
 * MySQL は複数のカラムをこの値に押し込めることができるので、
 * このセパレータが必要になります。
 * セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。
 * fields
 * このマッピングで利用可能なすべてのフィールド名の配列。配列のキー
 * 説明
 * prefix
 * memcache 経由でデータにアクセスするときに使うプレフィックス。
 * MySQL InnoDB Memcache Deamon プラグインの場合、通常は @@
 * で始まって、最後は変更可能なセパレータになります。
 * このプレフィックスは、memcache プロトコルを使うときにキーの値の前に置かれます。
 * schema_name
 * アクセスするテーブルを含むスキーマ (データベース) の名前。
 * table_name
 * memcache プロトコルでアクセス可能なデータを含むテーブルの名前。
 * id_field_name
 * memcache 経由でテーブルにアクセスするときに、キーとして使う id が含まれるフィールド
 * (カラム) の名前。たいていは、主キーが設定されているフィールドとなります。
 * separator
 * フィールドの値を分割するときに使うセパレータ。
 * memcache が単一の値にしかアクセスできないのに対して
 * MySQL は複数のカラムをこの値に押し込めることができるので、
 * このセパレータが必要になります。
 * セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。
 * fields
 * このマッピングで利用可能なすべてのフィールド名の配列。配列のキー
 * 説明配列のキー
 * 説明配列のキー説明prefix
 * memcache 経由でデータにアクセスするときに使うプレフィックス。
 * MySQL InnoDB Memcache Deamon プラグインの場合、通常は @@
 * で始まって、最後は変更可能なセパレータになります。
 * このプレフィックスは、memcache プロトコルを使うときにキーの値の前に置かれます。
 * schema_name
 * アクセスするテーブルを含むスキーマ (データベース) の名前。
 * table_name
 * memcache プロトコルでアクセス可能なデータを含むテーブルの名前。
 * id_field_name
 * memcache 経由でテーブルにアクセスするときに、キーとして使う id が含まれるフィールド
 * (カラム) の名前。たいていは、主キーが設定されているフィールドとなります。
 * separator
 * フィールドの値を分割するときに使うセパレータ。
 * memcache が単一の値にしかアクセスできないのに対して
 * MySQL は複数のカラムをこの値に押し込めることができるので、
 * このセパレータが必要になります。
 * セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。
 * fields
 * このマッピングで利用可能なすべてのフィールド名の配列。prefix
 * memcache 経由でデータにアクセスするときに使うプレフィックス。
 * MySQL InnoDB Memcache Deamon プラグインの場合、通常は @@
 * で始まって、最後は変更可能なセパレータになります。
 * このプレフィックスは、memcache プロトコルを使うときにキーの値の前に置かれます。prefixmemcache 経由でデータにアクセスするときに使うプレフィックス。
 * MySQL InnoDB Memcache Deamon プラグインの場合、通常は @@
 * で始まって、最後は変更可能なセパレータになります。
 * このプレフィックスは、memcache プロトコルを使うときにキーの値の前に置かれます。schema_name
 * アクセスするテーブルを含むスキーマ (データベース) の名前。schema_nameアクセスするテーブルを含むスキーマ (データベース) の名前。table_name
 * memcache プロトコルでアクセス可能なデータを含むテーブルの名前。table_namememcache プロトコルでアクセス可能なデータを含むテーブルの名前。id_field_name
 * memcache 経由でテーブルにアクセスするときに、キーとして使う id が含まれるフィールド
 * (カラム) の名前。たいていは、主キーが設定されているフィールドとなります。id_field_namememcache 経由でテーブルにアクセスするときに、キーとして使う id が含まれるフィールド
 * (カラム) の名前。たいていは、主キーが設定されているフィールドとなります。separator
 * フィールドの値を分割するときに使うセパレータ。
 * memcache が単一の値にしかアクセスできないのに対して
 * MySQL は複数のカラムをこの値に押し込めることができるので、
 * このセパレータが必要になります。
 * セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。separatorフィールドの値を分割するときに使うセパレータ。
 * memcache が単一の値にしかアクセスできないのに対して
 * MySQL は複数のカラムをこの値に押し込めることができるので、
 * このセパレータが必要になります。
 * セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。セパレータは MySQL Server で設定できますが、
 * memcache 経由できる値を使ってはいけません。
 * そんなことをしたら、きちんとしたマッピングが保証できなくなるからです。fields
 * このマッピングで利用可能なすべてのフィールド名の配列。fieldsこのマッピングで利用可能なすべてのフィールド名の配列。
 */
function mysqlnd_memcache_get_config($connection) {}