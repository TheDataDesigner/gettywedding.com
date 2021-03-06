<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Alex and Ashley</title>
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="css/main.css">
</head>
<body>
  <header>
    <nav>
      <a href="#Story">The Story</a>
      <a href="#Party">The Party</a>
      <a href="#RSVP">RSVP</a>
    </nav>
    <img class="fullscreen" src="" alt="09/27/2015">
  </header>
  <section id="Story">
    <img class="fullscreen" src="assets/story_cover.jpg" alt="Cover">
    <div class="section-header">
      <img src="assets/story_header.jpg" alt="The Story">
      <h1>The Story</h1>
    </div>
    <div class="content">
      <div class="container">
        <div class="leftcol">
          <img class="circle" src="assets/ashley.png" alt="Ashley">
          <h2 class="primary large">The Bride</h2>
          <h3 class="secondary space-after">Ashley Ziemer</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="rightcol">
          <img class="circle" src="assets/alex.png" alt="Alex">
          <h2 class="primary large">The Groom</h2>
          <h3 class="secondary space-after">Alex Getty</h3>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
      <div class="container">
        <div class="fullcol">
          <img class="circle" src="assets/couple.png" alt="Ashley and Alex">
          <h2 class="primary large space-after">The Couple</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </section>
  <section id="Party">
    <img class="fullscreen" src="assets/party_cover.jpg" alt="Cover">
    <div class="section-header">
      <img src="assets/party_header.jpg" alt="The Party">
      <h1>The Party</h1>
    </div>
    <div class="content">
      <div class="invitation">
        <p class="primary space-after">Please join us</p>
        <p class="secondary">on</p>
        <p class="primary">Sunday, September 27, 2015</p>
        <p class="secondary space-after">from 4:00pm to 10:00pm</p>
        <p class="secondary">at</p>
        <p class="primary">The Booking House</p>
        <p class="secondary">210 South Penn Street, Manheim, PA. 17545</p>
      </div>
      <a href="https://www.google.com/maps/dir//The+Booking+House,+210+S+Penn+St,+Manheim,+PA+17545/@40.1566712,-76.3960193,17z/data=!4m13!1m4!3m3!1s0x89c61f630e84748d:0xdba13ca9b9c88f40!2sThe+Booking+House!3b1!4m7!1m0!1m5!1m1!1s0x89c61f630e84748d:0xdba13ca9b9c88f40!2m2!1d-76.3960193!2d40.1566712" target="_blank">
        <img class="map" src="assets/map.png" alt="map">
      </a>
    </div>
  </section>
  <section id="RSVP">
    <div class="section-header">
      <img src="assets/rsvp_header.jpg" alt="RSVP">
      <h1>RSVP</h1>
    </div>
    <div class="content">
      <div class="container">
        <div class="fullcol">
          <p class="large center">We ask that you RSVP no later than August 27th.</p>
          <form action="rsvp.php" method="post">
            <label for="names">Name(s) of Guests</label>
            <textarea name="names" rows="2"></textarea>
            <div class="attending">
              <div class="leftatt">
                <label for="attending">
                  <input type="radio" name="attending" value="yes" checked>
                  Attending
                </label>
              </div>
              <div class="rightatt">
                <label for="attending">
                  <input type="radio" name="attending" value="no">
                  Not Attending
                </label>
              </div>
            </div>
            <label for="contact">Your Email or Phone Number</label>
            <input type="text" name="contact">
            <label for="message">A Message for the Couple</label>
            <textarea rows="8" name="message" cols="30"></textarea>
            <input type="submit" name="submit" value="Send">
          </form>
          <p class="large center">If you are unable to RSVP using this form, please email us at rsvp@gettywedding.com or call 610.944.0309</p>
        </div>
      </div>
      <div class="container">
        <h3 class="secondary">Alex and Ashley are Registered at:</h3>
        <div class="3col">
          <a class="col" href="https://www.bedbathandbeyond.com/store/giftregistry/view_registry_guest.jsp?registryId=542170091&eventType=Wedding&pwsurl=?mcid=EM_triggeredem_emailregistryplural__allpromos">
            <img src="assets/reg_bed.jpg" alt="Bed Bath and Beyond"/>
          </a>
          <a class="col" href="http://www.amazon.com/registry/wedding/3A25OKKI36JZV">
            <img src="assets/reg_amazon.jpg" alt="Amazon"/>
          </a>
          <a class="col" href="#">
            <img src="assets/reg_village.jpg" alt="Ten Thousand Villages"/>
          </a>
        </div>
      </div>
    </div>
  </section>
</body>
</html>
