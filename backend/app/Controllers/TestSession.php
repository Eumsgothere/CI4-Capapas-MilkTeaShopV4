<?php

namespace App\Controllers;

class TestSession extends BaseController
{
    public function index()
    {
        $session = session();
        var_dump($session->get('user'));
    }
}
