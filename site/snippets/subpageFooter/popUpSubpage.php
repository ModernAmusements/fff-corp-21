<!-- POP-UP MODAL -->
<?php if($success): ?>
<div class="overlay">
<div id="confirmModal" class="modal show">
    <?php if ($succesImage = $site->succesImage()->toFile()->resize(600)): ?>
    <img class="lazy" data-src="<?= $succesImage->url() ?>" alt="<?= $site->altSuccess() ?>" />
    <?php endif ?>
    <h2 class="single-line">Thank You!</h2>
    <p><?= $success ?></p>
    <a class="left" href="<?= $page->url() ?>" aria-label="read more about seminole tax hike" rel="modal:close">Close</a>
  </div>
</div>
<?php else: ?>
<?php if (isset($alert['error'])): ?>
<div><?= $alert['error'] ?></div>
<?php endif ?>
<div class="modal-wrapper">
  <div id="fffModal" class="modal">
    <a href="modal:close" class="close" rel="modal:close"></a>
    <div class="list">
      <h3><?= $site->popUpHeadline() ?></h3>
      <ul class="checklist">
        <li>
          <svg>
          <use xlink:href="../images/icons/icons.svg#iconCheckmark"></use>
          </svg>
          <?= $site->popUpSubHeadline01() ?>
        </li>
        <li>
          <svg>
          <use xlink:href="../images/icons/icons.svg#iconCheckmark"></use>
          </svg>
          <?= $site->popUpSubHeadline02() ?>
        </li>
        <li>
          <svg>
          <use xlink:href="../images/icons/icons.svg#iconCheckmark"></use>
          </svg>
          <?= $site->popUpSubHeadline03() ?>
        </li>
      </ul>
    </div>
    <div class="form-img">
      <?php if ($popUpImage = $site->popUpImage()->toFile()->resize(600)): ?>
      <img class="lazy" data-src="<?= $popUpImage->url() ?>" alt="<?= $site->altPopUp() ?>" />
      <?php endif ?>
    </div>
    <div class="form">
      <form action="<?= $page->url() ?>" method="post" data-consultation="sales" data-parsley-validate>
        <div class="honeypot">
          <label for="website">Website<abbr title="required">*</abbr></label>
          <input type="website" id="website" name="website" />
        </div>
        <div class="form-parsley firstname">
          <label for="firstName">First name*</label>
          <input <?= $data['firstName'] ?? '' ?> name="firstName" type="text" class="form-field"
            data-parsley-trigger="change" autocomplete="off" data-parsley-pattern="^[a-zA-z\s\-\.\üÜäÄöÖß]*$"
            data-parsley-pattern-message="Ungültig (0-9,+,-,() nicht erlaubt)." value="<?= $data['firstName'] ?? '' ?>"
            required="">
        </div>
        <div class="form-parsley lastname">
          <label for="lastName">Last name*</label>
          <input name="lastName" type="text" class="form-field" data-parsley-trigger="change" autocomplete="off"
            data-parsley-pattern="^[a-zA-z\s\-\.\üÜäÄöÖß]*$"
            data-parsley-pattern-message="Ungültig (0-9,+,-,() nicht erlaubt)." value="<?= $data['lastName'] ?? '' ?>"
            required="" />
        </div>
        <div class="form-parsley email">
          <label for="email">E-mail address*</label>
          <input name="email" type="email" class="form-field" data-parsley-trigger="change" required=""
            value="<?= $data['email'] ?? '' ?>" />
        </div>
        <div class="form-parsley phone">
          <label for="phoneNumber">Phone number*</label>
          <input name="phoneNumber" type="tel" class="form-field" data-parsley-trigger="change"
            data-parsley-pattern="^[\d\+\-\.\(\)\/\s]*$"
            data-parsley-pattern-message="Ungültig (0-9,+,-,() sind erlaubt)." required=""
            value="<?= $data['phoneNumber'] ?? '' ?>" />
        </div>
        <div class="form-parsley birthday">
          <label for="birthday">Date of birth*</label>
          <input name="birthday" type="text" class="form-field birthdayMask" placeholder="TT.MM.JJJJ"
            data-parsley-valid-date ="" value="<?= $data['birthday'] ?? '' ?>" />
        </div>
        <div class="form-parsley reason">
          <label for="interests">Reason*</label>
          <div class="form-select">
            <select name="interests" value="<?= $data['interests'] ?? '' ?>">
              <option value="">Please select...</option>
              <option value="Auftrag: Film">Web Presence</option>
              <option value="Auftrag: Typografie">Consulting</option>
              <option value="Auftrag: Motion">Online store</option>
              <option value="Auftrag: Animation">Various</option>
            </select>
          </div>
        </div>
        <div class="form-parsley interest">
          <label for="text">I am interested in*</label>
          <div class="form-parsley">
            <p><textarea cols="25" wrap="physical" id="msg" name="text"><?= $data['text']?? '' ?></textarea></p>
          </div>
        </div>
        <small>By submitting my data I declare my
          <a class="accept" href="#disclaimerModal" rel="modal:open">Consent</a> to be contacted by Shady Tawfik.
          The data will be deleted immediately and automatically after contacting us.
        </small>
        <button class="btn-large consultation-modal" name="submit" value="validate" type="submit">
          HIT ME UP
        </button>
      </form>
    </div>
  </div>
  <div id="disclaimerModal" class="modal">
    <a href="modal:close" class="close" rel="modal:close"></a>
    <h2><?= $site->consent() ?></h2>
    <ul class="checklist">
      <li>
        <svg>
        <use xlink:href="../images/icons/icons.svg#iconCheckmark"></use>
        </svg>
        <?= $site->consentDeclaration01()->kt() ?>
      </li>
      <li>
        <svg>
        <use xlink:href="../images/icons/icons.svg#iconCheckmark"></use>
        </svg>
        <?= $site->consentDeclaration02()->kt() ?>
      </li>
      <li>
        <svg>
        <use xlink:href="../images/icons/icons.svg#iconCheckmark"></use>
        </svg>
        <?= $site->consentDeclaration03()->kt() ?>
      </li>
      <li>
        <svg>
        <use xlink:href="../images/icons/icons.svg#iconCheckmark"></use>
        </svg>
        <?= $site->consentDeclaration04()->kt() ?>
      </li>
    </ul>
    <a href="modal:close" rel="modal:close" class="btn-normal">Ok</a>
  </div>
</div>
<?php endif ?>
<script>
  	$('#disclaimerModal').find('p').children('a').addClass('accept');
</script>
<!-- POP-UP SCRIPT -->
<script>
  $(document).ready(function () {
    console.log('Validate Ready');
    $('form').each(function () {
      const e = $(this);
      let a = e.parsley();
      e.find('input, select').on('change keyup', () => {
        e.toggleClass('valid', a.isValid());
      });
    }),
      $(':input').inputmask();
    var e = new Date();
    var a =
      ('0' + e.getDate()).slice(-2) +
      '.' +
      ('0' + (e.getMonth() + 1)).slice(-2) +
      '.' +
      e.getFullYear();
    e.setFullYear(e.getFullYear() - 16);
    var i =
      ('0' + e.getDate()).slice(-2) +
      '.' +
      ('0' + (e.getMonth() + 1)).slice(-2) +
      '.' +
      e.getFullYear();
    e.setFullYear(e.getFullYear() - 84);
    var n =
      ('0' + e.getDate()).slice(-2) +
      '.' +
      ('0' + (e.getMonth() + 1)).slice(-2) +
      '.' +
      e.getFullYear();
    window.Parsley.addValidator('validDate', {
      validateString: t => !t.match(/[a-z]/i),
      messages: { de: 'Kein gültiges Datum', en: 'Invalid date' },
    }),
      window.Parsley.addValidator('fullAge', {
        validateString: t => parseInt(t) >= 18,
        messages: {
          de: 'Du musst mindestens 18 Jahre alt sein.',
          en: 'You have to be at least 18 years old.',
        },
      }),
      window.Parsley.addValidator('curDe', {
        validateString: function (t) {
          return (function validateCurDE(t) {
            return parseFloat(t.replace(/\./g, '')) >= 62550;
          })(t);
        },
        messages: {
          de:
            'Dein Gehalt ist leider zu niedrig, um dich privat zu versichern.',
        },
      }),
      $('.birthdayMask').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'TT.MM.JJJJ',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: n,
        max: a,
      }),
      $('.birthdayMask16').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'TT.MM.JJJJ',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: n,
        max: i,
      }),
      $('.birthdayMaskEn').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'DD.MM.YYYY',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: n,
        max: a,
      }),
      $('.dateMaskNow').inputmask({
        alias: 'datetime',
        inputFormat: 'dd.mm.yyyy',
        placeholder: 'TT.MM.JJJJ',
        outputFormat: 'yyyy-mm-dd',
        autoUnmask: !0,
        min: a,
      }),
      $('select')
        .on('change', function (t) {
          $(this).toggleClass('empty', $(this).val() === '');
        })
        .trigger('change');
    var s = { modal: null, phone: null };
  });
</script>