<?php include('query.php');
include('header.php');
?>

<!--- blank start ------>
<div class = "container-fluid pt-4 px-4">
    <div class = "row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col-md-6">
            <h3>Category</h3>
            <table class= "table">
                <thead>
                    <tr>
                        <th>name</th>
                        <th>des</th>
                        <th>image</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $query = $pdo->query("select * from categories");
                    $allCategories = $query->fetchAll(PDO::FETCH_ASSOC);
                        foreach($allCategories as $cat){
                            ?>
                            <tr>
                                <td scope="row"><?php echo $cat ['name']?></td>
                                <td><?php echo $cat ['des']?></td>
                                <td><img height="100px" src="img/<?php echo $cat['Image']?>" alt=""></td>
                                <td><a href="editcategory.php?id=<?php echo $cat['id']?>"class="btn-btn-
                                primary">Edit</a></td>
                                <td></td>   
                            </tr>   
                            <?php
                        }
                        ?>
                        </tbody>
                    </table>
                    </div>
                    </div>
                    </div> 
                        
                        <!------blank end----->
<?php 
include('footer.php');
?>
