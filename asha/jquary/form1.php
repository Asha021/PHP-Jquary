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
        align-items: center;
        justify-content: space-around;
        /* flex-direction: column; */
        display: flex;
    }
    form{
        align-items: center;
        justify-content: space-around;
        display: flex;
        flex-direction: column;
        height: 80%;
        width: 30%;
        border: 2px solid;
    }
    label{
        width: 100%;
        font-size: 1.4rem;
    }
    input{
        height: 20%;
        width: 100%;
        text-indent: 10px;
        font-size: 1.2rem;
        border-radius: 10px;
    }
    
    #sub{
        font-size: 2rem;
        background-color: dodgerblue;
        color: white;
        /* border-radius: none; */
    }
    .tbl{
        height: 13%;
        width: 50%;
        border: 2px solid;
    }
    .head{
        height: 20%;
        width: 100%;
        border: 1px solid black;
    }
    th{
        border: 1px solid;
        /* height: 20%; */
        background-color: red;
    }
    tr{
        border: 1px solid black;
    }
    td{
        color: brown;
        border: 1px solid;
    }
    
</style>
<body>
    <form method="POST" >
        <label for="fn">First name</label>
        <input type="text" placeholder="enter your first name" id="fn" name="fn" ><br/>
        <label for="ln">Last name</label>
        <input type="text" placeholder="enter your Last name" id="ln" name="ln" ><br/>
        <label for="ml">E-mail</label>
        <input type="mail" placeholder="enter your E-mail" id="em" name="ml" ><br/>
        <label for="pn">Phone No</label>
        <input type="number" placeholder="enter your phone No" id="pn" name="pn" ><br/>
        <label for="ps">Password</label>
        <input type="password" placeholder="enter your password" id="ps" name="ps" ><br/>
        <input type="button" id="sub" value="submit">
    </form>

<table class="tbl" >
  <thead class="head" >
        <th>First name</th>
        <th>Last name</th>
        <th>E-mail</th>
        <th>Phone NO</th>
        <th>Password</th>    
   </thead>
   <tr>
    <td class="a1" ></td>
    <td class="a2" ></td>
    <td class="a3" ></td>
    <td class="a4" ></td>
    <td class="a5" ></td>
   </tr>
</table>


    <script>
        a=true;
        $(document).ready(function(){
            $("#sub").click(() => {
                let fn = $('#fn').val();
                let ln = $('#ln').val();
                let em = $('#em').val();
                let pn = $('#pn').val();
                let ps = $('#ps').val();
                $('.a1').text(fn);
                $('.a2').text(ln);
                $('.a3').text(em);
                $('.a4').text(pn);
                $('.a5').text(ps);
                $('#fn').val("");
                $('#ln').val("");
                $('#em').val("");
                $('#pn').val("");
                $('#ps').val("");
            })
        
            if(a){
                $(".a1").on('mouseenter',()=> {
                    $('#fn').css("background-color","red");
                    a=false;
            });
            $(".a2").mouseenter(() => {
                    $('#ln').css("background-color","red");
                    a=false;
            });
            $(".a3").mouseenter(() => {
                    $('#em').css("background-color","red");
                    a=false;
            });
            $(".a4").mouseenter(() => {
                    $('#pn').css("background-color","red");
                    a=false;
            });
            $(".a5").mouseenter(() => {
                    $('#ps').css("background-color","red");
                    a=false;
            });

            
            $("#fn").mouseenter(() => {
                    $('.a1').css("background-color","red");
                    a=false;
            });
            $("#ln").mouseenter(() => {
                    $('.a2').css("background-color","red");
                    a=false;
            });
            $("#em").mouseenter(() => {
                    $('.a3').css("background-color","red");
                    a=false;
            });
            $("#pn").mouseenter(() => {
                    $('.a4').css("background-color","red");
                    a=false;
            });
            $("#ps").mouseenter(() => {
                    $('.a5').css("background-color","red");
                    a=false;
            });


            }if(a){
                $(".a1").mouseleave(() => {
                    $('#fn').css("background-color","white");
                    a=true;
            });
            $(".a2").mouseleave(() => {
                    $('#ln').css("background-color","white");
                    a=true;
            });
            
            $(".a3").mouseleave(() => {
                    $('#em').css("background-color","white");
                    a=true;
            });
            $(".a4").mouseleave(() => {
                    $('#pn').css("background-color","white");
                    a=true;
            });
            $(".a5").mouseleave(() => {
                    $('#ps').css("background-color","white");
                    a=true;
            });


            $("#fn").mouseleave(() => {
                    $('.a1').css("background-color","white");
                    a=true;
            });
            $("#ln").mouseleave(() => {
                    $('.a2').css("background-color","white");
                    a=true;
            });
            
            $("#em").mouseleave(() => {
                    $('.a3').css("background-color","white");
                    a=true;
            });
            $("#pn").mouseleave(() => {
                    $('.a4').css("background-color","white");
                    a=true;
            });
            $("#ps").mouseleave(() => {
                    $('.a5').css("background-color","white");
                    a=true;
            });
            };
            
        })
       
               
           
          
    </script>
</body>
</html>