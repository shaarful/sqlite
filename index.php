<!DOCTYPE html>
<html lang="en">
<head>
    <title>Learn SQLite</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container-fluid">
    <?php require('dbcon.php') ?>
    <h2>Learn SQLite</h2>
    <div class="row">
        <div class="col-5">
            <div class="card">
                <div class="card-header bg-primary text-white">Insert</div>
                <div class="card-body">
                    <form action="insert.php" method="post">
                        <div class="form-group">
                            <label for="id">ID</label>
                            <input type="text" class="form-control" id="id" value="default" placeholder="ID" name="id"
                                   readonly>
                        </div>
                        <div class="form-group">
                            <label for="fname">First Name:</label>
                            <input type="text" class="form-control" id="fname" placeholder="First Name" name="fname">
                        </div>
                        <div class="form-group">
                            <label for="lname">Last Name:</label>
                            <input type="text" class="form-control" id="lname" placeholder="Last Name" name="lname">
                        </div>
                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                        </div>
                        <div class="form-group">
                            <label for="pwd">Password:</label>
                            <input type="password" class="form-control" id="pwd" placeholder="Enter password"
                                   name="password">
                        </div>
                        <div class="form-group">
                            <label for="comments">Comments</label>
                            <input type="text" class="form-control" id="comments" placeholder="Comments"
                                   name="comments">
                        </div>
                        <button type="submit" class="btn btn-primary">Add</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-7">
            <div class="card">
                <div class="card-header bg-success text-white">Dashboard</div>
                <div class="card-body">
                    <table class="table table-hover">
                        <thead>
                        <tr>
                            <th>ID</th>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Comments</th>
                        </tr>
                        </thead>
                        <tbody>
                        <?php
                        $sql = "SELECT * FROM user";
                        $result = $db->query($sql);
                        while ($row = $result->fetchArray()) {
                            echo "<tr>
                                    <td>$row[id]</td>
                                    <td>$row[fname]</td>
                                    <td>$row[lname]</td>
                                    <td>$row[email]</td>
                                    <td>$row[password]</td>
                                    <td>$row[comments]</td> 
                                </tr>";
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

</body>
</html>
