/**
 * (PECL win32ps >= 1.0.1)<br/>
 * @link http://php.net/manual/en/function.win32-ps-stat-proc.php
 * @param int $pid [optional] <p> TODO DESCRIPTION </p>
 * @return array 失敗した場合は、FALSE を返します。
 * 成功した場合は、以下の情報を含む配列を返します。FALSEpid
 * プロセス ID。
 * exe
 * 実行イメージへのパス。
 * mem
 * メモリの使用量を示す以下の情報を含む配列。
 * page_fault_count、
 * peak_working_set_size、
 * working_set_size、
 * quota_peak_paged_pool_usage、
 * quota_paged_pool_usage、
 * quota_peak_non_paged_pool_usage、
 * quota_non_paged_pool_usage、
 * pagefile_usage および
 * peak_pagefile_usage。
 * tms
 * CPU 時間の使用状況を示す以下の情報を含む配列。
 * created、
 * kernel および
 * user。pid
 * プロセス ID。
 * exe
 * 実行イメージへのパス。
 * mem
 * メモリの使用量を示す以下の情報を含む配列。
 * page_fault_count、
 * peak_working_set_size、
 * working_set_size、
 * quota_peak_paged_pool_usage、
 * quota_paged_pool_usage、
 * quota_peak_non_paged_pool_usage、
 * quota_non_paged_pool_usage、
 * pagefile_usage および
 * peak_pagefile_usage。
 * tms
 * CPU 時間の使用状況を示す以下の情報を含む配列。
 * created、
 * kernel および
 * user。pid
 * プロセス ID。pidpidプロセス ID。プロセス ID。exe
 * 実行イメージへのパス。exeexe実行イメージへのパス。実行イメージへのパス。mem
 * メモリの使用量を示す以下の情報を含む配列。
 * page_fault_count、
 * peak_working_set_size、
 * working_set_size、
 * quota_peak_paged_pool_usage、
 * quota_paged_pool_usage、
 * quota_peak_non_paged_pool_usage、
 * quota_non_paged_pool_usage、
 * pagefile_usage および
 * peak_pagefile_usage。memmemメモリの使用量を示す以下の情報を含む配列。
 * page_fault_count、
 * peak_working_set_size、
 * working_set_size、
 * quota_peak_paged_pool_usage、
 * quota_paged_pool_usage、
 * quota_peak_non_paged_pool_usage、
 * quota_non_paged_pool_usage、
 * pagefile_usage および
 * peak_pagefile_usage。メモリの使用量を示す以下の情報を含む配列。
 * page_fault_count、
 * peak_working_set_size、
 * working_set_size、
 * quota_peak_paged_pool_usage、
 * quota_paged_pool_usage、
 * quota_peak_non_paged_pool_usage、
 * quota_non_paged_pool_usage、
 * pagefile_usage および
 * peak_pagefile_usage。page_fault_countpeak_working_set_sizeworking_set_sizequota_peak_paged_pool_usagequota_paged_pool_usagequota_peak_non_paged_pool_usagequota_non_paged_pool_usagepagefile_usagepeak_pagefile_usagetms
 * CPU 時間の使用状況を示す以下の情報を含む配列。
 * created、
 * kernel および
 * user。tmstmsCPU 時間の使用状況を示す以下の情報を含む配列。
 * created、
 * kernel および
 * user。CPU 時間の使用状況を示す以下の情報を含む配列。
 * created、
 * kernel および
 * user。createdkerneluser
 */
function win32_ps_stat_proc($pid) {}