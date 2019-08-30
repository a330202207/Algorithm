<?php

/**
 * @notes: 快速排序
 * @param array $arr
 * @return array
 * @date: 2019-08-30
 * 从数列中挑出一个元素，称为"基准"（pivot）
 * 重新排序数列，所有比基准值小的元素摆放在基准前面
 * 所有比基准值大的元素摆在基准后面（相同的数可以到任何一边）
 * 在这个分区结束之后，该基准就处于数列的中间位置。这个称为分区（partition）操作
 * 递归地（recursively）把小于基准值元素的子数列和大于基准值元素的子数列排序
 *
 * 在一般情况下的空间复杂度为 O(logn)，在最差的情况下，若每次只完成了一个元素，那么空间复杂度为 O(n)。所以我们一般认为快速排序的空间复杂度为 O(logn)。
 * 快速排序基本上被认为是相同数量级的所有排序算法中，平均性能最好的
 */
function QuickSort(array $arr)
{
    $count = count($arr);
    if ($count < 2) {
        return $arr;
    }
    $pivot = $arr[0];   //基准值
    $left_arr = $right_arr = [];

    for ($i = 1; $i < $count; $i++) {
        if ($arr[$i] < $pivot) {
            $left_arr[] = $arr[$i];
        } else {
            $right_arr[] = $arr[$i];
        }
    }
    $left_arr  = QuickSort($left_arr);
    $right_arr = QuickSort($right_arr);
    return array_merge($left_arr, [$arr[0]], $right_arr);

    // 倒序
    // return array_merge($rightArray, array($middle), $leftArray);
}

$arr = [2, 5, 634, 321, 232, 55, 76, 12, 36, 43, 67];
print_r(QuickSort($arr));