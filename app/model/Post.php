<?php

class Post extends Model
{
    function getAll()
    {
        return $this->find(array(
            "conditions" => array(
                ":visible" => 1
            ),
            "order" => "id DESC",
            "limit" => "0,10"
        ));
    }

    function getPost($slug)
    {
        return $this->findFirst(array(
            "conditions" => array(
                ":slug" => $slug
            )
        ));
    }
}