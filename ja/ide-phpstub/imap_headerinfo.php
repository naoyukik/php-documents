/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-headerinfo.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param int $msg_number [optional] <p> TODO DESCRIPTION </p>
 * @param int $fromlength [optional] <p> TODO DESCRIPTION </p>
 * @param int $subjectlength [optional] <p> TODO DESCRIPTION </p>
 * @param string $defaulthost [optional] <p> TODO DESCRIPTION </p>
 * @return object 以下のプロパティをもつオブジェクトを返します。
 * toaddress - 完全な to: 行。最大 1024 文字。
 * to - To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * fromaddress - 完全な from: 行。最大 1024 文字。
 * from - From: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * ccaddress - 完全な cc: 行。最大 1024 文字。
 * cc - Cc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * bccaddress - 完全な bcc: 行。最大 1024 文字。
 * bcc - Bcc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * reply_toaddress - 完全な Reply-To: 行。最大 1024 文字。
 * reply_to - Reply-To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * senderaddress - 完全な sender: 行。最大 1024 文字。
 * sender - Sender: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * return_pathaddress - 完全な Return-Path: 行。最大 1024 文字。
 * return_path - Return-Path: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、
 * adl、mailbox および
 * host
 * remail - 
 * date - ヘッダにあるメッセージの日付。
 * Date - date と同じ。
 * subject - メッセージの件名。
 * Subject - subject と同じ。
 * in_reply_to - 
 * message_id - 
 * newsgroups - 
 * followup_to - 
 * references - 
 * Recent - 最近の既読メッセージは R、
 * 最新の未読メッセージは N、
 * 最新でないメッセージは ' '。
 * Unseen - 最新でない未読メッセージは U、
 * 既読、あるいは最新の未読メッセージは ' '。
 * Flagged - フラグがたっている場合は F、
 * そうでない場合は ' '。
 * Answered - 返信した場合は A、
 * していない場合は ' '。
 * Deleted - 削除された場合は D、
 * されていない場合は ' '。
 * Draft - 草稿である場合は X、
 * そうでない場合は ' '。
 * Msgno - メッセージ番号。
 * MailDate - 
 * Size - メッセージのサイズ。
 * udate - メールメッセージの日付を Unix time で表したもの。
 * fetchfrom - from 行を fromlength 文字に適合させたもの。
 * fetchsubject - subject 行を
 * subjectlength 文字に適合させたもの。toaddress - 完全な to: 行。最大 1024 文字。
 * to - To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * fromaddress - 完全な from: 行。最大 1024 文字。
 * from - From: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * ccaddress - 完全な cc: 行。最大 1024 文字。
 * cc - Cc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * bccaddress - 完全な bcc: 行。最大 1024 文字。
 * bcc - Bcc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * reply_toaddress - 完全な Reply-To: 行。最大 1024 文字。
 * reply_to - Reply-To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * senderaddress - 完全な sender: 行。最大 1024 文字。
 * sender - Sender: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および host
 * return_pathaddress - 完全な Return-Path: 行。最大 1024 文字。
 * return_path - Return-Path: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、
 * adl、mailbox および
 * host
 * remail - 
 * date - ヘッダにあるメッセージの日付。
 * Date - date と同じ。
 * subject - メッセージの件名。
 * Subject - subject と同じ。
 * in_reply_to - 
 * message_id - 
 * newsgroups - 
 * followup_to - 
 * references - 
 * Recent - 最近の既読メッセージは R、
 * 最新の未読メッセージは N、
 * 最新でないメッセージは ' '。
 * Unseen - 最新でない未読メッセージは U、
 * 既読、あるいは最新の未読メッセージは ' '。
 * Flagged - フラグがたっている場合は F、
 * そうでない場合は ' '。
 * Answered - 返信した場合は A、
 * していない場合は ' '。
 * Deleted - 削除された場合は D、
 * されていない場合は ' '。
 * Draft - 草稿である場合は X、
 * そうでない場合は ' '。
 * Msgno - メッセージ番号。
 * MailDate - 
 * Size - メッセージのサイズ。
 * udate - メールメッセージの日付を Unix time で表したもの。
 * fetchfrom - from 行を fromlength 文字に適合させたもの。
 * fetchsubject - subject 行を
 * subjectlength 文字に適合させたもの。toaddress - 完全な to: 行。最大 1024 文字。toaddress - 完全な to: 行。最大 1024 文字。to - To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostto - To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostpersonaladlmailboxhostfromaddress - 完全な from: 行。最大 1024 文字。fromaddress - 完全な from: 行。最大 1024 文字。from - From: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostfrom - From: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostpersonaladlmailboxhostccaddress - 完全な cc: 行。最大 1024 文字。ccaddress - 完全な cc: 行。最大 1024 文字。cc - Cc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostcc - Cc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostpersonaladlmailboxhostbccaddress - 完全な bcc: 行。最大 1024 文字。bccaddress - 完全な bcc: 行。最大 1024 文字。bcc - Bcc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostbcc - Bcc: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostpersonaladlmailboxhostreply_toaddress - 完全な Reply-To: 行。最大 1024 文字。reply_toaddress - 完全な Reply-To: 行。最大 1024 文字。reply_to - Reply-To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostreply_to - Reply-To: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostpersonaladlmailboxhostsenderaddress - 完全な sender: 行。最大 1024 文字。senderaddress - 完全な sender: 行。最大 1024 文字。sender - Sender: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostsender - Sender: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、adl、
 * mailbox および hostpersonaladlmailboxhostreturn_pathaddress - 完全な Return-Path: 行。最大 1024 文字。return_pathaddress - 完全な Return-Path: 行。最大 1024 文字。return_path - Return-Path: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、
 * adl、mailbox および
 * hostreturn_path - Return-Path: 行から、次のプロパティを含むオブジェクトの配列を返します。
 * personal、
 * adl、mailbox および
 * hostpersonaladlmailboxhostremail -remail -date - ヘッダにあるメッセージの日付。date - ヘッダにあるメッセージの日付。Date - date と同じ。Date - date と同じ。subject - メッセージの件名。subject - メッセージの件名。Subject - subject と同じ。Subject - subject と同じ。in_reply_to -in_reply_to -message_id -message_id -newsgroups -newsgroups -followup_to -followup_to -references -references -Recent - 最近の既読メッセージは R、
 * 最新の未読メッセージは N、
 * 最新でないメッセージは ' '。Recent - 最近の既読メッセージは R、
 * 最新の未読メッセージは N、
 * 最新でないメッセージは ' '。RNUnseen - 最新でない未読メッセージは U、
 * 既読、あるいは最新の未読メッセージは ' '。Unseen - 最新でない未読メッセージは U、
 * 既読、あるいは最新の未読メッセージは ' '。UFlagged - フラグがたっている場合は F、
 * そうでない場合は ' '。Flagged - フラグがたっている場合は F、
 * そうでない場合は ' '。FAnswered - 返信した場合は A、
 * していない場合は ' '。Answered - 返信した場合は A、
 * していない場合は ' '。ADeleted - 削除された場合は D、
 * されていない場合は ' '。Deleted - 削除された場合は D、
 * されていない場合は ' '。DDraft - 草稿である場合は X、
 * そうでない場合は ' '。Draft - 草稿である場合は X、
 * そうでない場合は ' '。XMsgno - メッセージ番号。Msgno - メッセージ番号。MailDate -MailDate -Size - メッセージのサイズ。Size - メッセージのサイズ。udate - メールメッセージの日付を Unix time で表したもの。udate - メールメッセージの日付を Unix time で表したもの。fetchfrom - from 行を fromlength 文字に適合させたもの。fetchfrom - from 行を fromlength 文字に適合させたもの。fromlengthfetchsubject - subject 行を
 * subjectlength 文字に適合させたもの。fetchsubject - subject 行を
 * subjectlength 文字に適合させたもの。subjectlength
 */
function imap_headerinfo($imap_stream, $msg_number, $fromlength, $subjectlength, $defaulthost) {}