<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 2</title>
</head>
<body>
<form name="form1" method="post" action="procesaindiceif.php">
      <table width="145" height="82">
        <tr>
          <td colspan="2" scope="col"><div align="center" class="Estilo2"><strong>&Iacute;ndice de Masa Corporal </strong></div></td>
        </tr>
        <tr>
          <td colspan="2" scope="col"><div align="justify"><span class="Estilo8">Ingrese los datos requeridos y oprima calcular. </span></div></td>
        </tr>
        <tr>
          <td width="53" scope="col">Peso</td>
          <td width="126" scope="col"><input name="peso" type="text" id="peso" size="8" maxlength="3">
            <span class="Estilo9">En k </span></td>
        </tr>
        <tr>
          <td>Altura</td>
          <td><input name="altura" type="text" id="altura" size="8" maxlength="4">
            <span class="Estilo9">        en m y decimal en cm. ej: 1.74 </span></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="Submit" value="Calcular"></td>
        </tr>
      </table>
    </form>  

    <?php

$altura = $HTTP_POST_VARS ["altura"];
$peso = $HTTP_POST_VARS ["peso"];
echo "SU PESO ES:";
echo $HTTP_POST_VARS ["peso"];
echo "Kg."."<br>";
echo "Su &iacute;ndice de Masa Corporal es: ";
$indice = $peso / ($altura * $altura); //operaci&oacute;n entre par&eacute;ntesis se ejecuta 1&ordm;
echo $indice;
echo "<br>";
if($indice<=17){
echo "su indice es: de infrapeso";
}
elseif(($indice>17)and($indice<=18)){
echo "su indice es: de bajo peso";
}
elseif(($indice>18)and($indice<=25)){
  echo "su indice es: de peso normal -saludable-"; 
  }
  elseif(($indice>25)and($indice<=30)){
  echo "su indice es: de sobrepeso -obesidad de grado I-"; 
  }
   elseif(($indice>30)and($indice<=35)){
  echo "su indice es de sobrepeso cr&oacute;nico -obesidad de grado II-"; 
  }
     elseif(($indice>35)and($indice<=40)){
  echo "su indice es: de sobrepeso cr&oacute;nico -obesidad de grado III-"; 
  }
     elseif($indice>40){
  echo "su indice es: de obesidad m&oacute;rbida -obesidad de grado IV-"; 
  }
 else {
 echo "repita la operacion nuevamente cargando los valores correspondientes";
 }

?>


</body>
</html>