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
    <h1>Quan LY Sinh Vien</h1>     
       
  <table class="table">

  <button type="button" class="btn btn-success"><a href="<?php echo $this->Html->url(array('controller' => 'pages', 'action' => 'add')) ?>">Link to action</a></button>
    <thead>
      <tr>
        <th>ID</th>
        <th>Ma sinh vien</th>
        <th>Ma mon hoc</th>
        <th>Mam lop</th>
        <th>Ten</th>
        <th>Ngay Sinh</th>
        <th>Gioi tinh</th>
        <th>edit</th>
        <th></th>
        <th></th>
        <th></th>
      </tr>
    </thead>
    <tbody>
    <tr>
        <?php foreach($page as $rows): ?>
            
                <td><?php echo $rows['Page']['ID']; ?></td>
                <td><?php echo $rows['Page']['Masinhvien']; ?></td>
                <td><?php echo $rows['Page']['Mamonhoc']; ?></td>
                <td><?php echo $rows['Page']['Malop']; ?></td>
                <td><?php echo $rows['Page']['Ten']; ?></td>
                <td><?php echo $rows['Page']['Ngaysinh']; ?></td>
                <td><?php echo $rows['Page']['Gioitinh']; ?></td>  
        <td>
            <?php
                echo $this->Html->link(
                    $rows['Page']['Masinhvien'],
                    array('action' => 'view', $rows['Page']['ID'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Html->link(
                    'Edit',
                    array('action' => 'edit', $rows['Page']['ID'])
                );
            ?>
        </td>
        <td>
            <?php
                echo $this->Form->postLink(
                    'Delete',
                    array('action' => 'delete', $rows['Page']['ID']),
                    array('confirm' => 'Are you sure?')
                );
            ?>
        </td>
    </tr>
<?php endforeach; ?>
<?php unset($rows);?>
    </tbody>
  </table>
</div>
</table>
</body>
</html>