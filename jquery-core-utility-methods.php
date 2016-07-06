<!DOCTYPE html>
<html>
<head>
    <title>Attribute Setter</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <div clas="col-md-12">
        <div class="row">
            <h4><b>1: Removes leading and trailing whitespace(trim)</b></h4>
            <h5><b>eg: ("    lots of extra whitespace    ")</b></h5>
            <p id="trim"></p>
        </div>
    </div>
    <div clas="col-md-12">
        <div class="row">
            <h4><b>2: Iterates over arrays and objects(each)</b></h4>
            <h5><b>Array elements: "foo", "bar", "baz"</b></h5>
            <ul id="list">
            </ul>
        </div>
    </div>
</div>

<!-- Latest compiled and minified JavaScript -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.js"></script>
<!--<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>-->


<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>

<script>
    $(function(){
        var trim    = "    lots of extra whitespace    ";
        var trimmed = $.trim(trim);
        $("#trim").html("<b> Result : </b>"+trimmed);

        $.each(["foo", "bar", "baz"], function(idx, val){
            $("#list").append('<li id="'+idx+'">'+val+'</li>');
        })
    });
</script>
</body>
</html>
