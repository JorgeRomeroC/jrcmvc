<?php

class Dashboard extends Controllers
{
    public function index()
    {
        $this->views->getView($this,'index');
    }
}