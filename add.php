<?php
include_once('gh.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <style>
        @import url('https://fonts.googleapis.com/css?family=Roboto');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    font-family: 'Roboto', sans-serif;
}
body{
    background: url('gold6.jpg') no-repeat top center;
    background-size: cover;
    height: 100vh;
}
.wrapper{
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    width: 100%;
    padding: 0 20px;

}
.f{
    max-width: 550px;
    margin: 0 auto;
    background: rgba(243, 247, 248, 0.8);
    padding: 30px;
    border-radius: 5px;
    display: flex;
    box-shadow: 0 0 10px wheat;
    flex-direction: column;
}
.input-fields{
    display: flex;
    flex-direction: column;
    margin-right: 4%;

}
.input-fields,
.msg{
    width: 48%;
}
.msg{
    display: flex;
    flex-direction: row;
    width: 100%;
}
.input-fields,.input{
    margin: 10px 0;
    background: transparent;
    border: 0;
    border-bottom: 2px solid white;
    padding: 10px;
    color: black;
    width: 100%;
}
::-webkit-input-placeholder{
    color: black;
}
::-moz-input-placeholder{
    color: rgba(0, 0, 0, 0.8);
}
.btn{
    background: #39b7dd;
    text-align: center;
    padding: 15px;
    border-radius: 5px;
    color: #fff;
    cursor: pointer;
    text-transform: uppercase;
}
h1{
    color: black;
}
@media screen and (max-width:600px){
    .f{
        flex-direction: column;
    }
    .input-fields,
    .msg{
        width: 100%;
    }
    h1{
        color: black;
    }
}

</style>
<body>
<div class="wrapper">
            <div class="f">
                <form id="contact-form" action="update.php" method="post" id="kk">
                <center><h1>Add user</h1></center>
                <div class="input-field">
                <input type="text" class="input" name="name" placeholder="Enter Name" required="required">
                <input type="email" class="input" name="email" placeholder="Enter Email" required="required">
                <input type="text" class="input" name="credit" placeholder="Enter Credit" required="required">
                </div>
            <div class="msg">
                <input type="submit" name="tra" class="btn" value="transfer"></input>
                <div class="btn" onclick="redirect()">back</div>
            </div>
            </div>
        </div>
        </form>
        <script>
            function redirect(){
                window.location.href="res.php";
            }
        </script>
    </body>
</html>