window.onload = function () {
    fetch('/codviews/rastreo/api')
        .then(function (response) {
            return response.json();
        })
        .then(function (json) {
        })
        .catch(function (error) {
            console.log('Request failed', error)
        });
}
