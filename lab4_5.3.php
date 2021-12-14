5.3 Xây dựng một mảng chứa danh sách $n câu hỏi trắc nghiệm. Hãy viết trang
để in ra một đề thi lấy ngẫu nhiên $m câu hỏi ($m<$n) trong danh sách câu
hỏi từ mảng câu hỏi đã cho ban đầu.
<!DOCTYPE html> <html lang="en"> <head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <title>Câu Hỏi Trắc Nghiệm</title>
</head> <body>
 <?php
 
 $cau1=array("1 + 1 = ?",3,1,2,3,4);
 $cau2=array("1 * 1 = ?",2,1,2,3,4);
 $cau3=array("1 - 1 = ?",5,1,2,3,0);
 $cau4=array("1 / 1 = ?",2,1,2,3,4);
 $cau5=array("1 + 2 = ?",4,1,2,3,4);
 $cau6=array("1 * 2 = ?",3,1,2,3,4);
 $ngan_hang=array($cau1,$cau2,$cau3,$cau4,$cau5,$cau6);
 $de=array_rand($ngan_hang,3);
 var_dump($de);exit;
 $cau=1;
 foreach($de as $mach)
 {
 $cau_hoi=$ngan_hang[$mach];
 
 ?>
 <div style="margin-bottom:20px">
 <table border="0">
 <tr>
 <td colspan="4">
 <?php echo "Câu ",$cau++,".<br> ",$cau_hoi[0];?>
 </td>
 </tr>
 <?php
 for($i=2;$i< count($cau_hoi);$i++)
 {
 ?>
 <tr>
 <td> <input type="radio" name="<?php echo $mach;?>"
value="<?php echo $cau_hoi[$i];?>">
 <?php echo $cau_hoi[$i];?>
 </td>
 </tr>
 <?php }?>
 </table>
 </div>
 <?php
 }
 ?>
</body>
</html>