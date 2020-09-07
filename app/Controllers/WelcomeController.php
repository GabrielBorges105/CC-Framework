<?php
namespace App\Controllers;

use Core\BaseController;

class WelcomeController extends BaseController
{
    public function index()
    {
        $this->setPageTitle('BEM VINDO!');
        $this->renderView('WelcomeView');

    }
}
?>