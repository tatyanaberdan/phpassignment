<!DOCTYPE html>
<html>
<head>
  <title>Tat'yana Berdan - Personal Site</title>
  <link href="https://fonts.googleapis.com/css?family=Covered+By+Your+Grace|Raleway:100,500,600,800" rel="stylesheet">
  <link rel="stylesheet" type="text/css" href="style.css">
  <script src= "https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src= "gallery.js"></script>
</head>
<body>

  <div class="header">
    <h1>Tat'yana Berdan</h1>
  </div>

  <ul>
    <li>
      <h2>About</h2>
      <p>Welcome to my site! My name is Tat'yana Berdan. I am currently a graduate student in Georgetown University's Public Relations and Corporate Communications Program. I graduated from the Univeristy of North Carolina at Chapel Hill in 2016 with a Bachelor's Degree in Global Studies.</p>
    </li>
    <li>
      <h2>Experience</h2>
      
      <p>Most recent job: Corporate Communications Intern at NPR.</p>

      <p>I have held various communications and PR-related internships throughout my time in college and gradaute school in both the private and nonprofit sectors.</p>
      <a href="https://www.linkedin.com/in/tat-yana-berdan-5a0805aa/">See my full resume.</a>
    </li>
    <li>
      <h2>Interests</h2>
      <p>Within the world of public relations, I am particulalry interested in work surrounding digital and social media and corporate social responsibilty. </p>
      <a href="https://twitter.com/tatyanaberdan?lang=en">Follow me on Tiwtter.</a>
    </li>
  </ul>
  <div class = "gallery" align = "center">
  <h3> Travel Photos </h3>
    <div class="image" >
      <img src="gallery/Image1.jpg" alt = "image 1" style="width:500px;height:500px;">
      <div class="caption">Rome, the Eternal City</div>
    </div>
    <div class = "image" >
      <img src="gallery/Image3.jpg" alt = "image 2" style="width:500px;height:500px;">
    <div class="caption">On a field trip in Southern Spain</div>
    </div>
    <div class = "image" >
      <img src="gallery/Image4.jpg" alt = "image 3" style="width:500px;height:500px;">
    <div class="caption">Sevilla, Spain</div>
    </div>
    <div class = "next" align="center">
      <img src="gallery/button_black_rew.png" alt = "backward button" style="width:100px;height:100px;"> 
    </div>
    <div class = "previous" align = "center">
      <img src = "gallery/button_black_ffw.png" alt = "forward button" style="width:100px;height:100px;">
    </div>
  </div>
  <script>
  // code adapted from w3schools site https://www.w3schools.com/php/php_ajax_poll.asp
function getVote(int) {
  if (window.XMLHttpRequest) {
    xmlhttp=new XMLHttpRequest();
  } else {  
    xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
  xmlhttp.onreadystatechange=function() {
    if (this.readyState==4 && this.status==200) {
      document.getElementById("poll").innerHTML=this.responseText;
    }
  }
  xmlhttp.open("GET","poll_vote.php?vote="+int,true);
  xmlhttp.send();
}
</script>
</head>
<body>

<div id="poll" align = "center">
<h3>What book should I read next?</h3>
<form>
The Sun Also Rises by Ernest Hemingway:
<input type="radio" name="vote" value="0" onclick="getVote(this.value)">
<br>Middlemarch by George Eliot:
<input type="radio" name="vote" value="1" onclick="getVote(this.value)">
</form>
</div>
  </body>
</html>