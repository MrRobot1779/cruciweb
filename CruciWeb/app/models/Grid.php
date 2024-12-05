<?php
require_once __DIR__ . '/../core/Database.php';

class Grid {
    private $db;

    public function __construct() {
        $this->db = Database::getInstance()->getConnection();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM grids");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}
