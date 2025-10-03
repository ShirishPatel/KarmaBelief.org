 @extends('layouts.app')
 @section('title', 'Causes')
 @section('front_content')

     <section class="py-5 text-center d-none" style="margin-top: 60px;">
         <div class="container">
             <div class="banner-inner__content">
                 <h2 class="fw-bold text-capitalize mb-3">Causes</h2>
                 <div class="mx-auto mb-4"
                     style="width: 120px; height: 4px; background: linear-gradient(90deg, #0199e4, #012d85);"></div>
             </div>
         </div>
     </section>

     @php
         $causes = DB::table('our_values_sections')->first();
         $causeValues = DB::table('our_values')->get();
         $smartSolution = DB::table('smart_solutions')->first();
         $solutions = DB::table('solutions')->where('status', '1')->paginate(9);
     @endphp

     <section class="service-three-area pt-120 pb-120">
         <div class="container">
             <div class="section-header mb-80 text-center">
                 <h2 class="fw-600 wow splt-txt" data-splitting>
                     {{ $causes->heading }}
                 </h2>
                 <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                     {{ $causes->description }}
                 </p>
             </div>
             <div class="row g-4">
                 @foreach ($causeValues as $values)
                     <div class="col-xl-4">
                         <div class="service-three__item">
                             <div class="service-three__icon mb-20">
                                 <img src="{{ asset('storage/' . $values->image) }}" alt="icon">
                             </div>
                             <h3 class="mb-10">{{ $values->heading }}</h3>
                             <p>{{ $values->description }}</p>
                         </div>
                     </div>
                 @endforeach
             </div>
         </div>
     </section>


     @isset($solutions)
         <section class="blog-area" style="margin-buttom: 100px;">
             <div class="container">
                 <div class="section-header-flex mb-80">
                     <h2 class="fw-600 splt-txt wow" data-splitting>
                         {{ $smartSolution->solution_heading ?? '' }}
                     </h2>
                     <div class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="1500ms">
                         <p>{{ $smartSolution->solution_description ?? '' }}</p>
                     </div>
                 </div>

                 <div class="row">
                     @foreach ($solutions as $solution)
                         <div class="col-lg-4 col-md-6 mb-4">
                             <div class="blog__item h-100" style="border:1px solid #eee; padding:15px; border-radius:8px;">
                                 <div class="blog__image image position-relative">
                                     <img src="{{ asset('storage/' . $solution->smart_image) }}" alt="Blog Image"
                                         style="width:100%; height:auto; max-height:300px; object-fit:contain;">
                                     <div class="tag"
                                         style="position: absolute; top: 10px; left: 10px; right: 10px; display: flex; flex-wrap: wrap; gap: 5px;">
                                         <h5 class="bg-white px-2 py-1 rounded">
                                             {{ $solution->smart_title }}
                                         </h5>
                                     </div>
                                 </div>
                                 <h4 class="mt-3 mb-2">
                                     <a class="primary-hover" href="{{ $solution->btn_link ?? 'javascript:void(0)' }}">
                                         {{ $solution->smart_heading }}
                                     </a>
                                 </h4>
                                 <p class="mb-3">
                                     <a class="primary-hover" href="{{ $solution->btn_link ?? 'javascript:void(0)' }}">
                                         {{ $solution->data }}
                                     </a>
                                 </p>
                                 <a class="btn-three" href="{{ $solution->btn_link ?? 'javascript:void(0)' }}">
                                     {{ $solution->btn_label }} <i class="fa-regular fa-arrow-right"></i>
                                 </a>
                             </div>
                         </div>
                     @endforeach
                     {{-- <div class="mt-4">
                             {{ $solutions->links() }}
                         </div> --}}
                     <div class="sofax-navigation">
                         <nav class="navigation pagination" aria-label="Posts">
                             <div class="nav-links">

                                 @if ($solutions->onFirstPage())
                                     <span class="page-numbers disabled">
                                         <i class="fa-solid fa-angle-left"></i>
                                     </span>
                                 @else
                                     <a class="prev page-numbers" href="{{ $solutions->previousPageUrl() }}">
                                         <i class="fa-solid fa-angle-left"></i>
                                     </a>
                                 @endif

                                 @foreach ($solutions->getUrlRange(1, $solutions->lastPage()) as $page => $url)
                                     @if ($page == $solutions->currentPage())
                                         <span aria-current="page" class="page-numbers current">{{ $page }}</span>
                                     @else
                                         <a class="page-numbers" href="{{ $url }}">{{ $page }}</a>
                                     @endif
                                 @endforeach

                                 @if ($solutions->hasMorePages())
                                     <a class="next page-numbers" href="{{ $solutions->nextPageUrl() }}">
                                         <i class="fa-solid fa-angle-right"></i>
                                     </a>
                                 @else
                                     <span class="page-numbers disabled">
                                         <i class="fa-solid fa-angle-right"></i>
                                     </span>
                                 @endif
                             </div>
                         </nav>
                     </div>

                 </div>
             </div>
         </section>
     @endisset

     @php
         $faqs = DB::table('faqs')
             ->where('display', 'causes')
             ->where('status', '1')
             ->orderBy('id', 'asc')
             ->get();
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
    
 @endsection
