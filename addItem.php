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
                <legend>Adding new item</legend>
                <label>employee id:</label> <input type="text" name="empID" size=25/>
                <label>supplier id:</label> <input type="text" name="suppID" size=25/>
                <label>Cat id:</label> <input type="text" name="catID" size=25/>
                <br>

                <label>Item ID:</label> <input type="text" name="iID" size=25/>
                <label>Stock ID:</label> <input type="text" name="stockID" size=25/>

                <label>Shipment ID:</label> <input type="text" name="shipmentID" size=25/>
                <br>
                <label>Item Name:</label> <input type="text" name="iname" size=25/>
                <br>
                <label>Item Cost:</label> <input type="text" name="icost" size=25/>
                <label>Item Brand:</label> <input type="text" name="ibrand" size=25 />
                <!--<label>Item Count: <textarea col=70 rows=1 name="address"></textarea></label>-->
                <p></p>
                <label>Item Count:</label> <input type="text" name="icount" size=25 />

            </fieldset>


            <p></p>

            <input type="submit" value="ADD ITEM" />
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


            $eid=filter_input(INPUT_POST,'empID');
            $ename=filter_input(INPUT_POST,'iname');
            $cost=filter_input(INPUT_POST,'icost');
            $brand=filter_input(INPUT_POST,'ibrand');
            $count=filter_input(INPUT_POST,'icount');
            $iD=filter_input(INPUT_POST,'iID');
            $suppID=filter_input(INPUT_POST,'suppID');
            $catID=filter_input(INPUT_POST,'catID');
            $stockID=filter_input(INPUT_POST,'stockID');
            $shipmentID=filter_input(INPUT_POST,'shipmentID');



            $test="insert into Items values('$iD','$eid','$suppID','$catID','$stockID','$shipmentID'
                
                , '$ename','$cost','$brand','$count'
                )";
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