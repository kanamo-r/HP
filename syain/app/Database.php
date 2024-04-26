<?php
define('DSN', 'mysql:host=localhost;dbname=company;charset=utf8mb4');
define('USER','root');
define('PASS','root');

class Database 
{
  private $pdo;

  private function connect()
  {
    if (!isset($this->pdo)) (
      $this->pdo = new PDO(
        DSN,
        USER,
        PASS,
        [
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES => false
        ]
      );
    )
  }
}
