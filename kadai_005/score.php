<?php
// 点数を配列に格納
$score1 = [80];
$score2 = [60];
$score3 = [55];
$score4 = [40];
$score5 = [100];
$score6 = [25];
$score7 = [80];
$score8 = [95];
$score9 = [30];
$score10 = [60];

// すべての点数を1つの配列にまとめる
$allScores = array_merge($score1, $score2, $score3, $score4, $score5, 
                         $score6, $score7, $score8, $score9, $score10);

// 合計点を計算
$totalScore = array_sum($allScores);

// 生徒の人数
$numStudents = count($allScores);

// 平均点を計算
$averageScore = $totalScore / $numStudents;

// 結果を出力
echo "合計点: " . $totalScore . "点\n";
echo "平均点: " . number_format($averageScore, 1) . "点\n";
?>