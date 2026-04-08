<?php
$how_it_works_content = jsonDecode($page_Data['how_it_works']);
?>
<section class="section how-works-section v2">
    <div class="container">
        <div class="row">
            <!-- Heading -->
            <div class="col-12">
                <div class="section-header text-center">
                    <h2 class="h2-title"><?php echo $how_it_works_content['title']; ?></h2>
                </div>
            </div>
            <!-- Left Content (Steps) -->
            <div class="col-lg-6 order-2 order-lg-1 step-card-wrapper">
                <div class="steps-card">
                    <div class="steps-wrap">
                        <?php foreach ($how_it_works_content['treatments'] as $treatment): ?>
                        <div class="steps">
                            <?php
                            if($treatment['name']) {?>
                                <h5 class="step-title"><span><?php echo $treatment['name']; ?></span></h5>
                                <?php
                            }?>
                            <p><?php echo $treatment['description']; ?></p>
                        </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            </div>
            <!-- Right Image -->
            <div class="col-lg-6 order-1 order-lg-2">
                <div class="image-box">
                    <img src="<?php echo home_url(); ?>/<?php echo $how_it_works_content['media']['src']; ?>" alt="<?php echo $how_it_works_content['media']['alt']; ?>" loading="lazy">
                </div>
            </div>
        </div>
        <!-- Bottom Labels -->
        <div class="row benefits">
            <?php foreach ($how_it_works_content['highlights'] as $highlight): ?>
                <div class="col-lg-6 benefit <?php echo $highlight['type']; ?>"><p><?php echo $highlight['text']; ?></p></div>
            <?php endforeach; ?>
        </div>
    </div>
</section>
