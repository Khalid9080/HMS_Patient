<?php 
include "../Controller/report_process.php";


?>
<!DOCTYPE html>

<html>

<head>
    <link rel="stylesheet" href="style.css">

    <title> Registration Form </title>
</head>
<h1 align="center"> Patient Registration Page. </h1>

<body>
    <form action="" method="post" onsubmit="return validateForm(event) ">
        <table align="center">
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Report</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label for="rpt"> Reporting Time : </label><br><br>
                                </td>
                                <td>
                                    <input type="date" name="rpt" id="rpt"><br>

                                    <span id="error-rpt" class="error-message"></span><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="doctor">Doctor: </label><br>
                                </td>
                                <td>
                                    <input type="text" name="doctor" id="doctor"><br>

                                    <span id="error-doctor" class="error-message"></span>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label> Report History : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="text" name="rh" id="rh"><br>
                                    <span id="error-rh" class="error-message"></span>

                                </td>
                            </tr>


                            <td></td>
                            <td>
                                <input type="submit" name="Submit" value="Submit">

                            </td>
            </tr>


        </table>


        </fieldset>
        </td>

        </tr>
        </table>
    </form>
</body>

</html>