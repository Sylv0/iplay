const texts = {
  atleten: "För dig som är atlet erbjuder Iplay dig att bli upptäckt, få kontakt med klubbar & sportföreningar. Du får också ta del av erbjudanden kring tjänster som jobb, utbildning, försäkringar, juidisk hjälp, mentala coacher och PT´s. Du kommer synas mer för dina fans och sponsorer.",
  fansen: "Du får chansen att följa dina idoler, klubbar, tränare, agenter & andra fans närmare än andra sociala medier. Möjligheten att ta del av alla senaste nyheterna inom sport, tävlingar, bilder och video, följa matcher och resultat live. Denna är appen för dig som älskar sport!",
  tränaren: "Som coach får du en unik möjlighet att hitta talanger, får en kommunikationsplattform som förbättrar lagets kommunikation och förenklar ditt administrativa jobb. Med hjälp av iPlay kommer du kunna leda ditt jobb mycket enklare!",
  agenten: "Men iPlay kan du på ett enklare sätt hitta talanger och synas för framtida stjärnor. Marknadsför dig som sport-agent med Iplay!",
  domaren: "Som domare håller du kontakt med andra domare för att knyta kontakter och ta del av jobb, utbildningar, juridisk hjälp, PT´s och mycket mer!",
  laget: "Hitta nya talanger till ditt lag och håll kontakten med dina lagkamrater och dela laguppställningar, taktik och pepp inför matcher, cuper och träningar. Samt marknadsför ditt lag mot en relevant målgrupp och hitta talanger",
};

// HERO CAROUSEL
const section = document.querySelector(".hero-image-sub-carousel");
const elements = [...document.querySelectorAll("img")];

const UpdatePositions = (event, position) => {
  if (position === 1) {
    elements.forEach(child => {
      var parseDataset = parseInt(child.dataset.position);
      if (parseDataset === 6) {
        child.dataset.position = 1;
      } else {
        child.dataset.position = parseInt(child.dataset.position) + 1;
      }
    });
  }

  if (position === 3) {
    elements.forEach(child => {
      var parseDataset = parseInt(child.dataset.position);
      if (parseDataset === 1) {
        child.dataset.position = 6;
      } else {
        child.dataset.position -= 1;
      }
    });
  }
  document.querySelector(".active-user").innerHTML = document.querySelector(
    'img[data-position="2"]'
  ).dataset["name"];

  document.querySelector(".users3 p").innerHTML =
    texts[document.querySelector('img[data-position="2"]').dataset["name"]];
};

setTimeout(() => {
  document.querySelectorAll("svg[data-position]").forEach(e => {
    e.addEventListener("click", event => {
      UpdatePositions(event, parseInt(e.dataset.position));
    });
  });
}, 1000);

elements.forEach(element => {
  element.addEventListener("click", event => {
    UpdatePositions(event, parseInt(element.dataset.position));
  });
});
