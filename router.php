<?php


/**
 * Class Router
 */
class Router
{
    /**
     * Parse url
     * @param $url
     * @param $request
     */
    static public function parse($url, $request)
    {
        $url = trim($url);
        if ($url == "/mvc/") {
            $request->controller = "tasks";
            $request->action = "index";
            $request->params = [];
        } else {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 2);
            $request->params = array_slice($explode_url, 2);
            $request->controller = $explode_url[0];

            if ($request->action = $explode_url[1] == null){
                $request->action = "index";
            }else {
                $request->action = $explode_url[1];
            }
        }

    }
}
