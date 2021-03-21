<?= css(['assets/css/index.css']) ?>
<div style="font-family:'neue-haas-unica', sans-serif; font-size:19px" class="mail">
<p><?= $interests ?></p>
<p>Hello FFF-Corp,</p>
<p><?= $text ?></p>
<p>Best,
    <br>
    <?= $sender ?>, <?= $lastName  ?>
</p>
<p>
    Tel:.<?= $phoneNumber ?>
    <br>
    Email:.<?= $email ?>
</p>
</div>

