<!DOCTYPE html>
<html>
<head>
    <title>Blog Posts</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            background-color: #3498db;
            color: #fff;
            text-align: center;
            padding: 20px 0;
        }

        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }

        table, th, td {
            border: 1px solid #ccc;
        }

        th, td {
            padding: 10px;
            text-align: left;
        }

        tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        a {
            color: #3498db;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }

        .action-buttons {
            text-align: center;
        }

        .create-button {
            text-align: center;
            margin: 20px 0;
        }

        .create-button a {
            background-color: #3498db;
            color: #fff;
            padding: 10px 20px;
            border-radius: 5px;
            text-decoration: none;
        }

        .create-button a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <h1>Blog Posts</h1>

    <table>
        <tr>
            <th>Title</th>
            <th>Content</th>
            <th class="action-buttons">Action</th>
        </tr>
        <tr>
            <td>Sample Blog Post 1</td>
            <td>This is the content of the first post.</td>
            <td class="action-buttons">
                <a href="update.php">Update</a> |
                <a href="delete.php">Delete</a>
            </td>
        </tr>
        <tr>
            <td>Sample Blog Post 2</td>
            <td>This is the content of the second post.</td>
            <td class="action-buttons">
                <a href="update.php">Update</a> |
                <a href="delete.php">Delete</a>
            </td>
        </tr>
    </table>

    <div class="create-button">
        <a href="create.php">Create New Blog Post</a>
    </div>
</body>
</html>
