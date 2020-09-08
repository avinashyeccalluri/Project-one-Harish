<?php
include('config.php');
$result = mysqli_query($conn, "SELECT * from tbl_projects where id='".$_REQUEST['id']."'");
$row = mysqli_fetch_array($result);
?>
<div class="container project-view">

    <div class="row">
        <div class="col-md-8 project-images">
            <img src="<?php echo $row['image_1'];?>" alt="" class="img-responsive" />
            <?php
			if($row['image_2']!='')
			{?>
            <img src="<?php echo $row['image_2'];?>" alt="" class="img-responsive" />
            <?php
			}?>
            <?php
			if($row['image_3']!='')
			{?>
            <img src="<?php echo $row['image_3'];?>" alt="" class="img-responsive" />
            <?php
			}?>
            <?php
			if($row['image_4']!='')
			{?>
            <img src="<?php echo $row['image_4'];?>" alt="" class="img-responsive" />
            <?php
			}?>
        </div>
        <div class="col-md-4">
            <div class="project-info">
                <h2><?php echo $row['name'];?></h2>

                <div class="details">
                    <div class="info-text">
                        <span class="title">Date</span>
                        <span class="val">
                            <?php echo date('d-m-Y',strtotime($row['start_date']));?></span>
                    </div>

                    <div class="info-text">
                        <span class="title">Location</span>
                        <span class="val"><?php echo $row['location'];?></span>
                    </div>

                    

                    <div class="info-text">
                        <span class="title">Client</span>
                        <span class="val"><?php echo $row['client'];?></span>
                    </div>

                    <div class="info-text">
                        <span class="title">Category</span>
                        <span class="val"><?php
                            if($row['category_id']==1)
                            echo 'Commercial';
                            else if($row['category_id']==2)
                            echo 'Hospitality';
                            else if($row['category_id']==3)
                            echo 'Institutional';
                            else if($row['category_id']==4)
                            echo 'Interiors';
                            else if($row['category_id']==5)
                            echo 'Residential';
                            ?></span>
                    </div>
                    <?php
        if($row['area']!='')
        {?>
                <div class="info-text">
                        <span class="title">Area</span>
                        <span class="val">
                        <?php
                        echo $row['area'].'sq.ft';
                        ?>
                        </span>
                    </div>    
        <?php
        }?>        
                </div>
        <?php
        if($row['description']!='')
        {?>
                <p><?php echo $row['description'];?></p>
                
    <?php
        }?>
        <?php
        if($row['our_solution']!='')
        {?>
                    <h4>Our Solutions</h4>
                    <p><?php echo $row['our_solution'];?></p>
          <?php
        }?>
                        
            </div>
        </div>
    </div>
</div>