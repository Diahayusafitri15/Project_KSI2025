// --- Data Tiruan (Mock Data) untuk Tampilan ---
const MOCK_DATA_PRODUK = [
    { 
        nama: "Souvenir Kayu Estetik", 
        harga: "Rp 50.000", 
        gambar: "https://via.placeholder.com/250x180?text=Souvenir+1"
    },
    { 
        nama: "Gantungan Kunci Kulit", 
        harga: "Rp 25.000", 
        gambar: "https://via.placeholder.com/250x180?text=Souvenir+2"
    },
    { 
        nama: "Vas Keramik Mini", 
        harga: "Rp 75.000", 
        gambar: "https://via.placeholder.com/250x180?text=Souvenir+3"
    }
];

// --- Logika untuk Menampilkan Produk (Menggunakan Mock Data) ---

function renderMockProducts() {
    const productList = document.getElementById('product-list');
    
    // Pastikan elemen ditemukan
    if (!productList) return; 

    // Loop melalui data tiruan
    MOCK_DATA_PRODUK.forEach(product => {
        // Buat elemen card produk
        const card = document.createElement('div');
        card.className = 'product-card';
        
        // Isi konten card dengan data tiruan
        card.innerHTML = `
            <img src="${product.gambar}" alt="${product.nama}">
            <h3>${product.nama}</h3>
            <p><strong>${product.harga}</strong></p>
            <button>Lihat Detail</button>
        `;
        
        productList.appendChild(card);
    });
}

// Jalankan fungsi saat dokumen selesai dimuat
document.addEventListener('DOMContentLoaded', renderMockProducts);