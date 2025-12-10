document.querySelector("form").addEventListener("submit", async (e) => {
    e.preventDefault();

    let username = document.getElementById("username").value;
    let password = document.getElementById("password").value;

    let response = await fetch("api/login.php", {
        method: "POST",
        body: new URLSearchParams({ username, password })
    });

    let result = await response.json();

    if (result.status === "success") {
        localStorage.setItem("user", JSON.stringify(result.user));
        window.location.href = "pages/dashboard.html";
    } else {
        alert("Username atau password salah!");
    }
});
