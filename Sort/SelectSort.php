<?php

/**
 * @notes: 选择排序
 * @param array $arr
 * @return array
 * @date: 2019-08-30
 * 首先在未排序序列中找到最小（大）元素
 * 存放到排序序列的起始位置
 * 再从剩余未排序元素中继续寻找最小（大）元素
 * 放到已排序序列的末尾
 * 以此类推，直到所有元素均排序完毕
 */
function SelectSort(array $arr)
{
    $count = count($arr);
    if ($count < 2) {
        return $arr;
    }

    for ($i = 0; $i < $count - 1; $i++) {
        $min = $i;
        for ($j = $i + 1; $j < $count; $j++) {

            //比较当前元素与后面元素
            if ($arr[$min] > $arr[$j]) {        //从大到小排序，此处换成 <
                //赋值新的最小元素
                $min = $j;
            }
        }

        if ($min != $i) {
            $temp       = $arr[$min];       //临时变量
            $arr[$min]  = $arr[$i];         //最小元素替换成当前元素
            $arr[$i]    = $temp;            //当前元素替换成最小元素
        }
    }
    return $arr;
}

$arr = [2, 5, 634, 321, 232, 55, 76, 12, 36, 43, 67, 1];
print_r(SelectSort($arr));