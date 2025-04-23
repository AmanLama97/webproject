<?php
echo "<h2>My Portfolio</h2>";

$filename = "portfolio.txt";
if (file_exists($filename)) {
    $content = nl2br(file_get_contents($filename));
    echo $content;
} else {
    echo "No projects found.";
}
?>
