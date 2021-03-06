<?php

/*
 * (c) 2013 Yann Guineau
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

function bbcode($text)
{
    $text = Security::AntiXSS($text);

    $text = preg_replace('!\[quote\](.+)\[/quote\]!isU', '<blockquote>$1</blockquote>', $text);
    $text = preg_replace('!\[quote\=(.+)\](.+)\[\/quote\]!isU', '<blockquote><strong>$1 :</strong><br>$2</blockquote>', $text);
    $text = preg_replace('!\[b\](.+)\[/b\]!isU', '<strong>$1</strong>', $text);
    $text = preg_replace('!\[i\](.+)\[/i\]!isU', '<em>$1</em>', $text);
    $text = preg_replace('!\[u\](.+)\[/u\]!isU', '<span style="text-decoration:underline;">$1</span>', $text);
    $text = preg_replace('!\[center\](.+)\[/center\]!isU', '<p style="text-align:center;margin:0px;padding:0px;">$1</p>', $text);
    $text = preg_replace('!\[right\](.+)\[/right\]!isU', '<p style="text-align:right;margin:0px;padding:0px;">$1</p>', $text);
    $text = preg_replace('!\[left\](.+)\[/left\]!isU', '<p style="text-align:left;margin:0px;padding:0px;">$1</p>', $text);
    $text = preg_replace('!\[titre\](.+)\[/titre\]!isU', '<h3>$1</h3>',$text);
    $text = preg_replace('!\[email\](.+)\[/email\]!isU', '<a href="mailto:$1">$1</a>',$text);
    $text = preg_replace('!\[email=(.+)\](.+)\[/email\]!isU', '<a href="mailto:$1">$2</a>',$text);
    $text = preg_replace('!\[img\](.+)\[/img\]!isU', '<img src="$1" border="0">',$text);
    $text = preg_replace('!\[url\](.+)\[/url\]!isU', '<a href="$1" target="_blank">$1</a>',$text);
    $text = preg_replace('!\[url\=(.+)\](.+)\[\/url\]!isU', '<a href="$1" target="_blank">$2</a>', $text);
    $text = preg_replace('!\[color\=(.+)\](.+)\[\/color\]!isU', '<font color="$1">$2</font>', $text);
    $text = preg_replace('!\[font\=(.+)\](.+)\[\/font\]!isU', '<span style="font-family: $1;">$2</span>', $text);
    $text = preg_replace('!\[size\=(.+)\](.+)\[\/size\]!isU', '<font size="$1">$2</font>', $text);
    $text = preg_replace('!\[code\](.+)\[/code\]!isU', 'Code:<code>$1</code>', $text);
    $text = str_replace("[hr]", "<hr />", $text);

    echo nl2br($text);
}

function markdown($text)
{
    $Parsedown = new Parsedown();
    echo $Parsedown->text($text);
}

function get_data($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/4.0 (compatible; MSIE 8.0; Windows NT 6.0)");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST,false);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER,false);
    curl_setopt($ch, CURLOPT_MAXREDIRS, 10);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 5);

    $data = curl_exec($ch);
    curl_close($ch);

    return $data;
}

function date_fr($date, $format)
{
    $date = date($format, strtotime($date));
    $english = array("January", "February", "March", "April", "May", "June", "July",    "August", "September", "October", "November", "December");
    $french  = array("Janvier", "Février",  "Mars",  "Avril", "Mai", "Juin", "Juillet", "Août",   "Septembre", "Ocobre",  "Novembre", "Décembre");

    return str_replace($english, $french, $date);
}