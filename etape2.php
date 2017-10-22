<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="stylesheet" href="styles/style.css">
        <title>DS</title>
    </head>
    <body>
        <!-- <div id="text">Bienvenu dans notre ShowRoom</div>
        <div id="rBtn">Lit <input type="radio" name="r" id="r1">Armoire <input type="radio" name="r" id="r2"></div> -->

        <form action="end.php" method="post">
            <fieldset>
                <legend>Etape 2</legend>
                <table>
                    <tr>
                        <td>Référence</td>
                        <td><input type="text" name="ref" id="ref" value="<?php echo $_GET['q']?>"></td>
                    </tr>
                    <tr>
                        <td>C'est quoi votre produit ?</td>
                        <td>
                            <select name="type" id="type">
                                <option value="Lit">Lit</option>
                                <option value="Armoire">Armoire</option>
                                <option value="Meuble">Meuble</option>
                            </select>
                        </td>
                    </tr>
                    <tr class="lit">
                        <td>Type de lit :</td>
                        <td>
                            <select name="typeL" id="typeL">
                                <option value="1 place ">1 place </option>
                                <option value="2 places ">2 places </option>
                            </select>
                        </td>
                    </tr>
                    <tr class="lit">
                        <td><input type="submit" value="Terminer" id="endBtn"></td>
                    </tr>
                </table>
            </fieldset>   
        </form>
        
        <script src="scripts/jquery-3.2.1.min.js"></script>
        <script src="scripts/script.js"></script>
    </body>
</html>