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
}