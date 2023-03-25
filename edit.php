<!doctype html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>ToDo'S List</title>
</head>
<body>
  <h1 class="text-center py-4 my-4">Update Your ToDo'S List</h1>
  <?php
        include 'database.php';
        $id=$_GET['id'];
        $sql="SELECT * FROM todos WHERE id=".$id;
        $result = mysqli_query($conn, $sql);
        if($result)
        {   
         $row=mysqli_fetch_assoc($result);
         $title=$row['Title'];
        }
  ?>
  <div class="w-50 m-auto">
    <form action="editaction.php" method="post" autocomplete="off">
      <div class="form-group">
        <label for="title">Title</label>
        <input class="form-control" type="text" name="title" id="title" value="<?php global $title; echo $title ?>" placeholder="Edit Here Your ToDo'S"
          Required>
          <input type="hidden" name="id" id="id" value="<?php echo $id ?>">
      </div><br>
      <button class="btn btn-success">Update ToDo'S</button>
    </form>
  </div>
</body>
</html>
