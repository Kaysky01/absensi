let user = JSON.parse(localStorage.getItem("user"));
document.getElementById("username").innerText = user.nama;

async function absenMasuk() {
    let res = await fetch("../api/absen_masuk.php", {
        method: "POST",
        body: new URLSearchParams({ user_id: user.id })
    });

    let result = await res.json();
    if (result.status === "success") alert("Absen masuk berhasil!");
    else alert("Kamu sudah absen!");
}

async function absenPulang() {
    let res = await fetch("../api/absen_pulang.php", {
        method: "POST",
        body: new URLSearchParams({ user_id: user.id })
    });

    let result = await res.json();
    alert(result.status === "success" ? "Absen pulang berhasil!" : "Gagal absen pulang!");
}
