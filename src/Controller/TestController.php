<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class TestController
{
    /**
     *  @Route("/", name="index")
     */
    public function index()
    {
        var_dump("Ca marche index!");
        die();
    }

    /**
     *  @Route("/test/{age}", name="test", methods={"GET", "POST"}, schemes={"http", "https"}, requirements={"age"="\d+"}, defaults={"age"="0"})
     */
    public function test(Request $request, $age) // Appel de Request en tant qu'argument de la fonction test
    {
        // $request = Request::createFromGlobals(); //Récupère toute les variables globales dans un objet
        dump($request);

        // $age = $request->query->get('age', 0);
        // $age = $request->attributes->get('age');
        // dd("Ca marche test, $age ans !");

        return new Response("Ca marche test, $age ans !");
    }
}
