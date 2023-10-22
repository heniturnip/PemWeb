
const DIMForm = document.getElementById('dimForm');


dimForm.addEventListener('submit', function (e) {
    e.preventDefault(); 

    const Nama = document.getElementById('nama').value;
    const NIM = document.getElementById('nim').value;
    const Program_studi = document.getElementById('prodi').value;
    const Jalur_Masuk = document.getElementById('JM').value;
    const Email = document.getElementById('email').value;
    const Password = document.getElementById('password').value;
    const Jenis_Kelamin = document.getElementById('JK').value;
    const Tanggal_Lahir = document.getElementById('TL').value;
    const Alamat = document.getElementById('alamat').value;

    const dim = {
        Nama,
        NIM,
        Program_studi,
        Jalur_Masuk,
        Email,
        Password,
        Jenis_Kelamin,
        Tanggal_Lahir,
        Alamat
    };


    const existingdim = JSON.parse(localStorage.getItem('dim')) || [];
    existingdim.push(dim);
    localStorage.setItem('dim', JSON.stringify(existingdim));
    dimForm.reset();

});
