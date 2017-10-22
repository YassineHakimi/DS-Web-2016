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

        <form action="next.php" method="post">
            <fieldset>
                <legend>Etape 1</legend>
                <table>
                    <tr>
                        <td>Référence</td>
                        <td><input type="text" name="ref" id="ref"></td>
                    </tr>
                    <tr>
                        <td>Catégorie</td>
                        <td>
                            <select name="cat" id="cat">
                                <option value="Enfant">Enfant</option>
                                <option value="Adulte">Adulte</option>
                            </select>
                        </td>
                    </tr>
                    <tr>
                        <td>Dimensions</td>
                        <td><input type="text" name="dims" id="dims"></td>
                    </tr>
                    <tr>
                        <td>Bois</td>
                        <td>MDF <input type="radio" name="bois" value="MDF">Bois Naturel <input type="radio" name="bois" value="Bois Naturel" checked></td>
                    </tr>
                    <tr>
                        <td><input type="submit" value="Suivant" id="nextBtn"></td>
                    </tr>
                </table>
            </fieldset>   
        </form>
        
        <script src="scripts/jquery-3.2.1.min.js"></script>
        <script src="scripts/script.js"></script>
    </body>
</html>