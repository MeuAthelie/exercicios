<?php
include "classAves.php";
include "classMamiferos.php";
include "classAnfibios.php";
include "classPeixes.php";
    echo "<h2>Lista de animais catalogados:</h2>";

   
   foreach ($_POST["A"]){ 
        echo "  <p>Cor: <span style='Peso:".$av->get_peso()."'>".$av->get_peso()."</span></p>
                <p>Comprimento:" .$av->get_comprimento()."</br>
                <p>Altura: ".$av->get_altura()."</br>
                <p>Cor: ".$av->get_cor()."
                <p>Especie: ".$av->get_especie()."
                <p>Altura Maxima de Voo: ".$av->get_Max_voo()."
                <hr/>";
   }
   foreach ($_POST["M"]){
        echo "  <p>Cor: <span style='Peso:".$ma->get_peso()."'>".$ma->get_peso()."</span></p>
                <p>Comprimento:" .$ma->get_comprimento()."</br>
                <p>Altura: ".$ma->get_altura()."</br>
                <p>Cor: ".$ma->get_cor()."
                <p>Especie: ".$ma->get_especie()."
                <p>Velocidade Maxima: ".$ma->get_Max_vel()."
                <hr/>";
   }
   foreach ($_POST["R"]){
        echo "  <p>Cor: <span style='Peso:".$an->get_peso()."'>".$an->get_peso()."</span></p>
                <p>Comprimento:" .$an->get_comprimento()."</br>
                <p>Altura: ".$an->get_altura()."</br>
                <p>Cor: ".$an->get_cor()."
                <p>Especie: ".$an->get_especie()."
                <p>:Tempo máximo submerso em água ".$an->get_Max_Sub()."
                <hr/>";
    }
    foreach ($_POST["P"]){
        echo "  <p>Cor: <span style='Peso:".$pe->get_peso()."'>".$pe->get_peso()."</span></p>
                <p>Comprimento:" .$pe->get_comprimento()."</br>
                <p>Altura: ".$pe->get_altura()."</br>
                <p>Cor: ".$pe->get_cor()."
                <p>Especie: ".$pe->get_especie()."
                <p>Temperatura de Sobrevivencia: ".$pe->get_Temperatura_media()."
                <hr/>";
    }
?>
</body>
</html>