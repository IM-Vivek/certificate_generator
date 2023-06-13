<?php
    function get_data($ID)
    {
        $connect = mysqli_connect("localhost","root","","certificate_generator");
        $query = "SELECT * from certificatestemplate WHERE id='$ID'";
        
        $results = mysqli_query($connect, $query);    
        $photo = mysqli_fetch_array($results);
        header('Content-Type:image/jpeg');
        echo $photo["template"];
        mysqli_close($connect);
        return 0;   
    }
    get_data($_GET["id"]);
?>