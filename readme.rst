###################################
Kebutuhan Sistem
###################################
1. PHP 7.2 atau lebih baru 
2. Composer. jika belum memiliki composer klik `disini <https://getcomposer.org/>`_
3. khusus untuk windows pastikan environment path untuk php sudah ada jika belum klik link `disini <https://sulhi.id/setting-path-environment-variable-di-windows-10/>`_


###################################
Instalasi aplikasi
###################################
1. buka phpmyadmin
2. buat database dengan nama "dirga_test_jti"
3. lalu import database yang ada di folder root project dengan nama file "dirga_test_jti.sql"
4. edit file /application/config/databases.php
	- sesuaikan konfigurasi hostname,username dan password pada komputer kalian
5. buka terminal(untuk linux) atau cmd(untuk windows) arahkan ke root project lalu ketik "composer install"
6. jalankan websocket cara menjalankan websocket ada di bawah
7. buka halaman "http://localhost/DirgaTestJTI/"

###################################
Cara menjalankan Websocket Linux
###################################
1. buka terminal dan arahkan ke root project 
2. kemudian ketik pada terminal "./websocket-linux.sh" atau "sh ./websocket-linux.sh"

###################################
Cara menjalankan Websocket Windows
###################################
1. buka cmd dan arahkan ke root project
2. kemudian ketik pada cmd "./websocket-windows.bat" atau "websocket-windows.bat"
3. jika menemukan error : Fatal error: Call to undefined function socket_create()..... cara untuk memperbaikinya klik link `disini <https://stackoverflow.com/questions/6137823/fatal-error-call-to-undefined-function-socket-create>`_
