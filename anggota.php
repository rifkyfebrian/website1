  
    <center><h1 class="mt-4 mb-3">Data Anggota</h1></center>
    <br>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary mt-2" data-bs-toggle="modal" data-bs-target="#tambahanggotaLabel">
    Tambah Data
    </button>
    <br>
    <table class="table table-striped table-hover">
        <tr class="text-center">
        <th>No</th>
        <th>NIS</th>
        <th>Nama</th>
        <th>Gender</th>
        <th>Tpt Lahir</th>
        <th>Tgl Lahir</th>
        <th>Kelas</th>
        <th>Jurusan</th>
        <th>Tlp</td>
        <th>Alamat</th>
        <th>--Action--</th>
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
        <td align="center" valign="middle"><?php echo $row['jenis_kelamin']=="L"?"Laki-laki":"Perempuan"; ?></td>
        <td valign="middle"><?php echo $row['tempat_lahir']; ?></td>
        <td valign="middle"><?php echo $row['tanggal_lahir']; ?></td>
        <td valign="middle"><?php echo $row['id_kelas']; ?></td>
        <td valign="middle"><?php echo $row['id_jurusan']; ?></td>
        <td valign="middle"><?php echo $row['nomor_telepon']; ?></td>
        <td valign="middle"><?php echo $row['alamat']; ?></td>
        <td valign="middle">
                <a href="?page=anggota-delete&delete&id=<?php echo $row['id_anggota']; ?>">
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
    <div class="modal fade" id="tambahanggotaLabel" tabindex="-1" aria-labelledby="tambahanggotaLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
        <div class="modal-header">
            <h5 class="modal-title" id="tambahanggotaLabel">Form Tambah Anggota</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
            <form action="?page=anggota-insert" method="post">
                <div class="form-group">
                    <input class="form-control" type="text" name="nis" placeholder="Nomor Induk Siswa" required>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="nama" placeholder="Nama Lengkap" required>
                </div>
                <!-- <div class="form-group mt-2">
                    <select class="form-control" name="id_kelas" required>
                        <option value="">--Pilih Kelas--</option>
                        <option value="12">XII RPL 1</option>
                        <option value="XIIRPL2">XII RPL 2</option>
                        <option value="XIIRPL3">XII RPL 3</option>
                    </select> -->
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="id_kelas" required>
                        <option value="">--Pilih Kelas--</option>
                        <?php
                            $query_kelas = mysqli_query($konek,"SELECT * FROM kelas");
                            foreach ($query_kelas as $kelas) {
                                ?>
                                <option value="<?php echo $kelas['id_kelas']?>"><?php echo $kelas['nama_kelas']?></option>
                                <?php
                            }
                        ?>
                        
                    </select>
                </div>

                <!-- <div class="form-group mt-2">
                    <select class="form-control" name="id_jurusan" required>
                        <option value="">--Pilih Jurusan--</option>
                        <option value="1">Rekayasa Perangkat Lunak</option>
                        <option value="TAV">Teknik Audio Video</option>
                        <option value="TKR">Teknik Kendaraan Ringan</option>
                        <option value="TITL">Teknik Instalasi Tenaga Listrik</option>
                    </select>
                </div> -->
                <div class="form-group mt-2">
                    <select class="form-control" name="id_jurusan" required>
                        <option value="">--Pilih Jurusan--</option>
                        <?php
                            $query_kelas = mysqli_query($konek,"SELECT * FROM jurusan");
                            foreach ($query_kelas as $kelas) {
                                ?>
                                <option value="<?php echo $kelas['id_jurusan']?>"><?php echo $kelas['nama_jurusan']?></option>
                                <?php
                            }
                        ?>
                    </select>
                </div>

                <div class="form-group mt-2">
                    <input class="form-control" type="date" name="tanggal_lahir">
                </div>
                <div class="form-group mt-2">
                    <select class="form-control" name="jenis_kelamin">
                        <option value="">--Pilih Jenis Kelamin--</option>
                        <option value="L">Laki-laki</option>
                        <option value="P">Perempuan</option>
                    </select>
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="tempat_lahir" placeholder="Tempat Lahir">
                </div>
                <div class="form-group mt-2">
                    <input class="form-control" type="text" name="nomor_telepon" placeholder="Nomor Telepon">
                </div>
                <div class="form-group mt-2">
                    <textarea name="alamat" class="form-control" placeholder="Alamat Lengkap"></textarea>
                </div>
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

