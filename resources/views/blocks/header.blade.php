
<header>
    <div class="collapse bg-dark" id="navbarHeader">
        <div class="container">
            <div class="row justify-content-end">
                <!-- <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white">Обо мне</h4>
          <p class="text-muted">🔸художник-дизайнер 💥НЕЙМИНГ💥 Logo💥 ФИРМЕНЫЙ СТИЛЬ 🔸пишу картины</p>
        </div> -->
                <div class="col-sm-2 offset-md-1 py-4">
                    <h4 class="text-white">Контакты</h4>
                    <ul class="list-unstyled">
                        <li><a href="https://www.instagram.com/yulia_perezhogina/" class="text-white"
                                target="_blank">Instagram</a></li>
                        <li><a href="https://www.facebook.com/yulia.perezhogina" class="text-white"
                                target="_blank">Facebook</a></li>
                        <li><a href="{{ route('contacts') }}" class="text-white">Написать мне</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar navbar-light">
        <div class="container">
            <a href="/" class="navbar-brand d-flex py-5">
                <img src="{{asset('storage/images/YP-logo.svg')}}" alt="YPStudio logo" style="width:75px;">
            </a>
            <div class="site-name">
                <a href="{{ route('home') }}" class="text-white">
                    <h1>design studio<br>Yulia Perezhogina</h1>
                </a>
            </div>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader"
                aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
        </div>
    </div>
</header>
