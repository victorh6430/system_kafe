<?php

    require_once '../config/connect.php';

//---------------------------------------------------------------------------
$get_reserve_table_checkbox6=$_POST['get_reserve_table_checkbox6'];

$get_time_table1=$_POST['get_time_table1'];
$get_place1_input_row1_6=$_POST['get_place1_input_row1_6'];
$get_place2_input_row1_6=$_POST['get_place2_input_row1_6'];
$get_place3_input_row1_6=$_POST['get_place3_input_row1_6'];
$get_place4_input_row1_6=$_POST['get_place4_input_row1_6'];

//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-----------------------------------------------------------------------------------
$get_reserve_table_checkbox30=$_POST['get_reserve_table_checkbox30'];

$get_time_table2=$_POST['get_time_table2'];
$get_place5_input_row1_30=$_POST['get_place5_input_row1_30'];
$get_place6_input_row1_30=$_POST['get_place6_input_row1_30'];
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-----------------------------------------------------------------------------------
$get_reserve_table_checkbox7=$_POST['get_reserve_table_checkbox7'];

$get_time_table3=$_POST['get_time_table3'];
$get_place7_input_row1_7=$_POST['get_place7_input_row1_7'];
$get_place8_input_row1_7=$_POST['get_place8_input_row1_7'];
$get_place9_input_row1_7=$_POST['get_place9_input_row1_7'];
$get_place10_input_row1_7=$_POST['get_place10_input_row1_7'];
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-----------------------------------------------------------------------------------
$get_reserve_table_checkbox8=$_POST['get_reserve_table_checkbox8'];
$get_time_table4=$_POST['get_time_table4'];
$get_place11_input_row1_8=$_POST['get_place11_input_row1_8'];
$get_place12_input_row1_8=$_POST['get_place12_input_row1_8'];
$get_place13_input_row1_8=$_POST['get_place13_input_row1_8'];
$get_place14_input_row1_8=$_POST['get_place14_input_row1_8'];
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-----------------------------------------------------------------------------------
$get_reserve_table_checkbox9=$_POST['get_reserve_table_checkbox9'];
$get_time_table5=$_POST['get_time_table5'];
$get_place15_input_row1_9=$_POST['get_place15_input_row1_9'];
$get_place16_input_row1_9=$_POST['get_place16_input_row1_9'];
$get_place17_input_row1_9=$_POST['get_place17_input_row1_9'];
$get_place18_input_row1_9=$_POST['get_place18_input_row1_9'];
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-----------------------------------------------------------------------------------
$get_reserve_table_checkbox10=$_POST['get_reserve_table_checkbox10'];
$get_time_table6=$_POST['get_time_table6'];
$get_place19_input_row1_10=$_POST['get_place19_input_row1_10'];
$get_place20_input_row1_10=$_POST['get_place20_input_row1_10'];
$get_place21_input_row1_10=$_POST['get_place21_input_row1_10'];
$get_place22_input_row1_10=$_POST['get_place22_input_row1_10'];
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-----------------------------------------------------------------------------------


$query = "INSERT INTO `table_place` VALUES(NULL,'$get_reserve_table_checkbox6','$get_time_table1','$get_place1_input_row1_6','$get_place2_input_row1_6','$get_place3_input_row1_6','$get_place4_input_row1_6',
                                                '$get_reserve_table_checkbox30','$get_time_table2','$get_place5_input_row1_30','$get_place6_input_row1_30',
                                                '$get_reserve_table_checkbox7','$get_time_table3','$get_place7_input_row1_7','$get_place8_input_row1_7','$get_place9_input_row1_7','$get_place10_input_row1_7',
                                                '$get_reserve_table_checkbox8','$get_time_table4','$get_place11_input_row1_8','$get_place12_input_row1_8','$get_place13_input_row1_8','$get_place14_input_row1_8',
                                                '$get_reserve_table_checkbox9','$get_time_table5','$get_place15_input_row1_9','$get_place16_input_row1_9',+'$get_place17_input_row1_9','$get_place18_input_row1_9',
                                                '$get_reserve_table_checkbox10','$get_time_table6','$get_place19_input_row1_10','$get_place20_input_row1_10','$get_place21_input_row1_10','$get_place22_input_row1_10')";

$result = mysqli_query($connect, $query) or die("Ошибка " . mysqli_error($connect));
mysqli_close($connect);

$result = array(
//--------------------------------------------------------------------------------------
        'get_reserve_table_checkbox6'=>$_POST['get_reserve_table_checkbox6'],

        'get_time_table1' => $_POST['get_time_table1'],
        'get_place1_input_row1' => $_POST['get_place1_input_row1_6'],
        'get_place2_input_row1' => $_POST['get_place2_input_row1_6'],
        'get_place3_input_row1' => $_POST['get_place3_input_row1_6'],
        'get_place4_input_row1' => $_POST['get_place4_input_row1_6'],
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//--------------------------------------------------------------------------------------
        'get_reserve_table_checkbox30'=>$_POST['get_reserve_table_checkbox30'],

        'get_time_table2' => $_POST['get_time_table2'],
        'get_place5_input_row1' => $_POST['get_place5_input_row1_30'],
        'get_place6_input_row1' => $_POST['get_place6_input_row1_30'],
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-----------------------------------------------------------------------------------
        'get_reserve_table_checkbox7'=>$_POST['get_reserve_table_checkbox7'],

        '$get_time_table3'=>$_POST['$get_time_table3'],
        'get_place7_input_row1' => $_POST['get_place7_input_row1_30'],
        'get_place8_input_row1' => $_POST['get_place8_input_row1_30'],
        'get_place9_input_row1' => $_POST['get_place9_input_row1_30'],
        'get_place10_input_row1' => $_POST['get_place10_input_row1_30'],
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//-------------------------------------------------------------------------------------
        'get_reserve_table_checkbox8'=>$_POST['get_reserve_table_checkbox8'],
        'get_time_table4'=> $_POST['$get_time_table4'],
        'get_place11_input_row1' => $_POST['get_place11_input_row1_8'],
        'get_place12_input_row1' => $_POST['get_place12_input_row1_8'],
        'get_place13_input_row1' => $_POST['get_place13_input_row1_8'],
        'get_place14_input_row1' => $_POST['get_place14_input_row1_8'],
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//---------------------------------------------------------------------------------
        'get_reserve_table_checkbox9'=>$_POST['get_reserve_table_checkbox9'],
        'get_time_table5'=>$_POST['get_time_table5'],
        'get_place15_input_row1' => $_POST['get_place15_input_row1_9'],
        'get_place16_input_row1' => $_POST['get_place16_input_row1_9'],
        'get_place17_input_row1' => $_POST['get_place17_input_row1_9'],
        'get_place18_input_row1' => $_POST['get_place18_input_row1_9'],
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^

//------------------------------------------------------------------------------
        'get_reserve_table_checkbox10'=>$_POST['get_reserve_table_checkbox10'],
        'get_time_table6'=>$_POST['get_time_table6'],
        'get_place19_input_row1' => $_POST['get_place19_input_row1_10'],
        'get_place20_input_row1' => $_POST['get_place20_input_row1_10'],
        'get_place21_input_row1' => $_POST['get_place21_input_row1_10'],
        'get_place22_input_row1' => $_POST['get_place22_input_row1_10'],
//^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^



      );

        echo json_encode($result);
