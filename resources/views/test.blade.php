@extends('layouts.app')

@section('content')

@section('css')
   <style>
      .icon-blue {
         background-color: blue;
      }
   </style>
@endsection

<!-- ====== Box Select Section Start -->
<section class="bg-gray-2 dark:bg-dark py-20 lg:py-[120px]">
   <div class="container mx-auto">
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
</section>
<!-- ====== Box Select Section End -->


{{-- <section class="bg-gray-2 dark:bg-dark py-20 lg:py-[120px]" x-data="{ selectedList: [] }">
   <div class="container mx-auto">
      <div>
         <h3 class="mb-6 text-lg font-semibold text-dark dark:text-white">Select List</h3>
         <div class="max-w-[270px] space-y-[10px]">
            <!-- List Item 1 -->
            <div x-data="{ isChecked: false }">
               <input
                  type="checkbox"
                  name="select-list"
                  id="select-list-1"
                  class="select-list sr-only"
                  x-model="isChecked"
                  @change="isChecked ? selectedList.push(1) : selectedList.splice(selectedList.indexOf(1), 1)"
               />
               <label
                  for="select-list-1"
                  class="select-list text-body-color dark:text-dark-6 flex cursor-pointer items-center rounded-md py-3 px-5"
                  :class="{ 'border-stroke dark:border-dark-3 border bg-white dark:bg-dark-2': isChecked, 'bg-yellow border-primary': selectedList.includes(1) }"
               >
                  <span
                     class="icon flex h-5 w-5 items-center justify-center rounded-full bg-secondary-color"
                  >
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
                     List Title Here 1
                  </span>
               </label>
            </div>
            
            <!-- List Item 2 -->
            <div x-data="{ isChecked: false }">
               <input
                  type="checkbox"
                  name="select-list"
                  id="select-list-2"
                  class="select-list sr-only"
                  x-model="isChecked"
                  @change="isChecked ? selectedList.push(2) : selectedList.splice(selectedList.indexOf(2), 1)"
               />
               <label
                  for="select-list-2"
                  class="select-list text-body-color dark:text-dark-6 flex cursor-pointer items-center rounded-md py-3 px-5"
                  :class="{ 'border-stroke dark:border-dark-3 border bg-white dark:bg-dark-2': isChecked, 'bg-yellow border-primary': selectedList.includes(2) }"
               >
                  <span
                     class="icon flex h-5 w-5 items-center justify-center rounded-full bg-secondary-color"
                  >
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
                     List Title Here 2
                  </span>
               </label>
            </div>

            <!-- List Item 3 -->
            <!-- ... Repeat the structure for additional list items (3 to 5) -->

         </div>
      </div>
   </div>
</section> --}}



@endsection