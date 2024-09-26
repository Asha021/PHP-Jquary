<?php
require "connect1.php";
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $fn = $_POST['fn'];
  $ln = $_POST['ln'];
  $em = $_POST['em'];
  $sub = $_POST['sub'];
  header('location:regSQL.php');


  $q = "INSERT INTO resumes(fname,  lname,semail,sub) VALUES('$fn','$ln','$em','$sub')";
  $r = mysqli_query($conn, $q);

  if ($r) {
    echo 'insert data';
  } else {
    echo 'not insert data';
  }
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>go</title>
</head>
<style>
  * {
    margin: 0px;
    padding: 0px;
    box-sizing: border-box;
  }

  body {
    height: 100vh;
  }

  header {
    height: 12%;
    background-color: #00254d;
    color: white;
    position: sticky;
    top: 0;
    z-index: 200;
    align-items: center;
    justify-content: space-evenly;
    display: flex;
    font-family: 'Lucida Sans', 'Lucida Sans Regular', 'Lucida Grande', 'Lucida Sans Unicode', Geneva, Verdana, sans-serif;
    /* flex-direction: column; */
  }

  a {
    width: 20%;
    text-decoration: none;
    color: white;
    align-items: center;
    justify-content: space-around;
    display: flex;
  }

  .a1 {
    height: 100%;
    width: 30%;
    font-size: 1.7rem;
    /* border: 1px solid black; */
    align-items: center;
    justify-content: start;
    display: flex;
    cursor: pointer;
  }

  .a2 {
    height: 100%;
    width: 62%;
    font-size: 1.3rem;
    /* border: 1px solid black; */
    align-items: center;
    justify-content: center;
    display: flex;
  }

  .a2 :hover {
    color: gainsboro;
  }

  .sec {
    /* top: 12%; */
    /* border: 1px solid black; */
    height: 100%;
  }

  .sec1 {
    /* border: 1px solid black; */
  }

  .sec2 {
    position: absolute;
    top: 40%;
    left: 10%;
    height: 70%;
    width: 80%;
    align-items: center;
    justify-content: space-between;
    display: flex;
  }

  .sec3 {
    height: 100%;
    width: 40%;
    align-items: flex-start;
    justify-content: space-between;
    display: flex;
    flex-direction: column;
    /* border: 1px solid black */
  }

  .sec31 {
    /* border: 1px solid black; */
    height: 15%;
    width: 80%;
    align-items: center;
    justify-content: center;
    display: flex;
    font-size: 3.3rem;
    color: white;
  }

  .sec32 {
    /* border: 1px solid black; */
    height: 15%;
    width: 100%;
    font-size: 2.8rem;
    color: white;
  }

  .sec33 {
    /* border: 1px solid black; */
    height: 60%;
    width: 100%;
    font-size: 1.7rem;
    color: #363636;
  }

  #img1 {
    height: 50%;
    width: 100%;
    background-image: url("https://wallpaperbat.com/img/6663285-1080p-wallpaper-hdwallpap.jpg");
    background-size: 100% 100%;
  }

  #but1 {
    height: 8%;
    width: 25%;
    align-items: self-start;
    justify-content: center;
    display: flex;
    color: black;
    border: 1px solid;
    background-color: white;
  }

  .sec4 {
    height: 80%;
    width: 100%;
    background-color: whitesmoke;
  }

  .sec5 {
    height: 80%;
    width: 100%;
    align-items: center;
    justify-content: space-around;
    display: flex;
    /* flex-direction: column; */
    background-color: papayawhip;
  }

  .sec51 {
    height: 80%;
    width: 30%;
    font-size: 3rem;
    color: #00254d;
    /* border: 1px solid black; */
  }

  .sec52 {
    /* border: 1px solid black; */
    height: 80%;
    width: 30%;
    font-size: 1.1rem;
    align-items: self-start;
    justify-content: space-between;
    display: flex;
    flex-direction: column;
    color: #00254d;
  }

  #but2 {
    border: 1px solid #00254d;
    height: 8%;
    color: black;
    background-color: white;
    width: 25%;
    /* align-items: self-start;
    justify-content: center;
    display: flex; */
  }

  #but2:hover,
  #but1:hover,
  #but3:hover {
    color: white;
    cursor: pointer;
    background-color: #00254d;
  }

  .fm1 {
    /* top: 212%; */
    width: 100%;
    /* visibility: hidden; */
    /* position: absolute; */
    height: 100%;
    background-color: #00254d;
    align-items: center;
    justify-content: space-around;
    display: flex;
    /* flex-direction: column; */
    /* background-color: whitesmoke; */
  }

  .fm2 {
    height: 90%;
    width: 40%;
    font-size: 1.7rem;
    color: white;
    /* border: 1px solid; */
  }

  form {
    /* border: 1px solid; */
    height: 80%;
    width: 30%;
  }

  input {
    border: transparent;
    border-bottom: 1px solid white;
    width: 98%;
    /* height: 25%; */
    background-color: #00254d;
    text-indent: 10px;
    font-size: 1.1rem;
    color: white;
  }

  textarea {
    border: transparent;
    border-bottom: 1px solid white;
    width: 100%;
    height: 10%;
    text-indent: 10px;
    /* font-size: 1rem; */
    color: white;
    background-color: #00254d;
  }

  #sub {
    border: 1px solid whitesmoke;
    height: 14%;
    width: 100%;
    font-size: 2rem;
    color: white;
  }

  #sub:hover {
    background-color: white;
    color: black;
  }

  label {
    font-size: 1.2rem;
    color: white;
  }

  .con {
    font-size: 3.8rem;
  }

  i {
    color: white;
    font-size: 1.7rem;
  }

  .lst {
    height: 5%;
    background-color: wheat;
    align-items: center;
    justify-content: center;
    display: flex;
  }
</style>

<body>
  <header>
    <a href="resume.php" class="a1">Asha pal,Web Developer</a>
    <div class="a2">
      <a href="res1.php">About</a>
      <a href="#ed" id="edu">Education</a>
      <a href="resmain.php">Resume</a>
      <a href="http://localhost/asha/">projects</a>
      <a href="#con" >Contact</a>
    </div>
  </header>
  <div class="sec">
    <img id="img1" src="https://wallpaperbat.com/img/6663285-1080p-wallpaper-hdwallpap.jpg" alt="img">
    <div class="sec2">
      <img id="img2"
        src="https://images.pexels.com/photos/245388/pexels-photo-245388.jpeg?cs=srgb&dl=pexels-uus-supendi-245388.jpg&fm=jpg"
        height="100%" width="40%" alt="img">
      <div class="sec3">
        <div class="sec31">Asha pal , BCA</div>
        <div class="sec32">Web Developer</div>
        <div class="sec33">
          I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double
          click me to add your own content and make changes to the font. I’m a great place for you to tell a story and
          let your users know a little more about you.</h4>
        </div>
        <input type="submit" id="but1" value="About Me">
      </div>
      <div class="sec1"></div>
    </div>
    <div class="sec4"></div>
    <div class="sec5">
      <div class="sec51">
        Research<br /> Interests</div>
      <div class="sec52">

        I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click
        me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your
        page. I’m a great place for you to tell a story and let your users know a little more about
        you.<br /><br /><br />

        ​

        This is a great space to write a long text about your company and your services. You can use this space to go
        into a little more detail about your company. Talk about your team and what services you provide. Tell your
        visitors the story of how you came up with the idea for your business and what makes you different from your
        competitors. Make your company stand out and show your visitors who you are.<br />
        <input type="submit" id="but2" value="Learn">
      </div>
    </div>

    <div class="fm1">
      <div class="fm2">
        <div class="con">
          Contact<br />
          Information
        </div>
        <div><br /><br />
          Department of BCA<br />
          software Center<br /><br />

          500 Terry Francine St.<br />
          San Francisco, CA 94158<br /><br />

          info@mysite.com<br />

          123-456-7890 <br />
          in <i class="fa fa-facebook"></i>

        </div>
      </div>
      <form id="con">
        <div>
          <label for="fn"  >First name</label><br />
          <input type="text" id="fn" name="fn" ><br /><br />
          <label for="ln">Last name</label><br />
          <input type="text" name="ln" id="ln"><br /><br />
          <label for="em"  >E-mail</label><br />
          <input type="text" name="em" id="em"><br /><br />
          <label for="sb">Subjact</label><br />
          <input type="text" name="sub" id="sb"><br /><br />
          <label for="tx">Leave a Message</label><br />
          <textarea name="" id="txt" cols="30" rows="10"></textarea>
          <input type="submit" value="Submit" id="sub">
      </form>
    </div>
  </div>
  <div class="lst">©2035 by Asha Pal. Powered and secured by Wix</div>
</body>

</html>