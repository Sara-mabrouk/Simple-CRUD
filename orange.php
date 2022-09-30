<?php
function testMessage($concation, $message)
{
    if ($concation) {
        echo " <div class='alert alert-success col-4 mx-auto'>
$message Successfuly Proccess
</div>";
    } else {
        echo " <div class='alert alert-danger col-4 mx-auto'>
        $message Falied Proccess 
    </div>";
    }
}
// Connect TO Database;
$host = "localhost";
$user = "root";
$password = "";
$dbName = "orange";
$conn = mysqli_connect($host, $user, $password, $dbName);

/////////////////////////////////////////////////////////////////
// create employy
if (isset($_POST['insert'])) {
    $name =  $_POST['name'];
    $salary =  $_POST['salary'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $departmentID =$_POST['departmentID'];
    if($name=="")
    {
        
        testMessage(false, "Insert Employee To Database");
        }
        else
        {
    $inset = "INSERT INTO `employee`(`id`, `name`, `salary`, `phone`, `city`, `departmentID`, `depName`) VALUES (NULL,'$name','$salary','$salary','$city',$departmentID,' ');";
    $i = mysqli_query($conn, $inset);
    testMessage($i,"Insert To Database");
    }
}

// Create Department
if (isset($_POST['sendDep'])) {
    $depName =$_POST['depName'];
    if($depName=="")
    {  
    testMessage(false, "Insert Department To Database");

    }
    else
    {
        $insertDep = "INSERT INTO `department`(`id`, `name`, `depName`) VALUES (NULL,'$depName','$depName')";
        $i = mysqli_query($conn, $insertDep);
        testMessage($i, "Insert Department To Database");
    }
}
// Read employee / department....
$selectemp = "SELECT * FROM `employee`";
$employee = mysqli_query($conn, $selectemp);
//////////////////////////////////////////////
$selectdep = "SELECT * FROM `department`";
$department = mysqli_query($conn, $selectdep);
////////////////////////////////////////////////
// delete employee
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $delete = "DELETE FROM employee where id = $id ";
    $d = mysqli_query($conn, $delete);
    header("location: orange.php?#return ");
}
// delete department....
if (isset($_GET['deletedep'])) {
    $DepId= $_GET['deletedep'];
    $deletedep = "DELETE FROM depatment where id = $id ";
    $d = mysqli_query($conn, $deletedep);
    header("location:orange.php?#return ");
}
///////////////////////////////////////////////////
$name = "";
$salary = "";
$phone = "";
$city = "";
$update = false;
if (isset($_GET['edit'])) {
    $update = true;
    $id = $_GET['edit'];
    $selectemp = "SELECT * FROM employee where id =$id";
    $oneEmployee = mysqli_query($conn, $selectemp);
    $row = mysqli_fetch_assoc($oneEmployee);
    $Name = $row['name'];
    $salary = $row['salary'];
    $phone = $row['phone'];
    $city = $row['city'];
}
if (isset($_POST['update'])) {
    $Name =  $_POST['name'];
    $salary =  $_POST['salary'];
    $phone = $_POST['phone'];
    $city = $_POST['city'];
    $departmentID =$_POST ['departmentID'];
    $update = "UPDATE `employee` SET `name`='$Name',`salary`='$salary',`phone`='$phone',`city`='$city',`departmentID`='$departmentID',`depName`=' ' WHERE id =$id";
    mysqli_query($conn, $update);
    header("location:orange.php?#return ");
}

$updateDep = false;
$depName = "";
if (isset($_GET['editDep'])) {
    $updateDep = true;
    $DepId = $_GET['editDep'];
    $selectDep = "SELECT * FROM department where id =$DepId";
    $oneDep = mysqli_query($conn, $selectDep);
    $row = mysqli_fetch_assoc($oneDep);
    $depName = $row['name'];

    if (isset($_POST['updateDep'])) {
        $depName =  $_POST['depName'];
        $updateDep = "UPDATE department SET `name` = '$depName' where id =$DepId";
        $u = mysqli_query($conn, $updateDep);
        header("location:orange.php?#return ");
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="css/main.css">
    <title>CRUD | Form</title>
</head>
<body>
    <div class="container col-6">
        <div class="card" style="background-color:#1f2124">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Department Name</label>
                        <input type="text" class="form-control" value="<?= $depName ?>" name="depName">
                    </div>
                    <?php if ($updateDep) : ?>
                        <button name="updateDep" class="btn btn-info"> Update Data </button>
                    <?php else : ?>
                        <button name="sendDep" class="btn btn-primary">Insert Department</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
    <hr>
    <div class="container col-6">
        <div class="card">
            <div class="card-body">
                <form method="POST">
                    <div class="form-group">
                        <label for="exampleInputEmail1">Employee Name</label>
                        <input type="text" class="form-control"value="<?= $name ?>" name="name" ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Employee Salary</label>
                        <input type="number" class="form-control"value="<?= $salary ?>" name="salary" ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Employee Phone</label>
                        <input type="number" class="form-control"value="<?= $phone ?>" name="phone" ?>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1"> Employee City</label>
                        <input type="text" class="form-control"value="<?= $city ?>" name="city" ?>
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <label class="input-group-text" for="inputGroupSelect01">Department</label>
                        </div>
                        <select class="custom-select" id="inputGroupSelect01" name="departmentID">
                            <option selected>Choose...</option>
                            <?php foreach ($department as $data) { ?>
                                <option value="<?= $data['id'] ?>"><?= $data['name'] ?></option>
                            <?php } ?>
                        </select>
                    </div>
                    <?php if ($update) : ?>
                        <button name="update" class="btn btn-info"> Update Data </button>
                    <?php else : ?>
                        <button name="insert" class="btn btn-primary">Insert Employee</button>
                    <?php endif; ?>
                </form>
            </div>
        </div>
    </div>
<hr>
<hr>
    <div id="return" class="container col-7 mt-5">
        <div class="card" style="background-color:#1f2124">
            <div class="card-body">
                <table class="table table-dark table-striped">
                    <tr>
                        <th>#ID </th>
                        <th>Name </th>
                        <th colspan="2">Action </th>
                    </tr>
                    <?php foreach ($department as $data) { ?>
                        <tr>
                            <td> <?= $data['id'] ?> </td>
                            <td> <?= $data['name'] ?> </td>
                            <td> <a class="btn btn-primary" href="orange.php?editDep=<?= $data['id'] ?>"> Edit </a></td>
                            <td> <a href="orange.php?deletedep=<?= $data['id'] ?>" class="btn btn-danger"> Remove </a> </td>
                        </tr>
                    <?php } ?>
                </table>
            </div>
        </div>
    </div>
<hr>
<hr>
    <form method="POST">
        <div id="return" class="container col-7 mt-5">
            <div class="card" style="background-color:#1f2124">
                <div class="card-body">
                    <table class="table table-dark table-striped">
                        <tr>
                            <th>#ID </th>
                            <th>Name </th>
                            <th>Salary </th>
                            <th>Phone </th>
                            <th>city </th>
                            <th>Department </th>
                            <th colspan="1">Action </th>
                            </tr>
                        <?php foreach ($employee as $data) { ?>
                            <tr>
                                <td> <?= $data['id'] ?> </td>
                                <td> <?= $data['name'] ?> </td>
                                <td> <?= $data['salary'] ?> </td>
                                <td> <?= $data['phone'] ?> </td>
                                <td> <?= $data['city'] ?> </td>
                                <td> <?= $data['departmentID'] ?> </td>
                                <td> <a class="btn btn-primary" href="orange.php?edit=<?= $data['id'] ?>"> Edit </a></td>
                                <td> <a href="orange.php?delete=<?= $data['id'] ?>" class="btn btn-danger"> Remove </a> </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </form>

</body>
</html>



