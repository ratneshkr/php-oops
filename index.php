<form action="index.php" method="post">

    <input type="text" name="userName" placeholder="Name"/>
    <input type="text" name="address" placeholder="Address"/>
    <input type="text" name="gender" placeholder="Gender"/>

    <input type="submit" value="Save" name="savedata"/>
</form>

<?php
include 'HelloWorld.php';
include 'DBOperation.php';
if (isset($_REQUEST['savedata'])) {
    $name = $_REQUEST['userName'];
    $address = $_REQUEST['address'];
    $gender = $_REQUEST['gender'];

    $ramesh = new HelloWorld();

    $ramesh->setName($name);
    $ramesh->setAddress($address);
    $ramesh->setGender($gender);

    //DBOperation;
    $db = new DBOperation();
    $db->connectDB();
    $db->save($ramesh->getName(), $ramesh->getAddress(), $ramesh->getGender());
    $db->disconnectDB();
}
?>