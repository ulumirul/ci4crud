<?=$this->extend('/Tam/Tamplate');?>
<?=$this->section('conten');?>
<div class="back"><a href="<?=base_url('/')?>"><i class="fa-solid fa-arrow-left"></i></a></div>

<form action="<?=base_url('proses_add')?>" method="post">
    <ul>
        <li><input type="text" name="name"></li>
        <li><input type="text" name="kelas"></li>
        <li><input type="number" name="absen"></li>
        <li><button type="submit">kirim</button></li>
    </ul>
</form>

<?=$this->endSection();?>