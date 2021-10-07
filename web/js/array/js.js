document.getElementById('inPower').addEventListener('input', function (e) {
    changeLink(
        document.querySelector("body > main > div > p:nth-child(5) > a"),
        e, 3
    )
});
document.getElementById('dimension').addEventListener('input', function (e) {
    changeLink(
        document.querySelector("body > main > div > p:nth-child(3) > a"),
        e, 3
    )
});
document.getElementById('min').addEventListener('input', function (e) {
    changeLink(
        document.querySelector("body > main > div > p:nth-child(3) > a"),
        e, 4
    )
});
document.getElementById('max').addEventListener('input', function (e) {
    changeLink(
        document.querySelector("body > main > div > p:nth-child(3) > a"),
        e, 5
    )
});

function changeLink(button, event, index) {
    let link = button.getAttribute('href');
    let arr = link.split('/');
    if (index === 'last') {
        index = arr.length - 1;
    } else if (index === 'first') {
        index = 0;
    }
    // console.log(arr);
    arr[index] = event.target.value;
    link = arr.join('/');
    button.setAttribute('href', link);
}
