let bola = document.querySelector('h1')
let before = document.styleSheets[1].cssRules[5] 
let after = document.styleSheets[1].cssRules[6] 
setTimeout(() => {
    before.style = `
    content: '';
    width: 50px;
    height: 50px;
    position: absolute;
    top: 0px;
    left: 0%;
    display: block;
    border-radius: 50%;
    background-color: var(--white--60);
    z-index: -1;
    animation: arrAba 2s infinite ease-in-out alternate both;
    `
    after.style = `
    content: '';
    width: 50px;
    height: 50px;
    position: absolute;
    bottom: 0%;
    right: 0%;
    display: block;
    border-radius: 50%;
    background-color: var(--white--60);
    z-index: -1;
    animation: arrAba 3s infinite ease-in-out alternate both;
    `
}, 1600);