const bugerMenu = document.querySelector(".mnu-button__menu");

if (bugerMenu) {
  const menuBackground = document.querySelector(".main-menu-background");
  const mainMenu = document.querySelector(".main-menu");

  bugerMenu.addEventListener("click", (menu) => {
    bugerMenu.classList.toggle("active");

    if (bugerMenu.classList.contains("active")) {
      lenis.stop();
      menuBackground.classList.add("active");
      mainMenu.classList.add("active");
    } else {
      lenis.start();
      menuBackground.classList.remove("active");
      mainMenu.classList.remove("active");
    }
  });
}

gsap.utils.toArray("[data-parallax-wrapper]").forEach((container) => {
  const img = container.querySelector("[data-parallax-target]");

  const tl = gsap.timeline({
    scrollTrigger: {
      trigger: container,
      scrub: true,
    },
  });
  tl.fromTo(
    img,
    {
      yPercent: -15,
      ease: "none",
    },
    {
      yPercent: 15,
      ease: "none",
    }
  );
});

const accordionCol = document.querySelectorAll(".accordion__col");

accordionCol.forEach((col) => {
  col.addEventListener("mouseenter", () => {
    accordionCol.forEach((c) => {
      c.classList.remove("activ");
      col.classList.add("activ");
    });
  });
});

const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
requestAnimationFrame(raf);

function globalGradient() {
  const interBubble = document.querySelector(".interactive");

  let curX = 0,
    curY = 0,
    tgX = 0,
    tgY = 0;

  function move() {
    curX += (tgX - curX) / 20;
    curY += (tgY - curY) / 20;

    gsap.set(interBubble, {
      x: Math.round(curX),
      y: Math.round(curY),
    });

    requestAnimationFrame(() => {
      move();
    });
  }

  window.addEventListener("mousemove", (event) => {
    tgX = event.clientX;
    tgY = event.clientY;
  });

  move();
}

globalGradient();

// Аккордеон "Наши направления"
const proAcc = document.querySelector('.menu-pro__accordion');
const proPanel = document.getElementById('menu-pro-dirs');

if (proAcc && proPanel) {
  proAcc.addEventListener('click', (e) => {
    e.preventDefault();
    const expanded = proAcc.getAttribute('aria-expanded') === 'true';
    proAcc.setAttribute('aria-expanded', String(!expanded));

    if (expanded) {
      proPanel.style.display = 'none';
      proPanel.hidden = true;
    } else {
      proPanel.style.display = 'grid';
      proPanel.hidden = false;
    }
  });
}


