<?php

/* @var $this yii\web\View */
/* @var $contactForm \hisite\models\ContactForm */

use hipanel\com\Asset;
use hiqdev\thememanager\widgets\TextPage;
use hiqdev\themes\agency\widgets\LogoList;
use hiqdev\themes\agency\widgets\Price;
use hiqdev\themes\agency\widgets\Screenshot;
use hiqdev\themes\agency\widgets\Team;
use hiqdev\themes\agency\widgets\Timeline;
use yii\bootstrap\ActiveForm;
use yii\captcha\Captcha;
use yii\helpers\Html;

$this->title = Yii::$app->name;
Asset::register($this);
$imagePath = Yii::$app->assetManager->publish('@hipanel/com/assets/img')[1];
?>

<?php $page = TextPage::begin() ?>
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
                <h3 class="section-subheading text-muted">
                    <?= Yii::t('hipanel:com', 'Also demo site is available at {link}', [
                        'link' => Html::a('demo.hipanel.com', 'https://demo.hipanel.com'),
                    ]) ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Dashboard'),
                    'subHeader' => Yii::t('hipanel:com', 'All in one...'),
                    'description' => Yii::t('hipanel:com', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!'),
                    'previewImage' => Yii::$app->thumbnail->url('/portfolio/dashboard.png', Yii::$app->params['thumb']),
                    'fullImage' => $imagePath . '/portfolio/dashboard.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Domains'),
                    'subHeader' => Yii::t('hipanel:com', 'Website Design'),
//                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => Yii::$app->thumbnail->url('/portfolio/domain.png', Yii::$app->params['thumb']),
                    'fullImage' => $imagePath . '/portfolio/domain.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Customer support'),
//                    'subHeader' => Yii::t('hipanel:com', ''),
//                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => Yii::$app->thumbnail->url('/portfolio/tickets.png', Yii::$app->params['thumb']),
                    'fullImage' => $imagePath . '/portfolio/tickets.png',
                ]) ?>
            </div>
            <div class="clearfix"></div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Client profile'),
//                    'subHeader' => Yii::t('hipanel:com', ''),
//                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => Yii::$app->thumbnail->url('/portfolio/client.png', Yii::$app->params['thumb']),
                    'fullImage' => $imagePath . '/portfolio/client.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Login'),
                    'subHeader' => Yii::t('hipanel:com', 'Social login'),
//                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => Yii::$app->thumbnail->url('/portfolio/login.png', Yii::$app->params['thumb']),
                    'fullImage' => $imagePath . '/portfolio/login.png',
                ]) ?>
            </div>
            <div class="col-md-4 col-sm-6 portfolio-item">
                <?= Screenshot::widget([
                    'header' => Yii::t('hipanel:com', 'Servers'),
                    'subHeader' => Yii::t('hipanel:com', ''),
                    'description' => Yii::t('hipanel:com', ''),
                    'previewImage' => Yii::$app->thumbnail->url('/portfolio/server.png', Yii::$app->params['thumb']),
                    'fullImage' => $imagePath . '/portfolio/server.png',
                ]) ?>
            </div>
        </div>
    </div>
</section>

<section id="pricing">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('hipanel:com', 'Pricing') ?></h2>
                <h3 class="section-subheading text-muted">
                    <?= Yii::t('hipanel:com', "Questions? Don't hesitate to contact us at {email}", [
                        'email' => Html::a(Yii::$app->params['contactEmail'], 'mailto:' . Yii::$app->params['contactEmail']),
                    ]) ?>
                </h3>
            </div>
        </div>
        <div class="row">
            <!-- Pricing -->
            <div class="col-md-4">
                <?= Price::widget([
                    'title' => Yii::t('hipanel:com', 'Start'),
                    'subTitle' => Yii::t('hipanel:com', 'for personal use'),
                    'price' => Yii::$app->formatter->asCurrency(0, 'USD'),
                    'subPrice' => Yii::t('hipanel:com', 'No monthly fee'),
                    'options' => [
                        ['icon' => 'fa-globe', 'label' => Yii::t('hipanel:com', 'One Domain for free. Every next {0} per year', [Yii::$app->formatter->asCurrency('0.50', 'usd')])],
                        ['icon' => 'fa-cloud', 'label' => Yii::t('hipanel:com', 'One VDS for free. Every next {0} per month', [Yii::$app->formatter->asCurrency('2.99', 'usd')])],
                        ['icon' => 'fa-server', 'label' => Yii::t('hipanel:com', 'One server for free. Every next {0} per month', [Yii::$app->formatter->asCurrency('5.99', 'usd')])],
                        ['icon' => 'fa-user', 'label' => Yii::t('hipanel:com', 'No subclients')],
                        ['icon' => 'fa-shoping-cart', 'label' => Yii::t('hipanel:com', 'Slightly limited DNS and other additional services')],
                        ['icon' => 'fa-support', 'label' => Yii::t('hipanel:com', '10 minutes for free. More {0} per hour.', [Yii::$app->formatter->asCurrency('30.00', 'usd')])],
                    ],
                    'footer' => Yii::t('hipanel:com', 'All the power of our panel for free. With reasonable limitations, sorry. But you can try the panel - no need to pay.')
                ]) ?>
            </div>
            <div class="col-md-4">
                <?= Price::widget([
                    'activeClass' => 'pricing-head-active',
                    'title' => Yii::t('hipanel:com', 'Easy'),
                    'subTitle' => Yii::t('hipanel:com', 'for resellers'),
                    'price' => Yii::$app->formatter->asCurrency(9.99, 'usd'),
                    'subPrice' => Yii::t('hipanel:com', 'Per Month'),
                    'options' => [
                        ['icon' => 'fa-globe', 'label' => Yii::t('hipanel:com', 'Domain {0} per year', [Yii::$app->formatter->asCurrency('0.30', 'usd')])],
                        ['icon' => 'fa-cloud', 'label' => Yii::t('hipanel:com', 'VDS, CDN and other cloud services {0} per month', [Yii::$app->formatter->asCurrency('1.99', 'usd')])],
                        ['icon' => 'fa-server', 'label' => Yii::t('hipanel:com', 'Dedicated Server {0}', [Yii::$app->formatter->asCurrency('4.99', 'usd')])],
                        ['icon' => 'fa-user', 'label' => Yii::t('hipanel:com', 'Up to 999 subclients')],
                        ['icon' => 'fa-shoping-cart', 'label' => Yii::t('hipanel:com', 'Unlimited DNS, Mail and other services')],
                        ['icon' => 'fa-support', 'label' => Yii::t('hipanel:com', '1 hour included. More {0} per hour', [Yii::$app->formatter->asCurrency('30.00', 'usd')])],
                    ],
                    'footer' => Yii::t('hipanel:com', 'Includes personalized site and panel installed at our or your side. Also we provide SSL certificate for your panel and site.'),
                ]) ?>
            </div>
            <div class="col-md-4">
                <?= Price::widget([
                    'title' => Yii::t('hipanel:com', 'Pro'),
                    'subTitle' => Yii::t('hipanel:com', 'for service providers'),
                    'price' => Yii::$app->formatter->asCurrency(99.99, 'usd'),
                    'subPrice' => Yii::t('hipanel:com', 'Per Month'),
                    'options' => [
                        ['icon' => 'fa-globe', 'label' => Yii::t('hipanel:com', 'Domain {0} per year', [Yii::$app->formatter->asCurrency('0.15', 'usd')])],
                        ['icon' => 'fa-cloud', 'label' => Yii::t('hipanel:com', 'VDS, CDN and other cloud services {0} per month', [Yii::$app->formatter->asCurrency('0.99', 'usd')])],
                        ['icon' => 'fa-server', 'label' => Yii::t('hipanel:com', 'Dedicated Server {0}', [Yii::$app->formatter->asCurrency('3.99', 'usd')])],
                        ['icon' => 'fa-user', 'label' => Yii::t('hipanel:com', 'Unlimited subclients')],
                        ['icon' => 'fa-shoping-cart', 'label' => Yii::t('hipanel:com', 'Unlimited additional services')],
                        ['icon' => 'fa-support', 'label' => Yii::t('hipanel:com', 'Unlimited support')],
                    ],
                    'footer' => Yii::t('hipanel:com', 'Includes personalized site and panel. We\'ll do all the necessary integration of your infrastructure with our panel.'),
                ]) ?>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="bg-light-gray">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('hipanel:com', 'About') ?></h2>
                <h3 class="section-subheading text-muted">Here is our little story.</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="timeline">
                    <li>
                        <?= Timeline::widget([
                            'title' => Yii::t('hipanel:com', 'A long time ago'),
                            'subTitle' => Yii::t('hipanel:com', 'in a galaxy far far away ...'),
                            'description' => Yii::t('hipanel:com', 'We have been creating different control panels for really long time and got serious expertise in it. '),
                            'image' => $imagePath . '/about/1.jpg',
                        ]) ?>
                    </li>
                    <li class="timeline-inverted">
                        <?= Timeline::widget([
                            'title' => Yii::t('hipanel:com', 'NOVEMBER 2014'),
                            'subTitle' => Yii::t('hipanel:com', 'A HiPanel was Born'),
                            'description' => Yii::t('hipanel:com', 'We have begun to create what later got name HiPanel. Domain name was bought. First repos were created on {link}', ['link' => Html::a('GitHub', 'https://github.com/hiqdev')]),
                            'image' => $imagePath . '/about/2.jpg',
                        ]) ?>
                    </li>
                    <li>
                        <?= Timeline::widget([
                            'title' => Yii::t('hipanel:com', 'APRIL 2015'),
                            'subTitle' => Yii::t('hipanel:com', '0.0.1 version was released'),
                            'description' => Yii::t('hipanel:com', 'Architecture of the whole system was planned. The work started.'),
                            'image' => $imagePath . '/about/3.jpg',
                        ]) ?>
                    </li>
                    <li class="timeline-inverted">
                        <?= Timeline::widget([
                            'title' => Yii::t('hipanel:com', 'MARCH 2017'),
                            'subTitle' => Yii::t('hipanel:com', '0.1.0 version was released'),
                            'description' => Yii::t('hipanel:com', 'Wide beta testing begun. 160+ packages on GitHub'),
                            'image' => $imagePath . '/about/4.jpg',
                        ]) ?>
                    </li>
                    <li class="timeline-inverted">
                        <div class="timeline-image">
                            <?= Html::tag('h4', Yii::t('hipanel:com', 'Be Part {br}Of Our{br}Story!', ['br' => '<br>'])) ?>
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
                <h3 class="section-subheading text-muted">We are few but roses</h3>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3">
                <?= Team::widget([
                    'person' => Yii::t('hipanel:com', 'Andrii Vasyliev'),
                    'position' => 'Project Lead',
                    'gravatar' => $imagePath . '/team/sol.jpg',
                    'social' => [
                        'fa-github' => 'https://github.com/hiqsol',
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
                        'fa-github' => 'https://github.com/SilverFire',
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
                        'fa-github' => 'https://github.com/tafid',
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
                        'fa-github' => 'https://github.com/bladeroot',
                        'fa-linkedin' => '#',
                    ],
                ]) ?>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <p class="large text-muted">
                    Besides creating HiPanel we contribute to open source a lot.<br>
                    And we create our open source <a href="https://hiqdev.com/projects">tools</a> too.
                </p>
            </div>
        </div>
    </div>
</section>

<!-- Clients Aside -->
<aside class="clients">
    <div class="container">
        <div class="row">
            <?= LogoList::widget(['imagePath' => $imagePath]) ?>
        </div>
    </div>
</aside>

<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading"><?= Yii::t('hipanel:com', 'Contact Us') ?></h2>
                <h3 class="section-subheading text-muted"></h3>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-md-6 contact-grid">
                        <p>
                            <?= Yii::t('hipanel:com', 'Don\'t be shy, drop us an email and say hello!') ?><br>
                            <?= Yii::t('hipanel:com', 'We are a really nice bunch of people :)') ?>
                        </p>
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
                        <?php if (Yii::$app->session->getFlash('contactFormSubmitted')) : ?>
                            <div class="alert alert-success" role="alert">
                                <h4><?= Yii::t('hipanel:com', 'Thank you!') ?></h4>
                                <?= Html::tag('p', Yii::t('hipanel:com', 'Your message was successfully sent. Our managers will contact you as soon as possible for further details.')) ?>
                            </div>
                        <?php else : ?>
                            <?php $form = ActiveForm::begin([
                                'id' => 'contact-form',
                                'action' => ['/site/contact'],
                            ]); ?>
                            <?= $form->field($contactForm, 'name')->textInput(['placeholder' => $contactForm->getAttributeLabel('name')])->label(false) ?>

                            <?= $form->field($contactForm, 'email')->textInput(['placeholder' => $contactForm->getAttributeLabel('email')])->label(false) ?>

                            <?= $form->field($contactForm, 'subject')->textInput(['placeholder' => $contactForm->getAttributeLabel('subject')])->label(false) ?>

                            <?= $form->field($contactForm, 'body')->textarea(['rows' => 6, 'placeholder' => $contactForm->getAttributeLabel('body')])->label(false) ?>

                            <?= $form->field($contactForm, 'verifyCode')->widget(Captcha::className(), [
                                'template' => '<div class="row"><div class="col-lg-3">{image}</div><div class="col-lg-6">{input}</div></div>',
                                'options' => [
                                    'placeholder' => $contactForm->getAttributeLabel('verifyCode'),
                                ]
                            ])->label(false) ?>
                            <?= Html::submitButton(Yii::t('hipanel:com', 'Send Message'), ['class' => 'btn btn-xl']) ?>
                            <?php ActiveForm::end(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php TextPage::end() ?>
