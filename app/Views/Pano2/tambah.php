<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/8ead86d5ab.js"></script>
    <link rel="stylesheet" href="/css/style.css">
    <title>Document</title>
</head>
<body>
    <nav>
        <div class="name"><p>Ulum</p></div>
        <img src="/img/img1.png" alt="">
        <div class="pro"><i class="fa-solid fa-user"></i></div>
    </nav>
    <form action="<?=base_url('pro')?>" method="post">
        <ul>
            <li><input type="text" name="nama"></li>
            <li><input type="text" name="alamat"></li>
            <li><input type="text" name="no_hp"></li>
            <li><button type="submit">kirim</button></li>
        </ul>
    </form>
    <footer>
    <i class="fa-solid fa-fire fa-beat"></i>
    </footer>
</body>
</html>