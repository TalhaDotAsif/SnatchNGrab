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
            <legend>Updating Supplier</legend>
            <label>Supplier id:</label> <input type="text" name="sId" size=25/>
            <!--<label>Item Count: <textarea col=70 rows=1 name="address"></textarea></label>-->
            <p></p>
            <label>Supplier Name:</label> <input type="text" name="sName" size=25 />

            <label>Supplier Phone No.:</label> <input type="text" name="sPN" size=25 />

        </fieldset>



        <p></p>
		
        <input type="submit" value="Update Supplier details" />
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

            $sname=filter_input(INPUT_POST,'sName');
            $sId=filter_input(INPUT_POST,'sId');
            $sPN=filter_input(INPUT_POST,'sPN');




            $test = "update Supplier set SNAME='$sname', SPHONENO='$sPN' where SID='$sId'";
            $query_id = oci_parse($con, $test);
            $r = oci_execute($query_id);


            if($r)
            {
                echo "<legend>Successfully Updated, Refreshing after 5</legend>";
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