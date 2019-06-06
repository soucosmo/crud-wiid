window.onload = function(){
    let state1 = document.querySelector('#state')

    state1.addEventListener('change', (data) => {
        if (data.target.value) {
            fetch('/state/'+data.target.value)
            .then((re) => re.json())
            .then((data) => {
                let option = ''

                data.forEach(function(info) {
                    option += `<option value="${info.id}">${info.name}</option>`
                })

                document.querySelector('#city option').remove()

                document.querySelector('#city').innerHTML = option

            })
        }
    })
}
