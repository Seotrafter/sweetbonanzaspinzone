<!DOCTYPE html>
<html lang='tr'>

<head>
    <meta charset='UTF-8'>
    <meta name='viewport' content='width=device-width, initial-scale=1.0'>
    <title>Langırt Bonanza - Masa Langırt Mağazası</title>
    <script src='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/js/all.min.js'></script>
    <script src='https://cdn.tailwindcss.com'></script>
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

        .privacy-container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 2rem;
        }

        .privacy-heading {
            color: #513C2F;
            position: relative;
            display: inline-block;
            margin-bottom: 2rem;
        }

        .privacy-heading::after {
            content: '';
            position: absolute;
            bottom: -0.5rem;
            left: 0;
            width: 100px;
            height: 3px;
            background-color: #5A7A0A;
        }

        .privacy-section {
            background: white;
            border-radius: 1rem;
            padding: 2rem;
            margin-bottom: 2rem;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
            transition: transform 0.3s ease;
        }

        .privacy-section:hover {
            transform: translateY(-5px);
        }

        .privacy-link {
            color: #5A7A0A;
            text-decoration: none;
            transition: all 0.3s ease;
            border-bottom: 1px solid transparent;
        }

        .privacy-link:hover {
            border-bottom-color: #5A7A0A;
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
    <section class="min-h-screen bg-gradient-to-br from-white via-[#5A7A0A]/5 to-white py-20">
        <div class="privacy-container">
            <h1 class="privacy-heading text-4xl font-bold mb-8">Langırt Bonanza Gizlilik Politikası</h1>

            <div class="privacy-section">
                <p class="text-gray-700 mb-6">
                    Langırt Bonanza, https://sweetbonanzaspinzone.com/ adresinden erişilebilmektedir ve ziyaretçilerimizin gizliliği bizim en önemli önceliklerimizden biridir. Bu Gizlilik Politikası belgesi, Langırt Bonanza tarafından toplanan ve kaydedilen bilgi türlerini ve bunları nasıl kullandığımızı içermektedir.
                </p>
                <p class="text-gray-700 mb-6">
                    Gizlilik Politikamız hakkında ek sorularınız varsa veya daha fazla bilgiye ihtiyaç duyarsanız, bizimle iletişime geçmekten çekinmeyin.
                </p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-bold text-[#513C2F] mb-4">Günlük Dosyaları</h2>
                <p class="text-gray-700">
                    Langırt Bonanza, günlük dosyalarını kullanma konusunda standart bir prosedür izler. Bu dosyalar, ziyaretçiler web sitelerini ziyaret ettiğinde ziyaretçileri kaydeder. Tüm barındırma şirketleri bunu yapar ve bu, barındırma hizmetleri analitiğinin bir parçasıdır. Günlük dosyaları tarafından toplanan bilgiler; internet protokolü (IP) adresleri, tarayıcı türü, İnternet Servis Sağlayıcısı (ISP), tarih ve zaman damgası, yönlendiren/çıkış sayfaları ve muhtemelen tıklama sayısını içerir. Bu bilgiler, kişisel olarak tanımlanabilir bilgilere bağlanmaz. Bu bilgilerin amacı eğilimleri analiz etmek, siteyi yönetmek, kullanıcıların web sitesindeki hareketlerini izlemek ve demografik bilgileri toplamaktır.
                </p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-bold text-[#513C2F] mb-4">Çerezler ve Web İşaretçileri</h2>
                <p class="text-gray-700 mb-6">
                    Diğer web siteleri gibi, Langırt Bonanza da "çerezler" kullanır. Bu çerezler, ziyaretçilerin tercihlerinin yanı sıra ziyaretçinin web sitesinde eriştiği veya ziyaret ettiği sayfaları depolamak için kullanılır. Bu bilgiler, ziyaretçilerin tarayıcı türüne ve/veya diğer bilgilere göre web sayfası içeriğimizi özelleştirerek kullanıcıların deneyimini optimize etmek için kullanılır.
                </p>
            </div>
            <div class="privacy-section">
                <h2 class="text-2xl font-bold text-[#513C2F] mb-4">Google DoubleClick DART Çerezi</h2>
                <p class="text-gray-700 mb-6">
                    Google, sitemizdeki üçüncü taraf satıcılardan biridir. Ayrıca, site ziyaretçilerine www.website.com ve internet üzerindeki diğer sitelere yaptıkları ziyaretlere dayanarak reklam sunmak için DART çerezleri olarak bilinen çerezleri kullanır. Ancak, ziyaretçiler, <a href="https://policies.google.com/technologies/ads" class="privacy-link">https://policies.google.com/technologies/ads</a> adresindeki Google reklam ve içerik ağı Gizlilik Politikasını ziyaret ederek DART çerezlerinin kullanımını reddetmeyi tercih edebilirler.
                </p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-bold text-[#513C2F] mb-4">Reklam Ortaklarımız</h2>
                <p class="text-gray-700 mb-6">
                    Sitemizdeki bazı reklamverenler çerezler ve web işaretçileri kullanabilir. Reklam ortaklarımız aşağıda listelenmiştir. Her bir reklam ortağımızın kullanıcı verileri ile ilgili politikaları için kendi Gizlilik Politikaları bulunmaktadır.
                </p>
                <ul class="list-disc pl-6 mb-6">
                    <li class="mb-2">
                        <p class="text-gray-700">Google</p>
                        <a href="https://policies.google.com/technologies/ads" class="privacy-link">https://policies.google.com/technologies/ads</a>
                    </li>
                </ul>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-bold text-[#513C2F] mb-4">Üçüncü Taraf Gizlilik Politikaları</h2>
                <p class="text-gray-700 mb-6">
                    Langırt Bonanza'nın Gizlilik Politikası, diğer reklamverenlere veya web sitelerine uygulanmaz. Bu nedenle, daha ayrıntılı bilgi için bu üçüncü taraf reklam sunucularının kendi Gizlilik Politikalarına başvurmanızı tavsiye ediyoruz.
                </p>
                <p class="text-gray-700 mb-6">
                    Çerezleri devre dışı bırakmayı tarayıcı seçeneklerinizden seçebilirsiniz. Belirli web tarayıcılarıyla çerez yönetimi hakkında daha ayrıntılı bilgiler tarayıcıların kendi web sitelerinde bulunabilir.
                </p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-bold text-[#513C2F] mb-4">Çocukların Bilgileri</h2>
                <p class="text-gray-700 mb-6">
                    İnternette çocukların korunmasına öncelik vermek bizim için önemlidir. Ebeveynleri ve velileri, çocuklarının çevrimiçi etkinliklerini gözlemlemeye, katılmaya ve/veya izlemeye teşvik ediyoruz.
                </p>
                <p class="text-gray-700 mb-6">
                    Langırt Bonanza, 13 yaşın altındaki çocuklardan bilerek hiçbir kişisel olarak tanımlanabilir bilgi toplamaz. Çocuğunuzun web sitemizde bu tür bilgileri sağladığını düşünüyorsanız, lütfen hemen bizimle iletişime geçin.
                </p>
            </div>

            <div class="privacy-section">
                <h2 class="text-2xl font-bold text-[#513C2F] mb-4">Onay</h2>
                <p class="text-gray-700">
                    Web sitemizi kullanarak, bu Gizlilik Politikasını kabul ettiğinizi ve Hüküm ve Koşullarını kabul ettiğinizi beyan etmiş olursunuz.
                </p>
            </div>
        </div>
    </section>
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