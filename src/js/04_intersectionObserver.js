const targets = document.querySelectorAll('.lazy');
const animations = document.querySelectorAll('.animation');

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
      console.log('Animate');

      if (entry.isIntersecting) {
        const img = entry.target;
        img.classList.add('fade-in');

        observer.disconnect();
      }
    });
  });

  io.observe(target)
};


targets.forEach(lazyLoad);
animations.forEach(aniMate);



