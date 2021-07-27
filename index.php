<!DOCTYPE html>
<html>
<head>
    <title>COVID-19 Statistics</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body>

<nav class="navbar navbar-expand-lg nav-style p-3 bg-primary">
  <a class="navbar-brand pl-4" href="#">COVID-19 Statistics</a>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#about">About</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#symptoms">Symptoms</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#prevent">Prevention</a>
      </li>
      </li>
        <a class="nav-link" href="worldupdates.php">World COVID Updates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="indiaupdates.php">India COVID Updates</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
    </ul>
  </div>
</nav>

<div class="main-header mt-5 pt-5">
  <div class="row w-100 h-100">
    <div class="col-lg-5 col-md-5 col-12 order-lg-1 order-2">
      <div class="left-side w-100 h-100 d-flex justify-content-center align-items-center first">
        <img src="images/hands2.jpg" alt="Stay Together" width="375" height="375">
      </div>
    </div>
    <div class="col-lg-7 col-md-7 col-12 order-lg-2 order-1">
      <div class="right-side w-100 h-100 d-flex justify-content-center align-items-center">
        <h1>Let's Stay Safe and Fight Together Against Cor<span class="corona-spin"><img src="images/corona.png" width="75" height="75"></span>na Virus</h1>
      </div>
    </div>
  </div>
</div>

<section class="covid-update m-5 p-5">
  <div class="mb-3 mt-5 pt-5">
    <h3 class="text-center">COVID-19 GLOBAL UPDATES</h3>
  </div>
  <?php

  $data = file_get_contents('https://api.covid19api.com/summary');
  $globallive = json_decode($data, true);

  ?>
  <div class="d-flex justify-content-around align-items-center text-center">
    <div class="m-5 p-5">
      <h1 class="count"><?php echo $globallive['Global']['NewConfirmed'] ?></h1>
      <p>New Confirmed</p>
    </div>
    <div class="m-5 p-5">
      <h1 class="count"><?php echo $globallive['Global']['NewRecovered'] ?></h1>
      <p>New Recovered</p>
    </div>
    <div class="m-5 p-5">
      <h1 class="count"><?php echo $globallive['Global']['NewDeaths'] ?></h1>
      <p>New Deaths</p>
    </div>
  </div>
  <div class="d-flex justify-content-around align-items-center text-center">
    <div class="m-5 p-5">
      <h1 class="count"><?php echo $globallive['Global']['TotalConfirmed'] ?></h1>
      <p>Total Confirmed</p>
    </div>
    <div class="m-5 p-5">
      <h1 class="count"><?php echo $globallive['Global']['TotalRecovered'] ?></h1>
      <p>Total Recovered</p>
    </div>
    <div class="m-5 p-5">
      <h1 class="count"><?php echo $globallive['Global']['TotalDeaths'] ?></h1>
      <p>Total Deaths</p>
    </div>
  </div>
</section>

<div class="container-fluid bg-light pt-5 pb-5 mb-5 mt-5 first-con" id="about">
  <div class="pt-4 pb-4 first"></div>
  <div class="section-header text-center mb-5 mt-5">
    <h1 > About COVID-19 </h1>
  </div>
  <div class="row">
    <div class="col-lg-1 col-md-1">

    </div>
    <div class="col-lg-5 col-md-5 col-12">
      <img src="images/about.jpg" class="img-fluid">
    </div>
    <div class="col-lg-5 col-md-5 col-12 what-text">
      <h2>What is COVID-19?</h2>
      <p>Coronavirus disease (COVID-19) is an infectious disease caused by a newly discovered coronavirus. Most people infected with the COVID-19 virus will experience mild to moderate respiratory illness and recover without requiring special treatment.  Older people, and those with underlying medical problems like cardiovascular disease, diabetes, chronic respiratory disease, and cancer are more likely to develop serious illness.</p>
      <p>Corona viruses are a large family of viruses which may cause illness in animals or humans. In humans, several coronaviruses are known to cause respiratory infections ranging from the common cold to more severe diseases such as Middle East Respiratory Syndrome (MERS) and Severe Acute Respiratory Syndrome (SARS). The most recently discovered coronavirus causes coronavirus disease COVID-19.</p>
    </div>
  </div>
  <div class="pt-5 pb-5 last"></div>
</div>

<div class="container-fluid pt-5 mt-5 mb-5 pb-5 first-con" id="symptoms">
  <div class="pt-2 pb-2 mb-5 mt-4 first"></div>
  <div class="section-header text-center mb-5 mt-5">
    <h1> Symptoms </h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/cough.jpg" width="120" height="120" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/fever.jpg" width="120" height="120" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/headache.jpg" width="120" height="120" class="img-fluid"></figure>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/chestpain.jpg" width="120" height="120" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/throat.jpg" width="120" height="120" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/nose.jpg" width="120" height="120" class="img-fluid"></figure>
      </div>
    </div>
  </div>
  <div class="pt-4 pb-5 last"></div>
</div>

<div class="container-fluid pt-5 pb-5 bg-light mt-5 mb-5 first-con" id="prevent">
  <div class="pt-4 pb-4 first"></div>
  <div class="section-header text-center mb-5 mt-5">
    <h1> Prevention </h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/mask.jpg" width="150" height="150" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/wash.jpg" width="150" height="150" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/cover.jpg" width="150" height="150" class="img-fluid"></figure>
      </div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/touch.jpg" width="150" height="150" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/keep.jpg" width="150" height="150" class="img-fluid"></figure>
      </div>
      <div class="col-lg-4 col-md-4 col-12">
        <figure class="text-center"><img src="images/stay.jpg" width="150" height="150" class="img-fluid"></figure>
      </div>
    </div>
  </div>
  <div class="pt-5 pb-5 mt-5 last"></div>
</div>

<div class="container-fluid pb-5" id="contact">
  <div class="section-header text-center mb-5 mt-5">
    <h1> Contact For More Info </h1>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-lg-8 offset-lg-2 col-12">
        <form action="" method="post">
          <div class="form-group">
            <label>Name:</label>
            <input type="text" class="form-control" name="name" placeholder="Enter Your Name" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label>Email Address:</label>
            <input type="email" class="form-control" name="email" placeholder="name@example.com" required autocomplete="off">
          </div>
          <div class="form-group">
            <label>Mobile Number:</label>
            <input type="number" class="form-control" name="mobile" placeholder="Enter Your Mobile Number" autocomplete="off" required>
          </div>
          <div class="form-group">
            <label>Select Symptoms:</label><br>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="Cold" name="symptoms[]">
              <label class="form-check-label" for="inlineCheckbox1">Cold</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="Fever" name="symptoms[]">
              <label class="form-check-label" for="inlineCheckbox2">Fever</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="Breathlessness" name="symptoms[]">
              <label class="form-check-label" for="inlineCheckbox3">Difficulty In Breathing</label>
            </div>
            <div class="form-check form-check-inline">
              <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="Weakness" name="symptoms[]">
              <label class="form-check-label" for="inlineCheckbox4">Feeling Weak</label>
            </div>
          </div>
          <div class="form-group">
            <label for="exampleFormControlTextarea1">Describe How You Are Feeling:</label>
            <textarea class="form-control" id="describe" rows="3" name="message"></textarea>
          </div>
          <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
  <div class="footer-style text-white text-center">
    <p>Copyright by Praveen Francis</p>
  </div>
</footer>

<script type="text/javascript">

  $('.count').counterUp({
    delay:10,
    time:3000
  })

  myButton = document.getElementById('myBtn');
  window.onscroll = function() {
    scrollFunction()
  };
  function scrollFunction() {
    if(document.body.scrollTop > 100 || document.documentElement.scrollTop > 100) {
      myButton.style.display = "block";
    }else{
      myButton.style.display = "none";
    }
  }
  function topFunction() {
    document.body.scrolltop = 0;
    document.documentElement.scrollTop = 0;
  }

</script>

</body>
</html>

<?php
include 'dbcon.php';
if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $symptoms = $_POST['symptoms'];
    $message = $_POST['message'];

    $chk = "";
    foreach ($symptoms as $chk1) {
      $chk .= $chk1.",";
    }

    $insertquery = "insert into covidcases(name, email, mobile, symptoms, message) values('$name', '$email', '$mobile', '$chk', '$message')";

    $query = mysqli_query($con, $insertquery);

    if($query){
    ?>
    <script>
      alert("Successful!");
    </script>
    <?php
    }else{
    ?>
    <script>
      alert("Try Again Later!");
    </script>
    <?php
    }
}
?>
