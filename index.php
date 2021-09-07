<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">
    <title>PHP CRUD</title>
</head>
<body>
    <div class="container">
        <h1>PHP + MySQL CRUD Demo</h1>
        <p>Create, Read, Update, and Delete records below</p>

        <table class="table">
            <tbody>
            <?php include 'read.php'; ?>
            </tbody>
        </table>

         <form class="form-inline m-2" action="create.php" method="POST">
            <label for="name">Name:</label>
            <input type="text" class="form-control m-2" id="name" name="name">
            <label for="score">Score:</label>
            <input type="number" class="form-control m-2" id="score" name="score">
            <button type="submit" class="btn btn-primary">Add</button>
        </form>
    </div>
    
</body>
</html>