<?php
include('query.php');
include('header.php');
?>
<div class="container p-5">
    <div class="col-md-8 mt-5">
        <div class="form-group">
          <label for="">email</label>
          <input type="text" name="uemail" id="" class="form-control" placeholder="" aria-describedby="helpId">
        </div>
        <div class="form-group">
          <label for="">Password</label>
          <input type="text" name="uPassword" id="" class="form-control" placeholder="" aria-describedby="helpId">
          <button type="submit" class="btn btn-info mt-4" name="login">login</button>
        </div>
</form>
</div>
</div>
<?php
include('footer.php')
?>