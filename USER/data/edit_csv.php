



<?php
    session_start();
    $file_id = $_GET['file_id'];
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>EOD</title>
    <link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="datatable/dataTable.bootstrap.min.css">
    <style>
        .height10{
            height:10px;
        }
        .mtop10{
            margin-top:10px;
        }
        .modal-label{
            position:relative;
            top:7px
        }
    </style>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
            <?php
                if(isset($_SESSION['error'])){
                    echo
                    "
                    <div class='alert alert-danger text-center'>
                        <button class='close'>&times;</button>
                        ".$_SESSION['error']."
                    </div>
                    ";
                    unset($_SESSION['error']);
                }
                if(isset($_SESSION['success'])){
                    echo
                    "
                    <div class='alert alert-success text-center'>
                        <button class='close'>&times;</button>
                        ".$_SESSION['success']."
                    </div>
                    ";
                    unset($_SESSION['success']);
                }
            ?>
            </div>
            <div class="row">
                <a href="index.php"  class="btn btn-primary" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-left"></span> BACK</a>
                 <a href="save_excel.php?file_id=<?php echo $file_id; ?>"  class="btn btn-primary" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-left"></span> DOWNLOAD (XLS)</a>
                 <a href="save_csv.php?file_id=<?php echo $file_id; ?>"  class="btn btn-primary" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-left"></span> DOWNLOAD (CSV)</a>
                 <a href="print_pdf.php?file_id=<?php echo $file_id; ?>"  class="btn btn-primary" style="background-color:black; border-color:black;"><span class="glyphicon glyphicon-left"></span> PRINT</a>
            </div>
            <div class="height10">
            </div>
            <div class="row">
                <table id="myTable" class="table table-bordered table-striped">
                    <thead>
                        <th>FIRSTNAME</th>
                        <th>LASTNAME</th>
                        <th>COURSE</th>
                        <th>YEAR</th>
                        <th>SECTION</th>
                        <th>GENDER</th>
                        <th>DATE CREATED</th>
                        <th>ACTION</th>
                        
                    </thead>
                    <tbody>
                                          
                   <?php
                            include_once('../../connection/connection.php');
                            $sql = "SELECT * FROM student WHERE file_id = '$file_id'";

                            //use for MySQLi-OOP
                            $query = $conn->query($sql);
                            while($row = $query->fetch_assoc()){
                                
                                echo 
                                "<tr>
                                    <td>".$row['firstname']."</td>
                                    <td>".$row['lastname']."</td>
                                    <td>".$row['course']."</td>
                                    <td>".$row['year']."</td>
                                    <td>".$row['section']."</td>
                                     <td>".$row['gender']."</td>
                                      <td>".$row['date_created']."</td>
                                  <td>
                                     <a href='#student_".$row['id']."' class='btn btn-success btn-sm' data-toggle='modal' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-edit'></span> Edit</a>
                                     <a href='#delete_".$row['id']."' class='btn btn-danger btn-sm' data-toggle='modal' style='background-color:black; border-color:black;'><span class='glyphicon glyphicon-trash'></span> Delete</a>
                                  </td>
                                  
                                </tr>";
                                include('edit_delete_modal.php');
                            }
                            ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?php include('add_modal.php') ?>

<script src="jquery/jquery.min.js"></script>
<script src="bootstrap/js/bootstrap.min.js"></script>
<script src="datatable/jquery.dataTables.min.js"></script>
<script src="datatable/dataTable.bootstrap.min.js"></script>
<!-- generate datatable on our table -->
<script>
$(document).ready(function(){
    //inialize datatable
    $('#myTable').DataTable();

    //hide alert
    $(document).on('click', '.close', function(){
        $('.alert').hide();
    })
});
</script>
</body>
</html>