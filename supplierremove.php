<html>
<head>
  <title>Snatch n Grab </title>

</head>
<!--BODY -->
<body bgcolor="#212131" text="white">
<font face ="Comic sans MS" size = 3>
	<h1>Supplier form</h1>
  <!--FORM -->
  <div>
    <form method="post" name="forms" action="" >
	  
          <p>Enter the Supplier's id to be removed</p>
          <fieldset>
          <legend>Removing Supplier</legend>
          <label>Supplier id:</label> <input type="text" name="iD" size=25/>


          </fieldset>
		
		
            <p></p>
		
        <input type="submit" value="REMOVE Supplier" />
        <input type="button" value="Back" onclick="history.back()">
        <input type="button" value="Refresh" onclick="location.reload()">
       
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
            $iid=filter_input(INPUT_POST,'iD');



            $test = " DELETE from Supplier where SID='$iid'";
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