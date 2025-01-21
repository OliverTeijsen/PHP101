<?php
declare(strict_types=1);

// connect mysql db
$config = require 'config.php';
$db = new Database($config['database']);

$heading = "Notes";

$notes = $db ->query("SELECT * FROM notes where user_id = '1'")->fetchAll();

//dd($notes);

include "views/notes.view.php";