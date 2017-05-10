<?php
   //Checks if a like has been made by X user on X post
    private function like_exists() {
        $statement = $this->pdo->prepare("
            SELECT * FROM likes
            WHERE user_id = :user_id
            AND post_id = :post_id");
        
        $statement->execute([
            ':user_id' => $_SESSION['user_id'],
            ':post_id' => $_GET['id']
        ]);
        
        //Saves and return the data from the statement
        return $statement->fetch();
    }