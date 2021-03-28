<div id="top">
    <span>[ <span></span> <span></span> ]</span>
</div>

<footer>
<div class="footer-mobile">
    <a aria-label="link to about" href="/about">
          Privacy & Cookies<span class="icon-right">↗</span>
        </a>
        <a aria-label="link to about" href="/about">
           Imprint<span class="icon-right">↗</span>
        </a>
        <a aria-label="link to about" href="/about">
           Behance<span class="icon-right">↗</span>
        </a>
        <a aria-label="link to about" href="/about">
           Instagram<span class="icon-right">↗</span>
        </a>
    </div>
    <div class="footer-nav">
        <a aria-label="link to about" href="/about">
          Privacy & Cookies<span class="icon-right">↗</span>
        </a>
        <a href="#fffModal" category="header-navigation" action="home" label="consultation-modal" rel="modal:open">
           Hit me up<span class="icon-right">↗</span>
        </a>
    </div>
    <div class="legal">
        <strong class="margin-right-s">©2016-<?= date('Y') ?></strong>
        <a aria-label="link to about" href="/about">
           FFF-Corp™ Florian Nagel
        </a>
    </div>
    <div class="footer-social">
        <a aria-label="link to about" href="/about">
           Behance<span class="icon-right">↗</span>
        </a>
        <a aria-label="link to about" href="/about">
           Instagram<span class="icon-right">↗</span>
        </a>
    </div>
</footer>
<!-- <div id="consent-popup" class="hidden">
    <p class="small">We use cookies for analysis and marketing purposes. Please accept <a href="imprint">Terms and Conditions</a> these before using the site.</p>
    <a id="accept" href="#">Accept</a>
</div> -->
<?php snippet('popUp') ?>
<?= js('assets/js/libs.js') ?>
<?= js('assets/js/main.js', ['async' => false, 'defer' => true ]) ?>
</body>

</html>