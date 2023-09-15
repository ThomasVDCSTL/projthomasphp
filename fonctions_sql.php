<?php






function new_customer(string $name, int $phone, int $zip, string $address, string $city, string $mail): void
{
    $sql = 'INSERT INTO customers (customer_id, full_name, phone_number, zip_code, address, city, mail) VALUES (NULL, ?, ?, ?, ?, ?, ?)';
    $db = include 'db_mysql.php';
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute(array($name, $phone, $zip, $address, $city, $mail));
    } catch (Exception $e) {
        echo $e->getMessage();
    }
    $sql = 'SELECT customer_id FROM customers WHERE full_name = :name';
    $stmt=$db->prepare($sql);
    $stmt->execute([':name'=>$_GET["nom_prenom"]]);
    $temp=$stmt->fetchAll();
    $_SESSION['customer_id']=$temp[0][0];
    unset($db);
}

function import_products(): array
{
    $sql='SELECT * FROM products';
    $db=include 'db_mysql.php';
    $stmt=$db->prepare($sql);
    $stmt->execute();
    $products=$stmt->fetchAll();
    return $products;
}



function import_to_panier(int $productID, int $nb): void
{
    $sql='INSERT INTO product_order (product_id, order_id, quantity) VALUES (?, ?, ?)';
    $db=include 'db_mysql.php';
    try {
        $stmt = $db->prepare($sql);
        $stmt->execute(array($productID, $_SESSION['customer_id'], $nb));
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}