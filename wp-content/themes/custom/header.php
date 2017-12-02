<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    

  <title>

    <?php bloginfo('name'); ?>

    <?php

      global $post;

      if( $post->post_parent ) { ?>

        <?php echo " > " . get_the_title( $post->post_parent ) . " > "; ?>

      <?php } else {} ?>  

    <?php wp_title('',true,'right'); ?>

  </title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo get_option('home');?>/wp-content/themes/custom/style.css">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <link rel="stylesheet" type="text/css" href="<?php echo get_option('home');?>/wp-content/themes/custom/slick/masterslick.css"/>

    <?php wp_head(); ?>

  </head>

  <body <?php body_class( $class ); ?>> 



  <section id="topinfo">

    <div class="container">

      <div class="row">

        <div class="col-sm-12">

          <p><a href="tel:9106856223"><i class="fa fa-phone" aria-hidden="true"></i> 910-685-6223</a> | <a href="mailto:kimberlymspader@gmail.com"><i class="fa fa-envelope" aria-hidden="true"></i> kimberlymspader@gmail.com</a></p>

        </div>

      </div>

    </div>

  </section>

  

    <section id="header">

      <?php include('nav.php');?>

    </section><!-- #header -->



<?php include('slick.php');?>