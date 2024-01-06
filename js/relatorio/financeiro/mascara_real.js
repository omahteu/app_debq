function formatarMoeda(e) {
    var v = e.target.value.replace(/\D/g, "");
    v = (v / 100).toFixed(2) + "";
    v = v.replace(".", ",");
    v = v.replace(/(\d)(\d{3})(\d{3}),/g, "$1.$2.$3,");
    v = v.replace(/(\d)(\d{3}),/g, "$1.$2,");
    e.target.value = `R$ ${v}`;
}

const e1 = document.getElementById("e1")
e1.addEventListener("keyup", formatarMoeda)

const e2 = document.getElementById("e2")
e2.addEventListener("keyup", formatarMoeda)

const e3 = document.getElementById("e3")
e3.addEventListener("keyup", formatarMoeda)

const s1 = document.getElementById("s1")
s1.addEventListener("keyup", formatarMoeda)

const s2 = document.getElementById("s2")
s2.addEventListener("keyup", formatarMoeda)

const s3 = document.getElementById("s3")
s3.addEventListener("keyup", formatarMoeda)
