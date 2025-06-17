<?php
require("connection.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $story_id = $_POST["story_id"];

    // Check if story_id is numeric (to prevent SQL injection)
    if (!is_numeric($story_id)) {
        die("Invalid Story ID");
    }

    // Prepare SQL statement
    $query = $con->prepare("SELECT comment_text FROM tb_comments WHERE story_id = ? ORDER BY comment_id DESC");

    if (!$query) {
        die("Query failed: " . $con->error); // Debugging error
    }

    $query->bind_param("i", $story_id);
    $query->execute();
    $result = $query->get_result();

    while ($row = $result->fetch_assoc()) {
        echo "<p>" . htmlspecialchars($row['comment_text']) . "</p>";
    }
}
?>
