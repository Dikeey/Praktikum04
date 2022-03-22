<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Daftar Mahasiswa</title>
</head>
<body>

    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Daftar Mahasiswa</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Kelas Mahasiswa
                    </a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Data Mahasiswa
                    </a>
                </li>

                <li>
                    <ul>
                            <nav class="navbar navbar-light bg-dark">
                            <div class="container-fluid">
                            <form class="d-flex">
                                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                                <button class="btn btn-outline-success" type="submit">Search</button>
                            </form>
                            </div>
                                </nav>
                    </ul>
                </li>
            </div>
        </div>
    </nav>

<br>
<br>

<?php
require_once 'class_mahasiswa.php';

    $mahasiswa1 = new Mahasiswa ("1211", "Diki Darmawan");
    $mahasiswa1->prodi = "SI";
    $mahasiswa1->thn_angkatan=2022;
    $mahasiswa1->ipk=3.8;

    $mahasiswa2 = new Mahasiswa ("1215", "Margi Salsabila");
    $mahasiswa2->prodi = "SI";
    $mahasiswa2->thn_angkatan=2022;
    $mahasiswa2->ipk=3.7;

    $mahasiswa3 = new Mahasiswa ("1209", "M. Rahul Sayyid");
    $mahasiswa3->prodi = "SI";
    $mahasiswa3->thn_angkatan=2022;
    $mahasiswa3->ipk=3.20;

    $mahasiswa4 = new Mahasiswa ("1214", "Siti Sa'ada Tulfitri");
    $mahasiswa4->prodi = "SI";
    $mahasiswa4->thn_angkatan=2022;
    $mahasiswa4->ipk=4.00;

    $array_mhs = [$mahasiswa1,$mahasiswa2,$mahasiswa3,$mahasiswa4];

?>

<div class="container">
    <div class="align-items-center" style="padding: 60px">
    <table id="example" class="display" style="border: 1px solid black;"  >
        <thead>
            <tr class="bg-primary">
                <th>No</th>
                <th>NIM</th>
                <th>Nama Lengkap</th>
                <th>Prodi</th>
                <th>Angkatan</th>
                <th>IPK</th>
                <th>Predikat</th>
            </tr>
        </thead>

        <tbody>
            <?php
            $counter = 1;
            foreach ($array_mhs as $mahasiswa) {
                echo '<tr><td>'.$counter.'</td>'.
                '<td>'.$mahasiswa->nim.'</td>'.
                '<td>'.$mahasiswa->nama.'</td>'.
                '<td>'.$mahasiswa->prodi.'</td>'.
                '<td>'.$mahasiswa->thn_angkatan.'</td>'.
                '<td>'.$mahasiswa->ipk.'</td>'.
                '<td>'.$mahasiswa->predikat_ipk().'</td>'.
                '<td><span class="glyphicon glyphicon-eye-open" aria-hidden="true" style="padding-right:15%; color:#158CBA;"></span><span class="glyphicon glyphicon-pencil" aria-hidden="true" style="color:#158CBA;"></span></td>';
                $counter++;
            }
            ?>
        </tbody>
    </table>
    </div>
</div>

<footer class=" bg-light text-muted fixed-bottom">
  <div class="text-center p-2" style="background-color: rgba(0, 0, 0, 0.05);">
    <div>
      <p><b>Diki Darmawan </b>| <b>STT-NF 2022 </b></p>
    </div>
  </div>
</footer>

</body>
</html>