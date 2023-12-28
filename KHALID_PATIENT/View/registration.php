<?php 
include "../Controller/registration_process.php";


?>
<!DOCTYPE html>

<html>

<head>
    <script src="../JS/validation.js"></script>;
    <title> Registration Form </title>
</head>
<h1 align="center"> Patient Registration Page. </h1>

<body>
    <form action="" method="post" onsubmit="return validateForm(event) ">
        <table align="center">
            <tr>

                <td>
                    <fieldset>
                        <legend><b>Patient Information</b></legend><br><br>
                        <table>
                            <tr>
                                <td>
                                    <label for="uname"> User Name : </label><br><br>
                                </td>
                                <td>
                                    <input type="text" name="uname" id="uname"><br>

                                    <span id="error-uname" class="error-message"></span><br>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label for="email">Email :</label><br>
                                </td>
                                <td>
                                    <input type="text" name="email" id="email"><br>

                                    <span id="error-email" class="error-message"></span>
                                </td>
                            </tr>




                            <tr>
                                <td>
                                    <label>Gender :</lebel><br>
                                </td>
                                <td>
                                    <input type="radio" name="gender" id="male" value="Male"> Male
                                    <input type="radio" name="gender" id="female" value="Female"> Female
                                    <input type="radio" name="gender" id="others" value="Others"> Others

                                    <span id="error-gender" class="error-message"></span>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label> Age : </lebel><br><br>
                                </td>
                                <td>
                                    <input type="number" name="age" id="age"><br>
                                    <span id="error-age" class="error-message"></span>

                                </td>
                            </tr>

                            <tr>
                                <td>
                                    <label>Death of Birth: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="date" name="dob" id="dob"><br><br>
                                    <span id="error-dob" class="error-message"></span>

                                </td>
                            </tr>




                            <tr>
                                <td>
                                    <label for="bg">Blood Group :<br><br>
                                </td>
                                <td>
                                    <select name="bg" id="bg"></label>
                                        <option value="">Select</option>
                                        <option value="A+">A+</option>
                                        <option value="A">A</option>
                                        <option value="A-">A-</option>
                                        <option value="B+">B+</option>
                                        <option value="B">B</option>
                                        <option value="B-">B-</option>
                                        <option value="O+">O+</option>
                                        <option value="O-">O-</option>
                                        <option value="AB+">AB+</option>
                                        <option value="AB-">AB-</option>
                                    </select>
                                    <span id="error-bg" class="error-message"></span>
                                    <br><br>
                                </td>
                            </tr>



                            <tr>
                                <td>
                                    <label>Password: </lebel><br><br>
                                </td>
                                <td>
                                    <input type="password" name="pass" id="pass"><br><br>
                                    <span id="error-pass" class="error-message"></span>
                                </td>
                            </tr>


                            <tr>
                                <td>
                                    <label>Address :</lebel><br><br>
                                </td>
                                <td>
                                    <textarea name="add" cols="30" rows="8" id="add"></textarea><br><br>
                                    <span id="error-add" class="error-message"></span>

                                </td>
                            </tr>

                            <tr>
                                <td></td>
                                <td>
                                    <input type="submit" name="Submit" value="Submit">
                                    <input type="reset" name="Reset" value="Reset">
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