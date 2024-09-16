function loadTranslations(language) {
    fetch('/assets/js/translations.json')
        .then(response => response.json())
        .then(data => {
            applyTranslations(data, language);
        })
        .catch(error => console.error('Error loading translations:', error));
}


function applyTranslations(translations, language) {
    document.getElementById('welcome-heading').textContent = translations[language]['welcome-heading'];
    document.getElementById('welcome-description').textContent = translations[language]['welcome-description'];
    document.getElementById('welcome-invitation').textContent = translations[language]['welcome-invitation'];
    document.getElementById('form-heading').textContent = translations[language]['form-heading'];
    document.getElementById('username').placeholder = translations[language]['username-placeholder'];
    document.getElementById('email').placeholder = translations[language]['email-placeholder'];
    document.getElementById('password').placeholder = translations[language]['password-placeholder'];
    document.getElementById('confirm_password').placeholder = translations[language]['confirm-password-placeholder'];
    document.getElementById('terms-label').textContent = translations[language]['terms-label'];
    document.getElementById('signup-btn').textContent = translations[language]['signup-btn'];
}


function setLanguage(language) {
    loadTranslations(language);  
}


document.addEventListener('DOMContentLoaded', function () {
    setLanguage('en');
});
