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
                    <h2 class="mt-5">Diyetisyen Ekle</h2>
                      <p>Kullanıcı bilgilerini giriniz</p>
                    <form action="http://localhost/mvc/index/diyetisyenEkle" method="post">
                        <div class="form-group">
                            <label>Kullanıcı Adı</label>
                            <input type="text" name="kullanici_adi" ></input>
                        </div>
                        <div class="form-group">
                            <label>Şifre</label>
                           <input type="password" name="sifre" required />
                          
                        </div>
                        <div class="form-group">
                            <label>Rol</label>
                           <select name="rol">
                                <option value="Diyetisyen">Diyetisyen</option>
                                <option value="Admin">Admin</option>
                            </select>
                        </div>
                        <input type="submit" class="btn btn-primary" value="Kaydol">
                        <a href="<?php echo SITE_URL;?>/Panel/home" class="btn btn-secondary ml-2">Ana Sayfa</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>
