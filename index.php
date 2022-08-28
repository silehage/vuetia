<?php

use BoxyBird\Inertia\Inertia;

if (is_home()) {

    return Inertia::render('Index', [
        'posts' => gethomePosts(5)
    ]);
}

if (is_single()) {

    return Inertia::render('Single', [
        'post' => getSinglePost(),
        'related_posts' => getRelatedPost()
    ]);
}

if (is_page()) {
    return Inertia::render('Page', [
        'post' => get_post(),
    ]);
}

if (is_404()) {
    return Inertia::render('404', [
        'content' => '404 - Not Found',
    ]);
}
