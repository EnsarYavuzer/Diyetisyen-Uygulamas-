<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Diyetisyen Ekle </title>
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
                    <h2 class="mt-5">Hastalık Ekle</h2>
                      <p>Hastalık adını giriniz giriniz</p>
                    <form action="http://localhost/mvc/index/hastalikEkle" method="post">
                        <div class="form-group">
                            <label>Hastalık Adı</label>
                            <input type="text" name="hastalik_adi" ></input>
                        </div>
                         <input type="submit" class="btn btn-primary" value="Kaydet">
                        <a href="<?php echo SITE_URL; ?>/Panel/home" class="btn btn-secondary ml-2">Ana Sayfa</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>