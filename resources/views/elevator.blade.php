<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Elevator test">
    <meta name="author" content="Angel H">

    <title>Bare - Start Bootstrap Template</title>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <style>
    body {
        padding-top: 70px;
    }
    </style>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="#">Sonata Services - Elevator Test</a>
            </div>
        </div>
    </nav>

    <!-- Page Content -->
    <div class="container">

        <h2>Sample data </h2>
        <p>The form below contains the sample data to be sent to the API</p>
        <form method="POST" action="./api/call">
            
            <div class="form-group">
            <label for="sel1">Destination 1:</label>
            <select class="form-control" name="sel1">
                <option value="1">Floor 1</option>
                <option value="2">Floor 2</option>
                <option value="3">Floor 3</option>
                <option value="4">Floor 4</option>
                <option value="5" selected="selected">Floor 5</option>
                <option value="6">Floor 6</option>
                <option value="7">Floor 7</option>
            </select>
            </div>

            <div class="form-group">
            <label for="sel2">Destination 2:</label>
            <select class="form-control" name="sel2">
                <option value="1">Floor 1</option>
                <option value="2">Floor 2</option>
                <option value="3">Floor 3</option>
                <option value="4">Floor 4</option>
                <option value="5">Floor 5</option>
                <option value="6">Floor 6</option>
                <option value="7" selected="selected">Floor 7</option>
            </select>
            </div>

            <div class="form-group">
            <label for="sel2">Destination 3:</label>
            <select class="form-control" name="sel3">
                <option value="1">Floor 1</option>
                <option value="2">Floor 2</option>
                <option value="3">Floor 3</option>
                <option value="4">Floor 4</option>
                <option value="5">Floor 5</option>
                <option value="6" selected="selected">Floor 6</option>
                <option value="7">Floor 7</option>
            </select>
            </div>

            <div class="form-group">
            <label for="sel2">Destination 4:</label>
            <select class="form-control" name="sel4">
                <option value="1">Floor 1</option>
                <option value="2">Floor 2</option>
                <option value="3" selected="selected">Floor 3</option>
                <option value="4">Floor 4</option>
                <option value="5">Floor 5</option>
                <option value="6">Floor 6</option>
                <option value="7">Floor 7</option>
            </select>
            </div>

            <div class="form-group">
            <label for="sel5">Destination 5:</label>
            <select class="form-control" name="sel5">
                <option value="1" selected="selected">Floor 1</option>
                <option value="2">Floor 2</option>
                <option value="3">Floor 3</option>
                <option value="4">Floor 4</option>
                <option value="5">Floor 5</option>
                <option value="6">Floor 6</option>
                <option value="7">Floor 7</option>
            </select>
            </div>
            <p class="remove text-right">Remove stop:
                <a href="#">
                    <span style="color:darkred;" class="glyphicon glyphicon-minus"></span>
                </a>
            </p>
            <p class="add text-right">Add stop:
                <a href="#">
                    <span class="glyphicon glyphicon-plus"></span>
                </a>
            </p> 
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        
    </div>
    <script>
    $('.add, .remove').on('click', function() {
        alert('This is just an idea');
    });
    </script>
</body>

</html>