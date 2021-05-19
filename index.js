
    $(document).ready(function() {

        var limit = 5;
        var start = 0;
        var action = 'inactive';

        function load_table1_data(limit, start) {
            $.ajax({
                url: "table1.php",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    $('#table_data1').append(data);
                    if (data == '') {
                        $('#table_data_message1').html("<button type='button' class='btn btn-info'>No Data Found</button>");
                        action = 'active';
                    } else {
                        $('#table_data_message1').html(" ");
                        action = "inactive";
                    }
                }
            });
        }

        if (action == 'inactive') {
            action = 'active';
            load_table1_data(limit, start);
        }
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#table_data1").height() && action == 'inactive') {
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_table1_data(limit, start);
                }, 3000);
            }
        });

    });

    $(document).ready(function() {

        var limit = 5;
        var start = 0;
        var action = 'inactive';

        function load_table2_data(limit, start) {
            $.ajax({
                url: "table2.php",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    $('#table_data2').append(data);
                    if (data == '') {
                        $('#table_data_message2').html("<button type='button' class='btn btn-info'>No Data Found</button>");
                        action = 'active';
                    } else {
                        $('#table_data_message2').html(" ");
                        action = "inactive";
                    }
                }
            });
        }

        if (action == 'inactive') {
            action = 'active';
            load_table2_data(limit, start);
        }
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#table_data2").height() && action == 'inactive') {
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_table2_data(limit, start);
                }, 3000);
            }
        });

    });
    $(document).ready(function() {

        var limit = 5;
        var start = 0;
        var action = 'inactive';

        function load_table3_data(limit, start) {
            $.ajax({
                url: "table3.php",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    $('#table_data3').append(data);
                    if (data == '') {
                        $('#table_data_message3').html("<button type='button' class='btn btn-info'>No Data Found</button>");
                        action = 'active';
                    } else {
                        $('#table_data_message3').html(" ");
                        action = "inactive";
                    }
                }
            });
        }

        if (action == 'inactive') {
            action = 'active';
            load_table3_data(limit, start);
        }
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#table_data3").height() && action == 'inactive') {
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_table3_data(limit, start);
                }, 3000);
            }
        });

    });



    $(document).ready(function() {

        var limit = 5;
        var start = 0;
        var action = 'inactive';

        function load_table4_data(limit, start) {
            $.ajax({
                url: "table4.php",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    $('#table_data4').append(data);
                    if (data == '') {
                        $('#table_data_message4').html("<button type='button' class='btn btn-info'>No Data Found</button>");
                        action = 'active';
                    } else {
                        $('#table_data_message4').html(" ");
                        action = "inactive";
                    }
                }
            });
        }

        if (action == 'inactive') {
            action = 'active';
            load_table4_data(limit, start);
        }
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#table_data4").height() && action == 'inactive') {
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_table4_data(limit, start);
                }, 3000);
            }
        });

    });



    $(document).ready(function() {

        var limit = 5;
        var start = 0;
        var action = 'inactive';

        function load_table5_data(limit, start) {
            $.ajax({
                url: "table5.php",
                method: "POST",
                data: {
                    limit: limit,
                    start: start
                },
                cache: false,
                success: function(data) {
                    $('#table_data5').append(data);
                    if (data == '') {
                        $('#table_data_message5').html("<button type='button' class='btn btn-info'>No Data Found</button>");
                        action = 'active';
                    } else {
                        $('#table_data_message5').html(" ");
                        action = "inactive";
                    }
                }
            });
        }

        if (action == 'inactive') {
            action = 'active';
            load_table5_data(limit, start);
        }
        $(window).scroll(function() {
            if ($(window).scrollTop() + $(window).height() > $("#table_data5").height() && action == 'inactive') {
                action = 'active';
                start = start + limit;
                setTimeout(function() {
                    load_table5_data(limit, start);
                }, 3000);
            }
        });

    });