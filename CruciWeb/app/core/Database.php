<?php
class Database {
    private static $instance = null;
    private $pdo;

    private function __construct() {
        $config = include(__DIR__ . '/../config/config.php');
        try {
            $this->pdo = new PDO(
                'mysql:host=' . $config['host'] . ';dbname=' . $config['dbname'],
                $config['username'],
                $config['password']
            );
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Database connection failed: " . $e->getMessage());
        }
    }

    public static function getInstance() {
        if (self::$instance === null) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->pdo;
    }
}
