<?php
$email = $_GET['email'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700;900&family=Noto+Sans:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./css/styleTabel.css">
    <link rel="stylesheet" href="./css/styleGender.css">
    <link rel="icon" type="image/png" href="img/Peduli Anak.png" />
    <title>Tabel Laki-laki</title>
</head>
<body>
<div class="overlay overlay-lg">
    <img src="./img/blobwhite.png" alt="">
  </div>
  <nav>
    <div class="container">
      <div class="links">
        <ul>
          <li>
          <a href= "pilih_gender.php? email=<?= $email ?>" class="active">Kembali</a>
          </li>
        </ul>
      </div>

  </nav>
    <br>
    <div class="tabelSatu">
        <center><h3>Tabel Tinggi Badan Ideal Anak Laki-laki</h3></center>
    <center><table border="1" cellpadding="8">
        <tr>
            <th bgcolor="grey" rowspan="1">Usia</th>
            <th bgcolor="yellow" colspan="4">Tinggi Badan</th>
        </tr>
        
        <tr>
            <td>1-2 tahun</td>
            <td colspan ="4" align="center">75,7 cm - 87,8 cm</td>
        </tr>
        <tr>
            <td>2-3 tahun</td>
            <td colspan ="4" align="center">87,8 cm - 96,1 cm</td>
        </tr>
        <tr>
            <td>3-4 tahun</td>
            <td colspan ="4" align="center">96,1 cm - 103,3 cm</td>
        </tr>
        <tr>
            <td>4-5 tahun</td>
            <td colspan ="4" align="center">103,3 cm - 110 cm</td>
        </tr>
    </table> </center>
    </div>
    
    <div class="tabelDua">
        <center><h3>Tabel Berat Badan Ideal Anak Laki-laki</h3></center>
    <center><table border="1" cellpadding="8" >
    <tr>
        <th bgcolor="grey" rowspan="1">Usia</th>
        <th bgcolor="yellow" colspan="4">Berat Badan</th>
    </tr>
    
    <tr>
        <td>1-2 tahun</td>
        <td colspan ="4" align="center">9,6 kg - 14,3 kg</td>
    </tr>
    <tr>
        <td>2-3 tahun</td>
        <td colspan ="4" align="center">12,2 kg - 14,3 kg</td>
    </tr>
    <tr>
        <td>3-4 tahun</td>
        <td colspan ="4" align="center">14,3 kg - 16,3 kg</td>
    </tr>
    <tr>
        <td>4-5 tahun</td>
        <td colspan ="4" align="center">16,3 kg - 18,3 kg</td>
    </tr>
</table> </center>
    </div>
</body>
</html>