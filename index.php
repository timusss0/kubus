 <!DOCTYPE html>
 <html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
 </head>
 <body>
    <form action="index.php" method="post">
        <label for="txtSisi"> Sisi : </label>
        <input type="text" name="valueSisi" id="txtSisi">
        <br>
        <input type="submit" value="Hitung Volume Kubus">
    </form>
    <?php 
       if (!empty($_POST['valueSisi'])){
        $nilaiSisi = $_POST['valueSisi'];
        $hasil = $nilaiSisi * $nilaiSisi * $nilaiSisi ;
        echo "Hasilnya adalah : $hasil";
       }
       ?>
 </body>
 </html>