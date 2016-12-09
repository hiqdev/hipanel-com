<?php

/* @var $this yii\web\View */

use hipanel\com\Asset;
use hiqdev\themes\agency\widgets\Screenshot;
use hiqdev\themes\agency\widgets\Team;
use yii\helpers\Html;

$this->title = Yii::$app->name;
Asset::register($this);
$imagePath = Yii::$app->assetManager->publish('@hipanel/com/assets/img')[1];
?>

<!-- Services Section -->
<section id="features">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('hipanel:com', 'Features') ?></h2>
                <h3 class="section-subheading text-muted"><?= Yii::t('hipanel:com', 'Open for integration and extension') ?></h3>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-cloud fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><?= Yii::t('hipanel:com', 'SaaS and Open Source') ?></h4>
                <p class="text-muted"><?= Yii::t('hipanel:com', 'Choose what you prefer. Nothing to install cloud based SaaS solution. Or open source solution installed at your side.') ?></p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-laptop fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><?= Yii::t('hipanel:com', 'Responsive Design and Friendly UX') ?></h4>
                <p class="text-muted"><?= Yii::t('hipanel:com', 'Modern and responsive design. Nice to look on every device. Easy to use for every task.') ?></p>
            </div>
            <div class="col-md-4">
                    <span class="fa-stack fa-4x">
                        <i class="fa fa-circle fa-stack-2x text-primary"></i>
                        <i class="fa fa-lock fa-stack-1x fa-inverse"></i>
                    </span>
                <h4 class="service-heading"><?= Yii::t('hipanel:com', 'Security and reliability') ?></h4>
                <p class="text-muted"><?= Yii::t('hipanel:com', 'OAuth2, ABAC, Backup and more ...') ?></p>
            </div>
        </div>
    </div>
</section>

<!-- Portfolio Grid Section -->
<section id="screenshots" class="bg-light-gray portfolio">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('hipanel:com', 'Screenshots') ?></h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Dashboard'),
                    'subHeader' => Yii::t('hipanel:com', 'All in one...'),
                    'description' => Yii::t('hipanel:com', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!'),
                    'previewImage' => $imagePath . '/portfolio/treehouse.png',
                    'fullImage' => $imagePath . '/portfolio/treehouse-preview.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Domain'),
                    'subHeader' => Yii::t('hipanel:com', 'Website Design'),
                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => $imagePath . '/portfolio/treehouse.png',
                    'fullImage' => $imagePath . '/portfolio/treehouse-preview.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Customer support'),
                    'subHeader' => Yii::t('hipanel:com', ''),
                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => $imagePath . '/portfolio/treehouse.png',
                    'fullImage' => $imagePath . '/portfolio/treehouse-preview.png',
                ]) ?>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Client profile'),
                    'subHeader' => Yii::t('hipanel:com', ''),
                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => $imagePath . '/portfolio/treehouse.png',
                    'fullImage' => $imagePath . '/portfolio/treehouse-preview.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Login'),
                    'subHeader' => Yii::t('hipanel:com', 'Social login'),
                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => $imagePath . '/portfolio/treehouse.png',
                    'fullImage' => $imagePath . '/portfolio/treehouse-preview.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Servers'),
                    'subHeader' => Yii::t('hipanel:com', ''),
                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => $imagePath . '/portfolio/treehouse.png',
                    'fullImage' => $imagePath . '/portfolio/treehouse-preview.png',
                ]) ?>
            </div>
        </div>
    </div>
</section>

<section id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Pricing</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <!-- Pricing -->
            <div class="col-md-4">
                <div class="pricing hover-effect">
                    <div class="pricing-head">
                        <h3>Start <span>for personal use</span></h3>
                        <h4><i>$</i>0<i>.00</i> <span> No monthly fee</span></h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <i class="fa fa-globe"></i> One Domain for free. Every next $0.50 per year
                        </li>
                        <li>
                            <i class="fa fa-cloud"></i> One VDS for free. Every next $2.99 per month
                        </li>
                        <li>
                            <i class="fa fa-server"></i> One server for free. Every next $5.99 per month
                        </li>
                        <li>
                            <i class="fa fa-user"></i> No subclients
                        </li>
                        <li>
                            <i class="fa fa-shopping-cart"></i> Slightly limited DNS and other additional services
                        </li>
                        <li>
                            <i class="fa fa-support"></i> 10 minutes for free. More $30.00 per hour.
                        </li>
                    </ul>
                    <div class="pricing-footer">
                        <p>
                            All the power of our panel for free. With reasonable limitations, sorry.
                            But you can try the panel - no need to pay.
                        </p>
                        <a href="#" class="btn btn-default">
                            Learn more <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            Sign Up <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <!--div class="pricing pricing-active hover-effect">
                    <div class="pricing-head pricing-head-active" -->
                <div class="pricing hover-effect">
                    <div class="pricing-head pricing-head-active">
                        <h3>Easy <span>for resellers</span></h3>
                        <h4><i>$</i>9<i>.99</i> <span>Per Month </span></h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <i class="fa fa-globe"></i> Domain $0.30 per year
                        </li>
                        <li>
                            <i class="fa fa-cloud"></i> VDS, CDN and other cloud services $1.99 per month
                        </li>
                        <li>
                            <i class="fa fa-server"></i> Dedicated Server $4.99
                        </li>
                        <li>
                            <i class="fa fa-user"></i> Up to 999 subclients
                        </li>
                        <li>
                            <i class="fa fa-shopping-cart"></i> Unlimited DNS, Mail and other services
                        </li>
                        <li>
                            <i class="fa fa-support"></i> 1 hour included. More $30.00 per hour.
                        </li>
                    </ul>
                    <div class="pricing-footer">
                        <p>
                            Includes personalized site and panel installed at our or your side.
                            Also we provide SSL certificate for your panel and site.
                        </p>
                        <a href="#" class="btn btn-default">
                            Learn more <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            Sign Up <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="pricing hover-effect">
                    <div class="pricing-head">
                        <h3>Pro <span>for service providers</span></h3>
                        <h4><i>$</i>99<i>.99</i><span> Per Month </span></h4>
                    </div>
                    <ul class="pricing-content list-unstyled">
                        <li>
                            <i class="fa fa-globe"></i> Domain $0.15 per year
                        </li>
                        <li>
                            <i class="fa fa-cloud"></i> VDS, CDN and other cloud services $0.99 per month
                        </li>
                        <li>
                            <i class="fa fa-server"></i> Dedicated Server $3.99 per month
                        </li>
                        <li>
                            <i class="fa fa-user"></i> Unlimited subclients
                        </li>
                        <li>
                            <i class="fa fa-shopping-cart"></i> Unlimited additional services
                        </li>
                        <li>
                            <i class="fa fa-support"></i> Unlimited support
                        </li>
                    </ul>
                    <div class="pricing-footer">
                        <p>
                            Includes personalized site and panel.
                            We'll do all the necessary integration of your infrastructure with our panel.
                        </p>
                        <a href="#" class="btn btn-default">
                            Learn more <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                        <a href="#" class="btn btn-default">
                            Sign Up <i class="m-icon-swapright m-icon-white"></i>
                        </a>
                    </div>
                </div>
            </div>
            <!--//End Pricing -->
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">About</h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?= $imagePath ?>/about/1.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>Long time ago...</h4>
                                <h4 class="subheading">Our Humble Beginnings</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit
                                    vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?= $imagePath ?>/about/2.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>NOVEMBER 2014</h4>
                                <h4 class="subheading">An Agency is Born</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit
                                    vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?= $imagePath ?>/about/3.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>DECEMBER 2014</h4>
                                <h4 class="subheading">Transition to Full Service</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit
                                    vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <img class="img-circle img-responsive" src="<?= $imagePath ?>/about/4.jpg" alt="">
                        </div>
                        <div class="timeline-panel">
                            <div class="timeline-heading">
                                <h4>MARCH 2015</h4>
                                <h4 class="subheading">Phase Two Expansion</h4>
                            </div>
                            <div class="timeline-body">
                                <p class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut
                                    voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit
                                    vero unde, sed, incidunt et ea quo dolore laudantium consectetur!</p>
                            </div>
                        </div>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <h4>Be Part
                                <br>Of Our
                                <br>Story!</h4>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</section>

<!-- Team Section -->
<section id="team">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('hipanel:com', 'Our Amazing Team') ?></h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <?= Team::widget([
                    'person' => Yii::t('hipanel:com', 'Andrii Vasyliev'),
                    'position' => 'Project Lead',
                    'gravatar' => $imagePath . '/team/sol.jpg',
                    'social' => [
                        'fa-twitter' => '#',
                        'fa-facebook' => '#',
                        'fa-linkedin' => '#',
                    ],
                ]) ?>
            </div>
            <div class="col-sm-3">
                <?= Team::widget([
                    'person' => Yii::t('hipanel:com', 'Dmitry Naumenko'),
                    'position' => 'Lead Backend Developer',
                    'gravatar' => $imagePath . '/team/silver.jpg',
                    'social' => [
                        'fa-twitter' => '#',
                        'fa-facebook' => '#',
                        'fa-linkedin' => '#',
                    ],
                ]) ?>
            </div>
            <div class="col-sm-3">
                <?= Team::widget([
                    'person' => Yii::t('hipanel:com', 'Andrey Klochok'),
                    'position' => 'Web Developer',
                    'gravatar' => $imagePath . '/team/tofid.jpg',
                    'social' => [
                        'fa-twitter' => '#',
                        'fa-facebook' => '#',
                        'fa-linkedin' => '#',
                    ],
                ]) ?>
            </div>
            <div class="col-sm-3">
                <?= Team::widget([
                    'person' => Yii::t('hipanel:com', 'Yuriy Myronchuk'),
                    'position' => 'QA Lead',
                    'gravatar' => $imagePath . '/team/bladeroot.jpg',
                    'social' => [
                        'fa-twitter' => '#',
                        'fa-facebook' => '#',
                        'fa-linkedin' => '#',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut eaque,
                    laboriosam veritatis, quos non quis ad perspiciatis, totam corporis ea, alias ut unde.</p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?= $imagePath ?>/logos/envato.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?= $imagePath ?>/logos/designmodo.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?= $imagePath ?>/logos/themeforest.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
            <div class="col-md-3 col-sm-6">
                <a href="#">
                    <img src="<?= $imagePath ?>/logos/creative-market.jpg" class="img-responsive img-centered" alt="">
                </a>
            </div>
        </div>
    </div>
</aside>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('hipanel:com', 'Contact Us') ?></h2>
                <h3 class="section-subheading text-muted">Lorem ipsum dolor sit amet consectetur.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6 contact-grid">
                        <p><?= Yii::t('hipanel:com', 'Don\'t be shy, drop us an email and say hello! We are a really nice bunch of people :)') ?></p>
                        <div class="row">
                            <div class="col-md-12">
                                <div class="contact-right-grid">
                                    <p>
                                        <i class="fa fa-envelope fa-lg"></i>
                                        <?= Html::mailto(Yii::$app->params['supportEmail'], Yii::$app->params['supportEmail']) ?>
                                    </p>
                                    <p>
                                        <i class="fa fa-twitter fa-lg"></i>
                                        <?= Html::a('@hipanel', Yii::$app->params['socialLinks']['twitter']) ?>
                                    </p>
                                    <p>
                                        <i class="fa fa-facebook fa-lg"></i>
                                        <?= Html::a('facebook.com/hipanel', Yii::$app->params['socialLinks']['facebook']) ?>
                                    </p>
                                </div>
                            </div>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <form name="sentMessage" id="contactForm" novalidate>
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Your Name *" id="name" required
                                       data-validation-required-message="Please enter your name.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Your Email *" id="email" required
                                       data-validation-required-message="Please enter your email address.">
                                <p class="help-block text-danger"></p>
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Your Message *" id="message" required
                                          data-validation-required-message="Please enter a message."></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                            <button type="submit" class="btn btn-xl">Send Message</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
