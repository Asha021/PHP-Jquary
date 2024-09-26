<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.7.1.js"
        integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<style>
    * {
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }

    body {
        height: 100vh;
        align-items: center;
        justify-content: space-around;
        display: flex;
    }

    .main {
        height: 100%;
        width: 80%;
        border: 2px solid;
        align-items: center;
        justify-content: space-around;
        display: flex;
        flex-direction: column;
    }

    ol {
        height: 40%;
        width: 60%;
        align-items: start;
        justify-content: space-around;
        display: flex;
        flex-direction: column;
        border: 2px solid;
    }
</style>

<body>
    <div class="main">
        <button>button</button>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, necessitatibus? Rem quia itaque optio
            aliquam nobis ratione, numquam, saepe, repudiandae eius sint non esse dolorem ipsam eveniet repellendus?
            Doloremque, ipsam!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Sed mollitia autem, quis, minus error illum
            perspiciatis praesentium consequatur vel exercitationem beatae odit. Sit, inventore? Eveniet, rem! Vel
            dolorem nam aliquid!</p>
        <ol id="ol">
            <li id="li">assssssssssssss</li>
            <li>aad</li>
            <li id="a3">awwwwwwwwww</li>
            <li>araaayfssss</li>
            <li>araaayfssss</li>
            <li>araaayfssss</li>
            <li>araaayfssss</li>
            <li>araaayfssss</li>
            <li>araaayfssss</li>

        </ol>
        <ol id="ol">
            <li id="li">a</li>
            <li>aad</li>
            <li id="a3">a</li>
            <li>ahhhhhhhhhhhh</li>
            <li>ahhhhhhhhhhhh</li>
            <li>ahhhhhhhhhhhh</li>
            <li>ahhhhhhhhhhhh</li>
            <li>ahhhhhhhhhhhh</li>
            <li>ahhhhhhhhhhhh</li>

        </ol>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Tempore, necessitatibus? Rem quia itaque optio
            aliquam nobis ratione, numquam, saepe, repudiandae eius sint non esse dolorem ipsam eveniet repellendus?
            Doloremque, ipsam!</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa dicta, id reiciendis accusantium ipsum at
            commodi, in explicabo voluptas eligendi iste perspiciatis sequi repellendus laboriosam? Veniam quo tenetur
            cupiditate molestiae?</p>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime ipsum tempora eveniet, blanditiis accusantium
            molestiae amet, hic ipsam optio dolores voluptatum consectetur itaque pariatur voluptatibus tenetur dolore,
            facere quaerat eum?</p>
    </div>

    <script>
        // children,siblings,next,nextall,nextuntil,prev,prevall,prevall,parent,parents,parentsuntil,odd,even,prepend,apend,insertbefore-after,first,last
        $(document).ready(function () {
            $('.main').click(function () {
                //             $('#li').siblings('#a3').css('background','red');
                // $("ol :odd").first().css('background-color','red');
                // $("p").prepend("🎂");
                // $("p").append("🎂");
                // $("p").insertBefore("ol").css('background','red');
                // $("p").insertAfter("ol").css('background','red');
                //         $('ol').prevAll().css('background','red');
                //         $('ol').nextUntil().css('background','red');
                //         $('ol').next().css('background','red');

                // $("ol").eq(1).css('background', 'red');
            });

            $('button').click(function() {
                // $('ol').slideToggle('button').prepend('ol');
                //  $('ol').fadeOut();
                 $('ol').fadeIn().css('background','color');
                 $('ol').fadetoggle().css('background','color');
            })

        });






    </script>
</body>

</html>