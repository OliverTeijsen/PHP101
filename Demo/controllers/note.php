<?php
declare(strict_types=1);

// connect mysql db
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Note";

$note = $db ->query("SELECT * FROM notes where id = :id", ['id' => $_GET['id']])->fetch();

include "views/note.view.php";