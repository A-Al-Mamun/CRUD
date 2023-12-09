

let emp = document.getElementById('emp');
let pro = document.getElementById('pro');

emp.addEventListener('click', () => {
    let empTable = document.getElementsByClassName('emp-table')[0];

    if(empTable.style.display == 'none'){
        empTable.style.display = 'block';
        emp.style.textDecoration = 'underline';
    }else{
        empTable.style.display = 'none';
        emp.style.textDecoration = 'none';
    }
})

pro.addEventListener('click', () => {
    let proTable = document.getElementsByClassName('pro-table')[0];

    if(proTable.style.display == 'block'){
        proTable.style.display = 'none';
        pro.style.textDecoration = 'none';
    }else{
        proTable.style.display = 'block';
        pro.style.textDecoration = 'underline';
    }
})




// Add Section

// let emp = document.getElementById('emp');
// let pro = document.getElementById('pro');

emp.addEventListener('click', () => {
    let empForm = document.getElementsByClassName('emp-form')[0];

    if(empForm.style.display == 'none'){
        empForm.style.display = 'block';
        emp.style.textDecoration = 'underline';
    }else{
        empForm.style.display = 'none';
        emp.style.textDecoration = 'none';
    }
})

pro.addEventListener('click', () => {
    let proForm = document.getElementsByClassName('pro-form')[0];

    if(proForm.style.display == 'block'){
        proForm.style.display = 'none';
        pro.style.textDecoration = 'none';
    }else{
        proForm.style.display = 'block';
        pro.style.textDecoration = 'underline';
    }
})