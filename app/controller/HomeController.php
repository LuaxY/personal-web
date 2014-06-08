<?php

class HomeController extends Controller
{
    function actionIndex()
    {
        $this->request->action = "accueil";
        $this->render('home/accueil.php');
    }
}