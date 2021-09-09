<form  method="GET">
      Number - <input type="text" name="name"></input></br></br>
      <input type="submit" name="submit"></input>  
</form>
<?php
    if(isset($_GET['submit']))
    {
        $number=$_GET['name'];
    var_dump( filter_var($number,FILTER_VALIDATE_BOOL));
    }

?>