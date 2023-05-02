<?=$this->extend('/Tam/Tamplate');?>
<?=$this->section('conten');?>

<div class="add"><a href="<?= base_url('add')?>"><button>add</button></a></div>

    <table>
        <thead>
            <tr>
                <td>no</td>
                <td>nama siswa</td>
                <td>kelas</td>
                <td>absen</td>
            </tr>
        </thead>
        <tbody>
            <?php $num = 1; ?>
            <?php foreach($all as $gu): ?>
            <tr>
                <td><?=$num++;?></td>
                <td><?=$gu->name?></td>
                <td><?=$gu->kelas?></td>
                <td><?=$gu->absen?></td>
                <td><a href="<?=base_url('dell').'/'.$gu->id?>"><button>delete</button></a></td>
                <td><a href="<?=base_url('edit').'/'.$gu->id?>"><button>edit</button></a></td>
                
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>

<?=$this->endSection();?>