//Loading css asynchronously
loadCss("https://fonts.googleapis.com/icon?family=Material+Icons");
loadCss("/media/css/main.css");
loadCss("/media/css/" + cssFile);
loadCss("https://fonts.googleapis.com/css?family=Roboto:300,400,500");

function loadCss(url) {
    var link = document.createElement("link");
    link.type = "text/css";
    link.rel = "stylesheet";
    link.href = url;
    document.getElementsByTagName("head")[0].appendChild(link);
}
