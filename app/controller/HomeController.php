<?php

class HomeController extends Controller
{
    function actionIndex()
    {
        $d['cloud'] = array(
            "apache"         => 4, "assembler"  => 3, "boost"               => 4,
            "C/C++"          => 7, "cisco"      => 6, "css3"                => 4,
            "git"            => 5, "html5"      => 5, "javascript"          => 3,
            "jquery"         => 7, "linux"      => 3, "lua"                 => 5,
            "mongoDB"        => 3, "mysql"      => 5, "nginx"               => 2,
            "nodejs"         => 3, "NoSQL"      => 2, "php"                 => 6,
            "postgresql"     => 4, "proxmox"    => 3, "python"              => 2,
            "Qt"             => 6, "redis"      => 3, "reverse engineering" => 3,
            "sfml"           => 4, "shell"      => 5, "stl"                 => 6,
            "symfony 2"      => 2, "tcp/ip"     => 7, "unix"                => 5,
            "virtualization" => 5, "websocket"  => 5, "win32"               => 4,
            "xml"            => 4, "KVM"        => 2, "actionscript3"       => 4,
            "OpenVPN"        => 3);

        $this->set($d);
        $this->render('home/accueil.php');
    }
}