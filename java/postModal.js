const wrapper = document.querySelector(".wrapper"),
    // textarea = wrapper.querySelector(".editable")
    textarea = wrapper.querySelector("textarea"),
    readonlyInput = wrapper.querySelector(".readonly"),
    placeholder = wrapper.querySelector(".placeholder"),
    counter = wrapper.querySelector(".counter"),
    buttonSend = wrapper.querySelector(".button-send");

placeholder.onfocus = () => {
    placeholder.style.color = "#c5ccd3";
}
placeholder.onblur = () => {
    placeholder.style.color = "#98a5b1";
}

textarea.onkeyup = (e) => {
    let element = e.target;
    validated(element);
}
textarea.onkeypress = (e) => {
    let element = e.target;
    validated(element);
    // placeholder.classList.remove("placeholder");
    textarea.classList.add("innertext")
    placeholder.style.color = "#c5ccd3";
}

function validated(element) {
    let text;
    let maxLength = 150;
    let currentlength = element.innerText.length;

    if (currentlength <= 0) {
        placeholder.style.display = "block";
        counter.style.display = "none";
        // buttonSend.classList.remove("active");
    } else {
        placeholder.style.display = "none";
        counter.style.display = "block";
        buttonSend.classList.add("active");
    }

    counter.innerText = maxLength - currentlength;


    if (currentlength > maxLength) {
        let overText = element.innerText.substr(maxLength); //extracting over texts
        overText = `<span class="highlight">${overText}</span>`; //creating new span and passing over texts
        text = element.innerText.substr(0, maxLength) + overText; //passing overText value in textTag variable
        readonlyInput.style.zIndex = "1";
        counter.style.color = "red";
        buttonSend.classList.remove("active");
    } else {
        readonlyInput.style.zIndex = "-1";
        counter.style.color = "#333";
    }
    readonlyInput.innerHTML = text; //replacing innerHTML of readonly div with textTag value
}