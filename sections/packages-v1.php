<!-- ================= Packages Section START ================= -->
<section class="laser-section section v1">
    <div class="laser-container container">
        <h2 class="laser-title pink-text"><?php echo htmlspecialchars($packages_content['title']); ?></h2>
        <p class="laser-subtitle subt"><?php echo htmlspecialchars($packages_content['subtitle']); ?></p>
        <div class="row g-3 justify-content-center">
            <?php foreach ($packages_content['packages'] as $package): ?>
            <div class="col-md-4">
                <div class="package-card">
                    <div class="package-title">
                        <img src="<?php echo home_url(); ?>/<?php echo htmlspecialchars($package['icon']); ?>" class="icon" alt="" loading="lazy">
                        <?php echo htmlspecialchars($package['name']); ?>
                    </div>
                    <div class="package-comb">
                        <div class="package-session">
                            <img src="<?php echo home_url(); ?>/assets/images/pages/laser-hair-reduction/package-check-box.svg" class="icon-2" alt="" loading="lazy">
                            <?php echo htmlspecialchars($package['sessions']); ?>
                        </div>
                        <div class="package-price pink-text"><?php echo htmlspecialchars($package['price']); ?></div>
                    </div>
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        <a href="<?php echo htmlspecialchars($packages_content['cta']['link']); ?>" class="btn-primary"><?php echo htmlspecialchars($packages_content['cta']['text']); ?></a>
    </div>
</section>
<!-- ================= Packages Section END ================= -->
