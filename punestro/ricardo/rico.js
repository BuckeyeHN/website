

function myFunction(){
    var device = prompt("Do you have a device?", "Device Here...");
    if (device != null) {
        document.getElementById("device").innerHTML = 
        "That's great! If you need your " + device + " checked out, let us know.";
    }
}