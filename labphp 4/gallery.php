<!doctype html>
  <?php
    include("config.php");
    $title = "gallery";
    include("header.php");
  ?>
  <body>
    <head>
      <title>My site</title>
      <link rel="stylesheet" type="text/css" href="css/main.css">
      <meta name="viewport" content="initial-scale=1.0">
      <meta charset="utf-8" />
      <link href='https://fonts.googleapis.com/css?family=Lato:100,300,400|Open+Sans:300italic,400,300' rel='stylesheet' type='text/css'>
      <link rel="stylesheet" href="css/blueimp-gallery.css">
              <meta http-equiv="Content_Type" content="text/html; charset=utf-8">
    </head>

    <main>
      <div id="sitecontainer">
        <div id="blueimp-gallery" class="blueimp-gallery">
          <div class="slides"></div>
          <h3 class="title"></h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="close">×</a>
          <a class="play-pause"></a>
          <ol class="indicator"></ol>
        </div>

        <div id="links">
          
          <?php
           $files = glob("uploadedfiles/*.*");
           for ($i=0; $i<count($files); $i++)
            {
              $image = $files[$i];
              $supported_file = array(
                      'gif',
                      'jpg',
                      'jpeg',
                      'png'
               );

               $ext = strtolower(pathinfo($image, PATHINFO_EXTENSION));
               if (in_array($ext, $supported_file)) {
                  echo $image."<br />";
                  echo '<a href="'.$image .'"><img src="'.$image .'" alt="Random image" /></a>'."<br /><br />";            } else {
                      continue;
                  }
                }
          ?>
        </div>

        <script src="js/blueimp-gallery.min.js"></script>

        <div id="blueimp-gallery-carousel" class="blueimp-gallery blueimp-gallery-carousel">
          <div class="slides"></div>
          <h3 class="title"></h3>
          <a class="prev">‹</a>
          <a class="next">›</a>
          <a class="play-pause"></a>
          <ol class="indicator"></ol>
        </div>

                <script>
                    document.getElementById('links').onclick = function (event) {
                        event = event || window.event;
                        var target = event.target || event.srcElement,
                            link = target.src ? target.parentNode : target,
                            options = {index: link, event: event},
                            links = this.getElementsByTagName('a');
                        blueimp.Gallery(links, options);
                    };
        </script>

        <?php include("footer.php"); ?>
      </div>
    </main>
  </body>
</html>
