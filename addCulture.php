<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/insertCulture.js"></script> 
    <title>Digital Media. Advanced Websites</title>

    <?php
            include_once('header.php')
    ?> 
    <div class="main" role="main">
        <form class="addMusic" action="insertCulture.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>New Item</legend>
                <label for="titleText">New Cultural Item</label>
                <input name="Culture_NameText" id="Culture_NameText" type="text">

                <label>Image</label>
                <input name="imageText" id="imageText" type="text">

                <label>Info</label>
                <input name="infotext" id="info text" type="text">


            </fieldset>
            <fieldset>
                <input type="submit" value="Submit Item" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>
    </div>
    <footer>
        <p class="centre">&copy; 2025 Aki.</p>
    </footer>
</body>
</html>