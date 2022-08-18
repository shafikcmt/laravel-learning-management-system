//    Fetch All Student Data Start
$(document).ready(function () {

    fetch_customer_data();

    function fetch_customer_data(query = '') {
        $.ajax({
            url: "{{ route('all-student.action') }}",
            method: 'GET',
            data: {
                query: query
            },
            dataType: 'json',
            success: function (data) {
                $('#students').html(data.table_data);
                $('#total_records').text(data.total_data);
            }
        })
    }

    $(document).on('keyup', '#search', function () {
        var query = $(this).val();
        fetch_customer_data(query);
    });
});
// Fetch All Student Data End

// Quiz Timer Start
$("#DateCountdown").TimeCircles();
$("#CountDownTimer").TimeCircles({
    time: {
        Days: {
            show: false
        },
        Hours: {
            show: false
        }
    }
});
$("#PageOpenTimer").TimeCircles();

var updateTime = function () {
    var date = $("#date").val();
    var time = $("#time").val();
    var datetime = date + ' ' + time + ':00';
    $("#DateCountdown").data('date', datetime).TimeCircles().start();
}
$("#date").change(updateTime).keyup(updateTime);
$("#time").change(updateTime).keyup(updateTime);

// Start and stop are methods applied on the public TimeCircles instance
$(".startTimer").click(function () {
    $("#CountDownTimer").TimeCircles().start();
});
$(".stopTimer").click(function () {
    $("#CountDownTimer").TimeCircles().stop();
});

// Quiz Timer End

// Course Slider Start
$('.owl-carousel').owlCarousel({
    loop: true,
    margin: 10,
    responsiveClass: true,
    responsive: {
        0: {
            items: 1,
            nav: true
        },
        600: {
            items: 2,
            nav: false
        },
        1000: {
            items: 5,
            nav: true,
            loop: true
        }
    }
})
// Course Slider End

// Alert Message timer start
$(function () {
    $('#alertMessage').delay(2000).fadeOut();
});
// Alert Message timer end
// Fetch Course Start

$(document).ready(function () {
    $('#category').on('change', function () {
        var categoryId = this.value;
        $('#course').html('');
        $.ajax({
            url: '{{ route('
            getCourse ') }}?id=' + categoryId,
            type: 'get',
            success: function (res) {
                $('#course').html('<option value="">Select Course</option>');
                $.each(res, function (key, value) {
                    $('#course').append('<option  value="' + value
                        .id + '">' + value.name + '</option>');
                });

            }
        });
    });

});

// Fetch Course End
// Fetch Course single Start

$(document).ready(function () {
    $('#categories').on('change', function () {
        var categoryId = this.value;
        $('#courses').html('');
        $.ajax({
            url: '{{ route('
            courseGet ') }}?id=' + categoryId,
            type: 'get',
            success: function (res) {
                $('#courses').html('<option value="">Select Course</option>');
                $.each(res, function (key, value) {
                    $('#courses').append('<option  value="' + value
                        .id + '">' + value.name + '</option>');
                });

            }
        });
    });

});

// Fetch Course single end
