<?php

namespace Strategy;

use Strategy\StrategyPatternExample;
use Strategy\SelectionSorting;
use Strategy\BubbleSorting;
use Strategy\InsertionSorting;

use Strategy\LinearSearching;
use Strategy\BinarySearching;

class Client {

    public StrategyPatternExample $strategy;

    public SelectionSorting $selectSort;
    public BubbleSorting $bubbleSort;
    public InsertionSorting $insertionSort;

    public LinearSearching $linearSearch;
    public BinarySearching $binarySearch;

    public function sortData() {
        $data = [23, 32, 1, 2, 43, 21, 233, 12, 4];

        $this->strategy = new StrategyPatternExample;

        $this->selectSort = new SelectionSorting;
        $this->strategy->setSortingMethod($this->selectSort);
        print_r($this->strategy->executeSorting($data));

        $this->bubbleSort = new BubbleSorting;
        $this->strategy->setSortingMethod($this->bubbleSort);
        print_r($this->strategy->executeSorting($data));

        $data = [69, 12, 88, 50, 25, 36, 101, 5];
        
        $this->insertionSort = new InsertionSorting;
        $this->strategy->setSortingMethod($this->insertionSort);
        print_r($this->strategy->executeSorting($data));
    }

    public function searchDatum() {
        $data = [54, 9, "Peter Parker", 45, 564, "Sydney", "New York"];
        
        $this->strategy = new StrategyPatternExample;

        $this->linearSearch = new LinearSearching;
        $this->strategy->setSearchingMethod($this->linearSearch);
        echo "Linear Search" . PHP_EOL;
        echo $this->strategy->executeSearching($data, "New Delhi") . PHP_EOL;

        $this->binarySearch = new BinarySearching;
        $this->strategy->setSearchingMethod($this->binarySearch);
        echo "Binary Search" . PHP_EOL;
        echo $this->strategy->executeSearching($data, "Sydney") . PHP_EOL;
    }
}