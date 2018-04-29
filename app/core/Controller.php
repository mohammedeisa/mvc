<?php
/**
 * Created by PhpStorm.
 * User: Mohammed
 * Date: 4/24/2018
 * Time: 11:33 PM
 */

class Controller
{
    public function model($model)
    {
        require_once '../app/models/' . $model . '.php';
        return new $model();
    }

    public function view($view, $data = [])
    {
        require_once '../app/views/' . $view . '.php';
    }
}