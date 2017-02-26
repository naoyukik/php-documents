/**
 * (PHP 5, PHP 7)<br/>
 * @link http://php.net/manual/en/function.variant-get-type.php
 * @param variant $variant [optional] <p> TODO DESCRIPTION </p>
 * @return int この関数は、variant の型を表す整数値を返します。
 * variant は
 * 、
 * あるいは
 * クラスのインスタンスです。
 * 返される値は、VT_XXX 定数のいずれかと比較することが可能です。variantvariantVT_XXXCOM および DOTNET オブジェクトの返す値は、通常
 * VT_DISPATCH です。これらのクラスに対して
 * この関数が動作する理由は、単に COM および DOTNET が VARIANT を
 * 継承しているからというだけのことです。VT_DISPATCHPHP のバージョン 5 より前では、この情報は VARIANT クラスの
 * インスタンスからしか取得できません。そのためには
 * 擬似プロパティ type の値を読み取ります。
 * これについてのより詳細な情報は 
 * クラスを参照ください。type
 */
function variant_get_type($variant) {}