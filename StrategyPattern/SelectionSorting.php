<?php 

namespace Strategy;

use Strategy\SortingInterface;

class SelectionSorting implements SortingInterface {
    
    public function sort(array $data): array {
        echo "Selection Sort" . PHP_EOL;
        for($i = 0; $i < count($data) ; $i++)
        {
            $low = $i;
            for($j = $i + 1; $j < count($data) ; $j++)
            {
                if ($data[$j] < $data[$low])
                {
                    $low = $j;
                }
            }
                    
            if ($data[$i] > $data[$low])
            {
                $tmp = $data[$i];
                $data[$i] = $data[$low];
                $data[$low] = $tmp;
            }
        }
        return $data;
    }
}