<!DOCTYPE html>
<html>
<head>
    <link href= "https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <title></title>
</head>
<body>
    <h3>Tambah Pegawai</h3>
    <form action="proses_tambah_pegawai.php" method="post">
        NIK :
        <input type="int" name="nik" value="" class="form-control">


        Nama Pegawai:
        <input type="text" name="nama_pegawai" value="" class="form-control">

        Alamat:
        <textarea name="alamat" class="form-control" rows="4"></textarea>
        
        Jenis Kelamin:
        <select name="jenis_kelamin" class="form-control">
            <option></option>
            <option value="L"> Laki-Laki</option>
            <option value="P">Perempuan</option>
        </select>

        Nomor Telepon: 
        <input type="int" name="no_tlp" value="" class="form-control">

        Jabatan:
        <select name="jabatan" id=""></select>
        <option value=""></option>
        <?php
        $jab=mysqli_query($conn,"select * from jabatan");
        while($data=mysqli_fetch_array($jab)){
            echo'<option value = "'$data['id_jabatan'].'">'
        }
        ?>
        <input type="submit" name="simpan" value="Tambah Pegawai" class="btn btn-primary">

        
       
        <?php
        include "connection.php";
        $qry_pegawai=mysqli_query($conn, "select * from pegawai");
        while($data_pegawai=mysqli_fetch_array($qry_pegawai)){
            echo '<option value="'.$data_pegawai['id'].'">'. $data_pegawai['nama_pegawai'].'</option>';
        }
        ?>
        </select>
        

    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</body>
</html>