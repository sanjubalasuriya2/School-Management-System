<?php include('security.php');
require_once('header.php');  ?>
<?php include('../db/db.php');

$uname = $_SESSION['uname'];

$indexNo=$_GET["id"];

?>

<div class="container">

      <div class="container-fluid ">
<div class="border shadow p-4 m-4  fm">
      <div class="content-header ">
      <div class="container-fluid ">
        <div class="row mb-2 ">
          <div class="col-sm-6">
            <h1 class="m-0 ">Health Details</h1>
            
          </div><!-- /.col -->
          <div class="col-sm-6">
            <div class="float-sm-right">
            <a href="healthdetails.php?id=<?php echo $row["indexNo"]; ?>" class="btn btn-primary ">Register</a>
                
                </div>
                
          </div>
          
          
        </div><!-- /.row -->
        <hr>
      </div><!-- /.container-fluid -->
    </div>

        <div class="row pr-4 pl-4">
        

        

        
        <table class="tabl">
            <thead >
                <tr>
                <th scope="col">Student ID</th>
                <th scope="col">Title</th>
                <th scope="col">Details</th>
                
                
                </tr>
            </thead>
            <tbody>
                <?php 
                $res=mysqli_query($con,"SELECT * FROM `health` WHERE indexNo= '$indexNo'");
                while($row=mysqli_fetch_array($res))
                {
                ?>

                <tr>
                <td class="font"><?php echo $row["indexNo"]; ?></td>
                <td class="font"><?php echo $row["title"]; ?></td>
                <td class="font"><?php echo $row["info"]; ?></th>
                
                
                </tr>




                <?php 
                }
                
                
                ?>
                
                
            </tbody>
        </table>
        
        </div>
</div>

      </div><!-- /.container-fluid -->
      
    </div>




<?php require_once('footer.php');  ?>