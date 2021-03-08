<?php

namespace App\Controller;

use Twig\Environment;
use App\Taxes\Calculator;
use Cocur\Slugify\Slugify;
use Psr\Log\LoggerInterface;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;


class HelloController
{
    // protected $logger;
    // protected $calculator;

    // public function __construct(LoggerInterface $logger, Calculator $calculator)
    // {
    //     $this->logger = $logger;
    //     $this->calculator = $calculator;
    // }

    /**
     *  @Route("/hello/{prenom}", name="hello", methods={"GET"}, schemes={"http", "https"}, requirements={"prenom"="[a-zA-Z]+"}, defaults={"prenom"="World"})
     */
    public function hello($prenom, LoggerInterface $logger, Calculator $calculator, Slugify $slugify, Environment $twig)
    {
        dump($twig);
        dump($slugify->slugify("Hello World"));
        $logger->error("Mon message de log");

        $tva = $calculator->calcul(100);
        dump($tva);

        return new Response("Hello $prenom !");
    }
}
