<?php
    session_start();
    include "classAves.php";
    include "classMamiferos.php";
    include "classAnfibios.php";
    include "classPeixes.php";

    $av = new Aves($_POST["classe"]$_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Max_voo"]);
    $ma = new Mamifero($_POST["classe"]$_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Max_vel"]);
    $an = new anfi_rept($_POST["classe"]$_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Max_Sub"]);
    $pe = new peixe($_POST["classe"]$_POST["peso"],$_POST["altura"],$_POST["comprimento"],$_POST["cor"],$_POST["especie"],$_POST["Temperatura_media"]);

    $_SESSION["Aves"][] = $av;
    $_SESSION["Mamifero"][] = $ma;
    $_SESSION["anfi_rept"][] = $an;
    $_SESSION["peixe"][] = $pe;
?>