
<title>GETTING REAL IP OF THE VISITOR</title>
<style>
    @import url(https://fonts.googleapis.com/css?family=Raleway:100);
    body{
        background: #34495e;
        text-align: center;
        font-size:20px;
        margin-top:100px;
        color:white;
        font-family:'Raleway', sans-serif;
    }

    .submit{
        width:100px;
        height:40px;
        background: #2dffdf;
        font-size: 17px;
        color:black;
        font-family: monospace;
    }
    input#userInput{
        height:30px;
        width: 250px;
        font-size: 15px;
        color:black;
    }
</style>


<?php 


//PASSING THE CONDITION
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    
    $the_IP = $client_IP;
    
}else if (!empty( $_SERVER["HTTP_X_FORWARDED_FOR"])){
    
    $the_IP= $forwarded_IP;
    
}else {
    
    $the_IP = $_SERVER["REMOTE_ADDR"];
    
}

//NOW I AM GOING TO ECHO OUT THE_IP

echo $the_IP;

?>


