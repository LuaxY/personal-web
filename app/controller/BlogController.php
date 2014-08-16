<?php

class BlogController extends Controller
{
    private $gistRealod = '<script type="text/javascript">$("[data-gist-id]").gist();</script>';

    function actionIndex()
    {
        $this->loadModel('Post');

        if(!($cache = $this->Cache->get('blog/posts')))
        {
            $cache = $this->Post->getAll();
            $this->Cache->write($cache, 'blog/posts', 60);
        }

        $d['posts'] = $cache;
        $d['extra'] = $this->gistRealod;

        $this->set($d);
        $this->render('blog/accueil.php');
    }

    function actionPost($slug = null)
    {
        $this->loadModel('Post');

        if(!($cache = $this->Cache->get('blog/'.$slug)))
        {
            $cache = $this->Post->getPost($slug);
            $this->Cache->write($cache, 'blog/'.$slug, 60);
        }

        if(!$cache)
        {
            $this->render('blog/no-post.php');
        }
        else
        {
            $d['p'] = $cache;
            $d['extra'] = $this->gistRealod;

            $this->set($d);
            $this->render('blog/post.php');
        }
    }
}