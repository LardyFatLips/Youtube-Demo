<?php 


namespace App\Core;


use Exception;

/**
 * Class Router
 * @package App\Core
 */
class Router {


    /**
     * @var array
     * An array of routes, initial keys are request types used for this demo
     */
    public $routes =[


		'GET' => [],

		'POST' => []

	];


    /**
     * @param $file
     * @return Router
     *
     * require file (routes.php)
     * Routes.php expects a router to be able to call get or post methods so we call new static to create a new router instance
     * Routes are then defined via post and get methods below
     * Returns the instance of router so that index.php can continue chaining
     *
     */
    public static function load($file)
	{

		$router = new static;

		require $file; //Goes through and populates associative array

		return $router;

	}

    /**
     * @param $uri
     * @param $controller
     */
    public function get($uri, $controller)
	
	{

		$this->routes['GET'][$uri] = $controller;

	}


    /**
     * @param $uri
     * @param $controller
     */
    public function post($uri, $controller)

	{

		$this->routes['POST'][$uri] = $controller;

	}


    /**
     * @param $uri
     * @param $requestType
     * @return mixed
     * @throws Exception
     *
     * Passes in the uri and request type aka '/videos' and GET
     * First we check the routes array for the given request type to ensure that the uri actually exists
     * If so split the method from the controller and pass to the call action method using explode
     * Because explode creates an array we use the splat operator whilst passing it to a method to convert each element to a method parameter
     *
     *
     */
    public function direct($uri, $requestType)
	{

		if(array_key_exists($uri, $this->routes[$requestType])) {


			return $this->callAction(
				...explode('@', $this->routes[$requestType][$uri])
			);

		} else{


			throw new Exception('No routes defined for this URI.');
		}

	}


    /**
     * @param $controller
     * @param $action
     * @return mixed
     * @throws Exception
     *
     * Instantiate the given controller and check if the controller has the given method
     * If so call that method in the controller
     *
     */
    protected function callAction($controller, $action)
	{

		$controller = "App\\Controllers\\{$controller}";

		$controller = new $controller();

		if (! method_exists($controller, $action)){

			throw new Exception("{$controller} does not respond to the {$action} action");
		}


		return $controller->$action();

	}


}



