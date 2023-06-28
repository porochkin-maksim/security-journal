<?php

namespace App;

use PDO;

class Db
{
    private PDO $pdo;

    public function __construct(array $data)
    {
        $this->pdo = new PDO(
            "{$data['DB_CONNECTION']}:dbname={$data['DB_DATABASE']}; host={$data['DB_HOST']}",
            "{$data['DB_USERNAME']}",
            "{$data['DB_PASSWORD']}",
        );
    }

    public function beginTransaction(): void
    {
        $this->pdo->beginTransaction();
    }

    public function commit(): void
    {
        $this->pdo->commit();
    }

    public function rollBack(): void
    {
        $this->pdo->rollBack();
    }

    public function query(string $sql, array $arg = []): false|array
    {
        $sth = $this->pdo->prepare($sql);
        if ($arg) {
            $sth->execute($arg);
        } else {
            $sth->execute();
        }
        return $sth->fetchAll();
    }
}