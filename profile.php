<?php require 'header.php'

?>

<!-- <link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css"> -->
<!-- <script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script> -->
<!-- <script src="//code.jquery.com/jquery-1.11.1.min.js"></script> -->
<!------ Include the above in your HEAD tag ---------->

<div class="container">
    <div class="span3 well">
        <center>
        <a href="#aboutModal" data-toggle="modal" data-target="#myModal"><img src="uploads/sss.jpg" name="aboutme" width="140" height="140" class="img-circle"></a>
        <h3><?php
                if (isset($_SESSION['user_name'])) {
                                            echo $_SESSION['user_name'];
                                    }
        ?></h3>
        <em><b>Mobile number: </b><?php
                if (isset($_SESSION['user_mobile'])) {
                                            echo $_SESSION['user_mobile'];
                                    }
        ?></em>,
        <em><b>Address: </b><?php
                if (isset($_SESSION['user_address'])) {
                                            echo $_SESSION['user_address'];
                                    }
        ?></em><br>
        <em><b>Aadhaar number: </b><?php
                if (isset($_SESSION['user_aadhaar'])) {
                                            echo $_SESSION['user_aadhaar'];
                                    }
        ?></em><br>
        <br>
        <h5>
          <a href="logout.php" style="color:red;text-decoration:none">LogOut</a></h5>
        </center>
    </div>
    <!-- <div class="container">
      <center>

      </center>
    </div> -->
    <!-- Modal -->
    <!-- <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
                    <h4 class="modal-title" id="myModalLabel">More About Joe</h4>
                    </div>
                <div class="modal-body">
                    <center>
                    <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcRbezqZpEuwGSvitKy3wrwnth5kysKdRqBW54cAszm_wiutku3R" name="aboutme" width="140" height="140" border="0" class="img-circle"></a>
                    <h3 class="media-heading">Joe Sixpack <small>USA</small></h3>
                    <span><strong>Skills: </strong></span>
                        <span class="label label-warning">HTML5/CSS</span>
                        <span class="label label-info">Adobe CS 5.5</span>
                        <span class="label label-info">Microsoft Office</span>
                        <span class="label label-success">Windows XP, Vista, 7</span>
                    </center>
                    <hr>
                    <center>
                    <p class="text-left"><strong>Bio: </strong><br>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut sem dui, tempor sit amet commodo a, vulputate vel tellus.</p>
                    <br>
                    </center>
                </div>
                <div class="modal-footer">
                    <center>
                    <button type="button" class="btn btn-default" data-dismiss="modal">I've heard enough about Joe</button>
                    </center>
                </div>
            </div>
        </div>
    </div>
</div> -->

<div class="container">
  <h3>Bookings</h3>
  <?php
  if (isset($_SESSION['msg'])) {
      echo '<pre style="text-align:center;"><b>'.$_SESSION['msg'].'</b></pre>';
      unset($_SESSION['msg']);
  }
  ?>
  <table class="table table-bordered">
    <thead>
      <tr>
        <th>Room Details</th>

        <th>Location</th>
        <th>Booking Date</th>
        <th  style="width: 10px;">List</th>
      </tr>
    </thead>
    <tbody>
        <?php
                        $query="select *from tbl_booking,tbl_room where tbl_booking.room_id = tbl_room.room_id and tbl_booking.isDeleted='0' and tbl_booking.user_id=".$_SESSION['user_id']." ORDER BY tbl_booking.booking_id desc";
                        $run=mysqli_query($con,$query);
                       // echo  $query;
                         while($v=mysqli_fetch_array($run)){
        ?>
      <tr>
        <td><b style="color: brown;"><?php echo $v['room_title'];?></b><br><br>
        <b>Type: </b><?php if($v['room_type']=='1')echo "Single Room";elseif($v['room_type']=='2')echo "Double Room";else echo"Family Room";?>
        <br>
        <b>Price: </b><?php echo $v['room_price'];?>

        <td><?php echo $v['room_location'];?></td>
        <td><?php echo $v['booking_date'];?></td>
        <td style="width: 10px;"> <br><a href="book_user.php?bid=<?php echo $v['booking_id'];?>" data-toggle="modal"><img src="uploads/list.png" width="30" height="30"></a></td>

      </tr>

        <?php
        }
        ?>

    </tbody>
  </table>
</div>
 <?php require 'footer.php' ?>
        <!-- Section-->
