/**
 * (PHP 4 >= 4.2.0, PHP 5 <= 5.0.5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.dio-stat.php
 * @param resource $fd [optional] <p> TODO DESCRIPTION </p>
 * @return array 以下のキーを含む連想配列を返します。
 * "device" - デバイス
 * "inode" - i ノード
 * "mode" - モード
 * "nlink" - ハードリンク数
 * "uid" - ユーザー ID
 * "gid" - グループ ID
 * "device_type" - デバイス型（inode デバイスの場合）
 * "size" - サイズ（バイト数）
 * "blocksize" - ブロック長
 * "blocks" - 割り当てられたブロック数
 * "atime" - 最終アクセス時刻
 * "mtime" - 最終更新時刻
 * "ctime" - 最終変更時刻
 * エラー時には dio_stat は NULL を返します。"device" - デバイス
 * "inode" - i ノード
 * "mode" - モード
 * "nlink" - ハードリンク数
 * "uid" - ユーザー ID
 * "gid" - グループ ID
 * "device_type" - デバイス型（inode デバイスの場合）
 * "size" - サイズ（バイト数）
 * "blocksize" - ブロック長
 * "blocks" - 割り当てられたブロック数
 * "atime" - 最終アクセス時刻
 * "mtime" - 最終更新時刻
 * "ctime" - 最終変更時刻"device" - デバイス"device" - デバイス"inode" - i ノード"inode" - i ノード"mode" - モード"mode" - モード"nlink" - ハードリンク数"nlink" - ハードリンク数"uid" - ユーザー ID"uid" - ユーザー ID"gid" - グループ ID"gid" - グループ ID"device_type" - デバイス型（inode デバイスの場合）"device_type" - デバイス型（inode デバイスの場合）"size" - サイズ（バイト数）"size" - サイズ（バイト数）"blocksize" - ブロック長"blocksize" - ブロック長"blocks" - 割り当てられたブロック数"blocks" - 割り当てられたブロック数"atime" - 最終アクセス時刻"atime" - 最終アクセス時刻"mtime" - 最終更新時刻"mtime" - 最終更新時刻"ctime" - 最終変更時刻"ctime" - 最終変更時刻dio_statNULL
 */
function dio_stat($fd) {}