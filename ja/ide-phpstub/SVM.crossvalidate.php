/**
 * (PECL svm >= 0.1.0)<br/>
 * @link http://php.net/manual/en/svm.crossvalidate.php
 * @param array $problem [optional] <p> TODO DESCRIPTION </p>
 * @param int $number_of_folds [optional] <p> TODO DESCRIPTION </p>
 * @return float The correct percentage, expressed as a floating point number from 0-1. 
 * In the case of NU_SVC or EPSILON_SVR kernels the mean squared error will 
 * returned instead.
 */
function SVM.crossvalidate($problem, $number_of_folds) {}