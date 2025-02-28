    <?php
    include "./dbConnection.php";
    ?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Admin - Image Upload</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
        <link rel="stylesheet" href="styles.css">
        <style>
            body {
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                background-color: #f8f9fa;
                margin: 0;
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
                box-shadow: 2px 0 5px rgba(0,0,0,0.1);
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
            }

            .sidebar a:hover {
                background-color: #495057;
                color: #f8f9fa;
            }

            #main-content {
                margin-left: 250px;
                padding-top: 20px;
            }

            .card {
                border: none;
                border-radius: 10px;
                box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            }

            .card-body {
                padding: 2rem;
            }

            .btn-primary {
                background-color: #007bff;
                border-color: #007bff;
            }

            .btn-primary:hover {
                background-color: #0056b3;
                border-color: #004085;
            }

            @media (max-width: 768px) {
                #main-content {
                    margin-left: 0;
                    padding-top: 15px;
                }
                .sidebar {
                    width: 100%;
                    height: auto;
                    position: relative;
                    box-shadow: none;
                    padding: 10px;
                }
                .sidebar a {
                    font-size: 14px;
                    padding: 10px;
                }
            }
        </style>
    </head>
    <body>
        <?php include "./sidebar.php"; ?>
        
        <div id="main-content" class="container py-5">
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <div class="card shadow-lg border-0 rounded">
                        <div class="card-body">
                            <div class="text-center mb-4">
                                <i class="fas fa-upload mb-3" style="font-size: 80px; color: #007bff;"></i>
                                <h4 class="card-title">Upload an Image</h4>
                            </div>
                            <form action="" method="post" enctype="multipart/form-data">
                                <div class="mb-3">
                                    <label for="imageTitle" class="form-label">Image Title</label>
                                    <input type="text" class="form-control" id="imageTitle" placeholder="Enter the image title" name="title" required>
                                </div>
                                <div class="mb-3">
                                    <label for="imageDescription" class="form-label">Image Description</label>
                                    <input type="text" class="form-control" id="imageDescription" placeholder="Enter the description" name="description" required>
                                </div>
                                <div class="mb-3">
                                    <label for="imageFile" class="form-label">Image File</label>
                                    <input class="form-control" type="file" id="imageFile" accept=".jpeg, .jpg, .png" name="image" required>
                                </div>
                                <div class="d-grid">
                                    <button class="btn btn-primary btn-lg" type="submit" name="upload" onclick="myFunction()">Upload</button>
                                </div>
                            </form>
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
        <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <script src="scripts.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </body>
    </html>
