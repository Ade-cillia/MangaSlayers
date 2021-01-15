<?php
function addUser($pdo,$data){
    $first_name = $data['first_name'];
    $last_name = $data['last_name'];
    $email = $data['email'];
    $password = password_hash($data['password'],PASSWORD_BCRYPT);
    $phone = $data['phone'];
    $sql = "
        INSERT INTO client (first_name, last_name, email, password, phone)
        VALUES (:first_name, :last_name, :email, :password, :phone);
    ";
    $stnt = $pdo->prepare($sql);

    try {
        return $stnt->execute(
                [
                    "first_name" => $first_name,
                    "last_name" => $last_name,
                    "email" => $email,
                    "password" => $password,
                    "phone" => $phone
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
        FROM client
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
        FROM client
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






//login
function getEmailPassword($pdo, $email){
    $sql ="
        SELECT email, password
        FROM client
        WHERE email = :email;
    ";

    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "email" => $email,
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};
function startSession($pdo, $email){
    $sql ="
        SELECT *
        FROM client
        WHERE email = :email;
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "email" => $email,
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};
 ?>
