<?php

class PageController extends Controller
{
    function actionCv()
    {
        $colors = json_decode(file_get_contents(APP.DS.'config'.DS.'gradients.json'));
        $color_id = rand(0, count($colors) - 1);

        $d['color1'] = $colors[$color_id]->colour1;
        $d['color2'] = $colors[$color_id]->colour2;

        $this->set($d);
        $this->render('pages/cv.php');
    }
}