<?php

$slug = $params['slug'];

// fetch post by slug

echo Siler\Twig\render('pages/blog/post.twig', ['slug' => $slug]);
exit;
