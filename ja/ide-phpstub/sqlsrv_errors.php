/**
 * @link http://php.net/manual/en/function.sqlsrv-errors.php
 * @param int $errorsOrWarnings [optional] <p> TODO DESCRIPTION </p>
 * @return mixed If errors and/or warnings occurred on the last sqlsrv operation, an array of 
 * arrays containing error information is returned. If no errors and/or warnings 
 * occurred on the last sqlsrv operation, NULL is returned. The following table 
 * describes the structure of the returned arrays:
 * Array returned by sqlsrv_errors
 * Key
 * Description
 * SQLSTATE
 * For errors that originate from the ODBC driver, the SQLSTATE returned 
 * by ODBC. For errors that originate from the Microsoft Drivers for PHP for 
 * SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the 
 * Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.
 * code
 * For errors that originate from SQL Server, the native SQL Server 
 * error code. For errors that originate from the ODBC driver, the error 
 * code returned by ODBC. For errors that originate from the Microsoft Drivers 
 * for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.
 * message
 * A description of the error.NULLArray returned by sqlsrv_errors
 * Key
 * Description
 * SQLSTATE
 * For errors that originate from the ODBC driver, the SQLSTATE returned 
 * by ODBC. For errors that originate from the Microsoft Drivers for PHP for 
 * SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the 
 * Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.
 * code
 * For errors that originate from SQL Server, the native SQL Server 
 * error code. For errors that originate from the ODBC driver, the error 
 * code returned by ODBC. For errors that originate from the Microsoft Drivers 
 * for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.
 * message
 * A description of the error.Key
 * Description
 * SQLSTATE
 * For errors that originate from the ODBC driver, the SQLSTATE returned 
 * by ODBC. For errors that originate from the Microsoft Drivers for PHP for 
 * SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the 
 * Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.
 * code
 * For errors that originate from SQL Server, the native SQL Server 
 * error code. For errors that originate from the ODBC driver, the error 
 * code returned by ODBC. For errors that originate from the Microsoft Drivers 
 * for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.
 * message
 * A description of the error.Key
 * DescriptionKey
 * DescriptionKeyDescriptionSQLSTATE
 * For errors that originate from the ODBC driver, the SQLSTATE returned 
 * by ODBC. For errors that originate from the Microsoft Drivers for PHP for 
 * SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the 
 * Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.
 * code
 * For errors that originate from SQL Server, the native SQL Server 
 * error code. For errors that originate from the ODBC driver, the error 
 * code returned by ODBC. For errors that originate from the Microsoft Drivers 
 * for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.
 * message
 * A description of the error.SQLSTATE
 * For errors that originate from the ODBC driver, the SQLSTATE returned 
 * by ODBC. For errors that originate from the Microsoft Drivers for PHP for 
 * SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the 
 * Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.SQLSTATEFor errors that originate from the ODBC driver, the SQLSTATE returned 
 * by ODBC. For errors that originate from the Microsoft Drivers for PHP for 
 * SQL Server, a SQLSTATE of IMSSP. For warnings that originate from the 
 * Microsoft Drivers for PHP for SQL Server, a SQLSTATE of 01SSP.code
 * For errors that originate from SQL Server, the native SQL Server 
 * error code. For errors that originate from the ODBC driver, the error 
 * code returned by ODBC. For errors that originate from the Microsoft Drivers 
 * for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.codeFor errors that originate from SQL Server, the native SQL Server 
 * error code. For errors that originate from the ODBC driver, the error 
 * code returned by ODBC. For errors that originate from the Microsoft Drivers 
 * for PHP for SQL Server, the Microsoft Drivers for PHP for SQL Server error code.message
 * A description of the error.messageA description of the error.
 */
function sqlsrv_errors($errorsOrWarnings) {}