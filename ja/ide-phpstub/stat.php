/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.stat.php
 * @param string $filename [optional] <p> TODO DESCRIPTION </p>
 * @return array stat と fstat
 * の結果のフォーマット
 * 数値
 * 連想配列
 * 説明
 * 0
 * dev
 * デバイス番号
 * 1
 * ino
 * inode 番号(*)
 * 2
 * mode
 * inode プロテクトモード
 * 3
 * nlink
 * リンク数
 * 4
 * uid
 * 所有者のユーザー ID(*)
 * 5
 * gid
 * 所有者のグループ ID(*)
 * 6
 * rdev
 * inode デバイス の場合、デバイスの種類
 * 7
 * size
 * バイト単位のサイズ
 * 8
 * atime
 * 最終アクセス時間 (Unix タイムスタンプ)
 * 9
 * mtime
 * 最終修正時間 (Unix タイムスタンプ)
 * 10
 * ctime
 * 最終 inode 変更時間 (Unix タイムスタンプ)
 * 11
 * blksize
 * ファイル IO のブロックサイズ(**)
 * 12
 * blocks
 * 512 バイトのブロックの確保数(**)
 * * Windows では常に 0 となります。stat と fstat
 * の結果のフォーマット
 * 数値
 * 連想配列
 * 説明
 * 0
 * dev
 * デバイス番号
 * 1
 * ino
 * inode 番号(*)
 * 2
 * mode
 * inode プロテクトモード
 * 3
 * nlink
 * リンク数
 * 4
 * uid
 * 所有者のユーザー ID(*)
 * 5
 * gid
 * 所有者のグループ ID(*)
 * 6
 * rdev
 * inode デバイス の場合、デバイスの種類
 * 7
 * size
 * バイト単位のサイズ
 * 8
 * atime
 * 最終アクセス時間 (Unix タイムスタンプ)
 * 9
 * mtime
 * 最終修正時間 (Unix タイムスタンプ)
 * 10
 * ctime
 * 最終 inode 変更時間 (Unix タイムスタンプ)
 * 11
 * blksize
 * ファイル IO のブロックサイズ(**)
 * 12
 * blocks
 * 512 バイトのブロックの確保数(**)statfstat数値
 * 連想配列
 * 説明
 * 0
 * dev
 * デバイス番号
 * 1
 * ino
 * inode 番号(*)
 * 2
 * mode
 * inode プロテクトモード
 * 3
 * nlink
 * リンク数
 * 4
 * uid
 * 所有者のユーザー ID(*)
 * 5
 * gid
 * 所有者のグループ ID(*)
 * 6
 * rdev
 * inode デバイス の場合、デバイスの種類
 * 7
 * size
 * バイト単位のサイズ
 * 8
 * atime
 * 最終アクセス時間 (Unix タイムスタンプ)
 * 9
 * mtime
 * 最終修正時間 (Unix タイムスタンプ)
 * 10
 * ctime
 * 最終 inode 変更時間 (Unix タイムスタンプ)
 * 11
 * blksize
 * ファイル IO のブロックサイズ(**)
 * 12
 * blocks
 * 512 バイトのブロックの確保数(**)数値
 * 連想配列
 * 説明数値
 * 連想配列
 * 説明数値連想配列説明0
 * dev
 * デバイス番号
 * 1
 * ino
 * inode 番号(*)
 * 2
 * mode
 * inode プロテクトモード
 * 3
 * nlink
 * リンク数
 * 4
 * uid
 * 所有者のユーザー ID(*)
 * 5
 * gid
 * 所有者のグループ ID(*)
 * 6
 * rdev
 * inode デバイス の場合、デバイスの種類
 * 7
 * size
 * バイト単位のサイズ
 * 8
 * atime
 * 最終アクセス時間 (Unix タイムスタンプ)
 * 9
 * mtime
 * 最終修正時間 (Unix タイムスタンプ)
 * 10
 * ctime
 * 最終 inode 変更時間 (Unix タイムスタンプ)
 * 11
 * blksize
 * ファイル IO のブロックサイズ(**)
 * 12
 * blocks
 * 512 バイトのブロックの確保数(**)0
 * dev
 * デバイス番号0devデバイス番号1
 * ino
 * inode 番号(*)1inoinode 番号(*)2
 * mode
 * inode プロテクトモード2modeinode プロテクトモード3
 * nlink
 * リンク数3nlinkリンク数4
 * uid
 * 所有者のユーザー ID(*)4uid所有者のユーザー ID(*)5
 * gid
 * 所有者のグループ ID(*)5gid所有者のグループ ID(*)6
 * rdev
 * inode デバイス の場合、デバイスの種類6rdevinode デバイス の場合、デバイスの種類7
 * size
 * バイト単位のサイズ7sizeバイト単位のサイズ8
 * atime
 * 最終アクセス時間 (Unix タイムスタンプ)8atime最終アクセス時間 (Unix タイムスタンプ)9
 * mtime
 * 最終修正時間 (Unix タイムスタンプ)9mtime最終修正時間 (Unix タイムスタンプ)10
 * ctime
 * 最終 inode 変更時間 (Unix タイムスタンプ)10ctime最終 inode 変更時間 (Unix タイムスタンプ)11
 * blksize
 * ファイル IO のブロックサイズ(**)11blksizeファイル IO のブロックサイズ(**)12
 * blocks
 * 512 バイトのブロックの確保数(**)12blocks512 バイトのブロックの確保数(**)** st_blksize タイプをサポートするシステムでのみ有効です。
 * その他のシステム(例えば Windows)では -1 を返します。stat はエラーの場合 FALSE を返します。statFALSEPHP の数値型は符号付整数であり、
 * 多くのプラットフォームでは 32 ビットの整数を取るため、
 * ファイルシステム関数の中には
 * 2GB より大きなファイルについては期待とは違う値を返すものがあります。PHP の数値型は符号付整数であり、
 * 多くのプラットフォームでは 32 ビットの整数を取るため、
 * ファイルシステム関数の中には
 * 2GB より大きなファイルについては期待とは違う値を返すものがあります。
 */
function stat($filename) {}