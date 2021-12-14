   <?php
         if(isset($_GET['delete']))
         {
             $id = $_GET['id'];
             $query_delete = mysqli_query($konek,"DELETE FROM anggota WHERE id_anggota= '$id'");
         }


        if(isset($_POST['save']))
        { 
            $nis=$_POST['nis'];
            $nama=$_POST['nama'];
            $kelas=$_POST['kelas'];
            $jurusan=$_POST['jurusan'];
            $tanggal_lahir=$_POST['tanggal_lahir'];
            $no_telepon=$_POST['no_telepon'];
            $alamat=$_POST['alamat'];
            $jenis_kelamin=$_POST['jenis_kelamin'];
            $query_isset = mysqli_query($konek,"INSERT INTO anggota
            VALUES('','$nis','$nama','$kelas','$jurusan','$tanggal_lahir','$no_telepon','$alamat','$jenis_kelamin')");

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
    <center><h1 class="mt-4 mb-3">Data Anggota</h1></center>
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
    Tambah Data
    </button>
    <br>
    <table class="table table-striped table-hover">
        <tr class="text-center">
            <th>No</th>
            <th>NIS</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
            <th>Tgl Lahir</th>
            <th>Tlp</td>
            <th>Alamat</th>
            <th>Gender</th>
            <th>---Action---</th>
        </tr>
        <?php
            $query = mysqli_query($konek,"SELECT * FROM anggota");
            $no = 1;
            foreach ($query as $row) {
        ?>
        <tr>
            <td align="center" valign="middle"><?php echo $no; ?></td>
            <td valign="middle"><?php echo $row['nis']; ?></td>
            <td valign="middle"><?php echo $row['nama']; ?></td>
            <td valign="middle"><?php echo $row['kelas']; ?></td>
            <td valign="middle"><?php echo $row['jurusan']; ?></td>
            <td valign="middle"><?php echo $row['tanggal_lahir']; ?></td>
            <td valign="middle"><?php echo $row['no_telepon']; ?></td>
            <td valign="middle"><?php echo $row['alamat']; ?></td>
            <td align="center" valign="middle"><?php echo $row['jenis_kelamin']; ?></td>
            <td valign="middle">
                <a href="?page=anggota&delete&id=<?php echo $row['id_anggota']; ?>">
                <button class="btn btn-danger" name="delete"><i class="fas fa-trash-alt">Hapus</i></button>
                </a>
                <button class="btn btn-warning"><i class="fas fa-edit">Update</i></button>
            </td>
        </tr>
        <?php
        $no++;
        }
        ?>
    </table>



    <!-- Modal -->
        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form action="" method="post">
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="nis" placeholder="NIS" required>
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="nama" placeholder="Nama Siswa" required>
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="kelas" placeholder="Kelas" required>
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="jurusan" placeholder="Jurusan" required>
                    </div>
                    <div class="form-group mt-2">
                        <span class="input-group-text">Tanggal Lahir</span>
                        <input class="form-control" type="date" name="tanggal_lahir" placeholder="Tanggal Lahir">
                    </div>
                    <div class="form-group mt-2">
                        <input class="form-control" type="text" name="no_telepon" placeholder="No Telepon" required>
                    </div>
                    <div class="form-group mt-2">
                        <textarea class="form-control" type="text" name="alamat" placeholder="Alamat"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <select class="form-control" type="text" name="jenis_kelamin" placeholder="Jenis Kelamin">
                            <option value="">--Pilih Gender--</option>
                            <option value="L">Laki-Laki</option>
                            <option value="P">Perempuan</option>
                        </select>
                    </div>
                
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="submit" class="btn btn-primary" name="save">Save</button>
            </div>
            </div>
                </form>
        </div>
        </div>

