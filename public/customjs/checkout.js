const fileInput = document.getElementById("Proof");
const fileBtn = document.getElementById("Upload-btn");

fileInput.addEventListener("change", function () {
    const file = this.files[0];

    if(file){
        fileBtn.innerText = file.name;
        fileBtn.classList.add("font-semibold");
    }else{
        fileBtn.innerText = "Add an attachments";
        fileBtn.classList.remove("font-semibold");
    }
});

function handleSubmit() {
    // Cek apakah semua input sudah benar
    const name = document.getElementById("name").value;
    const phone_number = document.getElementById("Name").value;
    const proof = document.getElementById("Proof").files.length;

    // Jika salah satu input tidak valid
    if (!name || !phone_number || proof === 0) {
        alert("Please fill in all required fields.");
        return false; // Jangan kirim form jika ada input yang tidak valid
    }

    // Jika semua input valid, kirim form
    return true;
}

document.addEventListener("DOMContentLoaded", function () {
    // Ambil elemen tombol berdasarkan ID
    const submitButton = document.getElementById("confirm-payment");

    // Tambahkan event listener pada tombol
    submitButton.addEventListener("click", function (event) {
        event.preventDefault(); // Mencegah submit form secara default (untuk debugging)

        console.log("Confirm Payment button clicked");

        // Validasi data form sebelum submit (opsional)
        const form = document.querySelector("form");
        const proofInput = document.getElementById("Proof");
        const fileSelected = proofInput.files.length > 0;

        if (!fileSelected) {
            alert("Please upload proof of payment before proceeding.");
            return; // Jangan submit jika validasi gagal
        }

        // Submit form secara manual jika validasi berhasil
        form.submit();
    });
});
