<?php


function connectDB(){
    $server = "cs1.ucc.ie";
    $user = "bjk1";
    $pass = "pipho";
    $dataBase = "DREAMHOME_bjk1";
    
    $connectId =  mysqli_connect($server,$user,$pass,$dataBase);
    
    if($connectId){
        //echo "<h1>Server Connected<h1>";
        return $connectId;
    }else{
        return(FALSE);
    }

}

function htmlStar($title, $header){
    print("<html>\n");
    print("<head>\n");
    if($title != "")
        print("<title>$title</title>\n");
    print("</head>\n");
    print("<body bgcolor=\"lime\">\n");
    
    if($header != "")
        print("<h1>$header</h1>\n");
        
    
    
}

function htmlStop(){
    print("</body>\n");
    print("</html>");
    
}
?>