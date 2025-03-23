<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chi Tiết Sản Phẩm</title>
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

    <section class="product-detail">
        <h2><?php echo $product['name']; ?></h2>
        <img src="public/images/<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
        <p>Giá: <?php echo number_format($product['price'], 0, ',', '.'); ?> VND</p>
        <p><?php echo $product['description']; ?></p>
        <a href="cart/add/<?php echo $product['id']; ?>">Thêm vào giỏ hàng</a>
    </section>

    <footer>
        <p>&copy; 2025 Cửa Hàng Cà Phê - Tất cả quyền lợi được bảo lưu.</p>
    </footer>
</body>
</html>
