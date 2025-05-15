<?php
declare(strict_types=1);

namespace LeadDeskTasks;

class MaxSubarrayImplementation implements MaxSubarray
{

    public function contiguous(array $array): int
    {
        if (empty($array)) {
            return 0;
        }

        // track the maxSubarray sum for the whole array
        if (is_numeric($array[0])) {
            $maxSumFound = $array[0];
            $maxSumOfPrevElements = $array[0];
        } else {
            $maxSumFound = 0;
            $maxSumOfPrevElements = 0;
        }
        // track the maxSubarray sum until the current element

        for ($i = 1; $i < count($array); $i++) {
            $currentElement = $array[$i];
            if (!is_numeric($currentElement)) {
                //reset sum of prevElements and continue...
                $maxSumOfPrevElements = 0;
                continue;
            }


            // if the $maxSumOfPrevElements is higher, than the previous $maxSumOfPrevElements - update it
            $maxSumOfPrevElements = max($maxSumOfPrevElements + $currentElement, $currentElement);

            // if the $maxSumOfPrevElements is higher than the current maxSumFound -- update it.
            $maxSumFound = max($maxSumFound, $maxSumOfPrevElements);
        }
        return $maxSumFound;
    }

}
