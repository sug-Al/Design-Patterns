<?php 

namespace Strategy;

interface SortingInterface {
    
    public function sort(array $data): array;
}