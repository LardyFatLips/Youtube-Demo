<?php


class QueryBuilder

{
	
	private $pdo;

	public function __construct(PDO $pdo){

		$this->pdo = $pdo;
	}


	public function selectAll($table)
	
	{

		$statement = $this->pdo->prepare("select * from {$table}");

		$statement->execute();

		return $statement->fetchAll(PDO::FETCH_CLASS);

	}

	
	public function insert($table, $parameters)

	{
	
		$columns = implode(',', array_keys($parameters));

		$values = ':' . implode(', :', array_keys($parameters));

		$sql = sprintf('insert into %s (%s) values (%s)',

			$table, $columns, $values

		);

		try{

			$statement = $this->pdo->prepare($sql);
			$statement->execute($parameters);

		} catch (Exception $e){

			die('Whoops, something went wrong');

		}

	}

}
