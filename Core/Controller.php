<?php

namespace App\Core;

/**
 * Class Controller
 * @package App\Core
 */
class Controller
{
    /**
     * @var array
     */
    var $vars = [];
    /**
     * @var string
     */
    var $layout = "default";

    /**
     * Set data
     * @param $data
     */
    function set($data)
    {
        $this->vars = array_merge($this->vars, $data);
    }

    /**
     * Render views
     * @param $filename
     */
    function render($filename)
    {
        extract($this->vars);
        ob_start();

        $arr_words_cut = array('App', '\\', 'Controllers', 'Controller');
        $tmp_file_name =  str_replace($arr_words_cut, '', get_class($this));
        $file = ROOT . "Views/" . $tmp_file_name . '/' . $filename . '.php';
        require($file);
        $content_for_layout = ob_get_clean();

        if ($this->layout == false) {
            $content_for_layout;
        } else {
            require(ROOT . "Views/Layouts/" . $this->layout . '.php');
        }
    }

    /**
     * Remove special characters from input
     * @param $data
     * @return string
     */
    private function secure_input($data)
    {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    /**
     * Execute remove special characters from input
     * @param $form
     */
    protected function secure_form($form)
    {
        foreach ($form as $key => $value) {
            $form[$key] = $this->secure_input($value);
        }
    }

}
