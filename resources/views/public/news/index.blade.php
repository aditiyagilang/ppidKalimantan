
@extends('public.navbar')
@section('content')



    <!-- Main News Slider Start -->
    <div class="container-fluid">
    <div class="row">
        <div class="col-lg-7 px-0">
            <div class="owl-carousel main-carousel position-relative">
                <!-- Berita utama akan diisi oleh JavaScript -->
            </div>
        </div>
        <div class="col-lg-5 px-0">
            <div class="row mx-0">
                <!-- Berita kecil akan diisi oleh JavaScript -->
            </div>
        </div>
    </div>
</div>

<div class="container-fluid bg-dark py-3 mb-3">
    <div class="container">
        <div class="row align-items-center bg-dark">
            <div class="col-12">
                <div class="d-flex justify-content-between">
                    <div class="bg-primary text-dark text-center font-weight-medium py-2" style="width: 170px;">Breaking News</div>
                    <div class="owl-carousel tranding-carousel position-relative d-inline-flex align-items-center ml-3"
                        style="width: calc(100% - 170px); padding-right: 90px;">
                        <!-- Breaking News akan diisi oleh JavaScript -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    <!-- Breaking News End -->


    <!-- Featured News Slider Start -->
    <!-- <div class="container-fluid pt-5 mb-3">
    <div class="container">
        <div class="section-title">
            <h4 class="m-0 text-uppercase font-weight-bold">Featured News</h4>
        </div>
        <div id="news-carousel" class="owl-carousel news-carousel carousel-item-4 position-relative">
            <!-- Berita akan ditambahkan di sini oleh JavaScript -->
        </div>
    </div>
</div> -->
    <!-- Featured News Slider End -->


    <!-- News With Sidebar Start -->
    <div class="container">
        <h1 class="my-4 text-center">Latest News</h1>
        <div id="news-container"></div>
    </div>
    <!-- News With Sidebar End -->


    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    
    @endsection

    @push('scripts')
    <script>
    document.addEventListener('DOMContentLoaded', function () {
        const apiKey = 'e9a061f5446641d49dfa04619400cf3e';
        const apiUrl = `https://newsapi.org/v2/everything?q=tesla&from=2024-11-02&sortBy=publishedAt&apiKey=${apiKey}`;
        
        // Fetch data dari API
        fetch(apiUrl)
            .then(response => response.json())
            .then(data => {
                if (data.articles) {
                    // Render berita ke dalam layout
                    renderNews(data.articles);
                }
            })
            .catch(error => console.error('Error fetching news:', error));

        function renderNews(articles) {
            // Slider Utama
            const mainCarousel = document.querySelector('.main-carousel');
            mainCarousel.innerHTML = articles.slice(0, 1).map(article => `
                <div class="position-relative overflow-hidden" style="height: 500px;">
                    <img class="img-fluid h-100" src="${article.urlToImage || 'https://via.placeholder.com/800x500'}" style="object-fit: cover;">
                    <div class="overlay">
                        <div class="mb-2">
                            <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">${article.source.name}</a>
                            <a class="text-white" href="${article.url}" target="_blank">${new Date(article.publishedAt).toLocaleDateString()}</a>
                        </div>
                        <a class="h2 m-0 text-white text-uppercase font-weight-bold" href="${article.url}" target="_blank">${article.title}</a>
                    </div>
                </div>
            `).join('');

            // Berita Kecil (Sidebar)
            const smallNews = document.querySelector('.row.mx-0');
            smallNews.innerHTML = articles.slice(3, 7).map(article => `
                <div class="col-md-6 px-0">
                    <div class="position-relative overflow-hidden" style="height: 250px;">
                        <img class="img-fluid w-100 h-100" src="${article.urlToImage || 'https://via.placeholder.com/700x435'}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="">${article.source.name}</a>
                                <a class="text-white" href="${article.url}" target="_blank"><small>${new Date(article.publishedAt).toLocaleDateString()}</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="${article.url}" target="_blank">${article.title}</a>
                        </div>
                    </div>
                </div>
            `).join('');

            // Breaking News
            const trendingCarousel = document.querySelector('.tranding-carousel');
            trendingCarousel.innerHTML = articles.slice(0, 5).map(article => `
                <div class="text-truncate">
                    <a class="text-white text-uppercase font-weight-semi-bold" href="${article.url}" target="_blank">${article.title}</a>
                </div>
            `).join('');
        }
    });
</script>
<script>
    const apiKey = 'e9a061f5446641d49dfa04619400cf3e';
    const apiUrl = `https://newsapi.org/v2/everything?q=tesla&from=2024-11-02&sortBy=publishedAt&apiKey=${apiKey}`;

    // Mengambil data berita dari API
    fetch(apiUrl)
        .then(response => response.json())
        .then(data => {
            // Ambil berita dari data API
            const articles = data.articles;  // Misalnya data.articles berisi daftar berita

            // Dapatkan elemen carousel
            const newsCarousel = document.getElementById('news-carousel');

            // Loop untuk setiap artikel dan masukkan ke dalam carousel
            articles.forEach(article => {
                const articleHTML = `
                    <div class="position-relative overflow-hidden" style="height: 300px;">
                        <img class="img-fluid h-100" src="${article.urlToImage || 'https://via.placeholder.com/700x435'}" style="object-fit: cover;">
                        <div class="overlay">
                            <div class="mb-2">
                                <a class="badge badge-primary text-uppercase font-weight-semi-bold p-2 mr-2" href="${article.source.name}">${article.source.name}</a>
                                <a class="text-white" href="${article.url}" target="_blank"><small>${new Date(article.publishedAt).toLocaleDateString()}</small></a>
                            </div>
                            <a class="h6 m-0 text-white text-uppercase font-weight-semi-bold" href="${article.url}" target="_blank">${article.title}</a>
                        </div>
                    </div>
                `;
                // Tambahkan berita ke carousel
                newsCarousel.innerHTML += articleHTML;
            });

            // Jika menggunakan Owl Carousel, inisialisasi setelah data dimuat
            $(document).ready(function(){
                $("#news-carousel").owlCarousel({
                    items: 1, // Menampilkan 1 berita per slide
                    loop: true,
                    autoplay: true,
                    autoplayTimeout: 5000, // Mengganti berita setiap 5 detik
                    autoplayHoverPause: true, // Pause saat hover
                    smartSpeed: 1000, // Kecepatan transisi
                    nav: false, // Menonaktifkan tombol navigasi jika tidak diperlukan
                    dots: true, // Menampilkan indikator di bawah carousel
                });
            });
        })
        .catch(error => {
            console.error("Error fetching news data:", error);
        });
</script>
<script>
  document.addEventListener("DOMContentLoaded", function () {
    const apiKey = "e9a061f5446641d49dfa04619400cf3e"; // API key Anda
    const apiUrl = `https://newsapi.org/v2/everything?q=tesla&from=2024-11-02&sortBy=publishedAt&apiKey=${apiKey}`;

    // Fungsi untuk mengambil data berita
    async function fetchNews() {
    try {
        const response = await fetch(apiUrl);
        const data = await response.json();

        if (data.status === 'ok') {
            const newsContainer = document.getElementById('news-container');
            newsContainer.innerHTML = ''; // Mengosongkan kontainer sebelum menambahkan berita baru

            // Membuat baris baru
            let row;

            // Loop untuk menampilkan setiap berita
            data.articles.forEach((article, index) => {
                // Jika index adalah kelipatan dari 3, buat baris baru
                if (index % 3 === 0) {
                    row = document.createElement('div');
                    row.classList.add('row');
                    newsContainer.appendChild(row);
                }

                // Membuat item berita dalam kolom
                const newsItem = document.createElement('div');
                newsItem.classList.add('col-md-4', 'mb-4'); // 3 kolom per baris

                // Thumbnail Gambar
                const img = document.createElement('img');
                img.classList.add('img-fluid');
                img.src = article.urlToImage ? article.urlToImage : 'img/news-110x110-1.jpg'; // Gambar default jika tidak ada gambar
                img.alt = 'Thumbnail Berita';
                newsItem.appendChild(img);

                // Konten Berita
                const contentDiv = document.createElement('div');
                contentDiv.classList.add('content');

                // Tanggal dan Kategori
                const dateDiv = document.createElement('div');
                dateDiv.classList.add('date');
                dateDiv.innerHTML = `<small>${new Date(article.publishedAt).toLocaleDateString()}</small>`;
                contentDiv.appendChild(dateDiv);

                // Judul Berita
                const title = document.createElement('a');
                title.classList.add('title');
                title.href = article.url; // Link ke artikel penuh
                title.target = '_blank';
                title.textContent = article.title;
                contentDiv.appendChild(title);

                // Menambahkan konten ke dalam item berita
                newsItem.appendChild(contentDiv);

                // Menambahkan item berita ke baris
                row.appendChild(newsItem);
            });
        } else {
            console.error('Error fetching news:', data.message);
        }
    } catch (error) {
        console.error('Error fetching news:', error);
    }
}

    // Panggil fungsi untuk mengambil berita
    fetchNews();
});
</script>


    @endpush
