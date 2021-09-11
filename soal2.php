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
                <b>Form Memasuki MALL</b>
            </center>
        </div>
        <div class="card-body">
        <form>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nama</label>
                <div class="col-sm-10">
                    <input type="text" name="nama" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Usia</label>
                <div class="col-sm-10">
                    <input type="number" name="umur" class="form-control" id="staticEmail">
                </div>
            </div>
            <div class="form-group row">
                <label for="staticEmail" class="col-sm-2 col-form-label">Vaksin</label>
                <div class="col-sm-10">
                    <div class="form-group">
                        <select name="vaksin" value="vaksin" class="form-control" id="exampleFormControlSelect1">
                        <option value="TIDAK ADA"></option>
                        <option value="Sudah"> Sudah Vaksin </option>
                        <option value="Belum">Belum Vaksin</option>
                        </select>
                    </div>
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
        $nama=@$_POST['nama'];
        $umur=@$_POST['umur'];
        $vaksin=@$_POST['vaksin'];

        echo "<center><table> <tr> <td>Nama </td>
        <td> : </td> 
        <td>$nama</td>
        </tr>";
        if ($umur >= 12 && $umur <= 50) {
            if ($vaksin == "Sudah") {
                echo "<tr> <td>Umur </td>
                    <td> : </td> 
                    <td>$umur</td>
                    </tr> 
                    <tr> <td>Status Vaksin </td>
                    <td> : </td> 
                    <td>$vaksin</td>
                    </tr> </table>";
                echo "<b><i>Anda memenuhi syarat memasuki MALL</i></b></center>";
            } else {
                echo "<tr> <td>Umur </td>
                    <td> : </td> 
                    <td>$umur</td>
                    </tr> 
                    <tr> <td>Status Vaksin </td>
                    <td> : </td> 
                    <td>$vaksin</td>
                    </tr> </table>";
                echo "<b><i>Anda tidak memenuhi syarat memasuki MALL</i></b> <br>
                <a href=//https//pedulilindungi.id//> Silahkan Daftar Vaksin </a> </center>";
            }
        } else {
            echo "<tr> <td>Umur </td>
                    <td> : </td> 
                    <td>$umur</td>
                    </tr> 
                    <tr> <td>Status Vaksin </td>
                    <td> : </td> 
                    <td>$vaksin</td>
                    </tr> </table>";
                echo "<b><i>Anda tidak memenuhi syarat memasuki MALL</i></b> <br>
                <a href=//https//pedulilindungi.id//> Silahkan Daftar Vaksin </a> </center>";
        }
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