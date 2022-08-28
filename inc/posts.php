<?php

function gethomePosts($limit = 5)
{
  $args = [
    'posts_per_page' => $limit
  ];

  query_posts($args);

  $data = array();
  while ( have_posts() ) : the_post();

    $data[] = array(
      'post_id'     => get_the_ID(),
      'post_link'   => get_the_permalink(),
      'post_teaser' => get_the_excerpt(),
      'post_thumbnail' => get_the_post_thumbnail_url(),
      'post_title'  => html_entity_decode(get_the_title()),
    );
    
  endwhile;

  wp_reset_query();

  return $data;

}

function getSinglePost() 
{
  global $post;

    $data = array(
      'post_id'     => $post->ID,
      'post_title'   => $post->post_title,
      'post_content'   => $post->post_content,
    );

  wp_reset_query();

  return $data;

}
function getRelatedPost()
{
  
  global $post;

  $args= [
    'category__in' => wp_get_post_categories($post->ID), 
    'numberposts' => 5, 
    'post__not_in' => array($post->ID)
  ];

  query_posts($args);

   $data = array();

   while ( have_posts() ) : the_post();
 
     $data[] = array(
       'post_id'     => get_the_ID(),
       'post_link'   => get_the_permalink(),
       'post_teaser' => get_the_excerpt(),
       'post_thumbnail' => get_the_post_thumbnail_url(),
       'post_title'  => html_entity_decode(get_the_title()),
     );

   endwhile;
 
   wp_reset_query();
 
   return $data;
}