@extends('layouts.app')

@section('content')

<!-- ====== Navbar Section Start -->
<header
   x-data="
   {
   navbarOpen: false,
   }
   "
   class="absolute left-0 top-0 z-50 w-full"
   >
   <div class="container mx-auto">
      <div class="relative -mx-4 flex items-center justify-between">
         <div class="w-60 max-w-full px-4">
            <a href="{{ route('welcome') }}" class="block w-full py-5">
            <img
               src="https://cdn.tailgrids.com/2.0/image/assets/images/logo/logo-white.svg"
               alt="logo"
               class="w-full"
               />
            </a>
         </div>
         <div class="flex w-full items-center justify-between px-4">
            <div>
               <button
                  @click="navbarOpen = !navbarOpen"
                  :class="navbarOpen && 'navbarTogglerActive'"
                  id="navbarToggler"
                  class="absolute right-4 top-1/2 block -translate-y-1/2 rounded-lg px-3 py-[6px] ring-primary focus:ring-2 lg:hidden"
                  >
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                  ></span>
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                  ></span>
               <span
                  class="relative my-[6px] block h-[2px] w-[30px] bg-body-color dark:bg-white"
                  ></span>
               </button>
               <nav
                  :class="!navbarOpen && 'hidden' "
                  id="navbarCollapse"
                  class="absolute right-4 top-full w-full max-w-[250px] rounded-lg bg-dark-2 py-5 px-6 shadow lg:static lg:block lg:w-full lg:max-w-full lg:bg-transparent lg:dark:bg-transparent lg:shadow-none xl:ml-11"
                  >
                  <ul class="block lg:flex">
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium hover:text-primary lg:ml-10 lg:inline-flex text-white"
                           >
                        Home
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium hover:text-primary lg:ml-10 lg:inline-flex text-white"
                           >
                        About
                        </a>
                     </li>
                     <li>
                        <a
                           href="javascript:void(0)"
                           class="flex py-2 text-base font-medium hover:text-primary lg:ml-10 lg:inline-flex text-white"
                           >
                        Features
                        </a>
                     </li>
                  </ul>
               </nav>
            </div>
            <div class="hidden justify-end pr-16 sm:flex lg:pr-0">
               <a
                  href="javascript:void(0)"
                  class="rounded-md bg-primary py-3 px-7 text-base font-medium text-white hover:bg-blue-dark"
                  >
               Contact Us
               </a>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- ====== Navbar Section End -->
<!-- ====== Hero Section Start -->
<div
   x-data="
   {
   videoOpen: false
   }
   "
   class="relative bg-[#090E34] dark:bg-dark pt-[120px] pb-[110px] md:pt-[150px] lg:pt-[180px]"
   >
   <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap items-center">
         <div class="w-full px-4 lg:w-5/12">
            <div class="hero-content">
               <h1
                  class="mb-5 text-4xl font-bold leading-snug text-white sm:text-5xl sm:leading-[1.208]"
                  >
                  Landing Template For Startups
               </h1>
               <p class="mb-9 max-w-[480px] text-base text-gray-3">
                  With TailGrids, business and students thrive together. Business
                  can perfectly match their staffing to changing demand throughout
                  the dayed.
               </p>
               <ul class="flex items-center">
                  <li>
                     <!-- ====== Modal Section Start -->
                     <section x-data="{modalOpen: false}">
                        <div class="container py-20 mx-auto">
                           <button
                              @click="modalOpen = true"
                              type="button"
                              class="inline-flex items-center justify-center rounded-lg bg-primary py-3 px-7 text-center text-base font-medium text-white hover:bg-blue-dark"
                              >
                              Send Invoice
                           </button>
                        </div>
                        <div
                           x-show="modalOpen"
                           x-transition
                           style="z-index: 60;"
                           class="fixed top-0 left-0 flex items-center justify-center w-full h-full min-h-screen px-4 py-5 bg-dark/90"
                           >
                           <div
                              @click.outside="modalOpen = false"
                              class="relative w-full max-w-[570px] rounded-[20px] bg-primary py-12 px-8 text-center md:py-[50px] md:px-[70px]"
                              >
                              <div
                                 class="flex items-center justify-center w-20 h-20 mx-auto mb-6 text-white rounded-full bg-white/10"
                                 >
                                 <svg
                                    width="47"
                                    height="47"
                                    viewBox="0 0 47 47"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                       d="M23.6134 0.900024C11.0362 0.900024 0.900391 11.0358 0.900391 23.613C0.900391 36.1903 11.0362 46.4 23.6134 46.4C36.1906 46.4 46.4004 36.1903 46.4004 23.613C46.4004 11.0358 36.1906 0.900024 23.6134 0.900024ZM23.6134 43.8106C12.5158 43.8106 3.48982 34.7106 3.48982 23.613C3.48982 12.5155 12.5158 3.48946 23.6134 3.48946C34.711 3.48946 43.811 12.5155 43.811 23.613C43.811 34.7106 34.711 43.8106 23.6134 43.8106Z"
                                       fill="white"
                                       />
                                    <path
                                       d="M33.6768 26.2024H13.5532C12.8874 26.2024 12.2955 26.4983 11.8516 27.0162C11.4817 27.5341 11.2597 28.126 11.4077 28.7918C12.5174 34.5626 17.6223 38.8536 23.615 38.8536C29.6077 38.8536 34.7126 34.6365 35.8223 28.7918C35.9703 28.2 35.7483 27.5341 35.3784 27.0162C35.0085 26.4983 34.3426 26.2024 33.6768 26.2024ZM23.615 36.2642C19.102 36.2642 15.1808 33.1569 14.0711 28.7918H33.2329C32.0491 33.1569 28.128 36.2642 23.615 36.2642Z"
                                       fill="white"
                                       />
                                    <path
                                       d="M14.8109 19.6919C16.4386 19.6919 17.7703 18.3602 17.7703 16.7325C17.7703 15.1049 16.4386 13.7732 14.8109 13.7732C13.1833 13.7732 11.8516 15.1049 11.8516 16.7325C11.9255 18.4342 13.2573 19.6919 14.8109 19.6919Z"
                                       fill="white"
                                       />
                                    <path
                                       d="M32.4183 19.766C34.0527 19.766 35.3777 18.441 35.3777 16.8066C35.3777 15.1722 34.0527 13.8473 32.4183 13.8473C30.7839 13.8473 29.459 15.1722 29.459 16.8066C29.459 18.441 30.7839 19.766 32.4183 19.766Z"
                                       fill="white"
                                       />
                                 </svg>
                              </div>
                              <h3 class="pb-4 text-3xl font-bold text-white md:text-4xl">
                                 Congratulations!
                              </h3>
                              <p class="text-base leading-relaxed text-white mb-9">
                                 The invoice was successfully send to your email. Please see your email.
                              </p>
                              <a
                                 href="javascript:void(0)"
                                 class="inline-block rounded-md border border-white py-3 px-[50px] text-center text-base font-medium text-white transition hover:bg-white hover:text-primary"
                                 >
                                 Know More
                              </a>
                              <button
                                 @click="modalOpen = false"
                                 class="absolute flex items-center justify-center text-white transition bg-white rounded-full top-6 right-6 h-7 w-7 bg-opacity-10 hover:bg-opacity-100 hover:text-primary"
                                 >
                                 <svg
                                    width="10"
                                    height="10"
                                    viewBox="0 0 13 13"
                                    fill="none"
                                    xmlns="http://www.w3.org/2000/svg"
                                    >
                                    <path
                                       d="M6.4917 7.65579L11.106 12.2645C11.2545 12.4128 11.4715 12.5 11.6738 12.5C11.8762 12.5 12.0931 12.4128 12.2416 12.2645C12.5621 11.9445 12.5623 11.4317 12.2423 11.1114C12.2422 11.1113 12.2422 11.1113 12.2422 11.1113C12.242 11.1111 12.2418 11.1109 12.2416 11.1107L7.64539 6.50351L12.2589 1.91221L12.2595 1.91158C12.5802 1.59132 12.5802 1.07805 12.2595 0.757793C11.9393 0.437994 11.4268 0.437869 11.1064 0.757418C11.1063 0.757543 11.1062 0.757668 11.106 0.757793L6.49234 5.34931L1.89459 0.740581L1.89396 0.739942C1.57364 0.420019 1.0608 0.420019 0.740487 0.739944C0.42005 1.05999 0.419837 1.57279 0.73985 1.89309L6.4917 7.65579ZM6.4917 7.65579L1.89459 12.2639L1.89395 12.2645C1.74546 12.4128 1.52854 12.5 1.32616 12.5C1.12377 12.5 0.906853 12.4128 0.758361 12.2645L1.1117 11.9108L0.758358 12.2645C0.437984 11.9445 0.437708 11.4319 0.757539 11.1116C0.757812 11.1113 0.758086 11.111 0.75836 11.1107L5.33864 6.50287L0.740487 1.89373L6.4917 7.65579Z"
                                       class="fill-current stroke-current"
                                       />
                                 </svg>
                              </button>
                           </div>
                        </div>
                     </section>
                     <!-- ====== Modal Section End -->
                  </li>
                  <li class="ml-2">
                     <a
                        href="{{ route('invoice') }}"
                        class="inline-flex items-center justify-center rounded-lg bg-primary py-3 px-7 text-center text-base font-medium text-white hover:bg-blue-dark"
                        >
                        Process Through Phone
                     </a>
                  </li>
               </ul>
            </div>
         </div>
         <div class="hidden px-4 lg:block lg:w-1/12"></div>
         <div class="w-full px-4 lg:w-6/12">
            <div class="mx-auto text-center">
               <div class="relative z-10 mt-16 inline-block lg:mt-0">
                  <img
                     src="https://cdn.tailgrids.com/2.0/image/marketing/images/hero/hero-image-02.jpg"
                     alt="hero"
                     class="mx-auto max-w-full"
                     />
                  <div
                     class="absolute inset-0 flex h-full w-full items-center justify-center"
                     >
                     <a
                        href="javascript:void(0)"
                        @click="videoOpen = true"
                        class="flex h-[70px] w-[70px] items-center justify-center rounded-full bg-white bg-opacity-75 duration-300 hover:bg-opacity-100 hover:shadow-xl"
                        >
                        <svg
                           width="12"
                           height="15"
                           viewBox="0 0 12 15"
                           fill="none"
                           xmlns="http://www.w3.org/2000/svg"
                           >
                           <path
                              d="M11.5 6.63397C12.1667 7.01888 12.1667 7.98112 11.5 8.36602L1.75 13.9952C1.08333 14.3801 0.249999 13.899 0.249999 13.1292L0.25 1.87083C0.25 1.10103 1.08333 0.619909 1.75 1.00481L11.5 6.63397Z"
                              fill="#3056D3"
                              />
                        </svg>
                     </a>
                  </div>
                  <span class="absolute -right-6 -top-6 z-[-1]">
                     <svg
                        width="134"
                        height="106"
                        viewBox="0 0 134 106"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle
                           cx="1.66667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 1.66667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 16.3333 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 31 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 45.6667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 60.3333 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 88.6667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 117.667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 74.6667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 103 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 132 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 1.66667 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 16.3333 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 31 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 45.6667 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 60.3333 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 88.6667 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 117.667 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 74.6667 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 103 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 132 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 1.66667 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 1.66667 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 16.3333 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 16.3333 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 31 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 31 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 45.6667 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 45.6667 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 60.3333 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 60.3333 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 88.6667 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 88.6667 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 117.667 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 117.667 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 74.6667 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 74.6667 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 103 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 103 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 132 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 132 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 1.66667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 1.66667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 16.3333 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 16.3333 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 31 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 31 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 45.6667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 45.6667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 60.3333 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 60.3333 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 88.6667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 88.6667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 117.667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 117.667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 74.6667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 74.6667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 103 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 103 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 132 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 132 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 1.66667 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 1.66667 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 16.3333 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 16.3333 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 31 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 31 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 45.6667 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 45.6667 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 60.3333 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 60.3333 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 88.6667 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 88.6667 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 117.667 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 117.667 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 74.6667 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 74.6667 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 103 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 103 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 132 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 132 1.66695)"
                           fill="#13C296"
                           />
                     </svg>
                  </span>
                  <span class="absolute -left-6 -bottom-6 z-[-1]">
                     <svg
                        width="134"
                        height="106"
                        viewBox="0 0 134 106"
                        fill="none"
                        xmlns="http://www.w3.org/2000/svg"
                        >
                        <circle
                           cx="1.66667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 1.66667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 16.3333 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 31 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 45.6667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 60.3333 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 88.6667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 117.667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 74.6667 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 103 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="104"
                           r="1.66667"
                           transform="rotate(-90 132 104)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 1.66667 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 16.3333 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 31 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="89.3335"
                           r="1.66667"
                           transform="rotate(-90 45.6667 89.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 60.3333 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 88.6667 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 117.667 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 74.6667 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 103 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="89.3337"
                           r="1.66667"
                           transform="rotate(-90 132 89.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 1.66667 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 1.66667 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 16.3333 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 16.3333 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 31 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 31 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="74.667"
                           r="1.66667"
                           transform="rotate(-90 45.6667 74.667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="31.0002"
                           r="1.66667"
                           transform="rotate(-90 45.6667 31.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 60.3333 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 60.3333 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 88.6667 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 88.6667 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 117.667 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 117.667 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 74.6667 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 74.6667 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 103 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 103 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="74.6667"
                           r="1.66667"
                           transform="rotate(-90 132 74.6667)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="31"
                           r="1.66667"
                           transform="rotate(-90 132 31)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 1.66667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 1.66667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 16.3333 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 16.3333 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 31 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 31 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 45.6667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 45.6667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 60.3333 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 60.3333 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 88.6667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 88.6667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 117.667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 117.667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 74.6667 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 74.6667 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 103 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 103 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="60.0002"
                           r="1.66667"
                           transform="rotate(-90 132 60.0002)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="16.3335"
                           r="1.66667"
                           transform="rotate(-90 132 16.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 1.66667 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="1.66667"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 1.66667 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 16.3333 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="16.3333"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 16.3333 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 31 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="31"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 31 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="45.3335"
                           r="1.66667"
                           transform="rotate(-90 45.6667 45.3335)"
                           fill="#13C296"
                           />
                        <circle
                           cx="45.6667"
                           cy="1.66671"
                           r="1.66667"
                           transform="rotate(-90 45.6667 1.66671)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 60.3333 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="60.3333"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 60.3333 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 88.6667 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="88.6667"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 88.6667 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 117.667 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="117.667"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 117.667 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 74.6667 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="74.6667"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 74.6667 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 103 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="103"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 103 1.66695)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="45.3337"
                           r="1.66667"
                           transform="rotate(-90 132 45.3337)"
                           fill="#13C296"
                           />
                        <circle
                           cx="132"
                           cy="1.66695"
                           r="1.66667"
                           transform="rotate(-90 132 1.66695)"
                           fill="#13C296"
                           />
                     </svg>
                  </span>
               </div>
            </div>
         </div>
      </div>
   </div>
   <div
      x-show="videoOpen"
      x-transition
      class="fixed top-0 left-0 z-50 flex h-screen w-full items-center justify-center bg-black bg-opacity-70"
      >
      <div
         @click.outside="videoOpen = false"
         class="mx-auto w-full max-w-[550px] bg-white"
         >
         <iframe
            class="h-[320px] w-full"
            src="https://www.youtube.com/embed/LXb3EKWsInQ?autoplay=1&mute=1"
            >
         </iframe>
      </div>
      <button
         @click="videoOpen = false"
         class="absolute top-0 right-0 flex h-20 w-20 cursor-pointer items-center justify-center text-body-color hover:bg-black"
         >
         <svg viewBox="0 0 16 15" class="h-8 w-8 fill-current">
            <path
               d="M3.37258 1.27L8.23258 6.13L13.0726 1.29C13.1574 1.19972 13.2596 1.12749 13.373 1.07766C13.4864 1.02783 13.6087 1.00141 13.7326 1C13.9978 1 14.2522 1.10536 14.4397 1.29289C14.6272 1.48043 14.7326 1.73478 14.7326 2C14.7349 2.1226 14.7122 2.24439 14.6657 2.35788C14.6193 2.47138 14.5502 2.57419 14.4626 2.66L9.57258 7.5L14.4626 12.39C14.6274 12.5512 14.724 12.7696 14.7326 13C14.7326 13.2652 14.6272 13.5196 14.4397 13.7071C14.2522 13.8946 13.9978 14 13.7326 14C13.6051 14.0053 13.478 13.984 13.3592 13.9375C13.2404 13.8911 13.1326 13.8204 13.0426 13.73L8.23258 8.87L3.38258 13.72C3.29809 13.8073 3.19715 13.8769 3.08559 13.925C2.97402 13.9731 2.85405 13.9986 2.73258 14C2.46737 14 2.21301 13.8946 2.02548 13.7071C1.83794 13.5196 1.73258 13.2652 1.73258 13C1.73025 12.8774 1.753 12.7556 1.79943 12.6421C1.84586 12.5286 1.91499 12.4258 2.00258 12.34L6.89258 7.5L2.00258 2.61C1.83777 2.44876 1.74112 2.23041 1.73258 2C1.73258 1.73478 1.83794 1.48043 2.02548 1.29289C2.21301 1.10536 2.46737 1 2.73258 1C2.97258 1.003 3.20258 1.1 3.37258 1.27Z"
               />
         </svg>
      </button>
   </div>
</div>
<!-- ====== Hero Section End -->

@endsection