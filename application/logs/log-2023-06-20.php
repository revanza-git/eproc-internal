<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

DEBUG - 2023-06-20 21:25:25 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:25:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:25:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:25:26 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:25:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:25:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:25:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:25:26 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:25:26 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:25:26 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:25:26 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:25:26 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:25:26 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:25:26 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:25:26 --> Query error: Expression #1 of SELECT list is not in GROUP BY clause and contains nonaggregated column 'eproc_perencanaan_vms.fkpbj.id' which is not functionally dependent on columns in GROUP BY clause; this is incompatible with sql_mode=only_full_group_by - Invalid query:  	SELECT
						 fkpbj.*, fppbj.id_division as fppbj_division 
					FROM
					ms_fkpbj fkpbj  JOIN ms_fppbj fppbj ON fkpbj.id_fppbj = fppbj.id
					WHERE
					fkpbj.del = 0 AND fppbj.del = 0 AND fkpbj.is_status = 2    AND fkpbj.id_division = 15  GROUP BY id_fppbj
DEBUG - 2023-06-20 21:29:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:29:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:29:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:29:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:29:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:29:43 --> start reject fp3
ERROR - 2023-06-20 21:29:43 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:29:43 --> end reject fp3
ERROR - 2023-06-20 21:29:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:29:44 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:29:44 --> Total execution time: 0.3861
DEBUG - 2023-06-20 21:29:45 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:45 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:29:45 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:29:46 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:29:46 --> Total execution time: 0.4206
DEBUG - 2023-06-20 21:29:46 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:46 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:29:46 --> Total execution time: 0.2333
DEBUG - 2023-06-20 21:29:46 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:46 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:29:47 --> Total execution time: 0.1811
DEBUG - 2023-06-20 21:29:47 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:47 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:29:47 --> start reject fp3
ERROR - 2023-06-20 21:29:47 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:29:47 --> end reject fp3
DEBUG - 2023-06-20 21:29:47 --> Total execution time: 0.1789
DEBUG - 2023-06-20 21:29:47 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:47 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:29:47 --> Total execution time: 0.2168
DEBUG - 2023-06-20 21:29:47 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:47 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:29:47 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:29:47 --> Total execution time: 0.1686
DEBUG - 2023-06-20 21:29:54 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:29:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:29:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:29:55 --> Total execution time: 0.1623
DEBUG - 2023-06-20 21:42:12 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:42:12 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:12 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:12 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:42:12 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:42:12 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:42:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:42:12 --> start reject fp3
ERROR - 2023-06-20 21:42:12 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:42:12 --> end reject fp3
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:42:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:42:12 --> Total execution time: 0.2822
DEBUG - 2023-06-20 21:42:13 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:13 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:42:13 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:42:13 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:13 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:13 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:42:13 --> Total execution time: 0.3840
DEBUG - 2023-06-20 21:42:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:42:14 --> Total execution time: 0.2215
DEBUG - 2023-06-20 21:42:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:42:14 --> Total execution time: 0.1691
DEBUG - 2023-06-20 21:42:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:14 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:42:14 --> start reject fp3
ERROR - 2023-06-20 21:42:14 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:42:14 --> end reject fp3
DEBUG - 2023-06-20 21:42:14 --> Total execution time: 0.1815
DEBUG - 2023-06-20 21:42:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:14 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:42:14 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:42:14 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:42:14 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:42:14 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:42:14 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:42:14 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:42:14 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:42:14 --> Total execution time: 0.1688
DEBUG - 2023-06-20 21:42:15 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:15 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:42:15 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:42:15 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:42:15 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:42:15 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:42:15 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:42:15 --> Total execution time: 0.1681
DEBUG - 2023-06-20 21:42:17 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:42:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:42:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:42:17 --> Total execution time: 0.1205
DEBUG - 2023-06-20 21:45:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:45:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:45:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:45:14 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:45:14 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:45:14 --> start reject fp3
ERROR - 2023-06-20 21:45:14 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:45:14 --> end reject fp3
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:45:14 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:45:14 --> Total execution time: 0.2461
DEBUG - 2023-06-20 21:45:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:14 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:45:14 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:45:15 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:45:15 --> Total execution time: 0.3857
DEBUG - 2023-06-20 21:45:15 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:15 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:45:15 --> Total execution time: 0.2157
DEBUG - 2023-06-20 21:45:15 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:45:16 --> Total execution time: 0.1662
DEBUG - 2023-06-20 21:45:16 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:16 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:45:16 --> start reject fp3
ERROR - 2023-06-20 21:45:16 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:45:16 --> end reject fp3
DEBUG - 2023-06-20 21:45:16 --> Total execution time: 0.1654
DEBUG - 2023-06-20 21:45:16 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:16 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:45:16 --> Total execution time: 0.2295
DEBUG - 2023-06-20 21:45:16 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:16 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:45:16 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:45:16 --> Total execution time: 0.1659
DEBUG - 2023-06-20 21:45:19 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:45:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:45:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:45:20 --> Total execution time: 0.1508
DEBUG - 2023-06-20 21:48:02 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:48:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:48:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:48:02 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:48:02 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:48:02 --> No URI present. Default controller set.
DEBUG - 2023-06-20 21:48:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:48:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:48:02 --> Total execution time: 0.1452
DEBUG - 2023-06-20 21:52:05 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:05 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:05 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:52:05 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:05 --> start reject fp3
ERROR - 2023-06-20 21:52:05 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:52:05 --> end reject fp3
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:52:05 --> Total execution time: 0.2654
DEBUG - 2023-06-20 21:52:06 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:06 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:52:06 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:52:06 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:06 --> Total execution time: 0.3219
DEBUG - 2023-06-20 21:52:06 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:06 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:07 --> Total execution time: 0.2323
DEBUG - 2023-06-20 21:52:07 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:07 --> Total execution time: 0.1696
DEBUG - 2023-06-20 21:52:07 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:07 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:52:07 --> start reject fp3
ERROR - 2023-06-20 21:52:07 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:52:07 --> end reject fp3
DEBUG - 2023-06-20 21:52:07 --> Total execution time: 0.1816
DEBUG - 2023-06-20 21:52:07 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:07 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:52:07 --> Total execution time: 0.2068
DEBUG - 2023-06-20 21:52:07 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:07 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:52:07 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:52:07 --> Total execution time: 0.1622
DEBUG - 2023-06-20 21:52:10 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:10 --> Total execution time: 0.1645
DEBUG - 2023-06-20 21:52:15 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:15 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:16 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:16 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:52:16 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:16 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:52:16 --> start reject fp3
ERROR - 2023-06-20 21:52:16 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:52:16 --> end reject fp3
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:52:16 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:52:16 --> Total execution time: 0.2657
DEBUG - 2023-06-20 21:52:16 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:16 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:52:16 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:52:17 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:17 --> Total execution time: 0.3841
DEBUG - 2023-06-20 21:52:17 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:17 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:17 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:17 --> Total execution time: 0.2258
DEBUG - 2023-06-20 21:52:18 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:18 --> Total execution time: 0.1567
DEBUG - 2023-06-20 21:52:18 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:18 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:52:18 --> start reject fp3
ERROR - 2023-06-20 21:52:18 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:52:18 --> end reject fp3
DEBUG - 2023-06-20 21:52:18 --> Total execution time: 0.1497
DEBUG - 2023-06-20 21:52:18 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:18 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:52:18 --> Total execution time: 0.2163
DEBUG - 2023-06-20 21:52:18 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:18 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:52:18 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:52:18 --> Total execution time: 0.1630
DEBUG - 2023-06-20 21:52:20 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:52:20 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:52:20 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:52:20 --> Total execution time: 0.1791
DEBUG - 2023-06-20 21:53:00 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:53:00 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:00 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:00 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:53:00 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:53:00 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:53:00 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:53:00 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:53:00 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:53:00 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:53:00 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:53:01 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:53:01 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:53:01 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:53:01 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:53:01 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:53:01 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:53:01 --> start reject fp3
ERROR - 2023-06-20 21:53:01 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:53:01 --> end reject fp3
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:53:01 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:53:01 --> Total execution time: 0.2610
DEBUG - 2023-06-20 21:53:01 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:01 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:53:01 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:53:01 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:53:01 --> Total execution time: 0.3680
DEBUG - 2023-06-20 21:53:01 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:53:02 --> Total execution time: 0.2106
DEBUG - 2023-06-20 21:53:02 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:02 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:53:02 --> Total execution time: 0.1796
DEBUG - 2023-06-20 21:53:02 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:02 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:53:02 --> start reject fp3
ERROR - 2023-06-20 21:53:02 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:53:02 --> end reject fp3
DEBUG - 2023-06-20 21:53:02 --> Total execution time: 0.1820
DEBUG - 2023-06-20 21:53:02 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:02 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:53:02 --> Total execution time: 0.2284
DEBUG - 2023-06-20 21:53:02 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:02 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:02 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:53:02 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:53:02 --> Total execution time: 0.1668
DEBUG - 2023-06-20 21:53:04 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:53:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:53:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:53:04 --> Total execution time: 0.1642
DEBUG - 2023-06-20 21:54:35 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:54:35 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:54:35 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:54:35 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:54:35 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:54:35 --> start reject fp3
ERROR - 2023-06-20 21:54:35 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:54:35 --> end reject fp3
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:54:35 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:54:35 --> Total execution time: 0.2797
DEBUG - 2023-06-20 21:54:35 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:35 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:54:35 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:54:35 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:35 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:35 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:54:36 --> Total execution time: 0.3669
DEBUG - 2023-06-20 21:54:36 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:54:36 --> Total execution time: 0.2102
DEBUG - 2023-06-20 21:54:36 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:36 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:54:36 --> Total execution time: 0.1650
DEBUG - 2023-06-20 21:54:36 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:36 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:37 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:54:37 --> start reject fp3
ERROR - 2023-06-20 21:54:37 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:54:37 --> end reject fp3
DEBUG - 2023-06-20 21:54:37 --> Total execution time: 0.1644
DEBUG - 2023-06-20 21:54:37 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:37 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:54:37 --> Total execution time: 0.2022
DEBUG - 2023-06-20 21:54:37 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:37 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:37 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:54:37 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:54:37 --> Total execution time: 0.1648
DEBUG - 2023-06-20 21:54:39 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:54:39 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:54:39 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:54:39 --> Total execution time: 0.1256
DEBUG - 2023-06-20 21:56:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:56:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:56:43 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:56:43 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:56:43 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:56:43 --> start reject fp3
ERROR - 2023-06-20 21:56:43 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:56:43 --> end reject fp3
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:56:43 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:56:43 --> Total execution time: 0.2557
DEBUG - 2023-06-20 21:56:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:43 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:56:43 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:56:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:56:44 --> Total execution time: 0.3582
DEBUG - 2023-06-20 21:56:44 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:56:44 --> Total execution time: 0.2275
DEBUG - 2023-06-20 21:56:44 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:44 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:56:44 --> Total execution time: 0.1691
DEBUG - 2023-06-20 21:56:45 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:45 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:56:45 --> start reject fp3
ERROR - 2023-06-20 21:56:45 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:56:45 --> end reject fp3
DEBUG - 2023-06-20 21:56:45 --> Total execution time: 0.1804
DEBUG - 2023-06-20 21:56:45 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:45 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:56:45 --> Total execution time: 0.2318
DEBUG - 2023-06-20 21:56:45 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:56:45 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:56:45 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:56:45 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:56:45 --> Total execution time: 0.1667
DEBUG - 2023-06-20 21:57:01 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:01 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:01 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:01 --> Total execution time: 0.1598
DEBUG - 2023-06-20 21:57:47 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:47 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:57:47 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:47 --> No URI present. Default controller set.
DEBUG - 2023-06-20 21:57:47 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:47 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:47 --> Total execution time: 0.1402
DEBUG - 2023-06-20 21:57:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 21:57:50 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:57:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 21:57:50 --> start reject fp3
ERROR - 2023-06-20 21:57:50 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:57:50 --> end reject fp3
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 21:57:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 21:57:50 --> Total execution time: 0.2523
DEBUG - 2023-06-20 21:57:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 21:57:50 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 21:57:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:51 --> Total execution time: 0.3977
DEBUG - 2023-06-20 21:57:51 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:51 --> Total execution time: 0.2503
DEBUG - 2023-06-20 21:57:51 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:51 --> Total execution time: 0.1833
DEBUG - 2023-06-20 21:57:51 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:51 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:57:52 --> start reject fp3
ERROR - 2023-06-20 21:57:52 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 21:57:52 --> end reject fp3
DEBUG - 2023-06-20 21:57:52 --> Total execution time: 0.1802
DEBUG - 2023-06-20 21:57:52 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:52 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 21:57:52 --> Total execution time: 0.2153
DEBUG - 2023-06-20 21:57:52 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:52 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 21:57:52 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 21:57:52 --> Total execution time: 0.1666
DEBUG - 2023-06-20 21:57:54 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 21:57:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 21:57:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 21:57:54 --> Total execution time: 0.1608
DEBUG - 2023-06-20 22:10:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:10:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:10:23 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:10:23 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:10:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:10:23 --> start reject fp3
ERROR - 2023-06-20 22:10:23 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 22:10:23 --> end reject fp3
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:10:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 22:10:23 --> Total execution time: 0.2525
DEBUG - 2023-06-20 22:10:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:23 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 22:10:23 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 22:10:24 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:10:24 --> Total execution time: 0.3596
DEBUG - 2023-06-20 22:10:24 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:10:25 --> Total execution time: 0.2199
DEBUG - 2023-06-20 22:10:25 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:25 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:10:25 --> Total execution time: 0.1281
DEBUG - 2023-06-20 22:10:25 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:25 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 22:10:25 --> start reject fp3
ERROR - 2023-06-20 22:10:25 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 22:10:25 --> end reject fp3
DEBUG - 2023-06-20 22:10:25 --> Total execution time: 0.1799
DEBUG - 2023-06-20 22:10:25 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:25 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 22:10:25 --> Total execution time: 0.2148
DEBUG - 2023-06-20 22:10:25 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:25 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:25 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 22:10:25 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 22:10:25 --> Total execution time: 0.1694
DEBUG - 2023-06-20 22:10:27 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:10:27 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:10:27 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:10:27 --> Total execution time: 0.1465
DEBUG - 2023-06-20 22:27:51 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:51 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:51 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:51 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:51 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:51 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:27:51 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 22:27:51 --> start reject fp3
ERROR - 2023-06-20 22:27:51 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 22:27:51 --> end reject fp3
ERROR - 2023-06-20 22:27:51 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:51 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:51 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:51 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:51 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:51 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:51 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 22:27:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 22:27:52 --> Total execution time: 0.2458
DEBUG - 2023-06-20 22:27:52 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:52 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 22:27:52 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 22:27:52 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:52 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:52 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:52 --> Total execution time: 0.3791
DEBUG - 2023-06-20 22:27:53 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:53 --> Total execution time: 0.2289
DEBUG - 2023-06-20 22:27:53 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:53 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:53 --> Total execution time: 0.1525
DEBUG - 2023-06-20 22:27:53 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:53 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 22:27:53 --> start reject fp3
ERROR - 2023-06-20 22:27:53 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 22:27:53 --> end reject fp3
DEBUG - 2023-06-20 22:27:53 --> Total execution time: 0.1646
DEBUG - 2023-06-20 22:27:53 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:53 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:53 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 22:27:54 --> Total execution time: 0.2313
DEBUG - 2023-06-20 22:27:54 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:54 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 22:27:54 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 22:27:54 --> Total execution time: 0.1690
DEBUG - 2023-06-20 22:27:55 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:56 --> Total execution time: 0.3872
DEBUG - 2023-06-20 22:27:56 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:56 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 22:27:56 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 22:27:56 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:56 --> Total execution time: 0.1804
DEBUG - 2023-06-20 22:27:56 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:56 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:56 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:56 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:56 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 22:27:56 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Pemaketan_model.php 187
DEBUG - 2023-06-20 22:27:57 --> Total execution time: 0.1822
DEBUG - 2023-06-20 22:27:58 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:27:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:27:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:58 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 22:27:58 --> Total execution time: 0.1701
DEBUG - 2023-06-20 22:28:05 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 22:28:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 22:28:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 22:28:05 --> Total execution time: 0.1597
DEBUG - 2023-06-20 23:28:41 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:41 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:41 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:41 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:41 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:41 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:28:41 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:28:41 --> start reject fp3
ERROR - 2023-06-20 23:28:41 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:28:41 --> end reject fp3
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:28:41 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 23:28:41 --> Total execution time: 0.2703
DEBUG - 2023-06-20 23:28:41 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:41 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:28:41 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 23:28:42 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:42 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:42 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:43 --> Total execution time: 0.3928
DEBUG - 2023-06-20 23:28:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:43 --> Total execution time: 0.2304
DEBUG - 2023-06-20 23:28:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:43 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:43 --> Total execution time: 0.1972
DEBUG - 2023-06-20 23:28:43 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:43 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:43 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:28:43 --> start reject fp3
ERROR - 2023-06-20 23:28:43 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:28:43 --> end reject fp3
DEBUG - 2023-06-20 23:28:44 --> Total execution time: 0.1631
DEBUG - 2023-06-20 23:28:44 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:44 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 23:28:44 --> Total execution time: 0.2319
DEBUG - 2023-06-20 23:28:44 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:44 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:44 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 23:28:44 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 23:28:44 --> Total execution time: 0.1497
DEBUG - 2023-06-20 23:28:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:50 --> Total execution time: 0.1736
DEBUG - 2023-06-20 23:28:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:50 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:28:50 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 23:28:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:50 --> Total execution time: 0.1549
DEBUG - 2023-06-20 23:28:50 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:50 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:50 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:50 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:50 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:28:51 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Pemaketan_model.php 187
DEBUG - 2023-06-20 23:28:51 --> Total execution time: 0.1846
DEBUG - 2023-06-20 23:28:54 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:54 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:54 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:54 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:54 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:28:55 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-06-20 23:28:55 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
DEBUG - 2023-06-20 23:28:55 --> Total execution time: 0.2042
DEBUG - 2023-06-20 23:28:55 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:55 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:55 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:55 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:28:55 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:28:55 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
DEBUG - 2023-06-20 23:28:55 --> Total execution time: 0.1504
DEBUG - 2023-06-20 23:28:58 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:28:58 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:28:58 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:28:58 --> Total execution time: 0.1526
DEBUG - 2023-06-20 23:40:03 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:40:03 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:03 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:03 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:40:03 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:40:03 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:40:03 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 23:40:03 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 23:40:03 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 23:40:03 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 23:40:03 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 23:40:04 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:40:04 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:40:04 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:40:04 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:40:04 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:40:04 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:40:04 --> start reject fp3
ERROR - 2023-06-20 23:40:04 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:40:04 --> end reject fp3
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:40:04 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 23:40:04 --> Total execution time: 0.2644
DEBUG - 2023-06-20 23:40:04 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:04 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:40:04 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 23:40:04 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:04 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:04 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:40:05 --> Total execution time: 0.4028
DEBUG - 2023-06-20 23:40:05 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:40:05 --> Total execution time: 0.2235
DEBUG - 2023-06-20 23:40:05 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:05 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:40:05 --> Total execution time: 0.1834
DEBUG - 2023-06-20 23:40:05 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:05 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:05 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:40:06 --> start reject fp3
ERROR - 2023-06-20 23:40:06 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:40:06 --> end reject fp3
DEBUG - 2023-06-20 23:40:06 --> Total execution time: 0.1840
DEBUG - 2023-06-20 23:40:06 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:06 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 23:40:06 --> Total execution time: 0.2268
DEBUG - 2023-06-20 23:40:06 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:06 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:06 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 23:40:06 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 23:40:06 --> Total execution time: 0.1366
DEBUG - 2023-06-20 23:40:07 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:07 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:07 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:40:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:40:07 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:40:07 --> Total execution time: 0.1664
DEBUG - 2023-06-20 23:40:07 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:40:07 --> 404 Page Not Found: Main/login_admin
DEBUG - 2023-06-20 23:40:07 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:07 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:40:07 --> 404 Page Not Found: Source/vendors
DEBUG - 2023-06-20 23:40:08 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:08 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:40:08 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:40:08 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:40:08 --> 404 Page Not Found: Source/js
ERROR - 2023-06-20 23:40:08 --> 404 Page Not Found: Source/js
DEBUG - 2023-06-20 23:41:19 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:19 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:41:19 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:19 --> No URI present. Default controller set.
DEBUG - 2023-06-20 23:41:19 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:19 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:19 --> Total execution time: 0.1114
DEBUG - 2023-06-20 23:41:22 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:22 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:22 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:41:22 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:41:22 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:41:22 --> start reject fp3
ERROR - 2023-06-20 23:41:22 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:41:22 --> end reject fp3
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:41:22 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 23:41:22 --> Total execution time: 0.2687
DEBUG - 2023-06-20 23:41:22 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:22 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:41:22 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 23:41:22 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:23 --> Total execution time: 0.3867
DEBUG - 2023-06-20 23:41:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:23 --> Total execution time: 0.2469
DEBUG - 2023-06-20 23:41:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:23 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:24 --> Total execution time: 0.1828
DEBUG - 2023-06-20 23:41:24 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:24 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:41:24 --> start reject fp3
ERROR - 2023-06-20 23:41:24 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:41:24 --> end reject fp3
DEBUG - 2023-06-20 23:41:24 --> Total execution time: 0.1816
DEBUG - 2023-06-20 23:41:24 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:24 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 23:41:24 --> Total execution time: 0.2352
DEBUG - 2023-06-20 23:41:24 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:24 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 23:41:24 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 23:41:24 --> Total execution time: 0.1775
DEBUG - 2023-06-20 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:26 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:41:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:41:26 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:41:26 --> Total execution time: 0.1576
DEBUG - 2023-06-20 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:41:26 --> 404 Page Not Found: Main/login_admin
DEBUG - 2023-06-20 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:26 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:26 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:41:26 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:41:26 --> 404 Page Not Found: Source/vendors
ERROR - 2023-06-20 23:41:26 --> 404 Page Not Found: Source/js
ERROR - 2023-06-20 23:41:26 --> 404 Page Not Found: Source/js
DEBUG - 2023-06-20 23:42:18 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:18 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:42:18 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:18 --> No URI present. Default controller set.
DEBUG - 2023-06-20 23:42:18 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:18 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:18 --> Total execution time: 0.1420
DEBUG - 2023-06-20 23:42:21 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:21 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:21 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:21 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:42:21 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:42:21 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:42:21 --> start reject fp3
ERROR - 2023-06-20 23:42:21 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:42:21 --> end reject fp3
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:42:21 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 23:42:21 --> Total execution time: 0.2818
DEBUG - 2023-06-20 23:42:21 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:21 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:42:21 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 23:42:21 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:21 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:22 --> Total execution time: 0.3889
DEBUG - 2023-06-20 23:42:22 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:22 --> Total execution time: 0.2307
DEBUG - 2023-06-20 23:42:22 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:22 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:22 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:23 --> Total execution time: 0.1702
DEBUG - 2023-06-20 23:42:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:23 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:42:23 --> start reject fp3
ERROR - 2023-06-20 23:42:23 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:42:23 --> end reject fp3
DEBUG - 2023-06-20 23:42:23 --> Total execution time: 0.1818
DEBUG - 2023-06-20 23:42:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:23 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 23:42:23 --> Total execution time: 0.1751
DEBUG - 2023-06-20 23:42:23 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:23 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:23 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 23:42:23 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 23:42:23 --> Total execution time: 0.1761
DEBUG - 2023-06-20 23:42:24 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:42:24 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:42:24 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:42:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:42:24 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:42:24 --> Total execution time: 0.1403
DEBUG - 2023-06-20 23:43:09 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:43:09 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:09 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:09 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:43:09 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:43:09 --> Session class already loaded. Second attempt ignored.
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:43:09 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\eproc\Internal\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-06-20 23:43:09 --> start reject fp3
ERROR - 2023-06-20 23:43:09 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:43:09 --> end reject fp3
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-06-20 23:43:09 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\eproc\Internal\eproc_nusantararegas\system\libraries\Parser.php 150
DEBUG - 2023-06-20 23:43:09 --> Total execution time: 0.2877
DEBUG - 2023-06-20 23:43:10 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:10 --> Global POST, GET and COOKIE data sanitized
ERROR - 2023-06-20 23:43:10 --> 404 Page Not Found: Assets/lampiran
DEBUG - 2023-06-20 23:43:10 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:10 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:43:10 --> Total execution time: 0.3746
DEBUG - 2023-06-20 23:43:10 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:10 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:43:11 --> Total execution time: 0.2246
DEBUG - 2023-06-20 23:43:11 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:11 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:43:11 --> Total execution time: 0.1677
DEBUG - 2023-06-20 23:43:11 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:11 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:43:11 --> start reject fp3
ERROR - 2023-06-20 23:43:11 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-06-20 23:43:11 --> end reject fp3
DEBUG - 2023-06-20 23:43:11 --> Total execution time: 0.1858
DEBUG - 2023-06-20 23:43:11 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:11 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 996
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1023
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1043
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1069
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1092
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1113
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1156
DEBUG - 2023-06-20 23:43:11 --> Total execution time: 0.2262
DEBUG - 2023-06-20 23:43:11 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:11 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:11 --> Encryption: Auto-configured driver 'openssl'.
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1506
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1530
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1549
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1569
ERROR - 2023-06-20 23:43:11 --> Severity: Warning --> Division by zero C:\inetpub\eproc\Internal\eproc_nusantararegas\application\controllers\Main.php 1590
DEBUG - 2023-06-20 23:43:11 --> Total execution time: 0.1671
DEBUG - 2023-06-20 23:43:14 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:14 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:14 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:43:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:43:14 --> Session class already loaded. Second attempt ignored.
DEBUG - 2023-06-20 23:43:14 --> Total execution time: 0.1523
DEBUG - 2023-06-20 23:43:16 --> UTF-8 Support Enabled
DEBUG - 2023-06-20 23:43:16 --> Global POST, GET and COOKIE data sanitized
DEBUG - 2023-06-20 23:43:16 --> Encryption: Auto-configured driver 'openssl'.
DEBUG - 2023-06-20 23:43:16 --> Total execution time: 0.1589
