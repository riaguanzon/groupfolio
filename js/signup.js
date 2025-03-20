const adminCheckbox = document.querySelector('#is_admin');
const staffCheckbox = document.querySelector('#is_staff');

adminCheckbox.addEventListener('change', () => {
    if (adminCheckbox.checked) {
        staffCheckbox.checked = true;
    }
});

staffCheckbox.addEventListener('change', () => {
    if (adminCheckbox.checked) {
        staffCheckbox.checked = true;
    }
});
