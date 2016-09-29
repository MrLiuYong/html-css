window.onload = function () {
    var nav = document.getElementsByClassName("nav")[0];
    var url = document.URL;
    var startpos = url.lastIndexOf('/');
    var endpos = url.lastIndexOf('.');
    var filename = url.substring(startpos+1,endpos);
    //var ul = nav.firstElementChild;
    //var li = ul.children;
    //var a = li[filename-1].children[0];

    var a = document.getElementById(filename);

    a.className = "selected";
    a.style.color = "#ffffff";
}

