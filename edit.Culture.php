<?php
        include_once('header.php');
    ?>
    <div class="main" role="main">
        <form class="addCulture" action="updateCulture.php" method="post" name="insert" onsubmit="return validateForm();">
            <fieldset id="fields">
                <legend>New Region</legend>
                <label for="titleText">Name</label>
                <input name="Regions_NameText" id="Regions_NameText" type="text" aria-label="Title Input for New Region" value="<?php echo $original_row['Regions_Name'] ?>">
                <label>Island</label>
                <label for="titleText">Name</label>
                <select name='NZ_Islands_IDNumber' id="NZ_Islands_IDNumber">
                    <?php
                    require_once 'myconnect.php';


                    $sql = "SELECT nz_islands_ID, nz_islands_Name FROM nz_islands";
                    $result = $conn->query($sql);


                    if ($result->num_rows > 0) {
                        while ($row = $result->fetch_assoc()) {
                            // Correctly compare nz_islands_ID with the saved NZ_Islands_ID
                            $selected = ($row["nz_islands_ID"] == $original_row['NZ_Islands_ID']) ? "selected" : "";
                            echo '<option value="' . $row["nz_islands_ID"] . '" ' . $selected . '>' . $row["nz_islands_Name"] . '</option>';
                        }
                    }
                    ?>
                </select>            
                <label>Info</label>
                <input name="InfoText" id="InfoText" type="text" aria-label="Information for text" value="<?php echo $original_row['Info'] ?>">
                <label>Image</label>
                <input name="ImageText" id="ImageText" type="text" aria-label="Title Input for New Image" value="<?php echo $original_row['Image'] ?>">
                <label>Order by</label>
                <input name="OrderByText" id="OrderByText" type="number" step="any" aria-label="Order by" value="<?php echo $original_row['OrderBy'] ?>">
                <label>Disabled</label>            
                <input name="DisabledText" id="DisabledText" type="number" step="any" aria-label="Disabled info" value="<?php echo $original_row['Disabled'] ?>">
                <input name="idText" id="idText" type="hidden" value="<?php echo $original_row['Culture_ID'] ?>">
            </fieldset>
            <fieldset>
                <input type="submit" value="Edit Culture" class="button">
                <input type="reset" value="Reset" class="button">
            </fieldset>
        </form>


    </div>
    <?php
            include_once('footer.php')
            ?>
        </body>
        </html>