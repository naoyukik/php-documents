/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.getdate.php
 * @param int $timestamp [optional] <p> TODO DESCRIPTION </p>
 * @return array timestamp に関連する情報を連想配列で返します。
 * 返される連想配列の内容は、次のようになります。timestamp返される連想配列のキー
 * キー
 * 説明
 * 戻り値の例
 * "seconds"
 * 秒。数値。
 * 0 から 59
 * "minutes"
 * 分。数値。
 * 0 から 59
 * "hours"
 * 時。数値
 * 0 から 23
 * "mday"
 * 月単位の日。数値
 * 1 から 31
 * "wday"
 * 曜日。数値。
 * 0 (日曜) から 6 (土曜)
 * "mon"
 * 月。数値。
 * 1 から 12
 * "year"
 * 年。4桁の数値。
 * 例: 1999 あるいは 2003
 * "yday"
 * 年単位の日。数値。
 * 0 から 365
 * "weekday"
 * 曜日。フルスペルの文字。
 * Sunday から Saturday
 * "month"
 * 月。フルスペルの文字。
 * January から December
 * 0
 * UNIX時（1970年1月1日）からの秒数。
 * timeの戻り値と同様。 dateでも使用される。
 * システムによって違うが、通常は-2147483648 から
 * 2147483647.返される連想配列のキー
 * キー
 * 説明
 * 戻り値の例
 * "seconds"
 * 秒。数値。
 * 0 から 59
 * "minutes"
 * 分。数値。
 * 0 から 59
 * "hours"
 * 時。数値
 * 0 から 23
 * "mday"
 * 月単位の日。数値
 * 1 から 31
 * "wday"
 * 曜日。数値。
 * 0 (日曜) から 6 (土曜)
 * "mon"
 * 月。数値。
 * 1 から 12
 * "year"
 * 年。4桁の数値。
 * 例: 1999 あるいは 2003
 * "yday"
 * 年単位の日。数値。
 * 0 から 365
 * "weekday"
 * 曜日。フルスペルの文字。
 * Sunday から Saturday
 * "month"
 * 月。フルスペルの文字。
 * January から December
 * 0
 * UNIX時（1970年1月1日）からの秒数。
 * timeの戻り値と同様。 dateでも使用される。
 * システムによって違うが、通常は-2147483648 から
 * 2147483647.キー
 * 説明
 * 戻り値の例
 * "seconds"
 * 秒。数値。
 * 0 から 59
 * "minutes"
 * 分。数値。
 * 0 から 59
 * "hours"
 * 時。数値
 * 0 から 23
 * "mday"
 * 月単位の日。数値
 * 1 から 31
 * "wday"
 * 曜日。数値。
 * 0 (日曜) から 6 (土曜)
 * "mon"
 * 月。数値。
 * 1 から 12
 * "year"
 * 年。4桁の数値。
 * 例: 1999 あるいは 2003
 * "yday"
 * 年単位の日。数値。
 * 0 から 365
 * "weekday"
 * 曜日。フルスペルの文字。
 * Sunday から Saturday
 * "month"
 * 月。フルスペルの文字。
 * January から December
 * 0
 * UNIX時（1970年1月1日）からの秒数。
 * timeの戻り値と同様。 dateでも使用される。
 * システムによって違うが、通常は-2147483648 から
 * 2147483647.キー
 * 説明
 * 戻り値の例キー
 * 説明
 * 戻り値の例キー説明戻り値の例"seconds"
 * 秒。数値。
 * 0 から 59
 * "minutes"
 * 分。数値。
 * 0 から 59
 * "hours"
 * 時。数値
 * 0 から 23
 * "mday"
 * 月単位の日。数値
 * 1 から 31
 * "wday"
 * 曜日。数値。
 * 0 (日曜) から 6 (土曜)
 * "mon"
 * 月。数値。
 * 1 から 12
 * "year"
 * 年。4桁の数値。
 * 例: 1999 あるいは 2003
 * "yday"
 * 年単位の日。数値。
 * 0 から 365
 * "weekday"
 * 曜日。フルスペルの文字。
 * Sunday から Saturday
 * "month"
 * 月。フルスペルの文字。
 * January から December
 * 0
 * UNIX時（1970年1月1日）からの秒数。
 * timeの戻り値と同様。 dateでも使用される。
 * システムによって違うが、通常は-2147483648 から
 * 2147483647."seconds"
 * 秒。数値。
 * 0 から 59"seconds""seconds"秒。数値。0 から 59059"minutes"
 * 分。数値。
 * 0 から 59"minutes""minutes"分。数値。0 から 59059"hours"
 * 時。数値
 * 0 から 23"hours""hours"時。数値0 から 23023"mday"
 * 月単位の日。数値
 * 1 から 31"mday""mday"月単位の日。数値1 から 31131"wday"
 * 曜日。数値。
 * 0 (日曜) から 6 (土曜)"wday""wday"曜日。数値。0 (日曜) から 6 (土曜)06"mon"
 * 月。数値。
 * 1 から 12"mon""mon"月。数値。1 から 12112"year"
 * 年。4桁の数値。
 * 例: 1999 あるいは 2003"year""year"年。4桁の数値。例: 1999 あるいは 200319992003"yday"
 * 年単位の日。数値。
 * 0 から 365"yday""yday"年単位の日。数値。0 から 3650365"weekday"
 * 曜日。フルスペルの文字。
 * Sunday から Saturday"weekday""weekday"曜日。フルスペルの文字。Sunday から SaturdaySundaySaturday"month"
 * 月。フルスペルの文字。
 * January から December"month""month"月。フルスペルの文字。January から DecemberJanuaryDecember0
 * UNIX時（1970年1月1日）からの秒数。
 * timeの戻り値と同様。 dateでも使用される。
 * システムによって違うが、通常は-2147483648 から
 * 2147483647.00UNIX時（1970年1月1日）からの秒数。
 * timeの戻り値と同様。 dateでも使用される。timedateシステムによって違うが、通常は-2147483648 から
 * 2147483647.-21474836482147483647
 */
function getdate($timestamp = time()) {}