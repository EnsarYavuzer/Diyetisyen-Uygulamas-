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
                    <h2 class="mt-5">Login</h2>
                    <form action="<?php echo SITE_URL; ?>/Admin/runLogin" method="post">
                        <div class="form-group">
                            <label>Kullanıcı Adı<input type="text" name="kullanici_adi"/></label>
                            
                        </div>
                        <div class="form-group">
                            <label>Şifre       <input type="password" name="sifre"/></label>
                            
                        </div>
                        
                        <input type="submit" class="btn btn-primary" value="Giriş">
                        <a href="<?php echo SITE_URL; ?>" class="btn btn-secondary ml-2">Ana sayfa</a>
                    </form>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>

