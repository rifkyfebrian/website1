<?php
//Proses Delete
if (isset($_GET['delete'])) {
    $id = $_GET['id'];
    $query_delete = mysqli_query($konek,"DELETE FROM anggota where id_anggota = '$id'");
    
    if($query_delete){
        ?>
            <script>
                alert("Data Berhasil Di Delete");
            </script>
        <?php
        header('refresh:0; URL=http://localhost/26_mywebsite_12rpl2/admin.php?page=anggota');
    }
}
////End of proses delete data/////////////////////////////////////////////////////////////////////////
?>