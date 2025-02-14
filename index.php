<?php
include('transport.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>transport Hub</title>
  <link rel="stylesheet" href="../css/index18.css">
  <link rel="website icon" type="png" href="../data/logo1.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <script>
    if (window.history.replaceState) {
      window.history.replaceState(null, null, window.location.href);
    }
  </script>
</head>

<body>
  <!-- NAVIGATION--BARS- -----------header------------- -->
  <section class="chat">
    <a class="watt"
      href="https://wa.me/+917980731171?text=Hello Transport Hub. I am interested in your Transport services."
      target="_blank">
      <div class="w-chat">
        <i class="fa fa-whatsapp" aria-hidden="true"></i>
        <p>Chat Now !</p>
      </div>
    </a>
  </section>
  <header class="header">
    <nav class="nav">
      <div class="nav-data flex">
        <div class="nav-left">
          <div class="logo">
            <img src="../data/logo1.png">
          </div>
          <div class="nameplate">
            <div class="c-name">
              <h1>TRANSPORT <span>HUB</span></h1>
            </div>
          </div>
        </div>
        <div class="nav-toggle" id="nav-toggle">
          <i class="fa fa-bars bar" aria-hidden="true"></i>
          <i class="fa fa-times close" aria-hidden="true"></i>
        </div>
      </div>
      <!---------------------- ----toggle end------------- -->
      <!-- ------------------------nav-menu----------------------->
      <div class="nav-menu" id="nav-menu">
        <ul class="nav-list">
          <li><a href="index.php" class="nav-link">Home</a></li>
          <li><a href="order.php" class="nav-link">Book a Delivery</a></li>
          <!--------------------drop-down---------------- -->
          <li class="dropdown-item">
            <div class="nav-link">
              Shipping <i class="fa fa-chevron-down dropdown-arrow" aria-hidden="true"></i>
            </div>
            <ul class="dropdown-menu">
              <li><a href="https://www.dtdc.in" class="dropdown-link">DTDC</a></li>
              <li><a href="https://www.fedex.com/en-in/home.html" class="dropdown-link">fedEx</a></li>
              <li><a href="https://www.dhl.com/in-en/home.html" class="dropdown-link">DHL</a></li>
              <li><a href="https://www.ups.com/in/en/Home.page" class="dropdown-link">UPS</a></li>
              <li><a href="https://www.ecomexpress.in" class="dropdown-link">Ecom Express</a></li>
              <li><a href="https://www.delhivery.com" class="dropdown-link">Delhivery</a></li>
              <li><a href="https://www.tciexpress.in" class="dropdown-link">TCI Express</a></li>
              <li><a href="https://www.safexpress.com" class="dropdown-link">Safexpress</a></li>
              <li><a href="https://www.vrlgroup.in" class="dropdown-link">VRL Logistics</a></li>
              <li><a href="https://borzodelivery.com/in" class="dropdown-link">WeFast</a></li>
              <li><a href="https://www.dpworld.com/" class="dropdown-link">DP WORLD</a></li>
            </ul>
          </li>
          <!-- -----------dropdown-1---------- -->
          <li class="dropdown-item">
            <div class="nav-link">
              Tracking <i class="fa fa-chevron-down dropdown-arrow" aria-hidden="true"></i>
            </div>
            <ul class="dropdown-menu">
              <li><a href="ref-id.php" class="dropdown-link">Track Your Product</a></li>
              <li><a href="https://ba.trackon.in" class="dropdown-link">Trackon Courier</a></li>
              <li><a href="https://ship.xpressbees.com/users/login/customer" class="dropdown-link">Xpressbees</a></li>
            </ul>
          </li>
          <li><a href="review.php" class="nav-link">Review</a></li>
          <li><a href="dashboard/login.php" class="nav-link">Login</a></li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- --------transport banner---------------------- -->
  <section class="banner-section">
    <div class="banner-container">
      <img src="../data/transport1.jpg">
    </div>
  </section>
  <!-- -------------------------------history of company--------------------------- -->
  <section class="history-section">
    <div class="photo">
      <img src="../data/sir.jpg">
    </div>
    <div class="para">
      <h1>History Of The Company</h1>
      <p>ROHIT SHARMA is the founder and owner of Transport Hub, a leading transportation service specializing in
        [e.g., logistics, passenger transport, freight, etc.]. With 10 years in the
        industry, ROHIT SHARMA has built a reputation for reliability, efficiency, and customer satisfaction. Under
        their leadership, Transport Hub has expanded its operations, integrating modern technology and sustainable
        practices to enhance service quality. Their commitment to innovation and excellence continues to drive the
        company's growth and success in the transport sector.
      </p>
    </div>
  </section>
  <section class="mv-section">
    <div class="mv-container">
      <div class="mission">
        <img src="../data/mission-1.png">
        <h1>Mission</h1>
        <p>"At TRANSPORT HUB, our mission is to provide safe, reliable, and efficient transportation solutions tailored
          to our customers' needs. We are committed to delivering exceptional service through innovation,
          sustainability, and customer-focused operations. Our goal is to ensure timely and secure transport while
          maintaining the highest industry standards."
        </p>

      </div>
      <div class="vission">
        <img src="../data/vision.png">
        <h1>Vission</h1>
        <p>"Our vision is to become a leading transportation company recognized for excellence, sustainability, and
          innovation. We aim to revolutionize the transport industry by leveraging cutting-edge technology, reducing
          environmental impact, and consistently exceeding customer expectations. Through continuous improvement and
          dedication, we strive to shape the future of transportation."
        </p>
      </div>
    </div>
  </section>
  <!-- ----------book now---------- -->
  <section class="book-section">
    <div class="book-container">
      <div class="book-left">
        <a href="order.php">
          <h1>Book Now</h1>
          <img class="img-1" src="../data/book.png">

        </a>
      </div>
      <div class="book-right">
        <a href="ref-id.php">
          <h1>Track Your Shipment</h1>
          <img class="img-2" src="../data/track.png">

        </a>
      </div>
    </div>
  </section>
  <section class="ship-section">
    <h1 class="heading">Services Available </h1>
    <div class="ship-container">
      <div class="ship-card">
        <img src="../data/air.jpg">
        <h1>Air Freight</h1>
      </div>
      <div class="ship-card">
        <img src="../data/road.png">
        <h1>Road Freight</h1>
      </div>
      <div class="ship-card">
        <img src="../data/train.jpg">
        <h1>Train Freight</h1>
      </div>
      <div class="ship-card">
        <img src="../data/ship.jpg">
        <h1>Ocean Freight</h1>
      </div>
    </div>
  </section>
  <!-- -----------link-section------------- -->
  <section class="link-section">
    <h1 class="heading">Fast Delivery Links </h1>
    <div class="link-container">
      <div class="links img-1">
        <a href="https://www.dtdc.in"><img src="../data/dtdc-1.png"></a>
      </div>
      <div class="links img-2">
        <a href="https://www.dhl.com/in-en/home.html"><img src="../data/dhl-1.png"></a>
      </div>
      <div class="links img-3">
        <a href="https://www.ups.com/in/en/home"><img src="../data/ups.png"></a>
      </div>
      <div class="links img-4">
        <a href="https://www.fedex.com/en-in/home.html"><img src="../data/fedex.png"></a>
      </div>
      <div class="links img-5">
        <a href="https://www.xpressbees.com/"><img src="../data/xpress-1.png"></a>
      </div>
      <div class="links img-6">
        <a href="https://www.delhivery.com/">
          <img src="../data/delhi-1.png">
        </a>
      </div>
      <div class="links img-7">
        <a href="https://www.aramex.com/in/en">
          <img src="../data/aramex.png">
        </a>
      </div>
      <div class="links img-8">
        <a href="https://www.dpworld.com/">
          <img src="../data/dp.png">
        </a>
      </div>
      <div class="links img-9">
        <a href="https://rivigotracking.com/">
          <img src="../data/revigo.png">
        </a>
      </div>
    </div>
  </section>
  <form method="POST">
    <section class="ask-section">
      <div class="ask-container">
        <h1 class="ask-heading">Feel free to ask anything</h1>
        <div class="feed-name">
          <input type="text" placeholder="Full Name" name="name">
        </div>
        <div class="feed-name">
          <input type="Phone number" placeholder="Phone-Number" name="phone">
        </div>
        <div class="feed-name">
          <input type="text" placeholder="Email" name="email">
        </div>
        <div class="feed-name">
          <textarea placeholder="Message" name="message"></textarea>
        </div>

        <div class="send"><button name="submit">Send Message</button></div>
      </div>
      <div class="map-container">
        <h1 class="map-heading">Where you can find us</h1>
        <div class="map-name">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <p>24 Brojodulal St. Malapara, Santoshpara,Near,Putey Kolkata Kali Temple Kol-700006</p>
        </div>
        <div class="map-name">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <p>kashmira app. north subhas polli, hoogly, champadanga-dankuni road dankuni-711205</p>
        </div>
        <div class="map-name">
          <i class="fa fa-map-marker" aria-hidden="true"></i>
          <p>105/31grish ghoshroad,opp sohanlal school, liluah, howrah-711204</p>
        </div>
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.8452572491074!2d88.54253787514534!3d22.39719027961703!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a02123d9d9a6c01%3A0xc94b43a2f4658d8c!2sCanning%20Government%20Polytechnic%20College!5e0!3m2!1sen!2skr!4v1717936936089!5m2!1sen!2skr"
          style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>
    </section>
  </form>
  <!-- --------------------review-rating---------------- -->
  <section class="review-section">
    <form method="POST" enctype="multipart/form-data">
      <h1 class="review-heading">Review & Rating</h1>
      <div class="review-container">
        <div class="r-first">
          <p>
            <span class="rate">4.6/</span>5
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star" aria-hidden="true"></i>
            <i class="fa fa-star-half-o" aria-hidden="true"></i>
          </p>
          <?php
          $sql = "SELECT COUNT(*) AS total_reviews FROM `review-data`";
          $result = $con->query($sql);

          if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            echo "<p>Reviewed by $row[total_reviews] Users</p>";
          } else {
            echo "No reviews found";
          }
          ?>
        </div>
        <div class="last">
          <div class="right">
            <div class="circle">
              <img src="../data/fd1.png">
            </div>
            <div class="f-d-heading">
              <h1>Delivery(100%)</h1>
            </div>
          </div>
          <div class="right">
            <div class="circle-2">
              <img src="../data/response.png">
            </div>
            <div class="f-d-heading">
              <h1>Response(100%)</h1>
            </div>
          </div>
          <div class="right">
            <div class="circle-3">
              <img src="../data/trust.png">
            </div>
            <div class="f-d-heading">
              <h1>Trust(100%)</h1>
            </div>
          </div>
          <div class="right">
            <div class="a-review under" data-name="1">
              <i class="fa fa-star" aria-hidden="true"></i>
              <p>Add Review</p>
            </div>
          </div>
        </div>
      </div>
      <div class="popup">
        <div class='popup_item' data-target='1'>
          <i class='fa fa-times' aria-hidden='true'></i>
          <div class="r-heading">
            <h1>Costemer Review Form</h1>
          </div>
          <div class="review-box">
            <div class="input-name">
              <label>Full name : <span>*</span></label>
              <input type="text" placeholder="enter name" name="name" required></input>
            </div>
            <div class="input-name">
              <label>State : <span>*</span></label>
              <input type="text" placeholder="enter name" name="state" required></input>
            </div>
            <div class="input-name">
              <label>City : <span>*</span></label>
              <input type="text" placeholder="enter name" name="city" required></input>
            </div>
            <div class="input-name">
              <label>Upload Photo : <span>*</span></label>
              <input type="file" name="image" required>
            </div>
            <div class="input-name">
              <label>Select Rating : <span>*</span></label>
              <div class="selectbox">
                <select class="select-name" name="rate" required>
                  <option selected value=''>Select Rating</option>
                  <option value="1">1 - STAR</option>
                  <option value="2">2 - STAR</option>
                  <option value="3">3 - STAR</option>
                  <option value="4">4 - STAR</option>
                  <option value="5">5 - STAR</option>
                </select>
              </div>
            </div>
            <div class="input-name">
              <label>Discription : <span>*</span></label>
              <textarea placeholder="Message" name="message"></textarea>
            </div>
          </div>
          <div class='submit'>
            <input type="submit" id="submit" value="Submit Review" name="review">
          </div>
        </div>
      </div>
    </form>
    <div class="rating-container">
      <?php
      $query = "SELECT * FROM `review-data` ORDER BY `id` DESC";
      $result = mysqli_query($con, $query);
      while ($row_fetch = mysqli_fetch_array($result)) {
        echo "
      <div class='rating-item'>
        <div class='both'>
          <div class='r-l'>
            <img src='$row_fetch[photo]'>
            <div class='n-a'>
              <h1>$row_fetch[name]</h1>
               <p>$row_fetch[city], $row_fetch[state]</p>
            </div>
          </div>
          <div class='r-r'>
            <div class='date'>
              <p>date :$row_fetch[date]</p>
            </div>
            <div class='star'>
            <p>$row_fetch[rate]</p>
              <i class='fa fa-star' aria-hidden='true'></i>
              
            </div>
          </div>
        </div>
        <div class='rating-para'>
          <p>$row_fetch[message]</p>
        </div>
      </div>
      ";

      }
      ?>
    </div>

    <div class="see-more">
      <a href="review.php">See-More</a>
    </div>
  </section>
  <!-- ----------------------------------footer-start--------------------------------- -->
  <footer class="footer-section">
    <div class="footer-container">
      <div class="first">
        <div class="footer-heading">
          <h1>Company</h1>
        </div>
        <div class="c-n">
          <h1>TRANSPORT <span>HUB</span></h1>
          <img src="../data/logo1.png">
        </div>
      </div>
      <div class="second">
        <div class="footer-heading">
          <h1>Contract</h1>
        </div>
        <div class="contract-list">
          <a href="tel:+919123980840">Phone No : +91 9038047376</a>
          <a
            href="https://mail.google.com/mail/?view=cm&fs=1&to=flcs9038@gmail.com&su=Subject&body=Hello Sir ,I am from Transport Hub.What I do for you?">Email
            : flcs9038@gmail.com</a>
        </div>
      </div>
      <div class="third">
        <div class="footer-heading">
          <h1>Follow us on</h1>
        </div>
        <div class="link">
          <a id="face" href="https://m.facebook.com/profile.php/?id=61556108256050&name=xhp_nt_"><i
              class="fa fa-facebook" aria-hidden="true"></i>
          </a>
          <a id="inst" href="https://www.instagram.com/canninggovernmentpolytechnic?igsh=MWNpNDRsb2NoeDBwZg=="><i
              class="fa fa-instagram" aria-hidden="true"></i></a>
          <a id="twit" href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a>
          <a id="linkin" href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a>
          <a id="you-tube"
            href="https://wa.me/+917980731171?text=Hello Transport Hub. I am interested in your Transport services."
            target="_blank"><i class="fa fa-whatsapp" aria-hidden="true"></i></a>
        </div>
      </div>


    </div>
  </footer>
  <script src="../js/index.js"></script>
  <script src="../js/popup.js"></script>
</body>

</html>
<?php
if (isset($_POST['submit'])) {

  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $message = $_POST['message'];
  $date = date("d/m/Y");

  $query = "INSERT INTO `user-feedback`(`full_name`, `phone`, `email`, `date`,`message`) VALUES ('$name','$phone','$email','$date','$message')";
  if (mysqli_query($con, $query)) {
    echo "<script>alert('Your message is Successfully Send');</script>";
  } else {
    echo "<script>alert('your message is unsuccefull!');</script>";
  }
}
if (isset($_POST['review'])) {

  $img_loc = $_FILES['image']['tmp_name'];
  $img_name = $_FILES['image']['name'];
  $name = $_POST['name'];
  $state = $_POST['state'];
  $city = $_POST['city'];
  $rate = $_POST['rate'];
  $message = $_POST['message'];
  $date = date("d/m/Y");

  $img_ext = pathinfo($img_name, PATHINFO_EXTENSION);
  // ----------------file type with name-------------
  $img_des = "review-data/" .$name. $img_name;

  if (($img_ext != 'jpg') && ($img_ext != 'png') && ($img_ext != 'jpeg') && ($img_ext != 'webp') && ($img_ext != 'avif')) {
    echo "<script>alert('invalid image extension');</script>";
  }
  $query = "INSERT INTO `review-data`(`name`, `state`, `city`, `photo`, `rate`, `date`,`message`) VALUES ('$name','$state','$city','$img_des','$rate','$date','$message')";
  if (mysqli_query($con, $query)) {
    move_uploaded_file($img_loc, $img_des);
    echo "<script>alert('succefull');</script>";
  } else {
    echo "<script>alert('unsuccefull!');</script>";
  }


}
?>