
<!DOCTYPE html>
<html lang="fa" dir="rtl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="theme-color" content="#090b0d">

    <title>پورتفولیو | توسعه‌دهنده وب</title>

    <script src="{{ asset('assets/tailwind.js') }}"></script>

    <link href="https://fonts.googleapis.com/css2?family=Vazirmatn:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">

    <style>
        * {
            font-family: 'Vazirmatn', sans-serif;
            scroll-behavior: smooth;
        }

        body {
            background: #090b0d;
            color: #f4f2ed;
        }

        ::selection {
            background: #c5a675;
            color: #090b0d;
        }

        .reveal {
            opacity: 0;
            transform: translateY(22px);
            transition: opacity .7s ease, transform .7s ease;
        }

        .reveal.visible {
            opacity: 1;
            transform: translateY(0);
        }

        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after {
                scroll-behavior: auto !important;
                animation: none !important;
                transition: none !important;
            }

            .reveal {
                opacity: 1;
                transform: none;
            }
        }
    </style>
</head>

<body class="overflow-x-hidden">

@php
    $skills = [
        ['name' => 'Git', 'icon' => 'git/git-original.svg'],
        ['name' => 'PHP', 'icon' => 'php/php-original.svg'],
        ['name' => 'Laravel', 'icon' => 'laravel/laravel-original.svg'],
        ['name' => 'JavaScript', 'icon' => 'javascript/javascript-original.svg'],
        ['name' => 'CSS', 'icon' => 'css3/css3-original.svg'],
        ['name' => 'HTML', 'icon' => 'html5/html5-original.svg'],
    ];

    $services = [
        [
            'icon' => '⌘',
            'title' => 'توسعه وب',
            'description' => 'ساخت وب‌سایت‌های مدرن با کدنویسی اصولی و ساختار استاندارد.'
        ],
        [
            'icon' => '◈',
            'title' => 'طراحی UI/UX',
            'description' => 'طراحی رابط‌های کاربری زیبا و ایجاد تجربه مناسب برای مخاطب.'
        ],
        [
            'icon' => '▣',
            'title' => 'فروشگاه اینترنتی',
            'description' => 'طراحی ساختار فروشگاه آنلاین و صفحات نمایش محصولات.'
        ],
        [
            'icon' => '◎',
            'title' => 'طراحی واکنش‌گرا',
            'description' => 'سازگاری صفحات با موبایل، تبلت و نمایشگرهای مختلف.'
        ],
    ];

    $projects = [
    [
        'category' => 'توسعه وب | سیستم مدیریت | سفارش آنلاین',
        'title' => 'سامانه مدیریت کافه و سفارش آنلاین',
        'description' => 'طراحی و توسعه یک سامانه جامع برای مدیریت کافه و رستوران با قابلیت مدیریت منو و محصولات، ثبت و پیگیری سفارش‌ها، مدیریت سفارش‌های مشتریان به‌صورت آنلاین و سامان‌دهی فرایندهای داخلی مجموعه. این سامانه با هدف ساده‌سازی مدیریت کافه و بهبود تجربه سفارش مشتریان طراحی شده است.',
        'image' => 'caffegreen.png',

        'technologies' => [
            ['name' => 'Laravel', 'icon' => 'laravel/laravel-original.svg'],
            ['name' => 'PHP', 'icon' => 'php/php-original.svg'],
            ['name' => 'MySQL', 'icon' => 'mysql/mysql-original.svg'],
            ['name' => 'JavaScript', 'icon' => 'javascript/javascript-original.svg'],
            ['name' => 'Tailwind CSS', 'icon' => 'tailwindcss/tailwindcss-original.svg'],
        ],

        'url' => '#'
    ],

    [
        'category' => 'آموزش آنلاین | مدیریت دوره‌ها | طراحی و توسعه وب',
        'title' => 'سامانه آموزش آنلاین و مدیریت دوره‌های آموزشی',
        'description' => 'طراحی و توسعه یک پلتفرم آموزشی با هدف ارائه دوره‌های آنلاین، مدیریت محتوای آموزشی. این سامانه با رابط کاربری مدرن و کاربرپسند، امکان دسترسی آسان به دوره‌ها، مشاهده جزئیات آموزش‌ها و ایجاد تجربه‌ای ساده و منظم برای دانشجویان و مدرسین را فراهم می‌کند.',
        'image' => 'mrsimy.png',

        'technologies' => [
            ['name' => 'Laravel', 'icon' => 'laravel/laravel-original.svg'],
            ['name' => 'PHP', 'icon' => 'php/php-original.svg'],
            ['name' => 'MySQL', 'icon' => 'mysql/mysql-original.svg'],
            ['name' => 'JavaScript', 'icon' => 'javascript/javascript-original.svg'],
            ['name' => 'Tailwind CSS', 'icon' => 'tailwindcss/tailwindcss-original.svg'],
        ],

        'url' => '#'
    ],

    [
        'category' => 'مدیریت آموزشگاه | سیستم آموزشی | توسعه وب',
        'title' => 'سامانه جامع مدیریت آموزشگاه',
        'description' => 'طراحی و توسعه یک سامانه جامع برای مدیریت فرآیندهای آموزشی و اجرایی آموزشگاه. این سیستم با هدف ساده‌سازی امور مدیریتی، امکان ثبت‌نام و مدیریت هنرجویان، برنامه‌ریزی کلاس‌ها، مدیریت اساتید، ثبت نمرات و پیگیری وضعیت مالی را فراهم می‌کند. رابط کاربری منظم و کاربردی سامانه، مدیریت اطلاعات و دسترسی سریع به بخش‌های مختلف را آسان‌تر می‌سازد.',
        'image' => 'rinTeach.png',

        'technologies' => [
            ['name' => 'Laravel', 'icon' => 'laravel/laravel-original.svg'],
            ['name' => 'PHP', 'icon' => 'php/php-original.svg'],
            ['name' => 'MySQL', 'icon' => 'mysql/mysql-original.svg'],
            ['name' => 'JavaScript', 'icon' => 'javascript/javascript-original.svg'],
            ['name' => 'Tailwind CSS', 'icon' => 'tailwindcss/tailwindcss-original.svg'],
        ],

        'url' => '#'
    ],

    [
        'category' => 'سلامت و درمان | نوبت‌دهی آنلاین | توسعه وب',
        'title' => 'خدمات پزشکی',
        'description' => 'طراحی و توسعه یک وب‌سایت پزشکی با هدف تسهیل دسترسی کاربران به خدمات درمانی و اطلاعات پزشکان. این سامانه امکان معرفی پزشکان و تخصص‌های مختلف، مشاهده اطلاعات و سوابق پزشکان، دریافت نوبت آنلاین و مدیریت درخواست‌های مراجعه‌کنندگان را فراهم می‌کند. طراحی رابط کاربری ساده و مدرن، تجربه‌ای آسان و منظم را برای بیماران و کادر درمان ایجاد می‌کند.',
        'image' => 'Screenshot 2026-11-27 194522.png',

        'technologies' => [
            ['name' => 'Laravel', 'icon' => 'laravel/laravel-original.svg'],
            ['name' => 'PHP', 'icon' => 'php/php-original.svg'],
            ['name' => 'MySQL', 'icon' => 'mysql/mysql-original.svg'],
            ['name' => 'JavaScript', 'icon' => 'javascript/javascript-original.svg'],
            ['name' => 'Tailwind CSS', 'icon' => 'tailwindcss/tailwindcss-original.svg'],
        ],

        'url' => '#'
    ],
];

    $team = [
        [
            'name' => 'امیر رحمتی',
            'role' => 'فول استک',
            'image' => 'amir.webp'
        ],
        [
            'name' => 'محمد افتخاری',
            'role' => 'فول استک',
            'image' => 'eftekhari.webp'
        ],
        [
            'name' => 'مهدی بندعلی',
            'role' => 'فرانت کار',
            'image' => 'mahdi.webp'
        ],
        [
            'name' => 'سبحان علی زاده',
            'role' => 'فرانت کار',
            'image' => 'sobhan2.webp'
        ],
        [
            'name' => 'خانم خداقلی پور',
            'role' => 'فول استک',
            'image' => 'eefbac04-a11f-4a11-a290-d9378f994a1c.png'
        ],
        [
            'name' => 'رضا فتح زاده',
            'role' => 'فرانت کار',
            'image' => 'IMG_20250715_191732_243.webp'
        ],
    ];
@endphp


<!-- Header -->
<header class="sticky top-0 z-50 border-b border-white/[0.07] bg-[#090b0d]/90 backdrop-blur-xl">

    <div class="max-w-7xl mx-auto px-5 lg:px-8 min-h-[78px] flex items-center justify-between">

        <a href="#home" class="text-2xl font-extrabold tracking-widest">
            DEV<span class="text-[#c5a675]">.</span>
        </a>

        <button
            id="menuToggle"
            class="md:hidden border border-white/10 rounded-md px-3 py-2 text-xl"
            aria-label="باز کردن منو"
            aria-expanded="false"
        >
            ☰
        </button>

        <nav
            id="navMenu"
            class="hidden md:flex items-center gap-7 text-xs text-gray-400"
        >
            <a href="#home" class="hover:text-[#c5a675] transition">خانه</a>
            <a href="#about" class="hover:text-[#c5a675] transition">درباره من</a>
            <a href="#skills" class="hover:text-[#c5a675] transition">مهارت‌ها</a>
            <a href="#services" class="hover:text-[#c5a675] transition">خدمات</a>
            <a href="#projects" class="hover:text-[#c5a675] transition">نمونه‌کارها</a>
            <a href="#team" class="hover:text-[#c5a675] transition">همکاران</a>
            <a href="#experience" class="hover:text-[#c5a675] transition">سوابق</a>
            <a href="#contact" class="hover:text-[#c5a675] transition">ارتباط</a>
        </nav>

        <a
            href="#contact"
            class="hidden md:block border border-[#c5a675]/50 text-[#c5a675] text-xs px-5 py-3 rounded-md hover:bg-[#c5a675] hover:text-[#090b0d] transition"
        >
            شروع همکاری
        </a>

    </div>

    <nav
        id="mobileMenu"
        class="hidden md:hidden bg-[#111518] border-t border-white/[0.07] px-6 py-5"
    >
        <div class="flex flex-col gap-5 text-sm text-gray-400">
            <a href="#home">خانه</a>
            <a href="#about">درباره من</a>
            <a href="#skills">مهارت‌ها</a>
            <a href="#services">خدمات</a>
            <a href="#projects">نمونه‌کارها</a>
            <a href="#team">همکاران</a>
            <a href="#experience">سوابق</a>
            <a href="#contact">ارتباط</a>
        </div>
    </nav>

</header>


<main>

    <!-- Hero -->
    <section
        id="home"
        class="relative overflow-hidden border-b border-white/[0.07] min-h-[650px] flex items-center py-20"
    >

        <div class="absolute w-[450px] h-[450px] bg-[#c5a675]/10 blur-[130px] rounded-full -left-48 -top-20 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-5 lg:px-8 w-full grid md:grid-cols-2 gap-16 items-center relative">

            <div class="reveal">

                <div class="flex items-center gap-3 text-[#c5a675] text-xs mb-7">
                    <span class="w-7 h-px bg-[#c5a675]"></span>
                    توسعه‌دهنده وب و طراح دیجیتال
                </div>

                <h1 class="text-4xl sm:text-5xl lg:text-6xl font-bold leading-[1.8] mb-6">
                    سلام، من
                    <span class="text-[#c5a675]">حسین آبیاری</span>
                    سازنده ایده‌های دیجیتال.
                </h1>

                <p class="text-gray-400 text-base leading-8 max-w-xl">
                    به دنیای برنامه‌نویسی و طراحی وب خوش آمدید.
                    من به ساخت تجربه‌های دیجیتال مدرن، طراحی رابط‌های
                    کاربری جذاب و تبدیل ایده‌ها به محصولات واقعی علاقه دارم.
                </p>

                <div class="flex flex-wrap gap-3 mt-9">

                    <a
                        href="#projects"
                        class="bg-[#c5a675] text-[#090b0d] font-bold text-xs px-7 py-4 rounded-md hover:bg-[#dfc397] hover:-translate-y-1 transition"
                    >
                        مشاهده نمونه‌کارها ←
                    </a>

                    <a
                        href="#about"
                        class="border border-white/10 text-white text-xs px-7 py-4 rounded-md hover:border-[#c5a675] hover:text-[#c5a675] transition"
                    >
                        درباره من
                    </a>

                </div>

                <div class="flex flex-wrap gap-10 mt-14">

                    <div>
                        <div class="text-3xl font-bold text-[#c5a675]">03+</div>
                        <div class="text-gray-500 text-[11px] mt-2">مهارت تخصصی</div>
                    </div>

                    <div>
                        <div class="text-3xl font-bold text-[#c5a675]">10+</div>
                        <div class="text-gray-500 text-[11px] mt-2">پروژه تمرینی</div>
                    </div>

                    <div>
                        <div class="text-3xl font-bold text-[#c5a675]">100%</div>
                        <div class="text-gray-500 text-[11px] mt-2">اشتیاق به یادگیری</div>
                    </div>

                </div>

            </div>

            <div class="relative max-w-sm w-full mx-auto reveal">

                <div class="h-[450px] rounded-t-full rounded-b-lg border border-[#c5a675]/40 p-2 overflow-hidden">
                    <img
                        src="{{asset('assets/image/file_00000000271881f4bfca84e6c2d42609.png')}}"
                        alt="تصویر پروفایل"
                        class="w-full h-full object-cover rounded-t-full rounded-b-lg"
                    >
                </div>

                <div class="absolute -bottom-5 -right-5 bg-[#171c20] border border-white/10 rounded-lg px-6 py-4 shadow-xl">
                    <span class="block text-gray-500 text-[10px] mb-2">زمینه فعالیت</span>
                    <strong class="text-[#c5a675] text-sm">Web Developer</strong>
                </div>

            </div>

        </div>

    </section>


    <!-- Skills -->
    <section id="skills" class="py-24">

        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="mb-14 reveal">
                <div class="text-[#c5a675] text-xs mb-4">01 / تخصص‌های من</div>
                <h2 class="text-3xl font-bold">مهارت‌های من</h2>
                <p class="text-gray-500 text-xs mt-4">
                    ابزارها و تکنولوژی‌هایی که با آن‌ها کار می‌کنم.
                </p>
            </div>

            <div class="grid grid-cols-3 sm:grid-cols-3 lg:grid-cols-6 gap-y-10 gap-x-4">

                @foreach($skills as $skill)

                    <div class="flex flex-col items-center gap-4 group reveal">

                        <div class="w-24 h-24 lg:w-28 lg:h-28 rounded-full bg-gradient-to-br from-[#1c2225] to-[#101416] border border-white/[0.08] flex items-center justify-center relative transition duration-300 group-hover:-translate-y-2 group-hover:border-[#c5a675]/60 group-hover:shadow-[0_0_28px_rgba(197,166,117,0.1)]">

                            <div class="absolute inset-2 rounded-full border border-white/[0.06] group-hover:inset-1 group-hover:border-[#c5a675]/30 transition"></div>

                            <img
                                src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/{{ $skill['icon'] }}"
                                alt="{{ $skill['name'] }}"
                                class="w-10 h-10 lg:w-11 lg:h-11 object-contain transition group-hover:scale-110"
                                loading="lazy"
                            >

                        </div>

                        <span class="text-gray-300 text-xs">
                            {{ $skill['name'] }}
                        </span>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    <!-- About -->
    <section id="about" class="py-24 bg-[#0d1012] border-y border-white/[0.07]">

        <div class="max-w-7xl mx-auto px-5 lg:px-8 grid md:grid-cols-2 gap-14 items-center">

            <div class="h-[320px] md:h-[390px] rounded-lg overflow-hidden border border-white/10 reveal">
                <img
                    src="https://images.unsplash.com/photo-1498050108023-c5249f4df085?w=1000"
                    alt="فضای کاری"
                    class="w-full h-full object-cover hover:scale-105 transition duration-700"
                    loading="lazy"
                >
            </div>

            <div class="reveal">

                <div class="text-[#c5a675] text-xs mb-4">02 / داستان من</div>

                <h2 class="text-3xl font-bold mb-8">درباره من</h2>

                <h3 class="text-xl font-bold leading-loose mb-5">
                    علاقه‌مند به خلق
                    <span class="text-[#c5a675]">تجربه‌های دیجیتال</span>
                </h3>

                <p class="text-gray-400 text-sm leading-8">
                    برنامه‌نویسی برای من تنها نوشتن کد نیست؛
                    بلکه راهی برای حل مسئله، یادگیری و ساختن ایده‌های جدید است.
                    همیشه تلاش می‌کنم مهارت‌هایم را گسترش دهم و پروژه‌هایی
                    خلق کنم که علاوه بر زیبایی، کاربردی و قابل استفاده باشند.
                </p>

                <div class="grid grid-cols-2 gap-3 mt-7">

                    <div class="bg-[#111518] border border-white/[0.07] p-5 rounded-md">
                        <span class="text-gray-500 text-[10px] block mb-3">حوزه فعالیت</span>
                        <strong class="text-sm font-medium">توسعه وب</strong>
                    </div>

                    <div class="bg-[#111518] border border-white/[0.07] p-5 rounded-md">
                        <span class="text-gray-500 text-[10px] block mb-3">تکنولوژی مورد علاقه</span>
                        <strong class="text-sm font-medium">Laravel & PHP</strong>
                    </div>

                    <div class="bg-[#111518] border border-white/[0.07] p-5 rounded-md">
                        <span class="text-gray-500 text-[10px] block mb-3">علاقه‌مندی</span>
                        <strong class="text-sm font-medium">طراحی و برنامه‌نویسی</strong>
                    </div>

                    <div class="bg-[#111518] border border-white/[0.07] p-5 rounded-md">
                        <span class="text-gray-500 text-[10px] block mb-3">هدف</span>
                        <strong class="text-sm font-medium">یادگیری و پیشرفت</strong>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Services -->
    <section id="services" class="py-24 bg-[#0d1012]">

        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="mb-12 reveal">
                <div class="text-[#c5a675] text-xs mb-4">03 / فعالیت‌های من</div>
                <h2 class="text-3xl font-bold">خدمات من</h2>
                <p class="text-gray-500 text-xs mt-4">
                    زمینه‌هایی که در آن‌ها فعالیت و تجربه کسب می‌کنم.
                </p>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4">

                @foreach($services as $service)

                    <div class="bg-[#111518] border border-white/[0.07] rounded-lg p-7 hover:-translate-y-2 hover:border-[#c5a675]/40 transition duration-300 reveal">

                        <div class="w-12 h-12 rounded-lg bg-[#c5a675]/10 text-[#c5a675] flex items-center justify-center text-2xl mb-6">
                            {{ $service['icon'] }}
                        </div>

                        <h3 class="text-sm font-bold mb-4">
                            {{ $service['title'] }}
                        </h3>

                        <p class="text-gray-500 text-xs leading-7">
                            {{ $service['description'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    <!-- Projects -->

<!-- Projects -->
<section id="projects" class="py-24 bg-[#101012] border-y border-white/5">
    <div class="max-w-7xl mx-auto px-5">

        <div class="flex flex-col md:flex-row md:items-end justify-between gap-5 mb-14">
            <div>
                <span class="text-[#c6a66a] text-sm">نمونه‌کارها</span>
                <h2 class="text-3xl font-bold mt-3">
                    پروژه‌هایی که انجام داده‌ام
                </h2>
            </div>

            <p class="text-gray-500 text-sm leading-7 max-w-md">
                بخشی از پروژه‌های طراحی و توسعه وب که با تکنولوژی‌های مختلف پیاده‌سازی کرده‌ام.
            </p>
        </div>

        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-7">

            @foreach($projects as $project)
                <article class="group bg-[#151517] border border-white/[0.07] rounded-2xl overflow-hidden transition-all duration-500 hover:-translate-y-2 hover:border-[#c6a66a]/40">

                    <!-- تصویر پروژه -->
                    <div class="relative h-56 overflow-hidden">
                        <img
                            src="{{asset('storage/resume/' . $project['image']) }}"
                            alt="{{ $project['title'] }}"
                            class="w-full h-full object-cover transition-transform duration-700 group-hover:scale-110"
                        >

                        <div class="absolute inset-0 bg-gradient-to-t from-black/70 via-transparent to-transparent"></div>

                        <span class="absolute top-4 right-4 bg-black/60 backdrop-blur-md text-[#c6a66a] text-xs px-3 py-2 rounded-lg">
                            {{ $project['category'] }}
                        </span>
                    </div>

                    <!-- اطلاعات پروژه -->
                    <div class="p-6">

                        <h3 class="text-lg font-bold mb-3 group-hover:text-[#c6a66a] transition-colors">
                            {{ $project['title'] }}
                        </h3>

                        <p class="text-gray-500 text-sm leading-8 mb-6">
                            {{ $project['description'] }}
                        </p>

                        <!-- زبان‌ها و تکنولوژی‌ها -->
                        <div class="border-t border-white/[0.07] pt-5">

                            <div class="flex items-center justify-between mb-4">
                                <span class="text-gray-400 text-xs">
                                    تکنولوژی‌های استفاده‌شده
                                </span>

                                <span class="text-gray-600 text-[10px]">
                                    {{ count($project['technologies']) }} مورد
                                </span>
                            </div>

                            <div class="flex flex-wrap gap-2 mb-6">
                                @foreach($project['technologies'] as $tech)
                                    <span class="inline-flex items-center gap-2 bg-white/[0.04] border border-white/[0.07] rounded-lg px-3 py-2 text-xs text-gray-300 hover:border-[#c6a66a]/40 transition">
                                        <i class="{{ $tech['icon'] }} text-base"></i>
                                        {{ $tech['name'] }}
                                    </span>
                                @endforeach
                            </div>

                            <!-- دکمه مشاهده پروژه -->
                            <a
                                href="{{ $project['url'] }}"
                                target="_blank"
                                rel="noopener noreferrer"
                                class="flex items-center justify-center gap-3 w-full py-3 rounded-xl bg-[#c6a66a] text-[#111] text-sm font-bold transition-all duration-300 hover:bg-[#d8bc88] hover:shadow-lg hover:shadow-[#c6a66a]/10"
                            >
                                مشاهده پروژه
                                <span class="text-lg">←</span>
                            </a>

                        </div>
                    </div>

                </article>
            @endforeach

        </div>
    </div>
</section>



    <!-- Team -->
    <section id="team" class="py-24 bg-[#0d1012] border-y border-white/[0.07]">

        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="mb-12 reveal">
                <div class="text-[#c5a675] text-xs mb-4">05 / تیم ما</div>
                <h2 class="text-3xl font-bold">همکاران من</h2>
                <p class="text-gray-500 text-xs mt-4">
                    آشنایی با افرادی که در مسیر اجرای ایده‌ها و پروژه‌ها کنار من هستند.
                </p>
            </div>

            <div class="grid grid-cols-2 lg:grid-cols-4 gap-4">

                @foreach($team as $member)

                    <div class="bg-[#111518] border border-white/[0.07] rounded-lg p-6 text-center hover:-translate-y-2 hover:border-[#c5a675]/40 transition duration-300 reveal">

                        <div class="w-24 h-24 mx-auto mb-5 rounded-full p-[3px] border border-[#c5a675]/50">
                            <img
                                src="{{asset('storage/resume/' . $member['image'])}}?w=400"
                                alt="{{ $member['name'] }}"
                                class="w-full h-full object-cover rounded-full"
                                loading="lazy"
                            >
                        </div>

                        <h3 class="text-sm font-bold">
                            {{ $member['name'] }}
                        </h3>

                        <p class="text-[#c5a675] text-[11px] mt-3">
                            {{ $member['role'] }}
                        </p>

                    </div>

                @endforeach

            </div>

        </div>

    </section>


    <!-- Experience -->
    <section id="experience" class="py-24">

        <div class="max-w-7xl mx-auto px-5 lg:px-8">

            <div class="mb-12 reveal">
                <div class="text-[#c5a675] text-xs mb-4">06 / مسیر حرفه‌ای</div>
                <h2 class="text-3xl font-bold">تجربه و یادگیری</h2>
                <p class="text-gray-500 text-xs mt-4">
                    مراحلی از مسیر یادگیری و پیشرفت من.
                </p>
            </div>

            <div class="max-w-4xl">

                <div class="grid sm:grid-cols-[140px_1fr] gap-4 sm:gap-8 pb-8 border-b border-white/[0.07] reveal">

                    <div class="text-[#c5a675] text-xs">مرحله فعلی</div>

                    <div>
                        <h3 class="text-sm font-bold mb-3">توسعه پروژه‌های وب</h3>
                        <p class="text-gray-500 text-xs leading-7">
                            تمرکز بر Laravel، PHP و ساخت پروژه‌های کاربردی
                            و توسعه مهارت‌های برنامه‌نویسی.
                        </p>
                    </div>

                </div>

                <div class="grid sm:grid-cols-[140px_1fr] gap-4 sm:gap-8 py-8 border-b border-white/[0.07] reveal">

                    <div class="text-[#c5a675] text-xs">مرحله قبل</div>

                    <div>
                        <h3 class="text-sm font-bold mb-3">یادگیری طراحی فرانت‌اند</h3>
                        <p class="text-gray-500 text-xs leading-7">
                            یادگیری HTML، CSS و JavaScript
                            و تمرین طراحی صفحات واکنش‌گرا.
                        </p>
                    </div>

                </div>

                <div class="grid sm:grid-cols-[140px_1fr] gap-4 sm:gap-8 pt-8 reveal">

                    <div class="text-[#c5a675] text-xs">شروع مسیر</div>

                    <div>
                        <h3 class="text-sm font-bold mb-3">شروع برنامه‌نویسی</h3>
                        <p class="text-gray-500 text-xs leading-7">
                            آشنایی با مفاهیم اولیه برنامه‌نویسی
                            و ساخت پروژه‌های شخصی.
                        </p>
                    </div>

                </div>

            </div>

        </div>

    </section>


    <!-- Contact -->

<!-- Contact -->
<section id="contact" class="py-24">
    <div class="max-w-7xl mx-auto px-5 lg:px-8">

        <div class="text-center rounded-xl border border-[#c5a675]/20 p-10 md:p-16 bg-[radial-gradient(circle_at_50%_0%,rgba(197,166,117,0.09),transparent_60%),#111518] reveal">

            <div class="text-[#c5a675] text-xs mb-6">
                ارتباط با من
            </div>

            <h2 class="text-3xl md:text-4xl font-bold leading-relaxed">
                راه‌های
                <span class="text-[#c5a675]">ارتباطی</span>
                من
            </h2>

            <p class="text-gray-400 text-xs leading-8 max-w-xl mx-auto mt-5 mb-10">
                برای همکاری، مشاوره یا مطرح کردن پروژه‌های جدید
                می‌توانید از طریق راه‌های ارتباطی زیر با من در تماس باشید.
            </p>

            <div class="grid sm:grid-cols-2 lg:grid-cols-3 gap-4 text-right">

                <!-- Phone -->
                <a href="tel:09XXXXXXXXX"
                   class="bg-[#0d1012] border border-white/10 rounded-lg p-5 hover:border-[#c5a675]/50 transition">
                    <span class="text-[#c5a675] text-2xl">☎</span>
                    <span class="block text-gray-500 text-xs mt-4">شماره تماس</span>
                    <span class="block text-white text-sm mt-2" dir="ltr">09051612833</span>
                </a>

                <!-- Email -->
                <a href="mailto:your@email.com"
                   class="bg-[#0d1012] border border-white/10 rounded-lg p-5 hover:border-[#c5a675]/50 transition">
                    <span class="text-[#c5a675] text-2xl">✉</span>
                    <span class="block text-gray-500 text-xs mt-4">ایمیل</span>
                    <span class="block text-white text-sm mt-2">hosseinfaos1386@gmail.com</span>
                </a>

                <!-- Telegram -->
                <a href="https://instagram.com/YourUsername"
                   target="_blank"
                   rel="noopener noreferrer"
                   class="bg-[#0d1012] border border-white/10 rounded-lg p-5 hover:border-[#c5a675]/50 transition">
                   <i class="fab fa-instagram">📸</i>
                    <span class="block text-gray-500 text-xs mt-4">اینستاگرام</span>
                    <span class="block text-white text-sm mt-2">hossin_abyare</span>
                </a>

            </div>

        </div>
    </div>
</section>


</main>


<!-- Footer -->
<footer class="border-t border-white/[0.07]">

    <div class="max-w-7xl mx-auto px-5 lg:px-8 min-h-[100px] py-7 flex flex-col md:flex-row items-center justify-between gap-5">

        <p class="text-gray-500 text-[11px]">
            © 2026 تمامی حقوق محفوظ است.
        </p>

        <a href="#home" class="text-2xl font-extrabold tracking-widest">
            DEV<span class="text-[#c5a675]">.</span>
        </a>

        <p class="text-gray-500 text-[11px]">
            طراحی و توسعه با علاقه
        </p>

    </div>

</footer>


<script>
    // Mobile Menu
    const menuToggle = document.getElementById('menuToggle');
    const navMenu = document.getElementById('mobileMenu');

    menuToggle.addEventListener('click', () => {
        const isOpen = navMenu.classList.toggle('hidden');

        menuToggle.setAttribute('aria-expanded', String(!isOpen));
        menuToggle.textContent = isOpen ? '☰' : '✕';
    });

    // Close Menu After Click
    navMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            navMenu.classList.add('hidden');
            menuToggle.textContent = '☰';
            menuToggle.setAttribute('aria-expanded', 'false');
        });
    });

    // Scroll Reveal
    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('visible');
                observer.unobserve(entry.target);
            }
        });
    }, {
        threshold: 0.12
    });

    document.querySelectorAll('.reveal').forEach(element => {
        observer.observe(element);
    });
</script>

</body>
</html>
