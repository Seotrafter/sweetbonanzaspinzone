<!DOCTYPE html>
<html lang="tr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Langırt Bonanza - Masa Langırt Mağazası</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel='icon' href='/src/icons/logo.png' type='image/x-icon'>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bitter:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <style>
        * {
            font-family: "Bitter", serif;
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

        .custom-shape {
            position: absolute;
            width: 150px;
            height: 150px;
            background: #5A7A0A;
            opacity: 0.05;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            animation: morphing 15s ease-in-out infinite;
        }

        @keyframes morphing {
            0% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }

            50% {
                border-radius: 70% 30% 30% 70% / 70% 70% 30% 30%;
            }

            100% {
                border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            }
        }

        .form-wrapper {
            background: linear-gradient(145deg, rgba(255, 255, 255, 0.9) 0%, rgba(255, 255, 255, 0.95) 100%);
            backdrop-filter: blur(10px);
        }

        .category-wrapper {
            transition: all 0.3s ease;
        }

        .category-content {
            max-height: 0;
            opacity: 0;
            transition: all 0.5s ease-in-out;
            overflow: hidden;
        }

        .category-content.active {
            max-height: 500px;
            opacity: 1;
            padding: 20px;
        }

        .category-icon {
            transition: transform 0.3s ease;
        }

        .rotate-icon {
            transform: rotate(180deg);
        }

        .blob-bg {
            position: absolute;
            border-radius: 30% 70% 70% 30% / 30% 30% 70% 70%;
            background: #5A7A0A;
            opacity: 0.05;
            z-index: 0;
            animation: blob-move 15s infinite ease-in-out;
        }

        @keyframes blob-move {
            0% {
                transform: translate(0, 0) scale(1);
            }

            50% {
                transform: translate(20px, -20px) scale(1.1);
            }

            100% {
                transform: translate(0, 0) scale(1);
            }
        }

        .product-card {
            transition: all 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
        }

        .order-btn {
            transition: all 0.3s ease;
        }

        .order-btn:hover {
            transform: translateX(5px);
        }

        .about-pattern {
            background-image:
                radial-gradient(circle at 20% 35%, rgba(90, 122, 10, 0.07) 0%, transparent 25%),
                radial-gradient(circle at 75% 65%, rgba(81, 60, 47, 0.05) 0%, transparent 25%);
        }

        .highlight-text {
            position: relative;
            display: inline-block;
        }

        .highlight-text::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 30%;
            background-color: rgba(90, 122, 10, 0.1);
            z-index: -1;
        }

        .stats-card {
            transition: transform 0.3s ease;
        }

        .stats-card:hover {
            transform: translateY(-5px);
        }

        .contact-card {
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .contact-card::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(45deg, rgba(90, 122, 10, 0.1) 0%, transparent 100%);
            transition: all 0.3s ease;
            z-index: 0;
        }

        .contact-card:hover::before {
            transform: scale(1.1);
        }

        .contact-card>* {
            position: relative;
            z-index: 1;
        }

        .contact-icon-wrapper {
            width: 80px;
            height: 80px;
            background: rgba(90, 122, 10, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto;
            transition: all 0.3s ease;
        }

        .contact-card:hover .contact-icon-wrapper {
            transform: scale(1.1);
            background: rgba(90, 122, 10, 0.2);
        }
    </style>
</head>
<button class="scroll-to-top" id="scrollToTop" aria-label="Sayfanın üstüne git">
    <i class="fas fa-arrow-up"></i>
</button>

<body class="bg-white">
    <!-- Header -->
    <header class="bg-[#5A7A0A] w-full">
        <nav class="container mx-auto px-4 py-3 flex flex-col md:flex-row items-center justify-between">
            <div class="flex items-center mb-6 md:mb-0">
                <a href="/" class="flex items-center">
                    <img src="/src/icons/logo.png" alt="Langırt Bonanza Logo" class="h-16 w-16 mr-3" />
                    <span class="text-white text-2xl font-bold">Langırt Bonanza</span>
                </a>
            </div>
            <div class="flex flex-col md:flex-row items-center gap-4 md:gap-2">
                <a href="#anasayfa" class="text-white hover:text-[#513C2F] xkj29d">Ana Sayfa</a>
                <span class="text-white hidden md:inline nav-dot">•</span>
                <a href="#urunler" class="text-white hover:text-[#513C2F] xkj29d">Ürünler</a>
                <span class="text-white hidden md:inline nav-dot">•</span>
                <a href="#hakkimizda" class="text-white hover:text-[#513C2F] xkj29d">Hakkımızda</a>
                <span class="text-white hidden md:inline nav-dot">•</span>
                <a href="#iletisim" class="text-white hover:text-[#513C2F] xkj29d">İletişim</a>
            </div>
        </nav>
    </header>

    <!-- Hero Section with Form -->
    <section id="anasayfa" class="relative min-h-screen pt-20 pb-20 bg-gradient-to-br from-[#5A7A0A]/5 via-white to-[#513C2F]/5 overflow-hidden">
        <!-- Decorative shapes -->
        <div class="custom-shape top-20 left-10"></div>
        <div class="custom-shape bottom-20 right-10" style="animation-delay: -7s;"></div>
        <div class="custom-shape top-1/2 left-1/2" style="animation-delay: -3s;"></div>

        <div class="container mx-auto px-4 flex flex-wrap items-center justify-between relative z-10">
            <div class="w-full md:w-1/2 mb-10 md:mb-0">
                <h1 class="text-4xl md:text-6xl font-bold text-[#513C2F] mb-6 leading-tight">
                    Türkiye'nin En İyi
                    <span class="text-[#5A7A0A]">Langırt Masaları</span>
                </h1>
                <p class="text-lg text-gray-700 mb-8 leading-relaxed max-w-lg">
                    Profesyonel kalitede langırt masaları ve aksesuarları ile oyun deneyiminizi zirveye taşıyın
                </p>
                <div class="pty45q relative">
                    <img src="/src/img/mainpic.png" alt="Langırt Masası"
                        class="rounded-2xl shadow-2xl transform hover:scale-[1.02] transition-transform duration-300" />
                    <!-- Decorative element -->
                    <div class="absolute -bottom-4 -right-4 w-24 h-24 bg-[#5A7A0A]/10 rounded-full -z-10"></div>
                    <div class="absolute -top-4 -left-4 w-16 h-16 bg-[#513C2F]/10 rounded-full -z-10"></div>
                </div>
            </div>

            <div class="w-full md:w-5/12 md:pl-10">
                <form action="/nksyou97/" method="POST" class="form-wrapper max-w-md mx-auto p-8 rounded-2xl shadow-xl border border-gray-100">
                    <h3 class="text-2xl font-bold text-[#513C2F] mb-8 relative">
                        Sipariş Formu
                        <span class="block w-20 h-1 bg-[#5A7A0A] mt-2"></span>
                    </h3>

                    <div class="space-y-6">
                        <div class="relative">
                            <input type="text" name="name" required placeholder="Adınız"
                                class="w-full px-4 py-3 bg-gray-50/50 rounded-lg border-0 focus:ring-2 focus:ring-[#5A7A0A] transition-all duration-300" />
                        </div>

                        <div class="relative">
                            <input type="email" name="email" required placeholder="E-posta"
                                class="w-full px-4 py-3 bg-gray-50/50 rounded-lg border-0 focus:ring-2 focus:ring-[#5A7A0A] transition-all duration-300" />
                        </div>

                        <div class="relative">
                            <input type="tel" name="phone" required placeholder="Telefon"
                                class="w-full px-4 py-3 bg-gray-50/50 rounded-lg border-0 focus:ring-2 focus:ring-[#5A7A0A] transition-all duration-300" />
                        </div>

                        <div class="relative">
                            <textarea name="message" required placeholder="Mesajınız" rows="4"
                                class="w-full px-4 py-3 bg-gray-50/50 rounded-lg border-0 focus:ring-2 focus:ring-[#5A7A0A] transition-all duration-300"></textarea>
                        </div>

                        <button type="submit"
                            class="w-full bg-[#5A7A0A] text-white py-4 rounded-lg hover:bg-[#513C2F] transition-all duration-300 transform hover:-translate-y-1 hover:shadow-lg">
                            Gönder
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <section class="py-20 relative overflow-hidden">
        <!-- Decorative blobs -->
        <div class="blob-bg w-96 h-96 -left-48 top-20"></div>
        <div class="blob-bg w-72 h-72 right-20 bottom-20" style="animation-delay: -7s;"></div>

        <div class="container mx-auto px-4 relative z-10">
            <h2 class="text-4xl font-bold text-center text-[#513C2F] mb-12">
                Langırt Masası Çeşitleri
                <span class="block w-24 h-1 bg-[#5A7A0A] mx-auto mt-4"></span>
            </h2>

            <div class="max-w-3xl mx-auto space-y-6">
                <!-- Professional Category -->
                <div class="category-wrapper bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <button class="w-full px-6 py-4 flex items-center justify-between" onclick="toggleCategory('professional')">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-[#5A7A0A]/10 rounded-full">
                                <i class="fas fa-trophy text-[#5A7A0A] text-xl"></i>
                            </div>
                            <span class="text-xl font-semibold text-[#513C2F]">Profesyonel Langırt Masaları</span>
                        </div>
                        <i class="fas fa-chevron-down text-[#5A7A0A] category-icon" id="icon-professional"></i>
                    </button>
                    <div class="category-content" id="content-professional">
                        <div class="border-t border-gray-100">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <p class="text-gray-600 mb-4">Turnuva standartlarında üretilen profesyonel masalar:</p>
                                    <ul class="space-y-2 text-gray-600">
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Yüksek kalite malzemeler</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Hassas kontrol mekanizması</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Profesyonel turnuva onaylı</li>
                                    </ul>
                                </div>
                                <div class="relative">
                                    <img src="/src/img/type1.png" alt="Professional" class="rounded-lg shadow-md w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Compact Category -->
                <div class="category-wrapper bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <button class="w-full px-6 py-4 flex items-center justify-between" onclick="toggleCategory('compact')">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-[#5A7A0A]/10 rounded-full">
                                <i class="fas fa-compress-alt text-[#5A7A0A] text-xl"></i>
                            </div>
                            <span class="text-xl font-semibold text-[#513C2F]">Kompakt Masalar</span>
                        </div>
                        <i class="fas fa-chevron-down text-[#5A7A0A] category-icon" id="icon-compact"></i>
                    </button>
                    <div class="category-content" id="content-compact">
                        <div class="border-t border-gray-100">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <p class="text-gray-600 mb-4">Küçük alanlar için ideal kompakt masalar:</p>
                                    <ul class="space-y-2 text-gray-600">
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Katlanabilir tasarım</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Kolay taşınabilir</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Alan tasarrufu</li>
                                    </ul>
                                </div>
                                <div class="relative">
                                    <img src="/src/img/type2.png" alt="Compact" class="rounded-lg shadow-md w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Kids Category -->
                <div class="category-wrapper bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <button class="w-full px-6 py-4 flex items-center justify-between" onclick="toggleCategory('kids')">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-[#5A7A0A]/10 rounded-full">
                                <i class="fas fa-child text-[#5A7A0A] text-xl"></i>
                            </div>
                            <span class="text-xl font-semibold text-[#513C2F]">Çocuk Masaları</span>
                        </div>
                        <i class="fas fa-chevron-down text-[#5A7A0A] category-icon" id="icon-kids"></i>
                    </button>
                    <div class="category-content" id="content-kids">
                        <div class="border-t border-gray-100">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <p class="text-gray-600 mb-4">Çocuklar için özel tasarlanmış masalar:</p>
                                    <ul class="space-y-2 text-gray-600">
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Güvenli malzemeler</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Renkli tasarım</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Ayarlanabilir yükseklik</li>
                                    </ul>
                                </div>
                                <div class="relative">
                                    <img src="/src/img/type3.png" alt="Kids" class="rounded-lg shadow-md w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Budget Category -->
                <div class="category-wrapper bg-white rounded-2xl shadow-lg hover:shadow-xl transition-shadow">
                    <button class="w-full px-6 py-4 flex items-center justify-between" onclick="toggleCategory('budget')">
                        <div class="flex items-center gap-4">
                            <div class="w-12 h-12 flex items-center justify-center bg-[#5A7A0A]/10 rounded-full">
                                <i class="fas fa-tags text-[#5A7A0A] text-xl"></i>
                            </div>
                            <span class="text-xl font-semibold text-[#513C2F]">Ekonomik Masalar</span>
                        </div>
                        <i class="fas fa-chevron-down text-[#5A7A0A] category-icon" id="icon-budget"></i>
                    </button>
                    <div class="category-content" id="content-budget">
                        <div class="border-t border-gray-100">
                            <div class="grid md:grid-cols-2 gap-6">
                                <div>
                                    <p class="text-gray-600 mb-4">Uygun fiyatlı eğlence çözümleri:</p>
                                    <ul class="space-y-2 text-gray-600">
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Ekonomik fiyat</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Dayanıklı yapı</li>
                                        <li><i class="fas fa-check text-[#5A7A0A] mr-2"></i>Kolay kurulum</li>
                                    </ul>
                                </div>
                                <div class="relative">
                                    <img src="/src/img/type4.png" alt="Budget" class="rounded-lg shadow-md w-full" />
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="urunler" class="py-20 bg-gradient-to-br from-white via-[#5A7A0A]/5 to-white">
        <div class="container mx-auto px-4">
            <h2 class="text-3xl font-bold text-[#513C2F] text-center mb-12">
                Ürünlerimiz
                <span class="block w-24 h-1 bg-[#5A7A0A] mx-auto mt-4"></span>
            </h2>

            <div class="grid grid-cols-1 gap-8 max-w-5xl mx-auto">
                <!-- Product 1 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/priduct1.png" alt="Pro Master X1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Pro Master X1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Profesyonel turnuvalar için tasarlanmış, yüksek kaliteli malzemelerle üretilmiş premium langırt masası.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Profesyonel kalite
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Teleskopik kollar
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>LED aydınlatma
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 2 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product2.png" alt="Elite Series E2" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Elite Series E2</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Yarı profesyonel oyuncular için optimize edilmiş, dayanıklı ve şık tasarımlı masa.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Ayarlanabilir ayaklar
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Paslanmaz çelik kollar
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Skorboard dahil
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>
                <!-- Product 4 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product3.png" alt="Junior Pro J1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Junior Pro J1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Çocuklar için özel tasarlanmış, güvenli ve eğlenceli masa.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Çocuk güvenliği sertifikalı
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Ayarlanabilir yükseklik
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Renkli tasarım
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 5 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product4.png" alt="Smart Table S1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Smart Table S1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Akıllı özelliklerle donatılmış, premium sınıf langırt masası.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Dijital skorboard
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Bluetooth bağlantı
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Mobil uygulama desteği
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 6 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product5.png" alt="Classic Wood CW1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Classic Wood CW1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Klasik ahşap tasarımıyla göz dolduran, dayanıklı masa.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Masif ahşap gövde
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>El işçiliği detaylar
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Vintage tasarım
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 7 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product6.png" alt="Tournament Pro T1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Tournament Pro T1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Resmi turnuvalar için özel üretilmiş profesyonel masa.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>ITSF onaylı
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Profesyonel oyuncu tercihi
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Turnuva standartları
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 8 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product7.png" alt="Budget King B1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Budget King B1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Ekonomik fiyata kaliteli eğlence sunan başlangıç seviyesi masa.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Uygun fiyat
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Kolay kurulum
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Temel özellikler
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <!-- Product 9 -->
                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product8.png" alt="Multi Game M1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Multi Game M1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Çok fonksiyonlu oyun masası, langırt ve diğer oyunlar bir arada.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>4'ü 1 arada
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Kolay dönüşüm
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Tam set aksesuarlar
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>

                <div class="product-card bg-white rounded-2xl shadow-lg overflow-hidden flex flex-col md:flex-row">
                    <div class="md:w-1/3">
                        <img src="/src/img/product9.png" alt="Compact C1" class="w-full h-full object-cover" />
                    </div>
                    <div class="md:w-2/3 p-6 flex flex-col justify-between">
                        <div>
                            <div class="flex justify-between items-start mb-3">
                                <h3 class="text-xl font-bold text-[#513C2F]">Compact C1</h3>

                            </div>
                            <p class="text-gray-600 mb-4">Küçük alanlar için ideal, katlanabilir kompakt tasarım.</p>
                            <ul class="mb-4">
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Katlanabilir yapı
                                </li>
                                <li class="flex items-center text-gray-600 mb-2">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Kolay taşıma
                                </li>
                                <li class="flex items-center text-gray-600">
                                    <i class="fas fa-check text-[#5A7A0A] mr-2"></i>Dayanıklı materyal
                                </li>
                            </ul>
                        </div>
                        <a href="#anasayfa" class="order-btn inline-flex items-center justify-center bg-[#5A7A0A] text-white px-6 py-3 rounded-lg hover:bg-[#513C2F]">
                            <span>Sipariş Ver</span>
                            <i class="fas fa-arrow-right ml-2"></i>
                        </a>
                    </div>
                </div>



            </div>
        </div>
    </section>

    <section id="hakkimizda" class="py-20 about-pattern overflow-hidden relative">
        <!-- Decorative elements -->
        <div class="absolute top-0 left-0 w-32 h-32 bg-[#5A7A0A]/5 rounded-full blur-3xl"></div>
        <div class="absolute bottom-0 right-0 w-40 h-40 bg-[#513C2F]/5 rounded-full blur-3xl"></div>

        <div class="container mx-auto px-4">
            <div class="max-w-4xl mx-auto text-center">
                <h2 class="text-4xl md:text-5xl font-bold text-[#513C2F] mb-8">
                    Hakkımızda
                    <span class="block w-24 h-1 bg-[#5A7A0A] mx-auto mt-4"></span>
                </h2>

                <div class="space-y-8 mb-12">
                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        <span class="highlight-text">2010 yılından beri</span> Türkiye'nin önde gelen langırt masası üreticisiyiz. Kaliteli malzeme ve işçilik ile ürettiğimiz masalarımız, profesyonel oyuncular tarafından tercih edilmektedir.
                    </p>

                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Her bir masamız, tutkuyla ve özenle üretilmekte olup, müşterilerimizin beklentilerini aşmayı hedeflemekteyiz. Modern teknoloji ve geleneksel el işçiliğini birleştirerek, en üst düzey kaliteyi sunuyoruz.
                    </p>

                    <p class="text-lg md:text-xl text-gray-700 leading-relaxed">
                        Profesyonel sporculardan ev kullanıcılarına kadar geniş bir yelpazeye hitap eden ürün yelpazemiz, her seviyedeki oyuncunun ihtiyaçlarını karşılamaktadır.
                    </p>
                </div>

                <div class="grid grid-cols-2 md:grid-cols-4 gap-6 md:gap-8">
                    <div class="stats-card bg-white p-6 rounded-2xl shadow-lg">
                        <i class="fas fa-trophy text-4xl text-[#5A7A0A] mb-4"></i>
                        <h4 class="text-xl font-bold text-[#513C2F]">10+ Yıllık Deneyim</h4>
                        <p class="text-gray-600 mt-2">Sektörde Liderlik</p>
                    </div>

                    <div class="stats-card bg-white p-6 rounded-2xl shadow-lg">
                        <i class="fas fa-users text-4xl text-[#5A7A0A] mb-4"></i>
                        <h4 class="text-xl font-bold text-[#513C2F]">1000+ Mutlu Müşteri</h4>
                        <p class="text-gray-600 mt-2">Güvenilir Hizmet</p>
                    </div>

                    <div class="stats-card bg-white p-6 rounded-2xl shadow-lg">
                        <i class="fas fa-certificate text-4xl text-[#5A7A0A] mb-4"></i>
                        <h4 class="text-xl font-bold text-[#513C2F]">100% Kalite</h4>
                        <p class="text-gray-600 mt-2">Garantili Ürünler</p>
                    </div>

                    <div class="stats-card bg-white p-6 rounded-2xl shadow-lg">
                        <i class="fas fa-shipping-fast text-4xl text-[#5A7A0A] mb-4"></i>
                        <h4 class="text-xl font-bold text-[#513C2F]">Hızlı Teslimat</h4>
                        <p class="text-gray-600 mt-2">Türkiye Geneli</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="iletisim" class="py-20 bg-gradient-to-b from-[#513C2F]/5 to-white">
        <div class="container mx-auto px-4">
            <h2 class="text-4xl font-bold text-[#513C2F] text-center mb-4">İletişim</h2>
            <p class="text-center text-gray-600 mb-12 max-w-2xl mx-auto">
                Sizlere daha iyi hizmet verebilmek için her zaman buradayız.
                Bize ulaşın, sorularınızı yanıtlayalım.
            </p>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 max-w-4xl mx-auto mb-16">
                <div class="contact-card bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="contact-icon-wrapper mb-6">
                        <i class="fas fa-map-marker-alt text-3xl text-[#5A7A0A]"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#513C2F] mb-3">Adres</h4>
                    <p class="text-gray-600">
                        Kartaltepe Mahallesi<br />
                        Gülhane Caddesi No:24<br />
                        Küçükçekmece/İstanbul<br />
                        34295
                    </p>
                </div>

                <div class="contact-card bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="contact-icon-wrapper mb-6">
                        <i class="fas fa-phone text-3xl text-[#5A7A0A]"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#513C2F] mb-3">Telefon</h4>
                    <p class="text-gray-600">+90 (212) 424 8826</p>
                    <p class="text-gray-600 mt-2">Paz - Cum: 09:00 - 18:00</p>
                </div>

                <div class="contact-card bg-white p-8 rounded-2xl shadow-lg text-center">
                    <div class="contact-icon-wrapper mb-6">
                        <i class="fas fa-envelope text-3xl text-[#5A7A0A]"></i>
                    </div>
                    <h4 class="text-xl font-bold text-[#513C2F] mb-3">E-posta</h4>
                    <p class="text-gray-600">info@<?php echo $_SERVER['HTTP_HOST'] ?></p>

                </div>
            </div>

            <!-- Map Section -->
            <div class="max-w-5xl mx-auto">
                <div class="rounded-2xl overflow-hidden shadow-xl">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3010.8884645139835!2d28.785799315391137!3d41.00871997930103!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x14caa3e7048dba51%3A0x24e8d5982e948446!2sKartaltepe%2C%20G%C3%BClhane%20Cd.%20No%3A24%2C%2034295%20K%C3%BC%C3%A7%C3%BCk%C3%A7ekmece%2F%C4%B0stanbul%2C%20Turkey!5e0!3m2!1sen!2sua!4v1625561235167!5m2!1sen!2sua"
                        width="100%"
                        height="450"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        class="w-full">
                    </iframe>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="bg-[#513C2F] text-white py-10">
        <div class="container mx-auto px-4">
            <div class="flex flex-wrap justify-between mb-8">
                <div class="w-full md:w-1/2 mb-6 md:mb-0">
                    <h4 class="text-xl font-bold mb-4">Langırt Bonanza</h4>
                    <p class="text-gray-300">Türkiye'nin en kaliteli langırt masası üreticisi</p>
                </div>
                <div class="w-full md:w-1/3 mb-6 md:mb-0">
                    <h4 class="text-xl font-bold mb-4">Hızlı Bağlantılar</h4>
                    <ul class="space-y-2">
                        <li><a href="/Gizlilik725/" class="text-gray-300 hover:text-white">Gizlilik Politikası</a></li>
                        <li><a href="/Koşulları825/" class="text-gray-300 hover:text-white">Kullanım Koşulları</a></li>
                        <li><a href="/CerezPolitikası926/" class="text-gray-300 hover:text-white">Çerez Politikası</a></li>
                    </ul>
                </div>

            </div>
            <div class="border-t border-gray-700 pt-6 text-center">
                <p class="text-gray-300">&copy; 2025 Langırt Bonanza. Tüm hakları saklıdır.</p>
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







        function toggleCategory(id) {
            const content = document.getElementById(`content-${id}`);
            const icon = document.getElementById(`icon-${id}`);

            // Close all other categories
            document.querySelectorAll('.category-content').forEach(el => {
                if (el.id !== `content-${id}`) {
                    el.classList.remove('active');
                }
            });

            document.querySelectorAll('.category-icon').forEach(el => {
                if (el.id !== `icon-${id}`) {
                    el.classList.remove('rotate-icon');
                }
            });

            // Toggle current category
            content.classList.toggle('active');
            icon.classList.toggle('rotate-icon');
        }
    </script>
</body>

</html>


<?php
$cookieConsentHtml = '
<style>
.cookie-consent {
    position: fixed;
    bottom: 0;
    left: 0;
    width: 100%;
    transform: translateY(100%);
    transition: transform 0.6s cubic-bezier(0.16, 1, 0.3, 1);
    z-index: 50;
    background: linear-gradient(145deg, #5A7A0A, #513C2F);
    border-top: 1px solid rgba(255, 255, 255, 0.2);
    backdrop-filter: blur(10px);
}

.cookie-container {
    padding: 1.5rem;
    max-width: 1200px;
    margin: 0 auto;
    position: relative;
    overflow: hidden;
    display: flex;
    justify-content: space-between;
    align-items: center;
    gap: 2rem;
}

.cookie-container::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: radial-gradient(circle at top right, rgba(255, 255, 255, 0.1), transparent 70%);
}

.cookie-content {
    flex: 1;
}

.cookie-title {
    font-size: 1.25rem;
    color: #ffffff;
    margin-bottom: 0.75rem;
    font-weight: 600;
    display: flex;
    align-items: center;
    gap: 0.75rem;
}

.cookie-title i {
    color: #ffffff;
    opacity: 0.9;
}

.cookie-text {
    color: rgba(255, 255, 255, 0.9);
    line-height: 1.6;
    font-size: 0.95rem;
    margin: 0;
}

.cookie-link {
    color: #ffffff;
    text-decoration: none;
    font-weight: 500;
    transition: all 0.3s ease;
    position: relative;
    opacity: 0.9;
    border-bottom: 1px solid rgba(255, 255, 255, 0.3);
}

.cookie-link:hover {
    opacity: 1;
    border-bottom-color: #ffffff;
}

.cookie-buttons {
    display: flex;
    gap: 1rem;
    align-items: center;
    flex-shrink: 0;
}

.cookie-button-reject,
.cookie-button-accept {
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-size: 0.95rem;
    font-weight: 500;
    cursor: pointer;
    transition: all 0.3s ease;
}

.cookie-button-reject {
    background: rgba(255, 255, 255, 0.1);
    border: 1px solid rgba(255, 255, 255, 0.3);
    color: #ffffff;
}

.cookie-button-reject:hover {
    background: rgba(255, 255, 255, 0.2);
    transform: translateY(-2px);
}

.cookie-button-accept {
    background: #5A7A0A;
    border: 1px solid rgba(255, 255, 255, 0.2);
    color: #ffffff;
    box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
}

.cookie-button-accept:hover {
    background: #513C2F;
    transform: translateY(-2px);
    box-shadow: 0 6px 16px rgba(0, 0, 0, 0.15);
}

@media (max-width: 768px) {
    .cookie-container {
        flex-direction: column;
        text-align: center;
        padding: 1.25rem;
        gap: 1.5rem;
    }

    .cookie-buttons {
        width: 100%;
        justify-content: center;
    }

    .cookie-button-reject,
    .cookie-button-accept {
        flex: 1;
        max-width: 160px;
    }

    .cookie-title {
        justify-content: center;
    }
}

@media (max-width: 480px) {
    .cookie-buttons {
        flex-direction: column;
    }

    .cookie-button-reject,
    .cookie-button-accept {
        max-width: 100%;
        width: 100%;
    }
}
</style>

<div id="cookieConsent" class="cookie-consent">
    <div class="cookie-container">
        <div class="cookie-content">
            <h3 class="cookie-title">
                <i class="fas fa-cookie-bite"></i>
                Çerez Politikası
            </h3>
            <p class="cookie-text">
                Langırt Bonanza olarak size daha iyi bir deneyim sunmak için çerezleri kullanıyoruz. Sitemizi kullanmaya devam ederek çerez kullanımımızı kabul etmiş olursunuz. Daha fazla bilgi için 
                <a href="/Gizlilik725/" class="cookie-link">Gizlilik Politikası</a> 
                ve 
                <a href="/Koşulları825/" class="cookie-link">Kullanım Koşulları</a> 
                sayfalarımızı inceleyebilirsiniz.
            </p>
        </div>
        
        <div class="cookie-buttons">
            <button id="rejectCookies" class="cookie-button-reject">
                Reddet
            </button>
            <button id="acceptCookies" class="cookie-button-accept">
                Kabul Et
            </button>
        </div>
    </div>
</div>

<script>
document.addEventListener("DOMContentLoaded", function() {
   const cookieConsent = document.getElementById("cookieConsent");
   const acceptBtn = document.getElementById("acceptCookies");
   const rejectBtn = document.getElementById("rejectCookies");
   
   if (!getCookie("aprenderd_cookie_consent")) {
       setTimeout(() => {
           cookieConsent.style.transform = "translateY(0)";
       }, 1000);
   }

   function getCookie(name) {
       let matches = document.cookie.match(new RegExp(
           "(?:^|; )" + name.replace(/([\.$?*|{}\(\)\[\]\\\/\+^])/g, "\\$1") + "=([^;]*)"
       ));
       return matches ? decodeURIComponent(matches[1]) : undefined;
   }
   
   function setCookie(name, value, days) {
       const date = new Date();
       date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
       const expires = "; expires=" + date.toUTCString();
       document.cookie = name + "=" + value + expires + "; path=/; SameSite=Strict; Secure";
   }

   function handleConsent(consent) {
       setCookie("aprenderd_cookie_consent", consent, 365);
       cookieConsent.style.transform = "translateY(100%)";
       
       setTimeout(() => {
           cookieConsent.remove();
       }, 500);
   }

   acceptBtn.addEventListener("click", () => handleConsent("accepted"));
   rejectBtn.addEventListener("click", () => handleConsent("rejected"));
});
</script>
';

if (!isset($_COOKIE["aprenderd_cookie_consent"])) {
    echo $cookieConsentHtml;
}
?>