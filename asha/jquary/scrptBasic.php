<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
    }
    #p1{
        height: 12%;
        top: 0%;
        left: 0%; 
        width: 7%;
        position: absolute;
        background-color: pink;    
    }
    #p2{
        height: 12%;
        width: 7%;
        left: 93%;
        top: 0%;
        position: absolute;
        background-color: purple;    
    }
    #p3{
        height: 12%;
        width: 7%;
        top: 87%;
        position: absolute;
        background-color: blue;    
    }
    #p4{
        height: 12%;
        width: 7%;
        top: 87%;
        left: 93%;
        position: absolute;
        background-color: red;    
    }
</style>
<body>
    <!-- <button>Click</button> -->
     <p id="p1" ></p>
     <p id="p2" ></p>
     <p id="p3" ></p>
     <p id="p4" ></p>
     
    <script>
        var add = true;
        $(document).ready(function(){
            // $('button').click(function(){
            //     $('button').text("clicked");
            //     // $('body').css("background-color", "blue")
            //     // $("p").slideToggle();
            //     // $("p").css("height","80%");
            //     if(add){
            //         $('body').css("background-color", "green");
            //         // $('p').css("height", "80%");
            //         add = false;
                    
            //     } else{
            //         $('body').css("background-color", "grey");
            //         // $('p').css("height", "30%");

            //         add = true;
            //     }
            // });
          
            $('p').click(function(){
               

            $('#p1').animate({
                     top: '0%',
                     left: '93%'
                },1000).animate({
                    left: '40%',
                    top: "45%",
                    borderRadius: '100%'
                },1000);

                $('#p2').animate({
                     top: '0%',
                     left: '93%'
                     
                },1000).animate({
                     top: '87%',
                     left: '93%'
                     
                },1000).animate({
                    left: '40%',
                    top: "45%",
                     borderRadius: '100%'
                },1000);

                $('#p3').animate({
                     top: '87%',
                     left: '0%'
                     
                },1000).animate({
                    left: '0%',
                    top: '0%'
                },1000).animate({
                    left: '40%',
                    top: "45%",
                     borderRadius: '100%'
                },1000);

                $('#p4').animate({
                     top: '87%',
                     left: '0%'
                     
                },1000).animate({
                    left: '0%',
                    top: '87%'

                },1000).animate({
                    left: '40%',
                    top: "45%",
                     borderRadius: '100%'
                },1000);
            });

            
          
        });


    </script>
    
</body>
</html>