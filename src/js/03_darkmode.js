// DarkMode
let inverted = localStorage.getItem('inverted');
const invertedToggle = document.querySelector('#circle');
const slider = document.querySelector('.sliderToggle');
const darkModeToggle = document.querySelector('.dark-mode-toggle');
const tapevent = 'PointerEvent';

const css = `
    html {
        --pointer - move - line - color: #03f;
    }
    html.inverted {
        --pointer - move - line - color: #f3a;

      /*--background-color: #101214;
      --foreground-color-rgb: 250,255,240;*/

      /*--background-color: #101214;
      --foreground-color-rgb: 250,255,240;*/

      /*--background-color: #131310;
      --foreground-color-rgb: 210,230,255;*/



      /*--background-color: #111;
      --foreground-color-rgb: 234,240,244;*/

      --background-color-alpha: rgb(23,23,29, 0.7);
      --background-color: #111;
      --background-color-elevated: #121217;

      --foreground-color: #DFF1FD;
      --background-color-dark: #000;







      --foreground-color-a: 0.8;
      --base-grid-color1: rgba(240,155,255, 0.1);
      --base-grid-color2: rgba(240,155,255, 0.05);
    }
    html.size-mode-relative {
      --fontSize: calc(100vw / 80);
      --hrThickness: 0.17rem;
    }
    .settings c:nth-child(2n+2) {
        font - feature - settings:'ss02' 1;
      user-select:none;
    }
    .baselineBeacon {
        height: var(--baseline);
      overflow: hidden;
      display: none;
      position: absolute;
    }
    .pointerMoveLine {
        height: 1px;
      pointer-events: none;
      visibility: hidden;
      position: absolute;
      left:0; top:0; right:0;
      background: var(--pointer-move-line-color);
      transform: translate3d(0,0,0);
      opacity:0.4;
    }
    .pointerMoveLine.active {visibility:visible; }
    .pointerMoveLine.pressed {
        opacity:0.8;
      box-shadow:
        0 1px 0 0 var(--pointer-move-line-color),
        0 -1px 0 0 var(--pointer-move-line-color);
    }
    `.trim();
const style = document.createElement('style');
style.appendChild(document.createTextNode(css));
document.head.appendChild(style);
const link = document.createElement('link');
link.rel = 'stylesheet';
document.head.appendChild(link);

function setLabel(id, value) {
  const label = document.getElementById(id);
  label && (label.innerText = value);
}

const enableInverted = () => {
  document.documentElement.classList.add('inverted');
  invertedToggle.classList.add('darkmodeSlide');
  slider.classList.add('sliderToggleActive');
  localStorage.setItem('inverted', 'enabled');
  console.log('Darkemode: ON');
};

const disableInverted = () => {
  document.documentElement.classList.remove('inverted');
  localStorage.setItem('inverted', null);
  console.log('Darkemode: OFF');
};

if (inverted === 'enabled') {
  enableInverted();
}

// muss verbessert werden ÜBERGANG
$('#dark').click(function() {
  invertedToggle.classList.toggle('darkmodeSlide');
  slider.classList.toggle('sliderToggleActive');
  inverted = localStorage.getItem('inverted');

  if (inverted !== 'enabled') {
    enableInverted();
    updateInvertedLabel();
  } else {
    disableInverted();
    updateInvertedLabel();
  }
});

darkModeToggle.addEventListener('click', () => {
  invertedToggle.classList.toggle('darkmodeSlide');
  slider.classList.toggle('sliderToggleActive');
  inverted = localStorage.getItem('inverted');

  if (inverted !== 'enabled') {
    enableInverted();
    updateInvertedLabel();
  } else {
    disableInverted();
    updateInvertedLabel();
  }
});

function bindTapableOption(msgname, fn) {
  const label = document.getElementById(msgname + '-msg');
  label && label.parentElement.addEventListener(tapevent, fn);
}

function updateInvertedLabel() {
  const on = document.documentElement.classList.contains('inverted');
  setLabel('inverted-msg', on ? 'Dark: On' : 'Dark: Off');
}
function toggleInvertedMode() {
  if (inverted !== 'enabled') {
    updateInvertedLabel();
  } else {
    updateInvertedLabel();
  }
}

bindTapableOption('inverted', toggleInvertedMode);

updateInvertedLabel();
