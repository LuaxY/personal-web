<?php

class BlogController extends Controller
{
    function actionIndex()
    {
        $this->request->action = "accueil";
        $this->loadModel('Post');

        if(!($cache = $this->Cache->get('blog/posts')))
        {
            $cache = $this->Post->query("SELECT * FROM posts as p, categories AS c WHERE p.categorie = c.id AND p.visible = 1 ORDER BY p.id DESC LIMIT 0,10");
            $this->Cache->write($cache, 'blog/posts', 60);
        }

        $d['posts'] = $cache;

        $this->set($d);
        $this->render('blog/accueil.php');
    }

    function actionPost($slug = null)
    {
        if($slug == null)
            $this->redirect('blog');

        $this->request->action = "article";
        $this->loadModel('Post');

        if(!($cache = $this->Cache->get('blog/'.$slug)))
        {
            $cache = current($this->Post->query("SELECT * FROM posts as p, categories AS c WHERE p.categorie = c.id AND p.slug = :slug", array(":slug" => $slug)));
            
            if(!$cache)
                $this->redirect('blog');

            $this->Cache->write($cache, 'blog/'.$slug, 60);
        }

        $d['p'] = $cache;

        $this->set($d);
        $this->render('blog/post.php');
    }
}