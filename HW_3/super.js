function getUserName(){
    let userName = prompt("Введи имя, подозреваемый!");
    return userName;
}

function printUserName(userName){
    let outputTag = document.getElementById("helloUser");
    outputTag.textContent = `Мы и так знали что ты, ${userName} !!!`;
    outputTag.classList.add("redAlert");
    document.getElementById("hidden1").style.display = "block";
}

function reset(){
    let outputTag = document.getElementById("helloUser")
    outputTag.textContent = `До свидания`;
    outputTag.classList.remove("redAlert");
    document.getElementById("hidden1").style.display = "none";
    document.getElementById("business").classList.remove("todoDone");
    document.getElementById("hidden1").style.borderColor = "red";
    document.getElementById("result").textContent = "";
}

function askAge(){
    let age = parseInt(prompt(`Сообщи свой настоящий возраст :)`));
    if (age < 18) { alert("Нас не обманешь, тебе 45"); }
    else if (age >= 60){ alert("За старость срок скостить не получится"); }
    else if (age == 45){ alert("Мы это и так знали"); }
    else { alert("За вами выехали, ждите"); }

}

function allDone(){
    document.getElementById("business").classList.add("todoDone");
    document.getElementById("hidden1").style.borderColor = "green";
    document.getElementById("result").textContent = "Проверка пройдена, до следующего раза";
}

function allUndone(){
    document.getElementById("business").classList.remove("todoDone");
    document.getElementById("hidden1").style.borderColor = "red";
    document.getElementById("result").textContent = "Осталось 5 минут!";
}

