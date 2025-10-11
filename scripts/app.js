const bugerMenu = document.querySelector(".mnu-button__menu");

if (bugerMenu) {
  const menuBackground = document.querySelector(".main-menu-background");
  const mainMenu = document.querySelector(".main-menu");

  bugerMenu.addEventListener("click", (menu) => {
    bugerMenu.classList.toggle("active");

    if (bugerMenu.classList.contains("active")) {
      menuBackground.classList.add("active");
      mainMenu.classList.add("active");
    } else {
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

const accordionCol = document.querySelectorAll('.accordion__col')

accordionCol.forEach(col => {
	col.addEventListener('mouseenter', () => {
		accordionCol.forEach(c => {
			c.classList.remove('activ')
			col.classList.add('activ')
		})
	})
})