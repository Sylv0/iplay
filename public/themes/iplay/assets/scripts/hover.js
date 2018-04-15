
const listItems = document.querySelectorAll('.list-item');
const athletes = document.querySelectorAll('.athlete');


function toggleAthlete(athlete) {
  listItems.forEach(item => item.classList.remove('list-item--active'));
  athletes.forEach(biography => biography.classList.remove('athlete--active'));

  const listItem = document.querySelector(`.list-item[data-athlete="${athlete}"]`);
  listItem.classList.add('list-item--active');

  const biography = document.querySelector(`.athlete[data-athlete="${athlete}"]`);
  biography.classList.add('athlete--active');
}

function onHover(event) {
  const athlete = event.target.dataset.athlete;
  toggleAthlete(athlete);
}

listItems.forEach(item => item.addEventListener('mouseover', onHover));
