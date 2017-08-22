<?php include_once 'main_header.php'; ?>
           
<?php include_once 'side_navigation.php';?>
<?php  
error_reporting(0);
if (!isset($_POST['submit']))  {
            echo "";
        } else  { 

    $name = $_POST['name'];
    $certificate_number = $_POST['certificate_number'];
    $course_name = $_POST['course_name'];
    $duration = $_POST['duration'];
    $course_start_date = $_POST['course_start_date'];
    $course_end_date = $_POST['course_end_date'];
    
    $sql = "INSERT INTO students (`name`, `certificate_number`, `course_name`,`duration`, `course_start_date`, `course_end_date`) VALUES ('$name', '$certificate_number', '$course_name','$duration','$course_start_date','$course_end_date')";
    if($conn->query($sql) === TRUE){
       echo "<script>alert('Data Updated Successfully');window.location.href='students.php';</script>";
    } else {
       echo "<script>alert('Data Updation Failed');window.location.href='students.php';</script>";
    }
}
?>

    <main class="mn-inner">
        <div class="row">
            
            <div class="col s12 m12 l2"></div>
            <div class="col s12 m12 l8">
                <div class="card">
                    <div class="card-content">
                        <span class="card-title">Students</span><br>
                        <div class="row">
                           <form class="col s12" method="post">
                                <div class="row">
                                    
                                    <div class="input-field col s6">
                                        <input id="name" autofocus="autofocus" type="text" class="validate" name="name" required>
                                        <label for="name">Name</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="duration" autofocus="autofocus" type="text" class="validate" name="duration" required>
                                        <label for="duration">Duration Period</label>
                                    </div>

                                    <div class="input-field col s6">
                                        <input id="certificate_number" type="text" class="validate" name="certificate_number"  required>
                                        <label for="certificate_number">Certificate Number</label>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">
                                            <label for="course_start_date">Course Start date</label>
                                            <input id="course_start_date" name="course_start_date" type="text" class="datepicker">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col s12">
                                            <label for="course_end_date">Course End date</label>
                                            <input id="course_end_date" name="course_end_date" type="text" class="datepicker">
                                        </div>
                                    </div>
                                    
                                    <?php $getCourseName = getAllDataCheckActive('course_types',0); ?>
                                    <div class="input-field col s12">
                                        <select name="course_name" required>
                                            <option value="">Select Course</option>
                                            <?php while($row = $getCourseName->fetch_assoc()) {  ?>
                                                <option value="<?php echo $row['course_name']; ?>"><?php echo $row['course_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="col s12 l3">
                                        <input type="submit" name="submit" value="Submit" class="waves-effect waves-light btn blue m-b-xs">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                
            </div>
            <div class="col s12 m12 l2"></div>
        </div>
    </main>

<?php include_once 'footer.php'; ?>