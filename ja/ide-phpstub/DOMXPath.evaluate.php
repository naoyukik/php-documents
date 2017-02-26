/**
 * (PHP 5 >= 5.1.0, PHP 7)<br/>
 * @link http://php.net/manual/en/domxpath.evaluate.php
 * @param string $expression [optional] <p> TODO DESCRIPTION </p>
 * @param DOMNode $contextnode [optional] <p> TODO DESCRIPTION </p>
 * @param bool $registerNodeNS [optional] <p> TODO DESCRIPTION </p>
 * @return mixed 可能であれば型付けされた結果、あるいは指定された XPath 式
 * expression にマッチするすべてのノードを含む
 * DOMNodeList を返します。expressionDOMNodeListexpression が不正な形式な場合や
 * contextnode が無効な場合は、
 * DOMXPath::evaluate は FALSE を返します。expressioncontextnodeDOMXPath::evaluateFALSE
 */
function DOMXPath.evaluate($expression, $contextnode, $registerNodeNS = true) {}