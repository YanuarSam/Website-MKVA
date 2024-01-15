<?php
date_default_timezone_set("Asia/Bangkok");
?> 
<DOCTYPE HTML>
    <html lang="en" dir="ltr">
        <head>
            <meta charset="utf-8">
            <title>Purchase Form</title>
        </head>
        <body>
            <form class="" action="Purchase.php" method="post"></form>
            <label for="">Nama</label>
            <input type="text" name="Nama" autocomplete = "off"> <br>
            <label for="">Umur</label>
            <input type="text" name="Umur" autocomplete = "off"> <br>
            <label for="">Email</label>
            <input type="email" name="Email" autocomplete = "off"> <br>
            <label for="">Jenis Kelamin</label>
            <input type="radio" name="Jenis_Kelamin" value="Pria">Pria
            <input type="radio" name="Jenis_Kelamin" value="Wanita">Wanita
            <label for="">Agama</label>
            <select class="" name="Agama">
            <option value="Islam">Islam</option>
            <option value="Islam">Kristen</option>
            <option value="Islam">Buddha</option>
            <option value="Islam">Hindu</option>
            <option value="Islam">Konghucu</option>
            </select> <br>
            <label for="">Komentar</label>
            <textarea name="komentar" cols="80" rows="8"></textarea> <br>
            <button type="submit" name="Submit" value = <?php echo date("h:i:sa"); ?> >Submit</button>
            </form>  
        </body>
</html>