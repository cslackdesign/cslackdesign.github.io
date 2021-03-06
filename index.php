<?php
$request_url = “http://cslackdesign.tumblr.com/api/read?type=post&start=0&num=1”;
$xml = simplexml_load_file($request_url);
$title = $xml->posts->post->{‘regular-title’};
$post = $xml->posts->post->{‘regular-body’};
$link = $xml->posts->post[‘url’];
$small_post = substr($post,0,320);
echo ‘<h1>’.$title.’</h1>’;
echo ‘<p>’.$small_post.’</p>’;
echo “…”;
echo “</br><a target=frame2 href=’”.$link.”’>Read More</a>”;
?>

<!DOCTYPE html>
<html lang=en-ca>
<head>
  <meta charset=utf-8>
  <title>CSLACK DESIGN</title>

  <!--CSS-->

  <link href="css/normalize.css" rel="stylesheet">
  <link href="css/general.css" rel="stylesheet">
  <link href="css/grid.css" rel="stylesheet">
  <link href="css/style10.css" rel="stylesheet">

</head>
<body>

  <header>
    <nav>

      <ul class="social-nav">
        <li id="twitter"><a href="#"></a></li>
        <li id="behance"><a href="#"></a></li>
        <li id="instagram"><a href="#"></a></li>
        <li id="github"><a href="#"></a></li>
      </ul>

    </nav>
  </header>

  <section class="splash">

    <img class="profile" src="img/profile.jpg" alt="Picture of Cassie Slack">
    <h1>CSLACK DESIGN</h1>
    <p class="sub">Maker of Things, Code Nerd and UX Unicorn in training.</p>

  </section>

  <section class="work">

    <div class="view view-tenth">

      <img class="flex-img" src="img/slack-cassie-shopit-thumb.jpg" alt="Shopit App Concept"/>

      <div class="mask">
        <h2>Shopit App Concept</h2>
        <p>An app concept for finding local stores and products.</p>
        <a href="#" class="info">Read More</a>
      </div>

    </div>

    <div class="view view-tenth">

      <img class="flex-img" src="img/slack-cassie-dropkick-thumb.jpg" alt="Dropkick Brewery Branding Concept"/>

      <div class="mask">
        <h2>Dropkick Brewery</h2>
        <p>Brand concept for a brewery.</p>
        <a href="#" class="info">Read More</a>
      </div>

    </div>

    <div class="view view-tenth">

      <img class="flex-img" src="img/slack-cassie-cslackdesign-thumb.jpg" alt="Web Presence"/>

      <div class="mask">
        <h2>Web Design</h2>
        <p>Personal website design.</p>
        <a href="#" class="info">Read More</a>
      </div>

    </div>

    <div class="view view-tenth">

      <img class="flex-img" src="img/slack-cassie-iceland-thumb.jpg" alt="Iceland Photography book"/>

      <div class="mask">
        <h2>Iceland Book</h2>
        <p>Book design concept.</p>
        <a href="#" class="info">Read More</a>
      </div>

    </div>

  </section>

  <section class="comments">
    <h3></h3>

  </section>

</body>
</html>
