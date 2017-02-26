/**
 * (PHP 4, PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.imap-fetchstructure.php
 * @param resource $imap_stream [optional] <p> TODO DESCRIPTION </p>
 * @param int $msg_number [optional] <p> TODO DESCRIPTION </p>
 * @param int $options [optional] <p> TODO DESCRIPTION </p>
 * @return object オブジェクトを返します。このオブジェクトには、
 * MIME の添付の各要素に類似のオブジェクトとしてエンベロープ、
 * 内部の日付、サイズ、フラグそして本体が含まれます。
 * 返されるオブジェクトの構造は次のようになります。imap_fetchstructure が返すオブジェクト
 * type
 * 最初の body 部の型
 * encoding
 * body 部を転送する際のエンコード法
 * ifsubtype
 * subtype 文字列がある場合に TRUE
 * subtype
 * MIME の subtype
 * ifdescription
 * description 文字列がある場合に TRUE
 * description
 * 内容を記述する文字列
 * ifid
 * identification 文字列がある場合に TRUE
 * id
 * Identification 文字列
 * lines
 * 行数
 * bytes
 * バイト数
 * ifdisposition
 * disposition 文字列がある場合に TRUE
 * disposition
 * Disposition 文字列
 * ifdparameters
 * dparameters 配列が存在する場合に TRUE
 * dparameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持し、それぞれ
 * Content-disposition MIME ヘッダの
 * 対応するパラメータを表す。
 * ifparameters
 * 配列 parameters が存在する場合に TRUE
 * parameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持する。
 * parts
 * オブジェクトの配列であり、その構造はトップレベルオブジェクトと
 * 同じです。それぞれが MIME body 部に対応しています。imap_fetchstructure が返すオブジェクト
 * type
 * 最初の body 部の型
 * encoding
 * body 部を転送する際のエンコード法
 * ifsubtype
 * subtype 文字列がある場合に TRUE
 * subtype
 * MIME の subtype
 * ifdescription
 * description 文字列がある場合に TRUE
 * description
 * 内容を記述する文字列
 * ifid
 * identification 文字列がある場合に TRUE
 * id
 * Identification 文字列
 * lines
 * 行数
 * bytes
 * バイト数
 * ifdisposition
 * disposition 文字列がある場合に TRUE
 * disposition
 * Disposition 文字列
 * ifdparameters
 * dparameters 配列が存在する場合に TRUE
 * dparameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持し、それぞれ
 * Content-disposition MIME ヘッダの
 * 対応するパラメータを表す。
 * ifparameters
 * 配列 parameters が存在する場合に TRUE
 * parameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持する。
 * parts
 * オブジェクトの配列であり、その構造はトップレベルオブジェクトと
 * 同じです。それぞれが MIME body 部に対応しています。imap_fetchstructuretype
 * 最初の body 部の型
 * encoding
 * body 部を転送する際のエンコード法
 * ifsubtype
 * subtype 文字列がある場合に TRUE
 * subtype
 * MIME の subtype
 * ifdescription
 * description 文字列がある場合に TRUE
 * description
 * 内容を記述する文字列
 * ifid
 * identification 文字列がある場合に TRUE
 * id
 * Identification 文字列
 * lines
 * 行数
 * bytes
 * バイト数
 * ifdisposition
 * disposition 文字列がある場合に TRUE
 * disposition
 * Disposition 文字列
 * ifdparameters
 * dparameters 配列が存在する場合に TRUE
 * dparameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持し、それぞれ
 * Content-disposition MIME ヘッダの
 * 対応するパラメータを表す。
 * ifparameters
 * 配列 parameters が存在する場合に TRUE
 * parameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持する。
 * parts
 * オブジェクトの配列であり、その構造はトップレベルオブジェクトと
 * 同じです。それぞれが MIME body 部に対応しています。type
 * 最初の body 部の型
 * encoding
 * body 部を転送する際のエンコード法
 * ifsubtype
 * subtype 文字列がある場合に TRUE
 * subtype
 * MIME の subtype
 * ifdescription
 * description 文字列がある場合に TRUE
 * description
 * 内容を記述する文字列
 * ifid
 * identification 文字列がある場合に TRUE
 * id
 * Identification 文字列
 * lines
 * 行数
 * bytes
 * バイト数
 * ifdisposition
 * disposition 文字列がある場合に TRUE
 * disposition
 * Disposition 文字列
 * ifdparameters
 * dparameters 配列が存在する場合に TRUE
 * dparameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持し、それぞれ
 * Content-disposition MIME ヘッダの
 * 対応するパラメータを表す。
 * ifparameters
 * 配列 parameters が存在する場合に TRUE
 * parameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持する。
 * parts
 * オブジェクトの配列であり、その構造はトップレベルオブジェクトと
 * 同じです。それぞれが MIME body 部に対応しています。type
 * 最初の body 部の型type最初の body 部の型encoding
 * body 部を転送する際のエンコード法encodingbody 部を転送する際のエンコード法ifsubtype
 * subtype 文字列がある場合に TRUEifsubtypesubtype 文字列がある場合に TRUETRUEsubtype
 * MIME の subtypesubtypeMIME の subtypeMIMEifdescription
 * description 文字列がある場合に TRUEifdescriptiondescription 文字列がある場合に TRUETRUEdescription
 * 内容を記述する文字列description内容を記述する文字列ifid
 * identification 文字列がある場合に TRUEifididentification 文字列がある場合に TRUETRUEid
 * Identification 文字列idIdentification 文字列lines
 * 行数lines行数bytes
 * バイト数bytesバイト数ifdisposition
 * disposition 文字列がある場合に TRUEifdispositiondisposition 文字列がある場合に TRUETRUEdisposition
 * Disposition 文字列dispositionDisposition 文字列ifdparameters
 * dparameters 配列が存在する場合に TRUEifdparametersdparameters 配列が存在する場合に TRUEdparametersTRUEdparameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持し、それぞれ
 * Content-disposition MIME ヘッダの
 * 対応するパラメータを表す。dparametersオブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持し、それぞれ
 * Content-disposition MIME ヘッダの
 * 対応するパラメータを表す。"attribute""value"Content-dispositionMIMEifparameters
 * 配列 parameters が存在する場合に TRUEifparameters配列 parameters が存在する場合に TRUETRUEparameters
 * オブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持する。parametersオブジェクトの配列。各オブジェクトは "attribute"
 * および "value"
 * というプロパティを保持する。"attribute""value"parts
 * オブジェクトの配列であり、その構造はトップレベルオブジェクトと
 * 同じです。それぞれが MIME body 部に対応しています。partsオブジェクトの配列であり、その構造はトップレベルオブジェクトと
 * 同じです。それぞれが MIME body 部に対応しています。MIME最初の body 部の型 (使用するライブラリによって異なるため、定数を使うことを推奨します)
 * 値型定数
 * 0textTYPETEXT
 * 1multipartTYPEMULTIPART
 * 2messageTYPEMESSAGE
 * 3applicationTYPEAPPLICATION
 * 4audioTYPEAUDIO
 * 5imageTYPEIMAGE
 * 6videoTYPEVIDEO
 * 7modelTYPEMODEL
 * 8otherTYPEOTHER最初の body 部の型 (使用するライブラリによって異なるため、定数を使うことを推奨します)
 * 値型定数
 * 0textTYPETEXT
 * 1multipartTYPEMULTIPART
 * 2messageTYPEMESSAGE
 * 3applicationTYPEAPPLICATION
 * 4audioTYPEAUDIO
 * 5imageTYPEIMAGE
 * 6videoTYPEVIDEO
 * 7modelTYPEMODEL
 * 8otherTYPEOTHER値型定数
 * 0textTYPETEXT
 * 1multipartTYPEMULTIPART
 * 2messageTYPEMESSAGE
 * 3applicationTYPEAPPLICATION
 * 4audioTYPEAUDIO
 * 5imageTYPEIMAGE
 * 6videoTYPEVIDEO
 * 7modelTYPEMODEL
 * 8otherTYPEOTHER値型定数値型定数値型定数0textTYPETEXT
 * 1multipartTYPEMULTIPART
 * 2messageTYPEMESSAGE
 * 3applicationTYPEAPPLICATION
 * 4audioTYPEAUDIO
 * 5imageTYPEIMAGE
 * 6videoTYPEVIDEO
 * 7modelTYPEMODEL
 * 8otherTYPEOTHER0textTYPETEXT0textTYPETEXT1multipartTYPEMULTIPART1multipartTYPEMULTIPART2messageTYPEMESSAGE2messageTYPEMESSAGE3applicationTYPEAPPLICATION3applicationTYPEAPPLICATION4audioTYPEAUDIO4audioTYPEAUDIO5imageTYPEIMAGE5imageTYPEIMAGE6videoTYPEVIDEO6videoTYPEVIDEO7modelTYPEMODEL7modelTYPEMODEL8otherTYPEOTHER8otherTYPEOTHER転送時のエンコーディング (使用するライブラリによって異なるため、定数を使うことを推奨します)
 * 値型定数
 * 07bitENC7BIT
 * 18bitENC8BIT
 * 2BinaryENCBINARY
 * 3Base64ENCBASE64
 * 4Quoted-PrintableENCQUOTEDPRINTABLE
 * 5otherENCOTHER転送時のエンコーディング (使用するライブラリによって異なるため、定数を使うことを推奨します)
 * 値型定数
 * 07bitENC7BIT
 * 18bitENC8BIT
 * 2BinaryENCBINARY
 * 3Base64ENCBASE64
 * 4Quoted-PrintableENCQUOTEDPRINTABLE
 * 5otherENCOTHER値型定数
 * 07bitENC7BIT
 * 18bitENC8BIT
 * 2BinaryENCBINARY
 * 3Base64ENCBASE64
 * 4Quoted-PrintableENCQUOTEDPRINTABLE
 * 5otherENCOTHER値型定数値型定数値型定数07bitENC7BIT
 * 18bitENC8BIT
 * 2BinaryENCBINARY
 * 3Base64ENCBASE64
 * 4Quoted-PrintableENCQUOTEDPRINTABLE
 * 5otherENCOTHER07bitENC7BIT07bitENC7BIT18bitENC8BIT18bitENC8BIT2BinaryENCBINARY2BinaryENCBINARY3Base64ENCBASE643Base64ENCBASE644Quoted-PrintableENCQUOTEDPRINTABLE4Quoted-PrintableENCQUOTEDPRINTABLE5otherENCOTHER5otherENCOTHER
 */
function imap_fetchstructure($imap_stream, $msg_number, $options) {}