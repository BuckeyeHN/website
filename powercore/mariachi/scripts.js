
 
opacity=0 //opacity of image
var increase=1 //increase opacity indicator
var decrease=0 //decrease opacity indicator
 
function fade(){
if (opacity<0.6&&increase)
opacity+=0.05
else{
increase=0
decrease=1
}
 
if (opacity>0.3&&decrease)
opacity-=0.05
else{
increase=1
decrease=0
}
 
document.getElementById("test").style.opacity=opacity
}
 
setInterval("fade()",100)
