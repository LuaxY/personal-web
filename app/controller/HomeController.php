<?php

class HomeController extends Controller
{
    function actionIndex()
    {
        $this->request->action = "accueil";

        $d['cloud'] = array(
            "apache"         => 4, "assembler"  => 3, "boost"               => 4,
            "C/C++"          => 7, "cisco"      => 6, "css3"                => 4,
            "git"            => 5, "html5"      => 5, "javascript"          => 3,
            "jquery"         => 7, "linux"      => 2, "lua"                 => 3,
            "mongoDB"        => 3, "mysql"      => 5, "nginx"               => 2,
            "NoSQL"          => 3, "opensource" => 7, "php"                 => 6,
            "postgresql"     => 4, "proxmox"    => 3, "python"              => 2,
            "Qt"             => 6, "redis"      => 3, "reverse engineering" => 3,
            "sfml"           => 4, "shell"      => 5, "stl"                 => 6,
            "symfony 2"      => 2, "tcp/ip"     => 7, "unix"                => 6,
            "virtualization" => 5, "websocket"  => 5, "win32"               => 4,
            "xml"            => 4);

        $this->set($d);
        $this->render('home/accueil.php');
    }
}