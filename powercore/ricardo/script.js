function myFunction() {
    var person = prompt("Please enter your name", "Name here...");
    if (person != null) {
      document.getElementById("demo").innerHTML =
      "Hello, " + person + "! How's it going today?";
    }
  }