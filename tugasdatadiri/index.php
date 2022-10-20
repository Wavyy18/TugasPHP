<?php

$indentitas=["id"=>"1","npm"=>"720520017","Nama"=>"Aji","Tempat Tanggal Lahir"=>"Sumenep, 18 september 2002","Jurusan"=>"Teknik Informatika","alamat"=>"KALIANGET"];



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data Diri Mahasiswa Informatika</h1>
    <table border="5" cellspacing="1" cellpadding="5">
<tr>
    <th>No. Urut</th>
    <th>Npm</th>
    <th>Nama</th>
    <th>Tempat Tanggal Lahir</th>
    <th>Jurusan</th>
    <th>Alamat</th>
</tr>
<tr>
    
<?php foreach($indentitas as  $mhs => $value) :  ?>
        <td><?= $value;?></td>
    <?php endforeach; ?>
  
</tr>

    </table>
</body>
</html>