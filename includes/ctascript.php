
<script>
    const successIcon = `
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
  <path fill="#5be1a3" fill-rule="evenodd"
    d="M12 21a9 9 0 1 0 0-18a9 9 0 0 0 0 18m-.232-5.36l5-6l-1.536-1.28l-4.3 5.159l-2.225-2.226l-1.414 1.414l3 3l.774.774z"
    clip-rule="evenodd"/>
</svg>`;

    const errorIcon = `
<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24">
  <path fill="#ff4d4f"
    d="M12 2a10 10 0 1 0 0 20a10 10 0 0 0 0-20m3.5 13.5l-1 1L12 13.5l-2.5 2.5l-1-1L11 12L8.5 9.5l1-1L12 10.5l2.5-2.5l1 1L13 12z"/>
</svg>`;

    document.querySelectorAll(".newsletter-form").forEach(function (form) {
        form.addEventListener("submit", async function (e) {
            e.preventDefault();

            const email = this.email.value;
            const message = this.querySelector(".form-message");
            const icon = message.querySelector(".icon");
            const text = message.querySelector(".text");

            try {
                const res = await fetch("/api/subscribe", {
                    method: "POST",
                    headers: { "Content-Type": "application/x-www-form-urlencoded" },
                    body: "email=" + encodeURIComponent(email)
                });

                if (res.ok) {
                    icon.innerHTML = successIcon;
                    text.textContent = "You're subscribed.";
                    message.classList.remove("error");
                    message.classList.add("success");
                    message.style.display = "flex";
                    this.reset();
                } else {
                    throw new Error();
                }

            } catch (err) {
                icon.innerHTML = errorIcon;
                text.textContent = "Something went wrong.";
                message.classList.remove("success");
                message.classList.add("error");
                message.style.display = "flex";
            } finally {
                setTimeout(() => {
                    message.style.display = "none";
                }, 2000);
            }
        });
    });
</script>
