<?php
include "classAves.php";
include "classMamiferos.php";
include "classAnfibios.php";
include "classPeixes.php";
    echo '<h2>Lista de animais catalogados:</h2>';

   
    if(foreach ($_SESSION["Aves"]){ 
        echo "  <p>Cor: <span style='Peso:".$c->get_peso()."'>".$c->get_peso()."</span></p>
                <p>Comprimento:" .$c->get_comprimento()."</br>
                <p>Altura: ".$c->get_altura()."</br>
                <p>Cor: ".$c->get_cor()."
                <p>Especie: ".$c->get_especie()."
                <p>Altura Maxima de Voo: ".$c->get_Max_voo()."
                <hr/>";
    }elseif(foreach ($_SESSION["Mamifero"]){
        echo "  <p>Cor: <span style='Peso:".$c->get_peso()."'>".$c->get_peso()."</span></p>
                <p>Comprimento:" .$c->get_comprimento()."</br>
                <p>Altura: ".$c->get_altura()."</br>
                <p>Cor: ".$c->get_cor()."
                <p>Especie: ".$c->get_especie()."
                <p>Velocidade Maxima: ".$c->get_Max_vel()."
                <hr/>";
    }elseif(foreach ($_SESSION["anfi_rept"]){
        echo "  <p>Cor: <span style='Peso:".$c->get_peso()."'>".$c->get_peso()."</span></p>
                <p>Comprimento:" .$c->get_comprimento()."</br>
                <p>Altura: ".$c->get_altura()."</br>
                <p>Cor: ".$c->get_cor()."
                <p>Especie: ".$c->get_especie()."
                <p>:Tempo máximo submerso em água ".$c->get_Max_Sub()."
                <hr/>";
    }else{
        echo "  <p>Cor: <span style='Peso:".$c->get_peso()."'>".$c->get_peso()."</span></p>
                <p>Comprimento:" .$c->get_comprimento()."</br>
                <p>Altura: ".$c->get_altura()."</br>
                <p>Cor: ".$c->get_cor()."
                <p>Especie: ".$c->get_especie()."
                <p>Temperatura de Sobrevivencia: ".$c->get_Temperatura_media()."
                <hr/>";
    }
?>
</body>
</html>