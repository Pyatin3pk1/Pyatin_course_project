document.addEventListener('click', function(evt) {
   const target = evt.target

   if (target.classList.contains('button-appointment')) {
      window.open('', "_blank")
   }
})