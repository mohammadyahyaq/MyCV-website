function getEmail(y,z){
    var newY = "";
    var newZ = "";
    for(i=y.length-1;i>=0;i--){
        newY += y.charAt(i);
    }
    for(i=z.length-1;i>=0;i--){
        newZ += z.charAt(i);
    }
    var emails = newY + "@" + newZ;
    return "<a href = 'mailto:" + emails + "'>" + emails + "</a>";
}