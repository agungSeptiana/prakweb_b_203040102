<?php 

class Mahasiswa_model {
    private $dbh;   //database handler
    private $stat;

    public function __construct() {
        //data source name
        $dsn = 'mysql:host=localhost;dbname=prakweb_b_203040102';

        try {
            $this->dbh = new PDO($dsn, 'root', '');
        } catch(PDOException $e) {
            die($e->getMessage());
        }
    }

    public function getAllMahasiswa() {
        $this->stat = $this->dbh->prepare('SELECT * FROM mahasiswa');
        $this->stat->execute();
        return $this->stat->fetchAll(PDO::FETCH_ASSOC);
    }
}