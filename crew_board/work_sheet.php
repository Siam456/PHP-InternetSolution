<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.12.1/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js" charset="utf-8"></script>
    <title>Document</title>
</head>
<body>
    <?php
    include("./crew_nav.php")
    ?>

    <div class="container my-5 p-3">
        <form action="work_sheet_insert.php" method="post">
            <div class="form-group">
                <label for="name">Name of Customer</label>
                <input type="text" class="form-control" id="name" name="username" placeholder="Enter Customer name">
            </div>
            <div class="form-group">
                <label for="userid">USER ID</label>
                <input type="number" class="form-control" id="userid" placeholder="Enter User Id" required>
            </div>
            <div class="form-group">
                <label for="phone">Phone No</label>
                <input type="number" class="form-control" id="phone" name="phone" placeholder="Enter Phone Number" required>
            </div>
            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" class="form-control" id="address" name="address" placeholder="Enter Customer Address" required>
            </div>
            <div class="form-row">
                <div class="col">
                <input type="text" class="form-control" name="comtime" placeholder="Complain Time" required>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="soltime" placeholder="Solve Time" disabled>
                </div>
            </div>
            <div class="form-row mt-3">
                <div class="form-group col-md-6">
                <label for="sp1">Support 1</label>
                <input type="text" class="form-control" name="sp1" id="sp1" required>
                </div>
                <div class="form-group col-md-6">
                <label for="sp2">Support 2</label>
                <input type="text" class="form-control" name="sp2" id="sp2" required>
                </div>
            </div>
            <div class="form-row">
                <div class="col">
                <input type="text" class="form-control" name="complain" placeholder="Complain" required>
                </div>
                <div class="col">
                <input type="text" class="form-control" name="current" placeholder="Current Status" disabled>
                </div>
            </div>
            <br>
            <button type="submit" name="submit" class="btn btn-primary d-block mx-auto mt-2">ADD TO RECORD</button>          

        </form>
    </div>

</body>
</html>