<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Đăng nhập</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            text-align: center;
            margin: 0;
            padding: 0;
        }
        .container {
            width: 100%;
            max-width: 400px;
            margin: 50px auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 2px 2px 10px rgba(0, 0, 0, 0.1);
        }
        h2 {
            margin-bottom: 20px;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .remember {
            text-align: left;
        }
        .actions {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        button {
            background-color: blue;
            color: white;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        .footer {
            margin-top: 20px;
            font-size: 12px;
        }
    </style>
</head>
<body>
    <header>
        <h1>Lập trình web</h1>
        <nav>
            <a href="">Home</a> | <a href="#">Đăng nhập</a> | <a href="register.html">Đăng ký</a>
        </nav>
    </header>
    <div class="container">
        <h2>Màn hình đăng nhập</h2>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Mật khẩu" required>
            <div class="remember">
                <input type="checkbox" id="remember">
                <label for="remember">Ghi nhớ đăng nhập</label>
            </div>
            <div class="actions">
                <a href="#">Quên mật khẩu</a>
                <button type="submit">Đăng nhập</button>
            </div>
        </form>
    </div>
    <footer class="footer">Lập trình web @01/2024</footer>
</body>
</html>
