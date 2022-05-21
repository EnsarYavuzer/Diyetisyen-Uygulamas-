<html>
    <head>
    <title>Ana sayfa </title>
     <meta charset="UTF-8">
</head>
<body>
    <h2>Kullanıcı Listesi</h2>
        <?php
       
         function build_table($array){
            // start table
        $html = '<table>';
        // header row
        $html .= '<tr>';
        foreach($array[0] as $key=>$value){
                $html .= '<th>' . htmlspecialchars($key) . '</th>';
             }
        $html .= '</tr>';

    // data rows
    foreach( $array as $key=>$value){
        $html .= '<tr>';
        foreach($value as $key2=>$value2){
            $html .= '<td>' . htmlspecialchars($value2) . '</td>';
        }
        $html .= '</tr>';
    }

    // finish table and return it

    $html .= '</table>';
    return $html;
}
        
        
      
       echo build_table($kullaniciListele);
       
     //    echo '<pre>'; 
//       print_r($data); echo '</pre>';
 
        ?>
    </ul>
    
</body>
</html>

