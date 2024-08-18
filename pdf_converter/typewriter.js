const texts = [];

let textIndex = 0;
let charIndex = 0;

// Function to simulate typing effect
function type() {
    const textElement = document.getElementById('text');
    textElement.textContent = texts[textIndex].slice(0, charIndex);
    charIndex++;

    // Check if the entire text has been typed
    if (charIndex > texts[textIndex].length) {

        setTimeout(() => {
            charIndex = 0;
            textIndex = 1 - textIndex;
            type();
        }, 1000);
    } else {
        setTimeout(type, 150);
    }
}

setTimeout(type, 1000);

