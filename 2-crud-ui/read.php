<?php require_once("./template/header.php"); ?>

<div class="">
    <h1>List</h1>
        <div class="">
        <?php 
         
        $sql = "SELECT * FROM doubtMen";
        if(isset($_GET["q"])){
            $q = $_GET["q"];
            $sql .= " WHERE name LIKE '%$q%'";
        }
        $query = mysqli_query($conn,$sql);

        $totalSql = "SELECT SUM(money) AS total FROM doubtMen";

        if(!empty($_SESSION["status"])){
            echo "<div class='alert w-25 alert-success'> {$_SESSION['status']['message']} </div>";
            $_SESSION["status"] = null;
        }
        
        $totalquery = mysqli_query($conn,$totalSql);
        $totalrow = mysqli_fetch_assoc($totalquery);
    //    print_r($row);
         ?>
        </div>
        <div class=" row justify-content-between align-items-center mb-2 p-3">
           <div class=" col-4">
           Total : <?= $query -> num_rows ?>
           </div>
           <div class="col-4">
            <form action="" method="get">
                <div class=" input-group">
                    <input type="text" name="q" value="<?php if(isset($_GET["q"])): ?><?= $_GET["q"] ?><?php endif; ?>" class="form-control">
                    
                    <?php if(isset($_GET["q"])): ?>
                        <a href="read.php" class=" btn btn-light">
                          x
                        </a>
                    <?php endif; ?>
                    <button class=" btn btn-primary">Search</button>
                </div>
            </form>
           </div>
        </div>
   <table class=" table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Name</th>
            <th>Money</th>
            <th>Created_At</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php while($row = mysqli_fetch_assoc($query)): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["name"] ?></td>
                <td class=" text-end"><?= $row["money"] ?></td>
                <td class=" "><?= date("j M Y",strtotime($row["created_at"])) ?><?= date("H i s",strtotime($row["created_at"])) ?></td>
                <td class=" flex gap-2">
                    <a href="./update.php?id=<?= $row['id'] ?>" class=" bi bi-search btn btn-primary"></a>
                    <form class=" d-inline-block" action="delete.php" method="post">
                        <input type="hidden" name="id" value="<?= $row["id"] ?>">
                        <button onclick="return confirm('ဖျက်မှာလား?')"  class=" bi bi-trash btn btn-danger text-white"></button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </tbody>
    <tfoot>
        <tr>
            <td colspan="2">Total</td>
            <td  class=" text-end"><?= $totalrow["total"] ?></td>
            <td colspan="2"></td>
        </tr>
    </tfoot>
   </table>
</div>

<?php require_once("./template/footer.php"); ?>