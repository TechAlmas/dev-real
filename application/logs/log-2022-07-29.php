<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-07-29 05:06:13 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'wetransfer' C:\wamp64\www\dev-real\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2022-07-29 05:06:13 --> Unable to connect to the database
ERROR - 2022-07-29 05:06:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'wetransfer' C:\wamp64\www\dev-real\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2022-07-29 05:06:14 --> Unable to connect to the database
ERROR - 2022-07-29 05:06:14 --> Query error: Unknown database 'wetransfer' - Invalid query: SELECT *
FROM `language`
ORDER BY `is_default` DESC, `id`
ERROR - 2022-07-29 05:06:14 --> Severity: Warning --> mysqli::real_connect(): (HY000/1049): Unknown database 'wetransfer' C:\wamp64\www\dev-real\system\database\drivers\mysqli\mysqli_driver.php 211
ERROR - 2022-07-29 05:06:14 --> Unable to connect to the database
ERROR - 2022-07-29 05:06:14 --> Query error: Unknown database 'wetransfer' - Invalid query: SELECT *
FROM `language`
ORDER BY `is_default` DESC, `id`
ERROR - 2022-07-29 05:16:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:16:20 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:20 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:20 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:16:23 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:16:23 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:23 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:23 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:16:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:16:25 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:25 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:25 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:16:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:16:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:16:28 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:18:38 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:18:38 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:18:38 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:18:38 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:24:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:24:27 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:24:27 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:24:27 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:24:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:24:29 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:24:29 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:24:29 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:27:20 --> Severity: 8192 --> md5(): Passing null to parameter #1 ($string) of type string is deprecated C:\wamp64\www\dev-real\application\core\MY_Controller.php 16
ERROR - 2022-07-29 05:27:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:27:20 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:27:20 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:27:20 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:28:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:28:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specified. (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:28:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): failed to open dir: No error C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:28:51 --> Severity: Warning --> readdir() expects parameter 1 to be resource, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 303
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> session_set_cookie_params(): Session cookie parameters cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 334
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 365
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 366
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 367
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 368
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 426
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> session_set_save_handler(): Session save handler cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 110
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> session_start(): Session cannot be started after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 137
ERROR - 2022-07-29 05:39:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:39:43 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:39:43 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at C:\wamp64\www\dev-real\application\helpers\cms_helper.php:826) C:\wamp64\www\dev-real\system\core\Common.php 571
ERROR - 2022-07-29 05:45:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:45:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:45:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:45:07 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 05:48:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:48:42 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:48:42 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:51:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:51:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:51:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:52:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 05:52:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 05:52:31 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 05:52:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:52:49 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:52:49 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:53:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:53:17 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:53:17 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:53:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:53:36 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specified. (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:53:36 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): failed to open dir: No error C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:54:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specified. (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 05:54:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): failed to open dir: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 05:54:06 --> Severity: Warning --> readdir() expects parameter 1 to be resource, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 05:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:54:30 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specified. (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:54:30 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): failed to open dir: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 303
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> session_set_cookie_params(): Session cookie parameters cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 334
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 365
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 366
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 367
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 368
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> ini_set(): Session ini settings cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 426
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> session_set_save_handler(): Session save handler cannot be changed after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 110
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> session_start(): Session cannot be started after headers have already been sent C:\wamp64\www\dev-real\system\libraries\Session\Session.php 137
ERROR - 2022-07-29 05:58:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:58:57 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:59:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:59:10 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:10 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:59:21 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:21 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:59:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 05:59:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 05:59:52 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 05:59:52 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 05:59:52 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 06:00:11 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:00:11 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:11 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:00:16 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:16 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:00:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:00:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:00:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:00:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:01:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:01:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:01:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:02:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:02:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:02:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:02:36 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:36 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:36 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 06:02:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:43 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 06:02:45 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:45 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:45 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 06:02:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:51 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 06:02:54 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:54 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:02:54 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 06:02:59 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:02:59 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:02:59 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:03:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:03:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:03:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:03:25 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:03:25 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:03:25 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:04:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:04:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:04:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:31 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:04:36 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:36 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:04:55 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:04:55 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:05:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 06:05:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:05:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 06:05:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:05:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:05:07 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Property.php 1130
ERROR - 2022-07-29 06:16:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:16:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 06:42:29 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given C:\wamp64\www\dev-real\application\models\user_m.php 106
ERROR - 2022-07-29 06:43:06 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given C:\wamp64\www\dev-real\application\models\user_m.php 114
ERROR - 2022-07-29 06:52:05 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, null given C:\wamp64\www\dev-real\application\models\user_m.php 105
ERROR - 2022-07-29 07:02:41 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-07-29 07:02:51 --> Query error: No tables used - Invalid query: SELECT *
ERROR - 2022-07-29 07:02:56 --> Severity: error --> Exception: Call to undefined method CI_DB_mysqli_driver::first() C:\wamp64\www\dev-real\application\core\MY_Model.php 231
ERROR - 2022-07-29 07:08:19 --> Severity: error --> Exception: Unsupported operand types: null + string C:\wamp64\www\dev-real\application\core\MY_Model.php 230
ERROR - 2022-07-29 07:29:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:29:49 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:29:49 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:29:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:29:54 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:29:54 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:29:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:29:58 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:29:58 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:30:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:22 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:30:22 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:30:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:30:30 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:33:24 --> Severity: Warning --> Undefined property: Frontend::$option_m C:\wamp64\www\dev-real\system\core\Model.php 74
ERROR - 2022-07-29 07:33:24 --> Severity: error --> Exception: Call to a member function get_field_list() on null C:\wamp64\www\dev-real\application\models\Estate_m.php 37
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:34:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:34:14 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:35:01 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:35:01 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:35:01 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:35:01 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:35:01 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:35:01 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:35:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:35:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:35:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:37:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> Undefined array key 4 C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> Attempt to read property "type" on null C:\wamp64\www\dev-real\application\models\Estate_m.php 496
ERROR - 2022-07-29 07:37:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:37:29 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:19 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:38:19 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:19 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:27 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:38:27 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:27 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:32 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:38:32 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:32 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:38:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:43 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:38:50 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:50 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:38:56 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:38:56 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:39:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:39:01 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:39:01 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:39:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:39:04 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:39:04 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:39:07 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:39:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:39:07 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:39:14 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:39:14 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:39:14 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Fquick.php 430
ERROR - 2022-07-29 07:40:41 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:40:41 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:40:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:40:51 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:41:13 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:41:13 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Fquick.php 427
ERROR - 2022-07-29 07:41:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:41:21 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:41:21 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:41:42 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Profile.php 601
ERROR - 2022-07-29 07:41:42 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Profile.php 601
ERROR - 2022-07-29 07:41:42 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Profile.php 604
ERROR - 2022-07-29 07:42:41 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Profile.php 601
ERROR - 2022-07-29 07:42:41 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Profile.php 601
ERROR - 2022-07-29 07:42:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:42:48 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:42:48 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:42:56 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:42:56 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:42:56 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:43:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:43:00 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:43:00 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:43:05 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 07:43:05 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Property.php 1127
ERROR - 2022-07-29 07:43:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:43:08 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:43:08 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:43:15 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, string given C:\wamp64\www\dev-real\application\controllers\Frontend.php 3736
ERROR - 2022-07-29 07:43:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:43:26 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:43:26 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:43:31 --> Severity: error --> Exception: count(): Argument #1 ($value) must be of type Countable|array, string given C:\wamp64\www\dev-real\application\controllers\Frontend.php 3736
ERROR - 2022-07-29 07:44:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:44:33 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:44:33 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4921
ERROR - 2022-07-29 07:45:04 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:45:04 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:45:04 --> Severity: error --> Exception: readdir(): Argument #1 ($dir_handle) must be of type resource or null, bool given C:\wamp64\www\dev-real\application\controllers\Frontend.php 2717
ERROR - 2022-07-29 07:45:48 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:45:48 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:45:48 --> Severity: Compile Error --> Declaration of Twlogin::getRequestToken() must be compatible with TwitterOAuth::getRequestToken($oauth_callback) C:\wamp64\www\dev-real\application\libraries\Twlogin.php 22
ERROR - 2022-07-29 07:45:48 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/big_js_critical.js
ERROR - 2022-07-29 07:45:48 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/css/styles_rtl.css
ERROR - 2022-07-29 07:45:48 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/421aabig_css.css
ERROR - 2022-07-29 07:45:48 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/logo_white.png
ERROR - 2022-07-29 07:45:48 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/flags/en.png
ERROR - 2022-07-29 07:46:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:46:28 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:46:28 --> Severity: Compile Error --> Declaration of Twlogin::getRequestToken() must be compatible with TwitterOAuth::getRequestToken($oauth_callback) C:\wamp64\www\dev-real\application\libraries\Twlogin.php 22
ERROR - 2022-07-29 07:46:28 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/big_js_critical.js
ERROR - 2022-07-29 07:46:28 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/421aabig_css.css
ERROR - 2022-07-29 07:46:28 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/css/styles_rtl.css
ERROR - 2022-07-29 07:46:28 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/flags/en.png
ERROR - 2022-07-29 07:46:28 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/logo_white.png
ERROR - 2022-07-29 07:46:34 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:46:34 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:46:34 --> Severity: Compile Error --> Declaration of Twlogin::getRequestToken() must be compatible with TwitterOAuth::getRequestToken($oauth_callback) C:\wamp64\www\dev-real\application\libraries\Twlogin.php 22
ERROR - 2022-07-29 07:46:34 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/421aabig_css.css
ERROR - 2022-07-29 07:46:34 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/big_js_critical.js
ERROR - 2022-07-29 07:46:34 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/css/styles_rtl.css
ERROR - 2022-07-29 07:46:34 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/logo_white.png
ERROR - 2022-07-29 07:46:34 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/flags/en.png
ERROR - 2022-07-29 07:46:35 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:46:35 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:46:35 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:46:42 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:46:42 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 07:46:42 --> Severity: Compile Error --> Declaration of Twlogin::getRequestToken() must be compatible with TwitterOAuth::getRequestToken($oauth_callback) C:\wamp64\www\dev-real\application\libraries\Twlogin.php 22
ERROR - 2022-07-29 07:46:42 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/421aabig_css.css
ERROR - 2022-07-29 07:46:42 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/big_js_critical.js
ERROR - 2022-07-29 07:46:42 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/css/styles_rtl.css
ERROR - 2022-07-29 07:46:42 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/logo_white.png
ERROR - 2022-07-29 07:46:42 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/flags/en.png
ERROR - 2022-07-29 07:46:57 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:46:57 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:46:57 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:47:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:02 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:05 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:47:05 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:05 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:47:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:06 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:12 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:47:12 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:12 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:14 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 07:47:14 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 07:47:14 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 09:55:11 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:55:11 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:55:12 --> Severity: Compile Error --> Declaration of Twlogin::getRequestToken() must be compatible with TwitterOAuth::getRequestToken($oauth_callback) C:\wamp64\www\dev-real\application\libraries\Twlogin.php 22
ERROR - 2022-07-29 09:55:12 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/big_js_critical.js
ERROR - 2022-07-29 09:55:12 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/cache/421aabig_css.css
ERROR - 2022-07-29 09:55:12 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/css/styles_rtl.css
ERROR - 2022-07-29 09:55:12 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/logo_white.png
ERROR - 2022-07-29 09:55:12 --> 404 Page Not Found: http://localhost/dev-real/frontend/login/assets/img/flags/en.png
ERROR - 2022-07-29 09:58:10 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:58:10 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:58:24 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:58:24 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:58:33 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:58:33 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:58:38 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 09:58:38 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 10:02:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 10:02:03 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 2714
ERROR - 2022-07-29 10:02:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 10:02:26 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): The system cannot find the file specifi (code: 2) C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 10:02:26 --> Severity: Warning --> opendir(C:\wamp64\www\dev-real\templates/bootstrap4/components): Failed to open directory: No such file or directory C:\wamp64\www\dev-real\application\controllers\Frontend.php 4924
ERROR - 2022-07-29 10:14:42 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 10:14:42 --> Severity: error --> Exception: opendir(): Argument #1 ($directory) must be of type string, resource given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4927
ERROR - 2022-07-29 10:15:10 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 10:15:10 --> Severity: error --> Exception: opendir(): Argument #1 ($directory) must be of type string, resource given C:\wamp64\www\dev-real\application\controllers\Frontend.php 4927
ERROR - 2022-07-29 10:16:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 10:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 10:18:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 10:18:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 10:18:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:01:47 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:07:16 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:07:33 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:07:40 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:16:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:20:36 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:21:17 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:22:43 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:32:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/cache/421aabig_css.css
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/cache/big_js_critical.js
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/cache/big_js.js
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/img/property-hover-arrow.png
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/libraries/ratings/bootstrap-rating-input.js
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/img/badgets/action.png
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/img/flags/en.png
ERROR - 2022-07-29 12:32:26 --> 404 Page Not Found: http://localhost/dev-real/assets/img/logo_white.png
ERROR - 2022-07-29 12:32:27 --> 404 Page Not Found: http://localhost/dev-real/assets/img/plus.png
ERROR - 2022-07-29 12:32:27 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icon-notice.png
ERROR - 2022-07-29 12:32:27 --> 404 Page Not Found: http://localhost/dev-real/assets/img/badgets/new.png
ERROR - 2022-07-29 12:32:27 --> 404 Page Not Found: http://localhost/dev-real/assets/img/badgets/sold.png
ERROR - 2022-07-29 12:32:27 --> 404 Page Not Found: http://localhost/dev-real/assets/img/badgets/empty.png
ERROR - 2022-07-29 12:32:27 --> 404 Page Not Found: http://localhost/dev-real/assets/img/property-hover-arrow.png
ERROR - 2022-07-29 12:32:28 --> 404 Page Not Found: http://localhost/dev-real/assets/img/favicon.png
ERROR - 2022-07-29 12:32:34 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:47:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:48:08 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 12:48:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:10:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:10:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:10:51 --> 404 Page Not Found: http://localhost/dev-real/templates/bootstrap4/assets/cache/bootstrap.bundle.min.js.map
ERROR - 2022-07-29 13:10:55 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:10:55 --> 404 Page Not Found: http://localhost/dev-real/templates/bootstrap4/assets/cache/bootstrap.bundle.min.js.map
ERROR - 2022-07-29 13:12:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:12:02 --> 404 Page Not Found: http://localhost/dev-real/templates/bootstrap4/assets/cache/bootstrap.bundle.min.js.map
ERROR - 2022-07-29 13:13:15 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:29:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:29:29 --> Severity: error --> Exception: Call to undefined function base_path() C:\wamp64\www\dev-real\templates\bootstrap4\widgets\head2.php 22
ERROR - 2022-07-29 13:29:29 --> 404 Page Not Found: http://localhost/dev-real/assets/img/favicon.png
ERROR - 2022-07-29 13:30:00 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:30:00 --> Severity: error --> Exception: Undefined constant "FC" C:\wamp64\www\dev-real\templates\bootstrap4\widgets\head2.php 22
ERROR - 2022-07-29 13:30:02 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:30:02 --> Severity: error --> Exception: Undefined constant "FC" C:\wamp64\www\dev-real\templates\bootstrap4\widgets\head2.php 22
ERROR - 2022-07-29 13:31:21 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:32:49 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:33:20 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:33:20 --> 404 Page Not Found: http://localhost/dev-real/assets2/slick-1.8.1/slick/slick-theme.css
ERROR - 2022-07-29 13:33:20 --> 404 Page Not Found: http://localhost/dev-real/assets2/Css/color-combinesion-1.css
ERROR - 2022-07-29 13:33:20 --> 404 Page Not Found: http://localhost/dev-real/assets2/Css/style.css
ERROR - 2022-07-29 13:33:20 --> 404 Page Not Found: http://localhost/dev-real/assets2/slick-1.8.1/slick/slick.css
ERROR - 2022-07-29 13:34:09 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:34:09 --> 404 Page Not Found: http://localhost/dev-real/assets2/slick-1.8.1/slick/slick-theme.css
ERROR - 2022-07-29 13:34:09 --> 404 Page Not Found: http://localhost/dev-real/assets2/Css/color-combinesion-1.css
ERROR - 2022-07-29 13:34:09 --> 404 Page Not Found: http://localhost/dev-real/assets2/slick-1.8.1/slick/slick.css
ERROR - 2022-07-29 13:34:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:35:01 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:35:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:37:37 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:39:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:50:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:51:06 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:51:06 --> 404 Page Not Found: http://localhost/dev-real/assets/css/styles_rtl.css
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/19.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/22.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/23.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/24.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/31.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/32.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/46.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/45.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/47.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/44.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/48.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/49.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/50.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/51.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/25.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/27.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/28.png
ERROR - 2022-07-29 13:51:07 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/29.png
ERROR - 2022-07-29 13:51:09 --> 404 Page Not Found: http://localhost/dev-real/assets/img/favicon.png
ERROR - 2022-07-29 13:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:28 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:29 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:30 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:31 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:50 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:51 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:54:52 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 13:55:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 14:18:26 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 14:18:54 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 14:20:58 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 14:22:04 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 14:22:04 --> 404 Page Not Found: http://localhost/dev-real/assets/css/styles_rtl.css
ERROR - 2022-07-29 14:22:04 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/19.png
ERROR - 2022-07-29 14:22:04 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/24.png
ERROR - 2022-07-29 14:22:04 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/23.png
ERROR - 2022-07-29 14:22:04 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/22.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/31.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/32.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/44.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/45.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/46.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/47.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/48.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/49.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/50.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/51.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/25.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/27.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/28.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/29.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/19.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/23.png
ERROR - 2022-07-29 14:22:05 --> 404 Page Not Found: http://localhost/dev-real/assets/img/icons/option_id/24.png
ERROR - 2022-07-29 14:23:03 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 14:51:41 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
ERROR - 2022-07-29 14:51:48 --> Query error: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near '`property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `us' at line 4 - Invalid query: SELECT `user`.*, `user`.`id` as `user_id`, MIN(property_user.property_id) as property_id, COUNT(*) as properties_count
FROM `user`
LEFT JOIN `property_user` ON `user`.`id` = `property_user`.`user_id`
WHERE (`type` LIKE 'AGENT%' ) AND `activated` = 1 AND `NOT` `property_id` IS NULL
GROUP BY `user`.`id`
ORDER BY `properties_count` DESC, `user_id`
 LIMIT 32
