   <div class="row-fluid">
       <a href="class.php" class="btn btn-info"><i class="icon-plus-sign icon-large"></i> Add Level</a>
                        <!-- block -->
                        <div class="block">
                            <div class="navbar navbar-inner block-header">
                                <div class="muted pull-left">Edit Level</div>
                            </div>
							<?php
							$query = mysqli_query($conn,"select * from class where class_id = '$get_id'")or die(mysqli_error());
							$row = mysqli_fetch_array($query);
							?>
                            <div class="block-content collapse in">
                                <div class="span12">
								<form method="post">
										<div class="control-group">
                                          <div class="controls">
                                            <input name="class_name" value="<?php echo $row['class_name']; ?>" class="input focused" id="focusedInput" type="text" placeholder = "Level Name" required>
                                          </div>
                                        </div>
										
									
											<div class="control-group">
                                          <div class="controls">
												<button name="update" class="btn btn-success"><i class="icon-save icon-large"></i></button>

                                          </div>
                                        </div>
                                </form>
								</div>
                            </div>
                        </div>
                        <!-- /block -->
                    </div><?php
if (isset($_POST['update'])){
$class_name = $_POST['class_name'];

mysqli_query($conn,"update class set class_name = '$class_name' where class_id = '$get_id' ")or die(mysqli_error());
?>

<script>
window.location = "class.php";
</script>
<?php

}
?>