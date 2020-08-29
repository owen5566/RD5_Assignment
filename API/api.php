
<?php
// 一個簡單但可以運作的 REST API
$method = $_SERVER['REQUEST_METHOD'];
rtrim($_GET["url"], "/")."<hr>"; 
$url = explode("/", rtrim($_GET["url"], "/") );
$db = new PDO("mysql:host=localhost;dbname=RD5_db;port=8889", "root", "root");
$db->exec("set names utf8");

switch ($method." ".$url[0]) {
    case 'POST signUp':
        echo signUp();
        break;
    case 'POST checkAccount':
        echo checkAccount($_POST["accountName"]);
        break;
    case 'POST login':
        echo (login());
        break;    
    default:
        # code...
        break;
}
function checkAccount($account){
    global $db;
    $sqlCheckAccount = $db->prepare("select uAccountName from users where uAccountName=:accountName");
    $sqlCheckAccount->bindParam("accountName", $account, PDO::PARAM_STR);
        if ($sqlCheckAccount->execute()) {
            if (!$result = $sqlCheckAccount->fetch()) {
                return 1;
            } else {
                return 0;
            }
        } else {
            return "query account error";
        }
}
function signUp(){
    global $db;
    if (checkAccount($_POST["accountName"])){
        $accountName = $_POST["accountName"];
        $userPass = $_POST["userPass"];
        $name = $_POST["name"];
        $birth = $_POST["birth"];
        $address = $_POST["address"];
        $email = $_POST["email"];
        $sqlSignUp = $db->prepare("INSERT INTO `users` (`uAccountName`, `uPass`, `uName`, `uBirth`, `uAddress`, `uEmail`) 
                                   VALUES (:accountName, :userPass, :name, :birth, :address, :email)");
        $sqlSignUp->bindParam("accountName", $accountName, PDO::PARAM_STR);
        $sqlSignUp->bindParam("userPass", $userPass, PDO::PARAM_STR);
        $sqlSignUp->bindParam("name", $name, PDO::PARAM_STR);
        $sqlSignUp->bindParam("birth", $birth, PDO::PARAM_STR);
        $sqlSignUp->bindParam("address", $address, PDO::PARAM_STR);
        $sqlSignUp->bindParam("email", $email, PDO::PARAM_STR);
        if($sqlSignUp->execute()){
            return "1";
        }else{
            return "0";
        }
    }else{
        return "repeat";
    }
}
function login(){
    global $db;
    $userAccount = $_POST["userName"];
    $userPass = $_POST["userPass"];
    $sqlLogin = $db->prepare("select uAccountName,uPass from users where uAccountName=:accountName");
    $sqlLogin->bindParam("accountName",$userAccount,PDO::PARAM_STR);
    if($sqlLogin->execute()){
        if($row = $sqlLogin->fetch()){
            if ($userPass==$row["uPass"]) {
                return 1;
            }
        }
    }
    return 0;
}
// $method = $_SERVER['REQUEST_METHOD'];
// echo rtrim($_GET["url"], "/")."<hr>"; 
// $url = explode("/", rtrim($_GET["url"], "/") );

// echo $url;

// $dblink = mysqli_connect("localhost","root","root")or die(mysqli_connect_error());
// mysqli_query($dblink,"set names utf8");
// mysqli_select_db($dblink,"apiDB");

// switch ($method . " " . $url[0]) {
//     case "POST products":
//         insertProduct();
//         break;
//     case "GET products":
//         if (isset($url[1]))
//             getProductById($url[1]);
//         else
//             getProducts();
//         break;
//     case "PUT products":
//         updateProduct($url[1]);
//         break;
//     case "DELETE products":
//         deleteProduct($url[1]);
//         break;
//     default:
//         echo "Thank you";
// }
// mysqli_close($dblink);

// function getProductById($id) {
//     if (!is_numeric($id))
//     	die( "id is not a number." );

//     global $dblink;
//     $result = mysqli_query($dblink, 
//       "select * from products where productId = " . $id );
//     $row = mysqli_fetch_assoc($result);
//     echo json_encode($row);
// }

// function getProducts() {
//     global $dblink;
//     $result = mysqli_query($dblink, 
//       "select * from products");
//     while ($row = mysqli_fetch_assoc($result)) {
//         $dataList[] = $row;
//     }echo(json_encode($dataList));
// }

// function insertProduct() {
//     global $dblink;
    
//     $productName = $_POST["productName"];
//     $price       = $_POST["price"];
//     $quantity    = $_POST["quantity"];
//     $commandText = 
//         "insert into products "
//       . "set productName = '{$productName}' "
//       . "  , price       = '{$price}'"
//       . "  , quantity    = '{$quantity}'";
//     $result = mysqli_query($dblink, $commandText); 
    
//     echo $result;
// }


// function updateProduct($id) {
//     if (! isset ( $id ))
//     	die ( "Parameter id not found." );
//     if (! is_numeric ( $id ))
//         die ( "id not a number." );

//     global $dblink;
    
//     parse_str(file_get_contents('php://input'), $putData);
//     //echo json_encode($putData);
//     //return;
//     $productName = $putData["productName"];
//     $price       = $putData["price"];
//     $quantity    = $putData["quantity"];
//     $commandText = 
//         "update products "
//       . "set productName = '{$productName}' "
//       . "  , price       = '{$price}'"
//       . "  , quantity    = '{$quantity}'"
//       . "  where productId = {$id}";
//     mysqli_query($dblink, $commandText); 
    
//     echo "Updated: " . $id;
// }


// function deleteProduct($id) {
//     if (! isset ( $id ))
//     	die ( "Parameter id not found." );
//     if (! is_numeric ( $id ))
//         die ( "id not a number." );

//     global $dblink;
    
//     $commandText = 
//         "delete from products "
//       . "  where productId = {$id}";
//     mysqli_query($dblink, $commandText); 
    
//     echo "Deleted: " . $id;
// }
?>