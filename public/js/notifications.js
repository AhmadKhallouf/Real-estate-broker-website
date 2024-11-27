 // JavaScript code for the interactive behavior
        var dropdown = document.querySelector('.notification-dropdown');
        var notificationIcon = document.querySelector('.notification-icon');
        var isOpen = false;

        function toggleDropdown() {
            dropdown.style.display = isOpen ? 'none' : 'block';
            isOpen = !isOpen;
        }

        notificationIcon.addEventListener('click', toggleDropdown);