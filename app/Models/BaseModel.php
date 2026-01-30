<?php
namespace App\Models;

use PDO;
use PDOException;

class BaseModel
{
    protected $pdo;

    public function __construct()
    {
        $host = 'localhost';
        $db   = 'buoi2_php';
        $user = 'root';
        $pass = '';
        $charset = 'utf8mb4';

        $dsn = "mysql:host=$host;dbname=$db;charset=$charset";
        $options = [
            PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ];

        try {
            $this->pdo = new PDO($dsn, $user, $pass, $options);
        } catch (PDOException $e) {
            die("Hệ thống đang bảo trì, vui lòng quay lại sau.");
        }
    }
}
