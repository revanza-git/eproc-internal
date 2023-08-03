<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-26 00:27:44 --> start year
ERROR - 2023-07-26 00:27:44 --> 2022
ERROR - 2023-07-26 00:27:44 --> end year
ERROR - 2023-07-26 00:27:47 --> start year
ERROR - 2023-07-26 00:27:47 --> 2022
ERROR - 2023-07-26 00:27:47 --> end year
ERROR - 2023-07-26 00:29:45 --> start year
ERROR - 2023-07-26 00:29:45 --> 2022
ERROR - 2023-07-26 00:29:45 --> end year
ERROR - 2023-07-26 00:29:56 --> start year
ERROR - 2023-07-26 00:29:56 --> 2022
ERROR - 2023-07-26 00:29:56 --> end year
ERROR - 2023-07-26 00:29:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 00:29:56 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 00:30:07 --> start_get_data
ERROR - 2023-07-26 00:30:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 43
ERROR - 2023-07-26 00:30:07 --> 	SELECT  name,
							count(*) AS total,
							ms_fppbj.id,
							tb_division.id id_division
					FROM ms_fppbj
					JOIN tb_division ON ms_fppbj.id_division = tb_division.id 
					 WHERE ms_fppbj.del = 0 AND ms_fppbj.entry_stamp BETWEEN '2019-01-01 00:00:00' AND '2019-12-31 23:59:59'  
ERROR - 2023-07-26 00:30:07 --> end_get_data
ERROR - 2023-07-26 10:03:17 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-26 10:03:17 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:03:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:03:18 --> start reject fp3
ERROR - 2023-07-26 10:03:18 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 10:03:18 --> end reject fp3
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:03:24 --> start reject fp3
ERROR - 2023-07-26 10:03:24 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 10:03:24 --> end reject fp3
ERROR - 2023-07-26 10:52:49 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-26 10:52:49 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-26 10:52:49 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-26 10:52:49 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-26 10:52:49 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-26 10:52:49 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:52:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:52:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:52:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:52:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:52:50 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 10:52:50 --> start reject fp3
ERROR - 2023-07-26 10:52:50 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 10:52:50 --> end reject fp3
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:50 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 10:52:52 --> start reject fp3
ERROR - 2023-07-26 10:52:52 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 10:52:52 --> end reject fp3
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 13:34:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 13:34:39 --> start reject fp3
ERROR - 2023-07-26 13:34:39 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 13:34:39 --> end reject fp3
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 13:34:42 --> start reject fp3
ERROR - 2023-07-26 13:34:42 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 13:34:42 --> end reject fp3
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 14:32:39 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 14:32:39 --> start reject fp3
ERROR - 2023-07-26 14:32:39 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 14:32:39 --> end reject fp3
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:39 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 14:32:41 --> start reject fp3
ERROR - 2023-07-26 14:32:41 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 14:32:41 --> end reject fp3
ERROR - 2023-07-26 14:33:08 --> start_get_data
ERROR - 2023-07-26 14:33:08 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 43
ERROR - 2023-07-26 14:33:08 --> 	SELECT  name,
							count(*) AS total,
							ms_fppbj.id,
							tb_division.id id_division
					FROM ms_fppbj
					JOIN tb_division ON ms_fppbj.id_division = tb_division.id 
					 WHERE ms_fppbj.del = 0 AND ms_fppbj.entry_stamp BETWEEN '2022-01-01 00:00:00' AND '2022-12-31 23:59:59'  
ERROR - 2023-07-26 14:33:08 --> end_get_data
ERROR - 2023-07-26 14:34:26 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-26 14:34:35 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-26 14:34:35 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 16:27:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-26 16:27:36 --> start reject fp3
ERROR - 2023-07-26 16:27:36 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 16:27:36 --> end reject fp3
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-26 16:27:48 --> start reject fp3
ERROR - 2023-07-26 16:27:48 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-26 16:27:48 --> end reject fp3
ERROR - 2023-07-26 16:27:54 --> start year
ERROR - 2023-07-26 16:27:54 --> 2022
ERROR - 2023-07-26 16:27:54 --> end year
ERROR - 2023-07-26 16:28:22 --> start year
ERROR - 2023-07-26 16:28:22 --> 2022
ERROR - 2023-07-26 16:28:22 --> end year
ERROR - 2023-07-26 16:28:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:28:22 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 16:28:35 --> start year
ERROR - 2023-07-26 16:28:35 --> 2022
ERROR - 2023-07-26 16:28:35 --> end year
ERROR - 2023-07-26 16:28:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:28:35 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 16:29:07 --> start year
ERROR - 2023-07-26 16:29:07 --> 2022
ERROR - 2023-07-26 16:29:07 --> end year
ERROR - 2023-07-26 16:29:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:29:07 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 16:29:56 --> start year
ERROR - 2023-07-26 16:29:56 --> 2022
ERROR - 2023-07-26 16:29:56 --> end year
ERROR - 2023-07-26 16:29:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:29:56 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 16:30:03 --> start year
ERROR - 2023-07-26 16:30:03 --> 2022
ERROR - 2023-07-26 16:30:03 --> end year
ERROR - 2023-07-26 16:30:04 --> start year
ERROR - 2023-07-26 16:30:04 --> 2022
ERROR - 2023-07-26 16:30:04 --> end year
ERROR - 2023-07-26 16:30:07 --> start year
ERROR - 2023-07-26 16:30:07 --> 2022
ERROR - 2023-07-26 16:30:07 --> end year
ERROR - 2023-07-26 16:30:07 --> start year
ERROR - 2023-07-26 16:30:07 --> 2022
ERROR - 2023-07-26 16:30:07 --> end year
ERROR - 2023-07-26 16:30:07 --> start year
ERROR - 2023-07-26 16:30:07 --> 2022
ERROR - 2023-07-26 16:30:07 --> end year
ERROR - 2023-07-26 16:30:09 --> start year
ERROR - 2023-07-26 16:30:09 --> 2022
ERROR - 2023-07-26 16:30:09 --> end year
ERROR - 2023-07-26 16:30:43 --> start year
ERROR - 2023-07-26 16:30:43 --> 2022
ERROR - 2023-07-26 16:30:43 --> end year
ERROR - 2023-07-26 16:30:49 --> start year
ERROR - 2023-07-26 16:30:49 --> 2022
ERROR - 2023-07-26 16:30:49 --> end year
ERROR - 2023-07-26 16:30:56 --> start year
ERROR - 2023-07-26 16:30:56 --> 2022
ERROR - 2023-07-26 16:30:56 --> end year
ERROR - 2023-07-26 16:30:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:30:56 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 16:31:03 --> start year
ERROR - 2023-07-26 16:31:03 --> 2022
ERROR - 2023-07-26 16:31:03 --> end year
ERROR - 2023-07-26 16:31:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:31:03 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 16:31:06 --> start year
ERROR - 2023-07-26 16:31:06 --> 2022
ERROR - 2023-07-26 16:31:06 --> end year
ERROR - 2023-07-26 16:31:06 --> start year
ERROR - 2023-07-26 16:31:06 --> 2022
ERROR - 2023-07-26 16:31:06 --> end year
ERROR - 2023-07-26 16:31:07 --> start year
ERROR - 2023-07-26 16:31:07 --> 2022
ERROR - 2023-07-26 16:31:07 --> end year
ERROR - 2023-07-26 16:31:22 --> start year
ERROR - 2023-07-26 16:31:22 --> 2022
ERROR - 2023-07-26 16:31:22 --> end year
ERROR - 2023-07-26 16:31:22 --> start year
ERROR - 2023-07-26 16:31:22 --> 2022
ERROR - 2023-07-26 16:31:22 --> end year
ERROR - 2023-07-26 16:31:22 --> start year
ERROR - 2023-07-26 16:31:22 --> 2022
ERROR - 2023-07-26 16:31:22 --> end year
ERROR - 2023-07-26 16:31:23 --> start year
ERROR - 2023-07-26 16:31:23 --> 2022
ERROR - 2023-07-26 16:31:23 --> end year
ERROR - 2023-07-26 16:32:07 --> start year
ERROR - 2023-07-26 16:32:07 --> 2022
ERROR - 2023-07-26 16:32:07 --> end year
ERROR - 2023-07-26 16:32:18 --> start year
ERROR - 2023-07-26 16:32:18 --> 2022
ERROR - 2023-07-26 16:32:18 --> end year
ERROR - 2023-07-26 16:32:21 --> start year
ERROR - 2023-07-26 16:32:21 --> 2022
ERROR - 2023-07-26 16:32:21 --> end year
ERROR - 2023-07-26 16:32:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:32:21 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
ERROR - 2023-07-26 16:33:46 --> start year
ERROR - 2023-07-26 16:33:46 --> 2022
ERROR - 2023-07-26 16:33:46 --> end year
ERROR - 2023-07-26 16:33:46 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 1 - Invalid query: SELECT * FROM ms_fppbj WHERE id = 
ERROR - 2023-07-26 16:33:46 --> Severity: Error --> Call to a member function row_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 184
