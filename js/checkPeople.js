function checkPeople() {

    if (document.querySelector('#get_time_table1').value == 0) {
        document.querySelector('#get_time_table1').style.display = "none";
    } else {
        document.querySelector('#get_time_table1').style.display = "block";
    }


    var get_place1_input_row1_6 = document.querySelector('.get_place1_input_row1_6').value;
    var get_place2_input_row1_6 = document.querySelector('.get_place2_input_row1_6').value;
    var get_place3_input_row1_6 = document.querySelector('.get_place3_input_row1_6').value;
    var get_place4_input_row1_6 = document.querySelector('.get_place4_input_row1_6').value;
    var people_table1 = parseInt(get_place1_input_row1_6) + parseInt(get_place2_input_row1_6) + parseInt(get_place3_input_row1_6) + parseInt(get_place4_input_row1_6);
    if (people_table1 == 1) {
        document.querySelector('.num_people_table_1').textContent = people_table1 + "місце";
    } else if (people_table1 == 0) {
        document.querySelector('.num_people_table_1').textContent = " ";
    } else {
        document.querySelector('.num_people_table_1').textContent = people_table1 + "місця";
    }




    if (document.querySelector('#get_time_table1').value == 0) {
        document.querySelector('#get_time_table1').style.display = "none";
    } else {
        document.querySelector('#get_time_table1').style.display = "block";
    }


    var get_place5_input_row1_30 = document.querySelector('.get_place5_input_row1_30').value;
    var get_place6_input_row1_30 = document.querySelector('.get_place6_input_row1_30').value;
    var people_table2 = parseInt(get_place5_input_row1_30) + parseInt(get_place6_input_row1_30);
    if (people_table2 == 1) {
        document.querySelector('.num_people_table_2').textContent = people_table2 + "місце";
    } else if (people_table2 == 0) {
        document.querySelector('.num_people_table_2').textContent = " ";
    } else {
        document.querySelector('.num_people_table_2').textContent = people_table2 + "місця";
    }


    if (document.querySelector('#get_time_table2').value == 0) {
        document.querySelector('#get_time_table2').style.display = "none";
    } else {
        document.querySelector('#get_time_table2').style.display = "block";
    }


    var get_place7_input_row1_7 = document.querySelector('.get_place7_input_row1_7').value;
    var get_place8_input_row1_7 = document.querySelector('.get_place8_input_row1_7').value;
    var get_place9_input_row1_7 = document.querySelector('.get_place9_input_row1_7').value;
    var get_place10_input_row1_7 = document.querySelector('.get_place10_input_row1_7').value;
    var people_table3 = parseInt(get_place7_input_row1_7) + parseInt(get_place8_input_row1_7) + parseInt(get_place9_input_row1_7) + parseInt(get_place10_input_row1_7);
    if (people_table3 == 1) {
        document.querySelector('.num_people_table_3').textContent = people_table3 + "місце";
    } else if (people_table3 == 0) {
        document.querySelector('.num_people_table_3').textContent = " ";
    } else {
        document.querySelector('.num_people_table_3').textContent = people_table3 + "місця";
    }


    if (document.querySelector('#get_time_table3').value == 0) {
        document.querySelector('#get_time_table3').style.display = "none";
    } else {
        document.querySelector('#get_time_table3').style.display = "block";
    }

    var get_place11_input_row1_8 = document.querySelector('.get_place11_input_row1_8').value;
    var get_place12_input_row1_8 = document.querySelector('.get_place12_input_row1_8').value;
    var get_place13_input_row1_8 = document.querySelector('.get_place13_input_row1_8').value;
    var get_place14_input_row1_8 = document.querySelector('.get_place14_input_row1_8').value;
    var people_table4 = parseInt(get_place11_input_row1_8) + parseInt(get_place12_input_row1_8) + parseInt(get_place13_input_row1_8) + parseInt(get_place14_input_row1_8);
    if (people_table4 == 1) {
        document.querySelector('.num_people_table_4').textContent = people_table4 + "місце";
    } else if (people_table4 == 0) {
        document.querySelector('.num_people_table_4').textContent = " ";
    } else {
        document.querySelector('.num_people_table_4').textContent = people_table4 + "місця";
    }


    if (document.querySelector('#get_time_table4').value == 0) {
        document.querySelector('#get_time_table4').style.display = "none";
    } else {
        document.querySelector('#get_time_table4').style.display = "block";
    }


    var get_place15_input_row1_9 = document.querySelector('.get_place15_input_row1_9').value;
    var get_place16_input_row1_9 = document.querySelector('.get_place16_input_row1_9').value;
    var get_place17_input_row1_9 = document.querySelector('.get_place17_input_row1_9').value;
    var get_place18_input_row1_9 = document.querySelector('.get_place18_input_row1_9').value;
    var people_table5 = parseInt(get_place15_input_row1_9) + parseInt(get_place16_input_row1_9) + parseInt(get_place17_input_row1_9) + parseInt(get_place18_input_row1_9);
    if (people_table5 == 1) {
        document.querySelector('.num_people_table_5').textContent = people_table5 + "місце";
    } else if (people_table5 == 0) {
        document.querySelector('.num_people_table_5').textContent = " ";
    } else {
        document.querySelector('.num_people_table_5').textContent = people_table5 + "місця";
    }


    if (document.querySelector('#get_time_table5').value == 0) {
        document.querySelector('#get_time_table5').style.display = "none";
    } else {
        document.querySelector('#get_time_table5').style.display = "block";
    }

    var get_place19_input_row1_10 = document.querySelector('.get_place19_input_row1_10').value;
    var get_place20_input_row1_10 = document.querySelector('.get_place20_input_row1_10').value;
    var get_place21_input_row1_10 = document.querySelector('.get_place21_input_row1_10').value;
    var get_place22_input_row1_10 = document.querySelector('.get_place22_input_row1_10').value;
    var people_table6 = parseInt(get_place19_input_row1_10) + parseInt(get_place20_input_row1_10) + parseInt(get_place21_input_row1_10) + parseInt(get_place22_input_row1_10);
    if (people_table6 == 1) {
        document.querySelector('.num_people_table_6').textContent = people_table6 + "місце";
    } else if (people_table6 == 0) {
        document.querySelector('.num_people_table_6').textContent = " ";
    } else {
        document.querySelector('.num_people_table_6').textContent = people_table6 + "місця";
    }


    if (document.querySelector('#get_time_table6').value == 0) {
        document.querySelector('#get_time_table6').style.display = "none";
    } else {
        document.querySelector('#get_time_table6').style.display = "block";
    }

}