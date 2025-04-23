<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = htmlspecialchars($_POST['title']);
    $description = htmlspecialchars($_POST['description']);

    $data = "Title: $title\nDescription: $description\n---\n";

    file_put_contents("portfolio.txt", $data, FILE_APPEND);
    
    echo "Project saved successfully!";
} else {
    echo "Invalid request.";
}
?>
