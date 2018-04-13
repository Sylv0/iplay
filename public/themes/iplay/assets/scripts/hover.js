// const nisse = document.querySelector('.nisse');
//
// nisse.addEventListener('mouseover', () =>{
//   console.log('hej');
// })

const listItems = document.querySelectorAll('.list-item');
const biographies = document.querySelectorAll('.athlete');

/**
 * Toggle actor's biography.
 *
 * @param {string} actor
 *
 * @return {void}
 */
function toggleActor(actor) {
  // Loop through all list items and biographies and hide them.
  listItems.forEach(item => item.classList.remove('list-item--active'));
  biographies.forEach(biography => biography.classList.remove('athlete--active'));

  // Fetch the current actor and display their biography.
  const listItem = document.querySelector(`.list-item[data-athlete="${actor}"]`);
  listItem.classList.add('list-item--active');

  const biography = document.querySelector(`.athlete[data-athlete="${actor}"]`);
  biography.classList.add('athlete--active');
}

/**
 * The event handler for when a user clicks on an actor.
 *
 * @param {Event} event
 *
 * @return {void}
 */
function onClick(event) {
  const actor = event.target.dataset.athlete;

  window.history.pushState(actor, null, `?actor=${actor}`);

  toggleActor(actor);
}

// Add the event listener to the list items.
listItems.forEach(item => item.addEventListener('mouseover', onClick));

// We want to listen for when the user travels through the history and update
// the actor based on the event state.
window.addEventListener('popstate', event => {
  toggleActor(event.state);
});
