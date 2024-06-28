<?php
session_start();

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true) {
    header('Location: login.html');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Study Guides</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>LSUEcon.org | Other Classes</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css">
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-5405619500007041"
     crossorigin="anonymous"></script>
    <!-- Add your CSS and other head elements here -->
</head>
<body>
    <h2>Welcome to the Study Guides Page!</h2>

      <!-- Start Top Bar -->
      <div class="top-bar">
        <div class="top-bar-left">
          <ul class="menu">
            <li><a href="index.html">Session Resources</a></li>
            <li><a href="quizlet.html">Quizlets</a></li>
            <li><a href="studyguides.html">Other Classes</a></li>
            <li><a href="about.html">About LSUEcon</a></li>
          </ul>
        </div>
      </div>
      <!-- End Top Bar -->

      <div class="callout large primary">
        <div class="row column text-center">
          <h1>Our Blog</h1>
          <h2 class="subheader">Such a Simple Blog Layout</h2>
        </div>
      </div>

      <!-- We can now combine rows and columns when there's only one column in that row -->
      <div class="row medium-8 large-7 columns">
        <div class="blog-post">
          <h3>Chapter 9 Study Guide</h3>

    <div id="viewer" style="width: 100%; height: 500px;"></div>
    <script type="text/javascript" src="https://cloudpdf.io/viewer.min.js"></script>
    <script>
      const config = {
        documentId: '918b5e1d-48a2-45a9-aadc-953f7681c345',
        darkMode: true,
        token: '' //add your server side generated security token or change your document permission to public
      };
      CloudPDF(config, document.getElementById('viewer')).then((instance) => {

      });
    </script>
          <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
          <div class="callout">
          </div>
        </div>

        <div class="blog-post">
          <h3>Awesome blog post title <small>3/6/2015</small></h3>
          <img class="thumbnail" src="https://placehold.it/850x350">
          <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
          <div class="callout">
            <ul class="menu simple">
              <li><a href="#">Author: Mike Mikers</a></li>
              <li><a href="#">Comments: 3</a></li>
            </ul>
          </div>
        </div>

        <div class="blog-post">
          <h3>Awesome blog post title <small>3/6/2015</small></h3>
          <img class="thumbnail" src="https://placehold.it/850x350">
          <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
          <div class="callout">
            <ul class="menu simple">
              <li><a href="#">Author: Mike Mikers</a></li>
              <li><a href="#">Comments: 3</a></li>
            </ul>
          </div>
        </div>

        <div class="blog-post">
          <h3>Awesome blog post title <small>3/6/2015</small></h3>
          <img class="thumbnail" src="https://placehold.it/850x350">
          <p>Praesent id metus massa, ut blandit odio. Proin quis tortor orci. Etiam at risus et justo dignissim congue. Donec congue lacinia dui, a porttitor lectus condimentum laoreet. Nunc eu ullamcorper orci. Quisque eget odio ac lectus vestibulum faucibus eget in metus. In pellentesque faucibus vestibulum. Nulla at nulla justo, eget luctus.</p>
          <div class="callout">
            <ul class="menu simple">
              <li><a href="#">Author: Mike Mikers</a></li>
              <li><a href="#">Comments: 3</a></li>
            </ul>
          </div>
        </div>
      </div>



  <!-- Footer -->
  <footer class="text-center text-white" style="background-color: #3f51b5; width: 100%; position: relative; bottom: 0;">
    <!-- Grid container -->
    <div class="container">
      <!-- Section: Links -->
      <section class="mt-5">
        <!-- Grid row-->
        <div class="row text-center d-flex justify-content-center pt-5">
          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="index.html" class="text-white">Session Resources</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="quizlet.html" class="text-white">Quizlets</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="studyguides.html" class="text-white">Other Classes</a>
            </h6>
          </div>
          <!-- Grid column -->

          <!-- Grid column -->
          <div class="col-md-2">
            <h6 class="text-uppercase font-weight-bold">
              <a href="about.html" class="text-white">About LSUEcon</a>
            </h6>
          </div>
          <!-- Grid column -->
        </div>
        <!-- Grid row-->
      </section>
      <!-- Section: Links -->

      <hr class="my-4" />

      <!-- Section: Text -->
      <section class="mb-4">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p>These worksheets and materials were originally developed by me for the Supplemental Instruction Program for students in Marx’s Econ 2000 class but just as students from other sections came to my sessions I wanted to make my materials available for all, forever. This website is costly to maintain so please consider donating below!</p>
            <p>Need Help? help@lsuecon.org</p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->

      <!-- Section: Text -->
      <section class="mb-4">
        <div class="row d-flex justify-content-center">
          <div class="col-lg-8">
            <p><script type="text/javascript" src="https://cdnjs.buymeacoffee.com/1.0.0/button.prod.min.js" data-name="bmc-button" data-slug="cs4b89ybm2H" data-color="#BD5FFF" data-emoji=""  data-font="Cookie" data-text="Support this website!" data-outline-color="#000000" data-font-color="#ffffff" data-coffee-color="#FFDD00"></script></p>
          </div>
        </div>
      </section>
      <!-- Section: Text -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2); width: 100%;">
      © 2024 Copyright:
      <a class="text-white" href="website">LSUEcon.org</a>
    </div>
    <!-- Copyright -->
  </footer>
  <!-- Footer -->

    <p>This content is only accessible to logged-in users.</p>
    <a href="logout.php">Logout</a>
</body>
</html>
