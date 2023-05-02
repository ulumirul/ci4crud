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

<!-- <div class="add"><a href="<?= base_url('add')?>"><button>add</button></a></div> -->
<div class="add"><a href="<?=base_url('tamp')?>"><button>add</button></a></div>

    <table>
        <thead>
            <tr>
                <td>no</td>
                <td>nama siswa</td>
                <td>alsi</td>
            </tr>
        </thead>
        <tbody>
            <?php $num = 1; ?>
            <?php foreach($komik as $bt): ?>
            <tr>
                <td><?=$num++;?></td>
                <td><?=$bt['nama'];?></td>
                <td><a href="<?=base_url('dey').'/'.$bt['id'];?>"><button>delete</button></a></td>
                <td><a href="<?=base_url('melihat').'/'.$bt['id'];?>"><button>view</button></a></td>
                <td><a href=""><button>edit</button></a></td>
            <?php endforeach;?>
            </tr>
        </tbody>
    </table>

    <footer>
    <i class="fa-solid fa-fire fa-beat"></i>
    </footer>
</body>
</html>