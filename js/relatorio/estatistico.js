$(document).on("submit", "#myForm", function(e) {
    e.preventDefault()
    let form = $(this).serializeArray()
    console.log(form)
})