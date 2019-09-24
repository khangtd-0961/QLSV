<?php
echo $this->Form->create('Sinhvien');
echo $this->Form->input(' ',array('type' => 'hidden'));
echo $this->Form->input('masinhvien');
echo $this->Form->input('malop');
echo $this->Form->input('ten');
echo $this->Form->input('ngaysinh');
echo $this->Form->input('gioitinh');
echo $this->Form->end('Save Sinhvien');
?>