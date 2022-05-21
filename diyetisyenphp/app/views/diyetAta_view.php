<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kayıt Ekle</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mt-5">Hastaya Diyet Yaz</h2>
                    <form action="<?php echo SITE_URL; ?>/index/diyetRapor" method="post">
                        <div class="form-group">
                            <select name="diyet">
                                <option   selected="selected">Bir Diyet Seçiniz</option>
                                <?php
                                
                                // Iterating through the product array
                                foreach($diyetListele as $item){
                                    echo "<option value='".strtolower($item["Id"])."'>".$item["diyet"]."</option>";
                                }
                                ?>  
                            </select>  
                        </div>
                        <div class="form-group">
                          <select name="hasta">
                             <option  selected="selected">Bir hasta seçiniz</option>
                             <?php
                             // A sample product array
                           
                             // Iterating through the product array
                             foreach($hastaListele as $item){
                                 echo "<option value='".strtolower($item["Id"])."'>".$item["ad"]."</option>";
                             }
                             ?>
                         </select>  
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Diyet Ata">
                        <a href="<?php echo SITE_URL; ?>/Panel/home" class="btn btn-secondary ml-2">Ana sayfa</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
