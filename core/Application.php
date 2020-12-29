<?

namespace app\core;

/**
 * Class Application
 * 
 * @package app\core
 */

class Application
{
    public Router $router;  // import router 
    public Request $request;

    public function __contruct()
    {
        // init router
        $this->request = new Request();
        $this->router = new Router($this->request);
    }

    public function run()
    {
        $this->router->resolve();
    }
}