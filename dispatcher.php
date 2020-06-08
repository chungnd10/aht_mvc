<?php

/**
 * Class Dispatcher
 */
class Dispatcher
{
    /**
     * @var $request
     */
    private $request;

    /*
     * Dispatch
     *
     */
    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    /*
     * Load controller
     * @return mixed
     */
    public function loadController()
    {
        $tmp_name = ucfirst($this->request->controller);

        $name = "\App\Controllers\\" . $tmp_name . "Controller";
        $file = ROOT . 'Controllers/' . $tmp_name . 'Controller.php';

        require($file);
        $controller = new $name();
        return $controller;
    }
}
