<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách User</title>
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
            max-width: 700px;
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 15px;
        }

        th, td {
            border: 1px solid #ccc;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        .actions a {
            margin: 0 5px;
            text-decoration: none;
            color: blue;
        }

        .pagination {
            margin: 15px 0;
        }

        .pagination a {
            text-decoration: none;
            color: blue;
            padding: 5px 10px;
            border: 1px solid #ccc;
            margin: 2px;
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

        <h2>Danh sách user</h2>
        <table>
            <tr>
                <th>#</th>
                <th>Username</th>
                <th>Email</th>
                <th>Thao tác</th>
            </tr>
            <tr>
                <td>1</td>
                <td>UPVH</td>
                <td>ATJW@gmail.com</td>
                <td class="actions">
                    <a href="#">Edit</a> | <a href="#">View</a> | <a href="#">Delete</a>
                </td>
            </tr>
            <!-- Dữ liệu user sẽ được thêm vào đây bằng PHP hoặc JavaScript -->
        </table>

        <div class="pagination">
            <a href="#">Previous</a>
            <a href="#">1</a>
            <a href="#">2</a>
            <a href="#">3</a>
            <a href="#">Next</a>
        </div>

        <footer>Lập trình web @01/2024</footer>
    </div>
</body>
</html>
