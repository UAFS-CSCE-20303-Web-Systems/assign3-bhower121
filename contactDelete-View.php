<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>User List</title>
</head>
<body>
  <h1>User List</h1>

  <table border="1" cellpadding="8">
    <tr>
      <th>ID</th><th>Name</th><th>Email</th><th>Actions</th>
    </tr>

    <?php while ($user = $result->fetch_assoc()): ?>
      <tr>
        <td><?= htmlspecialchars($user['id']) ?></td>
        <td><?= htmlspecialchars($user['name']) ?></td>
        <td><?= htmlspecialchars($user['email']) ?></td>
        <td>
          <a href="edit_user.php?id=<?= $user['id'] ?>">Edit</a>

          <form action="delete_user.php" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to delete this user?');">
            <input type="hidden" name="id" value="<?= $user['id'] ?>">
            <button type="submit">Delete</button>
          </form>
        </td>
      </tr>
    <?php endwhile; ?>
  </table>

</body>
</html>