# UTS_WEB_RidwanBaharsyah
Ridwan_Baharsyah_11170910000067

memakai virtualhost belajarphp.lan

import database : datamahasiswa-dump.sql
cara mengatasi  : ' ERROR 1524 (HY000): Plugin 'auth_socket' is not loaded ' pada mariaDB

1. sudo /etc/init.d/mysql stop
2. sudo mysqld_safe --skip-grant-tables &
3. mysql -uroot
