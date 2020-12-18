<?php
include 'productMaranger.php';
include 'product.php';
const PRODUCT = "date.json";
$dataLoad = loadData();
$management = new Product();
if (count($dataLoad) > 0) {
    foreach ($dataLoad as $value) {
        $product = new product($value[0], $value[1], $value[2], $value[3], $value[4], $value[5], $value[6], $value[7]);
        $management->add($product);
    }
}
$ListProduct = $management->getProducts();
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $action = $_POST['action'];

    $id = $_POST['id'];
    $name = $_POST['id'];
    $category = $_POST['category'];
    $amout = $_POST['amout'];
    $price = $_POST['price'];
    $description = $_POST['description'];
    $created = $_POST['date'];
    $img = $_POST['img'];
    $productArray = [$id, $name, $amout, $price, $description, $created, $img];
    switch ($action) {
        case "add":
       if (!isExit($id)){
            addProduct($productArray);
        }
        else{
            echo "<script>alert('Sản phẩm với id này đã tồn tại');</script>";
            die();
        }
            break;
        case "edit":
            header("location:EditPage.php");
            die();
            updateProduct($id, arrayToProduct($productArray));
            break;
        case "delete":
            deleteProduct($id);
            break;
    }
}
$dataSave = [];
foreach ($management->getProducts() as $value) {
    array_push($dataSave, toArray($value));
}
saveData($dataSave);
header("location:index.php");
function addProduct($id, $name, $amout, $price, $description, $created, $img){
    $product =new Product($id, $name, $amout, $price, $description, $created, $img);
    $GLOBALS['manager']->add($product);
}
function deleteProduct($index)
{
    $GLOBALS['productManager']->delete($index);
}

function updateProduct($index, $product)
{

}

function toArray($obj)
{
    return [$obj->getID(), $obj->getName(), $obj->getCategory(), $obj->getAmount(), $obj->getPrice(), $obj->getDescription(), $obj->getCreated(), $obj->getImg()];
}

function saveData($data)
{
    $dataJson = json_encode($data);
    file_put_contents(PRODUCT, $dataJson);
}

function loadData()
{
    return json_decode(file_get_contents(PRODUCT), true);
}