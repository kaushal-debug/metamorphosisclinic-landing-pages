<section class="laser-section section v2">
    <div class="laser-container container">
        
        <h2 class="laser-title pink-text"><?php echo $packages_content['title']; ?></h2>
        <p class="laser-subtitle subt"><?php echo $packages_content['subtitle']; ?></p>

        <div class="row g-3 justify-content-center">
            <?php foreach ($packages_content['packages'] as $package): ?>
                <div class="col-md-4">
                    <div class="package-card">
                        <h4 class="package-title"><?php echo $package['name']; ?></h4>
                        <h4 class="package-price pink-text"><?php echo $package['price']; ?></h4>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>

        <a href="<?php echo $packages_content['cta']['link']; ?>" class="btn-primary"><?php echo $packages_content['cta']['text']; ?></a>

    </div>
</section>
