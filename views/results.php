<?php include 'partials/header.php'; ?>
<pre>
  <?php //print_r($forecast); ?>
</pre>
<main class="container py-5 text-center">
  <h1>
    Weather Jamz
  </h1>
  <div class="text-left py-5 mx-auto" style="max-width: 320px;">
    <?php include 'partials/form.php'; ?>
  </div>

  <div class= "card p-1 my-5 mx-auto" style="max-width: 400px;"> 
  <p class="mb-0"> <?php echo $place; ?></p>

  <p>Temperature:<?php echo round($forecast['currently']['temperature']); ?>&deg;</p> 
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
  <?php echo $condition; ?>

  </div>
  <div class="card p-4 my-5 mx-auto" style="max-width: 320px;">
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
  </div>


</main>
<?php include 'partials/footer.php'; ?>