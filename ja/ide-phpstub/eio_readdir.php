/**
 * (PECL eio >= 0.0.1dev)<br/>
 * @link http://php.net/manual/en/function.eio-readdir.php
 * @param string $path [optional] <p> TODO DESCRIPTION </p>
 * @param int $flags [optional] <p> TODO DESCRIPTION </p>
 * @param int $pri [optional] <p> TODO DESCRIPTION </p>
 * @param callable $callback [optional] <p> TODO DESCRIPTION </p>
 * @param string $data [optional] <p> TODO DESCRIPTION </p>
 * @return resource eio_readdir
 * は、成功した場合にリクエストリソースを返します。エラー時に FALSE を返します。
 * callback 関数の result
 * に設定される内容は flags によって変わります。eio_readdirFALSEcallbackresultflagsEIO_READDIR_DENTS
 * (integer)
 * eio_readdir のフラグ。指定すると、コールバックの result 引数が次のキーを持つ配列になります。
 * 'names' - ディレクトリ名の配列／
 * 'dents' - struct eio_dirent 風の配列で、
 * それぞれがさらに以下のキーを持ちます (
 * 'name' - ディレクトリ名／
 * 'type' - EIO_DT_* 定数のいずれか／
 * 'inode' - inode 番号。存在しない場合は不定
 * )
 * EIO_READDIR_DIRS_FIRST
 * (integer)
 * このフラグを指定すると、ディレクトリをまず最初に返して
 * stat に最適化した順に返します。
 * EIO_READDIR_STAT_ORDER
 * (integer)
 * このフラグを指定すると、名前を返すときの順序が
 * 各ファイルを stat するのに適した順となります。
 * 指定したディレクトリにあるすべてのファイルを
 * stat するつもりなら、この順にしておけば最速になります。
 * EIO_READDIR_FOUND_UNKNOWN
 * (integer)EIO_READDIR_DENTS
 * (integer)
 * eio_readdir のフラグ。指定すると、コールバックの result 引数が次のキーを持つ配列になります。
 * 'names' - ディレクトリ名の配列／
 * 'dents' - struct eio_dirent 風の配列で、
 * それぞれがさらに以下のキーを持ちます (
 * 'name' - ディレクトリ名／
 * 'type' - EIO_DT_* 定数のいずれか／
 * 'inode' - inode 番号。存在しない場合は不定
 * )
 * EIO_READDIR_DIRS_FIRST
 * (integer)
 * このフラグを指定すると、ディレクトリをまず最初に返して
 * stat に最適化した順に返します。
 * EIO_READDIR_STAT_ORDER
 * (integer)
 * このフラグを指定すると、名前を返すときの順序が
 * 各ファイルを stat するのに適した順となります。
 * 指定したディレクトリにあるすべてのファイルを
 * stat するつもりなら、この順にしておけば最速になります。
 * EIO_READDIR_FOUND_UNKNOWN
 * (integer)EIO_READDIR_DENTS
 * (integer)
 * eio_readdir のフラグ。指定すると、コールバックの result 引数が次のキーを持つ配列になります。
 * 'names' - ディレクトリ名の配列／
 * 'dents' - struct eio_dirent 風の配列で、
 * それぞれがさらに以下のキーを持ちます (
 * 'name' - ディレクトリ名／
 * 'type' - EIO_DT_* 定数のいずれか／
 * 'inode' - inode 番号。存在しない場合は不定
 * )EIO_READDIR_DENTS
 * (integer)EIO_READDIR_DENTSintegereio_readdir のフラグ。指定すると、コールバックの result 引数が次のキーを持つ配列になります。
 * 'names' - ディレクトリ名の配列／
 * 'dents' - struct eio_dirent 風の配列で、
 * それぞれがさらに以下のキーを持ちます (
 * 'name' - ディレクトリ名／
 * 'type' - EIO_DT_* 定数のいずれか／
 * 'inode' - inode 番号。存在しない場合は不定
 * )eio_readdir のフラグ。指定すると、コールバックの result 引数が次のキーを持つ配列になります。
 * 'names' - ディレクトリ名の配列／
 * 'dents' - struct eio_dirent 風の配列で、
 * それぞれがさらに以下のキーを持ちます (
 * 'name' - ディレクトリ名／
 * 'type' - EIO_DT_* 定数のいずれか／
 * 'inode' - inode 番号。存在しない場合は不定
 * )eio_readdir'names''dents'struct eio_dirent'name''type'EIO_DT_*'inode'EIO_READDIR_DIRS_FIRST
 * (integer)
 * このフラグを指定すると、ディレクトリをまず最初に返して
 * stat に最適化した順に返します。EIO_READDIR_DIRS_FIRST
 * (integer)EIO_READDIR_DIRS_FIRSTintegerこのフラグを指定すると、ディレクトリをまず最初に返して
 * stat に最適化した順に返します。このフラグを指定すると、ディレクトリをまず最初に返して
 * stat に最適化した順に返します。EIO_READDIR_STAT_ORDER
 * (integer)
 * このフラグを指定すると、名前を返すときの順序が
 * 各ファイルを stat するのに適した順となります。
 * 指定したディレクトリにあるすべてのファイルを
 * stat するつもりなら、この順にしておけば最速になります。EIO_READDIR_STAT_ORDER
 * (integer)EIO_READDIR_STAT_ORDERintegerこのフラグを指定すると、名前を返すときの順序が
 * 各ファイルを stat するのに適した順となります。
 * 指定したディレクトリにあるすべてのファイルを
 * stat するつもりなら、この順にしておけば最速になります。このフラグを指定すると、名前を返すときの順序が
 * 各ファイルを stat するのに適した順となります。
 * 指定したディレクトリにあるすべてのファイルを
 * stat するつもりなら、この順にしておけば最速になります。statstatEIO_READDIR_FOUND_UNKNOWN
 * (integer)EIO_READDIR_FOUND_UNKNOWN
 * (integer)EIO_READDIR_FOUND_UNKNOWNintegerノード型
 * EIO_DT_UNKNOWN
 * (integer)
 * 不明なノード型 (ありがち)。さらに stat が必要です。
 * EIO_DT_FIFO
 * (integer)
 * FIFO ノード型
 * EIO_DT_CHR
 * (integer)
 * ノード型
 * EIO_DT_MPC
 * (integer)
 * 多重化キャラクタデバイス (v7+coherent) ノード型
 * EIO_DT_DIR
 * (integer)
 * ディレクトリノード型
 * EIO_DT_NAM
 * (integer)
 * Xenix 名前付きファイルノード型
 * EIO_DT_BLK
 * (integer)
 * ノード型
 * EIO_DT_MPB
 * (integer)
 * 多重化ブロックデバイス (v7+coherent)
 * EIO_DT_REG
 * (integer)
 * ノード型
 * EIO_DT_NWK
 * (integer)
 * EIO_DT_CMP
 * (integer)
 * HP-UX ネットワークノード型
 * EIO_DT_LNK
 * (integer)
 * リンクノード型
 * EIO_DT_SOCK
 * (integer)
 * ソケットノード型
 * EIO_DT_DOOR
 * (integer)
 * Solaris door ノード型
 * EIO_DT_WHT
 * (integer)
 * ノード型
 * EIO_DT_MAX
 * (integer)
 * ノード型の最大値EIO_DT_UNKNOWN
 * (integer)
 * 不明なノード型 (ありがち)。さらに stat が必要です。
 * EIO_DT_FIFO
 * (integer)
 * FIFO ノード型
 * EIO_DT_CHR
 * (integer)
 * ノード型
 * EIO_DT_MPC
 * (integer)
 * 多重化キャラクタデバイス (v7+coherent) ノード型
 * EIO_DT_DIR
 * (integer)
 * ディレクトリノード型
 * EIO_DT_NAM
 * (integer)
 * Xenix 名前付きファイルノード型
 * EIO_DT_BLK
 * (integer)
 * ノード型
 * EIO_DT_MPB
 * (integer)
 * 多重化ブロックデバイス (v7+coherent)
 * EIO_DT_REG
 * (integer)
 * ノード型
 * EIO_DT_NWK
 * (integer)
 * EIO_DT_CMP
 * (integer)
 * HP-UX ネットワークノード型
 * EIO_DT_LNK
 * (integer)
 * リンクノード型
 * EIO_DT_SOCK
 * (integer)
 * ソケットノード型
 * EIO_DT_DOOR
 * (integer)
 * Solaris door ノード型
 * EIO_DT_WHT
 * (integer)
 * ノード型
 * EIO_DT_MAX
 * (integer)
 * ノード型の最大値EIO_DT_UNKNOWN
 * (integer)
 * 不明なノード型 (ありがち)。さらに stat が必要です。EIO_DT_UNKNOWN
 * (integer)EIO_DT_UNKNOWNinteger不明なノード型 (ありがち)。さらに stat が必要です。不明なノード型 (ありがち)。さらに stat が必要です。statEIO_DT_FIFO
 * (integer)
 * FIFO ノード型EIO_DT_FIFO
 * (integer)EIO_DT_FIFOintegerFIFO ノード型FIFO ノード型EIO_DT_CHR
 * (integer)
 * ノード型EIO_DT_CHR
 * (integer)EIO_DT_CHRintegerノード型ノード型EIO_DT_MPC
 * (integer)
 * 多重化キャラクタデバイス (v7+coherent) ノード型EIO_DT_MPC
 * (integer)EIO_DT_MPCinteger多重化キャラクタデバイス (v7+coherent) ノード型多重化キャラクタデバイス (v7+coherent) ノード型EIO_DT_DIR
 * (integer)
 * ディレクトリノード型EIO_DT_DIR
 * (integer)EIO_DT_DIRintegerディレクトリノード型ディレクトリノード型EIO_DT_NAM
 * (integer)
 * Xenix 名前付きファイルノード型EIO_DT_NAM
 * (integer)EIO_DT_NAMintegerXenix 名前付きファイルノード型Xenix 名前付きファイルノード型EIO_DT_BLK
 * (integer)
 * ノード型EIO_DT_BLK
 * (integer)EIO_DT_BLKintegerノード型ノード型EIO_DT_MPB
 * (integer)
 * 多重化ブロックデバイス (v7+coherent)EIO_DT_MPB
 * (integer)EIO_DT_MPBinteger多重化ブロックデバイス (v7+coherent)多重化ブロックデバイス (v7+coherent)EIO_DT_REG
 * (integer)
 * ノード型EIO_DT_REG
 * (integer)EIO_DT_REGintegerノード型ノード型EIO_DT_NWK
 * (integer)EIO_DT_NWK
 * (integer)EIO_DT_NWKintegerEIO_DT_CMP
 * (integer)
 * HP-UX ネットワークノード型EIO_DT_CMP
 * (integer)EIO_DT_CMPintegerHP-UX ネットワークノード型HP-UX ネットワークノード型EIO_DT_LNK
 * (integer)
 * リンクノード型EIO_DT_LNK
 * (integer)EIO_DT_LNKintegerリンクノード型リンクノード型EIO_DT_SOCK
 * (integer)
 * ソケットノード型EIO_DT_SOCK
 * (integer)EIO_DT_SOCKintegerソケットノード型ソケットノード型EIO_DT_DOOR
 * (integer)
 * Solaris door ノード型EIO_DT_DOOR
 * (integer)EIO_DT_DOORintegerSolaris door ノード型Solaris door ノード型EIO_DT_WHT
 * (integer)
 * ノード型EIO_DT_WHT
 * (integer)EIO_DT_WHTintegerノード型ノード型EIO_DT_MAX
 * (integer)
 * ノード型の最大値EIO_DT_MAX
 * (integer)EIO_DT_MAXintegerノード型の最大値ノード型の最大値
 */
function eio_readdir($path, $flags, $pri, $callback, $data = NULL) {}