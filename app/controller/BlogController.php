<?php

class BlogController extends Controller
{
    function actionIndex()
    {
        $this->loadModel('Post');

        if(!($cache = $this->Cache->get('blog/posts')))
        {
            $cache = $this->Post->query("SELECT * FROM posts as p, categories AS c WHERE p.categorie = c.id AND p.visible = 1 ORDER BY p.id DESC LIMIT 0,10");
            $this->Cache->write($cache, 'blog/posts', 60);
        }

        $d['posts'] = $cache;
        $d['extra'] = '<script type="text/javascript">$("[data-gist-id]").gist();</script>';

        $this->set($d);
        $this->render('blog/accueil.php');
    }

    function actionPost($slug = null)
    {
        $this->loadModel('Post');

        if(!($cache = $this->Cache->get('blog/'.$slug)))
        {
            $cache = current($this->Post->query("SELECT * FROM posts as p, categories AS c WHERE p.categorie = c.id AND p.slug = :slug", array(":slug" => $slug)));
            $this->Cache->write($cache, 'blog/'.$slug, 60);
        }

        if(!$cache)
        {
            $this->render('blog/no-post.php');
        }
        else
        {
            $d['p'] = $cache;
            $d['extra'] = '<script type="text/javascript">$("[data-gist-id]").gist();</script>';

            $this->set($d);
            $this->render('blog/post.php');
        }
    }
}