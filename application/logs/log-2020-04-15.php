<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-15 18:09:34 --> Severity: error --> Exception: Too few arguments to function Pembayaran::settlement_piutang(), 0 passed in C:\xampp\htdocs\saribuah\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\saribuah\application\controllers\Pembayaran.php 137
ERROR - 2020-04-15 18:12:17 --> Severity: error --> Exception: Too few arguments to function Pembayaran::settlement_piutang(), 0 passed in C:\xampp\htdocs\saribuah\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\saribuah\application\controllers\Pembayaran.php 137
ERROR - 2020-04-15 18:12:36 --> Severity: error --> Exception: Too few arguments to function Pembayaran::settlement_piutang(), 0 passed in C:\xampp\htdocs\saribuah\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\saribuah\application\controllers\Pembayaran.php 137
ERROR - 2020-04-15 18:12:57 --> Severity: error --> Exception: Too few arguments to function Pembayaran::settlement_piutang(), 0 passed in C:\xampp\htdocs\saribuah\system\core\CodeIgniter.php on line 532 and exactly 1 expected C:\xampp\htdocs\saribuah\application\controllers\Pembayaran.php 137
ERROR - 2020-04-15 18:37:48 --> Severity: Notice --> Undefined property: Settlement::$pembayaran_model C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:37:48 --> Severity: error --> Exception: Call to a member function jumlah_data() on null C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:39:33 --> Severity: Notice --> Undefined property: Settlement::$pembayaran_model C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:39:33 --> Severity: error --> Exception: Call to a member function jumlah_data() on null C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:50:18 --> Severity: Notice --> Undefined property: Settlement::$pembayaran_model C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:50:19 --> Severity: error --> Exception: Call to a member function jumlah_data() on null C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:50:58 --> Severity: Notice --> Undefined property: Settlement::$pembayaran_model C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:50:58 --> Severity: error --> Exception: Call to a member function jumlah_data() on null C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:51:15 --> Severity: Notice --> Undefined index: nomor_pembayaran C:\xampp\htdocs\saribuah\application\controllers\Settlement.php 49
ERROR - 2020-04-15 18:51:15 --> Query error: Unknown column 'pembayaran.pembeli' in 'on clause' - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli` = `pembeli`.`pembeli_id`
ORDER BY `pembayaran`.`no_pembayaran` DESC
ERROR - 2020-04-15 18:52:02 --> Query error: Unknown column 'pembayaran.pembeli' in 'on clause' - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli` = `pembeli`.`pembeli_id`
ORDER BY `pembayaran`.`no_pembayaran` DESC
ERROR - 2020-04-15 18:52:46 --> Severity: Notice --> Undefined variable: nomor_pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 29
ERROR - 2020-04-15 18:52:46 --> Severity: Notice --> Undefined variable: pembayarans C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 49
ERROR - 2020-04-15 18:52:46 --> Severity: Warning --> Invalid argument supplied for foreach() C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 49
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: nomor_pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 29
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:40 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: nomor_pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 29
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:53:44 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 66
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 69
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'nominal' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'terbayarkan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 72
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'keterangan' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 75
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 80
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:54:17 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 82
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined property: stdClass::$no_settlement C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 57
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 18:59:59 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Undefined variable: pembayaran C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:00:23 --> Severity: Notice --> Trying to get property 'pembayaran_id' of non-object C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 78
ERROR - 2020-04-15 19:05:45 --> Query error: Column 'no_transaksi' in where clause is ambiguous - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `no_transaksi` LIKE '%3%' ESCAPE '!'
ORDER BY `pembayaran`.`no_pembayaran` DESC
ERROR - 2020-04-15 19:07:32 --> Query error: Column 'no_transaksi' in where clause is ambiguous - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `no_transaksi` LIKE '%3%' ESCAPE '!'
ERROR - 2020-04-15 19:07:51 --> Query error: Column 'no_transaksi' in where clause is ambiguous - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `no_transaksi` LIKE '%3%' ESCAPE '!'
ERROR - 2020-04-15 19:07:55 --> Query error: Column 'no_transaksi' in where clause is ambiguous - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `no_transaksi` LIKE '%3%' ESCAPE '!'
ERROR - 2020-04-15 19:08:01 --> Query error: Column 'no_transaksi' in where clause is ambiguous - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `no_transaksi` LIKE '%3%' ESCAPE '!'
ERROR - 2020-04-15 19:09:55 --> Query error: Unknown column 'settlementno_transaksi' in 'where clause' - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `settlementno_transaksi` LIKE '%3%' ESCAPE '!'
ERROR - 2020-04-15 19:10:23 --> Query error: Unknown column 'settelement.no_transaksi' in 'order clause' - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `settlement`.`no_transaksi` LIKE '%3%' ESCAPE '!'
ORDER BY `settelement`.`no_transaksi` DESC
 LIMIT 10
ERROR - 2020-04-15 19:10:26 --> Query error: Unknown column 'settelement.no_transaksi' in 'order clause' - Invalid query: SELECT `settlement`.*, `piutang`.`no_transaksi` as `no_piutang`, `pembayaran`.`no_pembayaran`, `pembeli`.`nama` as `nama_pembeli`
FROM `settlement`
JOIN `piutang` ON `piutang`.`piutang_id` = `settlement`.`piutang_id`
JOIN `pembayaran` ON `pembayaran`.`pembayaran_id` = `settlement`.`pembayaran_id`
JOIN `pembeli` ON `pembayaran`.`pembeli_id` = `pembeli`.`pembeli_id`
WHERE `settlement`.`no_transaksi` LIKE '%3%' ESCAPE '!'
ORDER BY `settelement`.`no_transaksi` DESC
 LIMIT 10
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
ERROR - 2020-04-15 19:19:30 --> Severity: Warning --> date_format() expects parameter 1 to be DateTimeInterface, string given C:\xampp\htdocs\saribuah\application\views\v_settlement_list.php 60
