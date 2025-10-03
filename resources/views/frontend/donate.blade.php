 @extends('layouts.app')
 @section('title', 'Donate')
 @section('front_content')

     <section class="py-5 text-center" style="margin-top: 60px;">
         <div class="container">
             <div class="banner-inner__content">
                 <h2 class="fw-bold text-capitalize mb-3">Donations</h2>
                 <div class="mx-auto mb-4"
                     style="width: 120px; height: 4px; background: linear-gradient(90deg, #0199e4, #012d85);"></div>
             </div>
         </div>
     </section>

     <section class="section sofax" style="margin-bottom: 600px;">
         <div class="container">
             <div class="sofax-section-title d-none">
                 <div class="row">
                     <div class="col-xl-7 col-lg-8">
                         <h2>Meet the generous donors behind our success</h2>
                     </div>
                     <div class="col-xl-5 col-lg-4 d-flex justify-content-end align-items-center">
                         <div class="sofax-aboutus-content-text our-teaminner">
                             <p>Our donors are the heart of our mission. Their support helps us achieve our goals and make a
                                 difference. Each donor contributes with generosity and commitment to our cause.</p>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="row">
                 @php
                     $chunks = $donate->chunk(2);
                     $delay = 0.1;
                 @endphp

                 @foreach ($chunks as $chunk)
                     <div class="col-lg-3 col-md-6">
                         @foreach ($chunk as $index => $item)
                             <a href="#">
                                 <div class="sofax-team-member-wrap {{ $index === 0 ? 'sofax-team-member-aboutus' : '' }}">
                                     <div class="sofax-team-member-img wow fadeInUpX" data-wow-delay="{{ $delay }}s">
                                         <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}">
                                     </div>
                                     <div class="sofax-team-member-content">
                                         <h4>{{ $item->name }}</h4>
                                         <p>{{ $item->description }}</p>
                                     </div>
                                 </div>
                             </a>
                             @php
                                 $delay += 0.1;
                             @endphp
                         @endforeach
                     </div>
                 @endforeach
             </div>
             {{-- <div class="row">
                 @php
                     $chunks = $donate->chunk(2);
                     $delay = 0.1;
                 @endphp

                 @foreach ($chunks as $chunk)
                     <div class="col-lg-3 col-md-6 mb-4">
                         @foreach ($chunk as $index => $item)
                             <a href="#">
                                 <div class="sofax-team-member-wrap {{ $index === 0 ? 'sofax-team-member-aboutus' : '' }}"
                                     style="border: 1px solid #ccc; width: 100%; display: flex; flex-direction: column; box-sizing: border-box; background: #fff;">

                                     <div class="sofax-team-member-img wow fadeInUpX" data-wow-delay="{{ $delay }}s"
                                         style="padding: 10px;">
                                         <img src="{{ asset('storage/' . $item->image) }}" alt="{{ $item->name }}"
                                             style="width: 100%; height: auto; display: block;">
                                     </div>

                                     <div class="sofax-team-member-content" style="padding: 10px; text-align: center;">
                                         <h4 style="margin: 5px 0;">{{ $item->name }}</h4>
                                         <p style="margin: 0;">{{ $item->description }}</p>
                                     </div>
                                 </div>
                             </a>

                             @php
                                 $delay += 0.1;
                             @endphp
                         @endforeach
                     </div>
                 @endforeach
             </div> --}}

             <div class="container-fluid py-5">
                 <div class="row mb-5 gx-4">
                     <!-- QR 1 -->
                     <div class="col-12 col-md-6 mb-4">
                         <div class="card shadow-sm border-0 h-100">
                             <div class="card-body d-flex justify-content-center align-items-center bg-primary">
                                 <img src="{{ asset('storage/' . $config->phone_pay) }}" alt="PhonePe QR" class="img-fluid"
                                     style="max-height:500px; object-fit:contain;" />
                             </div>
                         </div>
                     </div>

                     <!-- QR 2 -->
                     <div class="col-12 col-md-6 mb-4">
                         <div class="card shadow-sm border-0 h-100">
                             <div class="card-body d-flex justify-content-center align-items-center bg-info">
                                 <img src="{{ asset('storage/' . $config->google_pay) }}" alt="Google Pay QR"
                                     class="img-fluid" style="max-height:500px; object-fit:contain;" />
                             </div>
                         </div>
                     </div>
                 </div>

                 <!-- Bank details full width -->
                 <div class="row">
                     <div class="col-12">
                         <div class="card shadow-lg border-0 w-100">
                             <h4 class="mb-3 text-center">Bank Account Details</h4>
                             <div class="row g-0">
                                 <div
                                     class="col-12 col-md-6 d-flex flex-column justify-content-center p-5 bg-primary text-white">
                                     <p class="mb-2 fs-5">Bank Name : {{ $config->bank_name }}</p>
                                     <p class="mb-2 fs-5">Account Name: {{ $config->ac_holder_name }}</p>
                                     <p class="mb-2 fs-5">Account Number: {{ $config->ac_number }}</p>
                                 </div>

                                 <div class="col-12 col-md-6 d-flex flex-column justify-content-center p-5 bg-primary text-white">
                                     <p class="mb-2 fs-5">Bank Branch: {{ $config->bank_branch }}</p>
                                     <p class="mb-2 fs-5">Account Type: {{ $config->ac_type }}</p>
                                     <p class="mb-2 fs-5">IFSC Code: {{ $config->ifsc_code }}</p>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
         </div>
         @php
             $faqs = DB::table('faqs')->where('display', 'donate')->where('status', '1')->orderBy('id', 'asc')->get();
         @endphp
         @if ($faqs->isnotEmpty())
             <section class="section sofax-section-padding">
                 <div class="container">
                     <div class="sofax-section-title center">
                         <h2>Frequently asked questions!</h2>
                     </div>
                     <div class="sofax-accordion-wrap1 sofax-accordion-wrap3">
                         <div class="sofax-accordion-section-wrapper">
                             <div class="sofax-accordion-section-v2">
                                 @for ($i = 0; $i < 3 && $i < count($faqs); $i++)
                                     @php $faq = $faqs[$i]; @endphp
                                     <div class="sofax-accordion-item about-us-section">
                                         <div class="sofax-accordion-header">
                                             <h4>{{ $faq->question }}</h4>
                                             <div class="sofax-active-icon sofax-accordion-btn">
                                                 <i class="fa-solid fa-chevron-down"></i>
                                             </div>
                                         </div>
                                         <div class="sofax-accordion-body-ww">
                                             <p>{!! nl2br(e($faq->answer)) !!}</p>
                                         </div>
                                     </div>
                                 @endfor
                             </div>
                             <div class="sofax-accordion-section-v2 mt-24">
                                 @for ($i = 3; $i < 6 && $i < count($faqs); $i++)
                                     @php $faq = $faqs[$i]; @endphp
                                     <div class="sofax-accordion-item about-us-section">
                                         <div class="sofax-accordion-header">
                                             <h4>{{ $faq->question }}</h4>
                                             <div class="sofax-active-icon sofax-accordion-btn">
                                                 <i class="fa-solid fa-chevron-down"></i>
                                             </div>
                                         </div>
                                         <div class="sofax-accordion-body-ww">
                                             <p>{!! nl2br(e($faq->answer)) !!}</p>
                                         </div>
                                     </div>
                                 @endfor
                             </div>
                         </div>
                     </div>
                 </div>
             </section>
         @endif

         <script>
             document.addEventListener('DOMContentLoaded', function() {
                 const headers = document.querySelectorAll('.sofax-accordion-header');

                 headers.forEach(function(header) {
                     header.addEventListener('click', function() {
                         const item = this.parentElement;
                         const isOpen = item.classList.contains('open');

                         document.querySelectorAll('.sofax-accordion-item').forEach(function(i) {
                             i.classList.remove('open');
                         });

                         if (!isOpen) {
                             item.classList.add('open');
                         }
                     });
                 });
             });
         </script>
         <style>
             .sofax-accordion-body-ww {
                 max-height: 0;
                 overflow: hidden;
                 transition: max-height 0.5s ease-in-out, padding 0.5s ease-in-out;
                 padding: 0 30px;
             }

             .sofax-accordion-body-ww p {
                 color: initial;
                 transition: color 0.5s ease;
             }

             .sofax-accordion-item.open .sofax-accordion-body-ww {
                 max-height: 1000px;
                 padding: 10px 30px 25px;
             }

             .sofax-accordion-item.open .sofax-accordion-body-ww p {
                 color: #e5abf3 !important;
             }

             .sofax-accordion-item.open .sofax-active-icon i {
                 transform: rotate(180deg);
                 transition: transform 0.5s ease;
             }

             .sofax-accordion-item.open .sofax-accordion-header {
                 border-bottom: 1px solid rgba(0, 0, 0, 0.1);
             }
         </style>
     </section>

 @endsection
