<?php
    require_once('class_mahasiswa.php');
    $mahasiswa = new Mahasiswa (010101,"Diki Darmawan",4);
    echo $mahasiswa->predikat_ipk();
    echo $mahasiswa->nim;
    echo $mahasiswa->nama;
?>