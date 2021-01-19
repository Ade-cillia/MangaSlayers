<?php
function paymentMethod($pdo,$data){
    $sql = "
        INSERT INTO `payment_method` (method, value,id_client)
        VALUES (:method, :value, :id_client);
    ";
    $stnt = $pdo->prepare($sql);
    try {
        $stnt->execute(
            [
                "method" => $data['paymentMethod'],
                "value" => $_data['cardNumber'],
                "id_client" => $_SESSION['id']
            ]
        );
        return $stnt->fetchAll();
    } catch (\Exception $e) {
        $stnt->rollback();
        throw $e;
    }
};

?>
