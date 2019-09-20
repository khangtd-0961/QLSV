
<?php
echo $this->Form->create('Page');
echo $this->Form->input(' ',array('type' => 'hidden'));
echo $this->Form->input('Masinhvien');
echo $this->Form->input('Mamonhoc');
echo $this->Form->input('Malop');
echo $this->Form->input('Ten');
echo $this->Form->input('Ngaysinh');
echo $this->Form->input('Gioitinh');
echo $this->Form->end('Save Page');
?>