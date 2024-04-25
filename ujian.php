<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title>DATA SISWA</title>
</head>
</head>
<body>

    <div class="container">
    <h1>MASUKAN DATA SISWA</h1>
    <form action="?aksi=tambah" method="post">
    <label for="nama">NAMA :</label>
    <input type="text" id="nama" name="nama" required><br></br>
    <label for="nama">NIS :</label>
    <input type="number" id="nis" name="nis" required><br></br>
    <label for="rayon">RAYON :</label>
    <input type="text" id="rayon" name="rayon" required><br></br>
    <button type="submit" name="kirim" value="kirim" ><i class='bx bx-plus-medical'>  SUBMIT</i></button>
    <button type="submit" name="kirim" value="kirim" ><i class='bx bxs-printer'><a href="sess2.php"></i>  CETAK</a> </button>
    <button type= "submit" value="cetak"><a href= 'sess2.php'><a href = destroy>HAPUS DATA</a></button>
    </form>

<?php
session_start();

if (!isset($_SESSION['dataSiswa'])) {
    $_SESSION['dataSiswa'] = array();
}

if (isset($_GET['aksi'])) {
    if ($_GET['aksi'] === 'tambah' && isset($_POST['nama'], $_POST['nis'], $_POST['rayon'])) {
        $data = array(
            'nama' => $_POST['nama'],
            'nis' => $_POST['nis'],
            'rayon' => $_POST['rayon']
        );
        array_push($_SESSION['dataSiswa'], $data);
    } elseif ($_GET['aksi'] === 'hapus' && isset($_GET['index'])) {
        $index = $_GET['index'];
        if (isset($_SESSION['dataSiswa'][$index])) {
            unset($_SESSION['dataSiswa'][$index]);
        }
    }if(isset($_POST['reset'])){
        session_destroy();
        header('http://localhost:8089/datasiswa/sess1.php');
        exit;
    }
}

echo '<table border="1">';
echo '<tr>';
echo '<th>NAMA</th>';
echo '<th>NIS</th>';
echo '<th>RAYON</th>';
echo '<th>AKSI</th>';
echo '</tr>';

foreach ($_SESSION['dataSiswa'] as $key => $value) {
    echo '<tr>';
    echo '<td>' . $value['nama'] . '</td>';
    echo '<td>' . $value['nis'] . '</td>';
    echo '<td>' . $value['rayon'] . '</td>';
    echo '<td><a href="?aksi=hapus&index='.$key.'" class="btn btn-danger btn-sm">Hapus</a></td>';
    echo '</tr>';
}

echo '</table>';
?>
</div>  
</body>

    <style>

        body {
            font-family: Arial, sans-serif;
            margin: 50px;
            padding: 20px;
            text-align: center;
            background-image: url("aset/Wallpaper.png");
            background-size: cover;
            background-repeat: no-repeat;
        }



        .container{
            background: transparent;
            backdrop-filter: blur(5px);
            border: 1.5px solid rgba(255,255,255,0.1);
            margin: 5rem;
            padding: 5rem;
            margin-top: 10px;
            border-radius: 15px;
            
        }
        form {
            padding: 20px;
        text-align: center;
        border-radius: 50px 10 50px 10;
        margin-bottom: 20px; 
        }
        label {
            display: inline-block;
            width: 100px;
            
          color:white;
            margin-bottom: 10px;
        }
        input[type="text"],
        input[type="number"] {
            background:transparent;
          border-top:0;
          border-right:0;
          border-left:0;
          border-color:white;
          color:white;
        }
        button[type="submit"],
        button[type="button"] {
            padding: 8px 15px;
            background-color: white;
            border:transparent;
            

            border-radius: 10px 0 10px 0;
            cursor: pointer;
            margin:3px 8px;
            transition:2s;

            
        }

        a{
            text-decoration: none;


        }
        button[type="submit"]:hover,
        button[type="button"]:hover {
            background-color: green;
            transition:2s;
        }
        table {
            border-collapse: collapse;
            width: 100%;
        }
        h1{
            color: #fff;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            color: white;
        }
        tr {
\
\            background: transparent;

        }
        a.btn-danger {
            color: #fff;
            background-color: #dc3545;
            border-color: #dc3545;
            padding: 5px 10px;
            border-radius: 3px;
            text-decoration: none;
        }
        a.btn-danger:hover {
            background-color: #c82333;
            border-color: #bd2130;
        }
    </style>
</html>