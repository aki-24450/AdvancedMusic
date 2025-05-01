<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/mymain.css">
    <link rel="stylesheet" href="css/style.css">
    <title>Kingdom of Tonga</title>
</head>
<body>
    <?php
        include_once('header.php')
     ?> 
    <div class="main" role="main">
        <!-- Sort Form -->
        <form id="sortForm" action="culture.php" method="post">
            <select name="sort" id="sort">
                <option value="Artist_Name">Artist</option>
                <option value="Genre">Genre</option>
                <option value="Rating">Rating</option>
                <option value="Title" selected>Title</option>
            </select>
            <input type="submit" value="Sort" class="button">
        </form>

        <h1>Cultural List</h1>
            <!-- php to display songs -->
            <?php
            require_once 'myconnect.php';

            // Create the database query
            $sql = "SELECT culture.* FROM culture";

            // Check if there is a sort order requested
            // if(isset($_REQUEST['sort'])){
            //     $sql = $sql . " ORDER BY " . $_REQUEST['sort'];
            // } 
            // else {
            //     $sql = $sql . " ORDER BY Title";
            // }

            $result = $conn->query($sql);
            echo '<section id="musicList">';

            // if ($result->num_rows > 0) {
            //     while($row = $result->fetch_assoc()) {
            //         echo '<article>';

            //             echo '<h2>' . $row["Culture_Name"] . '</h2>';
            //             echo '<figure class="centre"><img src="' . $row["Image"] . '" height="150" width="150"></figure>';
            //             echo '<p><span class="title">Artist: </span><span>' . $row["Info"] . '</span></p>';

            //         echo '</article>';
            //     }
            // }
            echo '<div class="grid-container">';
            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
      
                    echo '<div class="grid-item">';
                    echo '<h2>' . $row["Culture_Name"] . '</h2>';
                    echo '<img src="' . $row["Image"] . '" height="150" width="150">';
                    echo '<p><span class="title">Info: </span><span>' . $row["Info"] . '</span></p>';
                    echo '</div>';
                      
                }
            }
            echo '</div>';
            ?>
    </div>
    <footer>
        <p class="centre">&copy; 2025 Aki.</p>
    </footer>
</body>
</html>