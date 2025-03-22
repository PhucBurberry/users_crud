<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng ký</title>
    <link rel="stylesheet" href="css/">
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f9f9f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        .container {
            width: 100%;
            max-width: 600px;
            text-align: center;
            margin-top: 20px;
        }

        .navbar {
            background-color: white;
            padding: 10px;
            border: 1px solid #ccc;
        }

        .navbar a {
            text-decoration: none;
            color: black;
            font-weight: bold;
        }

        .navbar .active {
            color: blue;
        }

        .register-box {
            background-color: white;
            padding: 20px;
            border: 1px solid #ccc;
            width: 350px;
            margin: 20px auto;
        }

        h2 {
            margin-bottom: 15px;
        }

        label {
            display: block;
            text-align: left;
            margin: 5px 0;
        }

        input {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .footer a {
            text-decoration: none;
            color: blue;
        }

        button {
            background-color: blue;
            color: white;
            padding: 8px 15px;
            border: none;
            cursor: pointer;
            border-radius: 4px;
        }

        button:hover {
            background-color: darkblue;
        }

        footer {
            margin-top: 20px;
            font-size: 12px;
            color: gray;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="navbar">
            <span>Home | <a href="login.html">Đăng nhập</a> | <a href="#" class="active">Đăng ký</a></span>
        </div>

        <div class="register-box">
            <h2>Màn hình đăng ký</h2>
            <form action="#" method="post">
                <label for="username">Username</label>
                <input type="text" id="username" name="username" required>

                <label for="password">Mật khẩu</label>
                <input type="password" id="password" name="password" required>

                <label for="confirm-password">Nhập lại mật khẩu</label>
                <input type="password" id="confirm-password" name="confirm-password" required>

                <label for="email">Email</label>
                <input type="email" id="email" name="email" required>

                <div class="footer">
                    <a href="#">Đã có tài khoản</a>
                    <button type="submit">Đăng ký</button>
                </div>
            </form>
        </div>

        <footer>Lập trình web @01/2024</footer>
    </div>
</body>
</html>
