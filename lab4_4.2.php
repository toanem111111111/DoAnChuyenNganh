<pre><?php
$a = array(1, -3, 5); //mảng có 3 phần tử
$b = array("a"=>2, "b"=>4, "c"=>-6);//mảng có 3 phần tử.Các index của mảng là chuỗi
?>
Nội dung giá trị mảng a :
<?php
foreach($a as $value)
{
	echo $value ." ";	
}
?>
<br> Nôi dung mảng a (key-value) 
<?php
foreach($a as $key=>$value)
{
	echo "($key - $value )";	
}
?>
<br /> Nội dung mảng b: (key - value):
<?php
foreach($b as $k=>$v)
{
	echo "($k - $v) ";	
}
?>
<br />
Hiển thị nội dung mảng b ra dạng bảng:
<table border=1>
	<tr><td>STT</td><td>Key</td><td>Value</td></tr>
    <?php
	$i=0;
	foreach($b as $k=>$v)
	{	
		$i++;
		echo "<tr><td>$i</td>";
		echo "<td>$k</td>";
		echo "<td>$v</td></tr>";
		
	}
	?>

</table>
4.2 Từ lab4_2.php, hãy sửa code lại để:  
	   <br />a.Đếm số phần tử có giá trị dương của mảng $a:
        <?php
           $demduong=0;
           foreach($a as $key=>$value)
            {
              if($value >=1)
               $demduong++;
            }
    echo $demduong;
	?>
	<br />b. Tạo mảng mới, lưu các phần tử dương trong mảng $b. Ví dụ, mảng $c
được tạo thành từ mảng $b ban đầu có giá trị như sau:
$c = array("a"=>2, "b"=>4)

<?php
      $c = array();
        foreach($b as $key=>$value)
         {
            if($value >=1) $c[$key] = $value;
         }
        echo "<hr> mảng c được tạo thành từ mảng b ban đầu có giá trị như sau:";
     print_r($c);
 ?>