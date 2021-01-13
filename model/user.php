<?php
function addUser($pdo,$data){
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $email = $data['email'];
    $gender = $data['gender'];
    $password = password_hash($data['password'],PASSWORD_BCRYPT);
    $sql = "
        INSERT INTO user (first_name, last_name, email, gender, password)
        VALUES (:first_name, :last_name, :email, :gender, :password);
    ";
    $stnt = $pdo->prepare($sql);

    try {
        return $stnt->execute(
                [
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "gender" => $gender,
                    "password" => $password
                ]
            );

    } catch (\Exception $e) {
        $pdo->rollback();
        throw $e;
    }

};

function getAllUsers($pdo){
    $sql ="
        SELECT *
        FROM user
    ";

    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};
function getUser($pdo, $id){
    $sql ="
        SELECT *
        FROM user
        WHERE id = $id;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute();
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }

};
 ?>
