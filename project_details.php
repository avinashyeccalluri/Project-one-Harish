<?php
include('picConfig.php');
$id = $_REQUEST['id'];
$selected_project = [];
foreach ($picConfig as $key => $value) {
    foreach ($value as $key_1 => $value_1) {
        if ($value_1['id'] == (int) $id) {
            $selected_project = ['project_location' => $key_1, 'project_details' => $value_1, 'project_category' => $key];
            break;
        }
    }
}
?>
<div class="container project-view">

    <div class="row">
        <div class="col-md-8 project-images">
            <?php
            foreach ($selected_project['project_details']['images'] as $key => $value) {
            ?>
                <img src="<?php echo './images/projects/' . $selected_project['project_category'] . '/' . $selected_project['project_location'] . '/' . $selected_project['project_location'] . ' (' . $value . ').jpg' ?>" alt="test images" class="img-responsive" />
            <?php
            }
            ?>
        </div>
        <div class="col-md-4">
            <div class="project-info">
                <h2><?php echo $selected_project['project_details']['title']; ?></h2>

                <div class="details">
                    <div class="info-text">
                        <span class="title">Client</span>
                        <span class="val"><?php echo $selected_project['project_details']['client']; ?></span>
                    </div>
                    <div class="info-text">
                        <span class="title">Category</span>
                        <span class="val"><?php
                                            echo $projectCategory[$selected_project['project_category']];
                                            ?></span>
                    </div>
                    <div class="info-text">
                        <span class="title">Location</span>
                        <span class="val"><?php echo $selected_project['project_details']['location']; ?></span>
                    </div>
                    <div class="info-text">
                        <span class="title">Year</span>
                        <span class="val">
                            <?php echo $selected_project['project_details']['start_date']; ?></span>
                    </div>
                    <div class="info-text">
                        <span class="title">Area</span>
                        <span class="val">
                            <?php
                            echo $selected_project['project_details']['area'] . 'sq.ft';
                            ?>
                        </span>
                    </div>
                </div>
                <?php
                if ($selected_project['project_details']['plan_description'] != '') { ?>
                    <h4>Our Solutions</h4>
                    <p><?php echo $selected_project['project_details']['plan_description']; ?></p>
                <?php
                } ?>

            </div>
        </div>
    </div>
</div>