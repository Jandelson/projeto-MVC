<?php

namespace App\Controllers;

use Twig\Loader\FilesystemLoader;
use Twig\Environment;

class Controller
{
    public $loader;
    public $twig;

    public function __construct()
    {
        $this->loader = new FilesystemLoader('app/Views');
        $this->twig = new Environment($this->loader);
    }
}
