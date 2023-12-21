document.addEventListener('DOMContentLoaded', function() {
    var calendar = generateCalendar();
    var openModal = document.getElementById('btn');
    var modal = document.getElementById('modal');
    var closeModal = document.getElementsByClassName('close')[0];
   
    openModal.onclick = function() {
       modal.style.display = 'block';
    };
   
    closeModal.onclick = function() {
       modal.style.display = 'none';
    };
   
    window.onclick = function(event) {
       if (event.target == modal) {
         modal.style.display = 'none';
       }
    };
   
    function generateCalendar() {
       var calendar = [];
       var date = new Date();
   
       for (var i = 0; i < 7; i++) {
         calendar.push(new Date(date.getFullYear(), date.getMonth(), date.getDate() + i));
       }
   
       return calendar;
    }
   
    function generateTimeSlots() {
       var timeSlots = [];
   
       for (var i = 9; i <= 18; i++) {
         timeSlots.push(i + ':00 - ' + (i + 1) + ':00');
       }
   
       return timeSlots;
    }
   
    var dates = document.getElementById('dates');
    var timeSlots = document.getElementById('timeSlots');
   
    generateCalendar().forEach(function(date) {
       var dateElement = document.createElement('p');
       dateElement.textContent = date.toLocaleDateString();
       dates.appendChild(dateElement);
    });
   
    generateTimeSlots().forEach(function(timeSlot) {
       var timeSlotElement = document.createElement('button');
       timeSlotElement.textContent = timeSlot;
   
       if (isTimeSlotTaken(timeSlot)) {
         timeSlotElement.disabled = true;
       }
   
       timeSlots.appendChild(timeSlotElement);
    });
});