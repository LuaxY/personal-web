<?php

/*
 * (c) 2013 Yann Guineau
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

class Request
{
    public $url;                // URL appellé par l'utilisateur
    public $page = 1;            // pour la pagination 
    public $prefix = false;        // Prefixage des urls /prefix/url
    public $data = false;        // Données envoyé dans le formulaire

    function __construct()
    {
        $this->url = isset($_SERVER['REQUEST_URI'])?$_SERVER['REQUEST_URI']:'/';

        if(isset($_GET['page']))
        {
            if(is_numeric($_GET['page']))
            {
                if($_GET['page'] > 0)
                {
                    $this->page = round($_GET['page']);
                }
            }
        }
        
        if(!empty($_POST))
        {
            $this->data = new stdClass();
            
            foreach($_POST as $k=>$v)
            {
                $this->data->$k=$v;
            }
        }
    }

    function isAjax()
    {
        if(!empty($_SERVER['HTTP_X_REQUESTED_WITH']) && strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest')
            return true;
        else
            return false;
    }
}
