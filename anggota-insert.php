<?php


if(isset($_POST['save']))
{ 
    $nis            = $_POST['nis'];
    $nama           = $_POST['nama'];
    $jenis_kelamin  = $_POST['jenis_kelamin'];
    $tempat_lahir   = $_POST['tempat_lahir'];
    $tanggal_lahir  = $_POST['tanggal_lahir'];
    $kelas          = $_POST['id_kelas'];
    $jurusan        = $_POST['id_jurusan'];
    $nomor_telepon  = $_POST['nomor_telepon'];
    $alamat         = $_POST['alamat'];
    $query_isset = mysqli_query($konek,"INSERT INTO anggota
    VALUES('','$nis','$nama','$jenis_kelamin','$tempat_lahir ','$tanggal_lahir','$kelas','$jurusan','$nomor_telepon','$alamat')");

    if($query_isset)
        { ?>
            <div class="alert alert-success">
                Data Berhasil Disimpan !!!......
            </div>
         <?php
         header('Refresh: 2; URL=http://localhost/26_mywebsite_12rpl2/admin.php?page=anggota');
        }else
        {?>
            <div class="alert alert-success">
                Data Gagal Disimpan !!!......
            </div>
            <?php
        }
}

?> 