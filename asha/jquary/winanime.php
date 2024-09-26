<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
</head>
<body>
<style>
    *{
        margin: 0px;
        padding: 0px;
        box-sizing: border-box;
    }
    body{
        height: 100vh;
        align-items: center;
        justify-content: center;
        display: flex;
        perspective: 800px;
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
        left: 0%;
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
    div{
        /* border: 1px solid black; */
        height: 90%;
        width: 90%;
    }
</style>

<div id="a1" >
<p id="p1" ></p>
     <p id="p2" ></p>
     <p id="p3" ></p>
     <p id="p4" ></p>
     </div>

     <script>
        $(document).ready(function(){
            $("p").click(function(){
              
                $('#p1').animate({
                    left: '40%',
                    top: "45%",
                    
                },1000,()=> $('#p1').css("border", "1px solid white"));
                $('#p2').animate({
                    left: '47%',
                    top: "45%"
                },1000,()=> $('#p2').css("border", "1px solid white"));

                $('#p3').animate({
                    left: '40%',
                    top: "57%"
                },1000,()=> $('#p3').css("border", "1px solid white"));

                $('#p4').animate({
                    left: '47%',
                    top: "57%"
                },1000,()=> $('#p4').css("border", "1px solid white"));

                $('#a1').animate({
                    height: "90%",
                    width: "90%"
                },1000,()=>$("#a1").css("transform","rotateY(-40deg)").css("transition","2s"));

            })    

        })
     </script>
</body>
</html>