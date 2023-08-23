function swapColumns(tableId, ) {
    let table = document.getElementById(tableId);
    const columnIndex1 = 1;
    const columnIndex2 = 2;

    for (let i = 0; i < table.rows.length; i++) {
        let row = table.rows[i];
        let firstCell = row.cells[columnIndex1];
        let secondCell = row.cells[columnIndex2];
        let containerCell = firstCell.innerHTML;

        firstCell.innerHTML = secondCell.innerHTML;
        secondCell.innerHTML = containerCell;
    }
}

document.getElementById('MethodInp').addEventListener('change', function (event) {
    let selectedValue = document.getElementById('MethodInp').value;
    if (selectedValue === '1') {
        document.getElementById('EmailDiv').style.display = 'block';
        document.getElementById('PhoneDiv').style.display = 'none';
    } else if (selectedValue === '2') {
        document.getElementById('EmailDiv').style.display = 'none';
        document.getElementById('PhoneDiv').style.display = 'block';
    } else {
        alert("kindly choose your method!");
    }
});
document.getElementById('test_form').addEventListener('submit', function (event) {
    event.preventDefault();
    const formData = new FormData(event.target);
    const formProps = Object.fromEntries(formData);
    console.log(formProps.method);
    if (formProps.method == 1) {
        if (formProps.email === "" || formProps.email === null) {
            alert("kindly enter your email address!");
            return;
        }
    } else if (formProps.method == 2) {
        if (formProps.phone === "" || formProps.phone === null) {
            alert("kindly enter your phone!");
            return;
        }

    } else {
        alert("kindly choose your method before submitting!");
        return;
    }
    document.getElementById('test_form').submit();
});