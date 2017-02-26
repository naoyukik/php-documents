/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/domxpath.query.php
 * @param string $expression [optional] <p> TODO DESCRIPTION </p>
 * @param DOMNode $contextnode [optional] <p> TODO DESCRIPTION </p>
 * @param bool $registerNodeNS [optional] <p> TODO DESCRIPTION </p>
 * @return DOMNodeList 与えられた XPath 式 expression にマッチする
 * すべてのノードを含む DOMNodeList を返します。
 * ノードを返さない式の場合は、空の DOMNodeList
 * を返します。expressionDOMNodeListDOMNodeListexpression が不正な形式な場合や
 * contextnode が無効な場合は、
 * DOMXPath::query は FALSE を返します。expressioncontextnodeDOMXPath::queryFALSE
 */
function DOMXPath.query($expression, $contextnode, $registerNodeNS = true) {}