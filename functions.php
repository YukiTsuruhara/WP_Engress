<?php
/**
 * <title>タグを出力する
 */
add_theme_support( 'title-tag' );

/**
 * アイキャッチ画像を使用可能にする
 */
add_theme_support( 'post-thumbnails' );

/**
 * カスタムメニュー機能を追加する
 */
add_theme_support('menus');

function twpp_enqueue_scripts() {
    wp_enqueue_script( 
      'main-script', 
      get_template_directory_uri() . '/main.js' ,
      array(),
      false,
      true
    );
  }
  
add_action( 'wp_enqueue_scripts', 'twpp_enqueue_scripts' );