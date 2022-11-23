function reload(el, url){

    fetch(url, )
    .then(response => response.json())
    .then(data => {
        el.innerHTML = json2HTML(data);
    })
    .catch(error => {
        //
    });

    // scroll2Bottom();

    setTimeout(function(){reload(el,url)}, 1000);
}

function json2HTML(json){
    let html = '';

    for (let i = 0; i < json.length; i++) {
        
        let htmlParts = '<div class="m-3 p-3 float-start">'
        // + '<p>'
        + json[i].comment
        // + '</p>'
        + '</div>';

        html += htmlParts;
    }

    return html;

}

function scroll2Bottom(){
    let element = document.documentElement;
    let bottom = element.scrollHeight - element.clientHeight;
    window.scroll(0, bottom);
}