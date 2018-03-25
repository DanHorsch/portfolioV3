<?php include('database/database.php'); ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>
    <!-- <div id="brb">
      <h2>
      Be Back In 5 Min
      </h2>
    </div> -->
    <?php include('includes/header.php'); ?>
    <?php include('helpers/functions.php'); ?>
    <?php include('queries/home.php'); ?>
    <div class="grid-container">

      <div class="grid-x">
        <div class="small-12 medium-8">
          <div id="featured" class="homePanel">
            <div class="grid-x">
              <div class="small-9">
                <h2 class="panelTitle">Featured Project</h2>
              </div>
              <div class="small-3">
                <p><?php echo $featured['last_updated']; ?></p>
              </div>
            </div>
            <div class="grid-x">
              <div class="small-12 medium-7">
                <h3><?php echo $featured['title']; ?></h3>
                <p><?php echo breakText($featured['description']); ?></p>
                <p><a class="btnLink" href="project.php/?project=<?php echo $featured['link']; ?>">See Project</a></p>
              </div>
              <div class="small-12 medium-5">
                <img src="<?php $featured['image']; ?>" />
              </div>
            </div>
          </div>
        </div>

        <div class="small-12 medium-4">
          <div id="messageLog" class="homePanel">
            <h2 class="panelTitle">Message Log</h2>
            <div class="table">
               <?php while($log = $logs->fetch_assoc()) : ?>
                 <div class="cell">
                   <p class="message"><?php echo $log['message']; ?></p>
                 </div>
                 <p class="logTime"><?php echo $log['date']; ?></p>
               <?php endwhile; ?>
            </div>
          </div>
        </div>
      </div>

      <div class="grid-x">
        <div class="small-12">
          <div id="focus" class="homePanel">
            <p>I'm a junior <b>full-stack</b> web developer in Minneapolis, Minnesota. I enjoy designing and coding <b>dynamic</b> websites with <b>responsive</b> layouts.
            Feel free to take a look at projects on the <a href="">portfolio page</a>. If you would like to get a hold of me, send me a message on the  <a href="">contact page</a></p>
          </div>
        </div>
      </div>

      <div class="grid-x">
        <div class="small-12 medium-8">
          <div id="about" class="homePanel">
            <h2 class="panelTitle">About Me</h2>
          </div>
        </div>

        <div class="small-12 medium-4">
            <div class="grid-x">
              <div class="small-12">
                <div id="updated" class="homePanel">
                  <h2 class="panelTitle">Last Updated 2hr 20min</h2>
                </div>
              </div>
              <div class="small-12">
                <div id="social" class="homePanel">
                  <h2 class="panelTitle">Social Media</h2>
                </div>
              </div>
            </div>
        </div>
      </div>

    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
