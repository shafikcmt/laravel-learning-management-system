<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Students</title>
    <style>
        #customtble{
            width: 100%;
            border-collapse: collapse;
            text-align: center;
            
        }
        tbody tr:nth-child(even) {
            background-color: skyblue;
        }
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
            <th style="color:#fff" colspan="7" bgcolor="blue"> Students List</th>
            </tr>
            <tr bgcolor="orange">
                <th>ID</th>
                <th>Name</th>
                <th>Roll</th>
                <th>Class</th>
                <th>Branch</th>
                <th>Semester</th>
                <th>Mobile</th>
            </tr>
        </thead>
        <tbody>
            <?php $i=1; ?>
            @foreach($students as $student)
            <tr>
                <td><?php echo $i; ?></td>
                <td>{{$student->name}}</td>
                <td>{{$student->roll}}</td>
                <td>{{$student->class}}</td>
                <td>{{$student->branch}}</td>
                <td>{{$student->semester}}</td>
                <td>{{$student->mobile}}</td>
            </tr>
            <?php $i++; ?>
            @endforeach
        </tbody>
    </table>
</body>
</html>