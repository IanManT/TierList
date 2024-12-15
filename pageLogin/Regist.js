document.getElementById('registrationForm').addEventListener('submit', function(event) {
    const username = document.getElementById('regUsername').value;
    const password = document.getElementById('regPassword').value;
    const email = document.getElementById('regEmail').value;

    if (username === '' || password === '' || email === '') {
        alert('All fields are required!');
        event.preventDefault(); // Prevent form submission
    }
});
