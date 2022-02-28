    <div class="float-sm side-social">
            <div class="fl-fl float-contact" style=" background: red;">
                <i class="fa fa-phone"></i>
                <a href="tel:<?php echo e(SM::get_setting_value('mobile')); ?>" target=""> <?php echo e(SM::get_setting_value('mobile')); ?> </a>
            </div>

        <?php if(empty(!SM::smGetThemeOption("social_facebook"))): ?>
            <div class="fl-fl float-fb" style=" background: #3B5998;">
                <i class="fa fa-facebook"></i>
                <a href="<?php echo e(SM::smGetThemeOption("social_facebook")); ?>" target="_blank"> Like us!</a>
            </div>
        <?php endif; ?>
        <?php if(empty(!SM::smGetThemeOption("social_twitter"))): ?>
            <div class="fl-fl float-tw" style=" background: #55ACEE;">
                <i class="fa fa-twitter"></i>
                <a href="<?php echo e(SM::smGetThemeOption("social_twitter")); ?>" target="_blank">Follow us!</a>
            </div>
        <?php endif; ?>
        <?php if(empty(!SM::smGetThemeOption("social_google_plus"))): ?>
        <div class="fl-fl float-gp" style=" background: #dd4b39;">
            <i class="fa fa-google-plus"></i>
            <a href="<?php echo e(SM::smGetThemeOption("social_google_plus")); ?>" target="_blank">Recommend!</a>
        </div>
        <?php endif; ?>

        <?php if(empty(!SM::smGetThemeOption("social_linkedin"))): ?>
            <div class="fl-fl float-rs" style=" background: #007bb5;">
                <i class="fa fa-linkedin"></i>
                <a href="<?php echo e(SM::smGetThemeOption("social_linkedin")); ?>" target="_blank">Follow </a>
            </div>
        <?php endif; ?>
        <?php if(empty(!SM::smGetThemeOption("social_github"))): ?>
            <div class="fl-fl float-rs" style=" background: #000;">
                <i class="fa fa-github"></i>
                <a href="<?php echo e(SM::smGetThemeOption("social_github")); ?>" target="_blank">Follow </a>
            </div>
        <?php endif; ?>
        <?php if(empty(!SM::smGetThemeOption("social_instagram"))): ?>
            <div class="fl-fl float-rs" style=" background: blue;">
                <i class="fa fa-instagram"></i>
                <a href="<?php echo e(SM::smGetThemeOption("social_instagram")); ?>" target="_blank">Follow </a>
            </div>
        <?php endif; ?>

        <?php if(empty(!SM::smGetThemeOption("social_youtube"))): ?>
            <div class="fl-fl float-ig" style=" background: #bb0000;">
                <i class="fa fa-youtube"></i>
                <a href="<?php echo e(SM::smGetThemeOption("social_youtube")); ?>" target="_blank">Follow us!</a>
            </div>
        <?php endif; ?>
    </div>