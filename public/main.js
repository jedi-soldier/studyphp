var servResponse = document.querySelector("#resulti");

document.forms.calc.onsubmit = function (e){
    e.preventDefault();
    var value1 = document.forms.calc.value1.value;
    value1 = encodeURIComponent(value1);
    var value2 = document.forms.calc.value2.value;
    value2 = encodeURIComponent(value2);
    var xhr = new XMLHttpRequest();
    var operation = document.forms.calc.operation.value;
    operation = encodeURIComponent(operation);
    xhr.open('POST', 'calc.php');
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.onreadystatechange = function () {
        if(xhr.readyState === 4 && xhr.status === 200) {
            servResponse.textContent = xhr.response;
        }
    }

    xhr.send(operation);
}