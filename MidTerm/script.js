function validateForm() {
    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;
    const errorMessage = document.getElementById('error-message');
    errorMessage.innerHTML = ""; 

    if (!username || !password) {
        errorMessage.innerHTML += "Must be filled<br>";
        return false;
    }
    
    if (password.length < 5) {
        errorMessage.innerHTML += "Password must be at least 5 characters<br>";
        return false;
    }
    
    if (!/(?=.*[a-zA-Z])(?=.*\d)/.test(password)) {
        errorMessage.innerHTML += "Password must consist of letters and numbers.<br>";
        return false;
    }
    
    return true; 
}
