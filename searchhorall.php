
       

                       
                    <div class="wthree-title container">
                    <h3 class="agile-title">
                      
                        
                        <br> 
                        <span class="title-pos"></span>
                    </h3>
                   


                <div class="row" id="story">

				<?php
// Assuming your database connection is established already
require("connection.php");
// Fetching search input

// SQL to fetch related values from tb_order
$sql = "SELECT * FROM tb_stories where Storytype='Horrorstory' ";

$result = $con->query($sql);


if ($result->num_rows > 0) 
{
// Output data of each row
while($row = $result->fetch_assoc()) 
{
?>
                    <div class="col-sm-4">
				
                       
                    <h4 style="color:red"><?php echo $row["Title"];?> </h4>
                            <img src="<?php echo "storypics/". $row["Image"];?>" height="250px" width="250px">
                        
                            <p><?php echo $row["Storytype"];?></p>
                            <span></span>
                            <p><?php echo substr ($row["Story"],0,50);?></p>
                            <a href="readmore.php?read=<?php echo $row["id"];?>" class="service-btn">read more</a>
                            <a href="edithere.php?edit=<?php echo $row["id"];?>" class="service-btn">Edit Here</a>
                            <a href="deletehere.php?delete=<?php echo $row["id"];?>" class="service-btn">Delete Here</a>
                       

							

                    </div>
                    <?php
							}
						}
						?>
                    </div>
                    
                    </div>

									</div>
								</div>
							</div>
                        
 