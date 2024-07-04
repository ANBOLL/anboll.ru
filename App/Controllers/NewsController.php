<?php
namespace App\Controllers;

class NewsController
{
    public function render($file, $data)
    {
        extract($data);
        require('views/' . $file . '.php');
        $content = ob_get_contents();
        ob_end_clean();
        return $content;
    }
}