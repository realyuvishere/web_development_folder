<?php
$timer = $_POST['timer'];
// inputs
$username = $_POST['usermail'];

// crossword
// hint 1
$v0_2 = $_POST['0_2'];
$v1_2 = $_POST['1_2'];
$v2_2 = $_POST['2_2'];
$v3_2 = $_POST['3_2'];
$v4_2 = $_POST['4_2'];
$v5_2 = $_POST['5_2'];
$v6_2 = $_POST['6_2'];
//echo "1. ".$v0_2.$v1_2.$v2_2.$v3_2.$v4_2.$v5_2.$v6_2.";";
// hint 2
$v0_7 = $_POST['0_7'];
$v1_7 = $_POST['1_7'];
$v2_7 = $_POST['2_7'];
$v3_7 = $_POST['3_7'];
$v4_7 = $_POST['4_7'];
$v5_7 = $_POST['5_7'];
$v6_7 = $_POST['6_7'];
$v7_7 = $_POST['7_7'];
$v8_7 = $_POST['8_7'];
$v9_7 = $_POST['9_7'];
// echo "2. ".$v0_7.$v1_7.$v2_7.$v3_7.$v4_7.$v5_7.$v6_7.$v7_7.$v8_7.$v9_7.";";
// hint 3
$v1_0 = $_POST['1_0'];
$v1_1 = $_POST['1_1'];
$v1_2 = $_POST['1_2'];
$v1_3 = $_POST['1_3'];
$v1_4 = $_POST['1_4'];
$v1_5 = $_POST['1_5'];
$v1_6 = $_POST['1_6'];
$v1_7 = $_POST['1_7'];
// echo "3. ".$v1_0.$v1_1.$v1_2.$v1_3.$v1_4.$v1_5.$v1_6.$v1_7.";";
// hint 4
$v3_12 = $_POST['3_12'];
$v4_12 = $_POST['4_12'];
$v5_12 = $_POST['5_12'];
$v6_12 = $_POST['6_12'];
$v7_12 = $_POST['7_12'];
$v8_12 = $_POST['8_12'];
$v9_12 = $_POST['9_12'];
$v10_12 = $_POST['10_12'];
$v11_12 = $_POST['11_12'];
$v12_12 = $_POST['12_12'];
$v13_12 = $_POST['13_12'];
// echo "4. ".$v3_12.$v4_12.$v5_12.$v6_12.$v7_12.$v8_12.$v9_12.$v10_12.$v11_12.$v12_12.$v13_12.";";
// hint 5
$v4_6 = $_POST['4_6'];
$v4_7 = $_POST['4_7'];
$v4_8 = $_POST['4_8'];
$v4_9 = $_POST['4_9'];
$v4_10 = $_POST['4_10'];
$v4_11 = $_POST['4_11'];
$v4_12 = $_POST['4_12'];
$v4_13 = $_POST['4_13'];
$v4_14 = $_POST['4_14'];
$v4_15 = $_POST['4_15'];
// echo "5. ".$v4_6.$v4_7.$v4_8.$v4_9.$v4_10.$v4_11.$v4_12.$v4_13.$v4_14.$v4_15.";";
// hint 6 (4_15) => clash
$v4_15 = $_POST['4_15'];
$v5_15 = $_POST['5_15'];
$v6_15 = $_POST['6_15'];
$v7_15 = $_POST['7_15'];
// echo "6. ".$v4_15.$v5_15.$v6_15.$v7_15.";";
// hint 7
$v6_10 = $_POST['6_10'];
$v7_10 = $_POST['7_10'];
$v8_10 = $_POST['8_10'];
$v9_10 = $_POST['9_10'];
$v10_10 = $_POST['10_10'];
$v11_10 = $_POST['11_10'];
$v12_10 = $_POST['12_10'];
$v13_10 = $_POST['13_10'];
$v14_10 = $_POST['14_10'];
$v15_10 = $_POST['15_10'];
// echo "7. ".$v6_10.$v7_10.$v8_10.$v9_10.$v10_10.$v11_10.$v12_10.$v13_10.$v14_10.$v15_10.";";
// hint 8
$v7_3 = $_POST['7_3'];
$v7_4 = $_POST['7_4'];
$v7_5 = $_POST['7_5'];
$v7_6 = $_POST['7_6'];
$v7_7 = $_POST['7_7'];
$v7_8 = $_POST['7_8'];
// echo "8. ".$v7_3.$v7_4.$v7_5.$v7_6.$v7_7.$v7_8.";";
// hint 9
$v9_5 = $_POST['9_5'];
$v9_6 = $_POST['9_6'];
$v9_7 = $_POST['9_7'];
// echo "9. ".$v9_5.$v9_6.$v9_7.";";
// hint 10
$v9_14 = $_POST['9_14'];
$v10_14 = $_POST['10_14'];
$v11_14 = $_POST['11_14'];
$v12_14 = $_POST['12_14'];
$v13_14 = $_POST['13_14'];
$v14_14 = $_POST['14_14'];
$v15_14 = $_POST['15_14'];
$v16_14 = $_POST['16_14'];
$v17_14 = $_POST['17_14'];
$v18_14 = $_POST['18_14'];
$v19_14 = $_POST['19_14'];
// echo "10. ".$v9_14.$v10_14.$v11_14.$v12_14.$v13_14.$v14_14.$v15_14.$v16_14.$v17_14.$v18_14.$v19_14.";";
// hint 11 (10_14) => clash
$v10_14 = $_POST['10_14'];
$v10_15 = $_POST['10_15'];
$v10_16 = $_POST['10_16'];
$v10_17 = $_POST['10_17'];
$v10_18 = $_POST['10_18'];
$v10_19 = $_POST['10_19'];
$v10_20 = $_POST['10_20'];
$v10_21 = $_POST['10_21'];
// echo "11. ".$v10_14.$v10_15.$v10_16.$v10_17.$v10_18.$v10_19.$v10_20.$v10_21.";";
// hint 12 (12_10) => clash
$v12_10 = $_POST['12_10'];
$v12_11 = $_POST['12_11'];
$v12_12 = $_POST['12_12'];
$v12_13 = $_POST['12_13'];
$v12_14 = $_POST['12_14'];
$v12_15 = $_POST['12_15'];
$v12_16 = $_POST['12_16'];
$v12_17 = $_POST['12_17'];
$v12_18 = $_POST['12_18'];
$v12_19 = $_POST['12_19'];
$v12_20 = $_POST['12_20'];
$v12_21 = $_POST['12_21'];
// echo "12. ".$v3_12.$v4_12.$v5_12.$v6_12.$v7_12.$v8_12.$v9_12.$v10_12.$v11_12.$v12_12.$v13_12.";";
// hint 13 
$v15_6 = $_POST['15_6'];
$v16_6 = $_POST['16_6'];
$v17_6 = $_POST['17_6'];
$v15_7 = $_POST['15_7'];
$v15_8 = $_POST['15_8'];
$v15_9 = $_POST['15_9'];
$v15_10 = $_POST['15_10'];
// echo "13. ".$v15_6.$v16_6.$v17_6.", ".$v15_6.$v15_7.$v15_8.$v15_9.$v15_10.";";
// hint 14
$v16_16 = $_POST['16_16'];
$v17_16 = $_POST['17_16'];
$v18_16 = $_POST['18_16'];
$v19_16 = $_POST['19_16'];
$v20_16 = $_POST['20_16'];
$v21_16 = $_POST['21_16'];
$v22_16 = $_POST['22_16'];
$v23_16 = $_POST['23_16'];
$v24_16 = $_POST['24_16'];
// echo "14. ".$v16_16.$v17_16.$v18_16.$v19_16.$v20_16.$v21_16.$v22_16.$v23_16.$v24_16.";";
// hint 15
$v17_10 = $_POST['17_10'];
$v17_11 = $_POST['17_11'];
$v17_12 = $_POST['17_12'];
$v17_13 = $_POST['17_13'];
$v17_14 = $_POST['17_14'];
$v17_15 = $_POST['17_15'];
$v17_16 = $_POST['17_16'];
$v17_17 = $_POST['17_17'];
$v17_18 = $_POST['17_18'];
$v17_19 = $_POST['17_19'];
$v17_20 = $_POST['17_20'];
$v17_21 = $_POST['17_21'];
// echo "15. ".$v17_10.$v17_11.$v17_12.$v17_13.$v17_14.$v17_15.$v17_16.$v17_17.$v17_18.$v17_19.$v17_20.$v17_21.";";
// hint 16
$v17_20 = $_POST['17_20'];
$v18_20 = $_POST['18_20'];
$v19_20 = $_POST['19_20'];
$v20_20 = $_POST['20_20'];
$v21_20 = $_POST['21_20'];
$v22_20 = $_POST['22_20'];
$v23_20 = $_POST['23_20'];
$v24_20 = $_POST['24_20'];
$v25_20 = $_POST['25_20'];
// echo "16. ".$v17_20.$v18_20.$v19_20.$v20_20.$v21_20.$v22_20.$v23_20.$v24_20.$v25_20.";";
// hint 17
$v20_10 = $_POST['20_10'];
$v20_11 = $_POST['20_11'];
$v20_12 = $_POST['20_12'];
$v20_13 = $_POST['20_13'];
$v20_14 = $_POST['20_14'];
$v20_15 = $_POST['20_15'];
$v20_16 = $_POST['20_16'];
$v20_17 = $_POST['20_17'];
$v20_18 = $_POST['20_18'];
$v20_19 = $_POST['20_19'];
$v20_20 = $_POST['20_20'];
$v20_21 = $_POST['20_21'];
$v20_22 = $_POST['20_22'];
// echo "17. ".$v20_10.$v20_11.$v20_12.$v20_13.$v20_14.$v20_15.$v20_16.$v20_17.$v20_18.$v20_19.$v20_20.$v20_21.$v20_22.";";
// hint 18
$v22_18 = $_POST['22_18'];
$v22_19 = $_POST['22_19'];
$v22_20 = $_POST['22_20'];
$v22_21 = $_POST['22_21'];
$v22_22 = $_POST['22_22'];
$v22_23 = $_POST['22_23'];
// echo "18. ".$v22_18.$v22_19.$v22_20.$v22_21.$v22_22.$v22_23.$v22_23.";";
// hint 19
$v25_17 = $_POST['25_17'];
$v25_18 = $_POST['25_18'];
$v25_19 = $_POST['25_19'];
$v25_20 = $_POST['25_20'];
// echo "19. ".$v25_17.$v25_18.$v25_19.$v25_20.";";


$email_subject = "New Form submission";
$email_body = "1. ".$v0_2.$v1_2.$v2_2.$v3_2.$v4_2.$v5_2.$v6_2.";"."2. ".$v0_7.$v1_7.$v2_7.$v3_7.$v4_7.$v5_7.$v6_7.$v7_7.$v8_7.$v9_7.";"."3. ".$v1_0.$v1_1.$v1_2.$v1_3.$v1_4.$v1_5.$v1_6.$v1_7.";"."4. ".$v3_12.$v4_12.$v5_12.$v6_12.$v7_12.$v8_12.$v9_12.$v10_12.$v11_12.$v12_12.$v13_12.";"."5. ".$v4_6.$v4_7.$v4_8.$v4_9.$v4_10.$v4_11.$v4_12.$v4_13.$v4_14.$v4_15.";"."6. ".$v4_15.$v5_15.$v6_15.$v7_15.";"."7. ".$v6_10.$v7_10.$v8_10.$v9_10.$v10_10.$v11_10.$v12_10.$v13_10.$v14_10.$v15_10.";"."8. ".$v7_3.$v7_4.$v7_5.$v7_6.$v7_7.$v7_8.";"."9. ".$v9_5.$v9_6.$v9_7.";"."10. ".$v9_14.$v10_14.$v11_14.$v12_14.$v13_14.$v14_14.$v15_14.$v16_14.$v17_14.$v18_14.$v19_14.";"."11. ".$v10_14.$v10_15.$v10_16.$v10_17.$v10_18.$v10_19.$v10_20.$v10_21.";"."12. ".$v3_12.$v4_12.$v5_12.$v6_12.$v7_12.$v8_12.$v9_12.$v10_12.$v11_12.$v12_12.$v13_12.";"."13. ".$v15_6.$v16_6.$v17_6.", ".$v15_6.$v15_7.$v15_8.$v15_9.$v15_10.";"."14. ".$v16_16.$v17_16.$v18_16.$v19_16.$v20_16.$v21_16.$v22_16.$v23_16.$v24_16.";"."15. ".$v17_10.$v17_11.$v17_12.$v17_13.$v17_14.$v17_15.$v17_16.$v17_17.$v17_18.$v17_19.$v17_20.$v17_21.";"."16. ".$v17_20.$v18_20.$v19_20.$v20_20.$v21_20.$v22_20.$v23_20.$v24_20.$v25_20.";"."17. ".$v20_10.$v20_11.$v20_12.$v20_13.$v20_14.$v20_15.$v20_16.$v20_17.$v20_18.$v20_19.$v20_20.$v20_21.$v20_22.";"."18. ".$v22_18.$v22_19.$v22_20.$v22_21.$v22_22.$v22_23.$v22_23.";"."19. ".$v25_17.$v25_18.$v25_19.$v25_20.";"."\r\n School - ".$username.";"."\r\n Time taken - ".$timer;
$to = "ordinatrix10@gmail.com";
mail($to,$email_subject,$email_body);
header('Location: thanks.html');
?>