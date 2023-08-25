<?php

    $connect = mysqli_connect('localhost', 'root', '', 'mdk2');

    if (!$connect) {
        die('Error connect to DataBase');
    }