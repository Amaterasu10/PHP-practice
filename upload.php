<form action="upload.php" method = "post">
    Post: <input type="text" name = "text">
    <input type="submit" name = "submit" value ="submit">
    <input type="submit" name = "delete" value ="delete">
</form>


<h1>
    <?php
        $filepath ="comments/new open.txt";
        if(!empty($_POST["text"])){
            $text = $_POST["text"];
        }
        if(isset($text)){
            $handle = fopen($filepath, "a+") or die("Unable to open file!");
            fwrite($handle,"\r $text <br>");
            echo fread($handle,filesize("$filepath"));
            fclose($handle);
        }

        if(isset($_POST["delete"])){
            $handle = fopen($filepath, "w") or die("Unable to open file!");
        }
        
        if ( 0 !== filesize($filepath) ){
            $handle = fopen($filepath, "r") or die("Unable to open file!");
            echo fread($handle,filesize($filepath));
        }
        
    ?> 
</h1>

