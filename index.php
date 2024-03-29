<?php require_once 'config/config.php'; ?>
<?php
$query = mysqli_query($db, "SELECT * FROM products ORDER BY id DESC LIMIT 4 ");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>فروشگاه اینترنتی زنبیل</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>

<div id="container">
    <div class="header">
        <h1>فروشگاه اینترنتی زنبیل</h1>
        <h2>مرکز آموزش مهارت‌های کار و زندگی</h2>
    </div>
    <div class="nav">
        <ul>
            <li><a href="#">صفحه نخست</a></li>
            <li><a href="#">سبد خرید</a></li>
            <li><a href="#">ورود به حساب کاربری</a></li>
            <li><a href="#">ثبت نام</a></li>
        </ul>
    </div>
    <hr>
    <div class="content">

        <?php while ($row = mysqli_fetch_array($query)) { ?>
            <div class="product-item">
                <div class="product-image"><a href="product.php?id=<?php echo $row['id'] ?>"><img src="images/<?php echo $row['product_image'] ?>" alt=""></a></div>
                <div class="product-name"><a href="product.php?id=<?php echo $row['id'] ?>"><?php echo $row['product_name'] ?></a></div>
                <div class="product-price"><?php echo $row['product_price'] ?> تومان</div>
                <div class="product-desc"><a href="product.php?id=<?php echo $row['id'] ?>">مشاهده ...</a></div>
            </div>
        <?php } ?>
    </div>
    <div class="sidebar">
        <div class="sidebar-item">
            <div class="sidebar-title">لیست محصولات</div>
            <div class="sidebar-content">
                <ul>
                    <?php
                    $query = mysqli_query($db, "SELECT * FROM products");
                    while ($row = mysqli_fetch_array($query)) { ?>
                        <li><a href="#"><?php echo $row['product_name'] ?></a></li>
                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
    <div style="clear: both;"></div>
    <div class="footer"><p>تمامی حقوق برای xanbil.com محفوظ می‌باشد.</p></div>
</div>

</body>
</html>