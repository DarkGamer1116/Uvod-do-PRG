<?PHP

    $renatPancisin1 = 1;
    $renatPancisin2 = 2;

if ($renatPancisin1 < $renatPancisin2) {

 echo "Renat Pancisin";}

echo "<br>";

if ($renatPancisin1 < $renatPancisin2) {
     echo "Renat"; }
        else {
     echo "Pancisin";}
echo "<br>";

if ($renatPancisin1 < 4) {

     if (3 > $renatPancisin2) {
     echo "Pancisin";}
        } else {
     echo "Renat";}
echo "<br>";


switch ($renatPancisin1) {
     case 1:
     echo "1";
     break;

     case 2:
     echo "2";
     break;

     case 3:
     echo "3";
     break;

     case 4:
     echo "4";
     break;

     case 5:
     echo "5";
     break;

     case 6:
     echo "6";
     break;

     default:
     echo "false";}
echo "<br>";

$houby["Bedla"]["Liška"]["Křemenáč"]["Holubinka"]["Hlíva"]["Míhavka"]["hřib"]["Smrdutka"]["Muchomůrka"]["Ryzec"] = "Houby";
echo "<br>";

$obchod = array(
    "obleceni" => array (
            "triko" => array(
                    'typ' => 'dlouhyRukav',
                    'material' => 'bavlna',
                    'velikost' => 'GIGABYTE',
                    'barva' => 'blue',
                    'pohlavi' => 'male',),
        
            "triko" => array(
                    'typ' => 'dlouhyRukav',
                    'material' => 'polyester',
                    'velikost' => 'GIGABYTE',
                    'barva' => 'orange',
                    'pohlavi' => 'male',),
        
            "triko" => array(
                    'typ' => 'kratkyRukav',
                    'material' => 'bavlna',
                    'velikost' => 'XL,XXL,XXXL,4XL',
                    'barva' => 'pink',
                    'pohlavi' => 'felame',),
        
            "triko" => array(
                    'typ' => 'kratkyRukav',
                    'material' => 'bavlna',
                    'velikost' => 'S,M,L,XL,XXL',
                    'barva' => 'green',
                    'pohlavi' => 'male',),
        
            "kalhoty" => array(
                    'typ' => 'spolecenske',
                    'material' => 'bavlna',
                    'velikost' => 'S,M,L,XL,XXL',
                    'barva' => 'green',
                    'pohlavi' => 'male',),
        
            "kalhoty" => array(
                    'typ' => 'teplakove',
                    'material' => 'bavlna',
                    'velikost' => 'S,M,L,XL,XXL',
                    'barva' => 'white',
                    'pohlavi' => 'unisex',),
        
            "kalhoty" => array(
                    'typ' => 'dzinove',
                    'material' => 'bavlna',
                    'velikost' => 'S,M,L,XL,XXL',
                    'barva' => 'black',
                    'pohlavi' => 'female',),
        
            "kalhoty" => array(
                    'typ' => 'společenské',
                    'material' => 'bavlna',
                    'velikost' => 'S,M,L,XL,XXL',
                    'barva' => 'black',
                    'pohlavi' => 'male',),
        
            "čepice" => array(
                    'typ' => 'kratkyRukav',
                    'material' => 'bavlna',
                    'velikost' => 'S,M,L,XL,XXL',
                    'barva' => 'green',
                    'pohlavi' => 'male',),
        
            "čepice" => array(
                    'typ' => 'kratkyRukav',
                    'material' => 'bavlna',
                    'velikost' => 'S,M,L,XL,XXL',
                    'barva' => 'green',
                    'pohlavi' => 'male',),
    )
)
?>