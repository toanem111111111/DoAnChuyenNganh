5.1 Xây dựng một hàm php in ra mảng một chiều và hiển thị trên trình duyệt
web theo dạng bảng HTML. Tạo mảng và gọi hàm vừa tạo.
function showArray($arr)
{
//code in bảng html từ mảng một chiều $arr
}
 <pre><?php
  function showArray($arr){
  $i=0;
     foreach($arr as $k=>$v)
      {
        echo "<td>$k</td>";
        echo "<td>$v</td></tr>";
      }
 
  }
$a=array(1,2,3,3,4,3,3,2,);
?>
<table border=1> <tr><td>Key</td><td>Value</td></tr>
 <?php
 showArray($a)
 ?>

</table>