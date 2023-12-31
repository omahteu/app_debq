$(window).on("load", async function () {
    const rq = await fetch("http://localhost/app_debq/php/perfil/read.php")
    const rs = await rq.json()
    $("#membros").val(rs['membros'])
    $("#alunos").val(rs["alunos"])
    $("#professores").val(rs["professores"])
    $("#equipe").val(rs["equipe"])
})