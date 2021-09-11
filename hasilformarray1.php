<?php
    if(isset($_POST['simpan'])) {
        $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Array</title>
</head>
<body><center>
    <h3> Data Siswa Kelas XII RPL </h3>

    <table border="1">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th>Jurusan</th>
        </tr>

        <?php
            $no =1;
            for ($i=0; $i < count($nama) ; $i++) { 
        ?>

        <tr>
            <td> <?php echo $no++; ?> </td>
            <td> <?php echo $nama[$i]; ?> </td>
            <td> <?php echo $kelas[$i]; ?> </td>
            <td> <?php echo $jurusan[$i]; } ?> </td>
        </tr>

    </table>

</center></body>
</html>