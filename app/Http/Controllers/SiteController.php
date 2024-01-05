<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SiteController extends Controller
{
    public function home()
    {
        echo "Estou na home usando um controller";
    }

    public function contato()
    {
        echo "Estou no contato";    
    }

    public function sobre()
    {
        echo "Estou no sobre";
    }
}
