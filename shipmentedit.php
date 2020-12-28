<html>
<head>
  <title>Snatch n Grab </title>

</head>
<!--BODY -->
<body bgcolor="#212131" text="white">
<font face ="Comic sans MS" size = 3>
	<h1>Shipment Update/ Edit form</h1>
  <!--FORM -->
  <div>
    <form method="post" name="forms" action="" >
	

          <fieldset>

              <label>Shipment ID:</label> <input type="text" name="shipID" size=25/>
              <label>Supplier ID:</label> <input type="text" name="suppID" size=25/>
              <label>Date.:</label> <input type="date" name="date" size=25 />
              <!--<label>Item Count: <textarea col=70 rows=1 name="address"></textarea></label>-->
              <p></p>
              <label>Time:</label> <input type="time" name="time" size=25 />


          </fieldset>
		
		
            <p></p>
		
        <input type="submit" value="Edit Shipment" />
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


            $shipID=filter_input(INPUT_POST,'shipID');
            $suppID=filter_input(INPUT_POST,'suppID');
            $date=filter_input(INPUT_POST,'date');
            $time=filter_input(INPUT_POST,'time');



            $test="update Shipment set SID='$suppID' , DT=to_date('$date','YYYY-MM-DD'), TIME='$time' where SHIPMENTID='$shipID'";
            $query_id = oci_parse($con, $test);


            $r = oci_execute($query_id);

            if($r)
            {
                echo "<legend>Successfully Updated, Refreshing after 5</legend>";
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