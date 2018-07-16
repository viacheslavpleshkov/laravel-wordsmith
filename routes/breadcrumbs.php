<?php

// Головна
Breadcrumbs::for('home', function ($trail) {
    $trail->push( __('admin.home'), route('admin.index'));
});

// Головна > Користувачі
Breadcrumbs::for('users', function ($trail) {
    $trail->parent('home');
    $trail->push( __('admin.users'), route('users.index'));
});

// Головна > Blog
Breadcrumbs::for('blog', function ($trail) {
    $trail->parent('home');
    $trail->push('Blog', route('blog'));
});
