document.addEventListener('DOMContentLoaded', () => {
    const ctaButton = document.getElementById('ctaButton');
    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            alert('Terima kasih telah mengklik! SAya akan menemani tur anda.');
        });
    }

    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    if (contactForm) {
        contactForm.addEventListener('submit', async (event) => {
            event.preventDefault(); // Mencegah form reload halaman

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;
            // Ambil CSRF token dari input tersembunyi
            const csrfToken = document.querySelector('input[name="_token"]').value;

            try {
                const response = await fetch('/submit-contact', { // Menggunakan rute Laravel Anda
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken // Kirim CSRF token
                    },
                    body: JSON.stringify({ name, email, message, _token: csrfToken }) // Kirim juga token di body
                });
                const data = await response.json();

                if (response.ok) {
                    formMessage.textContent = data.message;
                    formMessage.style.color = 'green';
                    contactForm.reset();
                } else {
                    // Tangani error validasi atau server
                    const errorDetails = data.errors ? Object.values(data.errors).flat().join(', ') : 'Terjadi kesalahan tidak dikenal.';
                    formMessage.textContent = `Gagal: ${errorDetails}`;
                    formMessage.style.color = 'red';
                }
            } catch (error) {
                console.error('Error:', error);
                formMessage.textContent = 'Terjadi kesalahan koneksi atau server.';
                formMessage.style.color = 'red';
            }
        });
    }
});