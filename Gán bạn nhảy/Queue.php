<?php
include_once "Dancer.php";
     $queueOne = new SplQueue();
     $queueTwo = new SplQueue();

     function dance($row1,$row2) {
      for($row1->rewind();$row1->valid(); $row1->next()) {
          if(!$row1->isEmpty()) {
              $row1->dequeue();
          }else {
              if(!$row2->isEmpty()) {
                  echo "đợi hàng nữ thêm người";
              }
          }
      }
         for($row2->rewind();$row2->valid(); $row2->next()) {
             if(!$row2->isEmpty()) {
                 $row2 -> dequeue();
             }else {
                 if(!$row1->isEmpty()) {
                     echo "đợi hàng nam thêm người";
                 }
             }
         }
     }
     function displayCountDance( $row1,$row2) {
         if($row1->isEmpty()) {
             return "Số người phải đợi ở hàng nữ là : ".$row2->count();
         }else if($row2->isEmpty()) {
             return "Số người phải đợi ở hàng nam là : ".$row1->count();
         }

     }

$queueOne->enqueue(new Dancer("Nam","male"));
$queueOne->enqueue(new Dancer("hoàng","male"));
$queueOne->enqueue(new Dancer("khang","male"));
$queueOne->enqueue(new Dancer("Thắng","male"));
$queueTwo->enqueue(new Dancer("dung","female"));
$queueTwo->enqueue(new Dancer("trinh","female"));
$queueTwo->enqueue(new Dancer("yến","female"));


echo"<pre>";
 dance($queueOne,$queueTwo);
 dance($queueOne,$queueTwo);
 dance($queueOne,$queueTwo);
echo"<br>";
echo displayCountDance($queueOne,$queueTwo);




