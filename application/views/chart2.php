<?php
    //ตั้งค่าการเชื่อมต่อฐานข้อมูล
    $database_host             = 'localhost';
    $database_username         = 'root';
    $database_password         = '';
    $database_name             = 'd_managment';
 
    $mysqli = new mysqli($database_host, $database_username, $database_password, $database_name);
//กำหนด charset ให้เป็น utf8 เพื่อรองรับภาษาไทย
    $mysqli->set_charset("utf8");
 
//กรณีมี Error เกิดขึ้น
    if ($mysqli->connect_error) {
        die('Error : ('. $mysqli->connect_errno .') '. $mysqli->connect_error);
    }
        //เรียกข้อมูลจาก ตาราง chart 
        $get_data = $mysqli->query("SELECT * FROM student");
        
        while($data = $get_data->fetch_assoc()){
            
            $result[] = $data;
        }
?>
 
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>กราฟการกระทำความผิด</title>
 
    <!-- Bootstrap -->
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
 
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>
    <h1>รายงานสรุปการกระทำความผิด</h1>
 
        <div id="container" style="min-width: 750px; height: 600px; max-width: 800px; margin: 0 auto"></div>
        <head>
		<script src="https://code.highcharts.com/highcharts.js"></script>
		<script src="https://code.highcharts.com/modules/exporting.js"></script>
		<script src="https://code.highcharts.com/modules/export-data.js"></script>
		</head>
        
        <table class="table" id="datatable">
            <thead>
                <tr>
                    
                    <th>รหัส</th>
                    <th>สำนักวิชา</th>
                    <th>หลักสูตร</th>
                    <th>ชื่อ</th>
                    <th>นามสกุล</th>
                </tr>
            </thead>
            <tbody>
                <?php
                    foreach($result as $result_tb){
                        echo"<tr>";
                            echo "<td>".$result_tb['student_id']."</td>";
                            echo "<td>".$result_tb['student_sc']."</td>";
                            echo "<td>".$result_tb['student_ma']."</td>";
                            echo "<td>".$result_tb['student_fname']."</td>";
                            echo "<td>".$result_tb['student_lname']."</td>";
                            
                        echo"</tr>";
                    }
                ?>
            
            </tbody>
        </table>
 
        
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/modules/data.js"></script>
    <script src="https://code.highcharts.com/modules/exporting.js"></script>
    
    <script>
    
    $(function () {
                
        $('#container').highcharts({
            data: {
                //กำหนดให้ ตรงกับ id ของ table ที่จะแสดงข้อมูล
                table: 'student_id'
            },
            chart: {
                type: 'column'
            },
            title: {
                text: 'จำนวนผู้กระทำความผิด'
            },
            yAxis: {
                allowDecimals: false,
                title: {
                    text: 'จำนวน'
                }
            },
            
            tooltip: {
                formatter: function () {
                    return '<b>' + this.series.name + '</b><br/>' +
                        this.point.y; + ' ' + this.point.name.toLowerCase();
                }
            }
        });
    });
    
    </script>
    
  </body>
</html>

