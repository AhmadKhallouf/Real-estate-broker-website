 // JavaScript code for the interactive behavior
        var dropdown11 = document.querySelector('.dropdown-content10');
        var dropdown10 = document.querySelector('.dropdown10');
        var isOpen = false;

        function toggleDropdown() {
            dropdown11.style.display = isOpen ? 'none' : 'block';
            isOpen = !isOpen;
        }

        dropdown10.addEventListener('click', toggleDropdown);