<?php require_once("./template/header.php"); ?>

<div class="">
    <h1>Create List</h1>
        <div class="">
        <?php 
         
         if($_SERVER["REQUEST_METHOD"] === "POST"){
            $name = $_POST['name'];
            $money = $_POST["money"];

            $sql = "INSERT INTO doubtMen (name,money) VALUES ('$name','$money')";
            if(mysqli_query($conn,$sql)){
                echo "<div class='alert w-25 alert-success'>Created Successfully</div>";
            }
         }
         
         ?>
        </div>
    <form action=""  class=" border p-3 w-50" method="post">
        <div class="">
            <label  class=" form-label">Name</label>
            <input type="text" name="name" class="form-control">
        </div>
        <div class="">
            <label  class=" form-label">Money</label>
            <input type="number" name="money" class="form-control">
        </div>
        <button class="btn btn-primary mt-3">Submit</button>
    </form>
</div>

<?php require_once("./template/footer.php"); ?>