<?php

namespace App\Controllers;

use CodeIgniter\Exceptions\PageNotFoundException;
use CodeIgniter\HTTP\Request;
use Config\Services;

class Pages extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function view($page = 'home'): string
    {
        $data['title'] = ucfirst($page);

        $parser = Services::parser();

        $parser->setData()->render('template/header'); // checkout the implementation, can a parser be configured globally for the project

        return view('templates/header', $data)
//            . view('pages/' . $page)
            . view('templates/footer');
    }
}