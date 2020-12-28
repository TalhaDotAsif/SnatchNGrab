<html>
<head>
  <title>Snatch n Grab </title>

</head>
<!--BODY -->
<body bgcolor="#212131" text="white">
<font face ="Comic sans MS" size = 3>
	<h1>Category form</h1>
  <!--FORM -->
  <div>
    <form method="post" name="forms" action="" >
	

          <fieldset>
          <legend>Adding new category</legend>
          <label>Cat ID:</label> <input type="text" name="ID" size=25/>
          <label>Name:</label> <input type="text" name="name" size=25/>

          

          </fieldset>
		
		
            <p></p>
		
        <input type="submit" value="ADD Category" />
        <input type="button" value="Back" onclick="history.back()">
        <input type="button" value="Refresh" onclick="location.reload()">


  </div>
      
       
    
  </form>

    <?php  // creating a database connection


    #error_reporting(0);

    if (!empty($_POST))
    {


        $db_user = "masterData";   // Oracle username e.g "scott"
        $db_pass = "1234";    // Password for user e.g "1234"
        $con = oci_connect($db_user,$db_pass);
        if($con)
        { echo "Oracle Connection Successful.";


            $itemId=filter_input(INPUT_POST,'ID');
            $name=filter_input(INPUT_POST,'name');



            $test="insert into ITEM_GROUP values('$itemId','$name')";
            $query_id = oci_parse($con, $test);


            $r = oci_execute($query_id);

            if($r)
            {
                echo "<legend>Successfully Added, Refreshing after 5</legend>";
                echo "<meta http-equiv=\"refresh\" content=\"5\">";



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