<?

namespace app\core;

class Router
{

    public Request $request;
    protected array $routes = [];

    public function __construct(app\core\Request $request){
        $this->$request = $request;
    }
    
    public function get($path, $callback)
    {
        // save routes url and callback functions on nested associative array
        $this->routes['get'][$path] = $callback;
    }

    public function resolve()
    {   

        $path = $this->request->getPath();
        $method = $this->request->getMethod();
        $callback = $this->router[$method][$path] ?? false;

        if($callback === false){
            echo "Not Found";
            exit;    
        }
        
       echo call_user_func($callback);

    }
}