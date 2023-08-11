<?php

namespace Strategy;

interface SearchingInterface {

    public function search(array $data, $value): string;
}