<html>
<head>
  <title>Snatch n Grab </title>

</head>
<!--BODY -->
<body bgcolor="#212131" text="white">
<font face ="Comic sans MS" size = 3>
	<h1>Item form</h1>
  <!--FORM -->
  <div>
    <form method="post" name="forms" action="" >
	

          <fieldset>
          <legend>Modify item details</legend>
          <label>Item ID</label> <input type="text" name="iID" size="25">
          <label>Item Name:</label> <input type="text" name="iname" size=25/>
          <label>Item Cost:</label> <input type="text" name="icost" size=25/>
          <label>Item Brand:</label> <input type="text" name="ibrand" size=25 />
          <!--<label>Item Count: <textarea col=70 rows=1 name="address"></textarea></label>-->

          </fieldset>
		
		
            <p></p>
		
        <input type="submit" value="EDIT ITEM" />
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

            $ename=filter_input(INPUT_POST,'iname');
            $cost=filter_input(INPUT_POST,'icost');
            $brand=filter_input(INPUT_POST,'ibrand');
            $count=filter_input(INPUT_POST,'icount');
            $iD=filter_input(INPUT_POST,'iID');




            $test = "update ITEMS set ITEMNAME='$ename', ITEMCOST='$cost' , ITEMBRAND='$brand' where ITEMID='$iD'";
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