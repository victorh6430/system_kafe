function choose_place_form_4v_main() {
    document.querySelector('.form_place_table_modal').innerHTML = "<div class='choose_place_form_4v_main'>" +
        "<div class='choose_place_form_4_wrapper_top'>" +
        "<input type='checkbox' class='choose_place1_form_4v_1_" + num_place_contentText + "'>" +
        "<input type='checkbox' class='choose_place1_form_4v_2_" + num_place_contentText + "'>" +
        "</div>" +
        "<div class='choose_place_form_check'>" +
        "</div>" +
        "<div class='choose_place_form_4_wrapper_bottom'>" +
        "<input type='checkbox' class='choose_place1_form_4v_3_" + num_place_contentText + "' >" +
        "<input type='checkbox' class='choose_place1_form_4v_4_" + num_place_contentText + "' >" +
        "</div>" +
        // "<p class='time_name' >Виберіть час</p>"+
        "<input type='text' id='time' value='0' class='time_input setTime_" + num_place_contentText + "'>" +
        "<div class='time_button'>Зафіксуйте час</div> " +
        "<div class='time_name'>Виберіть час</div>" +
        "<div class='reserve_table_" + num_place_contentText + " reserve_table_10'>Зарезервувати на 10хв.<input type='checkbox' class='reserve_table_checkbox" + num_place_contentText + "'></div>" +
        "</div>";
}

function choose_place_form_2v_main(){
    document.querySelector('.form_place_table_modal').innerHTML = "<div class='choose_place_form_2v_main'>" +
        "<div class='choose_place_form_2_wrapper_top'>" +
        "<input type='checkbox' class='choose_place_form_2v_1_" + num_place_contentText + "'>" +
        "</div>" +
        "<div class='choose_place_form_check'>" +
        "</div>" +
        "<div class='choose_place_form_2_wrapper_bottom'>" +
        "<input type='checkbox' class='choose_place_form_2v_2_" + num_place_contentText + "' >" +
        "</div>" +
        "<p class='time_name' >Виберіть час</p>" +
        "<input type='text' id='time' class='time_input setTime_" + num_place_contentText + "'>" +
        "<div class='time_button'>Зафіксуйте час</div> " +
        "<div class='reserve_table_" + num_place_contentText + " reserve_table_10'>Зарезервувати на 10хв.<input type='checkbox' class='reserve_table_checkbox" + num_place_contentText + "'></div>" +
        "</div>";
}

function choose_place_form_4h_main() {
    document.querySelector('.form_place_table_modal').innerHTML = "<div class='choose_place_form_4h_main'>" +
        "<div class='choose_place_form_4h_wrapper_top'>" +
        "<input type='checkbox' class='choose_place_form_4h_1_" + num_place_contentText + "' ><br />" +
        "<input type='checkbox' class='choose_place_form_4h_2_" + num_place_contentText + "' >" +
        "</div>" +
        "<div class='choose_place_form_check_4h'></div>" +
        "<div class='clear'></div>" +
        "<div class='choose_place_form_4h_wrapper_bottom'>" +
        "<input type='checkbox' class='choose_place_form_4h_3_" + num_place_contentText + "' ><br />" +
        "<input type='checkbox' class='choose_place_form_4h_4_" + num_place_contentText + "' >" +
        "</div>" +
        "<p class='time_name' >Виберіть час</p>" +
        "<input type='text' id='time' class='time_input setTime_" + num_place_contentText + "'>" +
        "<div class='reserve_table_" + num_place_contentText + " reserve_table_10'>Зарезервувати на 10хв.<input type='checkbox' class='reserve_table_checkbox" + num_place_contentText + "'></div>" +
        // "<div class='time_button'>Зафіксуйте час</div> " +
        "</div>";

}

function choose_place_form_2h_main() {
    document.querySelector('.form_place_table_modal').innerHTML = "<div class='choose_place_form_2h_main'>" +
        "<div class='choose_place_form_2h_main'>" +
        "<div class='choose_place_form_2h_wrapper_top'>" +
        "<input type='checkbox' class='choose_place_form_2h_1'>" +
        "</div>" +
        "<div class='choose_place_form_check_2h'></div>" +
        "<div class='clear'></div>" +
        "<div class='choose_place_form_2h_wrapper_bottom'>" +
        "<input type='checkbox' class='choose_place_form_2h_3'>" +
        "</div>" +
        "<p class='time_name' >Виберіть час</p>" +
        "<input type='text' id='time' class='time_input'>" +
        "</div>";
}
