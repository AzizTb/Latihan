<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Bootstrap</title>
  </head>
  <body>

    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand">ASTOTH</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
        <li class="nav-item active">
            <a class="nav-link" href="soal1.php"> Penggajihan <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="soal2.php"> Vaksin <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item active">
            <a class="nav-link" href="soal3.php"> Pengulangan <span class="sr-only">(current)</span></a>
        </li>
        </ul>
    </div>
    </nav>

    <br><br>

    <form method="POST" action="">

    <!-- input -->
    <div class="container">
        <div class="card">
            <div class="card-header">
                <center>
                    <b>PENGGAJIHAN PT. GARUDA KEPALA DUA</b>
                </center>
            </div>
            <div class="card-body">
            <form>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Bendahara</label>
                    <div class="col-sm-10">
                        <input type="text" name="bendahara" class="form-control" id="staticEmail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Nama Pekerja</label>
                    <div class="col-sm-10">
                        <input type="text" name="pekerja" class="form-control" id="staticEmail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jenis Kelamin</label>
                    <div class="col-sm-10">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis" value="Laki-laki">
                            <label class="form-check-label" for="inlineRadio1">Laki-laki</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="jenis" value="Perempuan">
                            <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Tanggal</label>
                    <div class="col-sm-10">
                        <input type="date" name="tgl" class="form-control" id="staticEmail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Jabatan</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select name="jabatan" value="jabatan" class="form-control" id="exampleFormControlSelect1">
                            <option value="TIDAK ADA">---Pilih Jabatan---</option>
                            <option value="Direktur">Direktur</option>
                            <option value="Manager">Manager</option>
                            <option value="karyawan">Karyawan</option>
                            <option value="OB">OB</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label" >Pendidikan Terakhir</label>
                    <div class="col-sm-10">
                        <div class="form-group">
                            <select class="form-control" name="pendidikan" id="exampleFormControlSelect1">
                            <option value="TIDAK ADA">---Pilih Pendidikan---</option>
                            <option value="SD">SD</option>
                            <option value="SMP">SMP</option>
                            <option value="SMA">SMA</option>
                            <option value="Sarjana">Sarjana</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Lembur</label>
                    <div class="col-sm-10">
                        <input type="number" name="lembur" class="form-control" id="staticEmail" placeholder="Hari / Rp.20.000">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label">Potongan</label>
                    <div class="col-sm-10">
                        <input type="number" name="potong" class="form-control" id="staticEmail">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="staticEmail" class="col-sm-2 col-form-label"></label>
                    <div class="col-sm-10">
                        <input type="submit" name="kirim" class="btn btn-primary" value="KIRIM">
                    </div>
                </div>



            </form>
            </div>
        </div>
    </div>

    <br><br>

    <div class="container">
        <div class="card">
            <div class="card-body">
            <center>

    <?php
    if(isset($_POST['kirim'])){
        $bendahara=@$_POST['bendahara'];
        $pekerja=@$_POST['pekerja'];
        $jenis=@$_POST['jenis'];
        $tgl=@$_POST['tgl'];
        $jabatan=@$_POST['jabatan'];
        $pendidikan=@$_POST['pendidikan'];
        $lembur=@$_POST['lembur'];
        $potong=@$_POST['potong'];

        $direk=10000000;
        $manag=7500000;
        $karya=5000000;
        $ob=2500000;

        $sd=250000;
        $smp=500000;
        $sma=1000000;
        $s1=1500000;

        $vakasi=20000 * $lembur;

        echo "<h2>Struck Gaji Pekerja</h2>";

        echo "<table>
        <tr>
            <td colspan=4><hr></hr></td>
        </tr>";
        echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Tanggal :<b><i> $tgl</b></i></td>
        </tr>";
        echo "<tr>
            <td><i><h4>Gaji Pokok</h4></i></td>
            <td></td>
            <td></td>
        </tr>";
        echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>";
        echo "<tr>
            <td>Nama Karyawan</td>
            <td>:</td>
            <td>$pekerja</td>
        </tr>";
        echo "<tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td>$jenis</td>
        </tr>";
        echo "<tr>
            <td>Pendidikan terkahir</td>
            <td>:</td>
            <td>$pendidikan</td>
        </tr>";
        echo "<tr>
            <td>Jabatan</td>
            <td>:</td>
            <td>$jabatan</td>
        </tr>";

        switch ($jabatan) {
            case 'Direktur':
                echo "<tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td>Rp.$direk</td>
                </tr>";
                break;
            case 'Manager':
                echo "<tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td>Rp.$manag</td>
                </tr>";
                break;
            case 'Karyawan':
                echo "<tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td>Rp.$karya</td>
                </tr>";
                break;
            case 'OB':
                echo "<tr>
                    <td>Gaji</td>
                    <td>:</td>
                    <td>Rp.$ob</td>
                </tr>";
                break;
            
            default:
                break; 
        }

        echo "<tr>
                <td><i><h4>Tunjangan</h4></i></td>
                <td></td>
                <td></td>
            </tr>";
            echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>";

        switch ($pendidikan) {
            case 'SD':
                echo "<tr>
                    <td>Tunjangan</td>
                    <td>:</td>
                    <td>Rp.$sd</td>
                </tr>";
                break;
            case 'SMP':
                echo "<tr>
                    <td>Tunjangan</td>
                    <td>:</td>
                    <td>Rp.$smp</td>
                </tr>";
                break;
            case 'SMA':
                echo "<tr>
                    <td>Tunjangan</td>
                    <td>:</td>
                    <td>Rp.$sma</td>
                </tr>";
                break;
            case 'Sarjana':
                echo "<tr>
                    <td>Tunjangan</td>
                    <td>:</td>
                    <td>Rp.$s1</td>
                </tr>";
                break;
            
            default:
                break; 
        }

        echo "<tr>
            <td>Vakasi Lembur</td>
            <td>:</td>
            <td>Rp.$vakasi</td>
        </tr>";
        echo "<tr>
            <td><i><h4>Potongan</h4></i></td>
            <td></td>
            <td></td>
        </tr>";
        echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>";
        echo "<tr>
            <td>Potongan</td>
            <td>:</td>
            <td>Rp.$potong</td>
        </tr>";

        echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
        </tr>";

        switch ($jabatan) {
            case 'Direktur':
                if ($pendidikan == "SD"){
                    $gaji = $direk + $sd + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMP") {
                    $gaji = $direk + $smp + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMA") {
                    $gaji = $direk + $sma + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "Sarjana") {
                    $gaji = $direk + $s1 + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else {
                    echo "Mohon Periksa Kembali";
                }
                break;
            case 'Manager':
                if ($pendidikan == "SD"){
                    $gaji = $manag + $sd + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMP") {
                    $gaji = $manag + $smp + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMA") {
                    $gaji = $manag + $sma + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "Sarjana") {
                    $gaji = $manag + $s1 + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else {
                    echo "Mohon Periksa Kembali";
                }
                break;
            case 'Karyawan':
                if ($pendidikan == "SD"){
                    $gaji = $karya + $sd + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMP") {
                    $gaji = $karya + $smp + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMA") {
                    $gaji = $karya + $sma + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "Sarjana") {
                    $gaji = $karya + $s1 + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else {
                    echo "Mohon Periksa Kembali";
                }
                break;
            case 'OB':
                if ($pendidikan == "SD"){
                    $gaji = $ob + $sd + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMP") {
                    $gaji = $ob + $smp + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "SMA") {
                    $gaji = $ob + $sma + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else if ($pendidikan == "Sarjana") {
                    $gaji = $ob + $s1 + $vakasi - $potong;
                    echo "<tr>
                        <td><i><b>Total Gaji<b><i></td>
                        <td>:</td>
                        <td>Rp.$gaji</td>
                    </tr>";
                } else {
                    echo "Mohon Periksa Kembali";
                }
                break;
            }

        echo "<tr>
            <td></td>
            <td></td>
            <td></td>
            <td>Bendahara : $bendahara</td>
        </tr> 
        </table>";
    }
?>


            <center>
            </div>
        </div>
    </div>




    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js" integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF" crossorigin="anonymous"></script>
    -->
  </body>
</html>