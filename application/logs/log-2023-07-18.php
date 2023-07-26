<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2023-07-18 10:33:13 --> start year
ERROR - 2023-07-18 10:33:13 --> 2022
ERROR - 2023-07-18 10:33:13 --> end year
ERROR - 2023-07-18 10:33:13 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 21 - Invalid query: 	SELECT
						a.*,
						b.name division
					FROM 
						ms_fppbj a 
					LEFT JOIN
						tb_division b ON b.id=a.id_division
					WHERE 
						(is_status = 0 AND a.del = 0 AND (idr_anggaran <= 100000000 OR (idr_anggaran > 100000000 AND metode_pengadaan = 3)  AND id_division = 15 )
						OR  

						(is_status = 0 AND a.del = 0 AND idr_anggaran > 100000000))  AND id_division = 15 

						OR
						(is_status = 2 AND a.del = 0  AND id_division = 15 )

						OR

						(is_status = 1 AND a.del = 0  AND id_division = 15 )
						
						AND

						
ERROR - 2023-07-18 10:33:14 --> Severity: Error --> Call to a member function result_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 59
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:18 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:18 --> start reject fp3
ERROR - 2023-07-18 10:33:18 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:33:18 --> end reject fp3
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:18 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:20 --> start reject fp3
ERROR - 2023-07-18 10:33:20 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:33:20 --> end reject fp3
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 995
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1022
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1042
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1068
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1091
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1112
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1155
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1505
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1529
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1548
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1568
ERROR - 2023-07-18 10:33:20 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1589
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:25 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:33:25 --> start reject fp3
ERROR - 2023-07-18 10:33:25 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:33:25 --> end reject fp3
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:25 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:33:27 --> start reject fp3
ERROR - 2023-07-18 10:33:27 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:33:27 --> end reject fp3
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 995
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1022
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1042
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1068
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1091
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1112
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1155
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1505
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1529
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1548
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1568
ERROR - 2023-07-18 10:33:27 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1589
ERROR - 2023-07-18 10:33:29 --> start year
ERROR - 2023-07-18 10:33:29 --> 2022
ERROR - 2023-07-18 10:33:29 --> end year
ERROR - 2023-07-18 10:33:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '' at line 21 - Invalid query: 	SELECT
						a.*,
						b.name division
					FROM 
						ms_fppbj a 
					LEFT JOIN
						tb_division b ON b.id=a.id_division
					WHERE 
						(is_status = 0 AND a.del = 0 AND (idr_anggaran <= 100000000 OR (idr_anggaran > 100000000 AND metode_pengadaan = 3)  AND id_division = 15 )
						OR  

						(is_status = 0 AND a.del = 0 AND idr_anggaran > 100000000))  AND id_division = 15 

						OR
						(is_status = 2 AND a.del = 0  AND id_division = 15 )

						OR

						(is_status = 1 AND a.del = 0  AND id_division = 15 )
						
						AND

						
ERROR - 2023-07-18 10:33:29 --> Severity: Error --> Call to a member function result_array() on boolean C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fp3_model.php 59
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:05 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:05 --> start reject fp3
ERROR - 2023-07-18 10:35:05 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 18 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:35:05 --> end reject fp3
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:05 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:07 --> start reject fp3
ERROR - 2023-07-18 10:35:07 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 18 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:35:07 --> end reject fp3
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 995
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1022
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1042
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1068
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1091
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1112
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1155
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1505
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1529
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1548
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1568
ERROR - 2023-07-18 10:35:07 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1589
ERROR - 2023-07-18 10:35:10 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 10:35:26 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 10:35:26 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:33 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:35:33 --> start reject fp3
ERROR - 2023-07-18 10:35:33 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:35:33 --> end reject fp3
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:33 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:34 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:35:35 --> start reject fp3
ERROR - 2023-07-18 10:35:35 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:35:35 --> end reject fp3
ERROR - 2023-07-18 10:35:35 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 995
ERROR - 2023-07-18 10:35:35 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1022
ERROR - 2023-07-18 10:35:35 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1042
ERROR - 2023-07-18 10:35:35 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1068
ERROR - 2023-07-18 10:35:35 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1091
ERROR - 2023-07-18 10:35:35 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1112
ERROR - 2023-07-18 10:35:35 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1155
ERROR - 2023-07-18 10:35:36 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1505
ERROR - 2023-07-18 10:35:36 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1529
ERROR - 2023-07-18 10:35:36 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1548
ERROR - 2023-07-18 10:35:36 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1568
ERROR - 2023-07-18 10:35:36 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1589
ERROR - 2023-07-18 10:35:37 --> start year
ERROR - 2023-07-18 10:35:37 --> 2022
ERROR - 2023-07-18 10:35:37 --> end year
ERROR - 2023-07-18 10:35:37 --> start year
ERROR - 2023-07-18 10:35:37 --> 2022
ERROR - 2023-07-18 10:35:37 --> end year
ERROR - 2023-07-18 10:35:37 --> start year
ERROR - 2023-07-18 10:35:37 --> 2022
ERROR - 2023-07-18 10:35:37 --> end year
ERROR - 2023-07-18 10:35:38 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 10:35:38 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 10:35:56 --> 404 Page Not Found: Fp3/15
ERROR - 2023-07-18 10:35:56 --> 404 Page Not Found: Source/vendors
ERROR - 2023-07-18 10:35:56 --> 404 Page Not Found: Source/js
ERROR - 2023-07-18 10:35:56 --> 404 Page Not Found: Source/js
ERROR - 2023-07-18 10:35:58 --> 404 Page Not Found: Source/vendors
ERROR - 2023-07-18 10:35:58 --> 404 Page Not Found: Source/js
ERROR - 2023-07-18 10:35:58 --> 404 Page Not Found: Source/js
ERROR - 2023-07-18 10:35:59 --> start year
ERROR - 2023-07-18 10:35:59 --> 2022
ERROR - 2023-07-18 10:35:59 --> end year
ERROR - 2023-07-18 10:35:59 --> start year
ERROR - 2023-07-18 10:35:59 --> 2022
ERROR - 2023-07-18 10:35:59 --> end year
ERROR - 2023-07-18 10:35:59 --> start year
ERROR - 2023-07-18 10:35:59 --> 2022
ERROR - 2023-07-18 10:35:59 --> end year
ERROR - 2023-07-18 10:36:00 --> start year
ERROR - 2023-07-18 10:36:00 --> 2022
ERROR - 2023-07-18 10:36:00 --> end year
ERROR - 2023-07-18 10:36:01 --> start year
ERROR - 2023-07-18 10:36:01 --> 2022
ERROR - 2023-07-18 10:36:01 --> end year
ERROR - 2023-07-18 10:36:01 --> start year
ERROR - 2023-07-18 10:36:01 --> 2022
ERROR - 2023-07-18 10:36:01 --> end year
ERROR - 2023-07-18 10:36:31 --> start year
ERROR - 2023-07-18 10:36:31 --> 2022
ERROR - 2023-07-18 10:36:31 --> end year
ERROR - 2023-07-18 10:36:31 --> start year
ERROR - 2023-07-18 10:36:31 --> 2022
ERROR - 2023-07-18 10:36:31 --> end year
ERROR - 2023-07-18 10:36:31 --> start year
ERROR - 2023-07-18 10:36:31 --> 2022
ERROR - 2023-07-18 10:36:31 --> end year
ERROR - 2023-07-18 10:37:08 --> start year
ERROR - 2023-07-18 10:37:08 --> 2022
ERROR - 2023-07-18 10:37:08 --> end year
ERROR - 2023-07-18 10:37:09 --> start year
ERROR - 2023-07-18 10:37:09 --> 2022
ERROR - 2023-07-18 10:37:09 --> end year
ERROR - 2023-07-18 10:37:09 --> start year
ERROR - 2023-07-18 10:37:09 --> 2022
ERROR - 2023-07-18 10:37:09 --> end year
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:37:23 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:37:23 --> start reject fp3
ERROR - 2023-07-18 10:37:23 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:37:23 --> end reject fp3
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:23 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:37:25 --> start reject fp3
ERROR - 2023-07-18 10:37:25 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:37:25 --> end reject fp3
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 995
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1022
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1042
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1068
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1091
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1112
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1155
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1505
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1529
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1548
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1568
ERROR - 2023-07-18 10:37:25 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1589
ERROR - 2023-07-18 10:37:27 --> start year
ERROR - 2023-07-18 10:37:27 --> 2022
ERROR - 2023-07-18 10:37:27 --> end year
ERROR - 2023-07-18 10:37:28 --> start year
ERROR - 2023-07-18 10:37:28 --> 2022
ERROR - 2023-07-18 10:37:28 --> end year
ERROR - 2023-07-18 10:37:28 --> start year
ERROR - 2023-07-18 10:37:28 --> 2022
ERROR - 2023-07-18 10:37:28 --> end year
ERROR - 2023-07-18 10:38:16 --> start year
ERROR - 2023-07-18 10:38:16 --> 2022
ERROR - 2023-07-18 10:38:16 --> end year
ERROR - 2023-07-18 10:40:16 --> start year
ERROR - 2023-07-18 10:40:16 --> 2022
ERROR - 2023-07-18 10:40:16 --> end year
ERROR - 2023-07-18 10:41:36 --> start year
ERROR - 2023-07-18 10:41:36 --> 2022
ERROR - 2023-07-18 10:41:36 --> end year
ERROR - 2023-07-18 10:41:37 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 741
ERROR - 2023-07-18 10:41:42 --> Severity: Warning --> fsockopen(): unable to connect to mail.pertamina.com:25 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Email.php 1990
ERROR - 2023-07-18 10:41:42 --> start year
ERROR - 2023-07-18 10:41:42 --> 2022
ERROR - 2023-07-18 10:41:42 --> end year
ERROR - 2023-07-18 10:41:42 --> start year
ERROR - 2023-07-18 10:41:42 --> 2022
ERROR - 2023-07-18 10:41:42 --> end year
ERROR - 2023-07-18 10:41:43 --> start year
ERROR - 2023-07-18 10:41:43 --> 2022
ERROR - 2023-07-18 10:41:43 --> end year
ERROR - 2023-07-18 10:41:50 --> start year
ERROR - 2023-07-18 10:41:50 --> 2022
ERROR - 2023-07-18 10:41:50 --> end year
ERROR - 2023-07-18 10:41:53 --> start year
ERROR - 2023-07-18 10:41:53 --> 2022
ERROR - 2023-07-18 10:41:53 --> end year
ERROR - 2023-07-18 10:41:53 --> start year
ERROR - 2023-07-18 10:41:53 --> 2022
ERROR - 2023-07-18 10:41:53 --> end year
ERROR - 2023-07-18 10:41:53 --> start year
ERROR - 2023-07-18 10:41:53 --> 2022
ERROR - 2023-07-18 10:41:53 --> end year
ERROR - 2023-07-18 10:41:55 --> start year
ERROR - 2023-07-18 10:41:55 --> 2022
ERROR - 2023-07-18 10:41:55 --> end year
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:42:36 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 10:42:36 --> start reject fp3
ERROR - 2023-07-18 10:42:36 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:42:36 --> end reject fp3
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:36 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 10:42:38 --> start reject fp3
ERROR - 2023-07-18 10:42:38 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 10:42:38 --> end reject fp3
ERROR - 2023-07-18 10:42:42 --> start year
ERROR - 2023-07-18 10:42:42 --> 2022
ERROR - 2023-07-18 10:42:42 --> end year
ERROR - 2023-07-18 10:43:07 --> start year
ERROR - 2023-07-18 10:43:07 --> 2022
ERROR - 2023-07-18 10:43:07 --> end year
ERROR - 2023-07-18 10:44:24 --> start year
ERROR - 2023-07-18 10:44:24 --> 2022
ERROR - 2023-07-18 10:44:24 --> end year
ERROR - 2023-07-18 10:44:25 --> start year
ERROR - 2023-07-18 10:44:25 --> 2022
ERROR - 2023-07-18 10:44:25 --> end year
ERROR - 2023-07-18 10:44:25 --> start year
ERROR - 2023-07-18 10:44:25 --> 2022
ERROR - 2023-07-18 10:44:25 --> end year
ERROR - 2023-07-18 10:44:26 --> start year
ERROR - 2023-07-18 10:44:26 --> 2022
ERROR - 2023-07-18 10:44:26 --> end year
ERROR - 2023-07-18 10:44:36 --> start year
ERROR - 2023-07-18 10:44:36 --> 2022
ERROR - 2023-07-18 10:44:36 --> end year
ERROR - 2023-07-18 10:46:02 --> start year
ERROR - 2023-07-18 10:46:02 --> 2022
ERROR - 2023-07-18 10:46:02 --> end year
ERROR - 2023-07-18 10:48:25 --> start year
ERROR - 2023-07-18 10:48:25 --> 2022
ERROR - 2023-07-18 10:48:25 --> end year
ERROR - 2023-07-18 10:48:33 --> start year
ERROR - 2023-07-18 10:48:33 --> 2022
ERROR - 2023-07-18 10:48:33 --> end year
ERROR - 2023-07-18 10:48:33 --> start year
ERROR - 2023-07-18 10:48:33 --> 2022
ERROR - 2023-07-18 10:48:33 --> end year
ERROR - 2023-07-18 10:48:33 --> start year
ERROR - 2023-07-18 10:48:33 --> 2022
ERROR - 2023-07-18 10:48:33 --> end year
ERROR - 2023-07-18 10:48:35 --> start year
ERROR - 2023-07-18 10:48:35 --> 2022
ERROR - 2023-07-18 10:48:35 --> end year
ERROR - 2023-07-18 10:48:53 --> start year
ERROR - 2023-07-18 10:48:53 --> 2022
ERROR - 2023-07-18 10:48:53 --> end year
ERROR - 2023-07-18 10:50:24 --> start year
ERROR - 2023-07-18 10:50:24 --> 2022
ERROR - 2023-07-18 10:50:24 --> end year
ERROR - 2023-07-18 10:50:25 --> start year
ERROR - 2023-07-18 10:50:25 --> 2022
ERROR - 2023-07-18 10:50:25 --> end year
ERROR - 2023-07-18 10:50:25 --> start year
ERROR - 2023-07-18 10:50:25 --> 2022
ERROR - 2023-07-18 10:50:25 --> end year
ERROR - 2023-07-18 10:50:27 --> start year
ERROR - 2023-07-18 10:50:27 --> 2022
ERROR - 2023-07-18 10:50:27 --> end year
ERROR - 2023-07-18 10:50:28 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:50:28 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:50:28 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 653
ERROR - 2023-07-18 10:50:28 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:50:28 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:50:28 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 653
ERROR - 2023-07-18 10:54:39 --> start year
ERROR - 2023-07-18 10:54:39 --> 2022
ERROR - 2023-07-18 10:54:39 --> end year
ERROR - 2023-07-18 10:54:45 --> start year
ERROR - 2023-07-18 10:54:45 --> 2022
ERROR - 2023-07-18 10:54:45 --> end year
ERROR - 2023-07-18 10:55:01 --> start year
ERROR - 2023-07-18 10:55:01 --> 2022
ERROR - 2023-07-18 10:55:01 --> end year
ERROR - 2023-07-18 10:55:02 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 741
ERROR - 2023-07-18 10:55:07 --> Severity: Warning --> fsockopen(): unable to connect to mail.pertamina.com:25 (A connection attempt failed because the connected party did not properly respond after a period of time, or established connection failed because connected host has failed to respond.
) C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Email.php 1990
ERROR - 2023-07-18 10:55:07 --> start year
ERROR - 2023-07-18 10:55:07 --> 2022
ERROR - 2023-07-18 10:55:07 --> end year
ERROR - 2023-07-18 10:55:08 --> start year
ERROR - 2023-07-18 10:55:08 --> 2022
ERROR - 2023-07-18 10:55:08 --> end year
ERROR - 2023-07-18 10:55:08 --> start year
ERROR - 2023-07-18 10:55:08 --> 2022
ERROR - 2023-07-18 10:55:08 --> end year
ERROR - 2023-07-18 10:56:54 --> start year
ERROR - 2023-07-18 10:56:54 --> 2022
ERROR - 2023-07-18 10:56:54 --> end year
ERROR - 2023-07-18 10:56:54 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:56:54 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:56:54 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 653
ERROR - 2023-07-18 10:56:54 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:56:54 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 652
ERROR - 2023-07-18 10:56:54 --> Severity: Warning --> Illegal offset type C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Fp3.php 653
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:03:20 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:03:20 --> start reject fp3
ERROR - 2023-07-18 11:03:20 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 11:03:20 --> end reject fp3
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:20 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:03:22 --> start reject fp3
ERROR - 2023-07-18 11:03:22 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 11:03:22 --> end reject fp3
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 995
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1022
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1042
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1068
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1091
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1112
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1155
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1505
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1529
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1548
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1568
ERROR - 2023-07-18 11:03:22 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1589
ERROR - 2023-07-18 11:03:30 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:03:51 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:03:51 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:03:51 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:04:05 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:04:05 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:04:05 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:04:56 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:04:56 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:04:57 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:02 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:02 --> start reject fp3
ERROR - 2023-07-18 11:06:02 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 11:06:02 --> end reject fp3
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:02 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:04 --> start reject fp3
ERROR - 2023-07-18 11:06:04 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND id_division = 15 AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 11:06:04 --> end reject fp3
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 995
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1022
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1042
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1068
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1091
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1112
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1155
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1505
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1529
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1548
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1568
ERROR - 2023-07-18 11:06:05 --> Severity: Warning --> Division by zero C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Main.php 1589
ERROR - 2023-07-18 11:06:07 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:52 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 11:06:52 --> start reject fp3
ERROR - 2023-07-18 11:06:52 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 11:06:52 --> end reject fp3
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:52 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 11:06:54 --> start reject fp3
ERROR - 2023-07-18 11:06:54 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 11:06:54 --> end reject fp3
ERROR - 2023-07-18 11:19:09 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:19:25 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:19:25 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:19:25 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:19:37 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:19:37 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:19:38 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:20:11 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:20:11 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:20:11 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:20:19 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:24:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:24:10 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:24:10 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:24:10 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:24:40 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:24:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:24:43 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:24:44 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:24:57 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:24:57 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:24:57 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:28:53 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:28:59 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:28:59 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:28:59 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:30:01 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:31:43 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:31:43 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:31:43 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:31:47 --> 404 Page Not Found: Assets/lampiran
ERROR - 2023-07-18 11:31:47 --> 404 Page Not Found: Assets/lampiran
ERROR - 2023-07-18 11:31:47 --> 404 Page Not Found: Assets/lampiran
ERROR - 2023-07-18 11:31:47 --> 404 Page Not Found: Assets/lampiran
ERROR - 2023-07-18 11:39:04 --> Severity: Warning --> in_array() expects parameter 2 to be array, integer given C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Pemaketan_model.php 187
ERROR - 2023-07-18 11:39:17 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:39:17 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:39:17 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 11:43:01 --> Severity: Warning --> Invalid argument supplied for foreach() C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Export_model.php 39
ERROR - 2023-07-18 11:43:01 --> Severity: Warning --> substr() expects at least 2 parameters, 1 given C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1190
ERROR - 2023-07-18 11:43:01 --> Severity: Warning --> Missing argument 2 for Pemaketan::get_pic() C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Pemaketan.php 1825
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 20:50:12 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 20:50:12 --> start reject fp3
ERROR - 2023-07-18 20:50:12 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 20:50:12 --> end reject fp3
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:12 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 20:50:15 --> start reject fp3
ERROR - 2023-07-18 20:50:15 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 20:50:15 --> end reject fp3
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:02:07 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:02:07 --> start reject fp3
ERROR - 2023-07-18 21:02:07 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 21:02:07 --> end reject fp3
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:07 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:08 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:02:30 --> start reject fp3
ERROR - 2023-07-18 21:02:30 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 21:02:30 --> end reject fp3
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 26 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 369
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 1 for Main_model::get_total_fppbj_semua(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 27 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 429
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_pending(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 28 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 528
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_selesai(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 29 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 394
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 1 for Main_model::get_fppbj_reject(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 30 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Main_model.php 614
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 52 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 53 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 54 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 55 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 56 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:10:56 --> Severity: Warning --> Missing argument 2 for Fkpbj_model::statusApprove(), called in C:\inetpub\wwwroot\eproc_nusantararegas\application\controllers\Dashboard.php on line 57 and defined C:\inetpub\wwwroot\eproc_nusantararegas\application\models\Fkpbj_model.php 167
ERROR - 2023-07-18 21:10:56 --> start reject fp3
ERROR - 2023-07-18 21:10:56 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 21:10:56 --> end reject fp3
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:10:56 --> Severity: 4096 --> Object of class CI_DB_mysqli_result could not be converted to string C:\inetpub\wwwroot\eproc_nusantararegas\system\libraries\Parser.php 150
ERROR - 2023-07-18 21:11:09 --> start reject fp3
ERROR - 2023-07-18 21:11:09 -->  	SELECT
						*
					FROM
						ms_fppbj
					WHERE
						  entry_stamp LIKE "%2023%" AND  del = 0  AND is_status = 1 AND is_reject = 0 AND is_approved = 0
ERROR - 2023-07-18 21:11:09 --> end reject fp3
