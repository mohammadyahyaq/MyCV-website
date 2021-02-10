function setPicture(sign) {
      var expandImg = document.getElementsByClassName("expandedImg")[0];
      var id = expandImg.id;
      if(id == ''){
            id = 'a';
            expandImg.src = document.getElementById(id).src;
            expandImg.id = id;
      } 
      if(sign == '+'){
            if(id !='k'){
                  id = String.fromCharCode(id.charCodeAt(0) + 1);
                  expandImg.src = document.getElementById(id).src;
                  expandImg.id = id;
            }
      }
      if(sign == '-'){
            if(id !='a'){
                  id = String.fromCharCode(id.charCodeAt(0) - 1);
                  expandImg.src = document.getElementById(id).src;
                  expandImg.id = id;
            }
      }
}