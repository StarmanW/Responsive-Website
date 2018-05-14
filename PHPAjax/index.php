<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://bootswatch.com/4/darkly/bootstrap.min.css">
    <title>PHP AJAX Search</title>
</head>

<body>
    <div class="container">
        <h1>PHP AJAX Search</h1>
        <form action="" method="GET" class="form" autocomplete="off">
            <div class="form-group">
                <label for="search">Search:</label>
                <input type="text" class="form-control" name="search" id="searchBox" placeholder="Search names here..." oninput="showSuggestion(this.value)">
                <p>Suggestions Name List: <br/>
                    <span id="output" style="font-weight:bold;"></span>
                </p>
            </div>
        </form>
    </div>

    <script>
        //Function to display names suggestion using AJAX
        function showSuggestion(names) {
            if (names.length === 0) {
                //Set result text to empty if input text field is empty
                document.getElementById('output').innerHTML = "";                           
            } else {
                //Creating new XMLHttpRequest
                var xmlHttp = new XMLHttpRequest();
                xmlHttp.onreadystatechange = function () {
                    //Verify readyState int and status code
                    if (xmlHttp.readyState === 4 && xmlHttp.status === 200) {
                        //Display the results
                        document. getElementById('output').innerHTML = this.responseText;
                    }
                }
                //Set the open() parameters and send the request
                xmlHttp.open("GET", "suggest.php?name=" + names, true);
                xmlHttp.send();
            }
        }
    </script>
</body>

</html>