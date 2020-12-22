<?php

 require_once 'config/connect.php';

session_start();

if (empty($_SESSION['user']['user'])){
    header('Location: authorization.php');
}

//var_dump($_SESSION['user']['user']);

 if ($connect === false) {
     die("ОШИБКА: Невозможно подключиться. " . mysqli_connect_error());
 }

 $result = mysqli_query($connect, "SELECT * FROM table_place ORDER BY id DESC LIMIT 1;");

 $row_cinema = array();
 while ($row_cinema_user = mysqli_fetch_assoc($result)) {
     $row_cinema[] = $row_cinema_user;
 }



?>



<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Kafe</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/timedropper.css">
</head>
<body>


<div id="pacman"></div>

<div class="menu">

    <ul class="menu_list">
        <li class="user_menu_main"> Користувач: <?php echo $_SESSION['user']['user'] ?><br/></li>
        <div id="content"></div>

    </ul>
    <ul class="menu_list menu_list_logaut">
        <li class="logaut"><a href="model/logout.php">Вихід</a></li>
    </ul>
</div>


<div class="modal_order_bg">
    <div class="modal_order">
        <h1>Оформіть замовлення</h1>
        <h2>Ви вибрали <span class="modal_order_table_number"></span></h2>
        <div class="modal_order_form">




<div class="form_place_table_modal">

                  </div>

            </div>
<div class="clear"></div>
                    <div class="modal_order_button">
                    <input type="button"  class="modal_order_button_order " id="send" value="Оформити замовлення">
                    <input type="button"  class="modal_order_button_cancel" value="Скасувати замовлення">
                    </div>


        </div>
    </div>
</div>


<form action="model/saveDB.php" method="post">
<div class="main_wrapper">
    <div class="row1_wrapper">
<!---=================Стіл №6======================----->
        <div class="row1_place" >
            <div class="table_wrapper1_v4"  data-table_view="v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4 get_place1_row1" >
                      <input type='hidden' class='get_place6 get_place1_input_row1_6 color_place' name='get_place1_input_row1_6' value='0' id="get_takes_place_get_place1_row1">
                    </div>
                    <div class="table_place2_v4 get_place2_row1">
                      <input type='hidden' class='get_place6 get_place2_input_row1_6 ' name='get_place2_input_row1_6' value='0' id="get_takes_place_get_place2_row1">
                    </div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">6</span>
                    <span class="num_people_table_1 num_people_table_v4"></span>
                    <input type="text" id="get_time_table1" class="get_time_table_v4" readonly>
                    <input type="hidden" class="row1_place_input get_reserve_table_checkbox6" name="get_reserve_table_checkbox6" value="0">
                    <input type="hidden" class="get_time_table1" name="get_time_table1" value="<?php echo $row_cinema[0]['get_time_table1'] ?>">
                </div>

                <div class="place_wrapper1_2_v4">

                    <div class="table_place3_v4 get_place3_row1">
                        <input type='hidden' class='get_place6 get_place3_input_row1_6' name='get_place3_input_row1_6' value='0' id="get_takes_place_get_place3_row1">
                    </div>
                    <div class="table_place4_v4 get_place4_row1 color_palce4"></div>
                        <input type='hidden' class='get_place6 get_place4_input_row1_6' name='get_place4_input_row1_6' value='0' id="get_takes_place_get_place4_row1">
                </div>

                <div class="clear"></div>

            </div>

        </div>

        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <div><img class="flowers" src="images/flover.jpg"></div>
        <!-- =================================Table №30 ===============================================================  -->

        <div class="row1_place">
            <div class="table_wrapper1_v2" data-table_view="v2">
                <div class="place_wrapper1_1_v2">

                    <div class="table_place1_v2 get_place5_row1">
                      <input type='hidden' class='get_place5_input_row1_30' name='get_place5_input_row1_30' value='0' id="get_takes_place_get_place5_row1">
                    </div>
                </div>

                <div class="table1_v2">
                    <span class="number_place">30</span>
                    <span class="num_people_table_2 num_people_table_v2"></span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <input type="text" id="get_time_table2" class="get_time_table_v2" readonly>
                    <input type="hidden" class="row1_place_input get_reserve_table_checkbox30" name="get_reserve_table_checkbox30" value="0">
                    <input type="hidden" class="get_time_table2" name="get_time_table2" value="<?php echo $row_cinema[0]['get_time_table2'] ?>">
                </div>

                <div class="place_wrapper1_2_v2">

                    <div class="table_place2_v2 get_place6_row1">
                      <input type='hidden' class='get_place6_input_row1_30' name='get_place6_input_row1_30' value='0' id="get_takes_place_get_place6_row1">
                    </div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <div><img class="flowers" src="images/flover.jpg"></div>
        <!-- =================================Table №7 ===============================================================  -->



        <div class="row1_place">
            <div class="table_wrapper1_h4" data-table_view="h4">
                <div class="place_wrapper1_1_h4">

                    <div class="table_place1_h4 get_place7_row1">
                      <input type='hidden' class='get_place7_input_row1_7' name='get_place7_input_row1_7' value='0' id="get_takes_place_get_place7_row1">
                    </div>
                    <div class="table_place2_h4 get_place8_row1">
                      <input type='hidden' class='get_place8_input_row1_7' name='get_place8_input_row1_7' value='0' id="get_takes_place_get_place8_row1">
                    </div>

                </div>

                <div class="table1_h4">
                    <span class="number_place">7</span>
                    <span class="num_people_table_3 num_people_table_h4"></span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <input type="text" id="get_time_table3" class="get_time_table_h4" readonly>
                    <input type="hidden" class="row1_place_input get_reserve_table_checkbox7" name="get_reserve_table_checkbox7" value="0">
                    <input type="hidden" class="get_time_table3" name="get_time_table3" value="<?php echo $row_cinema[0]['get_time_table3'] ?>">
                </div>

                <div class="place_wrapper1_2_h4">
                    <div class="table_place3_h4 get_place9_row1">
                      <input type='hidden' class='get_place9_input_row1_7' name='get_place9_input_row1_7' value='0' id="get_takes_place_get_place9_row1">
                    </div>
                    <div class="table_place4_h4 get_place10_row1">
                      <input type='hidden' class='get_place10_input_row1_7' name='get_place10_input_row1_7' value='0' id="get_takes_place_get_place10_row1">
                    </div>

                </div>

                <div class="clear"></div>

            </div>
        </div>

        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <div><img class="flowers" src="images/flover.jpg"></div>
        <!-- =================================Table №8 ===============================================================  -->

        <div class="row1_place">
            <div class="table_wrapper1_h4" data-table_view="h4">
                <div class="place_wrapper1_1_h4">
                    <div class="table_place1_h4 get_place11_row1">
                      <input type='hidden' class='get_place11_input_row1_8' name='get_place11_input_row1_8' value='0' id="get_takes_place_get_place11_row1">
                    </div>
                    <div class="table_place2_h4 get_place12_row1">
                      <input type='hidden' class='get_place12_input_row1_8' name='get_place12_input_row1_8' value='0' id="get_takes_place_get_place12_row1">
                    </div>

                </div>

                <div class="table1_h4">
                    <span class="number_place">8</span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <span class="num_people_table_4 num_people_table_h4"></span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <input type="text" id="get_time_table4" class="get_time_table_h4" readonly>
                    <input type="hidden" class="row1_place_input get_reserve_table_checkbox8" name="get_reserve_table_checkbox8" value="0">
                    <input type="hidden" class="get_time_table4" name="get_time_table4" value="<?php echo $row_cinema[0]['get_time_table4'] ?>">
                </div>

                <div class="place_wrapper1_2_h4">
                    <div class="table_place3_h4 get_place13_row1">
                      <input type='hidden' class='get_place13_input_row1_8' name='get_place13_input_row1_8' value='0' id="get_takes_place_get_place13_row1">
                    </div>
                    <div class="table_place4_h4 get_place14_row1">
                      <input type='hidden' class='get_place14_input_row1_8' name='get_place14_input_row1_8' value='0' id="get_takes_place_get_place14_row1">
                    </div>

                </div>

                <div class="clear"></div>

            </div>
        </div>

        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <div><img class="flowers" src="images/flover.jpg"></div>
        <!-- =================================Table №9 ===============================================================  -->

        <div class="row1_place">
            <div class="table_wrapper1_h4" data-table_view="h4">
                <div class="place_wrapper1_1_h4">

                    <div class="table_place1_h4 get_place15_row1">
                        <input type='hidden' class='get_place15_input_row1_9' name='get_place15_input_row1_9' value='0' id="get_takes_place_get_place15_row1">
                    </div>
                    <div class="table_place2_h4 get_place16_row1">
                        <input type='hidden' class='get_place16_input_row1_9' name='get_place16_input_row1_9' value='0' id="get_takes_place_get_place16_row1">
                    </div>
                </div>

                <div class="table1_h4">
                    <span class="number_place">9</span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <span class="num_people_table_5 num_people_table_h4"></span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <input type="text" id="get_time_table5" class="get_time_table_h4" readonly>
                    <input type="hidden" class="row1_place_input get_reserve_table_checkbox9" name="get_reserve_table_checkbox9" value="0">
                    <input type="hidden" class="get_time_table5" name="get_time_table5" value="<?php echo $row_cinema[0]['get_time_table5'] ?>">
                </div>

                <div class="place_wrapper1_2_h4">

                    <div class="table_place3_h4 get_place17_row1">
                        <input type='hidden' class='get_place17_input_row1_9' name='get_place17_input_row1_9' value='0' id="get_takes_place_get_place17_row1">
                    </div>
                    <div class="table_place4_h4 get_place18_row1">
                        <input type='hidden' class='get_place18_input_row1_9' name='get_place18_input_row1_9' value='0' id="get_takes_place_get_place18_row1">
                    </div>

                </div>

                <div class="clear"></div>

            </div>
        </div>

        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <div><img class="flowers" src="images/flover.jpg"></div>
        <!-- =================================Table №10 ===============================================================  -->

        <div class="row1_place">
            <div class="table_wrapper1_h4" data-table_view="h4">
                <div class="place_wrapper1_1_h4">
                    <div class="table_place1_h4 get_place19_row1">
                      <input type='hidden' class='get_place19_input_row1_10' name='get_place19_input_row1_10' value='0' id="get_takes_place_get_place19_row1">
                    </div>
                    <div class="table_place2_h4 get_place20_row1">
                      <input type='hidden' class='get_place20_input_row1_10' name='get_place20_input_row1_10' value='0' id="get_takes_place_get_place20_row1">
                    </div>
                </div>

                <div class="table1_h4">
                    <span class="number_place">10</span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <span class="num_people_table_6 num_people_table_h4"></span>
                    <input type="hidden" class="row1_place_input" value="0">
                    <input type="text" id="get_time_table6" class="get_time_table_h4" readonly>
                    <input type="hidden" class="row1_place_input get_reserve_table_checkbox10" name="get_reserve_table_checkbox10" value="0">
                    <input type="hidden" class="get_time_table6" name="get_time_table6" value="<?php echo $row_cinema[0]['get_time_table6'] ?>">
                </div>

                <div class="place_wrapper1_2_h4">
                    <div class="table_place3_h4 get_place21_row1">
                      <input type='hidden' class='get_place21_input_row1_10' name='get_place21_input_row1_10' value='0' id="get_takes_place_get_place21_row1">
                    </div>
                    <div class="table_place4_h4 get_place22_row1">
                      <input type='hidden' class='get_place22_input_row1_10' name='get_place22_input_row1_10' value='0' id="get_takes_place_get_place22_row1">
                    </div>

                </div>

                <div class="clear"></div>

            </div>
        </div>

        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
        <div><img class="door" src="images/door.jpg"></div>
        <!-- =================================SCENE===============================================================  -->

        <div class="scene">

        </div>
        <!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->

    </div>

<!-- ===============================the end 1 Row=================================================================== -->

    <div class="row2_wrapper">

        <div class="row2_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">5</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>


        <div class="row2_place">
            <div class="table_wrapper1_h2">
                <div class="place_wrapper1_1_h2">
                    <div class="table_place1_h2"></div>

                </div>

                <div class="table1_h2">
                    <span class="number_place">19</span>
                </div>

                <div class="place_wrapper1_2_h2">
                    <div class="table_place2_h2"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <div class="row2_place">
            <div class="table_wrapper1_h2">
                <div class="place_wrapper1_1_h2">
                    <div class="table_place1_h2"></div>

                </div>

                <div class="table1_h2">
                    <span class="number_place">20</span>
                </div>

                <div class="place_wrapper1_2_h2">
                    <div class="table_place2_h2"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <div class="row2_place">
            <div class="table_wrapper1_h2">
                <div class="place_wrapper1_1_h2">
                    <div class="table_place1_h2"></div>

                </div>

                <div class="table1_h2">
                    <span class="number_place">21</span>
                </div>

                <div class="place_wrapper1_2_h2">
                    <div class="table_place2_h2"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <div class="row2_place">
            <div class="table_wrapper1_h2">
                <div class="place_wrapper1_1_h2">
                    <div class="table_place1_h2"></div>

                </div>

                <div class="table1_h2">
                    <span class="number_place">22</span>
                </div>

                <div class="place_wrapper1_2_h2">
                    <div class="table_place2_h2"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <div class="row2_place">
            <div class="table_wrapper1_h2">
                <div class="place_wrapper1_1_h2">
                    <div class="table_place1_h2"></div>

                </div>

                <div class="table1_h2">
                    <span class="number_place">23</span>
                </div>

                <div class="place_wrapper1_2_h2">
                    <div class="table_place2_h2"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <div class="row2_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">12</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>
    </div>


    <!-------------------------------------------    -->
    <div class="row3_wrapper">


        <div class="flex_wrapper3">
            <div class="row3_place">
                <div class="table_wrapper1_v2">
                    <div class="place_wrapper1_1_v2">
                        <div class="table_place1_v2"></div>
                    </div>

                    <div class="table1_v2">
                        <span class="number_place">4</span>
                    </div>

                    <div class="place_wrapper1_2_v2">
                        <div class="table_place2_v2"></div>
                    </div>

                    <div class="clear"></div>

                </div>
            </div>


            <div class="row3_place">
                <div class="table_wrapper1_v4">
                    <div class="place_wrapper1_1_v4">
                        <div class="table_place1_v4"></div>
                        <div class="table_place2_v4"></div>
                    </div>
                    <div class="clear"></div>
                    <div class="table1_v4">
                        <span class="number_place">3</span>
                    </div>

                    <div class="place_wrapper1_2_v4">
                        <div class="table_place3_v4"></div>
                        <div class="table_place4_v4"></div>
                    </div>

                    <div class="clear"></div>

                </div>
            </div>

        </div>


        <div class="row3_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">16</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>


        <div class="row3_place">
            <div class="table_wrapper1_h4">
                <div class="place_wrapper1_1_h4">
                    <div class="table_place1_h4"></div>
                    <div class="table_place2_h4"></div>
                </div>

                <div class="table1_h4">
                    <span class="number_place">28</span>
                </div>

                <div class="place_wrapper1_2_h4">
                    <div class="table_place3_h4"></div>
                    <div class="table_place4_h4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

        <div class="row3_place">
            <div class="table_wrapper1_h4">
                <div class="place_wrapper1_1_h4">
                    <div class="table_place1_h4"></div>
                    <div class="table_place2_h4"></div>
                </div>

                <div class="table1_h4">
                    <span class="number_place">29</span>
                </div>

                <div class="place_wrapper1_2_h4">
                    <div class="table_place3_h4"></div>
                    <div class="table_place4_h4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>


        <div class="row3_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">24</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>
        <div class="row3_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">13</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>


    </div>


    <div class="row4_wrapper">


        <div class="row4_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">2</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>


        <div class="row4_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">17</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>


        <div class="row4_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">27</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>

        </div>

        <div class="row4_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">26</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>

        </div>

        <div class="row4_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">25</div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>

        </div>


        <div class="row4_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">14</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>

    </div>


    <div class="row5_wrapper">


        <div class="row5_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">1</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>

        </div>


        <div class="row5_place">
            <div class="table_wrapper1_v2">
                <div class="place_wrapper1_1_v2">
                    <div class="table_place1_v2"></div>
                </div>

                <div class="table1_v2">
                    <span class="number_place">11</span>
                </div>

                <div class="place_wrapper1_2_v2">
                    <div class="table_place2_v2"></div>
                </div>

                <div class="clear"></div>

            </div>
            <div><img class="door_botton_left" src="images/door.jpg"></div>
        </div>


        <div class="row5_place">
            <div class="bar">


                <div class="bar_tabel_part1">
                    <img src="images/cocktail-256x256_96882.png" width="30px" style="margin-left: 25px; margin-top: -5px" alt="">
                    <img src="images/18_85229.png" width="30px" style="margin-left: 25px; margin-top: -5px" alt="">
                    <img src="images/19_85264.png" width="30px" style="margin-left: 25px; margin-top: -5px" alt="">
                    <img src="images/3_85300.png" width="30px" style="margin-left: 45px; margin-top: -5px" alt="">
                </div>
                <div class="bar_tabel_part2">

                </div>
                <div class="bar_tabel_part3">

                </div>
            </div>
        </div>


        <div class="row5_place">
            <div class="table_wrapper1_v4">
                <div class="place_wrapper1_1_v4">
                    <div class="table_place1_v4"></div>
                    <div class="table_place2_v4"></div>
                </div>
                <div class="clear"></div>
                <div class="table1_v4">
                    <span class="number_place">15</span>
                </div>

                <div class="place_wrapper1_2_v4">
                    <div class="table_place3_v4"></div>
                    <div class="table_place4_v4"></div>
                </div>

                <div class="clear"></div>

            </div>
        </div>
        <div><img class="door_botton" src="images/door.jpg"></div>
    </div>





</div>



<!--    <input type="submit" value="BATTON">-->
<!---->
<!--    <input type="button"  value="send">-->

</form>





<!--<div class="row1_place">-->
<!--    <div class="table_wrapper1_h2">-->
<!--        <div class="place_wrapper1_1_h2">-->
<!--            <div class="table_place1_h2"></div>-->
<!---->
<!--        </div>-->
<!---->
<!--        <div class="table1_h2"></div>-->
<!---->
<!--        <div class="place_wrapper1_2_h2">-->
<!--            <div class="table_place2_h2"></div>-->
<!--        </div>-->
<!---->
<!--        <div class="clear"></div>-->
<!---->
<!--    </div>-->
<!--</div>-->
<!---->
<!---->
<!---->
<!---->
<!--<div class="row1_place">-->
<!--    <div class="table_wrapper1_h4">-->
<!--        <div class="place_wrapper1_1_h4">-->
<!--            <div class="table_place1_h4"></div>-->
<!--            <div class="table_place2_h4"></div>-->
<!--        </div>-->
<!---->
<!--        <div class="table1_h4"></div>-->
<!---->
<!--        <div class="place_wrapper1_2_h4">-->
<!--            <div class="table_place3_h4"></div>-->
<!--            <div class="table_place4_h4"></div>-->
<!--        </div>-->
<!---->
<!--        <div class="clear"></div>-->
<!---->
<!--    </div>-->
<!--</div>-->
<script type="text/javascript" src="js/jquery-2.0.3.min.js"></script>
<script src="js/forma_order.js"></script>

<script src="js/main.js"></script>

<script src="js/checkPeople.js"></script>
<script type="text/javascript" src="js/timedropper.js"></script>
<script>
        $("document").ready(function () {
            $("#send").click(function () {
                var data_user = $("form").serialize();
                $.ajax({
                    url: 'model/saveDB.php',
                    type: 'POST',
                    data: data_user,
                    success: function (data) {
                    // alert(data);
                    }
                });
            });
        });
    </script>
    <script>
       $("document").ready(function () {

           var idRow = [];

           setInterval(function () {
               getRow();
           }, 1000);

           function getRow() {
               $.ajax({
                   url: 'model/showDBajax.php',
                   type: 'POST',
                   success: function (data) {
                       data = jQuery.parseJSON(data);
                       // alert(data);
                       $.each(data, function (i, item) {
                           if (jQuery.inArray(item.id, idRow) == -1) {
                               idRow.push(item.id)
                               $('#get_takes_place_get_place1_row1').val(item.get_place1_input_row1);
                               $('#get_takes_place_get_place2_row1').val(item.get_place2_input_row1);
                               $('#get_takes_place_get_place3_row1').val(item.get_place3_input_row1);
                               $('#get_takes_place_get_place4_row1').val(item.get_place4_input_row1);
                               $('#get_takes_place_get_place5_row1').val(item.get_place5_input_row1);
                               $('#get_takes_place_get_place6_row1').val(item.get_place6_input_row1);
                               $('#get_takes_place_get_place7_row1').val(item.get_place7_input_row1);
                               $('#get_takes_place_get_place8_row1').val(item.get_place8_input_row1);
                               $('#get_takes_place_get_place9_row1').val(item.get_place9_input_row1);
                               $('#get_takes_place_get_place10_row1').val(item.get_place10_input_row1);
                               $('#get_takes_place_get_place11_row1').val(item.get_place11_input_row1);
                               $('#get_takes_place_get_place12_row1').val(item.get_place12_input_row1);
                               $('#get_takes_place_get_place13_row1').val(item.get_place13_input_row1);
                               $('#get_takes_place_get_place14_row1').val(item.get_place14_input_row1);
                               $('#get_takes_place_get_place15_row1').val(item.get_place15_input_row1);
                               $('#get_takes_place_get_place16_row1').val(item.get_place16_input_row1);
                               $('#get_takes_place_get_place17_row1').val(item.get_place17_input_row1);
                               $('#get_takes_place_get_place18_row1').val(item.get_place18_input_row1);
                               $('#get_takes_place_get_place19_row1').val(item.get_place19_input_row1);
                               $('#get_takes_place_get_place20_row1').val(item.get_place20_input_row1);
                               $('#get_takes_place_get_place21_row1').val(item.get_place21_input_row1);
                               $('#get_takes_place_get_place22_row1').val(item.get_place22_input_row1);

                               $('#get_time_table1').val(item.get_time_table1);
                               $('.get_reserve_table_checkbox6').val(item.get_reserve_table_checkbox6);

                               $('#get_time_table2').val(item.get_time_table2);
                               $('.get_reserve_table_checkbox30').val(item.get_reserve_table_checkbox30);

                               $('#get_time_table3').val(item.get_time_table3);
                               $('.get_reserve_table_checkbox7').val(item.get_reserve_table_checkbox7);

                               $('#get_time_table4').val(item.get_time_table4);
                               $('.get_reserve_table_checkbox8').val(item.get_reserve_table_checkbox8);

                               $('#get_time_table5').val(item.get_time_table5);
                               $('.get_reserve_table_checkbox9').val(item.get_reserve_table_checkbox9);

                               $('#get_time_table6').val(item.get_time_table6);
                               $('.get_reserve_table_checkbox10').val(item.get_reserve_table_checkbox10);
                           }
                       });
                   }
               });
           }
       });
   </script>

</body>
</html>
