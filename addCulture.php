<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/main.css">
    <script src="js/insertCulture.js"></script> 
    <title>Digital Media. Advanced Websites</title>
</head>

<body>
    <header>
        <figure>
            <img src="images/lc-mint.png" width="100" alt="Learn Coach Logo.">
        </figure>
        <h1>Digital Media. Advanced Websites</h1>
    </header>
    <nav>
        <label for= "navCheck"><i class="fas fa-bars"></i></label>
        <input type="checkbox" id="navCheck">      
        <div id="menuItems">
            <p><a href="index.php">Home</a></p>
            <p><a href="music.php">Music</a></p>
            <p><a href="addMusic.php">Add Music</a></p>
        </div>
    </nav>
    <div class="main" role="main">
        <form class="addMusic" action="insertCulture.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>New Song</legend>
                <label for="titleText">New Cultural Item</label>
                <input name="Culture_NameText" id="Culture_NameText" type="text">

                <label>Image</label>
                <input name="imageText" id="imageText" type="text">
              

                <input name="genreText" id="genreText" type="text">
                <label>Price</label>
                <input name="priceText" id="priceText" type="number" step="any">
            </fieldset>
            <fieldset>
                <input type="submit" value="Submit Song" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>
    </div>
    <footer>
        <p class="centre">&copy; 2019 LearnCoach.</p>
    </footer>
</body>
</html>