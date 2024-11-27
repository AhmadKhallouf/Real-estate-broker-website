document.addEventListener("DOMContentLoaded", function() {
  var flashMessage = document.getElementById('flash-message');
  var closeButton = document.getElementById('close');

  flashMessage.style.display = 'block';

  closeButton.addEventListener('click', function() {
    flashMessage.style.display = 'none';
  });


});