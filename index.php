<?php include 'header.php'; ?>
<main class="metamorphosisclinic-main-wrapper">
    <!-- ================= Hero Section START ================= -->
     <?php
    $hero_content = jsonDecode($page_Data['hero']);?>
    <section class="hero-section"> 
        <div class="container">
            <div class="row">
                <div class="col-12 align-items-start site-logo-wrapper">
                    <a href="https://www.metamorphosis-clinic.com/" target="_blank" rel="noopener noreferrer" title="Metamorphosis Clinic">
                        <img src="<?php echo home_url(); ?>/assets/images/global/site-logo.webp" alt="Site Logo" class="site-logo" width="160" height="60">
                    </a>
                </div>
            </div>
            <div class="row">
                <!-- Left Content -->
                <div class="col-lg-6 hero-content">
                    <div class="hero-text">
                        <h1 class="h1-title">
                            <?php echo isset($hero_content['title']) ? $hero_content['title'] : 'Smooth, Hair-Free Skin with Advanced Laser Hair Reduction'; ?>
                        </h1>

                        <p class="sub-title">
                            <?php echo isset($hero_content['description']) ? $hero_content['description'] : 'Safe, painless & dermatologist-led laser hair removal across 9 clinics in Mumbai & Delhi.'; ?>
                        </p>
                        <?php
                        if(isset($hero_content['badges']) && is_array($hero_content['badges'])) {?>
                            <div class="hero-features-wrapper">
                                <div class="hero-features">
                                    <?php
                                    foreach($hero_content['badges'] as $badge) {
                                        ?>
                                         <div class="feature-box">
                                            <div class="icon">
                                                <img src="<?php echo home_url(); ?>/<?php echo isset($badge['icon']) ? $badge['icon'] : 'assets/images/global/hero-badge-12.svg'; ?>" 
                                                alt="<?php echo isset($badge['text']) ? $badge['text'] : 'Feature Icon'; ?>" width="35" height="35">
                                            </div>
                                            <p class="text"><?php echo isset($badge['text']) ? $badge['text'] : 'Feature Text'; ?></p>
                                        </div>
                                    <?php }?>
                                </div>
                                <div class="image-wrapper for-mobile">
                                    <img src="<?php echo home_url(); ?>/<?php echo isset($hero_content['image']) ? $hero_content['image'] : 'assets/images/hero-section-image.webp'; ?>" alt="<?php echo isset($page_Data['title']) ? $page_Data['title'] : 'Home'; ?>">
                                </div>
                            </div>
                            <?php
                        }?>
                    </div>
                </div>

                <!-- Right Image -->
                <div class="col-lg-6 hero-image for-desktop">
                    <div class="image-wrapper">
                        <img src="<?php echo home_url(); ?>/<?php echo isset($hero_content['image']) ? $hero_content['image'] : 'assets/images/hero-section-image.webp'; ?>" alt="<?php echo isset($page_Data['title']) ? $page_Data['title'] : 'Home'; ?>">
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- ================= Hero Section END ================= -->
    
    <?php include 'sections/section-contact.php'; ?>
    
    <?php $before_after_content = jsonDecode($page_Data['before_after']);
    if(is_array(($before_after_content))&&!empty($before_after_content)) {?>
        <!-- ================= before-after Section START ================= -->
        <section class="section before-after-section">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        
                        <!-- Heading -->
                        <div class="section-header text-center">
                            <h2 class="h2-title">
                                <?php echo isset($before_after_content['title']) ? $before_after_content['title'] : '<span>Real Results</span> You can See'; ?>
                            </h2>
                            <p><?php echo isset($before_after_content['description']) ? $before_after_content['description'] : 'Visible reduction in hair growth after just a few sessions'; ?></p>
                        </div>
                        <?php
                        if(is_array(($before_after_content['slides']))&&!empty($before_after_content['slides'])) {?>
                            <!-- Slider -->
                            <div class="swiper beforeAfterSwiper">
                                <div class="swiper-wrapper">
                                    <?php
                                    foreach($before_after_content['slides'] as $slide) { ?>
                                        <!-- Slide 1 -->
                                        <div class="swiper-slide">
                                            <div class="before-after-card">
                                                
                                                <div class="image-box before">
                                                    <img src="<?php echo home_url(); ?>/<?php echo isset($slide['before_image']) ? $slide['before_image'] : 'assets/images/before-after-images/slide-1-b.webp'; ?>" alt="before" loading="lazy">
                                                    <span><?php echo isset($slide['label_before']) ? $slide['label_before'] : 'Before'; ?></span>
                                                </div>
            
                                                <div class="image-box after">
                                                    <img src="<?php echo home_url(); ?>/<?php echo isset($slide['after_image']) ? $slide['after_image'] : 'assets/images/before-after-images/slide-1-a.webp'; ?>" alt="after" loading="lazy">
                                                    <span><?php echo isset($slide['label_after']) ? $slide['label_after'] : 'After'; ?></span>
                                                </div>
            
                                            </div>
                                        </div>
                                        <?php   
                                    }?>
                                </div>
                                <!-- Navigation -->
                                <div class="slider-nav">
                                    <div class="swiper-button-prev"></div>
                                    <div class="swiper-button-next"></div>
                                </div>
                            </div>
                            <?php
                        }?>
                    </div>
                </div>
            </div>
        </section>
        <!-- ================= before-after Section END ================= -->
        <?php
    } ?>


    <?php
    $how_it_works_content = jsonDecode($page_Data['how_it_works']);
    if (is_array($how_it_works_content) && !empty($how_it_works_content)) {
        switch ($how_it_works_content['version'] ?? '') {
            case 'V1':
                include 'sections/how-it-works-v1.php';
                break;
            case 'V2':
                include 'sections/how-it-works-v2.php';
                break;
        }
    }
    ?>

    <!-- ================= Why Section START ================= -->
    <?php
    $why_content = jsonDecode($page_Data['why_choose']);
    if(is_array(($why_content)) && !empty($why_content)) {?>
        <section class="why-section section">
            <div class="container">
                <h2 class="why-title">
                    <?php echo isset($why_content['title']) ? $why_content['title'] : 'Why Choose <span class="pink-text">Metamorphosis Clinic?</span>'; ?>
                </h2>

                <div class="row align-items-center">

                    <div class="col-md-6 listt1">
                        <div class="why-img">
                            <img src="<?php echo home_url(); ?>/<?php echo isset($why_content['image']) ? $why_content['image'] : 'assets/images/global/why-choose-mt-clinic.webp'; ?>" alt="Clinic Team" loading="lazy">
                        </div>
                    </div>

                    <div class="col-md-6 listt2">
                        <div class="why-list">
                            <?php
                            if(is_array(($why_content['points'])) && !empty($why_content['points'])) {
                                foreach($why_content['points'] as $point) { ?>
                                    <div class="why-item">
                                        <img class="check-box" src="<?php echo home_url(); ?>/<?php echo isset($point['icon']) ? $point['icon'] : 'assets/images/global/why-choose-right.svg'; ?>" alt="Feature Icon" loading="lazy">
                                        <div>
                                            <h6 class="h6-title">
                                                <?php echo isset($point['text']) ? $point['text'] : 'Feature Text'; ?>
                                            </h6>
                                        </div>
                                    </div>
                                <?php }
                            } ?>
                        </div>
                    </div>

                </div>
            </div>
        </section>
    <?php } ?>
    <!-- ================= Why Section  START ================= -->

    <?php 
    $packages_content = jsonDecode($page_Data['packages']);
    $version = $packages_content['version'];
    if(isset($packages_content['version'])) {
        if($version == 'V1') {
            include 'sections/packages-v1.php';
            } elseif($version == 'V2') {
            include 'sections/packages-v2.php';
        }
    }
    ?>

    <!-- ================= testimonial Section START ================= -->
    <?php $testimonial_content = jsonDecode($page_Data['testimonials']);
    if(is_array(($testimonial_content))&&!empty($testimonial_content)) {?>
        <!-- ================= testimonial Section START ================= -->
        <section class="testimonial-section section">
            <div class="container">
                <div class="row align-items-center">

                    <!-- Left Content -->
                    <div class="col-12">
                        <div class="testimonial-content  text-center">
                            <h2 class="h2-title">
                                <?php echo isset($testimonial_content['title']) ? $testimonial_content['title'] : 'What Our <span>Clients Say</span>'; ?>
                            </h2>
                        </div>
                    </div>

                    <!-- Right Slider -->
                    <div class="col-12">
                        <div class="swiper testimonial-slider">
                            <div class="swiper-wrapper">
                                <?php
                                if(is_array(($testimonial_content['testimonials']))&&!empty($testimonial_content['testimonials'])) {
                                    foreach($testimonial_content['testimonials'] as $testimonial) { ?>
                                        <div class="swiper-slide">
                                            <div class="testimonial-card">
                                                <div class="testimonial-icon">
                                                    <img src="<?php echo home_url(); ?>/assets/images/global/testimonial-coma.svg" alt="Testimonial Quote" loading="lazy">
                                                </div>
                                                <div class="testimonial-content">
                                                    <h6><?php echo isset($testimonial['title']) ? $testimonial['title'] : 'Testimonial Title'; ?></h6>
                                                    <p><?php echo isset($testimonial['content']) ? $testimonial['content'] : 'Testimonial content not available.'; ?></p>
                                                </div>
                                                <div class="testimonial-author">
                                                    <div class="author-img">
                                                        <img src="<?php echo home_url(); ?>/<?php echo (isset($testimonial['author_image']) && !empty($testimonial['author_image'])) ? $testimonial['author_image'] : 'assets/images/global/testimonialp-placeholder.png'; ?>" alt="<?php echo isset($testimonial['author_name']) ? $testimonial['author_name'] : 'Author Name'; ?>" loading="lazy">
                                                    </div>
                                                    <div class="author-name">
                                                        <h4><?php echo isset($testimonial['author_name']) ? $testimonial['author_name'] : 'Author Name'; ?></h4>
                                                        <p><?php echo isset($testimonial['author_treatment']) ? $testimonial['author_treatment'] : 'Treatment Type'; ?></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    <?php }
                                } ?>
                            </div>

                            <!-- Navigation -->
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>

                        </div>
                    </div>

                </div>
            </div>
        </section>
        <!-- ================= testimonial Section END ================= -->
    <?php } ?>
    <?php $faq_content = jsonDecode($page_Data['faq']);
    if(is_array(($faq_content))&&!empty($faq_content)) {?>
        <!-- ================= FAQ Section START ================= -->
        <section class="faq-section section">
            <div class="container">
                <div class="row">
                    <div class="col-12 text-center">
                        <h2 class="h2-title">
                            <?php echo isset($faq_content['title']) ? $faq_content['title'] : 'Frequently Asked <span>Questions</span>'; ?>
                        </h2>
                    </div>
                    <?php
                    if(is_array(($faq_content['faqs']))&&!empty($faq_content['faqs'])) {?>
                        <div class="col-lg-8 mx-auto">
                            <?php
                            foreach($faq_content['faqs'] as $faq) { ?>
                                <div class="faq-item">
                                    <div class="faq-question">
                                        <p><?php echo isset($faq['question']) ? $faq['question'] : 'Frequently Asked <span>Questions</span>'; ?></p>
                                        <span class="icon"><img src="<?php echo home_url(); ?>/assets/images/global/faq-arrow-icon.svg" alt="FAQ Icon" loading="lazy"></span>
                                    </div>
                                    <div class="faq-answer">
                                        <p><?php echo isset($faq['answer']) ? $faq['answer'] : 'Answer not available.'; ?></p>
                                    </div>
                                </div>
                                <?php
                            }?>
                        </div>
                        <?php
                    }?>
                </div>
            </div>
        </section>
        <?php
    } ?>
</main>
<?php include 'footer.php'; ?>
