window.onload = function (e) {

    let row1_wrapper = document.querySelectorAll('.row1_wrapper, .row1_place');
    for (let i = 1; i < row1_wrapper.length; i++) {
        row1_wrapper[i].onclick = function () {
            if (!document.querySelector('.modal_order_show')) {
                document.querySelector('.modal_order_bg').classList.add('modal_order_show');
                console.log(this.children[0].querySelector('.number_place').textContent);
                num_place_contentText = this.children[0].querySelector('.number_place').textContent;
                let number_place = this.children[0].querySelector('.number_place').textContent;
                document.querySelector('.modal_order_table_number').textContent = number_place + 'столик';
                this.querySelector('.row1_place_input').value = 1;

                if (this.children[0].getAttribute('data-table_view') === 'v4') {

                    choose_place_form_4v_main();

                    //Викликаю функцію яка встановлює час
                    TimeInputPlace();

                    // Визов функції по часу
                    let CurrentTime = new Date();


                    // добавляю 0 до хвилин
                    console.log((CurrentTime.getMinutes() < 10 ? '0' : '') + CurrentTime.getMinutes());

                    // Записую  в 10 хв
                    document.querySelector('.reserve_table_6').addEventListener('click', function () {
                        let min = CurrentTime.getMinutes() + 1;
                        document.querySelector('.get_reserve_table_checkbox6').value = CurrentTime.getHours() + ":" + min;

                        let reserve_table_6 = setInterval(function () {

                            if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_reserve_table_checkbox6').value) {
                                alert("Бронь на 10хв. закінчилась!!! Ніхто за цей столик не прийшов!!!")
                                clearInterval(reserve_table_6);
                            }

                        }, 1000);

                    })


                    //перевіряю час і скриваю показ часу
                    let get_time_table1 = setInterval(function () {

                        let get_place6 = document.querySelector('.get_place6').value;
                        for (let i = 0; i < get_place6.length; i++) {
                            if (get_place6 == 1) {
                                if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_time_table1').value) {

                                    document.querySelector('.get_time_table1').value = 0;
                                    alert("Прийшли люди які хочуть смачно поїсти за столиком №" + num_place_contentText + " і зайняли свої вже місця");
                                    let data_user = $("form").serialize();
                                    $.ajax({
                                        url: 'model/saveDB.php',
                                        type: 'POST',
                                        data: data_user,
                                        success: function (data) {
                                        }
                                    });
                                    clearInterval(get_time_table1);
                                }
                                console.log("vvvv");
                            } else {

                                if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_time_table1').value) {

                                    // обнуляю місця після закінчення часу бронювання
                                    for (let i = 1; i <= 4; i++) {
                                        let choose_place1_form_4v_1_6 = ".choose_place1_form_4v_" + i + "_6"
                                        let get_place1_input_row1_6 = ".get_place" + i + "_input_row1_6";
                                        document.querySelector(get_place1_input_row1_6).value = 0;
                                    }

                                    document.querySelector('.get_time_table1').value = 0;
                                    alert("Закінчилась бронь на столик №" + num_place_contentText + " бажаючі не  прийшли");
                                    let data_user = $("form").serialize();
                                    $.ajax({
                                        url: 'model/saveDB.php',
                                        type: 'POST',
                                        data: data_user,
                                        success: function (data) {
                                        }
                                    });
                                    clearInterval(get_time_table1);
                                }
                                console.log("qqqq")
                            }

                        }


                    }, 1000);


                    // Добавляю 0 чи 1
                    for (let i = 1; i <= 4; i++) {
                        let choose_place1_form_4v_1_6 = ".choose_place1_form_4v_" + i + "_6"
                        document.querySelector(choose_place1_form_4v_1_6).addEventListener('click', function () {
                            let get_place1_input_row1_6 = ".get_place" + i + "_input_row1_6";
                            if (document.querySelector(get_place1_input_row1_6).value == 0) {
                                document.querySelector(get_place1_input_row1_6).value = 1;
                            } else {
                                document.querySelector(get_place1_input_row1_6).value = 0;
                            }
                        })
                    }

                    //Показую зайняті місця
                    for (var i = 1; i <= 4; i++) {
                        var get_place1_input_row1_6_all = ".get_place" + i + "_input_row1_6";
                        var choose_place1_form_4v_1_6_all = ".choose_place1_form_4v_" + i + "_6";
                        if (document.querySelector(get_place1_input_row1_6_all).value == 1) {
                            document.querySelector(choose_place1_form_4v_1_6_all).checked = true;
                        }
                    }


                } else if (this.children[0].getAttribute('data-table_view') === 'v2') {

                    choose_place_form_2v_main();

                    TimeInputPlace();


                    document.querySelector('.time_button').addEventListener('click', function () {
                        document.querySelector('.get_time_table2').value = document.querySelector('#time').value;
                    })


                    // Визов функції по часу
                    var CurrentTime = new Date();


                    // добавляю 0 до хвилин
                    console.log((CurrentTime.getMinutes() < 10 ? '0' : '') + CurrentTime.getMinutes());

                    // Записую  в 10 хв
                    document.querySelector('.reserve_table_30').addEventListener('click', function () {
                        let min = CurrentTime.getMinutes() + 1;
                        document.querySelector('.get_reserve_table_checkbox30').value = CurrentTime.getHours() + ":" + min;

                        let reserve_table_6 = setInterval(function () {

                            if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_reserve_table_checkbox30').value) {
                                alert("Бронь на 10хв. закінчилась!!! Ніхто за цей столик не прийшов!!!")
                                clearInterval(reserve_table_6);
                            }

                        }, 1000);

                        console.log(new Date().toLocaleTimeString().slice(0, -3));
                        console.log(CurrentTime.getHours() + ":" + min);

                    })


                    let get_time_table1 = setInterval(function () {
                        if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_time_table2').value) {
                            document.querySelector('.get_time_table2').value = 0;
                            alert("Закінчилась бронь на столик №" + num_place_contentText);
                            let data_user = $("form").serialize();
                            $.ajax({
                                url: 'model/saveDB.php',
                                type: 'POST',
                                data: data_user,
                                success: function (data) {
                                }
                            });
                            clearInterval(get_time_table1);
                        }
                    }, 1000);


                    if (document.querySelector('.get_place5_input_row1_30').value == 1) {
                        document.querySelector('.choose_place_form_2v_1_30').checked = true;
                    }

                    if (document.querySelector('.get_place6_input_row1_30').value == 1) {
                        document.querySelector('.choose_place_form_2v_2_30').checked = true;
                    }


                    document.querySelector('.choose_place_form_2v_1_30').addEventListener('click', function () {
                        if (document.querySelector('.get_place5_input_row1_30').value == 0) {
                            document.querySelector('.get_place5_input_row1_30').value = 1;
                        } else {
                            document.querySelector('.get_place5_input_row1_30').value = 0;
                        }
                    })

                    document.querySelector('.choose_place_form_2v_2_30').addEventListener('click', function () {
                        if (document.querySelector('.get_place6_input_row1_30').value == 0) {
                            document.querySelector('.get_place6_input_row1_30').value = 1;
                        } else {
                            document.querySelector('.get_place6_input_row1_30').value = 0;
                        }
                    })


                } else if (this.children[0].getAttribute('data-table_view') == 'h4') {

                    choose_place_form_4h_main();

                    TimeInputPlace();

                    if (this.children[0].querySelector('.number_place').textContent == 7) {

                        // document.querySelector('.time_button').addEventListener('click', function () {
                        //     document.querySelector('.get_time_table3').value = document.querySelector('#time').value;
                        //     //   console.log(document.querySelector('.get_time_table3').value);
                        // })


                        // Визов функції по часу
                        var CurrentTime = new Date();

                        let get_time_table1 = setInterval(function () {
                            if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_time_table3').value) {
                                document.querySelector('.get_time_table3').value = 0;
                                alert("Закінчилась бронь на столик №" + num_place_contentText);
                                let data_user = $("form").serialize();
                                $.ajax({
                                    url: 'model/saveDB.php',
                                    type: 'POST',
                                    data: data_user,
                                    success: function (data) {
                                    }
                                });
                                clearInterval(get_time_table1);
                            }
                        }, 1000);


                        //Показую зайняті місця
                        var a = 1;
                        for (var i = 7; i <= 10; i++) {
                            var get_place1_input_row1_6_all = ".get_place" + i + "_input_row1_7";
                            var choose_place1_form_4v_1_6_all = ".choose_place_form_4h_" + a + "_7";
                            if (document.querySelector(get_place1_input_row1_6_all).value == 1) {
                                document.querySelector(choose_place1_form_4v_1_6_all).checked = true;
                            }
                            a++;
                        }


                        let choose_place7 = 7;
                        for (let i = 1; i <= 4; i++) {
                            let choose_place1_form_4v_1_6 = ".choose_place_form_4h_" + i + "_7"
                            let get_place1_input_row1_6 = ".get_place" + choose_place7 + "_input_row1_7";
                            document.querySelector(choose_place1_form_4v_1_6).addEventListener('click', function () {
                                if (document.querySelector(get_place1_input_row1_6).value == 0) {
                                    document.querySelector(get_place1_input_row1_6).value = 1;
                                } else {
                                    document.querySelector(get_place1_input_row1_6).value = 0;
                                }
                            })
                            choose_place7++
                        }


                    } else if (this.children[0].querySelector('.number_place').textContent == 8) {

                        // document.querySelector('.time_button').addEventListener('click', function () {
                        //     document.querySelector('.get_time_table4').value = document.querySelector('#time').value;
                        //     // console.log(document.querySelector('.get_time_table4').value);
                        // })


                        // Визов функції по часу
                        var CurrentTime = new Date();

                        let get_time_table1 = setInterval(function () {
                            if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_time_table4').value) {
                                document.querySelector('.get_time_table4').value = 0;
                                alert("Закінчилась бронь на столик №" + num_place_contentText);
                                let data_user = $("form").serialize();
                                $.ajax({
                                    url: 'model/saveDB.php',
                                    type: 'POST',
                                    data: data_user,
                                    success: function (data) {
                                    }
                                });
                                clearInterval(get_time_table1);
                            }
                        }, 1000);

                        var a = 1;
                        for (var i = 11; i <= 14; i++) {
                            var get_place1_input_row1_6_all = ".get_place" + i + "_input_row1_8";
                            var choose_place1_form_4v_1_6_all = ".choose_place_form_4h_" + a + "_8";
                            if (document.querySelector(get_place1_input_row1_6_all).value == 1) {
                                document.querySelector(choose_place1_form_4v_1_6_all).checked = true;
                            }
                            a++;
                        }


                        let choose_place8 = 11;
                        for (let i = 1; i <= 4; i++) {
                            let choose_place1_form_4v_1_6 = ".choose_place_form_4h_" + i + "_8"
                            let get_place1_input_row1_6 = ".get_place" + choose_place8 + "_input_row1_8";
                            document.querySelector(choose_place1_form_4v_1_6).addEventListener('click', function () {
                                if (document.querySelector(get_place1_input_row1_6).value == 0) {
                                    document.querySelector(get_place1_input_row1_6).value = 1;
                                } else {
                                    document.querySelector(get_place1_input_row1_6).value = 0;
                                }
                            })
                            choose_place8++
                        }


                    } else if (this.children[0].querySelector('.number_place').textContent == 9) {


                        // document.querySelector('.time_button').addEventListener('click', function () {
                        //     document.querySelector('.get_time_table5').value = document.querySelector('#time').value;
                        //     // console.log(document.querySelector('.get_time_table5').value);
                        // })


                        // Визов функції по часу
                        var CurrentTime = new Date();

                        let get_time_table1 = setInterval(function () {
                            if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_time_table5').value) {
                                document.querySelector('.get_time_table5').value = 0;
                                alert("Закінчилась бронь на столик №" + num_place_contentText);
                                let data_user = $("form").serialize();
                                $.ajax({
                                    url: 'model/saveDB.php',
                                    type: 'POST',
                                    data: data_user,
                                    success: function (data) {
                                    }
                                });
                                clearInterval(get_time_table1);
                            }
                        }, 1000);

                        var a = 1;
                        for (var i = 15; i <= 18; i++) {
                            var get_place1_input_row1_6_all = ".get_place" + i + "_input_row1_9";
                            var choose_place1_form_4v_1_6_all = ".choose_place_form_4h_" + a + "_9";
                            if (document.querySelector(get_place1_input_row1_6_all).value == 1) {
                                document.querySelector(choose_place1_form_4v_1_6_all).checked = true;
                            }
                            a++;
                        }


                        let choose_place9 = 15;
                        for (let i = 1; i <= 4; i++) {
                            let choose_place1_form_4v_1_6 = ".choose_place_form_4h_" + i + "_9"
                            let get_place1_input_row1_6 = ".get_place" + choose_place9 + "_input_row1_9";
                            document.querySelector(choose_place1_form_4v_1_6).addEventListener('click', function () {
                                if (document.querySelector(get_place1_input_row1_6).value == 0) {
                                    document.querySelector(get_place1_input_row1_6).value = 1;
                                } else {
                                    document.querySelector(get_place1_input_row1_6).value = 0;
                                }
                            })
                            choose_place9++
                        }


                    } else if (this.children[0].querySelector('.number_place').textContent == 10) {


                        // document.querySelector('.time_button').addEventListener('click', function () {
                        //     document.querySelector('.get_time_table6').value = document.querySelector('#time').value;
                        //     // console.log(document.querySelector('.get_time_table6').value);
                        // })


                        // Визов функції по часу
                        var CurrentTime = new Date();

                        let get_time_table1 = setInterval(function () {
                            if (new Date().toLocaleTimeString().slice(0, -3) == document.querySelector('.get_time_table6').value) {
                                document.querySelector('.get_time_table6').value = 0;
                                alert("Закінчилась бронь на столик №" + num_place_contentText);
                                let data_user = $("form").serialize();
                                $.ajax({
                                    url: 'model/saveDB.php',
                                    type: 'POST',
                                    data: data_user,
                                    success: function (data) {
                                    }
                                });
                                clearInterval(get_time_table1);
                            }
                        }, 1000);


                        var a = 1;
                        for (var i = 19; i <= 22; i++) {
                            var get_place1_input_row1_6_all = ".get_place" + i + "_input_row1_10";
                            var choose_place1_form_4v_1_6_all = ".choose_place_form_4h_" + a + "_10";
                            if (document.querySelector(get_place1_input_row1_6_all).value == 1) {
                                document.querySelector(choose_place1_form_4v_1_6_all).checked = true;
                            }
                            a++;
                        }


                        let choose_place10 = 19;
                        for (let i = 1; i <= 4; i++) {
                            let choose_place1_form_4v_1_6 = ".choose_place_form_4h_" + i + "_10"
                            let get_place1_input_row1_6 = ".get_place" + choose_place10 + "_input_row1_10";
                            document.querySelector(choose_place1_form_4v_1_6).addEventListener('click', function () {
                                if (document.querySelector(get_place1_input_row1_6).value == 0) {
                                    document.querySelector(get_place1_input_row1_6).value = 1;
                                } else {
                                    document.querySelector(get_place1_input_row1_6).value = 0;
                                }
                            })
                            choose_place10++
                        }
                    }


                } else if (this.children[0].getAttribute('data-table_view') == 'h2') {

                    choose_place_form_2h_main();

                    TimeInputPlace();
                }

                alert(1111111111);
            } else {
                this.querySelector('.row1_place_input').value = 0;
                alert(2222222);
            }
        }
    }

    setInterval(function () {

        checkPeople();


        for (var i = 1; i <= 4; i++) {
            var get_place1_input_row = ".get_place" + i + "_input_row1_6";
            var get_place1_row1 = ".get_place" + i + "_row1"

            if (document.querySelector(get_place1_input_row).value == 1) {
                document.querySelector(get_place1_row1).style.background = "gray";
            } else {
                document.querySelector(get_place1_row1).style.background = "green";
            }
        }


        for (var i = 5; i <= 6; i++) {
            var get_place1_input_row = ".get_place" + i + "_input_row1_30";
            var get_place1_row1 = ".get_place" + i + "_row1"

            if (document.querySelector(get_place1_input_row).value == 1) {
                document.querySelector(get_place1_row1).style.background = "gray";
            } else {
                document.querySelector(get_place1_row1).style.background = "green";
            }
        }

        for (var i = 7; i <= 10; i++) {
            var get_place1_input_row = ".get_place" + i + "_input_row1_7";
            var get_place1_row1 = ".get_place" + i + "_row1"

            if (document.querySelector(get_place1_input_row).value == 1) {
                document.querySelector(get_place1_row1).style.background = "gray";
            } else {
                document.querySelector(get_place1_row1).style.background = "green";
            }
        }

        for (var i = 11; i <= 14; i++) {
            var get_place1_input_row = ".get_place" + i + "_input_row1_8";
            var get_place1_row1 = ".get_place" + i + "_row1"

            if (document.querySelector(get_place1_input_row).value == 1) {
                document.querySelector(get_place1_row1).style.background = "gray";
            } else {
                document.querySelector(get_place1_row1).style.background = "green";
            }
        }

        for (var i = 15; i <= 18; i++) {
            var get_place1_input_row = ".get_place" + i + "_input_row1_9";
            var get_place1_row1 = ".get_place" + i + "_row1"

            if (document.querySelector(get_place1_input_row).value == 1) {
                document.querySelector(get_place1_row1).style.background = "gray";
            } else {
                document.querySelector(get_place1_row1).style.background = "green";
            }
        }

        for (var i = 19; i <= 22; i++) {
            var get_place1_input_row = ".get_place" + i + "_input_row1_10";
            var get_place1_row1 = ".get_place" + i + "_row1"

            if (document.querySelector(get_place1_input_row).value == 1) {
                document.querySelector(get_place1_row1).style.background = "gray";
            } else {
                document.querySelector(get_place1_row1).style.background = "green";
            }
        }


    }, 1000);




    //скриваю вікно з часом і записую  в базу
    if (new Date().toLocaleTimeString().slice(0, -3) <= document.querySelector('.get_time_table1').value) {
        document.querySelector('.get_time_table1').value = 0;
        let data_user = $("form").serialize();
        $.ajax({
            url: 'model/saveDB.php',
            type: 'POST',
            data: data_user,
            success: function (data) {
            }
        });
    }


}


document.querySelector('.modal_order_button_order').addEventListener('click', function () {
    document.querySelector('.modal_order_bg').classList.remove('modal_order_show');
})


function TimeInputPlace(e) {
    $(function () {
        $('#time').timeDropper({
            format: 'H:mm'
        });
    });
}
