const registerModal = document.getElementById('registerModal');
const registerButton = document.getElementById('registerButton')

registerButton.addEventListener("click", e => {
    registerModal.classList.toggle('hidden')
    console.log('button click')
})