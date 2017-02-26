/**
 * (PECL win32service SVN)<br/>
 * @link http://php.net/manual/en/function.win32-query-service-status.php
 * @param string $servicename [optional] <p> TODO DESCRIPTION </p>
 * @param string $machine [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 成功した場合に以下の情報を含む配列を返します。パラメータに問題がある場合は FALSE、失敗した場合は Win32 エラーコード を返します。FALSEWin32 エラーコードServiceType
 * dwServiceType
 * Win32Service サービス型のビットマスク を参照ください。
 * CurrentState
 * dwCurrentState
 * Win32Service サービスステータス定数 を参照ください。
 * ControlsAccepted
 * サービスが許可しているコントロール。
 * Win32Service サービス制御メッセージが受領されたときのビットマスク
 * を参照ください。
 * Win32ExitCode
 * サービスが終了した際にプロセスが返すコード。
 * ServiceSpecificExitCode
 * サービスが異常終了した際にイベントログに記録されるコード。
 * CheckPoint
 * サービスが終了する際に、現在のチェックポイント番号を保持します。
 * SCM はこれをいわゆる心拍のように扱い、反応しなくなったサービスを
 * 検出するために使用します。この値は、WaitHint の値と組み合わせて
 * 用いられます。
 * WaitHint
 * サービスが終了する際に、WaitHint を checkpoint の値に設定します。
 * この処理が終了した時点でサービスの終了処理が 100% 完了したことを示します。
 * これは、進捗状況のインジケータを実装する際に使用します。
 * ProcessId
 * Windows のプロセス ID 。0 の場合、プロセスは実行していません。
 * ServiceFlags
 * dwServiceFlags
 * Win32Service サービスフラグ定数 を参照ください。ServiceType
 * dwServiceType
 * Win32Service サービス型のビットマスク を参照ください。
 * CurrentState
 * dwCurrentState
 * Win32Service サービスステータス定数 を参照ください。
 * ControlsAccepted
 * サービスが許可しているコントロール。
 * Win32Service サービス制御メッセージが受領されたときのビットマスク
 * を参照ください。
 * Win32ExitCode
 * サービスが終了した際にプロセスが返すコード。
 * ServiceSpecificExitCode
 * サービスが異常終了した際にイベントログに記録されるコード。
 * CheckPoint
 * サービスが終了する際に、現在のチェックポイント番号を保持します。
 * SCM はこれをいわゆる心拍のように扱い、反応しなくなったサービスを
 * 検出するために使用します。この値は、WaitHint の値と組み合わせて
 * 用いられます。
 * WaitHint
 * サービスが終了する際に、WaitHint を checkpoint の値に設定します。
 * この処理が終了した時点でサービスの終了処理が 100% 完了したことを示します。
 * これは、進捗状況のインジケータを実装する際に使用します。
 * ProcessId
 * Windows のプロセス ID 。0 の場合、プロセスは実行していません。
 * ServiceFlags
 * dwServiceFlags
 * Win32Service サービスフラグ定数 を参照ください。ServiceType
 * dwServiceType
 * Win32Service サービス型のビットマスク を参照ください。ServiceTypeServiceTypedwServiceType
 * Win32Service サービス型のビットマスク を参照ください。dwServiceType
 * Win32Service サービス型のビットマスク を参照ください。Win32Service サービス型のビットマスクCurrentState
 * dwCurrentState
 * Win32Service サービスステータス定数 を参照ください。CurrentStateCurrentStatedwCurrentState
 * Win32Service サービスステータス定数 を参照ください。dwCurrentState
 * Win32Service サービスステータス定数 を参照ください。Win32Service サービスステータス定数ControlsAccepted
 * サービスが許可しているコントロール。
 * Win32Service サービス制御メッセージが受領されたときのビットマスク
 * を参照ください。ControlsAcceptedControlsAcceptedサービスが許可しているコントロール。
 * Win32Service サービス制御メッセージが受領されたときのビットマスク
 * を参照ください。サービスが許可しているコントロール。
 * Win32Service サービス制御メッセージが受領されたときのビットマスク
 * を参照ください。Win32Service サービス制御メッセージが受領されたときのビットマスクWin32ExitCode
 * サービスが終了した際にプロセスが返すコード。Win32ExitCodeWin32ExitCodeサービスが終了した際にプロセスが返すコード。サービスが終了した際にプロセスが返すコード。ServiceSpecificExitCode
 * サービスが異常終了した際にイベントログに記録されるコード。ServiceSpecificExitCodeServiceSpecificExitCodeサービスが異常終了した際にイベントログに記録されるコード。サービスが異常終了した際にイベントログに記録されるコード。CheckPoint
 * サービスが終了する際に、現在のチェックポイント番号を保持します。
 * SCM はこれをいわゆる心拍のように扱い、反応しなくなったサービスを
 * 検出するために使用します。この値は、WaitHint の値と組み合わせて
 * 用いられます。CheckPointCheckPointサービスが終了する際に、現在のチェックポイント番号を保持します。
 * SCM はこれをいわゆる心拍のように扱い、反応しなくなったサービスを
 * 検出するために使用します。この値は、WaitHint の値と組み合わせて
 * 用いられます。サービスが終了する際に、現在のチェックポイント番号を保持します。
 * SCM はこれをいわゆる心拍のように扱い、反応しなくなったサービスを
 * 検出するために使用します。この値は、WaitHint の値と組み合わせて
 * 用いられます。WaitHint
 * サービスが終了する際に、WaitHint を checkpoint の値に設定します。
 * この処理が終了した時点でサービスの終了処理が 100% 完了したことを示します。
 * これは、進捗状況のインジケータを実装する際に使用します。WaitHintWaitHintサービスが終了する際に、WaitHint を checkpoint の値に設定します。
 * この処理が終了した時点でサービスの終了処理が 100% 完了したことを示します。
 * これは、進捗状況のインジケータを実装する際に使用します。サービスが終了する際に、WaitHint を checkpoint の値に設定します。
 * この処理が終了した時点でサービスの終了処理が 100% 完了したことを示します。
 * これは、進捗状況のインジケータを実装する際に使用します。ProcessId
 * Windows のプロセス ID 。0 の場合、プロセスは実行していません。ProcessIdProcessIdWindows のプロセス ID 。0 の場合、プロセスは実行していません。Windows のプロセス ID 。0 の場合、プロセスは実行していません。ServiceFlags
 * dwServiceFlags
 * Win32Service サービスフラグ定数 を参照ください。ServiceFlagsServiceFlagsdwServiceFlags
 * Win32Service サービスフラグ定数 を参照ください。dwServiceFlags
 * Win32Service サービスフラグ定数 を参照ください。Win32Service サービスフラグ定数
 */
function win32_query_service_status($servicename, $machine) {}