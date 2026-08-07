<!DOCTYPE html>
<html lang="fa" dir="rtl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ url('assets/css/style.css') }}" type="text/css">
    <link rel="stylesheet" href="{{ url('assets/css/fontiran.css') }}" type="text/css">
    <script src="{{ asset('assets/tailwind.js') }}"></script>    
    <link rel="stylesheet" href="./fontiran.css">
    <title>Document</title>
    <style>
        /* =========================
   Base
========================= */



/* =========================
   Background Glow
========================= */

.bg-glow {
  position: absolute;
  top: -200px;
  left: 50%;
  transform: translateX(-50%);
  width: 800px;
  height: 800px;
  background: radial-gradient(circle, rgba(255,193,7,0.08), transparent 60%);
  filter: blur(120px);
  z-index: 0;
}

/* =========================
   Section Wrapper
========================= */

.skills-section {
  position: relative;
  overflow: hidden;
}

/* =========================
   Skill Card
========================= */

.skill {
  display: flex;
  flex-direction: column;
  align-items: center;
  gap: 14px;
  position: relative;
  z-index: 1;
}

/* =========================
   Circle Base
========================= */

.circle {
  width: 140px;
  height: 140px;
  border-radius: 50%;
  background: rgba(255, 255, 255, 0.03);
  border: 1px solid rgba(255, 255, 255, 0.08);
  display: flex;
  align-items: center;
  justify-content: center;
  position: relative;
  transition: all 0.4s ease;
  box-shadow: 0 0 25px rgba(255, 255, 255, 0.05);
}

/* Inner Ring */
.circle::before {
  content: "";
  position: absolute;
  inset: 10px;
  border-radius: 50%;
  border: 1px solid rgba(255, 255, 255, 0.05);
}

/* Glow bottom effect */
.circle::after {
  content: "";
  position: absolute;
  bottom: -10px;
  width: 60px;
  height: 60px;
  background: rgba(255, 193, 7, 0.35);
  filter: blur(25px);
  border-radius: 50%;
  opacity: 0.6;
}

/* =========================
   Image inside circle
========================= */

.circle img {
  width: 60px;
  height: 60px;
  object-fit: contain;
  z-index: 2;
  transition: transform 0.3s ease;
}

/* =========================
   Hover Effects
========================= */

.skill:hover .circle {
  transform: translateY(-8px);
  border-color: rgba(255, 193, 7, 0.3);
  box-shadow: 0 0 40px rgba(255, 193, 7, 0.15);
}

.skill:hover img {
  transform: scale(1.15);
}

/* =========================
   Text
========================= */

.skill p {
  font-size: 18px;
  color: #e5e5e5;
}
        .btn-shadow {
            box-shadow:
                0 0 20px rgba(77, 163, 255, .12),
                inset 0 0 0 1px rgba(255, 255, 255, .04);

            transition: .35s ease;
        }
    </style>
</head>

<body class="bg-black">
    <header class="w-full flex justify-center items-center py-2 lg:py-0">
        <div class="w-[98%] flex items-center justify-between">
            <div class="flex items-center justify-between w-4/12 lg:hidden lg:w-1/16 ">
                <div class="flex flex-col i lg:gap-2 gap-1 cursor-pointer">
                    <div class="bg-[#ffffff] lg:w-12 w-8 h-[2px] rounded-xl"></div>
                    <div class="bg-[#ffffff] lg:w-12 w-8 h-[2px] rounded-xl"></div>
                    <div class="bg-[#ffffff] lg:w-12 w-8 h-[2px] rounded-xl"></div>
                </div>
                <div class="w-9/12 flex justify-start">
                    <div class="w-8/12 border border-gray-300 flex justify-center items-center gap-3 p-3 rounded-2xl bg-[rgba(255,255,255,.03)] cursor-pointer hover:border-[#4DA3FF] group btn-shadow">
                        <span class="text-[#EAEAEA] text-[0.9rem] group-hover:text-[#fff] transition-all duration-300 text-nowrap">دانلود رزونه</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="min-w-4 max-w-4 fill-[#EAEAEA] group-hover:fill-[#fff] transition-all duration-300">
                            <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="lg:w-4/12 w-9/12 lg:flex justify-start hidden">
                <div class="lg:w-4/12 hidden lg:flex justify-start">
                    <div class="lg:min-w-44 lg:max-w-44 border border-gray-300 flex justify-center items-center gap-3 lg:p-3 p-3 rounded-2xl bg-[rgba(255,255,255,.03)] cursor-pointer hover:border-[#4DA3FF] group btn-shadow">
                        <span class="text-[#EAEAEA] lg:text-xl group-hover:text-[#fff] transition-all duration-300 text-nowrap">دانلود رزونه</span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="lg:min-w-5 lg:max-w-5 min-w-4 max-w-4 fill-[#EAEAEA] group-hover:fill-[#fff] transition-all duration-300">
                            <path d="M288 32c0-17.7-14.3-32-32-32s-32 14.3-32 32V274.7l-73.4-73.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l128 128c12.5 12.5 32.8 12.5 45.3 0l128-128c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L288 274.7V32zM64 352c-35.3 0-64 28.7-64 64v32c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V416c0-35.3-28.7-64-64-64H346.5l-45.3 45.3c-25 25-65.5 25-90.5 0L165.5 352H64zm368 56a24 24 0 1 1 0 48 24 24 0 1 1 0-48z" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-5/12 lg:flex items-center justify-between flex-wrap hidden">
                <a href="" class="relative w-17 flex justify-center group transtion-all duration-300">
                    <span
                        class="text-[#EAEAEA] text-xl group-hover:text-[1.3rem] group-hover:scale-140 transtion-all duration-300 text-nowrap">خانه</span>
                    <div class="absolute bg-[#c1bfc3] w-0 group-hover:w-full h-[3px] -bottom-8 roundex-full flex justify-center items-center transtion-all duration-300"
                        style="background: linear-gradient(90deg,rgba(255,255,255,.15) 0%,rgba(255,255,255,.95) 50%,rgba(255,255,255,.15) 100%);box-shadow:0 0 6px rgba(255,255,255,.35),0 0 12px rgba(255,255,255,.18);">
                        <div class="w-2 h-2 bg-[#fefefe] rounded-xl relative -top-[1px] blur-[1px]"></div>
                    </div>
                </a>
                <a href="#me" class="relative w-17 flex justify-center group transtion-all duration-300">
                    <span
                        class="text-[#EAEAEA] text-xl group-hover:text-[1.3rem] group-hover:scale-140 transtion-all duration-300 text-nowrap">درباره
                        من</span>
                    <div class="absolute bg-[#c1bfc3] w-0 group-hover:w-full h-[3px] -bottom-8 roundex-full flex justify-center items-center transtion-all duration-300"
                        style="background: linear-gradient(90deg,rgba(255,255,255,.15) 0%,rgba(255,255,255,.95) 50%,rgba(255,255,255,.15) 100%);box-shadow:0 0 6px rgba(255,255,255,.35),0 0 12px rgba(255,255,255,.18);">
                        <div class="w-2 h-2 bg-[#fefefe] rounded-xl relative -top-[1px] blur-[1px]"></div>
                    </div>
                </a>
                <a href="#skill" class="relative w-17 flex justify-center group  transtion-all duration-300">
                    <span
                        class="text-[#EAEAEA] text-xl group-hover:text-[1.3rem] group-hover:scale-140 transtion-all duration-300 text-nowrap">مهارت
                        ها</span>
                    <div class="absolute bg-[#c1bfc3] w-0 group-hover:w-full h-[3px] -bottom-8 roundex-full flex justify-center items-center transtion-all duration-300"
                        style="background: linear-gradient(90deg,rgba(255,255,255,.15) 0%,rgba(255,255,255,.95) 50%,rgba(255,255,255,.15) 100%);box-shadow:0 0 6px rgba(255,255,255,.35),0 0 12px rgba(255,255,255,.18);">
                        <div class="w-2 h-2 bg-[#fefefe] rounded-xl relative -top-[1px] blur-[1px]"></div>
                    </div>
                </a>
                <a href="#tokenism" class="relative w-17 flex justify-center group  transtion-all duration-300">
                    <span
                        class="text-[#EAEAEA] text-xl group-hover:text-[1.3rem] group-hover:scale-140 transtion-all duration-300 text-nowrap">پرژه
                        ها</span>
                    <div class="absolute bg-[#c1bfc3] w-0 group-hover:w-full h-[3px] -bottom-8 roundex-full flex justify-center items-center transtion-all duration-300"
                        style="background: linear-gradient(90deg,rgba(255,255,255,.15) 0%,rgba(255,255,255,.95) 50%,rgba(255,255,255,.15) 100%);box-shadow:0 0 6px rgba(255,255,255,.35),0 0 12px rgba(255,255,255,.18);">
                        <div class="w-2 h-2 bg-[#fefefe] rounded-xl relative -top-[1px] blur-[1px]"></div>
                    </div>
                </a>
                <a href="#phone" class="relative w-20 flex justify-center group  transtion-all duration-300">
                    <span
                        class="text-[#EAEAEA] text-xl group-hover:text-[1.3rem] group-hover:scale-140 transtion-all duration-300 text-nowrap">تماس
                        با من</span>
                    <div class="absolute bg-[#c1bfc3] w-0 group-hover:w-full h-[3px] -bottom-8 roundex-full flex justify-center items-center transtion-all duration-300"
                        style="background: linear-gradient(90deg,rgba(255,255,255,.15) 0%,rgba(255,255,255,.95) 50%,rgba(255,255,255,.15) 100%);box-shadow:0 0 6px rgba(255,255,255,.35),0 0 12px rgba(255,255,255,.18);">
                        <div class="w-2 h-2 bg-[#fefefe] rounded-xl relative -top-[1px] blur-[1px]"></div>
                    </div>
                </a>
            </div>
            <div class="lg:w-2/12 w-4/12 flex justify-end group">
                <div class="lg:min-w-50 lg:max-w-50 min-w-30 max-w-30">
                    <img class="group-hover:scale-119 transition-all duration-300" src="{{asset('storage/resume/71c31160-2264-4fc2-8637-26beb8047f9e.png')}}" alt="">
                </div>
            </div>
        </div>
    </header>
    <nav class="w-full flex justify-center items-center py-8">
        <div class="w-[95%] flex justify-end">
            <div class="w-full flex justify-start absolute md:top-0 top-10 -z-1">
                <div
                    class="xl:min-w-330 xl:max-w-330 lg:min-w-265 lg:max-w-265 md:min-w-220 md:max-w-220 min-w-full min-w-full h-200 relative overflow-hidden rounded-[8rem] transtion-all duration-300">
                    <img class="scale-125" src="{{asset('storage/resume/0ecf060c-c5df-4ddd-aed2-8366ea06352d.jfif')}}" alt="">
                    <div class="absolute top-0 w-full h-full"
                        style="background:radial-gradient(circle at center,transparent 50%,rgba(0,0,0,.15) 55%,rgba(0,0,0,.55) 80%,rgba(0,0,0,.9) 85%);">
                    </div>
                </div>
            </div>

            <div class="w-full md:w-7/12 lg:w-6/12 flex justify-center">
                <div class="flex flex-col items-center gap-5 pr-10 w-9/12">
                    <span class="text-[#f6f8f8] lg:text-[1.5rem] md:text-[1.5rem] transtion-all duration-300">سلام ،
                        من</span>
                    <span
                        class="text-white lg:text-[4rem] md:text-[2.8rem] font-bold text-nowrap transtion-all duration-300">برنامه
                        نویس خلاق</span>
                    <div class="lg:text-[4rem] md:text-[2.8rem] font-bold text-nowrap transtion-all duration-300">
                        <span class="text-white">عاشق</span>
                        <span class="text-[#f3b113]">حل مسئله</span>
                    </div>
                    <p
                        class="lg:text-[1.3rem] md:text-[1rem] text-[.5rem] font-bold text-start text-[#9b9d9e] w-full transtion-all duration-300">
                        من یک توسعه دهنده فول استک هستم که
                        عاشق طراحی تجربه های دیجیتال سریع زیبا و کاربر پسند هستم وتبدیل ایده به محصولات واقعی و
                        باکیفیت هدفه منه</p>
                    <div class="flex justify-center md:justify-evenly items-center w-full gap-4 md:gap-10 px-2 md:px-10 flex-wrap">
                        <a href=""
                            class="lg:min-w-50 lg:max-w-50 min-w-33 max-w-33 border-1 border-gray-300 flex justify-center items-center gap-3 lg:p-3 lg:p-4 p-3 rounded-2xl bg-[rgba(255,255,255,.03)] cursor-pointer hover:border-[#4DA3FF] group btn-shadow">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                                class="lg:min-w-5 lg:max-w-4 min-w-3 max-w-4 fill-[#EAEAEA] group-hover:fill-[#fff] transtion-all duration-300">
                                <path
                                    d="M224 256A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3z" />
                            </svg>
                            <span
                                class="text-[#EAEAEA] lg:text-[1.1rem] text-[.9rem] group-hover:text-[#fff] transtion-all duration-300 text-nowrap">درباره
                                من</span>
                        </a>
                        <a href=""
                            class="lg:min-w-50 lg:max-w-50 h-13 min-w-33 max-w-33 bg-[#fcae19] flex items-center justify-center rounded-2xl gap-3">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-5">
                                <path
                                    d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                            </svg>
                            <span class="mb-1 lg:text-[1.1rem] text-[.9rem] text-nowrap">
                                مشاهده پروژه
                            </span>
                        </a>
                    </div>
                    <div class="flex flex-col items-center justify-center gap-5">
                        <span class="text-[#9b9d9e] lg:text-[1rem] text-[.6rem]">من را در شبگه های اجتماعی دنبال
                            کنید</span>
                        <div class="flex items-center justify-center gap-4">
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                    class="lg:size-7 size-4 fill-white">
                                    <path
                                        d="M248,8C111.033,8,0,119.033,0,256S111.033,504,248,504,496,392.967,496,256,384.967,8,248,8ZM362.952,176.66c-3.732,39.215-19.881,134.378-28.1,178.3-3.476,18.584-10.322,24.816-16.948,25.425-14.4,1.326-25.338-9.517-39.287-18.661-21.827-14.308-34.158-23.215-55.346-37.177-24.485-16.135-8.612-25,5.342-39.5,3.652-3.793,67.107-61.51,68.335-66.746.153-.655.3-3.1-1.154-4.384s-3.59-.849-5.135-.5q-3.283.746-104.608,69.142-14.845,10.194-26.894,9.934c-8.855-.191-25.888-5.006-38.551-9.123-15.531-5.048-27.875-7.717-26.8-16.291q.84-6.7,18.45-13.7,108.446-47.248,144.628-62.3c68.872-28.647,83.183-33.623,92.511-33.789,2.052-.034,6.639.474,9.61,2.885a10.452,10.452,0,0,1,3.53,6.716A43.765,43.765,0,0,1,362.952,176.66Z" />
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="lg:size-7 size-4 fill-white" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <circle cx="17.5" cy="6.5" r="1"></circle>
                                </svg>
                            </a>
                            <a href="">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                    class="lg:size-7 size-4 fill-white">
                                    <path
                                        d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>
    <main class="w-full flex flex-col justify-center items-center mt-5">
        <section class="w-[90%] flex justify-between items-center" id="me">
            <div class="w-fulll lg:w-8/12 flex flex-col items-center gap-10">
                <div class="w-full flex justify-center gap-2 items-center lg:hidden">
                    <div class="w-1.5 h-1.5 bg-[#e2af06] rounded-full"></div>
                    <span class="text-white mb-1">درباره من</span>
                    <div class="w-1.5 h-1.5 bg-[#e2af06] rounded-full"></div>
                </div>
                <div class="md:flex items-center gap-5 grid grid-cols-2">
                    <div
                        class="md:w-5/20 relative rounded-3xl border p-1 border-white/10 bg-white/[0.05] backdrop-blur-xl shadow-[inset_0_1px_0_rgba(255,255,255,.05),0_0_30px_rgba(0,0,0,.35)] transition-all duration-300 hover:border-yellow-400/70 hover:-translate-y-1.5">
                        <img class="" src="{{asset('storage/resume/file_00000000d744720ab99efcc4edb44c86.jpg')}}" alt="">
                        <div class="flex flex-col items-center gap-4 w-full bg-black">
                            <span class="text-[#ececec] text-[1.8rem] text-center">کار تیمی</span>
                            <span class="text-[#848385] text-[1.1rem] pb-6 text-center">همکاری موثر ، نتیجه بهتر</span>
                        </div>
                        <div class="absolute w-full" style=""></div>
                    </div>
                    <div
                        class="md:w-5/20 relative rounded-3xl border p-1 border-white/10 bg-white/[0.05] backdrop-blur-xl shadow-[inset_0_1px_0_rgba(255,255,255,.05),0_0_30px_rgba(0,0,0,.35)] transition-all duration-300 hover:border-yellow-400/70 hover:-translate-y-1.5">
                        <img class="" src="{{asset('storage/resume/file_00000000104c720ca94a3cbd4462c013.jpg')}}" alt="">
                        <div class="flex flex-col items-center gap-4 bg-black">
                            <span class="text-[#ececec] text-[1.8rem] text-center"> یادگیری</span>
                            <span class="text-[#848385] text-[1.1rem] pb-6 text-center">همکاری موثر ، نتیجه بهتر</span>
                        </div>
                    </div>
                    <div
                        class="md:w-5/20 relative rounded-3xl border p-1 border-white/10 bg-white/[0.05] backdrop-blur-xl shadow-[inset_0_1px_0_rgba(255,255,255,.05),0_0_30px_rgba(0,0,0,.35)] transition-all duration-300 hover:border-yellow-400/70 hover:-translate-y-1.5">
                        <img class="" src="{{asset('storage/resume/file_0000000096c8720aa11a50ca70bd51d2.jpg')}}" alt="">
                        <div class="flex flex-col items-center gap-4 bg-black">
                            <span class="text-[#ececec] text-[1.8rem] text-center">تحلیل </span>
                            <span class="text-[#848385] text-[1.1rem] pb-6 text-center">داده محور، هدف مند و دقیق</span>
                        </div>
                    </div>
                    <div
                        class="md:w-5/20 relative rounded-3xl border p-1 border-white/10 bg-white/[0.05] backdrop-blur-xl shadow-[inset_0_1px_0_rgba(255,255,255,.05),0_0_30px_rgba(0,0,0,.35)] transition-all duration-300 hover:border-yellow-400/70 hover:-translate-y-1.5">
                        <img class="" src="{{asset('storage/resume/file_000000001954720cb70b55544757c533.jpg')}}" alt="">
                        <div class="flex flex-col items-center gap-4 bg-black">
                            <span class="text-[#ececec] text-[1.8rem] text-center">تفکر </span>
                            <span class="text-[#848385] text-[1.1rem] pb-6 text-center">داده محور، هدف مند و دقیق</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-5/12  lg:flex flex-col items-end justify-center gap-10 hidden">
                <div class="w-9/12 flex justify-end gap-2 items-center">
                    <div class="w-1.5 h-1.5 bg-[#e2af06] rounded-full"></div>
                    <span class="text-white mb-1">درباره من</span>
                    <div class="w-1.5 h-1.5 bg-[#e2af06] rounded-full"></div>
                </div>
                <h2 class="text-[2.7rem] text-[#f4f4f4] font-bold">به کد نویسی زندگی می بخشم</h2>
                <span class="text-[#acadad] text-[1.1rem] w-9/12">من با ترکیب خلاقیت ،منطق و تکنولوژی وبسایت ها و
                    اپلیکیشن هایی می سازم که نه تنها زیباهستند بلکه عمل کرد عالی و تجربه کاربری فوقالعاده ای ارائه می
                    دهند.
                </span>
                <div class="w-9/12 flex justify-end">
                    <button
                        class="w-60 border border-white/50 py-5 rounded-2xl flex items-center justify-center gap-5 hover:border-white/80 transition-all duration-300 group">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                            class="size-5 fill-[#acadad] group-hover:fill-white transition-all duration-300">
                            <path
                                d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z" />
                        </svg>
                        <span
                            class="text-[#acadad] text-[1.3rem] mb-2 group-hover:text-white transition-all duration-300">بیشتر
                            بدانید</span>
                    </button>
                </div>
            </div>
        </section>
        <section class="w-[90%] py-25" id="skill">

            <div class="flex flex-col mx-auto px-6">
                <div class="w-full flex justify-end">
                    <div class="flex items-center gap-3">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                        <div class="h-[1px] w-15 bg-yellow-300"></div>
                        <h2 class="text-2xl font-bold text-white mb-2">مهارت‌های من</h2>
                        <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>

                    </div>
                </div>
                <div class="lg:flex justify-between mt-15 grid md:grid-cols-3 grid-cols-2 gap-15">

                    <div class="skill">
                        <div class="circle scale-130">
                            <img class="scale-150" src="{{asset('storage/resume/html.png')}}" >
                        </div>
                        <p>HTML</p>
                    </div>

                    <div class="skill">
                        <div class="circle scale-130">
                            <img class="scale-150" src="{{asset('storage/resume/css.png')}}" >
                        </div>
                        <p>CSS</p>
                    </div>

                    <div class="skill">
                        <div class="circle scale-130">
                            <img class="scale-150" src="{{asset('storage/resume/js.png')}}" >
                        </div>
                        <p>JavaScript</p>
                    </div>

                    <div class="skill">
                        <div class="circle scale-130">
                            <img class="scale-150" src="{{asset('storage/resume/laravel.png')}}" >
                        </div>
                        <p>laravel</p>
                    </div>
                    <div class="skill">
                        <div class="circle scale-130">
                            <img class="scale-150" src="{{asset('storage/resume/php.png')}}" >
                        </div>
                        <p>php</p>
                    </div>
                    <div class="skill">
                        <div class="circle scale-130">
                            <img class="scale-150" src="{{asset('storage/resume/git.png')}}" >
                        </div>
                        <p>Git</p>
                    </div>

                </div>
            </div>
        </section>
        <!-- ====== SERVICES SECTION (با عکس در سمت راست) ====== -->
        <section class="w-[95%] md:w-[90%] relative">
            <div class="flex flex-col mx-auto lg:px-6">
                <div class="w-full flex justify-end">
                    <div class="flex items-center gap-3">
                        <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                        <div class="h-[1px] w-15 bg-yellow-300"></div>
                        <h2 class="text-2xl font-bold text-white mb-2"> خدماتی که ارائه میدهم</h2>
                        <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                    </div>
                </div>
                <div class="lg:w-9/24 flex justify-start absolute lg:-top-20 -top-5 -z-1">
                    <div
                        class="relative overflow-hidden rounded-[2rem] lg:rounded-[8rem] transtion-all duration-300">
                        <img class="scale-120 w-full h-140" src="{{asset('storage/resume/b14c1858-d8d9-43f6-9512-e1784d497fc7.png')}}" alt="">
                        <div class="absolute lg:block top-0 w-full h-full hidden"
                            style="background:radial-gradient(circle at center,transparent 50%,rgba(0,0,0,.15) 55%,rgba(0,0,0,.55) 65%,rgba(0,0,0,.9) 75%);">
                        </div>
                    </div>
                </div>
                <div class="w-full flex justify-end py-10 p-5 lg:p-0 mt-10">
                    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6 max-w-6xl w-full">
                        <div class="group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 text-center transition-all duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)] overflow-hidden">
                            <div class="absolute -top-1/2 -left-1/2 w-[200%] h-[200%] bg-[radial-gradient(circle_at_center,rgba(255,193,7,0.03),transparent_60%)] opacity-0 group-hover:opacity-100 transition-opacity duration-600 pointer-events-none"></div>
                            <div class="relative z-10 w-[72px] h-[72px] mx-auto mb-5 bg-yellow-400/10 rounded-full flex items-center justify-center border border-yellow-400/10 transition-all duration-500 group-hover:bg-yellow-400/20 group-hover:border-yellow-400/30 group-hover:scale-110 group-hover:-rotate-6">
                                <span class="text-5xl">🌐</span>
                            </div>
                            <h4 class="relative z-10 text-2xl font-bold text-white mb-2 transition-colors duration-300 group-hover:text-yellow-400">توسعه وب</h4>
                            <p class="relative z-10 text-[#9b9d9e] text-base leading-relaxed transition-colors duration-300 group-hover:text-yellow-300">طراحی و توسعه وب‌سایت‌های مدرن و انکشاف‌گرا</p>
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-gradient-to-r from-transparent via-yellow-400 to-transparent transition-all duration-500 group-hover:w-[70%]"></div>
                        </div>
                        <div class="group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 text-center transition-all duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)] overflow-hidden">
                            <div class="absolute -top-1/2 -left-1/2 w-[200%] h-[200%] bg-[radial-gradient(circle_at_center,rgba(255,193,7,0.03),transparent_60%)] opacity-0 group-hover:opacity-100 transition-opacity duration-600 pointer-events-none"></div>
                            <div class="relative z-10 w-[72px] h-[72px] mx-auto mb-5 bg-yellow-400/10 rounded-full flex items-center justify-center border border-yellow-400/10 transition-all duration-500 group-hover:bg-yellow-400/20 group-hover:border-yellow-400/30 group-hover:scale-110 group-hover:-rotate-6">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-12 fill-[#6fb5ed]">
                                    <path d="M96 32C78.3 32 64 46.3 64 64V448c0 17.7 14.3 32 32 32H288c17.7 0 32-14.3 32-32V64c0-17.7-14.3-32-32-32H96zM32 64C32 28.7 60.7 0 96 0H288c35.3 0 64 28.7 64 64V448c0 35.3-28.7 64-64 64H96c-35.3 0-64-28.7-64-64V64zM192 392a24 24 0 1 1 0 48 24 24 0 1 1 0-48z"/>
                                </svg>
                            </div>
                            <h4 class="relative z-10 text-2xl font-bold text-white mb-2 transition-colors duration-300 group-hover:text-yellow-400">اپلیکیشن موبایل</h4>
                            <p class="relative z-10 text-[#9b9d9e] text-base leading-relaxed transition-colors duration-300 group-hover:text-yellow-300">ساخت اپلیکیشن‌های گرافیک و برنامه‌نویسی</p>
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-gradient-to-r from-transparent via-yellow-400 to-transparent transition-all duration-500 group-hover:w-[70%]"></div>
                        </div>
                        <div class="group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 text-center transition-all duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)] overflow-hidden">
                            <div class="absolute -top-1/2 -left-1/2 w-[200%] h-[200%] bg-[radial-gradient(circle_at_center,rgba(255,193,7,0.03),transparent_60%)] opacity-0 group-hover:opacity-100 transition-opacity duration-600 pointer-events-none"></div>
                            <div class="relative z-10 w-[72px] h-[72px] mx-auto mb-5 bg-yellow-400/10 rounded-full flex items-center justify-center border border-yellow-400/10 transition-all duration-500 group-hover:bg-yellow-400/20 group-hover:border-yellow-400/30 group-hover:scale-110 group-hover:-rotate-6">
                                <span class="text-5xl">🛒</span>
                            </div>
                            <h4 class="relative z-10 text-2xl font-bold text-white mb-2 transition-colors duration-300 group-hover:text-yellow-400">فروشگاه آنلاین</h4>
                            <p class="relative z-10 text-[#9b9d9e] text-base leading-relaxed transition-colors duration-300 group-hover:text-yellow-300">طراحی فروشگاه‌های حرفه‌ای با پنل مدیریت کامل</p>
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-gradient-to-r from-transparent via-yellow-400 to-transparent transition-all duration-500 group-hover:w-[70%]"></div>
                        </div>
                        <div class="group relative bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl p-8 text-center transition-all duration-500 hover:-translate-y-3 hover:scale-[1.02] hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)] overflow-hidden">
                            <div class="absolute -top-1/2 -left-1/2 w-[200%] h-[200%] bg-[radial-gradient(circle_at_center,rgba(255,193,7,0.03),transparent_60%)] opacity-0 group-hover:opacity-100 transition-opacity duration-600 pointer-events-none"></div>
                            <div class="relative z-10 w-[72px] h-[72px] mx-auto mb-5 bg-yellow-400/10 rounded-full flex items-center justify-center border border-yellow-400/10 transition-all duration-500 group-hover:bg-yellow-400/20 group-hover:border-yellow-400/30 group-hover:scale-110 group-hover:-rotate-6">
                                <span class="text-5xl">🎨</span>
                            </div>
                            <h4 class="relative z-10 text-2xl font-bold text-white mb-2 transition-colors duration-300 group-hover:text-yellow-400">طراحی UI/UX</h4>
                            <p class="relative z-10 text-[#9b9d9e] text-base leading-relaxed transition-colors duration-300 group-hover:text-yellow-300">طراحی رایانه‌ای برای تجربه کاربری متخصصانه</p>
                            <div class="absolute bottom-0 left-1/2 -translate-x-1/2 w-0 h-[2px] bg-gradient-to-r from-transparent via-yellow-400 to-transparent transition-all duration-500 group-hover:w-[70%]"></div>
                        </div>
                
                    </div>
                </div>
            </div>
        </section>
        <!-- ====== PROJECTS SECTION (فقط کارت سمت راست) ====== -->
        <section class="w-[95%] md:w-[90%] py-12 md:py-16" id="tokenism">
            <!-- Title -->
            <div class="w-full flex justify-end mb-8 md:mb-10">
                <div class="flex items-center gap-3">
                    <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                    <div class="h-[1px] w-12 md:w-16 bg-yellow-300"></div>
                    <h2 class="text-xl md:text-2xl font-bold text-white">نمونه پروژه‌ها</h2>
                    <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                </div>
            </div>

            <!-- Projects Grid (فقط کارت سوم) -->
            <div class="flex flex-col items-center gap-10">

                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-5 ">
                    
                    <div class="relative flex justify-center h-85 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">
                        
                        <!-- Image -->
                        <div class="w-full h-full overflow-hidden">
                            <img src="{{asset('storage/resume/caffegreen.png')}}" alt="project image" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>
                        
                        <!-- Content -->
                        <div class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="w-12 h-12 bg-white rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-8 group-hover:fill-yellow-400 transition-colors duration-300">
                                    <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/>
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4 class="text-lg md:text-xl font-bold text-white mb-1 transition-colors duration-300 group-hover:text-yellow-400">
                                    فروشگاه
                                </h4>
                                <p class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex justify-center h-85 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">
                        
                        <!-- Image -->
                        <div class="w-full h-full overflow-hidden">
                            <img src="{{asset('storage/resume/shahkarpng.png')}}" alt="project image" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>
                        
                        <!-- Content -->
                        <div class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="w-12 h-12 bg-white rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-8 group-hover:fill-yellow-400 transition-colors duration-300">
                                    <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/>
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4 class="text-lg md:text-xl font-bold text-white mb-1 transition-colors duration-300 group-hover:text-yellow-400">
                                    فروشگاه
                                </h4>
                                <p class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex justify-center h-85 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">
                        
                        <!-- Image -->
                        <div class="w-full h-full overflow-hidden">
                            <img src="{{asset('storage/resume/mrsimy.png')}}" alt="project image" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>
                        
                        <!-- Content -->
                        <div class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="w-12 h-12 bg-white rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-8 group-hover:fill-yellow-400 transition-colors duration-300">
                                    <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/>
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4 class="text-lg md:text-xl font-bold text-white mb-1 transition-colors duration-300 group-hover:text-yellow-400">
                                    فروشگاه
                                </h4>
                                <p class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="relative flex justify-center h-85 group bg-white/5 backdrop-blur-xl border border-white/10 rounded-3xl overflow-hidden transition-all duration-500 hover:-translate-y-3 hover:border-yellow-400/30 hover:shadow-[0_20px_60px_rgba(255,193,7,0.08)] shadow-[0_8px_32px_rgba(0,0,0,0.3)]">
                        
                        <!-- Image -->
                        <div class="w-full h-full overflow-hidden">
                            <img src="{{asset('storage/resume/rinTeach.png')}}" alt="project image" class="w-full h-full object-cover transition-all duration-500 group-hover:scale-110">
                            <!-- گرادیانت روی عکس -->
                            <!-- <div class="absolute inset-0 bg-gradient-to-t from-black/60 via-transparent to-transparent"></div> -->
                        </div>
                        
                        <!-- Content -->
                        <div class="p-5 md:p-6 text-center bg-gradient-to-t from-black w-full absolute bottom-0 flex justify-between">
                            <div class="w-12 h-12 bg-white rounded-full flex justify-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-8 group-hover:fill-yellow-400 transition-colors duration-300">
                                    <path d="M440.6 273.4c4.7-4.5 7.4-10.8 7.4-17.4s-2.7-12.8-7.4-17.4l-176-168c-9.6-9.2-24.8-8.8-33.9 .8s-8.8 24.8 .8 33.9L364.1 232 24 232c-13.3 0-24 10.7-24 24s10.7 24 24 24l340.1 0L231.4 406.6c-9.6 9.2-9.9 24.3-.8 33.9s24.3 9.9 33.9 .8l176-168z"/>
                                </svg>
                            </div>
                            <div class="flex flex-col text-end">
                                <h4 class="text-lg md:text-xl font-bold text-white mb-1 transition-colors duration-300 group-hover:text-yellow-400">
                                    فروشگاه
                                </h4>
                                <p class="text-[#9b9d9e] text-sm transition-colors duration-300 group-hover:text-[#c0c2c4]">
                                    Next.js - Tailwind - Stripe
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <a href=""
                    class="lg:min-w-65 lg:max-w-65 min-w-33 max-w-33 border-1 border-gray-300 flex justify-around items-center gap-3 lg:p-3 lg:p-4 p-3 rounded-2xl bg-[rgba(255,255,255,.03)] cursor-pointer hover:border-[#4DA3FF] group btn-shadow">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="size-7 fill-[#EAEAEA] group-hover:fill-[#fff] transtion-all duration-300">
                        <path d="M0 72C0 49.9 17.9 32 40 32H88c22.1 0 40 17.9 40 40v48c0 22.1-17.9 40-40 40H40c-22.1 0-40-17.9-40-40V72zM0 232c0-22.1 17.9-40 40-40H88c22.1 0 40 17.9 40 40v48c0 22.1-17.9 40-40 40H40c-22.1 0-40-17.9-40-40V232zM128 392v48c0 22.1-17.9 40-40 40H40c-22.1 0-40-17.9-40-40V392c0-22.1 17.9-40 40-40H88c22.1 0 40 17.9 40 40zM160 72c0-22.1 17.9-40 40-40h48c22.1 0 40 17.9 40 40v48c0 22.1-17.9 40-40 40H200c-22.1 0-40-17.9-40-40V72zM288 232v48c0 22.1-17.9 40-40 40H200c-22.1 0-40-17.9-40-40V232c0-22.1 17.9-40 40-40h48c22.1 0 40 17.9 40 40zM160 392c0-22.1 17.9-40 40-40h48c22.1 0 40 17.9 40 40v48c0 22.1-17.9 40-40 40H200c-22.1 0-40-17.9-40-40V392zM448 72v48c0 22.1-17.9 40-40 40H360c-22.1 0-40-17.9-40-40V72c0-22.1 17.9-40 40-40h48c22.1 0 40 17.9 40 40zM320 232c0-22.1 17.9-40 40-40h48c22.1 0 40 17.9 40 40v48c0 22.1-17.9 40-40 40H360c-22.1 0-40-17.9-40-40V232zM448 392v48c0 22.1-17.9 40-40 40H360c-22.1 0-40-17.9-40-40V392c0-22.1 17.9-40 40-40h48c22.1 0 40 17.9 40 40z"/>
                    </svg>
                    <span class="text-[#EAEAEA] lg:text-[1.1rem] text-[.9rem] group-hover:text-[#fff] transtion-all duration-300 text-nowrap">مشاهده همه</span>
                </a>
            </div>
        </section>
        <section class="w-[95%] md:w-[90%] py-12 md:py-16 ">
            <div class="w-full flex justify-end mb-8 md:mb-10">
                <div class="flex items-center gap-3">
                    <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                    <div class="h-[1px] w-12 md:w-16 bg-yellow-300"></div>
                    <h2 class="text-xl md:text-2xl font-bold text-white">همکاران من</h2>
                    <span class="w-2 h-2 bg-yellow-400 rounded-full"></span>
                </div>
            </div>
            <div class="w-full">
                <div class=" flex justify-start absolute -z-1 right-0">
                    <div
                        class="relative overflow-hidden rounded-3xl transtion-all duration-300">
                        <img class="w-270 h-190" src="{{asset('storage/resume/1fa308e2-a47b-4837-b571-e32164978e7c.png')}}" alt="">
                        <div class="absolute lg:block top-0 w-full h-full hidden"
                            style="background:radial-gradient(circle at center,transparent 60%,rgba(0,0,0,.15) 50%,rgba(0,0,0,.55) 70%,rgba(0,0,0,.9) 100%);">
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-full flex lg:flex-row flex-col md:justify-between items-center gap-15">
                <div class="lg:w-5/12 w-full grid lg:grid-cols-2 md:grid-cols-4 grid-cols-2 gap-2">
                    <div class="w-full bg-black/5 backdrop-blur-xl border border-white/30 flex justify-around items-center p-5">
                        <div class="flex flex-col gap-2 items-center">
                            <span class="text-[3rem] text-white">+15</span>
                            <span class="text-[1.3rem] text-[#c0c2c4]">مشتری راضی</span>
                        </div>
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="lg:size-20 size-15 fill-[#03c7e8]">
                                <path d="M224 48a80 80 0 1 1 0 160 80 80 0 1 1 0-160zm0 208A128 128 0 1 0 224 0a128 128 0 1 0 0 256zm-45.7 96h91.4c65.7 0 120.1 48.7 129 112H49.3c8.9-63.3 63.3-112 129-112zm0-48C79.8 304 0 383.8 0 482.3C0 498.7 13.3 512 29.7 512H418.3c16.4 0 29.7-13.3 29.7-29.7C448 383.8 368.2 304 269.7 304H178.3zm431 208c17 0 30.7-13.8 30.7-30.7C640 392.2 567.8 320 478.7 320H417.3c-4.4 0-8.8 .2-13.2 .5c46.4 38.6 75.9 96.7 75.9 161.8c0 10.8-2.8 20.9-7.6 29.7H609.3zM432 256c61.9 0 112-50.1 112-112s-50.1-112-112-112c-24.8 0-47.7 8.1-66.3 21.7C377.4 75.9 384 101.2 384 128c0 35.6-11.6 68.5-31.3 95.1C373 243.4 401 256 432 256z"/>
                            </svg>
                        </div>
                    </div>
                    <div class="w-full bg-black/5 backdrop-blur-xl border border-white/30 flex justify-around items-center p-5">
                        <div class="flex flex-col gap-2 items-center">
                            <span class="text-[3rem] text-white">+20</span>
                            <span class="text-[1.3rem] text-[#c0c2c4]">پرژه های تگمیل شده</span>
                        </div>
                        <svg version="1.1" class="lg:size-20 size-15 fill-white" viewBox="0 0 36 36">
                            <path class="clr-i-outline clr-i-outline-path-1" d="M18,2A16,16,0,1,0,34,18,16,16,0,0,0,18,2Zm0,30A14,14,0,1,1,32,18,14,14,0,0,1,18,32Z"></path>
                            <path class="clr-i-outline clr-i-outline-path-2" d="M28,12.1a1,1,0,0,0-1.41,0L15.49,23.15l-6-6A1,1,0,0,0,8,18.53L15.49,26,28,13.52A1,1,0,0,0,28,12.1Z"></path>
                            <path class="clr-i-solid clr-i-solid-path-1" d="M18,2A16,16,0,1,0,34,18,16,16,0,0,0,18,2ZM28.45,12.63,15.31,25.76,7.55,18a1.4,1.4,0,0,1,2-2l5.78,5.78L26.47,10.65a1.4,1.4,0,1,1,2,2Z" style="display:none"></path>
                        </svg>
                    </div>
                    <div class="w-full bg-black/5 backdrop-blur-xl border border-white/30 flex justify-around items-center p-5">
                        <div class="flex flex-col gap-2 items-center">
                            <span class="text-[3rem] text-white">+1000</span>
                            <span class="text-[1.3rem] text-[#c0c2c4]">ساعت کدنویسی</span>
                        </div>
                        <svg version="1.1" class=" lg:size-20 size-15 fill-[#CD82CC]" viewBox="0 0 36 36" ><path d="M31.47,3.84a5.78,5.78,0,0,0-7.37-.63,16.08,16.08,0,0,1,8.2,7.65A5.73,5.73,0,0,0,31.47,3.84Z" class="clr-i-outline clr-i-outline-path-1"></path>
                            <path d="M11.42,3.43a5.77,5.77,0,0,0-7.64.41,5.72,5.72,0,0,0-.38,7.64A16.08,16.08,0,0,1,11.42,3.43Z" class="clr-i-outline clr-i-outline-path-2"></path>
                            <path d="M16.4,4.09A14,14,0,0,0,8.11,27.88L5.56,30.43A1,1,0,1,0,7,31.84l2.66-2.66a13.9,13.9,0,0,0,16.88-.08l2.74,2.74a1,1,0,0,0,1.41-1.41L28,27.78A14,14,0,0,0,16.4,4.09ZM19.58,29.9A12,12,0,1,1,29.92,19.56,12,12,0,0,1,19.58,29.9Z" class="clr-i-outline clr-i-outline-path-3"></path>
                            <path d="M24.92,20.34l-6.06-3V9.5a.9.9,0,0,0-1.8,0v9L24.12,22a.9.9,0,1,0,.79-1.62Z" class="clr-i-outline clr-i-outline-path-4"></path>
                            <path d="M11.42,3.43a5.77,5.77,0,0,0-7.64.41,5.72,5.72,0,0,0-.38,7.64A16.08,16.08,0,0,1,11.42,3.43Z" class="clr-i-outline--alerted clr-i-outline-path-1--alerted" style="display:none"></path>
                            <path d="M18.86,9.5a.9.9,0,0,0-1.8,0v9L24.12,22a.9.9,0,1,0,.79-1.62l-6.06-3Z" class="clr-i-outline--alerted clr-i-outline-path-2--alerted" style="display:none"></path>
                            <path d="M28,27.78A13.88,13.88,0,0,0,31.77,15.4h-2a12.07,12.07,0,1,1-8.67-9l1-1.8a14,14,0,0,0-14,23.27L5.56,30.43A1,1,0,1,0,7,31.84l2.66-2.66a13.9,13.9,0,0,0,16.88-.08l2.74,2.74a1,1,0,0,0,1.41-1.41Z" class="clr-i-outline--alerted clr-i-outline-path-3--alerted" style="display:none"></path>
                            <path d="M26.85,1.14,21.13,11A1.28,1.28,0,0,0,22.23,13H33.68A1.28,1.28,0,0,0,34.78,11L29.06,1.14A1.28,1.28,0,0,0,26.85,1.14Z" class="clr-i-outline--alerted clr-i-outline-path-4--alerted clr-i-alert" style="display:none"></path>
                            <path d="M11.42,3.43a5.77,5.77,0,0,0-7.64.41,5.72,5.72,0,0,0-.38,7.64A16.08,16.08,0,0,1,11.42,3.43Z" class="clr-i-solid--alerted clr-i-solid-path-1--alerted" style="display:none"></path><path d="M28,27.78A13.88,13.88,0,0,0,31.77,15.4H22.23A3.69,3.69,0,0,1,19,13.56L19,13.4v3.78L25,20.1a1,1,0,1,1-.87,1.8L17,18.44V9.69a1,1,0,0,1,2,0V10L19,9.89l3-5.28a14,14,0,0,0-14,23.27L5.56,30.43A1,1,0,1,0,7,31.84l2.66-2.66a13.9,13.9,0,0,0,16.88-.08l2.74,2.74a1,1,0,0,0,1.41-1.41Z" class="clr-i-solid--alerted clr-i-solid-path-2--alerted" style="display:none"></path><path d="M26.85,1.14,21.13,11A1.28,1.28,0,0,0,22.23,13H33.68A1.28,1.28,0,0,0,34.78,11L29.06,1.14A1.28,1.28,0,0,0,26.85,1.14Z" class="clr-i-solid--alerted clr-i-solid-path-3--alerted clr-i-alert" style="display:none"></path>
                            <path d="M11.42,3.43a5.77,5.77,0,0,0-7.64.41,5.72,5.72,0,0,0-.38,7.64A16.08,16.08,0,0,1,11.42,3.43Z" class="clr-i-solid--badged clr-i-solid-path-1--badged" style="display:none"></path><path d="M28,27.78a13.89,13.89,0,0,0,3.21-14.39A7.46,7.46,0,0,1,22.5,6a7.52,7.52,0,0,1,.11-1.21A14,14,0,0,0,8.11,27.88L5.56,30.43A1,1,0,1,0,7,31.84l2.66-2.66a13.9,13.9,0,0,0,16.88-.08l2.74,2.74a1,1,0,0,0,1.41-1.41Zm-2.52-6.35a1,1,0,0,1-1.33.47L17,18.44V9.69a1,1,0,0,1,2,0v7.5L25,20.1A1,1,0,0,1,25.49,21.43Z" class="clr-i-solid--badged clr-i-solid-path-2--badged" style="display:none"></path><path d="M11.42,3.43a5.77,5.77,0,0,0-7.64.41,5.72,5.72,0,0,0-.38,7.64A16.08,16.08,0,0,1,11.42,3.43Z" class="clr-i-outline--badged clr-i-outline-path-1--badged" style="display:none"></path><path d="M18.86,9.5a.9.9,0,0,0-1.8,0v9L24.12,22a.9.9,0,1,0,.79-1.62l-6.06-3Z" class="clr-i-outline--badged clr-i-outline-path-2--badged" style="display:none"></path><path d="M28,27.78a13.89,13.89,0,0,0,3.21-14.39,7,7,0,0,1-2.11.05A12,12,0,1,1,22.56,6.9,7.54,7.54,0,0,1,22.5,6a7.52,7.52,0,0,1,.11-1.21A14,14,0,0,0,8.11,27.88L5.56,30.43A1,1,0,1,0,7,31.84l2.66-2.66a13.9,13.9,0,0,0,16.88-.08l2.74,2.74a1,1,0,0,0,1.41-1.41Z" class="clr-i-outline--badged clr-i-outline-path-3--badged" style="display:none"></path><path d="M31.47,3.84a5.78,5.78,0,0,0-7.37-.63,16.08,16.08,0,0,1,8.2,7.65A5.73,5.73,0,0,0,31.47,3.84Z" class="clr-i-solid clr-i-solid-path-1" style="display:none"></path><path d="M11.42,3.43a5.77,5.77,0,0,0-7.64.41,5.72,5.72,0,0,0-.38,7.64A16.08,16.08,0,0,1,11.42,3.43Z" class="clr-i-solid clr-i-solid-path-2" style="display:none"></path><path d="M18,4A14,14,0,0,0,8.11,27.88L5.56,30.43A1,1,0,1,0,7,31.84l2.66-2.66a13.9,13.9,0,0,0,16.88-.08l2.74,2.74a1,1,0,0,0,1.41-1.41L28,27.78A14,14,0,0,0,18,4Zm7.47,17.43a1,1,0,0,1-1.33.47L17,18.44V9.69a1,1,0,0,1,2,0v7.5L25,20.1A1,1,0,0,1,25.49,21.43Z" class="clr-i-solid clr-i-solid-path-3" style="display:none"></path><circle cx="30" cy="6" r="5" class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge" style="display:none"></circle><circle cx="30" cy="6" r="5" class="clr-i-outline--badged clr-i-outline-path-4--badged clr-i-badge" style="display:none"></circle>
                        </svg>
                    </div>
                    <div class="w-full bg-black/5 backdrop-blur-xl border border-white/30 flex justify-around items-center p-5">
                        <div class="flex flex-col gap-2 items-center">
                            <span class="text-[3rem] text-white">+2</span>
                            <span class="text-[1.3rem] text-[#c0c2c4]">سال تجربه</span>
                        </div>
                        <svg version="1.1" class="can-badge can-alert has-solid lg:size-20 size-15 fill-[#eac410]" viewBox="0 0 36 36">
                            <path class="clr-i-outline clr-i-outline-path-1" d="M32.25,6H29V8h3V30H4V8H7V6H3.75A1.78,1.78,0,0,0,2,7.81V30.19A1.78,1.78,0,0,0,3.75,32h28.5A1.78,1.78,0,0,0,34,30.19V7.81A1.78,1.78,0,0,0,32.25,6Z"></path>
                            <path class="clr-i-outline clr-i-outline-path-14" d="M10,10a1,1,0,0,0,1-1V3A1,1,0,0,0,9,3V9A1,1,0,0,0,10,10Z"></path>
                            <path class="clr-i-outline clr-i-outline-path-15" d="M26,10a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V9A1,1,0,0,0,26,10Z"></path>
                            <path class="clr-i-outline--badged clr-i-outline-path-1--badged" d="M32,13.22V30H4V8H7V6H3.75A1.78,1.78,0,0,0,2,7.81V30.19A1.78,1.78,0,0,0,3.75,32h28.5A1.78,1.78,0,0,0,34,30.19V12.34A7.45,7.45,0,0,1,32,13.22Z" style="display:none"></path>
                            <path class="clr-i-outline--badged clr-i-outline-path-14--badged" d="M10,10a1,1,0,0,0,1-1V3A1,1,0,0,0,9,3V9A1,1,0,0,0,10,10Z" style="display:none"></path>
                            <path class="clr-i-outline--badged clr-i-outline-path-15--badged" d="M22.5,6H13V8h9.78A7.49,7.49,0,0,1,22.5,6Z" style="display:none"></path>
                            <path class="clr-i-outline--alerted clr-i-outline-path-1--alerted" d="M33.68,15.4H32V30H4V8H7V6H3.75A1.78,1.78,0,0,0,2,7.81V30.19A1.78,1.78,0,0,0,3.75,32h28.5A1.78,1.78,0,0,0,34,30.19V15.38Z" style="display:none"></path>
                            <path class="clr-i-outline--alerted clr-i-outline-path-12--alerted" d="M10,10a1,1,0,0,0,1-1V3A1,1,0,0,0,9,3V9A1,1,0,0,0,10,10Z" style="display:none"></path>
                            <path class="clr-i-outline--alerted clr-i-outline-path-13--alerted clr-i-alert" d="M26.85,1.14,21.13,11A1.28,1.28,0,0,0,22.23,13H33.68A1.28,1.28,0,0,0,34.78,11L29.06,1.14A1.28,1.28,0,0,0,26.85,1.14Z" style="display:none"></path>
                            <path class="clr-i-solid clr-i-solid-path-1" d="M32.25,6h-4V9a2.2,2.2,0,1,1-4.4,0V6H12.2V9A2.2,2.2,0,0,1,7.8,9V6h-4A1.78,1.78,0,0,0,2,7.81V30.19A1.78,1.78,0,0,0,3.75,32h28.5A1.78,1.78,0,0,0,34,30.19V7.81A1.78,1.78,0,0,0,32.25,6ZM10,26H8V24h2Zm0-5H8V19h2Zm0-5H8V14h2Zm6,10H14V24h2Zm0-5H14V19h2Zm0-5H14V14h2Zm6,10H20V24h2Zm0-5H20V19h2Zm0-5H20V14h2Zm6,10H26V24h2Zm0-5H26V19h2Zm0-5H26V14h2Z" style="display:none"></path>
                            <path class="clr-i-solid clr-i-solid-path-2" d="M10,10a1,1,0,0,0,1-1V3A1,1,0,0,0,9,3V9A1,1,0,0,0,10,10Z" style="display:none"></path>
                            <path class="clr-i-solid clr-i-solid-path-3" d="M26,10a1,1,0,0,0,1-1V3a1,1,0,0,0-2,0V9A1,1,0,0,0,26,10Z" style="display:none"></path>
                            <path class="clr-i-solid--badged clr-i-solid-path-1--badged" d="M10,10a1,1,0,0,0,1-1V3A1,1,0,0,0,9,3V9A1,1,0,0,0,10,10Z" style="display:none"></path>
                            <path class="clr-i-solid--badged clr-i-solid-path-2--badged" d="M30,13.5A7.5,7.5,0,0,1,22.5,6H12.2V9A2.2,2.2,0,0,1,7.8,9V6h-4A1.78,1.78,0,0,0,2,7.81V30.19A1.78,1.78,0,0,0,3.75,32h28.5A1.78,1.78,0,0,0,34,30.19V12.34A7.45,7.45,0,0,1,30,13.5ZM10,26H8V24h2Zm0-5H8V19h2Zm0-5H8V14h2Zm6,10H14V24h2Zm0-5H14V19h2Zm0-5H14V14h2Zm6,10H20V24h2Zm0-5H20V19h2Zm0-5H20V14h2Zm6,10H26V24h2Zm0-5H26V19h2Zm0-5H26V14h2Z" style="display:none"></path>
                            <path class="clr-i-solid--alerted clr-i-solid-path-1--alerted" d="M33.68,15.4H22.23A3.68,3.68,0,0,1,19,9.89L21.29,6H12.2V9A2.2,2.2,0,0,1,7.8,9V6h-4A1.78,1.78,0,0,0,2,7.81V30.19A1.78,1.78,0,0,0,3.75,32h28.5A1.78,1.78,0,0,0,34,30.19V15.38ZM10,26H8V24h2Zm0-5H8V19h2Zm0-5H8V14h2Zm6,10H14V24h2Zm0-5H14V19h2Zm0-5H14V14h2Zm6,10H20V24h2Zm0-5H20V19h2Zm6,5H26V24h2Zm0-5H26V19h2Z" style="display:none"></path>
                            <path class="clr-i-solid--alerted clr-i-solid-path-2--alerted" d="M10,10a1,1,0,0,0,1-1V3A1,1,0,0,0,9,3V9A1,1,0,0,0,10,10Z" style="display:none"></path>
                            <path class="clr-i-solid--alerted clr-i-solid-path-3--alerted clr-i-alert" d="M26.85,1.14,21.13,11A1.28,1.28,0,0,0,22.23,13H33.68A1.28,1.28,0,0,0,34.78,11L29.06,1.14A1.28,1.28,0,0,0,26.85,1.14Z" style="display:none"></path>
                            <rect class="clr-i-outline clr-i-outline-path-2" x="8" y="14" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-3" x="14" y="14" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-4" x="20" y="14" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-5" x="26" y="14" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-6" x="8" y="19" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-7" x="14" y="19" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-8" x="20" y="19" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-9" x="26" y="19" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-10" x="8" y="24" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-11" x="14" y="24" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-12" x="20" y="24" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-13" x="26" y="24" width="2" height="2"></rect>
                            <rect class="clr-i-outline clr-i-outline-path-16" x="13" y="6" width="10" height="2"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-2--badged" x="8" y="14" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-3--badged" x="14" y="14" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-4--badged" x="20" y="14" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-5--badged" x="26" y="14" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-6--badged" x="8" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-7--badged" x="14" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-8--badged" x="20" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-9--badged" x="26" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-10--badged" x="8" y="24" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-11--badged" x="14" y="24" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-12--badged" x="20" y="24" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--badged clr-i-outline-path-13--badged" x="26" y="24" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-2--alerted" x="8" y="14" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-3--alerted" x="14" y="14" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-4--alerted" x="8" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-5--alerted" x="14" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-6--alerted" x="20" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-7--alerted" x="26" y="19" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-8--alerted" x="8" y="24" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-9--alerted" x="14" y="24" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-10--alerted" x="20" y="24" width="2" height="2" style="display:none"></rect>
                            <rect class="clr-i-outline--alerted clr-i-outline-path-11--alerted" x="26" y="24" width="2" height="2" style="display:none"></rect>
                            <circle class="clr-i-outline--badged clr-i-outline-path-16--badged clr-i-badge" cx="30" cy="6" r="5" style="display:none"></circle>
                            <circle class="clr-i-solid--badged clr-i-solid-path-3--badged clr-i-badge" cx="30" cy="6" r="5" style="display:none"></circle>
                            <polygon points="21.29 6 13 6 13 8 20.14 8 21.29 6"></polygon>
                        </svg>
                    </div>
                </div>
                <div class="lg:w-7/12 w-full grid grid-cols-3 md:flex md:justify-between lg:flex-wrap xl:flex-nowrap gap-5">
                    <div class="md:w-1/5 flex flex-col gap-4 items-center">    
                        <div class="min-w-30 max-w-30 h-30  flex justify-center items-center">
                            <img src="{{asset('storage/resume/IMG_20260626_161954.png')}}" alt="" class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="flex flex-col gap-3 items-center">
                            <h2 class="text-[1.05rem] font-bold text-white">محمد مهدی بند علی</h2>
                            <h2 class="text-[.8rem] text-white text-nowrap">mohamad mahdi bandali</h2>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                    class="lg:size-7 size-4 fill-white">
                                    <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="lg:size-7 size-4 fill-white" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <circle cx="17.5" cy="6.5" r="1"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/5 flex flex-col gap-4 items-center">    
                        <div class="min-w-30 max-w-30 h-30  flex justify-center items-center">
                            <img src="{{asset('storage/resume/IMG_20260626_161954.png')}}" alt="" class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="flex flex-col gap-3 items-center">
                            <h2 class="text-[1.05rem] font-bold text-white">محمد مهدی بند علی</h2>
                            <h2 class="text-[.8rem] text-white text-nowrap">mohamad mahdi bandali</h2>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                    class="lg:size-7 size-4 fill-white">
                                    <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="lg:size-7 size-4 fill-white" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <circle cx="17.5" cy="6.5" r="1"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/5 flex flex-col gap-4 items-center">    
                        <div class="min-w-30 max-w-30 h-30  flex justify-center items-center">
                            <img src="{{asset('storage/resume/IMG_20260626_161954.png')}}" alt="" class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="flex flex-col gap-3 items-center">
                            <h2 class="text-[1.05rem] font-bold text-white">محمد مهدی بند علی</h2>
                            <h2 class="text-[.8rem] text-white text-nowrap">mohamad mahdi bandali</h2>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                    class="lg:size-7 size-4 fill-white">
                                    <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="lg:size-7 size-4 fill-white" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <circle cx="17.5" cy="6.5" r="1"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/5 flex flex-col gap-4 items-center">    
                        <div class="min-w-30 max-w-30 h-30  flex justify-center items-center">
                            <img src="{{asset('storage/resume/IMG_20260626_161954.png')}}" alt="" class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="flex flex-col gap-3 items-center">
                            <h2 class="text-[1.05rem] font-bold text-white">محمد مهدی بند علی</h2>
                            <h2 class="text-[.8rem] text-white text-nowrap">mohamad mahdi bandali</h2>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                    class="lg:size-7 size-4 fill-white">
                                    <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="lg:size-7 size-4 fill-white" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <circle cx="17.5" cy="6.5" r="1"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                    <div class="md:w-1/5 flex flex-col gap-4 items-center">    
                        <div class="min-w-30 max-w-30 h-30  flex justify-center items-center">
                            <img src="{{asset('storage/resume/IMG_20260626_161954.png')}}" alt="" class="w-full h-full object-cover rounded-full">
                        </div>
                        <div class="flex flex-col gap-3 items-center">
                            <h2 class="text-[1.05rem] font-bold text-white">محمد مهدی بند علی</h2>
                            <h2 class="text-[.8rem] text-white text-nowrap">mohamad mahdi bandali</h2>
                            <div class="flex gap-3">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 496 512"
                                    class="lg:size-7 size-4 fill-white">
                                    <path
                                    d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                    class="lg:size-7 size-4 fill-white" stroke="currentColor" stroke-width="1.8"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <rect x="2" y="2" width="20" height="20" rx="5"></rect>
                                    <circle cx="12" cy="12" r="4"></circle>
                                    <circle cx="17.5" cy="6.5" r="1"></circle>
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <footer class="w-full flex  justify-center items-center mt-5" id="phone">
        <div class="w-[90%] flex lg:flex-row flex-col lg:justify-evenly items-center gap-10 lg:h-70 bg-white/7 backdrop-blur-3 py-12 rounded-2xl border border-white/20">
            <div class="flex flex-col lg:w-4/12 items-end justify-between gap-10 h-full">
                <div class="flex gap-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"  class="size-8 fill-white">
                        <path d="M48 64C21.5 64 0 85.5 0 112c0 15.1 7.1 29.3 19.2 38.4L236.8 313.6c11.4 8.5 27 8.5 38.4 0L492.8 150.4c12.1-9.1 19.2-23.3 19.2-38.4c0-26.5-21.5-48-48-48H48zM0 176V384c0 35.3 28.7 64 64 64H448c35.3 0 64-28.7 64-64V176L294.4 339.2c-22.8 17.1-54 17.1-76.8 0L0 176z"/>
                    </svg>
                    <span class="text-white text-[1.1rem] font-bold">
                        hosseinfaos1386@gmail.com
                    </span>
                </div>
                <div class="flex gap-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-8 fill-white">
                        <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                    </svg>
                    <span class="text-white text-[1.1rem] font-bold">
                         9051612833 98+
                    </span>
                </div>
                <div class="flex gap-5">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="size-8 fill-white">
                        <path d="M215.7 499.2C267 435 384 279.4 384 192C384 86 298 0 192 0S0 86 0 192c0 87.4 117 243 168.3 307.2c12.3 15.3 35.1 15.3 47.4 0zM192 128a64 64 0 1 1 0 128 64 64 0 1 1 0-128z"/>
                    </svg>
                    <span class="text-white text-[1.1rem] font-bold">
                         اذزبایجان شرقی، بناب
                    </span>
                </div>
            </div> 
            <div class="flex flex-col gap-5 lg:gap-0 lg:w-4/12 justify-between h-full px-10">
                <h2 class="text-white font-bold text-[2rem]">بیایید پرژه بعدی راهم بسازیم!</h2>
                <span class="text-white text-[1.2rem]">اگر پرژه ای در ذهن دارید ، خوشحال میشوم بامن هم کاری کنید</span>
                <div class="flex gap-5 flex-col lg:flex-row items-center">
                    <button class="flex items-center justify-center w-60 rounded-2xl py-4 gap-4 border border-white/50">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="size-5 fill-white">
                            <path d="M164.9 24.6c-7.7-18.6-28-28.5-47.4-23.2l-88 24C12.1 30.2 0 46 0 64C0 311.4 200.6 512 448 512c18 0 33.8-12.1 38.6-29.5l24-88c5.3-19.4-4.6-39.7-23.2-47.4l-96-40c-16.3-6.8-35.2-2.1-46.3 11.6L304.7 368C234.3 334.7 177.3 277.7 144 207.3L193.3 167c13.7-11.2 18.4-30 11.6-46.3l-40-96z"/>
                        </svg>
                        <span class="text-white text-[1.1rem] font-bold">تماس با من</span>
                    </button>
                    <button class="flex items-center justify-center w-60 rounded-2xl py-4 gap-4 bg-white">
                        <span class="text-[1.1rem] font-bold">ارسال پیام</span>
                    </button>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>





