document.addEventListener("DOMContentLoaded", function() {
    const form = document.getElementById("contactForm");
    const formMessage = document.getElementById("form-message");

    form.addEventListener("submit", async function(event) {
        event.preventDefault();

        const formData = new FormData(form);
        const object = {};
        formData.forEach((value, key) => {
            object[key] = value;
        });
        const json = JSON.stringify(object);

        try {
            const response = await fetch('https://api.web3forms.com/submit', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: json
            });

            if (response.ok) {
                formMessage.style.display = 'block';
                form.reset();
            } else {
                console.error('Error submitting the form', response.statusText);
            }
        } catch (error) {
            console.error('Error submitting the form', error);
        }
    });

    document.getElementById("cancelButton").addEventListener("click", function() {
        form.reset();
    });
});
