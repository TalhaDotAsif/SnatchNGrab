<html>
<head>
  <title>Snatch n Grab </title>

</head>
<!--BODY -->
<body bgcolor="#212131" text="white">
<font face ="Comic sans MS" size = 3>
	<h1>Category Remove Form</h1>
  <!--FORM -->
  <div>
    <form method="post" name="forms" action="" >
	  
          <p>Enter the Category's id to be removed</p>
          <fieldset>
          <legend>Removing Category</legend>
          <label>Category id:</label> <input type="text" name="ID" size=25/>


          </fieldset>
		
		
            <p></p>
		
        <input type="submit" value="REMOVE Category" />
        <input type="button" value="Back" onclick="history.back()">
       
      </div>
      
       
    
  </form>


    <?php  // creating a database connection


    if (!empty($_POST))
    {
        $db_user = "masterData";
        $db_pass = "1234";
        $con = oci_connect($db_user,$db_pass);
        if($con)
        {
            echo "Oracle Connection Successful.";
            $iid=filter_input(INPUT_POST,'ID');



            $test = " DELETE from ITEM_GROUP where GID='$iid'";
            $query_id = oci_parse($con, $test);
            $r = oci_execute($query_id);


            if($r)
            {
                echo "<legend>Successfully Removed, Refreshing after 5</legend>";
                echo "<meta http-equiv=\"refresh\" content=\"5\">";




                $r = oci_execute($query_id);

            }
        }


        else
        {
            die('Could not connect to Oracle: ');

        }


    }






    ?>


</font>
</body>

</html>