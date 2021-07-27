<!DOCTYPE html>
<html>
<head>
    <title>COVID-19 Statistics - India</title>
    <?php include 'links/links.php'; ?>
    <?php include 'css/style.php'; ?>
</head>
<body onload="fetch()">

<nav class="navbar navbar-expand-lg nav-style p-3 bg-primary">
  <a class="navbar-brand pl-4" href="#">COVID-19 Statistics - India</a>
  <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav ml-auto pr-4">
      <li class="nav-item active">
        <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
      </li>
      </li>
        <a class="nav-link" href="worldupdates.php">World COVID Updates</a>
      </li>
      </li>
        <a class="nav-link" href="indiaupdates.php">India COVID Updates</a>
      </li>
    </ul>
  </div>
</nav>

<section class="covid-update container-fluid">
  <div class="mb-5 mt-5 fist">
    <h3 class="text-center">COVID-19 LIVE UPDATES - INDIA</h3>
  </div>
  <div class="table-responsive">
    <table class="table table-bordered table-striped text-center">
      <tr>
        <th>State</th>
        <th>Confirmed</th>
        <th>Active</th>
        <th>Recovered</th>
        <th>Deaths</th>
        <th>Last Updated</th>
      </tr>

      <?php

      $data = file_get_contents('https://api.covid19india.org/data.json');
      $covidlive = json_decode($data, true);

      $statesCount = count($covidlive['statewise']);

      $i = 1;
      while ($i < $statesCount) {
        ?>
        <?php if ($covidlive['statewise'][$i]['state']!='State Unassigned'):?>

        <tr>
          <td><?php echo $covidlive['statewise'][$i]['state'] ?></td>
          <td><?php echo $covidlive['statewise'][$i]['confirmed'] ?></td>
          <td><?php echo $covidlive['statewise'][$i]['active'] ?></td>
          <td><?php echo $covidlive['statewise'][$i]['recovered'] ?></td>
          <td><?php echo $covidlive['statewise'][$i]['deaths'] ?></td>
          <td><?php echo $covidlive['statewise'][$i]['lastupdatedtime'] ?></td>
        </tr>

        <?php endif; ?>
        <?php
        $i++;
      }

      ?>

    </table>
  </div>
</section>

<div class="container scrolltop float-right pr-5">
  <i class="fa fa-arrow-up" onclick="topFunction()" id="myBtn"></i>
</div>

<footer class="mt-5">
  <div class="footer-style text-white text-center">
    <p>Copyright by Praveen Francis</p>
  </div>
</footer>

<script type="text/javascript">

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
