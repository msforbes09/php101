<?php

namespace App\Core\Database;

use PDO;

class QueryBuilder
{
	protected $pdo;
	public function __construct(PDO $pdo)
	{
		$this->pdo = $pdo;
	}
	public function selectAll($table)
	{
		$stmt = $this->pdo->prepare("select * from {$table};");
		$stmt->execute();
		return $stmt->fetchAll(PDO::FETCH_CLASS);
	}
	public function store($table, $data)
	{
		$sql = sprintf(
			'insert into %s (%s) values (%s)',
			$table,
			implode(array_keys($data), ', '),
			':' . implode(array_keys($data), ', :'),
		);

		try {
			$stmt = $this->pdo->prepare($sql);

			$stmt->execute($data);
		} catch (PDOException $e) {
			die('Sorry something went wrong.');
		}

	}
} 