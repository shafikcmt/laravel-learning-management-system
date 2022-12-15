<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz Report</title>

    <style>
  #score {
        width: 46%;
        margin: 0 auto;
        margin-top: 15px;
    }
    #score h4 {
    font-size: 25px;
    line-height: 26px;
    color: #fff;
}
   #grad-score {
    background-image: linear-gradient(to right top, #233873, #763a82, #b93775, #e54c52, #f07d1e);
    height: 100px;
    width: 200px;
    padding: 6px;
    float: left;
}

    #grad-per {
        background-image: linear-gradient(to right top, #233873, #763a82, #b93775, #e54c52, #f07d1e);
        height: 100px;
        width: 200px;
        padding: 6px;
        float: right;

    }

        *{
            padding: 0;
            margin: 0;
        }
        .quiz-report{
            width: 960px;
            margin: 0 auto;
            border: 1px solid #000;
            height: 100vh;
            position: relative;
        }
        .top-logo{
            margin-top: 13px;
            
        }
        .left-logo{
            width: 50%;
            float: left;
           
            margin-left: 20px;
        }
        .top-logo img {
            height: 96px;
            width: 182px;
        }
        .right-logo {
            width: 42%;
            float: right;
            /* right: 0; */
            display: block;
            text-align: right;
            margin-right: 20px;
            
        }
                
        .content_area {
            text-align: center;
            line-height: 40px;
        }
        .content_area h1 {
            color: red;
            font-size: 40px;
            padding-bottom: 8px;
        }
        .content_area h2 {
            color: #000;
            font-size: 25px;
            line-height: 30px;
        }
        .signiture {
        height: 100px;
        line-height: 26px;
        }
        .sing_left{
            width: 50%;
            float: left;
            position: absolute;
            left: 15px;
            bottom: 50px;
        }
        .sing_left h2{}
        .sing_left h4{}
        .sing_right {
            width: 50%;
            float: right;
            position: absolute;
            right: 15px;
            bottom: 50px;
            text-align: right;
        }
        .sing_right h2{}
        .sing_right h4{}
      
    </style>
    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">

</head>
<body>
    <div class="quiz-report">
        <div class="top-logo">
            <div class="left-logo">
            <img src="{{asset('images/gu-logo.png')}}" alt="">
            </div>
            <div class="right-logo">
            <img src="{{asset('images/gth-logo.jpg')}}" alt="">
            </div>
        </div>
        <div class="content_area">
            @foreach($quiz_reports as $quiz_report)
            <h1>Soft Skills Exam</h1>
            <h2>Time of Exam: 12:50 - 1:00</h2>
            <h2>Candidate Name: {{$quiz_report->student_name}}</h2>
            <h2 style="color: green;">Right Answers : {{$quiz_report->right_ans}}</h2>
            <h2 style="color: red;">Wrong Answers : {{$quiz_report->wrong_ans}}</h2>
            @endforeach()
        </div>

        <div id="score">
        <div id="grad-score">
            <h4>Score</h4><br>
            <h4 class="text-right text-light" style="text-align: right">{{$quiz_report->right_ans}}/{{$quiz_report->wrong_ans}}</h4>
        </div>
        <div id="grad-per" style="line-height:5px">
            <h4>Percentage</h4><br>
            <h4 style="text-align: right">
            {{$quiz_report->perchantage}} %</h4>
        </div>
        </div>

        <div class="signiture">
            <div class="sing_left">
                <h2>Test Coordinator</h2>
               
            </div>
            <div class="sing_right">
            <h2>COO GTH</h2>
                
            </div>
        </div>

    </div>
</body>
</html>