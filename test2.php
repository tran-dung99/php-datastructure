<?php

$q = new SplStack();

$q[] = 1;
$q[] = 2;
$q[] = 3;
$q->push(4);
$q->add(4,5);
$q->rewind();
while($q->valid()){
    echo $q->current(),"\n";
    $q->next();
}

$queue = new SplQueue();

$queue->enqueue('A');
$queue->enqueue('B');
$queue->enqueue('C');
$queue->rewind();
while ($queue->valid()) {
    echo $queue->current(), "\n";
    $queue->next();
}