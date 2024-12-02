
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
                                <h4 class="m-0 text-uppercase font-weight-bold">Gallery Video</h4>
                               
                            </div>
                        </div>
                       
                        @foreach($videos as $video)
                            <div class="col-lg-6">
                                <div class="position-relative mb-3">
                                    <!-- Menampilkan Thumbnail Video -->
                                    @php
                                        // Mengambil ID video dari link YouTube
                                        preg_match("/(?:https?:\/\/(?:www\.)?youtube\.com\/(?:[^\/]+\/\S+\/|(?:v|e(?:mbed)?)\/|\S*\?v=)|https?:\/\/(?:www\.)?youtu\.be\/)([a-zA-Z0-9_-]{11})/", $video->link, $matches);
                                        $videoId = $matches[1] ?? ''; // Menyimpan ID video YouTube
                                    @endphp

                                    @if($videoId)
                                        <img src="https://img.youtube.com/vi/{{ $videoId }}/maxresdefault.jpg" alt="Video Thumbnail" class="img-fluid" data-bs-toggle="modal" data-bs-target="#videoModal{{ $video->id }}">

                                        <!-- Modal untuk Video -->
                                        <div class="modal fade" id="videoModal{{ $video->id }}" tabindex="-1" aria-labelledby="videoModalLabel{{ $video->id }}" aria-hidden="true">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title" id="videoModalLabel{{ $video->id }}">Video: {{ $video->title }}</h5>
                                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                    </div>
                                                    <div class="modal-body">
                                                        <!-- Menampilkan Video di Modal -->
                                                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/{{ $videoId }}" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Tombol untuk menuju YouTube -->
                                        <a href="https://www.youtube.com/watch?v={{ $videoId }}" target="_blank" class="btn btn-primary mt-2">Tonton di YouTube</a>
                                    @else
                                        <p>Video tidak tersedia.</p>
                                    @endif

                                    <div class="bg-white border border-top-0 p-4">
                                        <div class="mb-2">
                                            <!-- Format tanggal -->
                                            <a class="text-body" href=""><small>{{ \Carbon\Carbon::parse($video->date)->format('d M Y') }}</small></a>
                                        </div>
                                        <!-- Judul dan deskripsi -->
                                        <a class="h4 d-block mb-3 text-secondary text-uppercase font-weight-bold" href="">{{ $video->title }}</a>
                                        <p class="m-0">{{ $video->description }}</p>
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
