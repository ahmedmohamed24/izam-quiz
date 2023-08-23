<?php

require_once './vendor/autoload.php';

/**
 * This function accepts 2-d array and convert it to 1-d array with unique values.
 */
function getUniqueOf(array $twoD): array
{
    $uniqueValues = [];

    foreach ($twoD as $row) {
        foreach ($row as $item) {
            if (!in_array($item, $uniqueValues)) {
                $uniqueValues[] = $item;
            }
        }
    }

    return $uniqueValues;
}

/**
 * use binary search algorithm to search in a sorted list for a needle or return false.
 * assuming the list is sorted ascending.
 *
 * @param mixed $needle
 *
 * @return mixed
 */
function searchSortedList(array $list, $needle)
{
    $start = 0;
    $end = count($list) - 1;
    while ($start <= $end) {
        $middleIndex = floor(($start + $end) / 2);
        if ($list[$middleIndex] === $needle) {
            return $middleIndex;
        }
        if ($list[$middleIndex] < $needle) {
            $start = $middleIndex + 1;
        } else {
            $end = $middleIndex - 1;
        }
    }

    return false;
}

/**
 * takes an HTML tag as string and returns its ID value if existed or false if it has no ID.
 *
 * @param [type] $htmlTag
 *
 * @return mixed
 */
function getTagID($htmlTag)
{
    $position = strpos($htmlTag, 'id="');

    if (empty($position)) {
        return false;
    }
    $afterID = substr($htmlTag, $position + 4);
    $position = strpos($afterID, '"');
    if (empty($position)) {
        return false;
    }

    return substr($afterID, 0, $position);
}

/**
 * takes a two-dimensional array and rotates each ROW based on its index.
 */
function rotateArray(array $list): array
{
    foreach ($list as $index => $row) {
        for ($i = 0; $i < $index; ++$i) {
            array_unshift($row, array_pop($row));
        }

        $list[$index] = $row;
    }

    return $list;
}
