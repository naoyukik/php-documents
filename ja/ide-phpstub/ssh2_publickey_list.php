/**
 * (PECL ssh2 >= 0.10)<br/>
 * @link http://php.net/manual/en/function.ssh2-publickey-list.php
 * @param resource $pkey [optional] <p> TODO DESCRIPTION </p>
 * @return array 鍵を、数値添字の配列で返します。
 * 個々の要素は連想配列となっており、その内容は
 * name、blob、および attrs です。公開鍵の要素
 * 配列のキー
 * 意味
 * name
 * この公開鍵で使用しているアルゴリズムの名前。例:
 * ssh-dss あるいは ssh-rsa。
 * blob
 * 生のバイナリデータとしての blob 形式の公開鍵。
 * attrs
 * この公開鍵に割り当てる属性。
 * もっとも一般的な属性であり、バージョン 1 の公開鍵サーバーが唯一サポートしている属性は
 * comment です。これは任意の書式の文字列です。公開鍵の要素
 * 配列のキー
 * 意味
 * name
 * この公開鍵で使用しているアルゴリズムの名前。例:
 * ssh-dss あるいは ssh-rsa。
 * blob
 * 生のバイナリデータとしての blob 形式の公開鍵。
 * attrs
 * この公開鍵に割り当てる属性。
 * もっとも一般的な属性であり、バージョン 1 の公開鍵サーバーが唯一サポートしている属性は
 * comment です。これは任意の書式の文字列です。配列のキー
 * 意味
 * name
 * この公開鍵で使用しているアルゴリズムの名前。例:
 * ssh-dss あるいは ssh-rsa。
 * blob
 * 生のバイナリデータとしての blob 形式の公開鍵。
 * attrs
 * この公開鍵に割り当てる属性。
 * もっとも一般的な属性であり、バージョン 1 の公開鍵サーバーが唯一サポートしている属性は
 * comment です。これは任意の書式の文字列です。配列のキー
 * 意味配列のキー
 * 意味配列のキー意味name
 * この公開鍵で使用しているアルゴリズムの名前。例:
 * ssh-dss あるいは ssh-rsa。
 * blob
 * 生のバイナリデータとしての blob 形式の公開鍵。
 * attrs
 * この公開鍵に割り当てる属性。
 * もっとも一般的な属性であり、バージョン 1 の公開鍵サーバーが唯一サポートしている属性は
 * comment です。これは任意の書式の文字列です。name
 * この公開鍵で使用しているアルゴリズムの名前。例:
 * ssh-dss あるいは ssh-rsa。nameこの公開鍵で使用しているアルゴリズムの名前。例:
 * ssh-dss あるいは ssh-rsa。ssh-dssssh-rsablob
 * 生のバイナリデータとしての blob 形式の公開鍵。blob生のバイナリデータとしての blob 形式の公開鍵。attrs
 * この公開鍵に割り当てる属性。
 * もっとも一般的な属性であり、バージョン 1 の公開鍵サーバーが唯一サポートしている属性は
 * comment です。これは任意の書式の文字列です。attrsこの公開鍵に割り当てる属性。
 * もっとも一般的な属性であり、バージョン 1 の公開鍵サーバーが唯一サポートしている属性は
 * comment です。これは任意の書式の文字列です。comment
 */
function ssh2_publickey_list($pkey) {}