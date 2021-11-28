function edit(x) {
    for (var i = 0; i < document.querySelectorAll(`.${x}`).length; i++) {
        document.querySelectorAll(`.${x}`)[i].id = `${x}-${i}`
    }
}
edit('form__input-num')
edit('btn-num--apart')
edit('btn-num--add')
edit('table-product__container-item-price')
edit('table-product__container-item-total')

function cong_tru(x) {
    for (let i = 0; i < document.querySelectorAll(`.${x}`).length; i++) {
        document.querySelectorAll(`.${x}`)[i].addEventListener('click', function(event) {
            let inputID = `form__input-num-${event.target.id.split('-')[4]}`
            let priceID = `table-product__container-item-price-${event.target.id.split('-')[4]}`
            let totalID = `table-product__container-item-total-${event.target.id.split('-')[4]}`
            if (x.indexOf('add') == -1) {
                document.getElementById(inputID).value = +document.getElementById(inputID).value - 1
            } else {
                document.getElementById(inputID).value = +document.getElementById(inputID).value + 1
            }
            document.getElementById(totalID).innerText = +document.getElementById(priceID).innerText.split(' ')[0] * +document.getElementById(inputID).value + ' vnđ'
            if (+document.getElementById(totalID).innerText.split(' ')[0] == 0) {
                document.getElementById(totalID).innerText = document.getElementById(priceID).innerText
            }
        })
    }
}
cong_tru('btn-num--add')
cong_tru('btn-num--apart')

function totalPrice() {
    document.querySelector('.cart__total-price').innerText = 0
    for (let i = 0; i < document.querySelectorAll('.form__input-num').length; i++) {
        let inputID = document.querySelectorAll('.form__input-num')[i].id
        let priceID = `table-product__container-item-price-${document.querySelectorAll('.form__input-num')[i].id.split('-')[2]}`
        let totalID = `table-product__container-item-total-${document.querySelectorAll('.form__input-num')[i].id.split('-')[2]}`

        document.querySelector('.cart__total-price').innerText = +document.querySelector('.cart__total-price').innerText + document.getElementById(priceID).innerText.split(' ')[0] * +document.getElementById(inputID).value

    }
    document.querySelector('.cart__total-price').innerText += ' vnđ'
}
setInterval(function() {
    for (let i = 0; i < document.querySelectorAll('.form__input-num').length; i++) {
        if (+document.querySelectorAll('.form__input-num')[i].value < 1) {
            document.querySelectorAll('.form__input-num')[i].value = 1
        }
    }
    for (let i = 0; i < document.querySelectorAll('.form__input-num').length; i++) {
        let inputID = document.querySelectorAll('.form__input-num')[i].id
        let priceID = `table-product__container-item-price-${document.querySelectorAll('.form__input-num')[i].id.split('-')[2]}`

        document.getElementById(totalID).innerText = +document.getElementById(priceID).innerText.split(' ')[0] * +document.getElementById(inputID).value + ' vnđ'

    }
    totalPrice()
}, 0)