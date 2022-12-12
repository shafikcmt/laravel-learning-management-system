    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/vendor.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/TimeCircles.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>

    <!-- <script src="{{asset('js/main.js')}}"></script> -->

       
<script>
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

</script>

<script>
    $("#DateCountdown").TimeCircles();
    $("#CountDownTimer").TimeCircles({ time: { Days: { show: false }, Hours: { show: false } }});
    $("#PageOpenTimer").TimeCircles();
    
    var updateTime = function(){
        var date = $("#date").val();
        var time = $("#time").val();
        var datetime = date + ' ' + time + ':00';
        $("#DateCountdown").data('date', datetime).TimeCircles().start();
    }
    $("#date").change(updateTime).keyup(updateTime);
    $("#time").change(updateTime).keyup(updateTime);
    
    // Start and stop are methods applied on the public TimeCircles instance
    $(".startTimer").click(function() {
        $("#CountDownTimer").TimeCircles().start();
    });
    setInterval(function(){
            var remaining_second = $('#CountDownTimer').TimeCircles().getTime();
            if(remaining_second < 1 ){
                alert('Exam time over !');
                window.location.replace('https://www.geetauniversity.edu.in/');
            }
        }, 1000);

    $(".stopTimer").click(function() {
        $("#CountDownTimer").TimeCircles().stop();
    });
</script>     
<script>
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        responsiveClass:true,
        responsive:{
            0:{
                items:1,
                nav:true
            },
            600:{
                items:2,
                nav:false
            },
            1000:{
                items:5,
                nav:true,
                loop:true
            }
        }
    })

</script>
<script type="text/javascript"> 
      $(function(){
       $('#alertMessage').delay(2000).fadeOut();
      });
</script>
<!-- Course Mapping Batch -->

<script type="text/javascript">
    $(document).ready(function () {
        $('#category').on('change', function () {
            var categoryId = this.value;
            $('#course').html('');
            $.ajax({
                url: '{{ route('getCourse') }}?id='+categoryId,
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
</script>
<!-- Course Mapping Single Student -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#categories').on('change', function () {
            var categoryId = this.value;
            $('#courses').html('');
            $.ajax({
                url: '{{ route('courseGet') }}?id='+categoryId,
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
</script>


<!-- Question bulk Import -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#quiz_category').on('change', function () {
            var qcategoryId = this.value;
            $('#quiz_topic').html('');
            $.ajax({
                url: '{{ route('Getquiz') }}?id='+qcategoryId,
                type: 'get',
                success: function (res) {
                    $('#quiz_topic').html('<option value="">Select Quiz</option>');
                    $.each(res, function (key, value) {
                        $('#quiz_topic').append('<option  value="' + value
                            .id + '">' + value.topic_name + '</option>');
                    });
                    
                }
            });
        });
        
    });
</script>

<!-- Quiz wish  Result   -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#category').on('change', function () {
            var categoryId = this.value;
            $('#course').html('');
            $.ajax({
                url: '{{ route('quizCourse') }}?id='+categoryId,
                type: 'get',
                success: function (res) {
                    $('#course').html('<option>Select Course</option>');
                    $.each(res, function (key, value) {
                        $('#course').append('<option  value="' + value
                            .id + '">' + value.name + '</option>');
                    });  
                }
            });
            $('#course').on('change', function(){
            var courseId = this.value;
            $('#quiz').html('');
            $.ajax({
                url: '{{ route('getQuiz') }}?id='+courseId,
                type: 'get',
                success: function (res) {
                    $('#quiz').html('<option>Select Quiz</option>');
                    $.each(res, function (key, value) {
                        $('#quiz').append('<option  value="' + value
                            .id + '">' + value.topic_name + '</option>');
                    }); 
                }
            });
            });      
        });   
        
        

});
</script> 
<!-- Fetch Quiz Result Data -->
<script>
    
fetch_quiz_result_data();

function fetch_quiz_result_data(query = '') {
    $.ajax({
        url: "{{ route('getQuizResult') }}",
        method: 'GET',
        data: {
            query: query
        },
        dataType: 'json',
        success: function (data) {
            $('#quiz_result').html(data.table_data);
            $('#total_records').text(data.total_data);
        }
    })
}

$(document).on('change', '#quiz', function () {
    var query = $(this).val();
    fetch_quiz_result_data(query);
});
</script>





<!-- Add Quiz -->
<script type="text/javascript">
    $(document).ready(function () {
        $('#course').on('change', function () {
            var courseId = this.value;
            $('#quizcat').html('');
            $.ajax({
                url: '{{ route('quizGet') }}?id='+courseId,
                type: 'get',
                success: function (res) {
                    $('#quizcat').html('<option value="">Select Course</option>');
                    $.each(res, function (key, value) {
                        $('#quizcat').append('<option  value="' + value
                            .id + '">' + value.category_name + '</option>');
                    });
                    
                }
            });
        });
        
    });
</script>
<script>
    $("#sidebar-collapse-btn").click(function(){
  $(".sidebar").fadeToggle();
});
</script>

