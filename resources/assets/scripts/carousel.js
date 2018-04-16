// HERO CAROUSEL
const section = document.querySelector('.hero-image-sub-carousel');
const elements = [...document.querySelectorAll('img')];

elements.forEach(element => element.addEventListener('click', event => {
  const position = parseInt(element.dataset.position);

  if (position === 1) {
    elements.forEach(child => {
      var parseDataset = parseInt(child.dataset.position);
      if (parseDataset === 6) { child.dataset.position = 1; }
      else { child.dataset.position = parseInt(child.dataset.position) + 1; }
      // if (parseDataset === 1) { child.dataset.position = 2; }
      // else if (parseDataset  === 2) { child.dataset.position = 3; }
      // else if (parseDataset  === 3) { child.dataset.position = 1; }
    });
  }

  if (position === 3) {
    elements.forEach(child => {
      var parseDataset = parseInt(child.dataset.position);
      if (parseDataset === 1) { child.dataset.position = 6; }
      else { child.dataset.position -= 1; }
      // if (parseDataset  === 3) { child.dataset.position = 2; }
      // else if (parseDataset  === 2) { child.dataset.position = 1; }
      // else if (parseDataset === 1) { child.dataset.position = 3; }
    });
  }
  console.log(document.querySelector('.active-user').innerHTML = document.querySelector('[data-position="1"]')
  .getAttribute('src')
  .match(/\/([\w]*).gif/g));
  document.querySelector('.active-user').innerHTML = document.querySelector('img[data-position="2"]').getAttribute('src').match(/\/(\b[\w]*\b).gif/g);
}));
