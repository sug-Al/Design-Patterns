<?php 

namespace Strategy;

use Strategy\SortingInterface;

class BubbleSorting implements SortingInterface {
    
    public function sort(array $data): array {
        echo "Bubble Sort" . PHP_EOL;
        for($i = 0; $i < count($data); $i++)
        {        
            for ($j = 0; $j < count($data) - $i - 1; $j++)
            {    
                if ($data[$j] > $data[$j+1])
                {
                    $t = $data[$j];
                    $data[$j] = $data[$j+1];
                    $data[$j+1] = $t;
                }
            }
        }
        return $data;
    }
}