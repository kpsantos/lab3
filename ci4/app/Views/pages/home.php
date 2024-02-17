<?php echo link_tag('css/website.css')?>
<body class = "bg">
 
  <!--navbar-->
  <nav class ="basta">
    <a class="logo">shortscouture</a>
      <div class="navbar">
          <a href="#">Home</a>
          <a href="phpScript.php">PHP Entry Form</a>
          <a href="#">Misc</a>
      </div>
  </nav>
  <!--html structure-->
  <main>
    <div class="welcome-container">
    <header class="welcome-text">Welcome to  userpage!</header>
    </div>
    <div class="article">
      <div class="aboutme">
        
        <section class="aboutme1">
          <h1>About me</h1>
          <p>Hello, My name is Kyle Santos. I am currently a 2nd year student taking BS Computer Science at Asia Pacific College.</p>
        </section>
        <section class="aboutme2">
          <h1>Hobbies and Interests</h1>
          <h2>osu!</h2>
          <p>I play osu! alot. Especially the gamemode osu!mania. In the right, you can see my stats! I mainly play 4 keys, however I can play a bit of 7 keys as well. I have my stats and gameplay in below so if you're interested you can check it out!!</p>
          <div class="osu-sig-container">
            <div id="osu-block">
              <iframe src="https://www.youtube.com/embed/pQBmweObhwQ?si=IpN_b8YiUeXx0_l5"  id="iframe-round" title="Shinbatsu S" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
            <div id="osu-block">
              <object id="osu-sig" data="https://osu-sig.vercel.app/card?user=shorts&mode=mania&lang=en&animation=true&hue=255" type="" class="aboutmebody"></object>
            </div>
          </div>
          </section>
          <section class="aboutme3">
          <h2>Music</h2>
          <p>I love listening to music alot, playing an electric guitar. The genres I play are usually metal and indie. </p>
          <h2>Anime and Manga</h2>
          <p>I like manga and anime alot. Right now I am reading/watching Frieren. Also I am a Chitoge fan ever since Nisekoi came out!</p>
          <div class="ty">
          <!--will add a container for this part soon!-->
          <h1><center>Special Thanks to:</center></h1>
          <a href="https://github.com/KenPrz">Ken Perez</a>
          <a href="https://github.com/codecy2160">Jesse Sunga</a>
          </div>
          </section>
        </section>
      </div>
    </div>
  </main>
              </body>