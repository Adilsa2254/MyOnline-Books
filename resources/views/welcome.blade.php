<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>MyBooks.com</title>
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('LogoMybook.png') }}">
        <link rel="stylesheet" href="{{ asset('welcome.css') }}">
</head>
<body>
    <div class="container">
        <header>
            <nav class="gen-nav" id="gen-nav">
                <div class="gen-logo">
                    <img src="{{ asset('LogoMybook.png') }}" alt="logo" style="width: 30px; height: 30px;">
                    <p class="gen-logo-text">MyBooks.com</p>
                </div>
                
                <button class="gen-hamburger" id="gen-ham" aria-label="Toggle menu">
                    <span></span><span></span><span></span>
                </button>
                
                <ul id="gen-menu">
                    <li><a href="#">Home</a></li>
                    <li class="has-sub">
                        <a href="#">Products <span class="gen-arrow"> + </span></a>
                        <ul>
                            <li><a href="#">Product 1</a></li>
                            <li><a href="#">Product 2</a></li>
                            <li><a href="#">Product 3</a></li>
                        </ul>
                    </li>
                    <li><a href="#">About</a></li>
                    <li class="has-sub">
                        <a href="#">Services <span class="gen-arrow"> + </span></a>
                        <ul>
                            <li><a href="#">Service 1</a></li>
                            <li><a href="#">Service 2</a></li>
                        </ul>
                    </li>
                    <li><a href="#">Contact Us</a></li>
                    
                    <li class="login-mobile-only" style="text-align: center; margin-top: 10px;">
                        <button class="button">Login</button>
                    </li>
                </ul>
                
                <button class="button login-desktop-only">Login</button>

            </nav>
        </header>

        <main>
            <section class="container-flex">
                <div class="container-1">
                    <h1>Discover Your <br> Next Great Read</h1>
                    <p class="cointainer-flex-information">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloribus laborum autem veniam dolore velit recusandae est illum fugit totam dolor at dignissimos obcaecati tenetur consectetur, eaque facilis perspiciatis.
                    </p>
                    <div>
                        <button class="button button-primary">Browse Books</button>
                    </div>
                </div>
                <div class="container-2">
                        <div class="box-folder">
                            <div class="layer-bawah">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 584 404" fill="none">
                                    <path d="M548.239 368.689L63.8162 403.823C43.0076 405.332 24.9155 389.687 23.4063 368.878L0.100579 47.5446C-1.40863 26.736 14.2366 8.64389 35.0452 7.13468L131.856 0.113196C143.276 -0.715086 154.558 3.02721 163.219 10.5168L210.635 51.5204C219.296 59.01 230.577 62.7523 241.998 61.924L524.504 41.4344C545.312 39.9252 563.404 55.5704 564.914 76.379L583.183 328.279C584.693 349.087 569.047 367.179 548.239 368.689Z" fill="#5A1A1A"/>
                                </svg>
                            </div>

                            <div class="layer-tengah">
                                <img src="Book2.png" alt="Book 1" class="book image1-f">
                                <img src="Book6.png" alt="Book 2" class="book image2-f">
                            </div>

                            <div class="layer-atas">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 625 369" fill="none">
                                    <path d="M565.68 318.289L81.2415 353.425C60.4104 354.936 42.3064 339.256 40.8275 318.422L23.8965 79.9257C22.4207 59.1374 38.0592 41.081 58.8453 39.5734L155.714 32.5478C167.134 31.7195 178.415 35.4618 187.076 42.9513L234.493 83.9549C243.154 91.4445 254.435 95.1868 265.855 94.3585L548.287 73.8743C569.125 72.363 587.232 88.0526 588.702 108.893L600.63 277.953C602.096 298.736 586.46 316.782 565.68 318.289Z" fill="#782323"/>
                                </svg>
                            </div>
                        </div>
                </div>
            </section>
        </main>

        <footer>
            <p>&copy; 2026 MyBooks.com. All rights reserved.</p>
        </footer>
    </div>

    <script>
        const hamburger = document.getElementById('gen-ham');
        const nav = document.getElementById('gen-nav');
        const menu = document.getElementById('gen-menu');

        hamburger.addEventListener('click', () => {
            nav.classList.toggle('mobile-open');
            menu.classList.toggle('open');
        });
    </script>
</body>
</html>