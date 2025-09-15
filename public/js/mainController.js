document.addEventListener('DOMContentLoaded', () => {
    // Controller untuk tombol CTA (Call to Action)
    const ctaButton = document.getElementById('ctaButton');
    if (ctaButton) {
        ctaButton.addEventListener('click', () => {
            alert('Terima kasih telah mengklik! Kami akan mengarahkan Anda ke halaman penawaran.');
            // Jika ingin mengarahkan ke rute Laravel:
            // window.location.href = '/penawaran'; // Misalnya, rute Laravel bernama 'penawaran'
        });
    }

    // Controller untuk formulir kontak
    const contactForm = document.getElementById('contactForm');
    const formMessage = document.getElementById('formMessage');

    if (contactForm) {
        contactForm.addEventListener('submit', async (event) => {
            event.preventDefault(); // Mencegah form reload halaman

            const name = document.getElementById('name').value;
            const email = document.getElementById('email').value;
            const message = document.getElementById('message').value;

            // Untuk saat ini, kita hanya menampilkan pesan di halaman.
            // Jika Anda ingin mengirim ke Controller Laravel via AJAX:
            // const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content'); // Jika ada meta tag csrf-token

            // try {
            //     const response = await fetch('/submit-contact', { // Ganti dengan rute Laravel Anda
            //         method: 'POST',
            //         headers: {
            //             'Content-Type': 'application/json',
            //             'X-CSRF-TOKEN': document.querySelector('input[name="_token"]').value // Ambil dari input tersembunyi
            //         },
            //         body: JSON.stringify({ name, email, message })
            //     });
            //     const data = await response.json();
            //     if (response.ok) {
            //         formMessage.textContent = data.message;
            //         formMessage.style.color = 'green';
            //     } else {
            //         formMessage.textContent = 'Terjadi kesalahan saat mengirim pesan.';
            //         formMessage.style.color = 'red';
            //     }
            // } catch (error) {
            //     console.error('Error:', error);
            //     formMessage.textContent = 'Terjadi kesalahan koneksi.';
            //     formMessage.style.color = 'red';
            // }


            // Logika saat ini (tanpa AJAX ke backend Laravel)
            console.log('Data Formulir:', { name, email, message });
            formMessage.textContent = `Terima kasih, ${name}! Pesan Anda telah terkirim.`;
            formMessage.style.color = 'green';
            contactForm.reset();
        });
    }
});