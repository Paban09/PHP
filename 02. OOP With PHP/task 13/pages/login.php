<?php include "header.php"?>

    <section class="py-5">
       <div class="row">
           <div class="col-md-6 mx-auto">
               <div class="card ">
                   <p class="text-center"><?php echo isset($message) ? $message : ''; ?></p>
                   <div class="card-header">Login Form</div>
                   <div class="card-body">


                       <form action="action.php" method="post">

                           <div class="row mb-3">
                               <div class="col-md-3">Email Address</div>
                               <div class="col-md-9">
                                   <input type="email" name="email" class="form-control" />
                               </div>
                           </div>

                           <div class="row mb-3">
                               <div class="col-md-3">Password</div>
                               <div class="col-md-9">
                                   <input type="password" name="password" class="form-control" />
                               </div>
                           </div>

                           <div class="row mb-3">
                               <div class="col-md-3"></div>
                               <div class="col-md-9">
                                   <input type="submit" name="login_btn" class="btn btn-success" value="Login" />
                               </div>
                           </div>

                       </form>


                   </div>
               </div>
           </div>
       </div>
    </section>

<?php include "footer.php"?>