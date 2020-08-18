   <?php
   include "inc/header.php"
   ?>
   <section>
     <div class="container">
       <div class="row">
         <div class="col-md-6 offset-md-3">
           <h3 class="text-center">Add New Student</h3>

           <form action="" method="POST">

             <div class="form-group">
               <label>Full Name</label>
                <input type="text" name="name" class="form-control" required="required">
             </div>

             <div class="form-group">
               <label>Email Address</label>
                <input type="email" name="email" class="form-control" required="required">
             </div>

             <div class="form-group">
               <label>Phone No.</label>
                <input type="text" name="phone" class="form-control" required="required">
             </div>

             <div class="form-group">
               <label>Address</label> 
                <input type="text" name="address" class="form-control" required="required">
             </div>

             <div class="form-group">
               <label>Gender</label> 
                <select class="form-control" name="gender">
                  <option>Please Select The Gender</option>
                  <option value="1">Male</option>
                  <option value="2">Female</option>
                </select>
             </div>


             <div class="form-group">
                <input type="submit" name="register" class="btn btn-primary">
             </div>
             
           </form>

           <?php
              if( isset( $_POST['register'])){
                $name = $_POST['name'];
                $email = $_POST['email'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $gender = $_POST['gender'];
//creae a data into our  database.
                $sql = "INSERT INTO users (name,email,phone,address,gender,status,joindate) VALUES ('$name','$email','$phone','$address','$gender',1,now())";

                $addStd = mysqli_query($db, $sql);
                if ($addStd){
                  header("Location: index.php");
                }
                else{
                  die("MySQLi Connectiopn Failed." . mysqli_error($db));
                }


              } 

            ?>

          
           
         </div>
       </div>
     </div>
   </section>
    <?php
   include "inc/footer.php"
?>