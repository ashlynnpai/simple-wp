<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href='http://fonts.googleapis.com/css?family=Quicksand|Montserrat|Allura' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Playball' rel='stylesheet' type='text/css'>
     <link rel="shortcut icon" href="<?php bloginfo('template_directory');?>/images/favicon.ico">

    <title>
      <?php wp_title( '|', true, 'right' ); ?>
      <?php bloginfo( 'name' ); ?>
    </title>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class(); ?>>

    <div class="nav navbar navbar-inverse navbar-fixed-top navbar-default" role="navigation">
      <div class="container-fluid">
        <nav>
          <ul>
            <li><a href="http://www.ashlynnpai.com/work">MY WORK</a></li>
            <li><a href="http://www.ashlynnpai.com/blog" class="selected">BLOG</a></li>
            <li><a href="http://www.ashlynnpai.com" id="name">Ashlynn Pai</a></li>
            <li><a href="http://www.ashlynnpai.com/about">ABOUT</a></li>
            <li><a href="http://www.ashlynnpai.com/blog/contact/">CONTACT</a></li>
          </ul>   
          </nav>
        </div><!--/.navbar-collapse -->

      </div>
    </div>