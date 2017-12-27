// slick initialize
$(document).ready(function() {
    $('.your-class').slick();
});
// end of slick

const listItems = document.querySelectorAll('#advancing-list li');
const selectedBtn = document.getElementById('select-button');
let selectedText = null;

// set click to drop-down elements
listItems.forEach(item => {
    item.addEventListener('click', e => {
        selectedText = e.target.textContent;
        changeSelectedContent(selectedText);
    });
});

document.getElementById('btn-help').addEventListener('click', () => {
    sendToEmail(null, null, null, selectedText);
});

function changeSelectedContent(content) {
    selectedBtn.innerHTML = content;
}

function sendToEmail(name, phoneNumber, autoType, selectedAccessory) {
    console.log('selectedAccessory', selectedAccessory);
    // send(name, phoneNumber, autoType, selectedAccessory); for example
}
