/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/php-user-filter.filter.php
 * @param resource $in [optional] <p> TODO DESCRIPTION </p>
 * @param resource $out [optional] <p> TODO DESCRIPTION </p>
 * @param int $consumed [optional] <p> TODO DESCRIPTION </p>
 * @param bool $closing [optional] <p> TODO DESCRIPTION </p>
 * @return int filter メソッドは、処理を終えたときに次のいずれかの値を返す必要があります。
 * 返り値
 * 意味
 * PSFS_PASS_ON
 * フィルタの処理が成功し、データが
 * out バケット群
 * に保存されました。
 * PSFS_FEED_ME
 * フィルタの処理は成功しましたが、返すデータはありません。
 * ストリームあるいは一つ前のフィルタから、さらにデータが必要です。
 * PSFS_ERR_FATAL (デフォルト)
 * フィルタで対処不能なエラーが発生し、処理を続行できません。filter返り値
 * 意味
 * PSFS_PASS_ON
 * フィルタの処理が成功し、データが
 * out バケット群
 * に保存されました。
 * PSFS_FEED_ME
 * フィルタの処理は成功しましたが、返すデータはありません。
 * ストリームあるいは一つ前のフィルタから、さらにデータが必要です。
 * PSFS_ERR_FATAL (デフォルト)
 * フィルタで対処不能なエラーが発生し、処理を続行できません。返り値
 * 意味
 * PSFS_PASS_ON
 * フィルタの処理が成功し、データが
 * out バケット群
 * に保存されました。
 * PSFS_FEED_ME
 * フィルタの処理は成功しましたが、返すデータはありません。
 * ストリームあるいは一つ前のフィルタから、さらにデータが必要です。
 * PSFS_ERR_FATAL (デフォルト)
 * フィルタで対処不能なエラーが発生し、処理を続行できません。返り値
 * 意味返り値
 * 意味返り値意味PSFS_PASS_ON
 * フィルタの処理が成功し、データが
 * out バケット群
 * に保存されました。
 * PSFS_FEED_ME
 * フィルタの処理は成功しましたが、返すデータはありません。
 * ストリームあるいは一つ前のフィルタから、さらにデータが必要です。
 * PSFS_ERR_FATAL (デフォルト)
 * フィルタで対処不能なエラーが発生し、処理を続行できません。PSFS_PASS_ON
 * フィルタの処理が成功し、データが
 * out バケット群
 * に保存されました。PSFS_PASS_ONPSFS_PASS_ONフィルタの処理が成功し、データが
 * out バケット群
 * に保存されました。outバケット群PSFS_FEED_ME
 * フィルタの処理は成功しましたが、返すデータはありません。
 * ストリームあるいは一つ前のフィルタから、さらにデータが必要です。PSFS_FEED_MEPSFS_FEED_MEフィルタの処理は成功しましたが、返すデータはありません。
 * ストリームあるいは一つ前のフィルタから、さらにデータが必要です。PSFS_ERR_FATAL (デフォルト)
 * フィルタで対処不能なエラーが発生し、処理を続行できません。PSFS_ERR_FATAL (デフォルト)PSFS_ERR_FATALフィルタで対処不能なエラーが発生し、処理を続行できません。
 */
function php_user_filter.filter($in, $out, $consumed, $closing) {}