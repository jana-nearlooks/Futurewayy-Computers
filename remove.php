<?php 
    include 'conixion.php';

    if (isset($_GET['Id'])) {
        $id = $_GET['Id'];

        echo "<script>
                var confirmDelete = confirm('Are you sure you want to delete?');
                if(confirmDelete) {
                    // Proceed with deletion
                    window.location.href = 'remove.php?action=delete&Id=$id';
                } else {
                    // User canceled deletion
                    window.location.href = 'request.php';
                }
              </script>";

        if(isset($_GET['action']) && $_GET['action'] == 'delete') {
            // Actual deletion logic
            $idToDelete = $_GET['Id'];
            $stmt = $con->prepare("DELETE FROM requester_list WHERE Id = :id");
            $stmt->bindParam(':id', $idToDelete, PDO::PARAM_INT);
            $stmt->execute();

            // Redirect to the main page
            header('location:request.php');
        }
    } else {
        header('location:request.php');
    }
?>
