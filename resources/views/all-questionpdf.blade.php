<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Questions</title>
    <style>
        #customtble{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            
        }
        tbody tr:nth-child(even) {background-color: skyblue;}
        #customtble tr, th, td{
            border: 1px solid orange;
            padding: 10px;
            
        }
    </style>
</head>
<body>
    <table id="customtble">
        <thead>
            <tr>
            <th style="color:#fff" colspan="7" bgcolor="blue"> Questions List</th>
            </tr>
            <tr bgcolor="orange">
                <th>Serial</th>
                <th>Question</th>
                <th>Answer</th>
                <th>Option1</th>
                <th>Option2</th>
                <th>Option3</th>
                <th>Option4</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($questions as $question)
            <tr>
                <td><?php echo $i; ?></td>
                <td>{{$question->question}}</td>
                <td>{{$question->answer}}</td>
                <td>{{$question->option1}}</td>
                <td>{{$question->option2}}</td>
                <td>{{$question->option3}}</td>
                <td>{{$question->option4}}</td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
</body>
</html>