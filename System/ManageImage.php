<?php 
include "./dbConnection.php";
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Image Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.2/css/dataTables.dataTables.css" />
    <style>

      body {
          font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
          background-color: #f8f9fa;
          margin: 0;
      }

      .table {
          background-color: #ffffff;
          border-radius: 8px;
          overflow: hidden;
          margin: 20px;
      }

      .table-striped tbody tr:nth-of-type(odd) {
          background-color: #f1f3f5;
      }

      .table th, .table td {
          vertical-align: middle;
      }

      .table thead {
          background-color: #007bff;
          color: #ffffff;
      }

      .table thead th {
          font-weight: bold;
      }

      .table img {
          border-radius: 4px;
      }

      .btn-primary {
          background-color: #007bff;
          border-color: #007bff;
      }

      .btn-primary:hover {
          background-color: #0056b3;
          border-color: #004085;
      }

      .btn-danger {
          background-color: #dc3545;
          border-color: #dc3545;
      }

      .btn-danger:hover {
          background-color: #c82333;
          border-color: #bd2130;
      }

      .sidebar {
          width: 250px;
          height: 100vh;
          position: fixed;
          top: 0;
          left: 0;
          background-color: #343a40;
          padding-top: 20px;
          z-index: 1;
          overflow-y: auto;
          box-shadow: 2px 0 5px rgba(0,0,0,0.5);
          transition: all 0.3s ease;
      }

      .sidebar .side-header {
          text-align: center;
          margin-bottom: 20px;
          color: #f8f9fa;
      }

      .sidebar img {
          display: block;
          margin: 0 auto 20px;
          width: 80%;
          max-width: 200px;
      }

      .sidebar a {
          display: flex;
          align-items: center;
          padding: 12px 20px;
          text-decoration: none;
          border-radius: 5px;
          font-size: 16px;
          color: #f8f9fa;
          transition: background-color 0.3s, color 0.3s;
          margin: 0 10px;
      }

      .sidebar a:hover {
          background-color: #495057;
          color: #f8f9fa;
      }

      .sidebar .closebtn {
          position: absolute;
          top: 20px;
          right: 20px;
          font-size: 24px;
          color: #f8f9fa;
          cursor: pointer;
      }

      .content {
          margin-left: 270px;
          padding: 20px;
      }
    </style>
</head>
<body>
    <?php include "./sidebar.php"; ?>

    <div class="content">
        <div class="container mt-4">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="mb-4">Image Management</h2>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered" id="demotable">
                            <thead class="thead-dark">
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                    $qry = "SELECT * FROM upload";

                                    while($row = $res->fetch_assoc()){
                                        ?>
                                            <tr>
                                                <td><?php echo htmlspecialchars($row["Id"]); ?></td>
                                                <td><?php echo htmlspecialchars($row["title"]); ?></td>
                                                <td><?php echo htmlspecialchars($row["description"]); ?></td>
                                                <td>
                                                    <img src="images/<?php echo htmlspecialchars($row["image"]); ?>" alt="" height="100px">
                                                </td>
                                                <td><a href="delete.php?id=<?php echo $row['Id']; ?>" class="btn btn-sm btn-danger" onclick="myFunction()">Delete</a></td>
                                            </tr>
                                        <?php
                                    }
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
function myFunction() {
  alert("Successfully uploaded");
}
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.1.2/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            $('#demotable').DataTable();
        });
    </script>
</body>
</html>
