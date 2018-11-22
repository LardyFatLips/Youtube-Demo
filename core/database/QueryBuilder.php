<?php


/**
 * Class QueryBuilder
 *
 * Acts as a kind of simple ORM
 *
 */
class QueryBuilder

{

    /**
     * @var PDO
     */
    private $pdo;

    /**
     * QueryBuilder constructor.
     * @param PDO $pdo
     */
    public function __construct(PDO $pdo){

		$this->pdo = $pdo;
	}


    /**
     * @param $table
     * @return array
     */
    public function selectAll($table)
	
	{

		$statement = $this->pdo->prepare("select * from {$table} ORDER BY ID ASC");

		try {
            $statement->execute();
            return $statement->fetchAll(PDO::FETCH_CLASS);
        } catch (Exception $e){

		    die('Whoops something went wrong');
        }



	}


    /**
     * @param $table
     * @param $parameters
     */
    public function selectby($table, $parameters)

    {

        $columns = implode(',', array_keys($parameters));
        $values = implode(',' , array_values($parameters));

        $sql = sprintf('select * from %s WHERE %s = \'%s\'',

            $table, $columns, $values

        );

        try{

            $statement = $this->pdo->prepare($sql);
            $statement->execute($parameters);
            return $statement->fetchAll(PDO::FETCH_CLASS);

        } catch (Exception $e){

            die('Whoops, something went wrong');

        }



    }

    /**
     * @param $table
     * @param $parameters
     */
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
