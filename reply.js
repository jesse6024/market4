function myFunction(){
    var containerDiv = document.getElementById("container1");
    var commentDiv = document.createElement("DIV");
    commentDiv.className = "commentDiv";
    var textArea = document.createElement("TEXTAREA");
    textArea.className = "textArea";
    textArea.id = "textArea1";
    var sendButton = document.createElement("BUTTON");
    sendButton.className = "sendButton";
     sendButton.className = "button";
     sendButton.id = "sendButton";
    var sendButtonText = document.createTextNode("POST");
    sendButton.appendChild(sendButtonText);
    var cancelButton = document.createElement("BUTTON");  
    cancelButton.className = "cancelButton";
     cancelButton.className = "button";
     cancelButton.id = "cancelButton1";
    var cancelButtonText = document.createTextNode("CANCEL");
    cancelButton.appendChild(cancelButtonText);
    cancelButton.id = "cancelButton1";
    containerDiv.appendChild(commentDiv);
    commentDiv.appendChild(textArea);
    commentDiv.appendChild(sendButton);
    commentDiv.appendChild(cancelButton);
    var replyButton = document.getElementById("reply1");
    replyButton.style.visibility = "hidden";
     
     // console.log("works");
   }