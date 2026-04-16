console.log("JS carregado");


document.addEventListener("DOMContentLoaded", function () {

    const telefone = document.getElementById("telefone");

    if (telefone) {
        telefone.addEventListener("input", function (e) {
            let v = e.target.value.replace(/\D/g, '');

            if (v.length > 11) v = v.slice(0, 11);

            if (v.length > 10) {
                v = v.replace(/^(\d{2})(\d{5})(\d{4})$/, '($1) $2-$3');
            } else if (v.length > 6) {
                v = v.replace(/^(\d{2})(\d{4})(\d+)/, '($1) $2-$3');
            } else if (v.length > 2) {
                v = v.replace(/^(\d{2})(\d+)/, '($1) $2');
            } else {
                v = v.replace(/^(\d*)/, '($1');
            }

            e.target.value = v;
        });
    }

   
    const preco = document.querySelectorAll("input[name='preco']");

    preco.forEach(input => {
        input.addEventListener("input", function (e) {
            let v = e.target.value.replace(/\D/g, '');

            v = (v / 100).toFixed(2) + '';
            v = v.replace(".", ",");
            v = v.replace(/\B(?=(\d{3})+(?!\d))/g, ".");

            e.target.value = "R$ " + v;
        });
    });

    
    
    const inputs = document.querySelectorAll(".form-control, .form-select");

    inputs.forEach(input => {
        input.addEventListener("focus", () => {
            input.style.transform = "scale(1.02)";
        });

        input.addEventListener("blur", () => {
            input.style.transform = "scale(1)";
        });
    });

});
