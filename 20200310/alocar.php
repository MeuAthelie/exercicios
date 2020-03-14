<?php
    session_start();
    include "cabecalho.php";
    include "classAves.php";
    include "classMamiferos.php";
    include "classAnfibios.php";
    include "classPeixes.php";
    
    
    switch($_POST["det"]){
        case 1:
    $av = new Aves($_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Max_voo"]);
    $_SESSION["Aves"][] = $av;
    echo"<input type=\"hidden\" name=\"A\" value=\"1\" required/>
    <h1>Ave Catalogada</h1>";
    break;
        case 2:
    $ma = new Mamifero($_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Max_vel"]);
    $_SESSION["Mamifero"][] = $ma;
    echo"<input type=\"hidden\" name=\"M\" value=\"2\" required/>
    <h1>Mamifero Catalogado</h1>";
    break;
        case 3:
    $an = new anfi_rept($_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Max_Sub"]);
    $_SESSION["anfi_rept"][] = $an;
    echo"<input type=\"hidden\" name=\"R\" value=\"3\" required/>
    <h1>Anfibio/Reptil Catalogado</h1>";
    break;
    case 4:
    $pe = new peixe($_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Temperatura_media"]);
    $_SESSION["peixe"][] = $pe;
    echo"<input type=\"hidden\" name=\"P\" value=\"4\" required/>
    <h1>Peixe Catalogado</h1>";
    break;
    default:
    echo"<h1>DEU RUIM<h1>";
}
  
    
    
    
    
   
?>