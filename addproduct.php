<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css">
  <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container">
        <br>
        <h1 class="text-white bg-dark text-center">
            Add New Product
        </h1>
        <div class="col-lg-5">
        <form action="upload.php" method="post" enctype="multipart/form-data">
            <div class="form-group mt-5">
                <label for="">Name:</label>
                <input type="text" name="name" id="name" class="form-control">
                <label for="">Description:</label>
                <textarea name="description"  class="form-control"></textarea>
                <label for="">Category:</label>
                <select name="category" id="category" class="form-control">
                    <option value="Face">Face</option>
                    <option value="Body">Body</option>
                    <option value="Hair">Hair</option>
                    <option value="Makeup">Makeup</option>
                    <option value="Fragnance">Fragnance</option>
                    <option value="Gifts">Gifts</option>
                    <option value="tips">Tips & Advice</option>
                </select>

                <label for="">Price:</label>
                <input type="number" name="price"  class="form-control">
                <label for="">Quantity:</label>
                <input type="number" name="quantity"  class="form-control">
                <label for="">Product Image:</label>
                <input type="file" name="file" id="file" class="form-control">
                <input type="submit" value="Submit" name="submit" class="btn btn-success mt-4">
            </div>
        </form>
        </div>
    </div>
</body>
</html>