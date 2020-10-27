<form action="upload.php" method = "post">
   Post: <input type="text" name = "text">
    <input type="submit">
</form>

<?php if($_POST){
    echo "<h1>".$_POST["text"]."</h1>";
}
?>

<h1>
    <?php 
        $myfile = fopen("comments/new open.txt", "w");
       
    ?> 
</h1>

