<!-- ================= Contact Section START ================= -->
<?php $contact_content = jsonDecode($page_Data['contact']);?>
<section class="contact-section section" id="contact">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <h2 class="h2-title text-center">
                    <?php echo isset($contact_content['title']) ? $contact_content['title'] : 'Get Your <span>Personalized Laser Plan</span>'; ?>
                </h2>
            </div>
        </div>
        <div class="row justify-content-center form-row">
            <div class="col-lg-6">
                <div class="contact-image">
                    <img src="<?php echo home_url(); ?>/assets/images/global/contact-side-img.webp" alt="Contact Image"  loading="lazy">
                </div>
            </div>
            <div class="col-lg-6">
                <div class="contact-card">
                    <form class="contact-form" id="contactForm">

                        <div class="row">
                            <!-- Name -->
                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label for="name">Your Name*</label> -->
                                    <input 
                                        type="text" 
                                        id="name" 
                                        name="name" 
                                        placeholder="Full Name*" 
                                        required
                                    >
                                </div>
                            </div>
                            <!-- Email -->
                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label for="email">Email*</label> -->
                                    <input 
                                        type="email" 
                                        id="email" 
                                        name="email" 
                                        placeholder="Email*"
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Phone -->
                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label for="phone">Phone No.*</label> -->
                                    <input 
                                        type="tel" 
                                        id="phone" 
                                        name="phone" 
                                        placeholder="Phone No.*" 
                                        required
                                    >
                                </div>
                            </div>

                            <!-- Location -->
                            <div class="col-12">
                                <div class="form-group">
                                    <!-- <label>Select Location*</label> -->
                                    <select
                                        id="location" 
                                        name="location" 
                                        required
                                        >
                                        <option>Select Location*</option>
                                        <option value="Mulund">Mulund</option>
                                        <option value="Powai">Powai</option>
                                        <option value="Ghatkopar">Ghatkopar</option>
                                        <option value="Bandra">Bandra</option>
                                        <option value="Andheri">Andheri</option>
                                        <option value="Vashi">Vashi</option>
                                        <option value="Charni Road">Charni Road</option>
                                        <option value="Greater Kailash">Greater Kailash</option>
                                        <option value="Green Park">Green Park</option>
                                    </select>
                                    <img src="https://wjf.fva.mybluehostin.me/metamorphosisclinic-landing-pages-dev/assets/images/global/faq-arrow-icon.svg" alt="Down Arrow" class="select-arrow"  loading="lazy">
                                </div>
                            </div>
                            <!-- Button -->
                            <div class="col-12 text-center">
                                <input type="hidden" name="treatment" value="<?php echo isset($page_Data['title']) ? $page_Data['title'] : 'Metamorphosis'; ?>" id="treatment"  loading="lazy">
                                <button type="submit" class="btn-primary">
                                    BOOK CONSULTATION
                                </button>
                                <div id="formMessage" class="form-message"></div>
                            </div>
                        </div>
                    </form>
                    <div id="formLoader" class="form-loader">
                        <div class="spinner"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- ================= Contact Section END ================= -->
