<?

namespace app\core;

/**
 * Class Request
 * 
 * @package app\core
 */

class Request
{

    public function getPath(){
        $path = $_SERVER['REQUEST_URI'] ?? '/';
        // remove question mark from requests 
        $position = strpos($path, '?');
        
        if($position === false){
            return $path;
        }
        
        $path = substr($path, 0, $position);

        return $path;
    }

     public function getMethod(){
        $method = strtolower($_SERVER['REQUEST_METHOD']);

        return $method;
    }
}