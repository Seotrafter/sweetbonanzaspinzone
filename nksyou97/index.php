<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {


    $nume = $_POST['name'];

    $email = $_POST['email'];
    $phone = $_POST['phone'];

    $message = $_POST['message'];












    echo "


<!DOCTYPE html>
<html lang='tr'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Langırt Bonanza - Masa Langırt Mağazası</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js'></script>
    <script src='https://cdn.tailwindcss.com'></script>
    <link rel='icon' href='/src/icons/logo.png' type='image/x-icon'>
     <link rel='preconnect' href='https://fonts.googleapis.com'>
    <link rel='preconnect' href='https://fonts.gstatic.com' crossorigin>
    <link href='https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap' rel='stylesheet'>
    <style>
        * {
            font-family: 'Bitter', serif;
        }
        .xkj29d:hover {
            transform: scale(1.05);
            transition: transform 0.3s ease;
        }

        .pty45q {
            animation: float 6s ease-in-out infinite;
        }

        @keyframes float {
            0% {
                transform: translateY(0px);
            }

            50% {
                transform: translateY(-20px);
            }

            100% {
                transform: translateY(0px);
            }
        }

        .xkj29d {
            transition: all 0.3s ease;
            padding: 8px 16px;
            border-radius: 8px;
        }

        .xkj29d:hover {
            transform: scale(1.05);
            background-color: rgba(255, 255, 255, 0.1);
        }

        @media (max-width: 768px) {
            .nav-dot {
                display: none;
            }
        }

        .scroll-to-top {
            position: fixed;
            bottom: 30px;
            right: 30px;
            background-color: rgba(90, 122, 10, 0.9);
            width: 45px;
            height: 45px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            cursor: pointer;
            opacity: 0;
            visibility: hidden;
            transition: all 0.3s ease;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            z-index: 1000;
        }

        .scroll-to-top.visible {
            opacity: 1;
            visibility: visible;
        }

        .scroll-to-top:hover {
            background-color: #513C2F;
            transform: translateY(-3px);
        }

        .scroll-to-top i {
            color: white;
            font-size: 20px;
            transition: transform 0.3s ease;
        }

        .scroll-to-top:hover i {
            transform: translateY(-2px);
        }
             .floating {
            animation: floating 6s ease-in-out infinite;
        }

        @keyframes floating {
            0% { transform: translate(0, 0px); }
            50% { transform: translate(0, 15px); }
            100% { transform: translate(0, 0px); }
        }

        .success-checkmark {
            animation: scale-up 0.5s ease-out forwards;
            opacity: 0;
            transform: scale(0.5);
        }

        @keyframes scale-up {
            0% { 
                opacity: 0;
                transform: scale(0.5);
            }
            100% { 
                opacity: 1;
                transform: scale(1);
            }
        }

        .blob {
            animation: blob-move 10s infinite ease-in-out;
        }

        @keyframes blob-move {
            0% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; }
            50% { border-radius: 30% 60% 70% 40%/50% 60% 30% 60%; }
            100% { border-radius: 60% 40% 30% 70%/60% 30% 70% 40%; }
        }
    </style>
</head>
<button class='scroll-to-top' id='scrollToTop' aria-label='Sayfanın üstüne git'>
    <i class='fas fa-arrow-up'></i>
</button>

<body class='bg-white'>
    <!-- Header -->
    <header class='bg-[#5A7A0A] w-full'>
        <nav class='container mx-auto px-4 py-3 flex flex-col md:flex-row items-center justify-between'>
            <div class='flex items-center mb-6 md:mb-0'>
                <a href='/' class='flex items-center'>
                    <img src='/src/icons/logo.png' alt='Langırt Bonanza Logo' class='h-16 w-16 mr-3' />
                    <span class='text-white text-2xl font-bold'>Langırt Bonanza</span>
                </a>
            </div>
            <div class='flex flex-col md:flex-row items-center gap-4 md:gap-2'>
                <a href='/#anasayfa' class='text-white hover:text-[#513C2F] xkj29d'>Ana Sayfa</a>
                <span class='text-white hidden md:inline nav-dot'>•</span>
                <a href='/#urunler' class='text-white hover:text-[#513C2F] xkj29d'>Ürünler</a>
                <span class='text-white hidden md:inline nav-dot'>•</span>
                <a href='/#hakkimizda' class='text-white hover:text-[#513C2F] xkj29d'>Hakkımızda</a>
                <span class='text-white hidden md:inline nav-dot'>•</span>
                <a href='/#iletisim' class='text-white hover:text-[#513C2F] xkj29d'>İletişim</a>
            </div>
        </nav>
    </header>
<div class='blob absolute top-20 -left-32 w-64 h-64 bg-[#5A7A0A]/10 rounded-full blur-3xl'></div>
    <div class='blob absolute bottom-20 -right-32 w-64 h-64 bg-[#513C2F]/10 rounded-full blur-3xl'></div>

    <!-- Main content -->
    <div class='container mx-auto px-4 py-20 relative z-10'>
        <div class='max-w-2xl mx-auto text-center'>
            <!-- Success checkmark -->
            <div class='success-checkmark mb-8'>
                <div class='w-24 h-24 rounded-full bg-[#5A7A0A]/20 mx-auto flex items-center justify-center'>
                    <i class='fas fa-check text-[#5A7A0A] text-4xl'></i>
                </div>
            </div>

            <!-- Main heading -->
            <h1 class='text-4xl md:text-5xl font-bold text-[#513C2F] mb-6'>
                Teşekkür Ederiz!
                <span class='block w-24 h-1 bg-[#5A7A0A] mx-auto mt-4'></span>
            </h1>

            <!-- Message -->
            <div class='space-y-4 mb-12'>
                <p class='text-xl text-gray-700'>
                    Mesajınız başarıyla alındı.
                </p>
                <p class='text-lg text-gray-600'>
                    Ekibimiz en kısa sürede sizinle iletişime geçecektir. 
                    Lütfen <span class='text-[#5A7A0A] font-semibold'>e-posta kutunuzu</span> kontrol etmeyi unutmayın.
                </p>
            </div>

            <!-- Floating illustration -->
            <div class='floating mb-12'>
                <img src='/src/img/page.png' alt='Thank You Illustration' class='mx-auto rounded-2xl shadow-lg'/>
            </div>

            <!-- Additional info cards -->
            <div class='grid md:grid-cols-2 gap-6 mb-12'>
                <div class='bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow'>
                    <i class='fas fa-clock text-3xl text-[#5A7A0A] mb-4'></i>
                    <h3 class='text-lg font-bold text-[#513C2F] mb-2'>Yanıt Süresi</h3>
                    <p class='text-gray-600'>24 saat içinde size dönüş yapacağız</p>
                </div>
                <div class='bg-white p-6 rounded-xl shadow-lg hover:shadow-xl transition-shadow'>
                    <i class='fas fa-envelope text-3xl text-[#5A7A0A] mb-4'></i>
                    <h3 class='text-lg font-bold text-[#513C2F] mb-2'>E-posta Bildirimi</h3>
                    <p class='text-gray-600'>Detaylı bilgileri e-posta ile alacaksınız</p>
                </div>
            </div>

            <!-- Return button -->
            <a href='/' class='inline-flex items-center justify-center px-8 py-4 bg-[#5A7A0A] text-white rounded-xl hover:bg-[#513C2F] transition-all transform hover:-translate-y-1 hover:shadow-lg'>
                <i class='fas fa-home mr-2'></i>
                Ana Sayfaya Dön
            </a>
        </div>
    </div>

    <!-- Small decorative elements -->
    <div class='absolute top-1/4 left-10 w-4 h-4 bg-[#5A7A0A]/20 rounded-full'></div>
    <div class='absolute bottom-1/4 right-10 w-6 h-6 bg-[#513C2F]/20 rounded-full'></div>
    <div class='absolute top-1/3 right-20 w-3 h-3 bg-[#5A7A0A]/20 rounded-full'></div>
    <!-- Footer -->
    <footer class='bg-[#513C2F] text-white py-10'>
        <div class='container mx-auto px-4'>
            <div class='flex flex-wrap justify-between mb-8'>
                <div class='w-full md:w-1/2 mb-6 md:mb-0'>
                    <h4 class='text-xl font-bold mb-4'>Langırt Bonanza</h4>
                    <p class='text-gray-300'>Türkiye'nin en kaliteli langırt masası üreticisi</p>
                </div>
                <div class='w-full md:w-1/3 mb-6 md:mb-0'>
                    <h4 class='text-xl font-bold mb-4'>Hızlı Bağlantılar</h4>
                    <ul class='space-y-2'>
                        <li><a href='/Gizlilik725/' class='text-gray-300 hover:text-white'>Gizlilik Politikası</a></li>
                        <li><a href='/Koşulları825/' class='text-gray-300 hover:text-white'>Kullanım Koşulları</a></li>
                        <li><a href='/CerezPolitikası926/' class='text-gray-300 hover:text-white'>Çerez Politikası</a></li>
                    </ul>
                </div>

            </div>
            <div class='border-t border-gray-700 pt-6 text-center'>
                <p class='text-gray-300'>&copy; 2025 Langırt Bonanza. Tüm hakları saklıdır.</p>
            </div>
        </div>
    </footer>
    <script>
        const scrollToTopBtn = document.getElementById('scrollToTop');


        window.addEventListener('scroll', () => {
            if (window.pageYOffset > 300) {
                scrollToTopBtn.classList.add('visible');
            } else {
                scrollToTopBtn.classList.remove('visible');
            }
        });


        scrollToTopBtn.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth'
            });
        });

    </script>
</body>

</html>



";
    exit();
}
