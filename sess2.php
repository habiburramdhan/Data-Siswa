<html>
<body>
    <h2>data siswa</h2>
    <form action="" method="post">
    <button type= "submit" value="cetak"><a href= 'ujian.php'>Kembali</a></button>
    <?php

    session_start();

    echo '<table border="1">';
    echo '<tr>';
    echo '<th>Nama</th>';
    echo '<th>Nis</th>';
    echo '<th>Rayon</th>';
    echo'</tr>';

        foreach($_SESSION['dataSiswa'] as $index => $value){
            echo '<tr>';
            echo '<td>'. $value['nama'] .'</td>';
            echo '<td>'. $value['nis'] .'</td>';
            echo '<td>'. $value['rayon'] .'</td>';
            // echo '<td><a href="?hapus='.$index.'">Hapus</a></td>';
            echo '</tr>';
    }
        echo '<table/>';

    ?>
<style>
/* Menambahkan font Google */
@import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

/* Mengatur font dasar dan warna latar belakang */
body {
  font-family: 'Roboto', sans-serif;
  background-color: #f4f4f4;
  margin: 0;
  padding: 20px;
}

/* Mengatur gaya untuk header */
h1 {
  color: #333;
  text-align: center;
}

/* Mengatur gaya form */
form {
  max-width: 600px;
  margin: 20px auto;
}

/* Mengatur gaya input dan button */
input[type="text"], input[type="number"], button {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 4px;
}

button {
  background-color: #5cb85c;
  color: white;
  border: none;
  cursor: pointer;
}

button:hover {
  background-color: #4cae4c;
}

/* Mengatur gaya tabel */
table {
  width: 100%;
  border-collapse: collapse;
  margin-top: 20px;
}

th, td {
  text-align: left;
  padding: 12px;
  border-bottom: 1px solid #ddd;
}

th {
  background-color: grey;
  color: white;
}

tr:nth-child(even) {
  background-color: #f2f2f2;
}

tr:hover {
  background-color: #ddd;
}

/* Mengatur gaya link hapus */
a {
  color: #d9534f;
  text-decoration: none;
}

a:hover {
  text-decoration: underline;
}

/* Mengatur gaya footer tabel */
tfoot th {
  text-align: right;
}




</style>

</body>
</html>