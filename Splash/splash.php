<!DOCTYPE html>
<html class="V1">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="noindex" />
    <title>Neverworld Grid Login</title>

    <link rel="stylesheet" type="text/css" href="assets/application.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.8.4/moment.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.0.min.js" integrity="sha256-BJeo0qm959uMBGb65z40ejJYGSgR7REI4+CW1fNKwOg=" crossorigin="anonymous"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.13/jquery.mousewheel.min.js"></script>
    <script src="assets/jquery.rss.js"></script>
</head>

<body>
    <div id="main">
      <div id="widget-error" style="display: none">
           <p class="widget-error"><span data-translate='true'>Sorry, data could not be retrieved.</span><span class="try-again" data-translate='true'>Try Again?</span></p>
       </div>
      <div id="left-wrap">
         <div id="destination-images"></div>
         <div id="galleries">
             <div id="dc"></div>
             <div id="destination-categories"></div>
         </div>
     </div>
        <div id="info">
            <div class="info-head grid-head">
                <h1 data-translate="true">Grid Status</h1></div>
            <div id="grid-status" class="scroller">
                <div id="grid-content"></div>
            </div>
            <script>
                jQuery(function($) {
                    $("#grid-content").rss("https://demo.cachethq.io/rss")
                })
            </script>
            <div id="grid-buffer"></div>
            <div id="blog">
                <div class="info-head">
                    <h1 data-translate="true">Blog</h1></div>
                <div id="blog-content" class="scroller">
                </div>
            </div>
            <script>
                jQuery(function($) {
                    $("#blog-content").rss("http://www.neverworldgrid.com/1/feed")
                })
            </script>
        </div>
    </div>
</body>

</html>
