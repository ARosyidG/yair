@extends("Layout.Navbar")

@section('Content')
<div class="d-flex flex-column min-vh-100">
    <main class="container-fluid mt-5 mb-3 flex-grow-1">
        <div class="hero-section text-center text-white" style="width: 100%; background-color: #4caf50;">
            <h1 class="display-1 fw-bold" style="font-size: 6rem;">YAIR</h1>
            <h2 class="mb-4">Website Pengelolaan Surat YAYASAN AMAL IKHLAS AL-RIDWANI</h2>
            <a href="/Surat">
                <button class="btn bg-transparent border-0 px-4 py-2 fw-bold" style="
                    box-shadow: 0rem 0rem 2rem rgb(255, 255, 255), 0rem 0rem 0.2rem rgb(255, 255, 255) inset;
                    color:white;
                    font-size: 1.2rem;
                    transition: all 0.3s ease;
                " onmouseover="this.style.boxShadow='0rem 0rem 3rem rgb(255, 255, 255)'"
                    onmouseout="this.style.boxShadow='0rem 0rem 2rem rgb(255, 255, 255)'">
                    LOGIN
                </button>
            </a>
        </div>
    </main>
    <footer class="text-center text-white mt-5" style="background-color: #2e7d32; padding: 1rem;">
        <p>&copy; 2026 YAYASAN AMAL IKHLAS AL-RIDWANI. All rights reserved.</p>
    </footer>
</div>
@endsection