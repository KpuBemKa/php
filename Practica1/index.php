<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" ;>
    <link rel="stylesheet" href="style.css">
    <title>Registration</title>
</head>

<body>
    <div class="dForm">
        <h3 class="menu">INSERARE</h3>
        <form id="pizza" action="signup.php" method="POST">
            <table class="tInfo">
                <tr>
                    <td class="labels">
                        <label for="username">Username:</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username"><br>
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="password">Parola:</label>
                    </td>
                    <td>
                        <input type="text" id="password" name="password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="numele">Numele:</label>
                    </td>
                    <td>
                        <input type="text" id="numele" name="numele">
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="prenumele">Prenumele:</label>
                    </td>
                    <td>
                        <input type="text" id="prenumele" name="prenumele">
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="number">Telefonul:</label>
                    </td>
                    <td>
                        <input type="text" id="number" name="number">
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="email">E-mail:</label>
                    </td>
                    <td>
                        <input type="text" id="email" name="email">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="reset" type="reset" value="Șterge">
                    </td>
                    <td>
                        <input class="submitButton" type="submit" value="Expediază">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="dSelect">
        <h3 class="menu">Datele din baza de date</h3>
        <?php
        require 'select.php';

        $result = readBD();

        echo "$result";
        ?>
    </div>


    <div class="dForm">
        <h3 class="menu">STERGERE</h3>
        <h5 class="menu">Selecteaza id-ul care doresti sa stergi</h5>
        <form id="pizza" action="delete.php" method="POST">
            <table class="tInfo">
                <tr>
                    <td class="labels">
                        <label for="username">ID:</label>
                    </td>
                    <td>
                        <input type="number" id="id" name="id"><br>
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="reset" type="reset" value="Șterge">
                    </td>
                    <td>
                        <input class="submitButton" type="submit" value="Sterge datele">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <div class="dForm">
        <h3 class="menu">MODIFICARE</h3>
        <h5 class="menu">Alege id-ul randului care doresti sa modifici</h5>
        <form id="pizza" action="update.php" method="POST">
            <table class="tInfo">
            <tr>
                    <td class="labels">
                        <label for="id">ID-ul:</label>
                    </td>
                    <td>
                        <input type="text" id="id" name="id">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <hr>
                        <h5 class="menu">Alege datele care doresti sa modifici.</h5>
                        <h5 class="menu">Daca nu doresti sa modifici, lasa spatiu gol</h5>
                    </td>
                    
                </tr>

                <tr>
                    <td class="labels">
                        <label for="username">Username:</label>
                    </td>
                    <td>
                        <input type="text" id="username" name="username"><br>
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="password">Parola:</label>
                    </td>
                    <td>
                        <input type="text" id="password" name="password">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <hr>
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="numele">Numele:</label>
                    </td>
                    <td>
                        <input type="text" id="numele" name="numele">
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="prenumele">Prenumele:</label>
                    </td>
                    <td>
                        <input type="text" id="prenumele" name="prenumele">
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="number">Telefonul:</label>
                    </td>
                    <td>
                        <input type="text" id="number" name="number">
                    </td>
                </tr>

                <tr>
                    <td class="labels">
                        <label for="email">E-mail:</label>
                    </td>
                    <td>
                        <input type="text" id="email" name="email">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input class="reset" type="reset" value="Șterge">
                    </td>
                    <td>
                        <input class="submitButton" type="submit" value="Modifica">
                    </td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>