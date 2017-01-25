<?php

$slug = $params['slug'];

// fetch a post by a slug or whatever

echo Siler\Twig\render('pages/blog/post.twig', ['slug' => $slug]);
exit;
