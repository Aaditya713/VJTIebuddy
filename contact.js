
        const form = document.getElementById("contact-form");
      
        form.addEventListener("submit", function(event) {
          event.preventDefault();
      
          const formData = new FormData(form);
      
          fetch(form.action, {
            method: form.method,
            body: formData
          })
          .then(response => {
            if (response.ok) {
              return response.text();
            } else {
              throw new Error("Oops! Something went wrong.");
            }
          })
          .then(data => {
            alert(data);
            form.reset();
          })
          .catch(error => {
            alert(error.message);
          });
        });
      