"use strict";

document.addEventListener("DOMContentLoaded", function () {


  //----------------------FIXED-HEADER-----------------------
  const headerFixed = (headerFixed, headerActive) => {
    const header = document.querySelector(headerFixed),
      active = headerActive.replace(/\./, "");

    window.addEventListener("scroll", function () {
      const top = pageYOffset;

      if (top >= 90) {
        header.classList.add(active);
      } else {
        header.classList.remove(active);
      }
    });
  };
  headerFixed(".header", ".header--active");

  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 1.3,
    spaceBetween: 9.5,
    initialSlide: 0,
    freeMode: true,
    breakpoints: {
      576: {
        slidesPerView: 2,
        spaceBetween: 12,
      },
      767: {
        slidesPerView: 3,
        spaceBetween: 12,
      },
      992: {
        slidesPerView: 4,
        spaceBetween: 12,
      },
      1440: {
        slidesPerView: 4.5,
        spaceBetween: 12,
      },
      2000: {
        slidesPerView: 5,
        spaceBetween: 12,
      },
    },
  });

  //----------------------HAMBURGER-----------------------
  const hamburger = (hamburgerButton, hamburgerNav, hamburgerHeader) => {
    const button = document.querySelector(hamburgerButton),
      nav = document.querySelector(hamburgerNav),
      header = document.querySelector(hamburgerHeader);

    button.addEventListener("click", (e) => {
      button.classList.toggle("hamburger--active");
      nav.classList.toggle("header__nav--active");
      header.classList.toggle("header--menu");
    });
  };
  hamburger(".hamburger", ".header__nav", ".header");

		//----------------------TABS-JS----------------------
	const tabs = (headerSelector, tabSelector, contentSelector, activeClass) => {
		const header = document.querySelector(headerSelector),
					tab = document.querySelectorAll(tabSelector),
					content = document.querySelectorAll(contentSelector);

		function hideTabContent() {
			content.forEach(item => {
				item.style.display = "none";
			});

			tab.forEach(item => {
				item.classList.remove(activeClass);
			});
		}

		function showTabContent(i = 0) {
			content[i].style.display = "block";
			tab[i].classList.add(activeClass);
		}

		hideTabContent();
		showTabContent();

		header.addEventListener('click', (e) => {
			const target = e.target;
			if (target && 
				(target.classList.contains(tabSelector.replace(/\./, '')) || 
				target.parentNode.classList.contains(tabSelector.replace(/\./, '')))) {
				tab.forEach((item, i) => {
					if (target == item || target.parentNode == item) {
						hideTabContent();
						showTabContent(i);
					}
				});
			}
		});
	};
	tabs('.tabs', '.tabs__item', '.tabs__wrap', 'active');

});
