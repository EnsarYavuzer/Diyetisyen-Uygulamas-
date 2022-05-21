<html>
    <head>
        <style>
            h1 {text-align: center;}
            p {text-align: center;}
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

                /* Create three unequal columns that floats next to each other */
                .column {
                  float: left;
                  padding: 10px;
                }

                /* Left and right column */
                .column.side {
                  width: 25%;
                }

                /* Middle column */
                .column.middle {
                  width: 100%;
                }

                /* Clear floats after the columns */
                .row:after {
                  content: "";
                  display: table;
                  clear: both;
                }

                /* Responsive layout - makes the three columns stack on top of each other instead of next to each other */
                @media screen and (max-width: 600px) {
                  .column.side, .column.middle {
                    width: 100%;
                  }
                }

                /* Style the footer */
                .footer {
                  background-color: #f1f1f1;
                  padding: 10px;
                  text-align: center;
                }
    </style> 
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <title>Ana sayfa </title>
     <meta charset="UTF-8">
</head>
<body>
    
    <div class="header">
        <h1>Diyetisyen Otomasyon Sitemi </h1>
        <p style="color:Tomato;" >Hoş geldiniz<br></p>
    </div>
  
    <div class="column middle">
        <p><a href="<?php echo SITE_URL; ?>/Admin/login" class="btn btn-success pull-center" > Giriş yap</a></p>
        
   </div>

    
</body>
</html>


