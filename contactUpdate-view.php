<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Edit User</title>
</head>
<body>
  <h1>Edit User</h1>

  <form action="update_user.php" method="POST" onsubmit="return confirm('Are you sure you want to save these changes?');">
    <input type="hidden" name="id" value="<?= htmlspecialchars($user['id']) ?>">

    <label>
      Name:
      <input type="text" name="name" value="<?= htmlspecialchars($user['name']) ?>" required>
    </label><br>

    <label>
      Email:
      <input type="email" name="email" value="<?= htmlspecialchars($user['email']) ?>" required>
    </label><br>

    <button type="submit">Update User</button>
  </form>

  <a href="index.php">Back to User List</a>
</body>
</html>