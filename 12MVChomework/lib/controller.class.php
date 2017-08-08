<?php

class Controller
{
    protected $data;
    protected $data2;
    protected $data3;
    protected $model;
    protected $params;

    public function getData()
    {
        return $this->data;
    }
    public function getData2()
    {
        return $this->data2;
    }
    public function getData3()
    {
        return $this->data2;
    }
    public function getModel()
    {
        return $this->model;
    }

    public function getParams()
    {
        return $this->params;
    }

    public function __construct($data = array())
    {
        $this->data = $data;
        $this->params = App::getRouter()->getParams();
    }
}