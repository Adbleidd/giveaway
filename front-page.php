<?php get_header(); ?>

<main class="main front">
    <div class="container">

        <div class="front__hero">
            <h1 class="front__headline"><?= __('Enter to get free SentiOne premium account', 'giveaway'); ?></h1>
            <p class="front__description"><?= __('This contest is open worldwide, please be sure to read the terms and conditions before entering.', 'giveaway'); ?></p>
        </div>

        <div class="front__content">
            <a href="#" class="front__button"><?= __('Sign up to enter', 'giveaway'); ?></a>
            <div class="front__tile">
                <p class="front__subtitle"><?= __('Follow', 'giveaway'); ?></p>
                <p class="front__title">@sentione</p>
            </div>
            <div class="front__tile">
                <p class="front__subtitle"><?= __('Giveaway Ends In', 'giveaway'); ?></p>
                <div id="countdown" class="front__counter">
                    <div>
                        <p class="front__title" id="countdownDays">00</p>
                        <span class="front__counter--unit"><?= __('days', 'Yerbador'); ?></span>
                    </div>
                    <div>
                        <p class="front__title" id="countdownDays">:</p>
                        &nbsp;
                    </div>
                    <div>
                        <p class="front__title" id="countdownHours">00</p>
                        <span class="front__counter--unit"><?= __('hours', 'Yerbador'); ?></span>
                    </div>
                    <div>
                        <p class="front__title" id="countdownDays">:</p>
                        <span class="front__counter--unit">&nbsp;
                    </div>
                    <div>
                        <p class="front__title" id="countdownMinutes">00</p>
                        <span class="front__counter--unit"><?= __('mins', 'Yerbador'); ?></span>
                    </div>
                    <div>
                        <p class="front__title" id="countdownDays">:</p>
                        &nbsp;
                    </div>
                    <div>
                        <p class="front__title" id="countdownSeconds">00</p>
                        <span class="front__counter--unit"><?= __('secs', 'Yerbador'); ?></span>
                    </div>
                </div>
            </div>
            <div class="front__tile">
                <p class="front__subtitle"><?= __('ENDS', 'giveaway'); ?></p>
                <p class="front__title">Oct 18, 2023</p>
            </div>
        </div>

    </div>
</main>

<img src="<?= CDK_THEME_URL . 'assets/img/laptop.png'; ?>" alt="" class="site__decor">
</div>

<?php get_footer(); ?>