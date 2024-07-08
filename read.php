<?php
require("connection.php");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$query = "SELECT * FROM website";
$result = mysqli_query($conn, $query);

// Check if query was successful
if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Users</title>
    <link rel="stylesheet" href="table.css">
</head>
<body>
    <header>
        <h2>Read Users</h2>
    </header>
    <main>
        <table border="1">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)): ?>
                <tr>
                    <td><?php echo htmlspecialchars($row['user_id']); ?></td>
                    <td><?php echo htmlspecialchars($row['user_name']); ?></td>
                    <td><?php echo htmlspecialchars($row['user_email']); ?></td>
                    <td>
                        <a href="update.php?id=<?php echo htmlspecialchars($row['user_id']); ?>">Edit</a>
                        <a href="delete.php?id=<?php echo htmlspecialchars($row['user_id']); ?>">Delete</a>
                    </td>
                </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    </main>
</body>
</html>

<?php
// Free result set and close the connection
mysqli_free_result($result);
mysqli_close($conn);
?>