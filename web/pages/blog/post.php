<?php

$slug = $params['slug'];

// fetch post by slug

echo render('pages/blog/post.twig', ['slug' => $slug]);
exit;
