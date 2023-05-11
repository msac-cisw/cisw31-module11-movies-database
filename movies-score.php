<?php
require 'includes/db-connect.php';
include 'includes/header.php';

// Write an SQL statement to get your movies year, title, and score
// then order them by score highest to lowest
$sql       = "";

$statement = $pdo->query($sql);
$movies    = $statement->fetchAll();
?>

<h1 class="w3-center w3-blue">Movies By Score</h1>


<table class="w3-table w3-striped w3-bordered w3-hoverable">
	<!--This foreach loop will run through your results and create a row for each movie -->
    <?php foreach ($movies as $movie) { ?>
        <tr>
            <td><?= htmlspecialchars($movie['year']) ?></td>
            <td><?= htmlspecialchars($movie['title']) ?></td>
            <td><?= htmlspecialchars($movie['score']) ?></td>
        </tr>

    <?php } ?>
</table>
<?php
include 'includes/footer.php';
?>