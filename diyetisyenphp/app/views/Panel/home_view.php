<html>
    <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
        <style>
            ul,
            ol {
              margin: 0.75em 0;
              padding: 0 1em;
              list-style: none;
            }
            ul li::before {
              content: "";
              border-color: transparent #111;
              border-style: solid;
              border-width: 0.35em 0 0.35em 0.45em;
              display: block;
              height: 0;
              width: 0;
              left: -1em;
              top: 0.9em;
              position: relative;
            }

            ol li::marker {
              content: "▶";
            }
                 * {
                  box-sizing: border-box;
                }

                body {
                  margin: 0;
                }

                /* Style the header */
                .header {
                  background-color: #f1f1f1;
                  padding: 20px;
                  text-align: center;
                }

                /* Style the top navigation bar */
                .topnav {
                  overflow: hidden;
                  background-color: #333;
                }

                /* Style the topnav links */
                .topnav a {
                  float: left;
                  display: block;
                  color: #f2f2f2;
                  text-align: center;
                  padding: 14px 16px;
                  text-decoration: none;
                }

                /* Change color on hover */
                .topnav a:hover {
                  background-color: #ddd;
                  color: black;
                }

                /* Create three equal columns that floats next to each other */
                .column {
                  float: left;
                  width: 33.33%;
                  padding: 15px;
                }

                /* Clear floats after the columns */
                .row:after {
                  content: "";
                  display: table;
                  clear: both;
                }

                /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
                @media screen and (max-width:600px) {
                  .column {
                    width: 100%;
                  }
                }

            
        </style>
</head>
<body>
    <div class="header">
    <div class="mt-5 mb-3 clearfix">
       <a href="<?php echo SITE_URL;?>/admin/logout" class="btn btn-success pull-right"> ÇIKIŞ</a>
     </div>
      <h1>Hoş geldiniz</h1>
      Kullanıcı Adı:  <?php echo $homepage["username"];?><br>
      Yetkisi:<?php echo $homepage["userrol"];?>    
  
    </div>



<div class="row">
  <div class="column">
  </div>
  
  <div class="column">
      <div>
        <ul>
            <li><a href="<?php echo SITE_URL;?>/index/kullaniciListele">Kullanıcı Listele</a></li>
            <li><a href="<?php echo SITE_URL;?>/index/dEkle">Diyetisyen Ekle</a></li>
            <li><a href="<?php echo SITE_URL;?>/index/hasEkle">Hasta Ekle</a></li>
            <li><a href="<?php echo SITE_URL;?>/index/hEkle">Hastalık Ekle</a></li>
            <li><a href="<?php echo SITE_URL;?>/index/hastalikListele">Hastalık Listele</a></li>
            <li><a href="<?php echo SITE_URL;?>/index/diyeEkle">Diyet Ekle</a></li>
            <li><a href="<?php echo SITE_URL;?>/index/diyetAta">Diyet Ata</a></li>
            <li><a href="<?php echo SITE_URL;?>/index/diyetRapor">Rapor Al</a></li>
            <li><a href="<?php echo SITE_URL;?>/admin/logout">Logout</a></li>
        </ul>
    </div>
  </div>
  
  <div class="column">
  </div>
</div>
    
   
    
</body>
</html>

