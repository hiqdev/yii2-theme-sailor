<?php

use hiqdev\thememanager\menus\AbstractFooterMenu;
use hiqdev\thememanager\menus\AbstractMainMenu;
use hiqdev\thememanager\widgets\CopyrightYears;
use hiqdev\thememanager\widgets\OrganizationLink;
use hiqdev\thememanager\widgets\SocialLinks;
use hiqdev\themes\flat\widgets\Menu;

?>
<footer>
    <div class="container">
        <div class="row">
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4><?= Yii::t('hiqdev:themes:sailor', 'Get in touch with us') ?></h4>
                    <address>
                        <strong>Sailor company Inc</strong><br>
                        Sailor suite room V124, DB 91<br>
                        Someplace 71745 Earth
                    </address>
                    <p>
                        <i class="icon-phone"></i> (123) 456-7890 - (123) 555-7891 <br>
                        <i class="icon-envelope-alt"></i> email@domainname.com
                    </p>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4><?= Yii::t('hiqdev:themes:sailor', 'Information') ?></h4>
                    <?= AbstractFooterMenu::widget([], ['options' => ['class' => 'link-list']]) ?>
                </div>

            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4><?= Yii::t('hiqdev:themes:sailor', 'Pages') ?></h4>
                    <?= AbstractMainMenu::widget([], ['options' => ['class' => 'link-list']]) ?>
                </div>
            </div>
            <div class="col-sm-3 col-lg-3">
                <div class="widget">
                    <h4>Newsletter</h4>
                    <p>Fill your email and sign up for monthly newsletter to keep updated</p>
                    <div class="form-group multiple-form-group input-group">
                        <input type="email" name="email" class="form-control">
                        <span class="input-group-btn">
                            <button type="button" class="btn btn-theme btn-add">Subscribe</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="sub-footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="copyright">
                        <p>
                            &copy; <?= CopyrightYears::widget() ?>. <?= OrganizationLink::widget() ?>
                            <?= Yii::t('hiqdev:themes:flat', 'All rights reserved.') ?>
                        </p>
                        <div class="credits">
                            <!--
                                All the links in the footer should remain intact.
                                You can delete the links only if you purchased the pro version.
                                Licensing information: https://bootstrapmade.com/license/
                                Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/buy/?theme=Sailor
                            -->
                            <a href="https://bootstrapmade.com/free-business-bootstrap-themes-website-templates/">Business
                                Bootstrap Themes</a> by <a href="https://bootstrapmade.com/">BootstrapMade</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <ul class="social-network">
                        <?= SocialLinks::widget() ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</footer>
