<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>DPKA UB</title>
    <style>
        body {
            background-color: #1C2659;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            font-family: sans-serif;
        }
        .login-container {
            background-color: #1C3959;
            padding: 30px;
            border-radius: 10px;
        }
        input[type="text"], input[type="password"] {
            background-color: #172B46;
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #172B46;
            border-radius: 4px;
            box-sizing: border-box;
            color: white;

        }
        button {
            background-color: #1C2659;
            color: white;
            width: 100%;
            padding: 10px 0;
            margin: 10px auto;
            border: none;
            border-radius: 20px;
            cursor: pointer;

        }
    </style>
</head>
<body>
    <div class="login-container">
        <h2 align="center" style="color: white;">Login</h2>
        <form method="get" action="ppp.blade.php">
            <input type="text" name="username" placeholder="Username" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>
</body>
</html>
