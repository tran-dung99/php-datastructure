<?php


$arr = "s * (s – a) * (s – b * (s – c)";
function check($string) {
    $stack = new SplStack();
    for($i = 0; $i < strlen($string); $i++) {
        if($string[$i] == ")" && $stack->isEmpty()) {
            return "???";
        }else if($string[$i] == "(") {
            $stack->push($string[$i]);
        }else if($string[$i] == ")" && $stack->top() == "(") {
            $stack->pop();
        }
    }
    if($stack->isEmpty()) {
        return "well";
    }else {
        return "???";
    }
}

echo check($arr);

