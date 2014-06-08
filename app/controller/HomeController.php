<?php 
class HomeController extends Controller
{
    function actionIndex()
    {
        $this->redirect('home/accueil');
    }

    function actionAccueil()
    {
        $this->render('home/accueil.php');
    }
}