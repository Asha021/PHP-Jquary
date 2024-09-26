<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
  .abt1 {
    /* visibility: hidden;
    position: absolute;
    top: 12%; */
    background-color: white;
    /* border: 1px solid; */
    width: 100%;
    height: 120%;
    align-items: center;
    /* flex-direction: column; */
    justify-content: space-around;
    display: flex;
  }

  .abt11 {
    height: 70%;
    width: 35%;
    /* border: 1px solid; */
    line-height: 28px;
    /* color: ; */
  }

  .abt12 {
    height: 70%;
    /* border: 1px solid; */
    width: 40%;
  }

  .img3 {
    height: 85%;
    width: 85%;
  }

  .abt112 {
    font-size: 4rem;
    color: #00254d;
  }

  #but3 {
    border: 1px solid #00254d;
    height: 8%;
    color: white;
    width: 35%;
  }
  

  .abt2 {
    /* position: absolute;
    top: 132%; */
    background-color: white;
    /* visibility: hidden; */
    /* border: 10px solid; */
    width: 100%;
    height: 100%;
    align-items: center;
    /* flex-direction: column; */
    justify-content: space-around;
    display: flex;
  }

  .abt21 {
    height: 70%;
    width: 35%;
    /* border: 1px solid; */
    line-height: 28px;
    /* color: ; */
  }

  .abt22 {
    height: 70%;
    /* border: 1px solid; */
    width: 40%;
    align-items: center;
    justify-content: space-around;
    display: flex;
    flex-direction: column;
  }
  .abt211{
    font-size: 4rem;
    color: #00254d;
   
  }
  .abt22>div{
    /* border: 1px solid; */
  width: 100%;
  font-size: 1.1rem;
  }
  .dt{
    font-size: 2.2rem;
    color: #00254d;
  }
  .fm1{
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
  .fm2{
    height: 90%;
    width: 40%;
    font-size: 1.7rem;
    color: white;
    /* border: 1px solid; */
  }
  form{
    /* border: 1px solid; */
    height: 80%;
    width: 30%;
  }
  input{
    border: transparent;
    border-bottom: 1px solid white;
    width: 98%;
    background-color: #00254d;
    text-indent: 10px;
    /* font-size: rem; */
    color: white;
  }
  textarea{
    border: transparent;
    border-bottom: 1px solid white;
    width: 100%;
    text-indent: 10px;
    font-size: 1rem;
    color: white;
    /* background-color: #00254d; */
    background-color: #00254d;
  }
  #sub{
    border: 1px solid whitesmoke;
    height: 14%;
    width: 100%;
    font-size: 2rem;
    color: white;
  }
  #sub:hover{
    background-color:  white;
    color: black;
  }
  label{
    font-size: 1.2rem;
    color: white;
  }
  .con{
    font-size: 3.8rem;
  }
  i{
    color: white;
    font-size: 1.7rem;
  }
  .lst{
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
      <a href="res1.php" >About</a>
      <a href="#ed" id="edu"  id="edu">Education</a>
      <a href="resmain.php">Resume</a>
      <a href="http://localhost/asha/">projects</a>
      <a href="#con">Contact</a>
    </div>
  </header>
  <!-- <div class="main1" > -->
    <div class="abt1">
      <div class="abt11" id="abt" >

        <div class="abt112" onclick="abut()" >About</div><br /><br />
        I'm a paragraph. Click here to add your own text and edit me. It’s easy. Just click “Edit Text” or double click
        me to add your own content and make changes to the font. Feel free to drag and drop me anywhere you like on your
        page. I’m a great place for you to tell a story and let your users know a little more about you.<br /><br />

        ​

        This is a great space to write a long text about your company and your services. You can use this space to go
        into a little more detail about your company. Talk about your team and what services you provide. Tell your
        visitors the story of how you came up with the idea for your business and what makes you different from your
        competitors. Make your company stand out and show your visitors who you are.<br /><br />
        <input type="submit" id="but3" value="Learn">
      </div>
      <div class="abt12">
        <img class="img3"
          src="https://images.pexels.com/photos/245388/pexels-photo-245388.jpeg?cs=srgb&dl=pexels-uus-supendi-245388.jpg&fm=jpg"
          alt="img">
      </div>
    </div>

    <div class="abt2">
      <div class="abt21">

        <div class="abt211" id="ed" >Education</div><br /><br/>
      </div>
      <div class="abt22">
        <div>

         <div class="dt" > 2008 - 2023</div><br/>

          University title. School passed by HBSC Board.<br/><br/>
        </div>
        <div>
         <div class="dt">2023 - 2024</div> <br/>

          Coaching of Web Developer complete cource by Dics institute.<br/><br/>

        </div>
        <div>
          <div class="dt"> 2023 - 2028</div>
         <br/>

          University title.Collage complete by GCW faridabad collge(MDU).<br/><br/>

          I'm complete a graduation in 2026 . I am a BCA student . I complete master<br/><br/> degree of MCA
          in 2028.
        </div>
      </div>
    </div>
    </div>

<div class="fm1" >
  <div class="fm2">
   <div class="con" >
Contact<br/>
Information
</div> 
<div><br/><br/>
Department of BCA<br/>
software Center<br/><br/>

500 Terry Francine St.<br/>
San Francisco, CA 94158<br/><br/>

info@mysite.com<br/>

123-456-7890 <br/>
in <i class="fa fa-facebook" ></i>

</div>
  </div>
   <form id="con">
    <div>
      <label for="fn">First name</label><br/>
      <input type="text" id="fn" ><br/><br/>
      <label for="ln">Last name</label><br/>
      <input type="text" id="ln"><br/><br/>
      
      <label for="em">E-mail</label><br/>
      <input type="text"  id="em"><br/><br/>
      <label for="sb">Subjact</label><br/>
      <input type="text" id="sb"><br/><br/>
      <label for="tx">Leave a Message</label><br/>
      <textarea name="" id="txt" cols="30" rows="10"></textarea>
      <input type="submit" value="Submit" id="sub">
   </form>
   </div>
  </div>
   <div class="lst" >©2035 by Asha Pal. Powered and secured by Wix</div>
   <script>
    var edu = document.getElementById('edu');
    function edu(){
       edu.scrollIntoView();
    }
</body>
</html>