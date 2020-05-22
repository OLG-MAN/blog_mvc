<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <title>Blog app</title>
    <link rel="stylesheet" href="/../style.css">
</head>

<body>

    <table class="layout">
        <tr>
            <td colspan="2" class="header">
                Blog
            </td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: right">
                <?= !empty($user) ? 'Hi, ' . $user->getNickname() : 'Please Sign In' ?>
            </td>
        </tr>
        <tr>
            <td>