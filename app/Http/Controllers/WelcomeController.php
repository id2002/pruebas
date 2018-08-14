<?php
/**
 * Nuevo
 * PHP Version 7.2.1
 */
namespace App\Http\Controllers;

use Illuminate\Http\Request;
/**
 * Controlador de bienvenida PHP 7.2
 * @link @autor
 */


class WelcomeController extends Controller
{

    public function index($name, $nickname)
    {
        $name= ucfirst($name);

        if ($nickname) {
            return "Bienvenido {$name}, tu apodo es {$nickname}";

        } else {
            return "Bienvenido {$name}";
        }
    }
}
