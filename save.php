<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("button").click(function(){
        $("div").toggle();
    });
});
</script>
</head>
<body>

<div style = "display: none;">
    <form method="post" name="forms" action="" >
	

        <fieldset>
        <legend>Adding new item</legend>
        <label>Item Name:</label> <input type="text" name="iname" size=25/>
        <label>Item Cost:</label> <input type="text" name="icost" size=25/>
        <label>Item Brand:</label> <input type="text" name="ibrand" size=25 />
        <!--<label>Item Count: <textarea col=70 rows=1 name="address"></textarea></label>-->
        <p></p>
        <label>Item Count:</label> <input type="text" name="icount" size=25 />

        </fieldset>
      
      
          <p></p>
      
      
</div>

<button>Toggle between hide() and show()</button>
<input type="submit" value="ADD ITEM" />
</body>
</html>