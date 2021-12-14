
5.2 Viết hàm duyệt và in ra danh sách mảng 2 chiều $arr sau ra dạng bảng
HTML.
$arr= array();
$r = array("id"=> "sp1", "name "=> "Sản phẩm 1 ");
$arr[] = $r;
$r = array("id"=> "sp2", "name "=> "Sản phẩm 2 ");
$arr[] = $r;
$r = array("id"=> "sp3", "name "=> "Sản phẩm 3 ");
$arr[] = $r;
Stt Mã Sản Phẩm Tên Sản Phẩm
1 Sp1 Sản phẩm 1
2 Sp2 Sản phẩm 2
3 Sp3 Sản phẩm 3
<hr/>
<?php
$arr = array("sp1"=>("San pham 1"), "sp2"=>("San pham 2"),"sp3"=>("San pham 3"));
?>
<table cellpadding="3" cellspacing="0" border="1">
 <tr><td>Stt</td>
 <td>Ma San Pham</td>
 <td>Ten San Pham</td>
 </tr>
 <?php
 $stt=1;
 foreach($arr as $key =>$value){
 ?>
 <tr>
 <td><?php echo $stt++ ?></td>
 <td><?php echo (String) $key?></td>
 <td><?php echo (String) $value?></td>
 </tr>
 <?php
 }
 ?>
</table>