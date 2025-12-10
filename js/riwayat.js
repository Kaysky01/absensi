let user = JSON.parse(localStorage.getItem("user"));

async function loadRiwayat() {
    let req = await fetch("../api/riwayat.php?user_id=" + user.id);
    let data = await req.json();

    let tbody = document.querySelector("tbody");
    tbody.innerHTML = "";

    data.forEach((r) => {
        tbody.innerHTML += `
        <tr>
            <td>${r.tanggal}</td>
            <td>${r.jam_masuk ?? "-"}</td>
            <td>${r.jam_pulang ?? "-"}</td>
            <td>${r.status}</td>
        </tr>`;
    });
}

loadRiwayat();
