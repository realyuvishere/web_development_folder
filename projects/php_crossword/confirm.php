<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="description" content="">
	<meta name="author" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Ordin@trix 19.0 | Login Details</title>
    <link rel="icon" href="https://yuvrajsharma07.github.io/ordin/lib/favicon.png" sizes="26x26" type="image/png">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <style>
        body {
            background-color: #454d55
        }
        .table {
            margin: 0 !important;
            font-family: 'Montserrat'
        }
        img {
            padding: 4rem;
            width: 60%
        }
        @media screen and (max-width: 915px) {
            img {
                width: 100%
            }
        }
    </style>
</head>
<body>
    <center><a href="http://www.ordinatrix.tech/"><img class="img-fluid" src="https://yuvrajsharma07.github.io/ordin/lib/logo.png" placeholder="Ordin@trix 19.0"></a></center>
    <?php
require_once './PHPExcel.php';
$excel = PHPExcel_IOFactory::load('quiz results.xlsx');
$excel->setActiveSheetIndex(0);
$i = 4;

echo "<table class='table table-striped table-dark table-bordered'>
<tr>
    <td>S. No.</td>
    <td>School Name</td>
    <td>School Code</td>
    </tr>
";
while($excel->getActiveSheet()->getCell('A'.$i)->getValue() != "") {
    
    $no = $i - 3;
    $user = $excel->getActiveSheet()->getCell('A'.$i)->getValue();
    $pass = $excel->getActiveSheet()->getCell('C'.$i)->getValue();
    echo "
    <tr>
    <td>".$no."</td>
    <td>".$user."</td>
    <td>".$pass."</td>
    </tr>";
    $i++;
}

echo "</table>"
?>
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>