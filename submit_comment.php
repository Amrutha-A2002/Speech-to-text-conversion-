<?php
require("connection.php");
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Validate if required fields are set
    if (isset($_POST["story_id"], $_POST["comment"], $_SESSION["aa"])) {
        $story_id = trim($_POST["story_id"]);
        $comment = trim($_POST["comment"]);
        $id = $_SESSION["aa"];

        // Check if inputs are not empty
        if (!empty($story_id) && !empty($comment)) {
            // Prepare the SQL statement
            $stmt = $con->prepare("INSERT INTO tb_comments (story_id, comment_text, user_id) VALUES (?, ?, ?)");
            if ($stmt) {
                $stmt->bind_param("isi", $story_id, $comment, $id);
                if ($stmt->execute()) {
                    echo "success";
                } else {
                    echo "error: " . $stmt->error;
                }
                $stmt->close();
            } else {
                echo "error: " . $con->error;
            }
        } else {
            echo "error: Empty fields!";
        }
    } else {
        echo "error: Missing parameters!";
    }
} else {
    echo "error: Invalid request!";
}
?>