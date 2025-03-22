<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi tiết User</title>
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
            max-width: 500px;
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

        .card {
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
            text-align: left;
            position: relative;
        }

        .card h2 {
            text-align: center;
        }

        .card p {
            margin: 10px 0;
        }

        .btn {
            position: absolute;
            bottom: 15px;
            right: 15px;
            padding: 5px 10px;
            background-color: blue;
            color: white;
            text-decoration: none;
            border-radius: 3px;
            font-size: 14px;
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
            <span>Home | <a href="#">Đăng xuất</a></span>
        </div>

        <div class="card">
            <h2>Màn hình chi tiết</h2>
            <p><strong>Username:</strong> test1</p>
            <p><strong>Email:</strong> test1@gmail.com</p>
            <a href="#" class="btn">Chỉnh sửa</a>
        </div>

        <footer>Lập trình web @01/2024</footer>
    </div>
</body>
</html>
