<?=$this->extend('/Tam/Tamplate');?>
<div class="back"><a href="<?=base_url('/')?>"><i class="fa-solid fa-arrow-left"></i></a></div>

<?=$this->section('conten');?>
<form action="<?=base_url('prose')?>" method="post">
    <ul>
        <li><input type="hidden" name="id" value="<?=$opo->id?>"></li>
        <li><input type="text" name="name" value="<?=$opo->name?>"></li>
        <li><input type="text" name="kelas" value="<?=$opo->kelas?>"></li>
        <li><input type="number" name="absen" value="<?=$opo->absen?>"></li>
        <li><button type="submit">edit</button></li>
    </ul>
    <?=$this->endSection();?>
</form>