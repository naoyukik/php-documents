/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.posix-getpwuid.php
 * @param int $uid [optional] <p> TODO DESCRIPTION </p>
 * @return array 返される連想配列の要素は次のようになります。
 * ユーザー情報配列
 * 要素
 * 説明
 * name
 * 要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。
 * passwd
 * 要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。
 * uid
 * ユーザーID。これは、この関数をコールする際に使用するパラメータ
 * uidと同じとなり、このため冗長になります。
 * gid
 * ユーザーのグループID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数posix_getgrgidを使用してください。
 * gecos
 * GECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。
 * dir
 * この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。
 * shell
 * shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。ユーザー情報配列
 * 要素
 * 説明
 * name
 * 要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。
 * passwd
 * 要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。
 * uid
 * ユーザーID。これは、この関数をコールする際に使用するパラメータ
 * uidと同じとなり、このため冗長になります。
 * gid
 * ユーザーのグループID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数posix_getgrgidを使用してください。
 * gecos
 * GECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。
 * dir
 * この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。
 * shell
 * shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。要素
 * 説明
 * name
 * 要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。
 * passwd
 * 要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。
 * uid
 * ユーザーID。これは、この関数をコールする際に使用するパラメータ
 * uidと同じとなり、このため冗長になります。
 * gid
 * ユーザーのグループID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数posix_getgrgidを使用してください。
 * gecos
 * GECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。
 * dir
 * この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。
 * shell
 * shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。要素
 * 説明要素
 * 説明要素説明name
 * 要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。
 * passwd
 * 要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。
 * uid
 * ユーザーID。これは、この関数をコールする際に使用するパラメータ
 * uidと同じとなり、このため冗長になります。
 * gid
 * ユーザーのグループID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数posix_getgrgidを使用してください。
 * gecos
 * GECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。
 * dir
 * この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。
 * shell
 * shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。name
 * 要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。name要素 name はユーザー名を有しています。これは、通常、
 * 実際の完全な名前ではなく16文字未満のユーザーの"ハンドル名"となります。passwd
 * 要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。passwd要素passwd には暗号化されたユーザーのパスワードが含まれます。
 * シャドウパスワードを使用しているシステムでは、アスタリスクが代わりに
 * 返されます。uid
 * ユーザーID。これは、この関数をコールする際に使用するパラメータ
 * uidと同じとなり、このため冗長になります。uidユーザーID。これは、この関数をコールする際に使用するパラメータ
 * uidと同じとなり、このため冗長になります。uidgid
 * ユーザーのグループID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数posix_getgrgidを使用してください。gidユーザーのグループID。
 * 実際のグループ名を調べたりそのグループのメンバーの一覧を
 * 得るには関数posix_getgrgidを使用してください。posix_getgrgidgecos
 * GECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。gecosGECOS は旧式の項であり、Honeywell バッチ処理プログラムの
 * finger 情報フィールドを参照します。
 * しかし、このフィールドはまだ生きており、その内容はPOSIXで
 * 規定されています。
 * このフィールドには、カンマで区切られた
 * ユーザーのフルネーム、オフィスの電話番号、家の電話番号に関する
 * リストが含まれています。多くのシステムでは、ユーザーのフルネーム
 * のみが利用可能です。dir
 * この要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。dirこの要素には、ユーザーのホームディレクトリへの絶対パスが含まれています。shell
 * shell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。shellshell 要素には、ユーザーのデフォルトシェルの実行ファイルへの絶対パスが
 * 含まれています。
 */
function posix_getpwuid($uid) {}