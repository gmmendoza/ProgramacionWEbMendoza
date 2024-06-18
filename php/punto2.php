<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Numero Primo</title>
</head>
<body>
    <?php 
    $nummin = 1;
    $nummax = 1000;

    for ($i=$nummin; $i<=$nummax; $i++){
        getfunt_primo($i);
    }
    public function getfunt_primo($i){
        $cont = 0;
        for( $i= 1; $i<$numero; $i++){
            if($numero%$i==0){
                $cont=$cont +1 ;
             }
        }

    }
    if ($cont==2){
        return true;
    }
    ?>
</body>
</html>