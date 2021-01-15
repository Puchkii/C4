<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create</title>
</head>
<?php //include 'controller/createController.php' ?>
<body class="container">
    <form method="POST" action="create_proces.php">
        <div>
            <label>Voornaam</label>
            <input type="text" ng-pattern="/^[a-z]{1}[a-z]/i" name="Voornaam" required>

            <label>Achternaam</label>
            <input type="text" ng-pattern="/^[a-z]{1}[a-z]/i" name="Achternaam" required>

            <label>Straat</label>
            <input type="text" name="Straat" ng-pattern="/^[a-z]{1}[a-z]/i" required>
        </div>

        <label>Number</label>
        <input type="number" name="num" required>

        <label>Postcode</label>
        <input type="text" name="Postcode" ng-pattern="/^[1-9][0-9]{3}[\s]?[A-Za-z]{2}$/i" required>

        <label>Woonplaats</label>
        <input type="text" name="Woonplaats" ng-pattern="/^[a-z]{1}[a-z]/i" required>

        <label>Telefoonnummer</label>
        <input type="text" name="Telefoonnummer"ng-pattern="/^(((\\+31|0|0031)6){1}[1-9]{1}[0-9]{7})$/i" required>

        <input type="submit" value- "Submit>
    </form>
</body>
</html>
