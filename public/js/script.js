document.addEventListener('DOMContentLoaded', function() {
    fetch('/productos')
        .then(response => response.json())
        .then(data => {
            const tableBody = document.querySelector('#productos tbody');
            data.forEach(item => {
                const row = document.createElement('tr');
                const cellCategory = document.createElement('td');
                const cellProduct = document.createElement('td');
                
                cellCategory.textContent = item.categoria;
                cellProduct.textContent = item.producto;

                row.appendChild(cellCategory);
                row.appendChild(cellProduct);
                tableBody.appendChild(row);
            });
        })
        .catch(error => console.error('Error al cargar los productos:', error));
});
