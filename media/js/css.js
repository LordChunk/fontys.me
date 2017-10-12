//Loading css asynchronously
loadCss("https://fonts.googleapis.com/icon?family=Material+Icons");
loadCss("https://fonts.googleapis.com/css?family=Roboto");
loadCss("/media/css/main.css");
loadCss("/media/css/" + cssFile);

function loadCss(url) {
    var link = document.createElement("link");
    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = url;
    document.getElementsByTagName("head")[0].appendChild(link);
}
