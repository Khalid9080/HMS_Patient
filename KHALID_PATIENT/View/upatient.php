<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../Controller/updatePatient.php" method="post">
        <table align="center">
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Information</b></legend><br><br>
                        <table>
                            <tr>

                                <input type="hidden" name="id" value="REPLACE_WITH_ID_TO_UPDATE">
                                <label for="uname"> User Name:</label><br>
                                <input type="text" name="uname" id="uname"><br>

                                <label for="email">Email:</label><br>
                                <input type="text" name="email" id="email"><br>

                                <label for="pass">Password:</label><br>
                                <input type="password" name="pass" id="pass"><br>

                                <input type="submit" name="Update" value="Update">


                            </tr>

                        </table>

                    </fieldset>
                </td>

            </tr>
        </table>
    </form>
</body>

</html>