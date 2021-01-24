<?php

//membuat koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "tutorial");

//variabel nim yang dikirimkan form.php
$nim = $_GET['nim'];

//mengambil data
$query = mysqli_query($koneksi, "select * from mahasiswa where nim='$nim'");
$mahasiswa = mysqli_fetch_array($query);
$data = array(
            'nama'      =>  $mahasiswa['nama'],
            'jeniskelamin'      =>  $mahasiswa['jekel'],
            'alamat'    =>  $mahasiswa['alamat'],);

//tampil data
echo json_encode($data);
?>