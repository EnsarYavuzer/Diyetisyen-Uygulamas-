<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Hasta Ekle </title>
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
                    <h2 class="mt-5">Hasta Ekle</h2>
                      <p>Hasta bilgilerini giriniz</p>
                    <form action="http://localhost/mvc/index/hastaEkle" method="post">
                        <div class="form-group">
                            <label>Adı <input type="text" name="adi"/></label>
                            
                     </div>
                           <div class="form-group">
                            <label>Soyadı<input type="text" name="soyadi" />   </label>
                                       
                           </div>
                         <div class="form-group">
                            <label>TC numarası<input type="text" name="kimlik" />   </label>
                         </div>
                        
                        
                        <div class="form-group">
                            <label>
                            Dogum Tarihi:
                              <input type="date" name="dtarih">
                            </label>
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
