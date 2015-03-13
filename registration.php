<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Shop</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/registration.css"/>
    <script src="js/validate.js"></script>
</head>
<body>

<div>

    <div class="main_1">
        <p>VEREX Electronics</p>
    </div>
    <div>
        <?php include("top.php"); ?>
        <div>
            <?php include("menu.php"); ?>
            <div class='container'>
                <h2 align="center"><a href='#'>Registration</a></h2>

                <form class='form' method="post" action="register.php">
                    <table class="table1">
                        <tr>
                            <td class="form_text">Title</td>
                            <td class="form_input"><input name="title" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">First Name</td>
                            <td class="form_input"><input name="firstName" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">Last Name</td>
                            <td class="form_input"><input name="lastName" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">Gender</td>
                            <td class="form_input"><input name="gender" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">DOB</td>
                            <td class="form_input"><input name="dob" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">Street address</td>
                            <td class="form_input"><input name="address" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">Suburb</td>
                            <td class="form_input"><input name="suburb" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">City</td>
                            <td class="form_input"><input name="city" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">ZipCode</td>
                            <td class="form_input"><input name="zipCode" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">Phone Contact</td>
                            <td class="form_input"><input  name="phone" type="text"/></td>
                        </tr>
                        <tr>
                            <td class="form_text">Email</td>
                            <td class="form_input"><input name="email" type="text"/></td>
                        </tr>
                    </table>
                    How did you hear about us?
                    <select name="channel">
                        <option>1</option>
                        <option>2</option>
                        <option>3</option>
                        <option>4</option>
                    </select></br>
                    Are you interested in receiving specials from us in future?
                    <table class="table2">
                        <tr>
                            <td>yes</td>
                            <td><input type="radio" name="interested" value="yes" class="form_radio"></td>

                            <td>no</td>
                            <td><input type="radio" name="interested" value="no" class="form_radio"></td>
                        </tr>
                    </table>

                    <input type='submit' value='submit'/>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>

