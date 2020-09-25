<?php
include_once('gh.php');
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="style.css">
    </head>
    <style>
        body{
            margin: 0;
            padding: 20px;
            font-family: sans-serif;
            background-image:none;
        }
    *{
        box-sizing: border-box;
    }
.table{
    width: 100%;
    border-collapse: collapse;
}
.table td,.table th{
    padding: 12px 15px;
    border: 1px solid #ddd;
    text-align: center;
    font-size:16px;
}
.table th{
    background-color: darkblue;
    color: #ffffff;
}
.table tbody tr:nth-child(even){
    background-color: #f5f5f5;
}
.i{
    padding:25px 650px;
}
@media (max-width:767px){
    .table thead{
        display: none;
    }
    .table, .table tbody, .table tr, .table td{
        display: block;
        width: 100%;
    }
    .table tr{
        margin-bottom: 15px;
    }
    .table td{
        text-align: right;
        padding-left: 50%;
        text-align: right;
        position: relative;
    }
    .table td::before{
        content: attr(data-label);
        position: absolute;
        left: 0;
        width: 50%;
        padding-left: 15px;
        font-size: 15px;
        font-weight: bold;
        text-align: left;
    }
    button.button{
        background-color:#009879;
        color:white;
        text-align:center;
        border-radius:0;
        font-size:18px;
        opacity:1;
        cursor:pointer;
    }
    button.button2{
        background-color:#ff5722 ;
        text-align: center;
        color: white;
        cursor: pointer;
        padding:5px 5px;
    }
    body{
        background-image:none;
    }
    .i{
        padding:1px 100px;
    }
    
    
}
button.button{
        background-color:#009879;
        color:white;
        text-align:center;
        border-radius:0;
        font-size:18px;
        opacity:1;
        cursor:pointer;
    }
    button.button2{
        background-color:#ff5722 ;
        text-align: center;
        color: white;
        cursor: pointer;
    }
    
    </style>
    <body>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>NAME</th>
                <th>EMAIL</th>
                <th>CREDIT</th>
                <th>ACTION</th>
            </thead>
            <tbody>
                <?php
                $sql="SELECT * FROM userlist";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    echo "<tr><td data-label='ID'>".$row['id']."</td><td data-label='NAME'>".$row['Names']."</td><td data-label='EMAIL'>".$row['Email']."</td><td data-label='CREDIT'>".$row['Credit']."</td><td data-label='ACTION'><a href='transd.php?ID=".$row['id']."'><button class='button'>view</button></a></td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="i">
            <button class="button2" onclick="redirect()">BACK</button>
        </div>
        <script>
            function redirect(){
                window.location.href="res.php";
            }
        </script>
    </body>
</html>