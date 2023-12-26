@extends('layouts.app')

@section('content')

@section('css')
   <style>
      .icon-blue {
         background-color: blue;
      }
   </style>
@endsection

<!-- ====== Forms Section Start -->
<section class="bg-tg-bg dark:bg-dark py-20 lg:py-[120px]">
   <div class="container mx-auto">
      <div class="bg-white dark:bg-dark-2">
         <div class="flex flex-wrap items-stretch">
            <div class="w-full lg:w-1/2">
                  <div class="w-full py-14 px-6 sm:p-[70px] sm:px-12 xl:px-[90px]">
                     <h2
                        class="mb-10 text-[32px] font-bold text-dark dark:text-white"
                        >
                        Sign In
                     </h2>
                     <form>
                        <div class="flex flex-wrap -mx-3">
                           <div class="w-full px-3 md:w-1/2">
                              <div class="mb-8">
                                 <label
                                    class="mb-2.5 block text-xs text-dark dark:text-white"
                                    >
                                 Name
                                 </label>
                                 <input
                                    type="text"
                                    class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white bg-transparent"
                                    />
                              </div>
                           </div>
                           <div class="w-full px-3 md:w-1/2">
                              <div class="mb-8">
                                 <label
                                    class="mb-2.5 block text-xs text-dark dark:text-white"
                                    >
                                 Billing Address
                                 </label>
                                 <input
                                    type="text"
                                    class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white bg-transparent"
                                    />
                              </div>
                           </div>
                        </div>
                        <div class="flex flex-wrap -mx-3">
                           <div class="w-full px-3 md:w-1/2">
                              <div class="mb-8">
                                 <label
                                    class="mb-2.5 block text-xs text-dark dark:text-white"
                                    >
                                 Type of Payment
                                 </label>
                                 <input
                                    type="text"
                                    class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white bg-transparent"
                                    />
                              </div>
                           </div>
                           <div class="w-full px-3 md:w-1/2">
                              <div class="mb-8">
                                 <label
                                    class="mb-2.5 block text-xs text-dark dark:text-white"
                                    >
                                 Price
                                 </label>
                                 <input
                                    type="text"
                                    class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white bg-transparent"
                                    />
                              </div>
                           </div>
                        </div>
                        <div class="flex flex-wrap -mx-3">
                           <div class="w-full px-3 md:w-1/2">
                              <div class="mb-8">
                                 <label
                                    class="mb-2.5 block text-xs text-dark dark:text-white"
                                    >
                                 Email Address
                                 </label>
                                 <input
                                    type="text"
                                    class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white bg-transparent"
                                    />
                              </div>
                           </div>
                           <div class="w-full px-3 md:w-1/2">
                              <div class="mb-8">
                                 <label
                                    class="mb-3 block border-[#ACB6BE] text-xs text-body-color"
                                    >
                                    Your Password
                                 </label>
                                 <input
                                    type="password"
                                    class="w-full rounded-md border border-[#E9EDF4] py-3 px-5 text-body-color outline-none focus:border-primary focus-visible:shadow-none dark:border-dark-3 dark:text-white bg-transparent"
                                    />
                              </div>
                           </div>
                        </div>
                        <div class="mb-8">
                           
                           <h3 class="mb-6 text-lg font-semibold text-dark dark:text-white">Select Services</h3>
                           @for($i = 1; $i <= 5; $i++)
                           <div x-data="{ isChecked: false }" class="mt-4">
                              <div class="max-w-[270px]">
                                 <div x-data="{ selectedList: [] }">
                                    <input
                                       type="checkbox"
                                       name="select-list"
                                       id="select-list-{{ $i }}"
                                       class="select-list sr-only"
                                       x-model="isChecked"
                                       @change="isChecked ? selectedList.push({{ $i }}) : selectedList.splice(selectedList.indexOf({{ $i }}), {{ $i }})"
                                       />
                                    <label
                                       for="select-list-{{ $i }}"
                                       class="select-list text-body-color dark:text-dark-6 dark:border-dark-3 flex cursor-pointer items-center rounded-md border bg-white dark:bg-dark-2 py-3 px-5"
                                       :class="{ '': isChecked, 'border-primary text-primary': selectedList.includes({{ $i }}) }"
                                       >
                                       <span
                                          class="rounded-ful icon flex h-5 w-5 items-center justify-center rounded-full bg-secondary-color"
                                          :class="{'icon-blue': isChecked}">
                                          <svg
                                             width="12"
                                             height="12"
                                             viewBox="0 0 12 12"
                                             fill="none"
                                             xmlns="http://www.w3.org/2000/svg"
                                             >
                                             <path
                                                fill-rule="evenodd"
                                                clip-rule="evenodd"
                                                d="M10.3536 2.64645C10.5488 2.84171 10.5488 3.15829 10.3536 3.35355L4.85355 8.85355C4.65829 9.04882 4.34171 9.04882 4.14645 8.85355L1.64645 6.35355C1.45118 6.15829 1.45118 5.84171 1.64645 5.64645C1.84171 5.45118 2.15829 5.45118 2.35355 5.64645L4.5 7.79289L9.64645 2.64645C9.84171 2.45118 10.1583 2.45118 10.3536 2.64645Z"
                                                fill="white"
                                                />
                                          </svg>
                                       </span>
                                       <span class="pl-[14px] text-base font-medium">
                                       Services {{ $i }}
                                       </span>
                                    </label>
                                 </div>
                              </div>
                           </div>
                           @endfor

                        </div>
                        <div class="mb-8">
                              <a href="{{ route('paynow') }}" type="submit" class="w-full cursor-pointer rounded-md border border-primary bg-primary py-3 px-[14px] text-white transition hover:bg-opacity-90 flex items-center justify-center">
                                 Sign In
                              </a>
                        </div>
                     </form>
                     <div class="flex flex-wrap justify-between">
                        <a
                           href="javascript:void(0)"
                           class="inline-block mb-2 mr-2 text-base text-body-color dark:text-dark-6 hover:text-primary hover:underline"
                           >
                        Forget Password?
                        </a>
                        <p class="mb-2 text-base text-body-color dark:text-dark-6">
                           <span class="pr-0.5"> Not a member yet? </span>
                           <a
                              href="javascript:void(0)"
                              class="text-primary hover:underline"
                              >
                           Sign Up
                           </a>
                        </p>
                     </div>
                  </div>
            </div>
            <div class="w-full lg:w-1/2">
               <div class="relative w-full h-full overflow-hidden bg-primary">
                  <div class="flex items-end h-full p-8 sm:p-14">
                     <h3 class="text-[28px]/[34px] font-bold text-white">
                        Hey <br />
                        Welcome <br />
                        Back
                     </h3>
                     <div>
                        <span class="absolute top-0 left-0">
                           <svg
                              width="415"
                              height="355"
                              viewBox="0 0 415 355"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              >
                              <path
                                 d="M415 107.5C415 244.19 304.19 355 167.5 355C30.8095 355 -80 244.19 -80 107.5C-80 -29.1905 30.8095 -140 167.5 -140C304.19 -140 415 -29.1905 415 107.5Z"
                                 fill="url(#paint0_linear_1179_8)"
                                 />
                              <defs>
                                 <linearGradient
                                    id="paint0_linear_1179_8"
                                    x1="167.5"
                                    y1="-140"
                                    x2="167.5"
                                    y2="355"
                                    gradientUnits="userSpaceOnUse"
                                    >
                                    <stop
                                       offset="0.177083"
                                       stop-color="white"
                                       stop-opacity="0.16"
                                       />
                                    <stop
                                       offset="1"
                                       stop-color="white"
                                       stop-opacity="0"
                                       />
                                 </linearGradient>
                              </defs>
                           </svg>
                        </span>
                        <span class="absolute top-0 left-0">
                           <svg
                              width="177"
                              height="354"
                              viewBox="0 0 177 354"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              >
                              <path
                                 d="M177 177C177 274.754 97.7544 354 0 354C-97.7544 354 -177 274.754 -177 177C-177 79.2456 -97.7544 0 0 0C97.7544 0 177 79.2456 177 177Z"
                                 fill="url(#paint0_linear_1179_7)"
                                 />
                              <defs>
                                 <linearGradient
                                    id="paint0_linear_1179_7"
                                    x1="0"
                                    y1="0"
                                    x2="0"
                                    y2="354"
                                    gradientUnits="userSpaceOnUse"
                                    >
                                    <stop
                                       offset="0.177083"
                                       stop-color="white"
                                       stop-opacity="0.2"
                                       />
                                    <stop
                                       offset="1"
                                       stop-color="white"
                                       stop-opacity="0"
                                       />
                                 </linearGradient>
                              </defs>
                           </svg>
                        </span>
                        <span class="absolute bottom-16 right-20">
                           <svg
                              width="85"
                              height="85"
                              viewBox="0 0 85 85"
                              fill="none"
                              xmlns="http://www.w3.org/2000/svg"
                              >
                              <path
                                 d="M42.5 -1.85773e-06C65.9721 -2.88373e-06 85 19.0279 85 42.5C85 65.9721 65.9721 85 42.5 85C19.0279 85 -8.31736e-07 65.9721 -1.85773e-06 42.5C-2.88373e-06 19.0279 19.0279 -8.31736e-07 42.5 -1.85773e-06Z"
                                 fill="url(#paint0_linear_1179_6)"
                                 />
                              <defs>
                                 <linearGradient
                                    id="paint0_linear_1179_6"
                                    x1="-1.85774e-06"
                                    y1="42.5"
                                    x2="85"
                                    y2="42.5"
                                    gradientUnits="userSpaceOnUse"
                                    >
                                    <stop
                                       offset="0.177083"
                                       stop-color="white"
                                       stop-opacity="0.16"
                                       />
                                    <stop
                                       offset="1"
                                       stop-color="white"
                                       stop-opacity="0"
                                       />
                                 </linearGradient>
                              </defs>
                           </svg>
                        </span>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div> 
   </div>
</section>
 <!-- ====== Forms Section End -->


@endsection