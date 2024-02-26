<?php include('query.php');
include('header.php');
?>
<?php

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query = $pdo->prepare("select * from categories where id = :cId");
    $query->bindParam('cId',$id);
    $query->execute();
    $cat = $query->fetch(PDO::FETCH_ASSOC);
    //print_r($cat);
}
?>  
<!-- blank start-->
<div class="container fluid pt 4 px 4">
    <div class="row vh-100 bg-light rounded align-items-center justify-content-center mx-0">
        <div class="col md 6">
        <h1>category</h1>
                  <form  action="" method="post" enctype="multipart/form-data">
                  <div class="form-group">
                      <label for="">Name</label>
                      <input type="text" value="<?php echo $cat['name']?>" name="cName" id=""
                       class="form-control" placeholder="" aria-describedby="helpId">

                    </div>
                    <div class="form-group">
                      <label for="">Des</label>
                      <input type="text" value="<?php echo $cat['des']?>" name="cDes" id=""
                       class="form-control" placeholder="" aria-describedby="helpId">
                    </div>
                    <div class="form-group">
                      <label for="">Image</label>
                      <input type="file" name="cImage" id=""
                       class="form-control" placeholder="" aria-describedby="helpId">
                       <span><?php echo $cat['Image']?></span>   
                      
                    </div>
                    <button name="updateCategory" type="submit" class="btn btn-primary ml-3">updateCategory</button>
                  </form>
        </div>
    </div>
</div>
<!--blank end-->
<?php
include('footer.php')
?>