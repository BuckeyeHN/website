function myMove(); {
    var c = document.getElementById("link");
    var ctx = c.getContext("2d");
    ctx.rotate(20 * Math.PI / 180);
    ctx.fillRect(50, 20, 100, 50);
}