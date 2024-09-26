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
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
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

    .container {
        width: 640px;
        margin: 0 auto;
    }

    /* 
    header {
        background-color: #333;
        color: white;
        padding: 20px;
        text-align: center;
    } */

    h1 {
        margin: 0;
    }

    h2 {
        margin: 0;
        font-size: 18px;
        /* border: 1px solid; */
    }

    .contact-info,
    .work-experience,
    .education,
    .skills {
        /* border: 1px solid; */
        margin: 20px 0;
    }

    h3 {
        margin: 0;
        /* border: 1px solid; */
    }

    p {
        margin: 10px 0;
        /* border: 1px solid; */

    }

    h4 {
        margin: 0;
        font-size: 16px;
        /* border: 1px solid; */

    }

    ul {
        padding-left: 20px;
    }

    li {
        margin-bottom: 10px;
        /* border: 1px solid; */

    }

    .main {
        height: 120%;
        width: 100%;
        align-items: center;
        justify-content: center;
        display: flex;
        background-color: white;
    }

    .main2 {
        height: 100%;
        width: 60%;
        border: 10px ridge silver;
        background-color: white;
        color: #00254d;
        align-items: center;
        justify-content: space-around;
        display: flex;
        background-color: wheat;
    }

    .main21 {
        /* border: 1px solid black; */
        height: 100%;
        width: 40%;
        align-items: center;
        justify-content: flex-start;
        flex-direction: column;
        display: flex;
        background-color: skyblue;
    }
    .main211{
        /* border: 1px solid black; */
        height: 70%;
        width: 100%;
        align-items: center;
        justify-content: space-evenly;
        flex-direction: column;
        display: flex;
        background-color: skyblue;
    }
   
    .main22 {
        /* border: 1px solid black; */
        height: 100%;
        width: 60%;
        align-items: center;
        justify-content: center;
        display: flex;
        background-color: white;
    }

    .nm {
        font-size: 3rem;
    }

    .nm2 {
        font-size: 1.5rem;

    }
    .main23{
        width: 80%;
        /* border: 1px solid; */
    }
    .img1 {
        height: 200px;
        width: 200px;
        align-items: center;
        justify-content: center;
        display: flex;
        border-radius: 100px;
    }
    .p1,.p2{
        font-size: 1.4rem;
        width: 100%;
        align-items: start;
        justify-content: space-evenly;
        flex-direction: column;
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
            <a href="#con">Contact</a>
        </div>
    </header>

    <div class="main">

        <div class="main2">
            <div class="main21">
                <div class="main211" >
                <img class="img1"
                    src="https://images.pexels.com/photos/245388/pexels-photo-245388.jpeg?cs=srgb&dl=pexels-uus-supendi-245388.jpg&fm=jpg"
                    alt="">
                <div class="p1" >Profile</div>
                <p> Your profile is the outline of your face as it is seen when someone is looking at you from the side.
                    His handsome profile was turned away from us. Synonyms: outline, lines, form, figure More Synonyms
                    of profile.
                </p>
                <div class="p2" >Reference:-</div>
                <p>the work involved in developing a website for the Internet (World Wide Web) or an intranet (a private
                    network). </p>
                    </div>
            </div>
            <div class="main22">
                   <div class="main23" >
                <section class="contact-info">
                    <h1 class="nm">Asha pal</h1>
                    <h4 class="nm2">Web Developer</h4><br />
                    <h3>Contact Information</h3>
                    <p>Ac nagar Near delite hotel<br>
                        Faridabad, Haryana 121001<br>
                        (91+) 8130086835<br>
                        apal66058@email.com</p>
                </section>
                <section class="work-experience">
                    <h3>Work Experience</h3>
                    <ul>
                        <li>
                            <h4>Software Developer</h4>
                            <p>RK Private Ltd, Faridabad, Haryana</p>
                            <p>Dates of Employment<br />21 Aug 2025 </p>
                            <ul>
                                <li>Website creator</li>
                                <li>Creating and maintaing website</li>
                            </ul>
                        </li>
                    </ul>
                </section>
                <section class="education">
                    <h3>Education</h3>
                    <ul>
                        <li>
                            <h4>Bachelor of Computer Application</h4>
                            <p>MDU University, Faridabad, Haryana</p>
                            <p>Graduation Year<br />2026</p>
                        </li>
                    </ul>
                </section>
                <section class="skills">
                    <h3>Skills</h3>
                    <ul>
                        <li>HTML</li>
                        <li>css</li>
                        <li>js</li>
                        <li>php</li>
                    </ul>
                </section>
            </div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>