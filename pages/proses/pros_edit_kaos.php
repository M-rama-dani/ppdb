<?php

include ('../../koneksi.php');
$noPendaftaran = $_POST['no_pendaftaran'];
$namaSiswa = $_POST['nama_siswa'];

$ukuran = $_POST['ukuran'];
$tanggal = $_POST['tanggal'];

$update_Siswa_query ="UPDATE data_siswa SET nama_Siswa ='$namaSiswa',ukuran='$ukuran',tanggal='$tanggal' WHERE no_pendaftaran='$noPendaftaran'";
if(mysqli_query($koneksi, $update_Siswa_query)){
    
    $update_ortu_query = "UPDATE data_ortu SET nama_siswa='$namaSiswa' WHERE id=(SELECT id FROM data_Siswa WHERE no_pendaftaran='$noPendaftaran')";
    if (!mysqli_query($koneksi,$update_ortu_query)){
        echo "Error: " . $update_ortu_query . "<br>" . mysqli_error($koneksi);

    }
        $update_wali_query = "UPDATE data_wali SET nama_s   iswa='$namaSiswa='WHERE id=(SELECT id FROM data_Siswa WHERE no_pendaftaran='$noPendaftaran')";
        if(!mysqli_query($koneksi, $update_wali_query)){
            echo "Error:" . $update_wali_query . "<br>" . mysqli_error($koneksi);

        }        

            header("location:../data_kaos.php");
        }else{
            echo "Error: " . $update_siswa_query . "<br>" . mysqli_error($koneksi);
        }
             mysqli_close($koneksi);
     
?>

