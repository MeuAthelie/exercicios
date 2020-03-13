
<?php
    session_start();
    include "classAves.php";
    include "classMamiferos.php";
    include "classAnfibios.php";
    include "classPeixes.php";

?>
        <h1>Cadastrar Animal</h1>
        <form method="post" action="Alocar.php">
            <fieldset>
            <legend>Perfil Animal</legend>
    <label>Peso:
                    <input type="number" name="peso" placehoder="Peso..." required/>
                </label><br />
    <label>Altura:
                    <input type="number" name="altura" placehoder="Altura..." required/>
                </label>
    <label>Comprimento:
                    <input type="number" name="comprimento" placehoder="Comprimento..." required/>
                </label>
    <label>Cor:
                    <input type="color" name="cor" required/>
                </label><br />
    <label>Nome especie:
                    <input type="text" name="especie" placehoder="Especie..." required/>
                </label><br />

    <?php
switch($_POST["classe"]){
    case 1:
echo "<label>Voo Maximo(Altura):
                    <input type=\"text\" name=\"Max_voo\" placehoder=\"Voo maximo...\" required/>
                </label><br />
                <input type=\"hidden\" name=\"det\" value=\"1\" required/>";
break;
case 2:
echo "<label>Velocidade Maxima:
                    <input type=\"text\" name=\"Max_vel\" placehoder=\"Velocidade maxima...\" required/>
                </label><br />
                <input type=\"hidden\" name=\"det\" value=\"2\" required/>";
break;
case 3:
echo "<label>Tempo máximo submerso em água:
                    <input type=\"text\" name=\"Max_Sub\" placehoder=\"Maximo submerso...\" required/>
                </label><br />
                <input type=\"hidden\" name=\"det\" value=\"3\" required/>";
break;
case 4:
echo "<label>Temperatura de Sobrevivencia:
                    <input type=\"text\" name=\"Temperatura_media\" placehoder=\"Temperatura...\" required/>
                </label><br />
                <input type=\"hidden\" name=\"det\" value=\"4\" required/>";
            }
?>
            </fieldset>
            <input type="submit" value="Cadastrar" />
        </form>


</body>
</html>