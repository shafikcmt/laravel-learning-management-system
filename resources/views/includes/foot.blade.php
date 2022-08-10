    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <script src="{{asset('js/main.js')}}"></script>
    <script src="{{asset('js/all.min.js')}}"></script>
    <script src="{{asset('js/vendor.js')}}"></script>
    <script src="{{asset('js/app.js')}}"></script>
    <script src="{{asset('js/TimeCircles.js')}}"></script>
    <script src="{{asset('js/owl.carousel.min.js')}}"></script>
       
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
