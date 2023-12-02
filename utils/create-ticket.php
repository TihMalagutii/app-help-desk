<?php

    $title = $_POST['title'];
    $category = $_POST['category'];
    $description = $_POST['description'];

    try {
        $db = new SQLite3("tickets.db");
        $db->exec("CREATE TABLE IF NOT EXISTS tickets (id INTEGER PRIMARY KEY AUTOINCREMENT, title TEXT, category TEXT, description TEXT)");
        $db->exec("INSERT INTO tickets (title, category, description) VALUES ('$title', '$category', '$description')");

        header("Location: ../tickets/open.php");
    } catch (Exception $e) {
        echo "An error occurred: " . $e->getMessage();
    }

?>