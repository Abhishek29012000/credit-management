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
.t{
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
    
    button{
        background-color:#ff5722 ;
        text-align: center;
        color: white;
        cursor: pointer;
    }
    
    
    
}

    button.button2{
        background-color:#ff5722 ;
        text-align: center;
        color: white;
        cursor: pointer;
        padding:5px 10px;
    }
   
    </style>
    <body>
        <table class="table">
            <thead>
                <th>ID</th>
                <th>FROM</th>
                <th>TO</th>
                <th>CREDITS</th>
            </thead>
            <tbody>
                <?php
                $sql="SELECT * FROM trans";
                $result=$conn->query($sql);
                while($row=$result->fetch_assoc()){
                    echo "<tr><td data-label='ID'>".$row['id']."</td><td data-label='FROM'>".$row['Frname']."</td><td data-label='TO'>".$row['Toname']."</td><td data-label='CREDITS'>".$row['Credittr']."</td></tr>";
                }
                ?>
            </tbody>
        </table>
        <div class="t">
            <button class="button2" onclick="redirect()">BACK</button>
        </div>
        <script>
            function redirect(){
                window.location.href="res.php";
            }
        </script>
    </body>
</html>