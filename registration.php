<html>
<style>
    body {
        font-family: Arial;
    }

    input[type=text], select {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        display: block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        background-color: #04AA6D;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }

    input[type=submit]:hover {
        background-color: #45a049;
    }

    div.container {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
    }
</style>
<body>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
    Name: <label></label>
     <input type="text" name="firstName">
    Last Name: <label></label>
    <input type="text" name="lastName">
    email: <label></label>
    <input type="text" name="email">
    region: <label></label>
    <input type="text" name="region">
    <label for="region">Choose a region:</label>
    <select name="cars" id="cars">
        <option value="Noord-holland">Noord-Holland</option>
        <option value="Zuid-Holland">Zuid-Holland</option>
        <option value="Zeeland">Zeeland</option>
        <option value="Noord-Braband">Noord-Braband</option>
    industry: <label></label>
    <input type="text" name="industry">
    jopPosition: <label></label>
    <input type="text" name="jobPosition">
    desiresalary: <label></label>
    <input type="text" name="desiredSalary">
    <input type="submit">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $formValid = true;
    $firstname = test_input($_POST["firstName"]);
    $firstname = test_input($_POST["lastName"]);
    $firstname = test_input($_POST["email"]);
    $firstname = test_input($_POST["region"]);
    $firstname = test_input($_POST["industry"]);
    $firstname = test_input($_POST["jobPosition"]);
    $firstname = test_input($_POST["desiredSalary"]);
    if (empty($firstname))
        if (empty($lastName))
            if (empty($email))
                if (empty($region))
                    if (empty($industry))
                        if (empty($jopPosition))
                            if (empty($desiredSalary)){
                                $formValid =false;
                                echo "Invalid Input";
                            } else {
                                echo $firstname;
                            }
}
function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    return htmlspecialchars($data);
}
?>

</body>
</html>

