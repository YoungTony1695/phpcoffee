<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Giỏ Hàng</title>
    <link rel="stylesheet" href="public/css/styles.css">
</head>
<body>
    <header>
        <div class="logo">
            <h1>Cửa Hàng Cà Phê</h1>
        </div>
        <nav>
            <ul>
                <li><a href="index.php">Trang Chủ</a></li>
                <li><a href="product/list">Sản Phẩm</a></li>
                <li><a href="cart">Giỏ Hàng</a></li>
                <li><a href="contact">Liên Hệ</a></li>
            </ul>
        </nav>
    </header>

    <section class="cart">
        <h2>Giỏ Hàng</h2>
        <table>
            <tr>
                <th>Sản Phẩm</th>
                <th>Giá</th>
                <th>Số Lượng</th>
                <th>Tổng</th>
            </tr>
            <?php foreach ($cartItems as $item): ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo number_format($item['price'], 0, ',', '.'); ?> VND</td>
                    <td><?php echo $item['quantity']; ?></td>
                    <td><?php echo number_format($item['total'], 0, ',', '.'); ?> VND</td>
                </tr>
            <?php endforeach; ?>
        </table>
        <p>Tổng tiền: <?php echo number_format($totalPrice, 0, ',', '.'); ?> VND</p>
        <a href="checkout">Tiến hành thanh toán</a>
    </section>

    <footer>
        <p>&copy; 2025 Cửa Hàng Cà Phê - Tất cả quyền lợi được bảo lưu.</p>
    </footer>
</body>
</html>
