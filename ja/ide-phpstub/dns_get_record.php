/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.dns-get-record.php
 * @param string $hostname [optional] <p> TODO DESCRIPTION </p>
 * @param int $type [optional] <p> TODO DESCRIPTION </p>
 * @param array $authns [optional] <p> TODO DESCRIPTION </p>
 * @param array $addtl [optional] <p> TODO DESCRIPTION </p>
 * @param bool $raw [optional] <p> TODO DESCRIPTION </p>
 * @return array この関数は、連想配列を要素にもつ配列を返します。
 * 失敗した場合に FALSE を返します。
 * それぞれの連想配列には
 * 少なくとも 以下のキーが含まれています:
 * 基本 DNS 属性
 * 属性
 * 意味
 * host
 * これ以降の関連するデータが参照する DNS 名。
 * class
 * dns_get_record は
 * Internet クラスのレコードのみを返すので、このパラメータは常に
 * IN を返します。
 * type
 * レコード型を表す文字列。type の値に応じて、
 * 結果の配列には追加の属性が含まれます。以下の表を参照ください。
 * ttl
 * このレコードの"有効期限 (Time To Live)"。レコードの本来の ttl と一致するとは
 * 限りません。むしろ、
 * ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。FALSE少なくとも基本 DNS 属性
 * 属性
 * 意味
 * host
 * これ以降の関連するデータが参照する DNS 名。
 * class
 * dns_get_record は
 * Internet クラスのレコードのみを返すので、このパラメータは常に
 * IN を返します。
 * type
 * レコード型を表す文字列。type の値に応じて、
 * 結果の配列には追加の属性が含まれます。以下の表を参照ください。
 * ttl
 * このレコードの"有効期限 (Time To Live)"。レコードの本来の ttl と一致するとは
 * 限りません。むしろ、
 * ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。属性
 * 意味
 * host
 * これ以降の関連するデータが参照する DNS 名。
 * class
 * dns_get_record は
 * Internet クラスのレコードのみを返すので、このパラメータは常に
 * IN を返します。
 * type
 * レコード型を表す文字列。type の値に応じて、
 * 結果の配列には追加の属性が含まれます。以下の表を参照ください。
 * ttl
 * このレコードの"有効期限 (Time To Live)"。レコードの本来の ttl と一致するとは
 * 限りません。むしろ、
 * ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。属性
 * 意味属性
 * 意味属性意味host
 * これ以降の関連するデータが参照する DNS 名。
 * class
 * dns_get_record は
 * Internet クラスのレコードのみを返すので、このパラメータは常に
 * IN を返します。
 * type
 * レコード型を表す文字列。type の値に応じて、
 * 結果の配列には追加の属性が含まれます。以下の表を参照ください。
 * ttl
 * このレコードの"有効期限 (Time To Live)"。レコードの本来の ttl と一致するとは
 * 限りません。むしろ、
 * ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。host
 * これ以降の関連するデータが参照する DNS 名。hostこれ以降の関連するデータが参照する DNS 名。class
 * dns_get_record は
 * Internet クラスのレコードのみを返すので、このパラメータは常に
 * IN を返します。classdns_get_record は
 * Internet クラスのレコードのみを返すので、このパラメータは常に
 * IN を返します。dns_get_recordINtype
 * レコード型を表す文字列。type の値に応じて、
 * 結果の配列には追加の属性が含まれます。以下の表を参照ください。typeレコード型を表す文字列。type の値に応じて、
 * 結果の配列には追加の属性が含まれます。以下の表を参照ください。ttl
 * このレコードの"有効期限 (Time To Live)"。レコードの本来の ttl と一致するとは
 * 限りません。むしろ、
 * ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。ttlこのレコードの"有効期限 (Time To Live)"。レコードの本来の ttl と一致するとは
 * 限りません。むしろ、
 * ネームサーバーへのクエリにかかった時間をそこから引いたものに一致します。"有効期限 (Time To Live)"限りません'type' に応じて連想配列に追加される項目
 * レコード型
 * 追加項目
 * A
 * ip: ドット区切り 10 進数形式の IPv4 アドレス。
 * MX
 * pri: メールエクスチェンジャの優先度。
 * 数字が小さいほど優先度が高い。
 * target: メールエクスチェンジャの FQDN 。
 * dns_get_mx も参照ください。
 * CNAME
 * target: レコードのエイリアスの対象となっている場所の FQDN 。
 * NS
 * target: このホスト名に対する権威をもっているネームサーバーの FQDN 。
 * PTR
 * target: レコードが指している、DNS 名前空間内の場所
 * TXT
 * txt: このレコードに関連付けられている任意の文字列。
 * HINFO
 * cpu: このレコードが参照しているマシンの CPU を識別する IANA 番号。
 * os: このレコードが参照しているマシン上の OS を識別する IANA 番号。
 * これらの値の意味については、IANA の 
 * Operating System Names
 * を参照ください。
 * SOA
 * mname: リソースレコードの元となるマシンの FQDN 。
 * rname: このドメインの管理責任者の Email アドレス。
 * serial: ドメインのシリアル番号。
 * refresh:
 * セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。
 * retry: リフレッシュが失敗した際に
 * 2 度目のリフレッシュを試みるまでの間隔（秒単位）
 * expire: セカンダリネームサーバーが、ゾーンデータの
 * リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間
 * （秒単位）。
 * minimum-ttl: クライアントが、
 * 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。
 * 個々のリソースレコードによって上書きが可能。
 * AAAA
 * ipv6: IPv6 アドレス。
 * A6(PHP >= 5.1.0)
 * masklen: chain
 * で指定された対象から引き継ぐビット長。
 * ipv6: chain
 * とマージするためのこのレコードのアドレス。
 * chain: ipv6
 * データとマージするための親レコード。
 * SRV
 * pri: (Priority) 値が小さいものが優先されます。
 * weight: 同じ優先順位の
 * targets からランダムに選択する際の重み。
 * target および port:
 * リクエストされたサービスが存在するホスト名とポート。
 * 詳細は RFC 2782 を参照ください。
 * NAPTR
 * order および pref: 上の
 * pri および weight と同じ。
 * flags, services, regex,
 * および replacement:
 * RFC 2915 で定義されるパラメータ。'type' に応じて連想配列に追加される項目
 * レコード型
 * 追加項目
 * A
 * ip: ドット区切り 10 進数形式の IPv4 アドレス。
 * MX
 * pri: メールエクスチェンジャの優先度。
 * 数字が小さいほど優先度が高い。
 * target: メールエクスチェンジャの FQDN 。
 * dns_get_mx も参照ください。
 * CNAME
 * target: レコードのエイリアスの対象となっている場所の FQDN 。
 * NS
 * target: このホスト名に対する権威をもっているネームサーバーの FQDN 。
 * PTR
 * target: レコードが指している、DNS 名前空間内の場所
 * TXT
 * txt: このレコードに関連付けられている任意の文字列。
 * HINFO
 * cpu: このレコードが参照しているマシンの CPU を識別する IANA 番号。
 * os: このレコードが参照しているマシン上の OS を識別する IANA 番号。
 * これらの値の意味については、IANA の 
 * Operating System Names
 * を参照ください。
 * SOA
 * mname: リソースレコードの元となるマシンの FQDN 。
 * rname: このドメインの管理責任者の Email アドレス。
 * serial: ドメインのシリアル番号。
 * refresh:
 * セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。
 * retry: リフレッシュが失敗した際に
 * 2 度目のリフレッシュを試みるまでの間隔（秒単位）
 * expire: セカンダリネームサーバーが、ゾーンデータの
 * リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間
 * （秒単位）。
 * minimum-ttl: クライアントが、
 * 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。
 * 個々のリソースレコードによって上書きが可能。
 * AAAA
 * ipv6: IPv6 アドレス。
 * A6(PHP >= 5.1.0)
 * masklen: chain
 * で指定された対象から引き継ぐビット長。
 * ipv6: chain
 * とマージするためのこのレコードのアドレス。
 * chain: ipv6
 * データとマージするための親レコード。
 * SRV
 * pri: (Priority) 値が小さいものが優先されます。
 * weight: 同じ優先順位の
 * targets からランダムに選択する際の重み。
 * target および port:
 * リクエストされたサービスが存在するホスト名とポート。
 * 詳細は RFC 2782 を参照ください。
 * NAPTR
 * order および pref: 上の
 * pri および weight と同じ。
 * flags, services, regex,
 * および replacement:
 * RFC 2915 で定義されるパラメータ。レコード型
 * 追加項目
 * A
 * ip: ドット区切り 10 進数形式の IPv4 アドレス。
 * MX
 * pri: メールエクスチェンジャの優先度。
 * 数字が小さいほど優先度が高い。
 * target: メールエクスチェンジャの FQDN 。
 * dns_get_mx も参照ください。
 * CNAME
 * target: レコードのエイリアスの対象となっている場所の FQDN 。
 * NS
 * target: このホスト名に対する権威をもっているネームサーバーの FQDN 。
 * PTR
 * target: レコードが指している、DNS 名前空間内の場所
 * TXT
 * txt: このレコードに関連付けられている任意の文字列。
 * HINFO
 * cpu: このレコードが参照しているマシンの CPU を識別する IANA 番号。
 * os: このレコードが参照しているマシン上の OS を識別する IANA 番号。
 * これらの値の意味については、IANA の 
 * Operating System Names
 * を参照ください。
 * SOA
 * mname: リソースレコードの元となるマシンの FQDN 。
 * rname: このドメインの管理責任者の Email アドレス。
 * serial: ドメインのシリアル番号。
 * refresh:
 * セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。
 * retry: リフレッシュが失敗した際に
 * 2 度目のリフレッシュを試みるまでの間隔（秒単位）
 * expire: セカンダリネームサーバーが、ゾーンデータの
 * リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間
 * （秒単位）。
 * minimum-ttl: クライアントが、
 * 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。
 * 個々のリソースレコードによって上書きが可能。
 * AAAA
 * ipv6: IPv6 アドレス。
 * A6(PHP >= 5.1.0)
 * masklen: chain
 * で指定された対象から引き継ぐビット長。
 * ipv6: chain
 * とマージするためのこのレコードのアドレス。
 * chain: ipv6
 * データとマージするための親レコード。
 * SRV
 * pri: (Priority) 値が小さいものが優先されます。
 * weight: 同じ優先順位の
 * targets からランダムに選択する際の重み。
 * target および port:
 * リクエストされたサービスが存在するホスト名とポート。
 * 詳細は RFC 2782 を参照ください。
 * NAPTR
 * order および pref: 上の
 * pri および weight と同じ。
 * flags, services, regex,
 * および replacement:
 * RFC 2915 で定義されるパラメータ。レコード型
 * 追加項目レコード型
 * 追加項目レコード型追加項目A
 * ip: ドット区切り 10 進数形式の IPv4 アドレス。
 * MX
 * pri: メールエクスチェンジャの優先度。
 * 数字が小さいほど優先度が高い。
 * target: メールエクスチェンジャの FQDN 。
 * dns_get_mx も参照ください。
 * CNAME
 * target: レコードのエイリアスの対象となっている場所の FQDN 。
 * NS
 * target: このホスト名に対する権威をもっているネームサーバーの FQDN 。
 * PTR
 * target: レコードが指している、DNS 名前空間内の場所
 * TXT
 * txt: このレコードに関連付けられている任意の文字列。
 * HINFO
 * cpu: このレコードが参照しているマシンの CPU を識別する IANA 番号。
 * os: このレコードが参照しているマシン上の OS を識別する IANA 番号。
 * これらの値の意味については、IANA の 
 * Operating System Names
 * を参照ください。
 * SOA
 * mname: リソースレコードの元となるマシンの FQDN 。
 * rname: このドメインの管理責任者の Email アドレス。
 * serial: ドメインのシリアル番号。
 * refresh:
 * セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。
 * retry: リフレッシュが失敗した際に
 * 2 度目のリフレッシュを試みるまでの間隔（秒単位）
 * expire: セカンダリネームサーバーが、ゾーンデータの
 * リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間
 * （秒単位）。
 * minimum-ttl: クライアントが、
 * 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。
 * 個々のリソースレコードによって上書きが可能。
 * AAAA
 * ipv6: IPv6 アドレス。
 * A6(PHP >= 5.1.0)
 * masklen: chain
 * で指定された対象から引き継ぐビット長。
 * ipv6: chain
 * とマージするためのこのレコードのアドレス。
 * chain: ipv6
 * データとマージするための親レコード。
 * SRV
 * pri: (Priority) 値が小さいものが優先されます。
 * weight: 同じ優先順位の
 * targets からランダムに選択する際の重み。
 * target および port:
 * リクエストされたサービスが存在するホスト名とポート。
 * 詳細は RFC 2782 を参照ください。
 * NAPTR
 * order および pref: 上の
 * pri および weight と同じ。
 * flags, services, regex,
 * および replacement:
 * RFC 2915 で定義されるパラメータ。A
 * ip: ドット区切り 10 進数形式の IPv4 アドレス。AAip: ドット区切り 10 進数形式の IPv4 アドレス。ipMX
 * pri: メールエクスチェンジャの優先度。
 * 数字が小さいほど優先度が高い。
 * target: メールエクスチェンジャの FQDN 。
 * dns_get_mx も参照ください。MXMXpri: メールエクスチェンジャの優先度。
 * 数字が小さいほど優先度が高い。
 * target: メールエクスチェンジャの FQDN 。
 * dns_get_mx も参照ください。pritargetdns_get_mxCNAME
 * target: レコードのエイリアスの対象となっている場所の FQDN 。CNAMECNAMEtarget: レコードのエイリアスの対象となっている場所の FQDN 。targetNS
 * target: このホスト名に対する権威をもっているネームサーバーの FQDN 。NSNStarget: このホスト名に対する権威をもっているネームサーバーの FQDN 。targetPTR
 * target: レコードが指している、DNS 名前空間内の場所PTRPTRtarget: レコードが指している、DNS 名前空間内の場所targetTXT
 * txt: このレコードに関連付けられている任意の文字列。TXTTXTtxt: このレコードに関連付けられている任意の文字列。txtHINFO
 * cpu: このレコードが参照しているマシンの CPU を識別する IANA 番号。
 * os: このレコードが参照しているマシン上の OS を識別する IANA 番号。
 * これらの値の意味については、IANA の 
 * Operating System Names
 * を参照ください。HINFOHINFOcpu: このレコードが参照しているマシンの CPU を識別する IANA 番号。
 * os: このレコードが参照しているマシン上の OS を識別する IANA 番号。
 * これらの値の意味については、IANA の 
 * Operating System Names
 * を参照ください。cpuosOperating System NamesOperating System NamesSOA
 * mname: リソースレコードの元となるマシンの FQDN 。
 * rname: このドメインの管理責任者の Email アドレス。
 * serial: ドメインのシリアル番号。
 * refresh:
 * セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。
 * retry: リフレッシュが失敗した際に
 * 2 度目のリフレッシュを試みるまでの間隔（秒単位）
 * expire: セカンダリネームサーバーが、ゾーンデータの
 * リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間
 * （秒単位）。
 * minimum-ttl: クライアントが、
 * 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。
 * 個々のリソースレコードによって上書きが可能。SOASOAmname: リソースレコードの元となるマシンの FQDN 。
 * rname: このドメインの管理責任者の Email アドレス。
 * serial: ドメインのシリアル番号。
 * refresh:
 * セカンダリネームサーバーがこのドメインのコピーを更新する際に参照するリフレッシュ間隔（秒単位）。
 * retry: リフレッシュが失敗した際に
 * 2 度目のリフレッシュを試みるまでの間隔（秒単位）
 * expire: セカンダリネームサーバーが、ゾーンデータの
 * リフレッシュに失敗した場合にコピーのデータを破棄せず持ち続ける期間
 * （秒単位）。
 * minimum-ttl: クライアントが、
 * 一度取得したデータを再リクエストすることなしに利用できる最小期間（秒単位）。
 * 個々のリソースレコードによって上書きが可能。mnamernameserialrefreshretryexpireminimum-ttlAAAA
 * ipv6: IPv6 アドレス。AAAAAAAAipv6: IPv6 アドレス。ipv6A6(PHP >= 5.1.0)
 * masklen: chain
 * で指定された対象から引き継ぐビット長。
 * ipv6: chain
 * とマージするためのこのレコードのアドレス。
 * chain: ipv6
 * データとマージするための親レコード。A6(PHP >= 5.1.0)A6masklen: chain
 * で指定された対象から引き継ぐビット長。
 * ipv6: chain
 * とマージするためのこのレコードのアドレス。
 * chain: ipv6
 * データとマージするための親レコード。masklenchainipv6chainchainipv6SRV
 * pri: (Priority) 値が小さいものが優先されます。
 * weight: 同じ優先順位の
 * targets からランダムに選択する際の重み。
 * target および port:
 * リクエストされたサービスが存在するホスト名とポート。
 * 詳細は RFC 2782 を参照ください。SRVSRVpri: (Priority) 値が小さいものが優先されます。
 * weight: 同じ優先順位の
 * targets からランダムに選択する際の重み。
 * target および port:
 * リクエストされたサービスが存在するホスト名とポート。
 * 詳細は RFC 2782 を参照ください。priweighttargetstargetportRFC 2782NAPTR
 * order および pref: 上の
 * pri および weight と同じ。
 * flags, services, regex,
 * および replacement:
 * RFC 2915 で定義されるパラメータ。NAPTRNAPTRorder および pref: 上の
 * pri および weight と同じ。
 * flags, services, regex,
 * および replacement:
 * RFC 2915 で定義されるパラメータ。orderprefpriweightflagsservicesregexreplacementRFC 2915
 */
function dns_get_record($hostname, $type = DNS_ANY, $authns, $addtl, $raw = false) {}