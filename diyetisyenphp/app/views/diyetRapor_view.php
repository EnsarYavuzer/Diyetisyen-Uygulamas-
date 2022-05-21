<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Rapor Sayfası</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <style>
        .wrapper{
            width: 600px;
            margin: 0 auto;
        }
        table tr td:last-child{
            width: 120px;
        }
    </style>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</head>
<body>
    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="mt-5 mb-3 clearfix">
                        <h2 class="pull-left">Rapor Sayfası</h2>
                        <a href="http://localhost/mvc/Panel/home" class="btn btn-success pull-right"> Ana Sayfa</a>
                    </div>
                    <?php
                    
                  
       
         function build_table($array){
            // start table
        $html = '<table class="table table-bordered table-striped">';
        echo "<thead>";
                                
        // header row
        $html .= '<tr>';
        foreach($array[0] as $key=>$value){
            $html .= '<th>' . htmlspecialchars($key) . '</th>';
        }
        $html .= '</tr>';
        echo "</thead>";
        
    // data rows
         echo "<tbody>";
        
        foreach( $array as $key=>$value){
            $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
            
        }
        $html .= '</tr>';
    }

    // finish table and return it
    echo "</tbody>";                            
            
    $html .= '</table>';
    return $html;
}
 echo build_table($hastaListele);
 
 echo build_table($diyetListele);
 

?>
                </div>
            </div>        
        </div>
    </div>
</body>
</html>






