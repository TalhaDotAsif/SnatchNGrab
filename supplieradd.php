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
	

          <fieldset>
          <legend>Adding new Supplier</legend>
          <label>Supplier id:</label> <input type="text" name="sId" size=25/>
              <!--<label>Item Count: <textarea col=70 rows=1 name="address"></textarea></label>-->
              <p></p>
              <label>Supplier Name:</label> <input type="text" name="sName" size=25 />

              <label>Supplier Phone No.:</label> <input type="text" name="sPN" size=25 />

          </fieldset>
		
		
            <p></p>
		
        <input type="submit" value="ADD Supplier" />
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


            $sname=filter_input(INPUT_POST,'sName');
            $sId=filter_input(INPUT_POST,'sId');
            $sPN=filter_input(INPUT_POST,'sPN');



            $test="insert into Supplier values('$sId','$sname','$sPN')";
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