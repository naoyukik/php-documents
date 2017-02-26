/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-getsubscribed.php
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
 * 「子供」はいません（このボックスの中にメールボックスはありません）。
 * LATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。
 * LATT_MARKED - このメールボックスにはマークが
 * つけられています。UW-IMAPD でのみ使用されます。
 * LATT_UNMARKED - このメールボックスにはマークが
 * つけられていません。UW-IMAPD でのみ使用されます。namedelimiterattributesattributesLATT_NOINFERIORS - このメールボックスには
 * 「子供」はいません（このボックスの中にメールボックスはありません）。
 * LATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。
 * LATT_MARKED - このメールボックスにはマークが
 * つけられています。UW-IMAPD でのみ使用されます。
 * LATT_UNMARKED - このメールボックスにはマークが
 * つけられていません。UW-IMAPD でのみ使用されます。LATT_NOINFERIORS - このメールボックスには
 * 「子供」はいません（このボックスの中にメールボックスはありません）。LATT_NOINFERIORS - このメールボックスには
 * 「子供」はいません（このボックスの中にメールボックスはありません）。LATT_NOINFERIORSLATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。LATT_NOSELECT - 単なるコンテナであり、
 * メールボックスではありません - これをオープンすることはできません。LATT_NOSELECTLATT_MARKED - このメールボックスにはマークが
 * つけられています。UW-IMAPD でのみ使用されます。LATT_MARKED - このメールボックスにはマークが
 * つけられています。UW-IMAPD でのみ使用されます。LATT_MARKEDLATT_UNMARKED - このメールボックスにはマークが
 * つけられていません。UW-IMAPD でのみ使用されます。LATT_UNMARKED - このメールボックスにはマークが
 * つけられていません。UW-IMAPD でのみ使用されます。LATT_UNMARKED
 */
function imap_getsubscribed($imap_stream, $ref, $pattern) {}