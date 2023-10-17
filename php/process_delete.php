<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Code to delete the blog post from the database
    // Redirect back to the index.php page
    header("Location: index.php");
}
?>
