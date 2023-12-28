<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="../Controller/updateReport.php" method="post">
        <table align="center">
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Report Information</b></legend><br><br>
                        <table>
                            <tr>

                                <input type="hidden" name="id" value="id">
                                <label for="rpt"> Reporting Time:</label><br>
                                <input type="date" name="rpt" id="rpt"><br>

                                <label for="doctor">Doctor:</label><br>
                                <input type="text" name="doctor" id="doctor"><br>

                                <label for="rh">Reporting history:</label><br>
                                <input type="text" name="rh" id="rh"><br>

                                <input type="submit" name="Update" value="Update Report">


                            </tr>

                        </table>

                    </fieldset>
                </td>

            </tr>
        </table>
    </form>
</body>

</html>