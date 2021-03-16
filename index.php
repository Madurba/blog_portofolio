<?php

require 'vendor/autoload.php';
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}
if (empty($_GET['url'])) {
    $_GET['url'] = '/';
}

// Active debug mode
$whoops = new \Whoops\Run;
$whoops->pushHandler(new \Whoops\Handler\PrettyPageHandler);
$whoops->register();

$router = new App\Router\Router($_GET['url']);
try {
    // FRONT INTERFACE
    $router->get('/cv', 'Frontend#cvFlo');
    $router->get('/article-:id', 'Frontend#post')->with('id', '[0-9]+');
    $router->get('/blog', 'Frontend#listPosts');
    $router->get('/login', 'Frontend#loginView');
    $router->post('/login', 'Frontend#connect');
    $router->post('/register', 'Frontend#register');
    $router->post('/contactform', 'Frontend#contactForm');
    // USER INTERFACE
    $router->post('/user-addComment-:id', 'Account#addComment')->with('id', '[0-9]+');
    $router->post('/user-editComment-:id', 'Account#editComment')->with('id', '[0-9]+');
    $router->get('/user-comment-:id', 'Account#comment')->with('id', '[0-9]+');
    $router->get('/user-removeComment-:id', 'Account#removeCommentManager')->with('id', '[0-9]+');
    $router->get('/user', 'Account#interfaceAccount');
    // ADMIN INTERFACE
    $router->get('/admin-deleteComment-:id', 'Backend#removeCommentManager')->with('id', '[0-9]+');
    $router->post('/admin-editComment-:id', 'Backend#editComment')->with('id', '[0-9]+');
    $router->get('/admin-comment-:id', 'Backend#comment')->with('id', '[0-9]+');
    $router->post('/admin-editPost-:id', 'Backend#editPostManager')->with('id', '[0-9]+');
    $router->post('/admin-addPost', 'Backend#addPostManager');
    $router->post('/admin-delete', 'Backend#removePostManager');
    $router->get('/admin-previewPost-:id', 'Backend#post')->with('id', '[0-9]+');
    $router->get('/admin-post', 'Backend#viewAddPost');
    $router->post('/admin-commentValid', 'Backend#commentValid');
    $router->get('/admin', 'Backend#interfaceAdmin');
    // HOME & LOG INTERFACE
    $router->get('/logout', 'Frontend#logout');
    $router->get('/', 'Frontend#homeView');
    // 404 ERROR
    $router->get('/404', 'Frontend#errorView');
    // RUN ROUTE
    $router->run();
} catch (\Exception $e) {
    $errorMessage = $e->getMessage();
    $_SESSION['errorMessage'] = $errorMessage;
    header('HTTP/1.1 404 Not Found');
    header('Location: /404');
}
