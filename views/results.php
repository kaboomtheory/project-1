<?php include 'partials/header.php'; ?>
<pre>
  <?php //print_r($forecast); ?>
</pre>
<main class="container py-5 text-center">
  <div class="text-left py-5 mx-auto" style="max-width: 320px;">
    <?php include 'partials/form.php'; ?>
  </div>

  <div class="row">

    <h4 class="col-12">
    The weather outside is feeling <?php 
    if ($tempy >= 0 && $tempy <= 99){ 
      echo '19';
    } else {
      echo '20';
    } ?><?php echo round($forecast['currently']['temperature']); ?>
    </h4>
  </div>
  <div class="row">
    <div class= "col-6 p-1 my-5 mx-auto"> 
    <p class="mb-0"> <?php echo $place; ?></p>

    <p class="lead text-bold m-0">
      <h2 class="display-1">
        <?php echo round($forecast['currently']['temperature']); ?>&deg;
      </h2>
    </p> 
    <p>Wind Speed:<?php echo ($forecast['currently']['windSpeed']); ?> MPH</p>
    <p>Humidity:<?php echo ($forecast['currently']['humidity']); ?>%</p>
    <p><?php echo ($forecast['currently']['summary']); ?></p>
    <p>Wind Gust<?php echo ($forecast['currently']['windGust']); ?> knots</p>
    

    <?php
    $tempy = round($forecast['currently']['temperature']);

    if ($tempy >= 20 && $tempy <= 29){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/1pPjrMpA8yQsIaz8yiEy2z" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 30 && $tempy <= 39){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/5aVD2DChEmGRSIstpV5DCy" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 40 && $tempy <= 49){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/2KpezSr1GQ1mJ64FI6sw7c" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 50 && $tempy <= 59){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/3hl9Fh8LWM0lzORriOVrYp" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 60 && $tempy <= 69){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/3GVmqypjaOsgMnaKNtjFYD" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 70 && $tempy <= 79){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/7dy6Z4PDy1iD5TM1jhBQIA" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 80 && $tempy <= 89){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/7j6tkocdH3tMPzFodZGeZL" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 90 && $tempy <= 99){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/79uigBpL6uU5KWwCnAAtSN" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 10 && $tempy <= 19){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/1b2H7DRjfDNIx4d4aVlwxu" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 0 && $tempy <= 9){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/6h14l2sqOD8nwejCGwmujZ" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    } elseif($tempy >= 100 && $tempy <= 109){
      $condition = '<iframe src="https://open.spotify.com/embed/user/frazze/playlist/6PMe2vPm0pTWW1PXtoEjTY" width="300" height="380" frameborder="0" allowtransparency="true"></iframe>';
    }

    ?>
    </div>
    <div class="col-6 p-4 my-5 mx-auto">
    <p style = 'font-weight: 400'>Here's some songs from that decade ;)</p><?php echo $condition; ?>
  </div>
  </div>


<!--   <div class="card p-4 my-5 mx-auto">
    <p class="lead text-bold m-0"><?php echo $place; ?></p>
    <h2 class="display-1 mb-0">
      <?php echo round($forecast['currently']['temperature']); ?>&deg;
    </h2>
    <p class="lead">
      <?php echo $forecast['currently']['summary']; ?>
    </p>
    <p class="lead">
      Wind Speed: <?php echo round($forecast['currently']['windSpeed']); ?> MPH
    </p>
  </div> -->

  <video autoplay loop id="video-background" muted plays-inline>
    <source src="assets/dist/images/cloudsdown.mp4">
  </video>
</main>
<?php include 'partials/footer.php'; ?>