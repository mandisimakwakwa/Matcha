//Debug
function ft_ajaxControllerDebugger() {

    console.log("Ajax Controller On");
}

function ft_sendHTTPRequest(httpRequestAction, httpPostActionParams, getFormParams, handler, switchNode) {

    var xhttpRequest = new XMLHttpRequest();

    xhttpRequest.open(httpRequestAction, handler + getFormParams, true);

    xhttpRequest.onreadystatechange = function () {

        if (this.readyState === 4 && this.status === 200) {

            var response = xhttpRequest.response;

            ft_responseHandler(response, switchNode)
        }
    };

    if (getFormParams !== "")
        xhttpRequest.send();
    else
        xhttpRequest.send(JSON.stringify(httpPostActionParams));
}