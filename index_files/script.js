new WOW().init();
Fancybox.bind("[data-fancybox]", {
   // Your custom options
});
setTimeout(() => {
   document.querySelector('.wrapper').style.opacity = 1;
}, 300);

const burger = document.querySelector('.burger');
const headermenu = document.querySelector('.header__menu-mob');
let burgerIter = 0;
burger.addEventListener('click', () => {

   if (burgerIter == 1) {
      document.querySelectorAll('header .attract-box').forEach(i => {
         i.style.opacity = 0;
      })
      document.querySelectorAll('.header__menu-mob .attract-box').forEach(i => {
         i.style.opacity = 0;
      })
   }
   document.querySelector('body').classList.toggle('lock');
   burger.classList.toggle('active');


   if (burger.classList.contains('active')) {
      headermenu.style.top = document.querySelector('header.header').clientHeight + "px";
   }
   else {
      headermenu.style.top = '-100%';
   }
   burgerIter++;
})
let containerPadding = parseInt(window.getComputedStyle(document.querySelector('.container'), null).getPropertyValue('padding-left'))
console.log(containerPadding);
window.addEventListener('resize', () => {
   containerPadding = window.getComputedStyle(document.querySelector('.container'), null).getPropertyValue('padding-left')
})

if (document.querySelectorAll('slider')) {
   const sliders = document.querySelectorAll('.slider');
   sliders.forEach((i, index) => {
      let id = i.className + "-" + index;
      i.className = i.className + " " + i.className + "-" + index;
      new Swiper(`.slider__swiper`, {
         spaceBetween: 0,
         slidesPerView: 1,
         navigation: {
            nextEl: '.swiper-button-next',
            prevEl: '.swiper-button-prev',
         },
         loop: true
      })
   })

   if (window.innerWidth > 1660) {
      document.querySelectorAll('.swiper-button-prev').forEach(i => { i.style.left = (window.innerWidth - 1660) / 2 + 'px' })
   }
   else {
      document.querySelectorAll('.swiper-button-prev').forEach(i => { i.style.left = containerPadding + 'px' })
   }

   if (window.innerWidth > 1660) {
      document.querySelectorAll('.swiper-button-next').forEach(i => { i.style.right = (window.innerWidth - 1660) / 2 + 'px' })

   }
   else {
      document.querySelectorAll('.swiper-button-next').forEach(i => { i.style.right = containerPadding + 'px' })

   }

   window.addEventListener('resize', () => {


      if (window.innerWidth > 1660) {
         document.querySelectorAll('.swiper-button-prev').forEach(i => { i.style.left = (window.innerWidth - 1660) / 2 + 'px' })
      }
      else {
         document.querySelectorAll('.swiper-button-prev').forEach(i => { i.style.left = containerPadding + 'px' })
      }

      if (window.innerWidth > 1660) {
         document.querySelectorAll('.swiper-button-next').forEach(i => { i.style.right = (window.innerWidth - 1660) / 2 + 'px' })

      }
      else {
         document.querySelectorAll('.swiper-button-next').forEach(i => { i.style.right = containerPadding + 'px' })

      }
   })
}


if (document.querySelectorAll('.pros')) {
   let prosItemIndex;
   document.querySelectorAll('.pros__item').forEach((i, index) => {
      if (window.innerWidth > 901) {
         prosItemIndex = (index + 1) % 3;
      }
      else if (window.innerWidth > 751) {
         prosItemIndex = (index + 1) % 2;

      }
      else {
         prosItemIndex = 1;
      }
      if (i.classList.contains('text-true')) {
         i.style.gridColumnStart = prosItemIndex;
      }
   })
}


if (document.querySelectorAll('.faq')) {


   document.querySelectorAll('.faq').forEach(i => {
      let faqHeights = [];
      i.querySelectorAll(".faq__item").forEach(item => {
         item.querySelector('.faq__item-answer').style.height = 'auto';
         if (window.innerWidth > 650) {
            faqHeights.push(item.querySelector('.faq__item-answer').clientHeight + 32)
         }
         else {
            faqHeights.push(item.querySelector('.faq__item-answer').clientHeight + 16)

         }
         item.querySelector('.faq__item-answer').style.height = 0;
         console.log(faqHeights);
      })
      i.querySelectorAll('.faq__item').forEach((item, index) => {
         item.addEventListener('click', (e) => {
            i.querySelectorAll('.faq__item').forEach(j => {
               j.querySelector('.faq__item-answer').style.height = 0;
               j.querySelector('.faq__item-answer').classList.remove('active');
               j.querySelector('.faq__item-btn').classList.remove('active');
            })
            item.querySelector('.faq__item-answer').style.height = faqHeights[index] + 'px';
            item.querySelector('.faq__item-answer').classList.add('active');
            item.querySelector('.faq__item-btn').classList.add('active');
         })
      })

      window.addEventListener('resize', () => {
         faqHeights = [];
         i.querySelectorAll(".faq__item").forEach(item => {
            item.querySelector('.faq__item-answer').style.height = 'auto';
            if (window.innerWidth > 650) {
               faqHeights.push(item.querySelector('.faq__item-answer').clientHeight + 32)
            }
            else {
               faqHeights.push(item.querySelector('.faq__item-answer').clientHeight + 16)

            }
            item.querySelector('.faq__item-answer').style.height = 0;
         })
         console.log(faqHeights);

      })
   })


}


Fancybox.bind("[data-fancybox]", {
   // Your custom options
});




const isNumericInput = (event) => {
   const key = event.keyCode;
   return ((key >= 48 && key <= 57) || // Allow number line
      (key >= 96 && key <= 105) // Allow number pad
   );
};

const isModifierKey = (event) => {
   const key = event.keyCode;
   return (event.shiftKey === true || key === 35 || key === 36) || // Allow Shift, Home, End
      (key === 8 || key === 9 || key === 13 || key === 46) || // Allow Backspace, Tab, Enter, Delete
      (key > 36 && key < 41) || // Allow left, up, right, down
      (
         // Allow Ctrl/Command + A,C,V,X,Z
         (event.ctrlKey === true || event.metaKey === true) &&
         (key === 65 || key === 67 || key === 86 || key === 88 || key === 90)
      )
};

const enforceFormat = (event) => {
   // Input must be of a valid number format or a modifier key, and not longer than ten digits
   if (!isNumericInput(event) && !isModifierKey(event)) {
      event.preventDefault();
   }
};

const formatToPhone = (event) => {
   if (isModifierKey(event)) { return; }

   const input = event.target.value.replace(/\D/g, '').substring(0, 11);
   const countryCode = input.substring(0, 1)
   const areaCode = input.substring(1, 4);
   const middle = input.substring(4, 7);
   const last = input.substring(7, 10);

   if (input.length > 7) { event.target.value = `+${countryCode} (${areaCode}) ${middle} - ${last}`; }
   else if (input.length > 4) { event.target.value = `+${countryCode} (${areaCode}) ${middle}`; }
   else if (input.length > 1) { event.target.value = `+${countryCode} (${areaCode}`; }
   else if (input.length == 0) {
      event.target.value = `+${countryCode}`;
   }

};

document.querySelectorAll('input[name="phone"]').forEach(i => {

   i.addEventListener('keydown', formatToPhone);

})
