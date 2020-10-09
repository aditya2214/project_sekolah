<!DOCTYPE html>
<html lang="en" class="no-js">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Welcome</title>
    <link href="https://fonts.googleapis.com/css?family=Heebo:400,700|Oxygen:700" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset ('welcome/dist/css/style.css') }}">
    <script src="https://unpkg.com/scrollreveal@4.0.5/dist/scrollreveal.min.js"></script>
</head>
<body class="is-boxed has-animations">
    <div class="body-wrap boxed-container">
        <header class="site-header text-light">
            <div class="container">
                <div class="site-header-inner">
                    <div class="brand header-brand">
                        <h1 class="m-0">
                            <a href="#">
								              <img class="header-logo-image" src="{{ asset('../public/welcome/dist/images/logo.svg') }}" alt="Logo">
                            </a>
                        </h1>
                    </div>
                </div>
            </div>
        </header>

        <main>
            <section class="hero text-center text-light">
				<div class="hero-bg"></div>
				<div class="hero-particles-container">
					<canvas id="hero-particles"></canvas>
				</div>
                <div class="container-sm">
                    <div class="hero-inner">
						<div class="hero-copy">
	                        <h1 class="hero-title mt-0">SDN KIARA</h1>
	                        <p class="hero-paragraph">Kegiatan Kesiswaan kini bisa online</p>
	                        <div class="hero-cta">
								<a class="button button-primary button-wide-mobile" href="{{ url ('kirim-tugas') }}">Start  </a>
							</div>
						</div>
						<div class="mockup-container">
							<div class="mockup-bg">
								<img src="{{ asset ('../public/welcome/dist/images/iphone-hero-bg.svg') }}" alt="iPhone illustration">
							</div>
							<img class="device-mockup" src="{{ asset ('../public/welcome/dist/images/iphone-hero.png') }}" alt="iPhone Hero">
						</div>
                    </div>
                </div>
            </section>
      </main>

    <script src="{{ asset ('welcome/dist/js/main.min.js') }}"></script>
</body>
</html>
