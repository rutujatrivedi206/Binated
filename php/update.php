<!DOCTYPE html>
<html>
<head>
    <title>Update Blog Post</title>
</head>
<body>
    <h1>Update Blog Post</h1>

    <form method="post" action="process_update.php">
        <label for="title">Title:</label>
        <input type="text" id="title" name="title" required>

        <label for="content">Content:</label>
        <textarea id="content" name="content" required></textarea>

        <button type="submit">Update</button>
    </form>

    <a href="index.php">Back to Blog Posts</a>
</body>
</html>
