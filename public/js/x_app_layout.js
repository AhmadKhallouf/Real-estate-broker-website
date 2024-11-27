 // JavaScript code for the interactive behavior
        var dropdown10 = document.querySelector('.dropdown-content9');
        var dropdown9 = document.querySelector('.dropdown9');
        var isOpen = false;

        function toggleDropdown() {
            dropdown10.style.display = isOpen ? 'none' : 'block';
            isOpen = !isOpen;
        }

        dropdown9.addEventListener('click', toggleDropdown);