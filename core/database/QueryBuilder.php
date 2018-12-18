<?php

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
		die(var_dump($data));	
	}
} 