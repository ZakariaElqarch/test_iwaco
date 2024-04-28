<?php
        $array= [3, 8, -4, 0, 2, -9];
        foreach ($array as &$item):
            $item = ($item >= 0)? $item : pow($item, 2);
        endforeach;
        print_r($array);
