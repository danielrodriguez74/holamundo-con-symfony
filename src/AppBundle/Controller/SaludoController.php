<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Modelos\Entity\Saludo;

class SaludoController extends Controller
{
    /**
     * @Route("/saludar", name="saludar")
     */
    public function saludarAction(Request $request)
    {
        $data = new Saludo("Daniel","Rodriguez","Hola Mundo con symfony");
        var_dump($data);
        die();
    }
}
