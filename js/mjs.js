 var maxBreakpoint = 690; 
    var targetID = 'navigation';     
    var n = document.getElementById(targetID);
        n.classList.add('is-closed');
       function navi() {
            if (window.matchMedia("(max-width:" + maxBreakpoint + "px)").matches && document.getElementById("toggle-button") == undefined) {
        n.insertAdjacentHTML('afterBegin', '<button id="toggle-button" aria-label="open/close navigation"></button>');
        t = document.getElementById("toggle-button");
        t.onclick = function () {
          n.classList.toggle('is-closed');  } }
            var minBreakpoint = maxBreakpoint + 1;
      if (window.matchMedia("(min-width: " + minBreakpoint + "px)").matches && document.getElementById("toggle-button")) {
        document.getElementById("toggle-button").outerHTML = ""; }}
    navi();
    window.addEventListener('resize', navi);