async function start() {
    // url запроса
    let url = 'https://jsonplaceholder.typicode.com/users/';
    // отправляем запрос и получаем ответ в переменную response
    let response = await fetch(url);
    // читаем ответ в формате JSON
    let users = await response.json();
    console.log(users);

    let sectTag = document.getElementById("users");
    let htmlLine = "";

    users.forEach(elem => {
        htmlLine += `<h2> ${elem.name} </h2>\n`;
    });
    sectTag.innerHTML = htmlLine;
}

async function userSubmit(event) {
    // чтобы не обновлялась страница
    event.preventDefault();
    // url адрес
    let url = 'https://jsonplaceholder.typicode.com/users/';
    // получить содержимое первого input 
    let name = document.getElementsByTagName("input")[0].value;
    // отправляем запрос
    let response = await fetch(url,
        {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json'
            },
            body: JSON.stringify({name}) // преобразование в тип JSON
        });
        // получаем ответ
        let result = await response.json();
        console.log(response.status);
        console.log(result);
    }
    
    
    let myForm = document.getElementById("form1");
    myForm.addEventListener('submit', userSubmit)
    
    start();