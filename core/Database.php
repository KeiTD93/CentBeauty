<?php
class Database{
    const HOST = '103.216.117.60';
    const USERNAME = 'anhvt3010';
    const PASSWORD = '@fIP1pQWIiB-Jol6U^W)';
    const DATABASE = 'cent_beauty';

//    product
//    const HOST = 'localhost';
//    const USERNAME = 'id22328282_medicare';
//    const PASSWORD = 'Medicare3010@';
//    const DATABASE = 'id22328282_medicare';

    public function connect(): false|mysqli
    {
        $connect = mysqli_connect(self::HOST, self::USERNAME, self::PASSWORD, self::DATABASE);
        mysqli_set_charset($connect, 'utf8');
        if(mysqli_connect_errno() === 0){
            return $connect;
        }
        return false;
    }
}