<?php
include 'connect.inc.php';

$sql = "SELECT * FROM `foto_list`";
$result = mysqli_query($conn, $sql);

/* Dit print alleen de table
if (mysqli_num_rows($result) > 0) //Check if database has input
{
	while($row = mysqli_fetch_assoc($result)) {
		echo "banner_id: " . $row["banner_id"] . " banner_naam: " . $row["banner_naam"] . " foto_url: " . $row["foto_url"] . " tekst: " . $row["tekst"] . "<br>";//break to put on new line;
	}
} else {
	echo "Table is empty";
}
*/
?>


<?php
//Genereer foto holder voor elke foto

if (mysqli_num_rows($result) > 0)
{
    while ($row = mysqli_fetch_assoc($result))
    {
        if ($row['show'])
        {?>
            <li>
                <div class="collapsible-header"><i class="material-icons">insert_photo</i><?php echo htmlspecialchars($row["banner_naam"]); ?></div>
                <div class="collapsible-body no-padding">
                    <div class="card no-margin">

                        <div class="card-image">
                            <img src="<?php echo htmlspecialchars($row["foto_url"]); ?>" alt="<?php echo htmlspecialchars($row["banner_naam"]); ?> image" >
                        </div>

                        <div class="card-content">
                            <p><?php echo htmlspecialchars($row["tekst"]); ?></p>
                        </div>

                        <div class="card-action">
                            <a href="<?php echo htmlspecialchars($row["foto_url"]); ?>" download="<?php echo htmlspecialchars($row["foto_url"]); ?>">Download</a>
                        </div>
                    </div>
                </div>
            </li>
        <?php	}
    }
} else
{
    echo "Table is empty.";
}
mysqli_close($conn);
?>