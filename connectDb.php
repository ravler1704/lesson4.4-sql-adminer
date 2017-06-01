<?php
$pdo = new PDO("mysql:host=localhost;dbname=netology4_4", "root", "");
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);