documement.addeventListener("DOMContentLoaded", () => {
const loginForm = document.querySelector("login");
const createAccount = document.querySelector("createAccount");

document.querySelector("#linkCreateAccount").addEventListener("click", e => {
    e.preventDefault();
    loginForm.classList.add("form__hidden");
    createAccount.classlist.remove("form__hidden");
 });

    document.querySelector("#linkLogin").addEventListener("click", e => {
            e.preventDefault();

        loginForm.classList.remove("form__hidden");
        createAccount.classlist.add("form__hidden");
 });

});