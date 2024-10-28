<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <title>Project Tracker</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: center;
        }
        th {
            background-color: #f2f2f2;
        }
        
        .red{
            color:red;
        }
        #green{
            color:red;
            background-color:red;
        }
        tr{
            background-color:;
        }
        #red th{
            background-color: red;
            color:yellow;
        }
        #orange th{
            background-color: orange;
            color:yellow;
        }
        #lgreen th{
            background-color: #17e628;
            color:yellow;
        }
        #dgreen th{
            background-color: green;
            color:yellow;
        }
        
    </style>
</head>
<body>

    <h2>Project Tracker</h2>
    <div><a href="index.php" class="btn btn-info">Add Task</a></div><br><br>
    <table>
        <tr>
            <td>
            <table>
        <tr id="red">
            <th>Zone</th>
            <th colspan="7">Important And Urgent</th>
        </tr>
        <tr class="red">
            <th>SlN</th>
            <th>Projects</th>
            <th>Activities</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Remarks</th>
        </tr>
        <?php 
            include './connection.php';
            $sql = "SELECT * FROM `project_table` WHERE `zone`='Important and Urgent'";
            $result = mysqli_query($con, $sql);
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC); 
            // print_r($row);
            $slno=1; 
            for($i=0;$i<8;$i++){
?>
            
        <tr>
            <td><?php echo $slno++; ?></td>
            <td><?php echo $row[$i]['project'] ?? ''; ?></td>
            <td><?php echo $row[$i]['activity'] ?? ''; ?></td>
            <td><?php echo $row[$i]['start_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['end_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['status'] ?? ''; ?></td>
            <td><?php echo $row[$i]['priority'] ?? ''; ?></td>
            <td><?php echo $row[$i]['remark'] ?? ''; ?></td>
        </tr>
      <?php 
      }
      ?>
    
    </table>
            </td>
            <td>
            <table>
        <tr id="orange">
            <th>Zone</th>
            <th colspan="7">Not Important But Urgent</th>
        </tr>
        <tr class="red">
            <th>SlN</th>
            <th>Projects</th>
            <th>Activities</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Remarks</th>
        </tr>
        
        <?php 
            include './connection.php';
            $sql = "SELECT * FROM `project_table` WHERE `zone`='Not Important but Urgent'";
            $result = mysqli_query($con, $sql);
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC); 
            // print_r($row);
            $slno=1; 
            for($i=0;$i<8;$i++){
?>
            
        <tr>
            <td><?php echo $slno++; ?></td>
            <td><?php echo $row[$i]['project'] ?? ''; ?></td>
            <td><?php echo $row[$i]['activity'] ?? ''; ?></td>
            <td><?php echo $row[$i]['start_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['end_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['status'] ?? ''; ?></td>
            <td><?php echo $row[$i]['priority'] ?? ''; ?></td>
            <td><?php echo $row[$i]['remark'] ?? ''; ?></td>
        </tr>
      <?php 
      }
      ?>
    </table>
            </td>

        </tr>
        <tr>
            <td>
            <table>
        <tr id="lgreen">
            <th>Zone</th>
            <th colspan="7">Important But Not Urgent</th>
        </tr>
        <tr class="red">
            <th>SlN</th>
            <th>Projects</th>
            <th>Activities</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Remarks</th>
        </tr>
        
        <?php 
            include './connection.php';
            $sql = "SELECT * FROM `project_table` WHERE `zone`='Important but not Urgent'";
            $result = mysqli_query($con, $sql);
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC); 
            // print_r($row);
            $slno=1; 
            for($i=0;$i<8;$i++){
?>
            
        <tr>
            <td><?php echo $slno++; ?></td>
            <td><?php echo $row[$i]['project'] ?? ''; ?></td>
            <td><?php echo $row[$i]['activity'] ?? ''; ?></td>
            <td><?php echo $row[$i]['start_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['end_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['status'] ?? ''; ?></td>
            <td><?php echo $row[$i]['priority'] ?? ''; ?></td>
            <td><?php echo $row[$i]['remark'] ?? ''; ?></td>
        </tr>
      <?php 
      }
      ?>
    </table>
            </td>
            <td>
            <table>
        <tr id="dgreen">
            <th>Zone</th>
            <th colspan="7">Not Important And Not Urgent</th>
        </tr>
        <tr class="red">
            <th>SlN</th>
            <th>Projects</th>
            <th>Activities</th>
            <th>Start Time</th>
            <th>End Time</th>
            <th>Status</th>
            <th>Priority</th>
            <th>Remarks</th>
        </tr>
        
        <?php 
            include './connection.php';
            $sql = "SELECT * FROM `project_table` WHERE `zone`='Not Important and not Urgent'";
            $result = mysqli_query($con, $sql);
            $row=mysqli_fetch_all($result,MYSQLI_ASSOC); 
            // print_r($row);
            $slno=1; 
            for($i=0;$i<8;$i++){
?>
            
        <tr>
            <td><?php echo $slno++; ?></td>
            <td><?php echo $row[$i]['project'] ?? ''; ?></td>
            <td><?php echo $row[$i]['activity'] ?? ''; ?></td>
            <td><?php echo $row[$i]['start_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['end_date'] ?? ''; ?></td>
            <td><?php echo $row[$i]['status'] ?? ''; ?></td>
            <td><?php echo $row[$i]['priority'] ?? ''; ?></td>
            <td><?php echo $row[$i]['remark'] ?? ''; ?></td>
        </tr>
      <?php 
      }
      ?>
    </table>

</body>
