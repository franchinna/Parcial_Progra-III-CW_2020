window.addEventListener('DOMContentLoaded', function () {
    const formLogin = document.getElementById('form-login');
    const inputEmail = document.getElementById('email');
    const inputPassword = document.getElementById('password');

    formLogin.addEventListener('submit', function (ev) {
        ev.preventDefault();
        const data = {
            email: inputEmail.value,
            password: inputPassword.value,
        };

        fetch('api/acciones/login.php', {
            method: 'post',
            body: JSON.stringify(data)
        })
            .then(rta => rta.json())
            .then(respuesta => {
                if (respuesta.success) {
                    location.href = "index.php?s=panel-admin";
                } else {
                    console.log("error");
                }
            });
    });
});