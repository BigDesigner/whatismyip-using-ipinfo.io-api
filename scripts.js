async function fetchIPInfo() {
    try {
        const response = await fetch('proxy.php'); // To get user IP information via proxy
        const data = await response.json();

        
        document.getElementById('ipv4').innerText = data.ip || 'No Information';
        document.getElementById('hostname').innerText = data.hostname || 'No Information';
        document.getElementById('city').innerText = data.city || 'No Information';
        document.getElementById('region').innerText = data.region || 'No Information';
        document.getElementById('country').innerText = data.country || 'No Information';
        const loc = data.loc ? data.loc.split(',') : ['No Information', 'No Information'];
        document.getElementById('loc').innerText = `${loc[0]}, ${loc[1]}`;
        document.getElementById('org').innerText = data.org || 'No Information';
        document.getElementById('postal').innerText = data.postal || 'No Information';
        document.getElementById('timezone').innerText = data.timezone || 'No Information';
    } catch (error) {
        console.error('Failed to retrieve IP information:', error);
    }
}

// Dark Mode
const toggleButton = document.getElementById('toggleTheme');
const body = document.body;

// Default theme state
let isDarkMode = true;

// Theme change process
toggleButton.addEventListener('click', () => {
	console.log('Button clicked!');
	body.classList.toggle('dark-mode'); // Toggle dark mode on/off

    // Update theme status
    if (body.classList.contains('dark-mode')) {
        toggleButton.innerHTML = '<i class="fas fa-sun"></i>'; 
        isDarkMode = true; 
    } else {
        toggleButton.innerHTML = '<i class="fas fa-moon"></i>'; 
        isDarkMode = false; 
    }
});

// Get IP information when the page loads
window.onload = fetchIPInfo;
