<html>
    <head>
        <title>Problema</title>
</head>
<body>
    <?php
    $dato=date("L");
    if ($dato==1){
    echo"Año bisiesto";
    }else{
echo"Año no bisiesto";
echo"<br>";}
echo"Dia de la semana";
$dato=date("w");

switch($dato){
    case 0 : echo "Domingo" ; break;
    case 1 : echo "Lunes" ; break;
    case 2 : echo "Martes" ; break;
    case 3 : echo "Miercoles" ; break;
    case 4 : echo "Jueves" ; break;
    case 5 : echo "Viernes" ; break;
    case 6 : echo "Sabado" ; break;
}
?>
</body>
</html>
