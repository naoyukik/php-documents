/**
 * (PECL gearman >= 0.5.0)<br/>
 * @link http://php.net/manual/en/gearmanclient.jobstatus.php
 * @param string $job_handle [optional] <p> TODO DESCRIPTION </p>
 * @return array An array containing status information for the job corresponding to the supplied
 * job handle.  The first array element is a boolean indicating whether the job is
 * even known, the second is a boolean indicating whether the job is still running,
 * and the third and fourth elements correspond to the numerator and denominator
 * of the fractional completion percentage, respectively.
 */
function GearmanClient.jobStatus($job_handle) {}