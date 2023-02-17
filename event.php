<?php

  include_once('db-manager.php'); 

  if(isset($_POST['register'])){
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $career = $_POST['career'];
    $state = $_POST['state'];

    $sql = "INSERT INTO `attendees`(`firstname`, `lastname`, `email`, `career`, `phone`, `state`) VALUES ('$firstname','$lastname','$email','$career','$phone','$state')";

    mysqli_query($cxn, $sql) or die(mysqli_error($cxn));

    echo "<script type='text/javascript'>alert('You have been successfully registered!');</script>";
  }

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Event</title>
    <link rel="stylesheet" href="event.css" />
  </head>
  <body>
    <nav>
      <img src="./images/icons8-menu-rounded-50.png" alt="" id="menu" onclick="menuOpen()">
      <img src="./images/icon-close.svg" alt="" id="close" onclick="menuClose()">
      <main>
      <a href="./index.html"><img src="./images/navLogo.png" alt="" id="navlogo"></a>
  </main>
      <ul id="navList">
          <li><a href="./index.html">Home</a></li>
          <li><a href="./about.html">About Us</a></li>
          <li><a href="./index.html#comm">Community</a></li>
          <li><a href="./event.html">Events</a></li>
          <li><a href="./team.html">Team</a></li>
          <li><a href="#foot">Contact</a></li>
      </ul>
  </nav>
    <section class="one">
      <article class="top_left">
        <h2>Blockchain UNN 2.0</h2>
        <h1>The Advancement of Blockchain Adoption in Africa.</h1>
      </article>
      <article class="top_right">
        <main class="countdown">
          <div>
            <h1 id="days">72</h1>
            <small>Days</small>
          </div>
          <div>
            <h1 id="hours">09</h1>
            <small>Hours </small>
          </div>
          <div>
            <h1 id="minutes">45</h1>
            <small>Mins</small>
          </div>
          <div>
            <h1 id="seconds">34</h1>
            <small>Seconds</small>
          </div>
        </main>
        <main class="countdown">
          <div id="att">
            <h1>3000+</h1>
            <small>Attendees</small>
          </div>
        </main>
        <main id="register">
          <h1>REGISTER NOW</h1>
        </main>
      </article>
    </section>
    <section class="two">
      <article class="eventdetails">
        <main >
          <div class="eventinfo">
            <h1>Event Details</h1>
            <div class="eveinfo">
              <p><img src="./images/date.png" alt="" /> 28th & 29th April 2023</p>
              <p id="time"><img src="./images/time.png" alt="" /> 9am - 4pm</p>
            </div>
            <div class="eveinfo">
              <p>
                <img src="./images/venue.png" alt="" />Ekpo Ref, University of Nigeria,Nsukka. Enugu State, Nigeria.
              </p>
              <p>
                <img src="./images/title.png" alt="" /> Blockchain and Beyond: The future of Technology.
              </p>
            </div>
            <div class="eveinfo" id="phreg">
              <input type="submit" value="Register now" id="reg1">
            </div>
          </div>
        </main>
        <main class="wte">
          <h1>Event Overview</h1>
          <p id="wtep">
            A 2 days event holding on 28th & 29th April, 2023.
            Kickstarting on Day 1 with events such as workshops, networking, career fair, panel session, talks e.t.c.and main event on Day 2.
            <br>
            With an expected attendance of 3000+ participants physically and more virtually, this event is focused on helping Developers - both web2 & Web3 inclined, Creatives & Designers, Blockchain enthusiasts and tech individuals realize the endless possibilities and oppounities of the Blockchain and it’s ecosystem. And get involved.
            <br>
            Having been actively contributing to the Blockchain and Web3 space in Nigeria and Africa for over 2 years, our core
            beliefs is that interactions and informative sessions are a great contribution to career growth and poised to create an enabling environment. As well as the belief that anyone can come into the ecosystem and scale, once properly informed.
            <br>
            With our value driven leaders, speakers and panelists, we will bridge the gap between Technical and non-technical parts of the Blockchain Ecosystem, get people onboarded, and of course water it with activities lined up post-event.
          </p>
        </main>
      </article>
      <article class="form">
        <form action="" method="post">
          <input type="text" name="firstname" id="" placeholder="Firstname">
          <input type="text" name="lastname" id="" placeholder="Lastname">
          <input type="email" name="email" id="" placeholder="Email address">
          <input type="text" name="phone" id="" placeholder="Phone number">
          <input type="text" name="career" id="" placeholder="Career in Tech">
          <input type="text" name="state" id="" placeholder="State of Resisdence">
          <input type="submit" name="register" value="Register Now" id="reg">
        </form>
      </article>
    </section>

    <section class="speakers">
      <header>
        <h1>Meet our speakers</h1>
      </header>
    <article class="threeG">
      <main class="three">
          <img src="./images/kevin.png" alt="" class="photo">
          <div class="text">
              <h2>Okoye Kevin Chibuoyim
                  (Ezemmuo Blockchain)</h2>
              <p>Co-founder, BlockchainUNN;
                  Founder & CEO, GIDA
              </p>
              <div class="socials">
                  <a href="https://twitter.com/kevin_chibuoyim">.<img src="./images/twitter3.png" alt=""></a>
                  <a href="http://linkedin.com/in/kevin-chibuoyim">.<img src="./images/ln footer.png" alt="">.</a>
                  <a href="https://www.facebook.com/kevin.okoye.14">.<img src="./images/facebook3.png" alt=""></a>
              </div>
          </div>
      </main>
      <main class="three">
          <img src="./images/kevin.png" alt="" class="photo">
          <div class="text">
              <h2>Okoye Kevin Chibuoyim
                  (Ezemmuo Blockchain)</h2>
              <p>Co-founder, BlockchainUNN;
                  Founder & CEO, GIDA
              </p>
              <div class="socials">
                  <a href="https://twitter.com/kevin_chibuoyim">.<img src="./images/twitter3.png" alt=""></a>
                  <a href="http://linkedin.com/in/kevin-chibuoyim">.<img src="./images/ln footer.png" alt="">.</a>
                  <a href="https://www.facebook.com/kevin.okoye.14">.<img src="./images/facebook3.png" alt=""></a>
              </div>
          </div>
      </main>
  </article>
    <article class="threeG">
      <main class="three">
          <img src="./images/kevin.png" alt="" class="photo">
          <div class="text">
              <h2>Okoye Kevin Chibuoyim
                  (Ezemmuo Blockchain)</h2>
              <p>Co-founder, BlockchainUNN;
                  Founder & CEO, GIDA
              </p>
              <div class="socials">
                  <a href="https://twitter.com/kevin_chibuoyim">.<img src="./images/twitter3.png" alt=""></a>
                  <a href="http://linkedin.com/in/kevin-chibuoyim">.<img src="./images/ln footer.png" alt="">.</a>
                  <a href="https://www.facebook.com/kevin.okoye.14">.<img src="./images/facebook3.png" alt=""></a>
              </div>
          </div>
      </main>
      <main class="three">
          <img src="./images/kevin.png" alt="" class="photo">
          <div class="text">
              <h2>Okoye Kevin Chibuoyim
                  (Ezemmuo Blockchain)</h2>
              <p>Co-founder, BlockchainUNN;
                  Founder & CEO, GIDA
              </p>
              <div class="socials">
                  <a href="https://twitter.com/kevin_chibuoyim">.<img src="./images/twitter3.png" alt=""></a>
                  <a href="http://linkedin.com/in/kevin-chibuoyim">.<img src="./images/ln footer.png" alt="">.</a>
                  <a href="https://www.facebook.com/kevin.okoye.14">.<img src="./images/facebook3.png" alt=""></a>
              </div>
          </div>
      </main>
  </article>
</section>
<section class="instructors">
  <header>
    <h1>Meet our instructors</h1>
  </header>
<article class="threeG">
  <main class="three">
      <img src="./images/kevin.png" alt="" class="photo">
      <div class="text">
          <h2>Okoye Kevin Chibuoyim
              (Ezemmuo Blockchain)</h2>
          <p>Co-founder, BlockchainUNN;
              Founder & CEO, GIDA
          </p>
          <div class="socials">
              <a href="https://twitter.com/kevin_chibuoyim">.<img src="./images/twitter3.png" alt=""></a>
              <a href="http://linkedin.com/in/kevin-chibuoyim">.<img src="./images/ln footer.png" alt="">.</a>
              <a href="https://www.facebook.com/kevin.okoye.14">.<img src="./images/facebook3.png" alt=""></a>
          </div>
      </div>
  </main>
  <main class="three">
      <img src="./images/kevin.png" alt="" class="photo">
      <div class="text">
          <h2>Okoye Kevin Chibuoyim
              (Ezemmuo Blockchain)</h2>
          <p>Co-founder, BlockchainUNN;
              Founder & CEO, GIDA
          </p>
          <div class="socials">
              <a href="https://twitter.com/kevin_chibuoyim">.<img src="./images/twitter3.png" alt=""></a>
              <a href="http://linkedin.com/in/kevin-chibuoyim">.<img src="./images/ln footer.png" alt="">.</a>
              <a href="https://www.facebook.com/kevin.okoye.14">.<img src="./images/facebook3.png" alt=""></a>
          </div>
      </div>
  </main>
</article>
</section>

<section class="outline">
  <header>
    <h1>
      Outline of Events
    </h1>
  </header>
  <main class="day1">
  <article>
    <button id="btn1a" onclick="day1()">Day 1</button>
    <button id="btn2a" onclick="day2()">Day 2</button>
  </article>
  <article class="evelis">
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
</article>
</main>
  <main class="day2">
  <article>
    <button id="btn1b" onclick="day1()">Day 1</button>
    <button id="btn2b" onclick="day2()">Day 2</button>
  </article>
  <article class="evelis">
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
  <p>
    9:00-10:00 AM <img src="./images/Line 8.png" alt=""> <span class="eve"> Arrival of all participants, guests and other dignitaries. By: <span class="evename"> Ogbonna Shedrack </span></span>
  </p>
</article>
</main>
</section>
<section class="sponsors">
  <header>
    <h1>
      Our Sponsors
    </h1>
  </header>
  <article class="sponsor1">
    <header>
      <h2>
        Platinum(Headline) Sponsors:
      </h2>
    </header>
    <main>
      <span>
      <div> <img src="./images/AlphaBlocks-Png-1.png" alt="" id="a1"></div>
      <div><img src="./images/GIDA.png" alt=""></div>
    </span>
    <span>
      <div><img src="./images/b4u.png" alt=""></div>
    </span>
    </main>
  </article>
  <article class="sponsor1">
    <header>
      <h2>
        Gold Sponsors:
      </h2>
    </header>
    <main>
      <span>
        <div> <img src="./images/AlphaBlocks-Png-1.png" alt="" id="a1"></div>
        <div><img src="./images/GIDA.png" alt=""></div>
      </span>
      <span>
        <div><img src="./images/b4u.png" alt=""></div>
      </span>
    </main>
  </article>
  <article class="sponsor1">
    <header>
      <h2>
        Silver Sponsors:
      </h2>
    </header>
    <main>
      <span>
        <div> <img src="./images/AlphaBlocks-Png-1.png" alt="" id="a1"></div>
        <div><img src="./images/GIDA.png" alt=""></div>
      </span>
      <span>
        <div><img src="./images/b4u.png" alt=""></div>
      </span>
    </main>
  </article>
  <article class="sponsor1">
    <header>
      <h2>
        Bronze Sponsors:
      </h2>
    </header>
    <main>
      <span>
        <div> <img src="./images/AlphaBlocks-Png-1.png" alt="" id="a1"></div>
        <div><img src="./images/GIDA.png" alt=""></div>
      </span>
      <span>
        <div><img src="./images/b4u.png" alt=""></div>
      </span>
    </main>
  </article>
  <article class="sponsor1">
    <header>
      <h2>
        Media Patners:
      </h2>
    </header>
    <main>
      <span>
        <div> <img src="./images/AlphaBlocks-Png-1.png" alt="" id="a1"></div>
        <div><img src="./images/GIDA.png" alt=""></div>
      </span>
      <span>
        <div><img src="./images/b4u.png" alt=""></div>
      </span>
    </main>
  </article>
</section>

<footer id="foot">
  <h1>
    Sponsor Contact details
  </h1>
  <div>
    <a href="mailto:admin@blockchaunn.org">Send a mail: admin@blockchaunn.org</a>
    <span id="numbers"><img src="./images/icons8-call-male-80.png" id="call" alt="">07064271385, 08050827048, 08124720809</span>
    <span>
      <a href="http://www.linkedin.com/in/BlockchainUNN"><img src="./images/linked3.png" alt="" id="ln"> </a>
      <a href="http://www.twitter.com/BlockchainUNN"><img src="./images/twitter.png" alt="" id="footertw"> </a>
      <a href="http://www.twitter.com/BlockchainUNN"><img src="./images/youtube.png" alt=""> </a>
      <a href="http://www.facebook.com/"><img src="./images/facebook.png" alt="" id="footerfb"> </a>
      <a href="http://www.instagram.com/BlockchainUNN"><img src="./images/instagram.png" alt="" id="footerig"> </a>
    </span>
  </div>
  <hr>
  <p>Copyright © 2023. BlockchainUNN. All rights reserved</p>
</footer>


  </body>
  <script src="event.js"></script>
  <script src="timer.js"></script>
</html>
