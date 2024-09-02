<?php
if($_POST){

    $nik = $_POST['nik'];
    $nama_pegawai = $_POST['nama_pegawai'];
    $alamat = $_POST['alamat'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_tlp = $_POST['no_tlp'];
    $jabatan = $_POST['jabatan'];

    if(empty($nik)){
        echo "<script>alert('NIK tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    }elseif(empty($nama_pegawai)){
        echo "<script>alert('nama tidak boleh kosong');location.href='tambah_pegawai.php';</script>";

    }elseif(empty($jenis_kelamin)){
        echo "<script>alert('jenis kelamin tidak boleh kosong');location.href='tambah_pegawai.php';</script>";
    } else {
        include "connection.php";
        $insert=mysqli_query($conn,"insert into pegawai (nik, nama_pegawai, alamat, jenis_kelamin, no_tlp, jabatan) value ('".$nik."','".$nama_pegawai."','".$alamat."','".$jenis_kelamin."','".$no_tlp."','".$jabatan."')") or die(mysqli_error($conn));
        if($insert){
            echo "<script>alert('Sukses menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        } else {
            echo "<script>alert('Gagal menambahkan pegawai');location.href='tambah_pegawai.php';</script>";
        }

    }

}
?>