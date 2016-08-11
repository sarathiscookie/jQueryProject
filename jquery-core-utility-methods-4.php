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
            <h4>$.trim()</h4>
            <h4>Removes leading and trailing whitespace(trim)</h4>
            <h5>eg: ("    lots of extra whitespace    ")</h5>
            <p id="trim"></p>
        </div>
    </div>
    <div clas="col-md-12">
        <div class="row">
            <h4>$.each()</h4>
            <h4>Iterates over arrays and objects(each)</h4>
            <h5>Array elements: "foo", "bar", "baz"</h5>
            <div>
                <b>Result:</b>
                <ul id="list">
                </ul>
            </div>
        </div>
    </div>
    <div clas="col-md-12">
        <div class="row">
            <h4><b>$.inArray()</b></h4>
            <h4>Returns a value's index in an array. if the value is not in the array -1 is the result</h4>
            <h5>Array elements: [ 11, 22, 33, 55 ]</h5>
            <div>
                <b>Result:</b>
                <div id="arrayResult"></div>
            </div>
        </div>
    </div>
    <div clas="col-md-12">
        <div class="row">
            <h4><b>$.extend()</b></h4>
            <h5><b>Changes the properties of the first object using the properties of subsequent objects:</b></h5>
            <div>
                <b>Result:</b>
                <div id="extendResult"></div>
            </div>
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
        /*$.trim()*/
        var trim    = "    lots of extra whitespace    ";
        var trimmed = $.trim(trim);
        $("#trim").html("<b> Result : </b>"+trimmed);

        /*$.each()*/
        $.each(["foo", "bar", "baz"], function(idx, val){
            $("#list").append('<li id="'+idx+'">'+val+'</li>');
        })

        /*$.inArray()*/
        var array = [ 11, 22, 33, 55 ];
        if($.inArray(33, array) != -1){
            if($.type(3) === 'number')
            {
                alert('number');
            }
            var data = $.inArray(33, array);
            $("#arrayResult").append('<div>'+data+'</div>');
        }

        /*$.extend()*/
        var firstObject    = {a: 'foo', b: 'bar' };
        var secondObject   = {b: 'joo'};
        var newObject      = $.extend(firstObject, secondObject);
        $("#extendResult").append('<div>firstObject:'+firstObject.b+'</div><br><div>newObject:'+newObject.b+'</div>')

        /*$.proxy()*/

    });
</script>
</body>
</html>
