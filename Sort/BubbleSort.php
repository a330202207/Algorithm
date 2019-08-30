<?php


/**
 * @notes: 冒泡排序
 * @param array $arr
 * @return array
 * @date: 2019-08-30
 * 依次比较相邻的两个数，然后根据大小做出排序，直至最后两位数
 * 由于在排序过程中总是小数往前放，大数往后放，相当于气泡往上升，所以称作冒泡排序
 * 但其实在实际过程中也可以根据自己需要反过来用，大数往前放，小数往后放
 */
function BubbleSort(array $arr)
{
    $count = count($arr);

    //从数组中键为0开始循环到最后一个
    for ($i = 0; $i < $count; $i++) {

        //从键为$i的地方循环到数组最后
        for ($j = $i + 1; $j < $count; $j++) {

            //比较数组中相邻两个值的大小
            if ($arr[$i] < $arr[$j]) {      //从小到大排序，此处换成 >
                $temp    = $arr[$i];        //临时变量
                $arr[$i] = $arr[$j];        //第一次更换位置
                $arr[$j] = $temp;           //完成位置互换
            }
        }
    }
    return $arr;
}

$arr = [2, 5, 634, 321, 232, 55, 76, 12, 36, 43, 67];
print_r(BubbleSort($arr));