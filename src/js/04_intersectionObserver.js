const targets = document.querySelectorAll('.lazy');
const titleAnimation = document.querySelectorAll('.title-animation');
const coverAnimation = document.querySelectorAll('.cover-animation');
const menuAnimation = document.querySelectorAll('.menu-animation');

const lazyLoad = target => {
  const io = new IntersectionObserver((entries, observer) => {
    console.log(entries)
    entries.forEach(entry => {
      console.log('Image Data Ready');

      if (entry.isIntersecting) {
        const img = entry.target;
        const src = img.getAttribute('data-src');

        img.setAttribute('src', src);
        img.classList.add('blur');

        observer.disconnect();
      }
    });
  });

  io.observe(target)
};

const aniMate = target => {
  const io = new IntersectionObserver((entries, observer) => {
    console.log(entries)
    entries.forEach(entry => {
      console.log('Type');

      if (entry.isIntersecting) {
        const obj = entry.target;
        obj.classList.add('fade-up');

        observer.disconnect();
      }
    });
  });

  io.observe(target)
};

const aniMateCovers = target => {
  const io = new IntersectionObserver((entries, observer) => {
    console.log(entries)
    entries.forEach(entry => {
      console.log('Covers');

      if (entry.isIntersecting) {
        const obj = entry.target;
        obj.classList.add('fade-up-covers');
        observer.disconnect();
      }
    });
  });

  io.observe(target)
};

const aniMateMenu = target => {
  const io = new IntersectionObserver((entries, observer) => {
    console.log(entries)
    entries.forEach(entry => {
      console.log('Covers');

      if (entry.isIntersecting) {
        const obj = entry.target;
        obj.classList.add('fade-up-menu');
        observer.disconnect();
      }
    });
  });

  io.observe(target)
};


targets.forEach(lazyLoad);
titleAnimation.forEach(aniMate);
coverAnimation.forEach(aniMateCovers);
menuAnimation.forEach(aniMateMenu);




