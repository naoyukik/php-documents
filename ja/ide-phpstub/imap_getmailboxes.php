/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-getmailboxes.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param string $ref [optional] <p> TODO DESCRIPTION </p>
 * @param string $pattern [optional] <p> TODO DESCRIPTION </p>
 * @return array メールボックス情報を有するオブジェクトの配列を返します。各オブジェクトには、
 * メールボックスの完全な名前である name、
 * このメールボックスの階層の区切りを示す属性 delimiter、
 * そして attributes が存在します。
 * attributes はビットマスクであり、
 * 次のものについて調べることができます。
 * LATT_NOINFERIORS - このメールボックスには
 * 「子供」がいるかいないかはわかりません（このボックスの中にメールボックスはありません）。
 * このメールボックスに対して imap_createmailbox
 * をコールしても動作しません。
 * LATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。
 * LATT_MARKED - このメールボックスにはマークがつけられています。
 * これは、最後に確認したとき以降に新たなメッセージが到着しているかもしれないということを意味します。
 * すべての IMAP サーバーがこの機能を提供しているとは限りません。
 * LATT_UNMARKED - このメールボックスにはマークがつけられておらず、
 * 新たなメッセージを含んでいません。
 * MARKED あるいは UNMARKED
 * が提供されている場合は、
 * その IMAP サーバーがこのメールボックスに対してマーク機能を提供しているとみなせます。namedelimiterattributesattributesLATT_NOINFERIORS - このメールボックスには
 * 「子供」がいるかいないかはわかりません（このボックスの中にメールボックスはありません）。
 * このメールボックスに対して imap_createmailbox
 * をコールしても動作しません。
 * LATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。
 * LATT_MARKED - このメールボックスにはマークがつけられています。
 * これは、最後に確認したとき以降に新たなメッセージが到着しているかもしれないということを意味します。
 * すべての IMAP サーバーがこの機能を提供しているとは限りません。
 * LATT_UNMARKED - このメールボックスにはマークがつけられておらず、
 * 新たなメッセージを含んでいません。
 * MARKED あるいは UNMARKED
 * が提供されている場合は、
 * その IMAP サーバーがこのメールボックスに対してマーク機能を提供しているとみなせます。LATT_NOINFERIORS - このメールボックスには
 * 「子供」がいるかいないかはわかりません（このボックスの中にメールボックスはありません）。
 * このメールボックスに対して imap_createmailbox
 * をコールしても動作しません。LATT_NOINFERIORS - このメールボックスには
 * 「子供」がいるかいないかはわかりません（このボックスの中にメールボックスはありません）。
 * このメールボックスに対して imap_createmailbox
 * をコールしても動作しません。LATT_NOINFERIORSimap_createmailboxLATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。LATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。LATT_NOSELECTLATT_MARKED - このメールボックスにはマークがつけられています。
 * これは、最後に確認したとき以降に新たなメッセージが到着しているかもしれないということを意味します。
 * すべての IMAP サーバーがこの機能を提供しているとは限りません。LATT_MARKED - このメールボックスにはマークがつけられています。
 * これは、最後に確認したとき以降に新たなメッセージが到着しているかもしれないということを意味します。
 * すべての IMAP サーバーがこの機能を提供しているとは限りません。LATT_MARKEDLATT_UNMARKED - このメールボックスにはマークがつけられておらず、
 * 新たなメッセージを含んでいません。
 * MARKED あるいは UNMARKED
 * が提供されている場合は、
 * その IMAP サーバーがこのメールボックスに対してマーク機能を提供しているとみなせます。LATT_UNMARKED - このメールボックスにはマークがつけられておらず、
 * 新たなメッセージを含んでいません。
 * MARKED あるいは UNMARKED
 * が提供されている場合は、
 * その IMAP サーバーがこのメールボックスに対してマーク機能を提供しているとみなせます。LATT_UNMARKEDMARKEDUNMARKED
 */
function imap_getmailboxes($imap_stream, $ref, $pattern) {}