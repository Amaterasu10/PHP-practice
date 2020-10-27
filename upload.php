<form action="upload.php" method = "post">
    Post: <input type="text" name = "text">
    <input type="submit">
</form>


<h1>
    <?php 
        $myfile = fopen("comments/new open.txt", "r") or die("Unable to open file!");
        echo fread($myfile,filesize("comments/new open.txt"));

        if(isset($_POST["text"])){
            $text = $_POST["text"];
        }
        if(isset($text)){
            $myfile = fopen("comments/new open.txt", "w") or die("Unable to open file!");
            fwrite($myfile,"<br>".$text);
        }
        echo fread($myfile,filesize("comments/new open.txt"));
        fclose($myfile);
        
    ?> 
</h1>

