<!doctype html>
<head>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>ToDo'S List App!</title>
</head>
<body>
<h1 class="text-center py-4 my-4">ToDo'S List App</h1>
<div class="w-50 m-auto">
  <form action="data.php" method="post" autocomplete="off">
    <div class="form-group">
      <label for="title">Title</label>
      <input class="form-control" type="text" name="title" id="title" placeholder="Type Here To Add On ToDo'S" Required>
    </div><br>
      <button class="btn btn-success">Add To ToDo'S</button>
  </form>
</div><br>
    <hr class="bg-dark w-50 m-auto">
    <div class="lists w-50 m-auto my-4">
      <h1>Your Lists</h1>
      <div id="lists">
      <table class="table table-dark table-hover">

  <thead>
    <tr>
      <th scope="col" name="id">Sr.no</th>
      <th scope="col">ToDo List</th>
      <th>Action</th>
    </tr>
  </thead>

<tbody>
  <?php
    include 'database.php';
    $sql="SELECT * FROM todos";
    $result=mysqli_query($conn, $sql);
    if($result)
    {
     while($row=mysqli_fetch_assoc($result))
     {
            $id=$row['id'];
            $title=$row['Title'];          
  ?>
 <tr>
   <td><?php echo $id ?></td>
   <td><?php echo $title ?></td>
    <td>
      <a class="btn btn-success btn-sm" href="edit.php?id=<?php echo $id ?>" role="button">Edit</a>
      <a class="btn btn-danger btn-sm" href="delete.php?id=<?php echo $id ?>" role="button">Delete</a>
    </td>  
 </tr> 
  <?php               
     }
    }
    ?>
</tbody>
</table>
</div>
</div>
</body>
</html>
