            <?php include_once 'main_header.php'; ?>
           
            <?php include_once 'side_navigation.php';?>

            <main class="mn-inner">
                <div class="row">
                    
                    <div class="col s12 m12 l12">
                        <div class="card">
                            <div class="card-content">
                                <a href="add_student.php" style="float:right">Add Student</a>
                                <span class="card-title">Students</span>
                                <?php $getData = getAllData('students');?>
                                <table id="example" class="display responsive-table datatable-example">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Certificate Number</th>
                                            <th>course Name</th>
                                            <th>Duration</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>                                    
                                    <tbody>
                                        <?php while ($row = $getData->fetch_assoc()) { ?>
                                        <tr>
                                            <td><?php echo $row['name'];?></td>
                                            <td><?php echo $row['certificate_number'];?></td>
                                            <td><?php echo $row['course_name'];?></td>
                                            <td><?php echo $row['duration'];?></td>
                                            <td><a href="edit_student.php?uid=<?php echo $row['id'];?>"><i class="material-icons dp48">edit</i></a><a href="#"><a class="click_view" data-modalId="<?php echo $row['id']?>" href="#"><i class="material-icons dp48">visibility</i></a><a href="delete_student.php?uid=<?php echo $row['id']; ?>"><i class="material-icons dp48" onclick="return confirm('Are you sure you want to delete?')">delete</i></a></td>
                                            <div id="myModal_<?php echo $row['id']; ?>" class="modal fade" >
                                            <div class="modal-dialog" Style="margin-top:10%;">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                       <h3 class="modal-title"><b>Admin User Information</b></h3>
                                                    </div>
                                                    <div class="modal-body" >
                                                        <h5 class="modal-title-set"><b>Name : </b><?php echo $row['name'];?></h5>
                                                        <h5 class="modal-title-set"><b>Certificate Number : </b><?php echo $row['certificate_number'];?></h5>
                                                        <h5 class="modal-title-set"><b>Course Name : </b><?php echo $row['course_name'];?></h5>
                                                        <h5 class="modal-title-set"><b>Course Duration : </b><?php echo $row['duration'];?></h5>
                                                        <h5 class="modal-title-set"><b>Course Start Date : </b><?php echo $row['course_start_date']."<br>"; ?></h5>
                                                        <h5 class="modal-title-set"><b>Course End Date : </b><?php echo $row['course_end_date']."<br>"; ?></h5>
                                                    </div>
                                                    <div class="modal-footer" >
                                                        <button type="button" class="btn" data-dismiss="modal" style="background-color:#f00; color:#fff">Close</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        </tr>               
                                       <?php }?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
         <?php include_once 'footer.php'; ?>