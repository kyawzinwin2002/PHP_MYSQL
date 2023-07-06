<?php require_once("./template/header.php"); ?>

<div class="">
    <h1>Update List</h1>
        <div class="">
        <?php 
         
            $id = $_GET["id"];
            $sql = "SELECT * FROM doubtMen WHERE id = $id";
            $query = mysqli_query($conn,$sql);
            $row = mysqli_fetch_assoc($query);

         ?>
        </div>
    <form action="updateInfo.php"  class=" border p-3 w-50" method="post">
        <input type="hidden"  name="id" value="<?= $row["id"] ?>" id="">
        <div class="">
            <label  class=" form-label">Name</label>
            <input type="text" name="name" value="<?= $row["name"] ?>" class="form-control">
        </div>
        <div class="">
            <label  class=" form-label">Money</label>
            <input type="number" name="money" value="<?= $row["money"] ?>" class="form-control">
        </div>
        <button class="btn btn-primary mt-3">Update</button>
    </form>
</div>

<?php require_once("./template/footer.php"); ?>

