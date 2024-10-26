<?php

class ClassicMatrixMul
{
    public function mul(array $a, array $b, int $size): array
    {
        $resultArray = $this->prepareEmptyResultArray($size);
        $cellsCount = $size * $size;
        $currentColumn = 0;
        for($cell = 0; $cell < $cellsCount; $cell++)
        {
            $currentRow = intdiv($cell, $size);
            for($i = 0; $i < $size; $i++)
            {
                $resultArray[$currentRow][$currentColumn] += ($a[$currentRow][$i] * $b[$i][$currentColumn]);
            }
            $currentColumn = $currentColumn + 1;
            if ($currentColumn === $size) { $currentColumn = 0; }
        }
        return $resultArray;
    }

    private function prepareEmptyResultArray(int $size): array
    {
        return array_fill(0, $size, array_fill(0, $size, 0));
    }
}

