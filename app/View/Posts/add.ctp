<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>ADD posts</h2>
  <form id="PostAddForm" method="post" action="/posts/add">
    <div class="form-group">
      <label for="Masinhvien">Ma sinh vien</label>
      <input type="text" class="form-control" id="Masinhvien" placeholder="Enter Masinhvien" name="Masinhvien">
    </div>
    <div class="form-group">
      <label for="Mamonhoc">Ma mon hoc</label>
      <input type="text" class="form-control" id="Mamonhoc" placeholder="Enter Ma mon hoc" name="Mamonhoc">
    </div>
    <div class="form-group">
      <label for="Malop">Ma lop</label>
      <input type="text" class="form-control" id="Malop" placeholder="Enter Malop" name="Malop">
    </div>
    <div class="form-group">
      <label for="Ten">Ten</label>
      <input type="text" class="form-control" id="Ten" placeholder="Enter Ten" name="Ten">
    </div>
    <div class="form-group">
      <label for="Namsinh">Nam Sinh</label>
      <input type="Namsinh" class="form-control" id="Namsinh" placeholder="Enter Nam sinh" name="Namsinh">
    </div>
    <div class="form-group">
      <label for="Gioitinh">Gioi tinh</label>
      <input type="Gioitinh" class="form-control" id="Gioitinh" placeholder="Enter Gioi tinh" name="Gioitinh">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>

<?php
echo $this->Form->create('Post');
echo $this->Form->input('Masinhvien');
echo $this->Form->input('Masinhvien');
echo $this->Form->input('Masinhvien');
echo $this->Form->input('Masinhvien');
echo $this->Form->input('Masinhvien');
echo $this->Form->input('body', array('rows' => '3'));
echo $this->Form->end('Save Post');
?>