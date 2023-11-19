<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="styles.css">
    <style>
        body { font-family: Arial, sans-serif; margin: 0; padding: 0; display: flex; align-items: center; justify-content: center; height: 100vh; background-color: #f4f4f4; } .login-container { background-color: #fff; padding: 20px; border-radius: 5px; box-shadow: 0 0 10px rgba(0, 0, 0, 0.1); text-align: center; } h1 { color: #333; } form { display: flex; flex-direction: column; } label { margin-bottom: 8px; } input { padding: 8px; margin-bottom: 16px; border: 1px solid #ccc; border-radius: 3px; } button { background-color: #3498db; color: #fff; border: none; padding: 10px; cursor: pointer; border-radius: 3px; } button:hover { background-color: #2980b9; }
        </style>
</head>
<body>
    <div class="login-container">
        <h1>Login</h1>
        <form action="login.php" method="post">
            <input type="text" id="username" name="username" required placeholder="Username">
            <input type="password" id="password" name="password" required placeholder="Password">
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
