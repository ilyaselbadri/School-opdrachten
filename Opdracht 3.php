<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
  <h1>My first webpage</h1>
  
  <hr>
  <li><a href="about.html">About me</a></li>
  <li><a href="whatsells.html">What do i sell?</a></li>
  <li><a href="vrgnlijst.html">quistionnaire</a></li>

  <h2>i'm ready to learn HTML</h2>
  <p>This is my first webpage.</p>

  <h3>My daily schedule</h3>
  <p>Let me tell you how:
      <br>&nbsp;&nbsp;&nbsp;...I plan out my schedule.
      <br>&nbsp;&nbsp;&nbsp;...I learn more about HTML
      <br>&nbsp;&nbsp;&nbsp;...i use resources from <abbr title="Mozilla
      Developer Network">
      <a href="https://developer.mozilla.org/en-US/">MDN</a>
    </abbr>.</li>
  </p>

  <hr>
  <h2>I plan out my schedule.</h2>
  <p>First thing i do is get up in the morning and get ready for school. 
    When school is done i go home and get something to eat after eating i get my laptop and get ready to practice HTML.
  </p>
  <br>

  <h2>How do i learn more about HTML?</h2>
  <p>First i go to youtube and search learning HTML.
    Then i watch a video and it is important that you pause the video sometimes.
    Because you need to realise what you just watched and the video's are often longer than 1 hour.

  </p>
  <br>
  <table>
    <tr>
      <td>
        <time datetime="08:00">8am</time>
        <time datetime="11:00">11am</time>
      </td>
      <td>write Code</td>
    </tr>
    <tr>
      <td>
        <time datetime="11:00">11am</time>
        <time datetime="12:00">12pm</time>
      </td>
      <td>breakfast</td>
    </tr>

  </table>

  <h2>Where do my resources come from?</h2>
  <p>My resources come from <a href="https://developer.mozilla.org/en-US/">MDN</a></p>
  <hr>
  <article id="Contact">
    <h2>Contact me</h2>
    <p>I'd really like to hear from you!</p>

    <form action="https://httpbin.org/get" method="get">
      <fieldset>
        <legend>Personal Info</legend>
      <label for="firstName">First Name</label>
      <input type="text" name="firstName" id="firstName"placeholder="Pieter"
      autocomplete="on" required autofocus> <br>
      <br>
      <label for="last name">Last Name</label>
      <input type="text" name="last name" id="last name"placeholder="Zandberg"
      autocomplete="on" required> <br>
      <br>

      <label for="password">Password</label>
      <input type="Password" name="password" id="password"placeholder="your secret"
       required>
       <br>
      <br>

      <label for="phone ">Phone Number</label>
      <input type="tel" name="phone" id="phone"placeholder="0123456789"
       pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}" required> 


    </form>

    </fieldset>
    </form>

  </article>
  <hr>
  <footer>
    <p>
      &lt;&lt;&lt; &copy; Ilyas &gt;&gt;&gt;
    </p>
  </footer>

</body>
</html>
    