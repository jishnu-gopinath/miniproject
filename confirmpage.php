<?php
include_once('config.php');
if (isset($_GET['id'])) {
            $id=$_GET['id'];
        
            $result = mysqli_query($db, "SELECT * FROM workshop where lic_no= $id and active= 0");
//$result = mysqli_query($con,"SELECT CustomerCode,CustomerName,MobileNo,CustomerStatus,LicenseExpiryDate FROM customermaster where CustomerCode like '%$Searchfield%'  ");
        }else{
        
        
            $result = mysqli_query($db, "SELECT * FROM workshop where active= 0 ");
//$result = mysqli_query($con,"SELECT CustomerCode,CustomerName,MobileNo,CustomerStatus,LicenseExpiryDate FROM customermaster where CustomerCode like '%$Searchfield%'  ");
        
        
        }
        ?>
        
        <div class="table-responsive">
                    <h4 class="margin-bottom-15">Workshop Users Table</h4>
                    <table class="table table-striped table-hover table-bordered">
                      <thead>
                        <tr>
                          <th><strong>Licence No</strong></th>
                          <th> Name</th>
                          <th><strong>owner name</strong></th>
                          <th><strong>district</strong></th>
                          <th><strong>contact number</strong></th>
                          <th><strong> workshop type</strong></th>
                         </tr>
                      </thead>
                      <?php
    $i = 1;
    $row_cnt = $result->num_rows;
    if ($row_cnt > 0) {
        while ($row = mysqli_fetch_array($result)) {
            ?>
                      <tbody>
                        <tr><td height="30">&nbsp;<?php echo $row[0]; ?></td>
                                <td height="30">&nbsp;<?php echo $row["lic_no"]; ?></td>
                                <td height="30">&nbsp;<?php echo $row["workshop_name"]; ?></td>
                                <td height="30">&nbsp;<?php echo $row["owner_name"]; ?></td>
                                <td height="30">&nbsp;<?php echo $row["district"]; ?></td>
                                <td height="30">&nbsp;<?php echo $row["contact_number"]; ?></td>
                                <td height="30">&nbsp;<?php echo $row["workshop_type"]; ?></td>
        </tr>
    
            <?php
            $i++;
        }
    } ?>                   
                      </tbody>
                    </table>
                  </div>
                  <div class="table-responsive">
                    <h4 class="margin-bottom-15">&nbsp;</h4>
                  </div>
                  
                </div>
              </div>
            </div>
          </div>