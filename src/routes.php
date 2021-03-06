<?php

return [
    '~^hello/(.*)$~' => [\Controllers\MainController::class, 'sayHello'],
    '~^articles/(\d+)$~' => [\Controllers\ArticlesController::class, 'view'],
    '~^articles/(\d+)/edit$~' => [\Controllers\ArticlesController::class, 'edit'],
    '~^articles/(\d+)/delete$~' => [\Controllers\ArticlesController::class, 'delete'],
    '~^articles/add$~' => [Controllers\ArticlesController::class, 'add'],
    '~^users/register$~' => [\Controllers\UsersController::class, 'signUp'],
    '~^users/(\d+)/activate/(.+)$~' => [\Controllers\UsersController::class, 'activate'],
    '~^users/login~' => [\Controllers\UsersController::class, 'login'],
    '~^about$~' => [\Controllers\AboutController::class, 'about'],
    '~^$~' => [\Controllers\MainController::class, 'main'],
];
    