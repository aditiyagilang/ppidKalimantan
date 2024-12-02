
@extends('public.navbar')
@section('content')



    <!-- Main News Slider Start -->
    <div class="container-fluid mt-5 pt-3">
        <div class="container">
            <div class="row">
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-12">
                            <div class="section-title">
                                <h4 class="m-0 text-uppercase font-weight-bold">Gallery Foto</h4>
                               
                            </div>
                        </div>
                        @foreach($photos as $photo)
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <!-- Ganti src dengan data dari database -->
                                    <img class="img-fluid w-100" 
                                        src="{{ asset($photo->link) }}" 
                                        alt="{{ $photo->title }}" 
                                        style="object-fit: cover;" 
                                        onerror="this.onerror=null; this.src='https://www.google.com/url?sa=i&url=https%3A%2F%2Fwww.eclosio.ong%2Fen%2Fhomepage%2Fdefault%2F&psig=AOvVaw01REuUZyzFKsXVErP4Br7o&ust=1733240167710000&source=images&cd=vfe&opi=89978449&ved=0CBQQjRxqFwoTCOjz6_e0iYoDFQAAAAAdAAAAABAE';">

                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <!-- Format tanggal -->
                                            <a class="text-body" href=""><small>{{ \Carbon\Carbon::parse($photo->date)->format('d M Y') }}</small></a>
                                        </div>
                                        <!-- Judul dan deskripsi -->
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">{{ $photo->title }}</a>
                                        <p class="m-0">{{ $photo->description }}</p>
                                    </div>
                                </div>
                            </div>
                            @endforeach

                        <div class="col-lg-12 mb-3">
                            <a href=""><img class="img-fluid w-100" src="img/ads-728x90.png" alt=""></a>
                        </div>
                        
                       
                       
                        
                        
                     
                    </div>
                </div>
                
                <div class="col-lg-4">
                    <!-- Social Follow Start -->
                    
                    <!-- Ads End -->

                    <!-- Popular News Start -->
                    <div class="mb-3">
                        <div class="section-title mb-0">
                            <h4 class="m-0 text-uppercase font-weight-bold">Trending News</h4>
                        </div>
                        <div id="news-container"></div>

                    </div>

                    <!-- Popular News End -->

                    <!-- Tags End -->
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary btn-square back-to-top"><i class="fa fa-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    
    @endsection

    @push('scripts')
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

                // Loop untuk menampilkan setiap berita
                data.articles.forEach((article) => {
                    const newsItem = document.createElement('div');
                    newsItem.classList.add('news-item');

                    // Thumbnail Gambar
                    const img = document.createElement('img');
                    img.classList.add('img-fluid');
                    img.src = article.urlToImage ? article.urlToImage : 'img/news-110x110-1.jpg'; // Jika tidak ada gambar, menggunakan default
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

                    // Menambahkan item berita ke kontainer
                    newsContainer.appendChild(newsItem);
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

