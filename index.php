
        <?php require 'header.php' ?>
        <!-- Header-->
       
        <!-- <nav class="navbar navbar-expand-lg navbar-light bg-light">
        </nav> -->

        <!-- Section-->
        <?php require 'filter.php' ?>
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                    <?php
                    $condition="";
                    if (isset($_POST['submit'])) {
                    
                      $search_location = $_POST['search_location'];
                      $search_price = $_POST['search_price'];
                      $search_type = $_POST['search_type'];
                     
                      if (isset($_POST['search_location']) && (!empty($_POST['search_location']))){

                        $condition.=" and room_srch_key_words like '%".$_POST['search_location']."%' ";
                      }
                      if (isset($_POST['search_price']) && (!empty($_POST['search_price']))){

                        $condition.=" and room_price <= '".$_POST['search_price']."' ";
                      }
                      if (isset($_POST['search_type']) && (!empty($_POST['search_type']))){

                        $condition.=" and room_type = '".$_POST['search_type']."' ";
                      }

                    //   $query="select *from tbl_user where user_mobile='".$user_mobile."' and user_password='". md5($user_password) ."' and isDeleted='0'";
                    }
                        $query="select *from tbl_room where isDeleted='0' ".$condition." and isBooked='0'";
                        // echo $query;
                        // exit;
                        $run=mysqli_query($con,$query);
                         while($v=mysqli_fetch_array($run)){
                        ?>
                        <div class="col mb-5">
                        <div class="card h-100">
                            <!-- Product image-->
                            <img class="card-img-top" src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSYLM7wYruMxNUKBrjNUAbm9Ou3UcRYXv9_QA&usqp=CAU" alt="..." />
                            <!-- Product details-->
                            <div class="card-body p-4">
                                <div class="text-center">
                                    <!-- Product name-->
                                    <h5 class="fw-bolder"><?php echo $v['room_title'];?></h5>
                                    <!-- Product price-->
                                    <b>Price:</b> <?php echo $v['room_price'];?>
                                    <br>
                                    <b>Type:</b> <?php if($v['room_type']=='1')echo "Single Room";elseif($v['room_type']=='2')echo "Double Room";else echo"Family Room";?>
                                    <br>
                                    <b>Location:</b> <?php echo $v['room_location'];?>
                                </div>
                            </div>
                            <!-- Product actions-->
                            <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                <div class="text-center"><a class="btn btn-outline-dark mt-auto" href="<?php echo'booking.php?room_id='.base64_encode($v['room_id']);?>">Book Now</a></div>
                            </div>
                        </div>
                    </div>
                        <?php
                        }
                    ?>
                    

                   
                   
                </div>
            </div>
        </section>
        <?php require 'footer.php' ?>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
