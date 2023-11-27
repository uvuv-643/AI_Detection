const TEXT_LIMIT = 5000
const GOOD_TEXT_THRESHOLD = 100

let text = document.querySelector('#text')
let url = document.querySelector('#url')
let button = document.querySelector('.detector__content__submit__button')
let count = document.querySelector('.detector__content__submit__count span')

let textValue = text.value
let urlValue = url.value

const isCorrectUrl = (url) => {
    try {
        new URL(url)
        return true;
    } catch (_) {
        return false
    }
}

const onChangeTextOrUrlLength = () => {
    count.innerHTML = textValue.length
    if (textValue.length > GOOD_TEXT_THRESHOLD && isCorrectUrl(urlValue)) {
        button.classList.add('_active')
    } else {
        button.classList.remove('_active')
    }
}

text.addEventListener('input', function (event) {
    if (text.value.length > TEXT_LIMIT) {
        text.value = text.value.substring(0, TEXT_LIMIT)
    }
    textValue = text.value
    onChangeTextOrUrlLength()
})

url.addEventListener('input', function (event) {
    urlValue = url.value
    onChangeTextOrUrlLength()
})

onChangeTextOrUrlLength()