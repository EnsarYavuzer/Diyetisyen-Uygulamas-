<html>
    <head>
    <title>Ana sayfa </title>
     <meta charset="UTF-8">
</head>
<body>
    <h1>Kullanıcı Listesi</h1>
    <ul>
        
        <?php

       
       foreach ($hastalikListele as $kullanicilar){
           echo "<li>".$kullanicilar['hastalik']."</li>";
            echo '<hr>';
        }
   
        ?>
    </ul>
    
</body>
</html>