const contactForm = document.getElementById('contact-form');

if (contactForm) {
  contactForm.addEventListener('submit', (e) => {
    e.preventDefault();
    
    const name = document.getElementById('name').value.trim();
    const email = document.getElementById('email').value.trim();
    const message = document.getElementById('message').value.trim();
    
    if (!name || !email || !message) {
      showMessage('Please fill in all required fields.', 'error');
      return;
    }
    
    if (!isValidEmail(email)) {
      showMessage('Please enter a valid email address.', 'error');
      return;
    }
    
    // Submit form (using Formspree or similar)
    const formData = new FormData(contactForm);
    
    fetch(contactForm.action, {
      method: 'POST',
      body: formData,
      headers: { 'Accept': 'application/json' }
    })
    .then(response => {
      if (response.ok) {
        showMessage('Thank you! Your message has been sent successfully.', 'success');
        contactForm.reset();
      } else {
        showMessage('Oops! There was a problem. Please try again.', 'error');
      }
    })
    .catch(() => {
      showMessage('Oops! There was a problem. Please try again.', 'error');
    });
  });
}

function isValidEmail(email) {
  return /^[^\s@]+@[^\s@]+\.[^\s@]+$/.test(email);
}

function showMessage(text, type) {
  const messageDiv = document.createElement('div');
  messageDiv.className = `form-message ${type}`;
  messageDiv.textContent = text;
  
  const existingMessage = document.querySelector('.form-message');
  if (existingMessage) existingMessage.remove();
  
  contactForm.insertAdjacentElement('beforebegin', messageDiv);
  
  setTimeout(() => messageDiv.remove(), 5000);
}
