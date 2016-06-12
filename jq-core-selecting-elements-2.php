<!DOCTYPE html>
<html>
<head>
<title>Attribute Setter</title>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha512-dTfge/zgoMYpP7QbHy4gWMEGsbsdZeCXz7irItjcC3sPUFtf0kuFbDz/ixG7ArTxmDjLXDmezHubeNikyKGVyQ==" crossorigin="anonymous">
    </head>
    <body>

    <input type="text" name="test">
    <button name="submit">Click</button>
<!-- Latest compiled and minified JavaScript -->
    <script src="//code.jquery.com/jquery-2.2.0.min.js"></script>

    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js" integrity="sha512-K1qjQ+NcF2TYO/eI3M6v8EiNYZfA95pQumfvcVrTHtwQVDG+aHRqLi/ETn2uB+1JqwYqVG3LIvdm9lj6imS/pQ==" crossorigin="anonymous"></script>

    <script>
        $(function(){
            $("button").click(function(){
               console.log($("input[name='test']").val());
            });
        });
        /*http://learn.jquery.com/using-jquery-core/selecting-elements/*/
        /*Create all the task for selecting-elements under this page*/
    </script>
</body>
</html>
