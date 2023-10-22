const apiUrl = 'https://65358159c620ba9358ec8632.mockapi.io/user';
const tabelform = document.querySelector('.tabel.form');

async function fetchdim() {
    let dim = [];
    const storeddim = localStorage.getItem('dim'); 

    if (storeddim) {

        dim = JSON.parse(storeddim);
    } else {
        try {
            const response = await axios.get("https://dummyjson.com/DIM");
            const data = await response.data
            const dim = await data.dim
            const dimFiltered = await dim.map(dim => {
                return {
                    Nama: dim.nama,
                    NIM: dim.nim,
                    Program_Studi: dim.prodi,
                    Jalur_Masuk: dim.JM,
                    Email: dim.email,
                    Password: dim.password,
                    Jenis_Kelamin: dim.JK,
                    Tanggal_Lahir: dim.TL,
                    Alamat: dim.alamat
                }
            });

            localStorage.setItem('dim', JSON.stringify(dimFiltered));
        } catch (error) {
            console.error('Error fetching data:', error);
        }
    }
    return dim;
}

async function PopulateTable() {
    try {
        const dimsFiltered = await fetchdim();
        const table = document.createElement('table');
        const thead = document.createElement('thead');
        const tbody = document.createElement('tbody');

        const headerRow = document.createElement('tr');
        for (const key in dimsFiltered[0]) {
            const th = document.createElement('th');
            th.textContent = key;
            headerRow.appendChild(th);
        }
        thead.appendChild(headerRow);

        dimsFiltered.forEach(item => {
            const row = document.createElement('tr');
            for (const key in item) {
                const cell = document.createElement('td');
                cell.textContent = item[key];
                row.appendChild(cell);
            }
            tbody.appendChild(row);
        });

        table.appendChild(thead);
        table.appendChild(tbody);

        tabelform.innerHTML = '';
        tabelform.appendChild(table);
    } catch (error) {
        console.error('Error:', error);
    }
}


PopulateTable();
