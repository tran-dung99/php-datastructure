<?php

//$dlist = new SplDoublyLinkedList();
//
//$dlist->push('Dung');
//$dlist->push('Hoa');
//$dlist->push('Lan');
//$dlist->unshift(2);
//$dlist->unshift(5);
////$dlist->pop();
////$dlist->shift();
////$dlist->add(1,"Nga");
//echo "<pre>";
//var_dump($dlist);
//for($dlist->rewind();$dlist->valid();$dlist->next()){
//
//    echo $dlist->current()."<br/>";
//}
//echo "<br/>";
//$dlist->setIteratorMode(SplDoublyLinkedList::IT_MODE_LIFO);
//for($dlist->rewind();$dlist->valid();$dlist->next()){
//
//    echo $dlist->current()."<br/>";;
//}



//$a = new SplDoublyLinkedList;
//$arr=[1,2,3,4,5,6,7,8,9];
//for($i=0;$i<count($arr);$i++){
//    $a->add($i,$arr[$i]);
//}
//
//$a->push(11); //push method
//$a->add(10,12); //add method must with index
//$a->shift(); //remove array first value
//$a->unshift(1); //add first value
//echo "<pre>";
//print_r($a);
//$a->rewind(); //initial from first
//
//echo "SplDoublyLinkedList array last/top value " .  $a->top() ." <br>";
//echo "SplDoublyLinkedList array count value " .  $a->count() ."<br>";
//echo "SplDoublyLinkedList array first/top value " . $a->bottom() . "<br>";
//while($a->valid()){ //check with valid method
//    echo 'key ', $a->key(), ' value ', $a->current(),"\n"; //key and current method use here
//    $a->next(); //next method use here
//}
//$a->pop(); //remove array last value
//print_r($a);
//$s=$a->serialize();
//echo $s;



$list = new SplDoublyLinkedList();

for ($i = 0; $i < 2000001; $i++) {
    $list->push($i);
}

$s = microtime(true);

//$res = $list->offsetGet(2000000);     // spend 7 ms
$res = $list->offsetGet(2000000);               // spend 0.07 ms
var_dump($res);

$e = microtime(true);

echo ($e - $s) * 1000;