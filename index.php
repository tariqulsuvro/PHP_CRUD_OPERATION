<?php
   include "inc/header.php"
?>

   <section>
     <div class="container">
       <div class="row">
         <div class="col-md-12">
           <h3 class="text-center">All student data</h3>

           <!-- Table Start -->
           <table id="allStd" class="table table-bordered table-striped table-hover">
  
  <thead class="thead-dark ">
    
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Full Nane</th>
      <th scope="col">Email Address</th>
      <th scope="col">Phone No.</th>
      <th scope="col">Address</th>
      <th scope="col">Gender</th>
      <th scope="col">Join Date</th>
      <th scope="col">Action</th>

    </tr>

  </thead>

  <tbody>

    <?php

       //to read the data from our user table

       $sql = "SELECT * FROM users WHERE status ='1' ";
       $allStd = mysqli_query($db, $sql);
       //SERIAL
       $i=0;

       while( $row = mysqli_fetch_assoc($allStd) ){
           
           $id       = $row['id'];
           $name     = $row['name'];
           $email    = $row['email'];
           $phone    = $row['phone'];
           $address  = $row['address'];
           $gender   = $row['gender'];
           $joindate = $row['joindate'];
           //SERIAL
           $i++; 
    ?>

    <tr>
      <th scope="row"><?php echo $i; ?></th>
      <td><?php echo $name; ?></td>
      <td><?php echo $email; ?></td>
      <td><?php echo $phone; ?></td>
      <td><?php echo $address; ?></td>
      <td>
        <?php

         if( $gender == 1 ){ ?>
         <span class="badge badge-success">Male</span>
         <?php }
         else if( $gender == 2 ) { ?>
         <span class="badge badge-success">Female</span>
          <?php }
          else { ?>
           <span class="badge badge-warning">No-data</span>
        <?php }

        ?>
      </td>
      <td><?php echo $joindate; ?></td>
      <td>
        <div class="action-bar">
          <ul>
            <li><a href="editStd.php?update=<?php echo $id; ?>"><i? class="fa fa-edit"></i></a></li>
            <li><a href="" data-toggle="modal" data-target="#deleteModal<?php echo $id; ?>"><i class="fa fa-trash"></i></a></li>
          </ul>
          
        </div>
      </td>
    </tr>

    <!-- Modal -->
<div class="modal fade" id="deleteModal<?php echo $id; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Are You Sure?</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-center">
          <form action="" method="POST">
        <button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
          <input type="hidden" name="stdID" value="<?php echo $id; ?>">
          <button type="submit" name="deleteStd" class="btn btn-danger">Confirm</button> 
        </form> 
        
    </div>
    </div>
  </div>
</div>

     <?php } 
     ?>

    

    

  </tbody>

</table>

           <!--Table Finish --> 
           
         </div>
         <div class="col-md-12 text-center">
           <a href="addStd.php" class="btn btn-primary">Register New Student</a>
         </div>
       </div>
     </div>
   </section>


   <?php
     if (isset($_POST['deleteStd'])){
     $deleteID = $_POST['stdID'];


     //DELETE SQL

     $sql = "UPDATE users SET status='0' WHERE id = '$deleteID'";
     //$sql = "DELETE FROM users WHERE id = '$deleteID'";
     $deleteTheUser = mysqli_query($db, $sql);
     if ( $deleteTheUser ){
          header("Location: index.php");
            }
         else{
            die("MySQLi Connectiopn Failed." . mysqli_error($db));
             }

   }
   ?>


   <?php
   include "inc/footer.php"
?>