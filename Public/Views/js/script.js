let clientButton = document.getElementById("response");
let serverButton = document.getElementById("send");

clientButton.addEventListener('click', (e) => {
    e.preventDefault();
    action("/App/Server/Client.php");
});

serverButton.addEventListener('click', (e) => {
    e.preventDefault();
    action("/App/Server/Client.php");
});


function action(caminho){
    const data = new FormData( document.getElementById("form") );
    const msg =  document.getElementById("box-message");
    const box =  document.getElementById("boxes");
    let request = new XMLHttpRequest();

    request.open("POST", caminho, true);
    
    request.onreadystatechange = () => {
        if (request.readyState === 4) {
            if (request.status === 200) {
                console.log("Success");
                
                let append = box.cloneNode(true);
                box.append(append);
                append.innerHTML = request.responseText;
                document.getElementById('message').value = "";
            } else {
                alert("Error");
            }
        }
    }
    
    request.send(data);

}