<?php
    include "classAves.php";
    include "classMamiferos.php";
    include "classAnfibios.php";
    include "classPeixes.php";
?>
        <h1>Cadastrar Animal</h1>
        <form method="post" action="instanciarAnimal.php">
            <fieldset>
                <legend>Tipo animal</legend>
                <label>Aves
                    <input type="radio" name="classe" value="1" />
                <label>Mamiferos
                    <input type="radio" name="classe" value="2" />
                <label>Anfibios
                    <input type="radio" name="classe" value="3" />
                <label>Répteis
                    <input type="radio" name="classe" value="3" />
                <label>Peixes
                    <input type="radio" name="classe" value="4" />

                </label>
            </fieldset>
            <input type="submit" value="Selecionar" />
        </form>
    </body>
</html>