function edit(x) {
    for (var i = 0; i < document.querySelectorAll(`.${x}`).length; i++) {
        document.querySelectorAll(`.${x}`)[i].id = `${x}-${i}`
    }
}
edit('form__input-num')
edit('btn-num--apart')
edit('btn-num--add')

function cong_tru(x) {
    for (let i = 0; i < document.querySelectorAll(`.${x}`).length; i++) {
        document.querySelectorAll(`.${x}`)[i].addEventListener('click', function(event) {
            let inputID = `form__input-num-${event.target.id.split('-')[4]}`
            if (x.indexOf('add') == -1) {
                document.getElementById(inputID).value = +document.getElementById(inputID).value - 1
            } else {
                document.getElementById(inputID).value = +document.getElementById(inputID).value + 1
            }
        })
    }
}
cong_tru('btn-num--add')
cong_tru('btn-num--apart')
setInterval(function() {
    for (let i = 0; i < document.querySelectorAll('.form__input-num').length; i++) {
        if (+document.querySelectorAll('.form__input-num')[i].value < 1) {
            document.querySelectorAll('.form__input-num')[i].value = 1
        }
    }
})