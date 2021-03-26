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

      --background-color: #17181E;
      --foreground-color: #F5FBFF;
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
