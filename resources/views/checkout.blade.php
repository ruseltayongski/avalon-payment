@extends('layouts.app')

@section('content')

<!-- ====== Checkout Section Start -->
<section class="bg-gray-2 dark:bg-dark pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container mx-auto">
       <div class="flex flex-wrap -mx-4">
          <div class="w-full px-4 xl:w-8/12">
             <div>
                <a href="{{ route('welcome') }}">
                    <h3 class="mb-8 text-xl font-semibold text-dark dark:text-white sm:leading-[40px] sm:text-[28px]">
                        Shopping Cart
                    </h3>
                </a>
                <div
                   class="mb-10 overflow-hidden rounded-[10px] border border-stroke dark:border-dark-3 bg-white dark:bg-dark-2 shadow-testimonial-6 dark:shadow-box-dark"
                   >
                   <div
                      class="max-w-full mb-8 overflow-x-auto border-b border-stroke dark:border-dark-3"
                      >
                      <table class="w-full table-auto">
                         <thead>
                            <tr class="text-left">
                               <th
                                  class="min-w-[300px] py-4 px-4 text-sm font-medium text-dark dark:text-white xl:pl-9"
                                  >
                                  Product
                               </th>
                               <th
                                  class="min-w-[150px] py-4 px-4 text-sm font-medium text-dark dark:text-white"
                                  >
                                  Quantity
                               </th>
                               <th
                                  class="min-w-[120px] py-4 px-4 text-sm font-medium text-dark dark:text-white"
                                  >
                                  Total Price
                               </th>
                               <th
                                  class="min-w-[100px] py-4 px-4 text-center text-sm font-medium text-dark dark:text-white xl:pr-9"
                                  ></th>
                            </tr>
                         </thead>
                         <tbody>
                            <tr>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3 xl:pl-11"
                                  >
                                  <div class="flex items-center">
                                     <img
                                        src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-03/image-01.jpg"
                                        alt="image"
                                        class="mr-[22px] h-12 w-12 rounded"
                                        />
                                     <div>
                                        <h5
                                           class="text-base font-medium text-dark dark:text-white"
                                           >
                                           <a
                                              href="javascript:void(0)"
                                              class="hover:text-primary"
                                              >
                                           Red colour ladies bag
                                           </a>
                                        </h5>
                                        <p
                                           class="text-sm text-body-color dark:text-dark-6"
                                           >
                                           Color: Red
                                        </p>
                                     </div>
                                  </div>
                               </td>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3"
                                  >
                                  <div
                                     x-data="
                                     {
                                     quantity: 1
                                     }
                                     "
                                     class="inline-flex h-9 items-center rounded border-[0.5px] border-stroke dark:border-dark-3 bg-gray-1 dark:bg-dark text-base font-medium text-dark dark:text-white"
                                     >
                                     <span
                                        @click=" quantity > 1 && quantity-- "
                                        class="cursor-pointer select-none border-r-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                        >
                                     -
                                     </span>
                                     <span class="py-[6px] px-[18px]" x-text="quantity">
                                     </span>
                                     <span
                                        @click=" quantity++ "
                                        class="cursor-pointer select-none border-l-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                        >
                                     +
                                     </span>
                                  </div>
                               </td>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3"
                                  >
                                  <p
                                     class="text-base font-medium text-dark dark:text-white"
                                     >
                                     $110.99
                                  </p>
                               </td>
                               <td
                                  class="p-4 text-center border-t border-stroke dark:border-dark-3 pr-11"
                                  >
                                  <button
                                     class="text-dark dark:text-white hover:text-red"
                                     >
                                     <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 14 14"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <g clip-path="url(#clip0_1006_33743)">
                                           <path
                                              d="M7.7001 6.99998L13.0376 1.66248C13.2345 1.4656 13.2345 1.15935 13.0376 0.962476C12.8407 0.765601 12.5345 0.765601 12.3376 0.962476L7.0001 6.29998L1.6626 0.962476C1.46572 0.765601 1.15947 0.765601 0.962598 0.962476C0.765723 1.15935 0.765723 1.4656 0.962598 1.66248L6.3001 6.99998L0.962598 12.3375C0.765723 12.5344 0.765723 12.8406 0.962598 13.0375C1.0501 13.125 1.18135 13.1906 1.3126 13.1906C1.44385 13.1906 1.5751 13.1469 1.6626 13.0375L7.0001 7.69998L12.3376 13.0375C12.4251 13.125 12.5563 13.1906 12.6876 13.1906C12.8188 13.1906 12.9501 13.1469 13.0376 13.0375C13.2345 12.8406 13.2345 12.5344 13.0376 12.3375L7.7001 6.99998Z"
                                              fill=""
                                              />
                                        </g>
                                        <defs>
                                           <clipPath id="clip0_1006_33743">
                                              <rect width="14" height="14" fill="white" />
                                           </clipPath>
                                        </defs>
                                     </svg>
                                  </button>
                               </td>
                            </tr>
                            <tr>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3 xl:pl-11"
                                  >
                                  <div class="flex items-center">
                                     <img
                                        src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-03/image-02.jpg"
                                        alt="image"
                                        class="mr-[22px] h-12 w-12 rounded"
                                        />
                                     <div>
                                        <h5
                                           class="text-base font-medium text-dark dark:text-white"
                                           >
                                           <a
                                              href="javascript:void(0)"
                                              class="hover:text-primary"
                                              >
                                           Orange colour ladies bag
                                           </a>
                                        </h5>
                                        <p
                                           class="text-sm text-body-color dark:text-dark-6"
                                           >
                                           Color: Orange
                                        </p>
                                     </div>
                                  </div>
                               </td>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3"
                                  >
                                  <div
                                     x-data="
                                     {
                                     quantity: 1
                                     }
                                     "
                                     class="inline-flex h-9 items-center rounded border-[0.5px] border-stroke dark:border-dark-3 bg-gray-1 dark:bg-dark text-base font-medium text-dark dark:text-white"
                                     >
                                     <span
                                        @click=" quantity > 1 && quantity-- "
                                        class="cursor-pointer select-none border-r-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                        >
                                     -
                                     </span>
                                     <span class="py-[6px] px-[18px]" x-text="quantity">
                                     </span>
                                     <span
                                        @click=" quantity++ "
                                        class="cursor-pointer select-none border-l-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                        >
                                     +
                                     </span>
                                  </div>
                               </td>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3"
                                  >
                                  <p
                                     class="text-base font-medium text-dark dark:text-white"
                                     >
                                     $110.99
                                  </p>
                               </td>
                               <td
                                  class="p-4 text-center border-t border-stroke dark:border-dark-3 pr-11"
                                  >
                                  <button
                                     class="text-dark dark:text-white hover:text-red"
                                     >
                                     <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 14 14"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <g clip-path="url(#clip0_1006_33743)">
                                           <path
                                              d="M7.7001 6.99998L13.0376 1.66248C13.2345 1.4656 13.2345 1.15935 13.0376 0.962476C12.8407 0.765601 12.5345 0.765601 12.3376 0.962476L7.0001 6.29998L1.6626 0.962476C1.46572 0.765601 1.15947 0.765601 0.962598 0.962476C0.765723 1.15935 0.765723 1.4656 0.962598 1.66248L6.3001 6.99998L0.962598 12.3375C0.765723 12.5344 0.765723 12.8406 0.962598 13.0375C1.0501 13.125 1.18135 13.1906 1.3126 13.1906C1.44385 13.1906 1.5751 13.1469 1.6626 13.0375L7.0001 7.69998L12.3376 13.0375C12.4251 13.125 12.5563 13.1906 12.6876 13.1906C12.8188 13.1906 12.9501 13.1469 13.0376 13.0375C13.2345 12.8406 13.2345 12.5344 13.0376 12.3375L7.7001 6.99998Z"
                                              fill=""
                                              />
                                        </g>
                                        <defs>
                                           <clipPath id="clip0_1006_33743">
                                              <rect width="14" height="14" fill="white" />
                                           </clipPath>
                                        </defs>
                                     </svg>
                                  </button>
                               </td>
                            </tr>
                            <tr>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3 xl:pl-11"
                                  >
                                  <div class="flex items-center">
                                     <img
                                        src="https://cdn.tailgrids.com/1.0/assets/images/ecommerce/checkout/checkout-03/image-03.jpg"
                                        alt="image"
                                        class="mr-[22px] h-12 w-12 rounded"
                                        />
                                     <div>
                                        <h5
                                           class="text-base font-medium text-dark dark:text-white"
                                           >
                                           <a
                                              href="javascript:void(0)"
                                              class="hover:text-primary"
                                              >
                                           Black bag for man
                                           </a>
                                        </h5>
                                        <p
                                           class="text-sm text-body-color dark:text-dark-6"
                                           >
                                           Color: Black
                                        </p>
                                     </div>
                                  </div>
                               </td>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3"
                                  >
                                  <div
                                     x-data="
                                     {
                                     quantity: 1
                                     }
                                     "
                                     class="inline-flex h-9 items-center rounded border-[0.5px] border-stroke dark:border-dark-3 bg-gray-1 dark:bg-dark text-base font-medium text-dark dark:text-white"
                                     >
                                     <span
                                        @click=" quantity > 1 && quantity-- "
                                        class="cursor-pointer select-none border-r-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                        >
                                     -
                                     </span>
                                     <span class="py-[6px] px-[18px]" x-text="quantity">
                                     </span>
                                     <span
                                        @click=" quantity++ "
                                        class="cursor-pointer select-none border-l-[0.5px] border-stroke dark:border-dark-3 py-[6px] px-3"
                                        >
                                     +
                                     </span>
                                  </div>
                               </td>
                               <td
                                  class="p-4 border-t border-stroke dark:border-dark-3"
                                  >
                                  <p
                                     class="text-base font-medium text-dark dark:text-white"
                                     >
                                     $110.99
                                  </p>
                               </td>
                               <td
                                  class="p-4 text-center border-t border-stroke dark:border-dark-3 pr-11"
                                  >
                                  <button
                                     class="text-dark dark:text-white hover:text-red"
                                     >
                                     <svg
                                        width="14"
                                        height="14"
                                        viewBox="0 0 14 14"
                                        fill="none"
                                        xmlns="http://www.w3.org/2000/svg"
                                        class="fill-current"
                                        >
                                        <g clip-path="url(#clip0_1006_33743)">
                                           <path
                                              d="M7.7001 6.99998L13.0376 1.66248C13.2345 1.4656 13.2345 1.15935 13.0376 0.962476C12.8407 0.765601 12.5345 0.765601 12.3376 0.962476L7.0001 6.29998L1.6626 0.962476C1.46572 0.765601 1.15947 0.765601 0.962598 0.962476C0.765723 1.15935 0.765723 1.4656 0.962598 1.66248L6.3001 6.99998L0.962598 12.3375C0.765723 12.5344 0.765723 12.8406 0.962598 13.0375C1.0501 13.125 1.18135 13.1906 1.3126 13.1906C1.44385 13.1906 1.5751 13.1469 1.6626 13.0375L7.0001 7.69998L12.3376 13.0375C12.4251 13.125 12.5563 13.1906 12.6876 13.1906C12.8188 13.1906 12.9501 13.1469 13.0376 13.0375C13.2345 12.8406 13.2345 12.5344 13.0376 12.3375L7.7001 6.99998Z"
                                              fill=""
                                              />
                                        </g>
                                        <defs>
                                           <clipPath id="clip0_1006_33743">
                                              <rect width="14" height="14" fill="white" />
                                           </clipPath>
                                        </defs>
                                     </svg>
                                  </button>
                               </td>
                            </tr>
                         </tbody>
                      </table>
                   </div>
                   <div class="px-8 pb-10">
                      <div class="flex flex-wrap justify-between -mx-4">
                         <div class="w-full px-4 mb-10 md:mb-0 md:w-1/2">
                            <div class="lg:max-w-[300px]">
                               <div
                                  class="pb-4 mb-8 border-b border-stroke dark:border-dark-3"
                                  >
                                  <h4
                                     class="mb-[6px] text-lg font-semibold text-dark dark:text-white"
                                     >
                                     Coupon Code
                                  </h4>
                                  <p class="text-sm text-body-color dark:text-dark-6">
                                     Enter code to get discount instantly
                                  </p>
                               </div>
                               <form class="relative">
                                  <input
                                     type="text"
                                     placeholder="Coupon code"
                                     class="w-full rounded-[5px] bg-transparent border border-stroke dark:border-dark-3 py-3 pl-5 pr-20 text-body-color dark:text-dark-6 outline-none transition focus:border-primary active:border-primary disabled:cursor-default disabled:bg-[#F5F7FD]"
                                     />
                                  <button
                                     class="absolute right-2 top-1/2 mb-3 h-[34px] -translate-y-1/2 rounded bg-dark px-5 text-sm font-medium text-white transition hover:bg-opacity-90"
                                     >
                                  Apply
                                  </button>
                               </form>
                            </div>
                         </div>
                         <div class="w-full px-4 md:w-1/2">
                            <div class="lg:max-w-[250px]">
                               <div class="space-y-4">
                                  <p
                                     class="flex justify-between text-base text-dark dark:text-white"
                                     >
                                     <span> Subtotal </span>
                                     <span class="font-medium"> $108 </span>
                                  </p>
                                  <p
                                     class="flex justify-between text-base text-dark dark:text-white"
                                     >
                                     <span> Shipping Cost </span>
                                     <span class="font-medium"> $10.85 </span>
                                  </p>
                                  <p
                                     class="flex justify-between text-base text-dark dark:text-white"
                                     >
                                     <span> Discount </span>
                                     <span class="font-medium"> $9.00 </span>
                                  </p>
                               </div>
                               <div
                                  class="mt-[18px] border-t border-stroke dark:border-dark-3 pt-[18px]"
                                  >
                                  <p
                                     class="flex justify-between text-base text-dark dark:text-white"
                                     >
                                     <span> Total Payable </span>
                                     <span class="font-medium"> $88.15 </span>
                                  </p>
                               </div>
                            </div>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
          <div class="w-full px-4 xl:w-4/12">
             <div>
                <h3
                   class="mb-8 text-xl font-semibold text-dark dark:text-white sm:leading-[40px] sm:text-[28px]"
                   >
                   Payment Info
                </h3>
                <div
                   class="overflow-hidden bg-white border rounded-lg border-stroke dark:border-dark-3 dark:bg-dark-2 p-9 shadow-testimonial-6 dark:shadow-box-dark"
                   >
                   <h3
                      class="mb-6 text-xl font-semibold text-dark dark:text-white"
                      >
                      Payment Method
                   </h3>
                   <div x-data="{paymentMethod: 'creditCard'}">
                      <div class="mb-4">
                         <label
                            for="paymentCheckbox"
                            class="flex items-center cursor-pointer select-none"
                            >
                            <div class="relative">
                               <input
                                  type="radio"
                                  id="paymentCheckbox"
                                  name="payment"
                                  class="sr-only"
                                  @change="paymentMethod = 'creditCard'"
                                  />
                               <div
                                  class="mr-[10px] flex h-5 w-5 items-center justify-center rounded-full border"
                                  :class="paymentMethod === 'creditCard' ? 'border-primary bg-[#F1F4FF] dark:bg-transparent' : 'border-stroke dark:border-dark-3'"
                                  >
                                  <span
                                     class="h-[10px] w-[10px] rounded-full"
                                     :class="paymentMethod === 'creditCard' ? 'bg-primary' : 'bg-transparent'"
                                     >
                                  </span>
                               </div>
                            </div>
                            <span class="text-dark dark:text-white">Credit Card</span>
                         </label>
                      </div>
                      <div class="mb-4">
                         <label
                            for="paymentCheckbox2"
                            class="flex items-center cursor-pointer select-none"
                            >
                            <div class="relative">
                               <input
                                  type="radio"
                                  id="paymentCheckbox2"
                                  name="payment"
                                  class="sr-only"
                                  @change="paymentMethod = 'paypal'"
                                  />
                               <div
                                  class="mr-[10px] flex h-5 w-5 items-center justify-center rounded-full border"
                                  :class="paymentMethod === 'paypal' ? 'border-primary bg-[#F1F4FF] dark:bg-transparent' : 'border-stroke dark:border-dark-3'"
                                  >
                                  <span
                                     class="h-[10px] w-[10px] rounded-full"
                                     :class="paymentMethod === 'paypal' ? 'bg-primary' : 'bg-transparent'"
                                     >
                                  </span>
                               </div>
                            </div>
                            <span class="text-dark dark:text-white">Paypal</span>
                         </label>
                      </div>
                      <div class="mb-4">
                         <label
                            for="paymentCheckbox3"
                            class="flex items-center cursor-pointer select-none"
                            >
                            <div class="relative">
                               <input
                                  type="radio"
                                  id="paymentCheckbox3"
                                  name="payment"
                                  class="sr-only"
                                  @change="paymentMethod = 'cash'"
                                  />
                               <div
                                  class="mr-[10px] flex h-5 w-5 items-center justify-center rounded-full border"
                                  :class="paymentMethod === 'cash' ? 'border-primary bg-[#F1F4FF] dark:bg-transparent' : 'border-stroke dark:border-dark-3'"
                                  >
                                  <span
                                     class="h-[10px] w-[10px] rounded-full"
                                     :class="paymentMethod === 'cash' ? 'bg-primary' : 'bg-transparent'"
                                     >
                                  </span>
                               </div>
                            </div>
                            <span class="text-dark dark:text-white"
                               >Cash on delivery</span
                               >
                         </label>
                      </div>
                   </div>
                   <div
                      class="pt-8 mt-8 border-t border-stroke dark:border-dark-3"
                      >
                      <form>
                         <div class="flex flex-wrap -mx-2">
                            <div class="w-full px-2">
                               <div class="mb-5">
                                  <label
                                     class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                                     >
                                  Name on Card:
                                  </label>
                                  <input
                                     type="text"
                                     placeholder="Jhon deo"
                                     class="w-full px-5 py-3 bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                     />
                               </div>
                            </div>
                            <div class="w-full px-2">
                               <div class="mb-5">
                                  <label
                                     class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                                     >
                                  Card Number:
                                  </label>
                                  <input
                                     type="text"
                                     placeholder="0000 0000 0000 1248"
                                     class="w-full px-5 py-3 bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                     />
                               </div>
                            </div>
                            <div class="w-full px-2">
                               <div class="mb-6">
                                  <label
                                     class="mb-2.5 block text-base font-medium text-dark dark:text-white"
                                     >
                                  Expiration Date:
                                  </label>
                                  <div class="flex -mx-2">
                                     <div class="w-4/12 px-2">
                                        <div class="relative">
                                           <select
                                              class="w-full px-5 py-3 font-medium transition bg-transparent border rounded-md outline-none appearance-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                              >
                                              <option value="" class="dark:bg-dark-2">
                                                 05
                                              </option>
                                              <option value="" class="dark:bg-dark-2">
                                                 04
                                              </option>
                                              <option value="" class="dark:bg-dark-2">
                                                 03
                                              </option>
                                           </select>
                                           <span
                                              class="absolute -translate-y-1/2 right-5 top-1/2 text-body-color dark:text-dark-6"
                                              >
                                              <svg
                                                 width="16"
                                                 height="16"
                                                 viewBox="0 0 16 16"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="fill-current stroke-current"
                                                 >
                                                 <path
                                                    d="M2.4142 5.03575L2.41418 5.03577L2.417 5.03852L7.767 10.2635L8.00101 10.4921L8.23393 10.2624L13.5839 4.98741L13.5839 4.98741L13.5856 4.98575C13.6804 4.89093 13.8194 4.89093 13.9142 4.98575C14.0087 5.0803 14.009 5.2187 13.915 5.31351C13.9148 5.31379 13.9145 5.31407 13.9142 5.31435L8.16628 10.9623L8.16627 10.9623L8.1642 10.9643C8.06789 11.0607 8.02303 11.0667 7.9999 11.0667C7.94098 11.0667 7.88993 11.0523 7.82015 10.9991L2.08477 5.36351C1.99078 5.26871 1.99106 5.1303 2.0856 5.03575C2.18043 4.94093 2.31937 4.94093 2.4142 5.03575Z"
                                                    fill=""
                                                    stroke=""
                                                    stroke-width="0.666667"
                                                    />
                                              </svg>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="w-5/12 px-2">
                                        <div class="relative">
                                           <select
                                              class="w-full px-5 py-3 font-medium transition bg-transparent border rounded-md outline-none appearance-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                              >
                                              <option value="" class="dark:bg-dark-2">
                                                 2000
                                              </option>
                                              <option value="" class="dark:bg-dark-2">
                                                 2001
                                              </option>
                                              <option value="" class="dark:bg-dark-2">
                                                 2002
                                              </option>
                                           </select>
                                           <span
                                              class="absolute -translate-y-1/2 right-5 top-1/2 text-body-color dark:text-dark-6"
                                              >
                                              <svg
                                                 width="16"
                                                 height="16"
                                                 viewBox="0 0 16 16"
                                                 fill="none"
                                                 xmlns="http://www.w3.org/2000/svg"
                                                 class="fill-current stroke-current"
                                                 >
                                                 <path
                                                    d="M2.4142 5.03575L2.41418 5.03577L2.417 5.03852L7.767 10.2635L8.00101 10.4921L8.23393 10.2624L13.5839 4.98741L13.5839 4.98741L13.5856 4.98575C13.6804 4.89093 13.8194 4.89093 13.9142 4.98575C14.0087 5.0803 14.009 5.2187 13.915 5.31351C13.9148 5.31379 13.9145 5.31407 13.9142 5.31435L8.16628 10.9623L8.16627 10.9623L8.1642 10.9643C8.06789 11.0607 8.02303 11.0667 7.9999 11.0667C7.94098 11.0667 7.88993 11.0523 7.82015 10.9991L2.08477 5.36351C1.99078 5.26871 1.99106 5.1303 2.0856 5.03575C2.18043 4.94093 2.31937 4.94093 2.4142 5.03575Z"
                                                    fill=""
                                                    stroke=""
                                                    stroke-width="0.666667"
                                                    />
                                              </svg>
                                           </span>
                                        </div>
                                     </div>
                                     <div class="w-3/12 px-2">
                                        <input
                                           type="text"
                                           placeholder="05"
                                           class="w-full px-5 py-3 text-center bg-transparent border rounded-md outline-none border-stroke dark:border-dark-3 text-body-color dark:text-dark-6 focus:border-primary"
                                           />
                                     </div>
                                  </div>
                               </div>
                            </div>
                            <div class="w-full px-2">
                               <a
                                    href="{{ route('invoice') }}"
                                    class="flex items-center justify-center w-full py-3 text-base font-medium text-center text-white rounded-md bg-primary px-7 hover:bg-blue-dark">
                                    Place Order
                               </a>
                            </div>
                         </div>
                      </form>
                   </div>
                </div>
             </div>
          </div>
       </div>
    </div>
 </section>
 <!-- ====== Checkout Section End -->

@endsection