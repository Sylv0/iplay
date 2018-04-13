const nisse = document.querySelector('.nisse');
console.log(nisse);

window.onload = () => {
  const burger = document.querySelector('.burger');
  const collapse = document.querySelector('.collapse');

  burger.addEventListener("click", e => {
    collapse.classList.toggle('active');
  });
};
