 {{-- @extends('layouts.app')
 @section('title', 'Gallery')

 <div class="container py-5">
     <section class="py-5 text-center">
         <div class="container">
             <div class="banner-inner__content">
                 <h2 class="fw-bold text-capitalize mb-3"
                     style="background: #01469b;
           -webkit-background-clip: text;
           -webkit-text-fill-color: transparent;">
                     Gallery
                 </h2>

                 <div class="mx-auto mb-4"
                     style="width: 120px; height: 4px; background: linear-gradient(90deg, #0199e4, #012d85);"></div>
             </div>
         </div>
     </section>



     @php
         $categories = DB::table('gallery_categories')->where('status', '1')->get();
         $selectedCategoryId = request('category_id', $categories->first()->id ?? null);

         $images = DB::table('galleries')
             ->where('status', 1)
             ->whereJsonContains('category_id', (string) $selectedCategoryId)
             ->where('upload_type', 'image')
             ->get();

         $videos = DB::table('galleries')
             ->where('status', 1)
             ->whereJsonContains('category_id', (string) $selectedCategoryId)
             ->whereIn('upload_type', ['video', 'url'])
             ->get();
     @endphp

     <div class="row">
         <div class="col-md-3" style="margin-top: 65px;">
             <div class="btn-group-vertical w-100" role="group" aria-label="Categories">
                 @foreach ($categories as $cat)
                     <input type="radio" class="btn-check" name="category" id="category-{{ $cat->id }}"
                         autocomplete="off" value="{{ $cat->id }}"
                         {{ $cat->id == $selectedCategoryId ? 'checked' : '' }}
                         onchange="window.location.href='?category_id={{ $cat->id }}'">
                     <label class="btn btn-outline-primary mb-2 text-start" for="category-{{ $cat->id }}">
                         {{ $cat->category_name }}
                     </label>
                 @endforeach
             </div>
         </div>

         <div class="col-md-9">
             <div class="d-flex justify-content-center mb-3" style="margin-right: 300px;">
                 <div class="btn-group w-50" role="group">
                     <input type="radio" class="btn-check" name="type" id="images"
                         {{ $images->count() ? 'checked' : '' }} {{ $images->isEmpty() ? 'disabled' : '' }}>
                     <label class="btn btn-outline-primary" for="images">Images</label>

                     <input type="radio" class="btn-check" name="type" id="videos"
                         {{ !$images->count() && $videos->count() ? 'checked' : '' }}
                         {{ $videos->isEmpty() ? 'disabled' : '' }}>
                     <label class="btn btn-outline-primary" for="videos">Videos</label>
                 </div>
             </div>

             <div class="tab-content">
                 <div id="images-tab" class="row g-3" style="{{ $images->count() ? '' : 'display:none;' }}">
                     @foreach ($images as $gallery)
                         <div class="col-md-4 col-sm-6">
                             <a href="{{ asset('storage/' . $gallery->path) }}" target="_blank"
                                 class="text-decoration-none">
                                 <div class="card border-0 shadow rounded overflow-hidden hover-shadow">
                                     <img src="{{ asset('storage/' . $gallery->path) }}" class="card-img-top img-fluid"
                                         alt="{{ $gallery->title }}">
                                     <div class="card-body">
                                         <h6>{{ $gallery->title }}</h6>
                                         <p class="small text-muted">{{ $gallery->desc }}</p>
                                     </div>
                                 </div>
                             </a>
                         </div>
                     @endforeach
                 </div>

                 <div id="videos-tab" class="row g-3" style="{{ $images->count() ? 'display:none;' : '' }}">
                     @foreach ($videos as $gallery)
                         <div class="col-md-4 col-sm-6">
                             @if ($gallery->upload_type === 'video')
                                 <div class="card border-0 shadow rounded overflow-hidden">
                                     <video width="100%" height="200" controls>
                                         <source src="{{ asset('storage/' . $gallery->path) }}" type="video/mp4">
                                         Your browser does not support the video tag.
                                     </video>
                                     <div class="card-body">
                                         <h6>{{ $gallery->title }}</h6>
                                         <p class="small text-muted">{{ $gallery->desc }}</p>
                                     </div>
                                 </div>
                             @elseif ($gallery->upload_type === 'url')
                                 @php
                                     $url = $gallery->path;
                                     $youtubeId = null;
                                     $vimeoId = null;

                                     if (preg_match('/youtu\.be\/([^\?]+)/', $url, $matches)) {
                                         $youtubeId = $matches[1];
                                     } elseif (preg_match('/youtube\.com.*v=([^&]+)/', $url, $matches)) {
                                         $youtubeId = $matches[1];
                                     } elseif (preg_match('/vimeo\.com\/(\d+)/', $url, $matches)) {
                                         $vimeoId = $matches[1];
                                     }
                                 @endphp

                                 <div class="card border-0 shadow rounded overflow-hidden position-relative">
                                     @if ($youtubeId)
                                         @php
                                             $thumbUrl = "https://img.youtube.com/vi/$youtubeId/hqdefault.jpg";
                                         @endphp
                                         <a href="{{ $url }}" target="_blank">
                                             <img src="{{ $thumbUrl }}" class="card-img-top img-fluid"
                                                 alt="YouTube Video">
                                             <span
                                                 class="position-absolute top-50 start-50 translate-middle fs-1 text-white">▶</span>
                                         </a>
                                     @elseif ($vimeoId)
                                         @php
                                             $vimeoData = @file_get_contents("https://vimeo.com/api/v2/video/$vimeoId.json");
                                             $vimeoThumb = null;
                                             if ($vimeoData) {
                                                 $vimeoData = json_decode($vimeoData, true);
                                                 $vimeoThumb = $vimeoData[0]['thumbnail_medium'] ?? null;
                                             }
                                         @endphp
                                         @if ($vimeoThumb)
                                             <a href="{{ $url }}" target="_blank">
                                                 <img src="{{ $vimeoThumb }}" class="card-img-top img-fluid"
                                                     alt="Vimeo Video">
                                                 <span
                                                     class="position-absolute top-50 start-50 translate-middle fs-1 text-white">▶</span>
                                             </a>
                                         @else
                                             <a href="{{ $url }}" target="_blank">View Video</a>
                                         @endif
                                     @else
                                         <a href="{{ $url }}" target="_blank"
                                             class="text-decoration-none d-block position-relative">
                                             <img src="https://picsum.photos/500/350?random={{ $gallery->id }}"
                                                 class="card-img-top img-fluid" alt="Video Placeholder">
                                             <span
                                                 class="position-absolute top-50 start-50 translate-middle fs-1 text-white">▶</span>
                                         </a>
                                     @endif

                                     <div class="card-body">
                                         <h6>{{ $gallery->title }}</h6>
                                         <p class="small text-muted">{{ $gallery->desc }}</p>
                                     </div>
                                 </div>
                             @endif
                         </div>
                     @endforeach
                 </div>
             </div>
             @if ($images->isEmpty())
                 <div class="col-12 text-center text-muted" style="margin-top: 70px; margin-right: 300px;">
                     <p>No images and Video found in this category.</p>
                 </div>
             @endif


         </div>
     </div>
 </div>

 <script>
     document.querySelectorAll('input[name="type"]').forEach(el => {
         el.addEventListener('change', function() {
             document.getElementById('images-tab').style.display = this.id === 'images' ? '' : 'none';
             document.getElementById('videos-tab').style.display = this.id === 'videos' ? '' : 'none';
         });
     });
 </script> --}}


 @extends('layouts.app')
 @section('title', 'Gallery')
  @section('front_content')

 <style>
     :root {
         --violet-primary: #e5abf3;
         --black-primary: #000000;
         --text-color: #333333;
         --card-bg: #ffffff;
         --shadow-subtle: 0 4px 12px rgba(0, 0, 0, 0.08);
         --shadow-hover: 0 10px 30px rgba(229, 171, 243, 0.5);
     }

     body {
         background-color: white;
         font-family: 'Poppins', sans-serif;
         color: var(--text-color);
     }

     /* ... (તમારા હાલના CSS સ્ટાઇલ) ... */

     .gallery-title {
         font-size: 3rem;
         font-weight: 800;
         color: var(--black-primary);
         text-transform: uppercase;
         letter-spacing: 2px;
         margin-bottom: 0.5rem;
     }

     .title-separator {
         width: 100px;
         height: 5px;
         background-color: var(--violet-primary);
         border-radius: 50px;
         margin: 0.5rem auto 3rem;
     }

     .sidebar-wrapper {
         padding-right: 2rem;
     }

     .category-sidebar {
         background-color: var(--black-primary);
         border-radius: 12px;
         padding: 1.5rem 1rem;
         transition: all 0.3s ease;
         box-shadow: var(--shadow-subtle);
     }

     @media (min-width: 992px) {
         .category-sidebar {
             position: sticky;
             top: 20px;
         }
     }

     .category-label {
         display: block;
         width: 100%;
         padding: 12px 15px;
         margin-bottom: 0.5rem;
         border-radius: 8px;
         cursor: pointer;
         text-align: left;
         font-weight: 600;
         font-size: 1rem;
         transition: background-color 0.3s ease, color 0.3s ease, box-shadow 0.3s ease;
         color: white;
         background-color: var(--black-primary);
         border: 2px solid var(--black-primary);
     }

     .category-label:hover {
         background-color: var(--violet-primary);
         color: var(--black-primary);
         box-shadow: 0 0 15px rgba(229, 171, 243, 0.8);
         transform: translateY(-1px);
     }

     .btn-check:checked+.category-label {
         background-color: var(--violet-primary);
         color: var(--black-primary);
         border: 2px solid var(--violet-primary);
         box-shadow: 0 0 15px rgba(229, 171, 243, 0.8);
         pointer-events: none;
     }

     @media (max-width: 991.98px) {
         .sidebar-wrapper {
             padding-right: 0;
             margin-bottom: 1.5rem;
         }

         .category-sidebar {
             padding: 1rem;
             position: static;
         }

         .sidebar-toggle-btn {
             display: block;
             width: 100%;
             background-color: var(--violet-primary);
             color: var(--black-primary);
             font-weight: 700;
             padding: 10px;
             border-radius: 8px;
             margin-bottom: 1rem;
             text-align: center;
             border: none;
             transition: background-color 0.3s ease;
         }

         #categoryList {
             max-height: 0;
             overflow: hidden;
             transition: max-height 0.4s ease-in-out;
         }

         #categoryList.open {
             max-height: 500px;
         }
     }

     .gallery-card {
         background-color: var(--card-bg);
         border: none;
         border-radius: 15px;
         overflow: hidden;
         box-shadow: var(--shadow-subtle);
         transition: transform 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94), box-shadow 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
         height: 100%;
         display: flex;
         flex-direction: column;
     }

     .gallery-card:hover {
         transform: translateY(-5px) scale(1.02);
         box-shadow: var(--shadow-hover);
     }

     .gallery-media-container {
         position: relative;
         padding-top: 65%;
         overflow: hidden;
     }

     .gallery-media-container img,
     .gallery-media-container video,
     .gallery-media-container iframe {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         object-fit: cover;
     }

     .card-body-content {
         padding: 1.5rem;
         flex-grow: 1;
     }

     .card-body-content h6 {
         font-size: 1.1rem;
         font-weight: 700;
         color: var(--black-primary);
         margin-bottom: 0.25rem;
     }

     .card-body-content p {
         font-size: 0.85rem;
         line-height: 1.4;
     }

     .play-icon-overlay {
         position: absolute;
         top: 0;
         left: 0;
         width: 100%;
         height: 100%;
         display: flex;
         justify-content: center;
         align-items: center;
         background-color: rgba(0, 0, 0, 0.3);
         transition: background-color 0.3s ease;
     }

     .gallery-card:hover .play-icon-overlay {
         background-color: rgba(0, 0, 0, 0.5);
     }

     .play-icon-overlay span {
         font-size: 3.5rem;
         color: var(--violet-primary);
         text-shadow: 0 0 10px rgba(0, 0, 0, 0.9);
         transition: transform 0.3s ease;
     }

     .gallery-card:hover .play-icon-overlay span {
         transform: scale(1.15);
     }

     .separated-switcher-label {
         transition: all 0.3s ease;
     }

     .large-btn {
         min-width: 140px;
         padding: 12px 35px !important;
         font-size: 1.05rem !important;
     }

     .separated-switcher-label:hover {
         background-color: var(--violet-primary) !important;
         color: var(--black-primary) !important;
         box-shadow: 0 4px 15px rgba(229, 171, 243, 0.5);
     }

     .btn-check:checked+.separated-switcher-label {
         background-color: var(--black-primary) !important;
         color: white !important;
         border-color: var(--black-primary) !important;
         box-shadow: 0 4px 15px rgba(0, 0, 0, 0.4);
         transform: translateY(-1px);
     }

     .btn-check:disabled+.separated-switcher-label {
         opacity: 0.5;
         cursor: not-allowed;
         background-color: #f0f0f0 !important;
         color: #999 !important;
         border-color: #ccc !important;
         box-shadow: none;
     }

     .no-records {
         padding: 5rem 2rem;
         text-align: center;
         border: 2px dashed #cccccc;
         border-radius: 15px;
         margin-top: 3rem;
         font-size: 1.25rem;
         color: var(--text-color);
         background-color: #f9f9f9;
         animation: fadeIn 1s ease-out;
     }

     .no-records p {
         font-weight: 600;
         color: var(--violet-primary);
         margin-bottom: 0;
     }

     /* Tab Content Transition */
     .tab-content-pane {
         opacity: 0;
         max-height: 0;
         overflow: hidden;
         transition: opacity 0.5s ease-in-out, max-height 0.7s ease-in-out;
     }

     .tab-content-pane.active {
         opacity: 1;
         max-height: 5000px;
         display: flex !important;
         animation: fadeIn 0.8s ease-out;
     }

     @keyframes fadeIn {
         from {
             opacity: 0;
             transform: translateY(20px);
         }

         to {
             opacity: 1;
             transform: translateY(0);
         }
     }

     /* Modal Styling for Fullscreen Media */
     .modal-dialog.modal-fullscreen .modal-body {
         /* Ensure media scales properly within the dark background */
         display: flex;
         justify-content: center;
         align-items: center;
         padding: 0 !important;
     }

     .modal-dialog.modal-fullscreen .modal-header .btn-close {
         /* Makes the close button visible on a dark background */
         filter: invert(1);
         opacity: 1;
         z-index: 10000;
     }

     .modal-header {
         position: relative;
         z-index: 1100;
     }

     .modal-header .btn-close {
         filter: invert(1);
         opacity: 1;
     }
 </style>

 @php
     $categories = DB::table('gallery_categories')->where('status', '1')->get();
     $selectedCategoryId = request('category_id', $categories->first()->id ?? null);

     $images = DB::table('galleries')
         ->where('status', 1)
         ->whereJsonContains('category_id', (string) $selectedCategoryId)
         ->where('upload_type', 'image')
         ->get();

     $videos = DB::table('galleries')
         ->where('status', 1)
         ->whereJsonContains('category_id', (string) $selectedCategoryId)
         ->whereIn('upload_type', ['video', 'url'])
         ->get();

     $isImageTabActive = $images->count() > 0;
     $isVideoTabActive = !$isImageTabActive && $videos->count() > 0;
 @endphp

 <div class="container py-5">
     <section class="py-5 text-center">
         <div class="container">
             <div class="banner-inner__content">
                 <h2 class="fw-bold text-capitalize mb-3">Gallery</h2>
                 <div class="mx-auto mb-4"
                     style="width: 120px; height: 4px; background: linear-gradient(90deg, #0199e4, #012d85);"></div>
             </div>
         </div>
     </section>

     <div class="row">
         <div class="col-lg-3 col-md-4 sidebar-wrapper">
             <button class="d-block d-md-none sidebar-toggle-btn" type="button" onclick="toggleSidebar()">
                 Filter Categories
             </button>
             <div class="category-sidebar" id="categorySidebar">
                 <div id="categoryList">
                     @foreach ($categories as $cat)
                         <input type="radio" class="btn-check" name="category" id="category-{{ $cat->id }}"
                             autocomplete="off" value="{{ $cat->id }}"
                             {{ $cat->id == $selectedCategoryId ? 'checked' : '' }}
                             onchange="window.location.href='?category_id={{ $cat->id }}'">
                         <label class="category-label" for="category-{{ $cat->id }}">
                             {{ $cat->category_name }}
                         </label>
                     @endforeach
                 </div>
             </div>
         </div>

         <div class="col-lg-9 col-md-8">
             <div class="d-flex justify-content-center mb-5">

                 <div class="me-2">
                     <input type="radio" class="btn-check" name="type" id="images" data-target="images-tab"
                         {{ $isImageTabActive ? 'checked' : '' }} {{ $images->isEmpty() ? 'disabled' : '' }}>
                     <label class="btn separated-switcher-label large-btn" for="images">Images</label>
                 </div>

                 <div class="ms-2">
                     <input type="radio" class="btn-check" name="type" id="videos" data-target="videos-tab"
                         {{ $isVideoTabActive ? 'checked' : '' }} {{ $videos->isEmpty() ? 'disabled' : '' }}>
                     <label class="btn separated-switcher-label large-btn" for="videos">Videos</label>
                 </div>

             </div>

             <div class="tab-content">
                 <div id="images-tab" class="row g-4 tab-content-pane {{ $isImageTabActive ? 'active' : '' }}"
                     style="display: none;">
                     @forelse ($images as $gallery)
                         <div class="col-xl-4 col-lg-6 col-sm-6">
                             <a href="#" class="text-decoration-none d-block modal-trigger" data-bs-toggle="modal"
                                 data-bs-target="#mediaModal" data-src="{{ asset('storage/' . $gallery->path) }}"
                                 data-title="{{ $gallery->title }}" data-type="image">
                                 <div class="card gallery-card">
                                     <div class="gallery-media-container">
                                         <img src="{{ asset('storage/' . $gallery->path) }}"
                                             alt="{{ $gallery->title }}">
                                     </div>
                                     <div class="card-body-content">
                                         <h6>{{ $gallery->title }}</h6>
                                         <p class="small text-muted mb-0 text-truncate" style="max-width: 100%;">
                                             {{ $gallery->desc }}
                                         </p>

                                     </div>
                                 </div>
                             </a>
                         </div>
                     @empty
                     @endforelse
                 </div>

                 <div id="videos-tab" class="row g-4 tab-content-pane {{ $isVideoTabActive ? 'active' : '' }}"
                     style="display: none;">
                     @forelse ($videos as $gallery)
                         <div class="col-xl-4 col-lg-6 col-sm-6">
                             @if ($gallery->upload_type === 'video')
                                 <a href="#" class="text-decoration-none d-block modal-trigger"
                                     data-bs-toggle="modal" data-bs-target="#mediaModal"
                                     data-src="{{ asset('storage/' . $gallery->path) }}"
                                     data-title="{{ $gallery->title }}" data-type="local-video">
                                     <div class="card gallery-card">
                                         <div class="gallery-media-container">
                                             <video poster="https://picsum.photos/500/350?random={{ $gallery->id }}"
                                                 muted>
                                                 <source src="{{ asset('storage/' . $gallery->path) }}"
                                                     type="video/mp4">
                                                 Your browser does not support the video tag.
                                             </video>
                                             <div class="play-icon-overlay">
                                                 <span>&#9654;</span>
                                             </div>
                                         </div>
                                         <div class="card-body-content">
                                             <h6>{{ $gallery->title }}</h6>
                                             <p class="small text-muted mb-0">{{ $gallery->desc }}</p>
                                         </div>
                                     </div>
                                 </a>
                             @elseif ($gallery->upload_type === 'url')
                                 @php
                                     $url = $gallery->path;
                                     $youtubeId = null;
                                     $vimeoId = null;

                                     if (preg_match('/youtu\.be\/([^\?]+)/', $url, $matches)) {
                                         $youtubeId = $matches[1];
                                     } elseif (preg_match('/youtube\.com.*v=([^&]+)/', $url, $matches)) {
                                         $youtubeId = $matches[1];
                                     } elseif (preg_match('/vimeo\.com\/(\d+)/', $url, $matches)) {
                                         $vimeoId = $matches[1];
                                     }

                                     $thumbUrl = null;
                                     if ($youtubeId) {
                                         $thumbUrl = "https://img.youtube.com/vi/$youtubeId/hqdefault.jpg";
                                     } elseif ($vimeoId) {
                                         $vimeoData = @file_get_contents("https://vimeo.com/api/v2/video/$vimeoId.json");
                                         if ($vimeoData) {
                                             $vimeoData = json_decode($vimeoData, true);
                                             $thumbUrl = $vimeoData[0]['thumbnail_medium'] ?? null;
                                         }
                                     }
                                     if (!$thumbUrl) {
                                         $thumbUrl = 'https://picsum.photos/500/350?random=' . $gallery->id;
                                     }
                                 @endphp

                                 <a href="#" class="text-decoration-none d-block modal-trigger"
                                     data-bs-toggle="modal" data-bs-target="#mediaModal" data-src="{{ $url }}"
                                     data-title="{{ $gallery->title }}"
                                     data-type="{{ $youtubeId ? 'youtube' : ($vimeoId ? 'vimeo' : 'url') }}">
                                     <div class="card gallery-card">
                                         <div class="gallery-media-container">
                                             <img src="{{ $thumbUrl }}" alt="Video Thumbnail">
                                             <div class="play-icon-overlay">
                                                 <span>&#9654;</span>
                                             </div>
                                         </div>
                                         <div class="card-body-content">
                                             <h6>{{ $gallery->title }}</h6>
                                             <p class="small text-muted mb-0">{{ $gallery->desc }}</p>
                                         </div>
                                     </div>
                                 </a>
                             @endif
                         </div>
                     @empty
                     @endforelse
                 </div>
             </div>

             @if ($images->isEmpty() && $videos->isEmpty())
                 <div class="col-12">
                     <div class="no-records">
                         <p>No records found.</p>
                         <span>Images and videos for this category are currently unavailable.</span>
                     </div>
                 </div>
             @endif
         </div>
     </div>
 </div>
 <div class="modal fade" id="mediaModal" tabindex="-1" aria-labelledby="mediaModalLabel" aria-hidden="true"
     data-bs-keyboard="true">

     <div class="modal-dialog modal-xl modal-dialog-centered">
         <div class="modal-content">
             <div class="modal-header border-0">
                 <h5 class="modal-title" id="mediaModalLabel"></h5>
                 <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
             </div>

             <div class="modal-body d-flex justify-content-center align-items-center p-0">
                 <div id="media-content-placeholder"
                     style="width: 100%; height: 100%; display: flex; justify-content: center; align-items: center;">
                 </div>
             </div>
         </div>
     </div>
 </div>


 <script>
     document.addEventListener('DOMContentLoaded', function() {
         const typeRadios = document.querySelectorAll('input[name="type"]');
         const tabPanes = document.querySelectorAll('.tab-content-pane');

         typeRadios.forEach(el => {
             el.addEventListener('change', function() {
                 const targetId = this.dataset.target;

                 tabPanes.forEach(pane => {
                     pane.classList.remove('active');
                 });

                 const targetPane = document.getElementById(targetId);
                 if (targetPane) {
                     targetPane.style.display = 'flex';
                     setTimeout(() => {
                         targetPane.classList.add('active');
                     }, 50);
                 }
             });
         });

         const initiallyCheckedRadio = document.querySelector('input[name="type"]:checked');
         if (initiallyCheckedRadio) {
             const initialTargetId = initiallyCheckedRadio.dataset.target;
             const initialPane = document.getElementById(initialTargetId);
             if (initialPane) {
                 initialPane.style.display = 'flex';
                 initialPane.classList.add('active');
             }
         }

         function toggleSidebar() {
             const categoryList = document.getElementById('categoryList');
             const toggleBtn = document.querySelector('.sidebar-toggle-btn');
             const isOpen = categoryList.classList.toggle('open');
             toggleBtn.textContent = isOpen ? 'Hide Categories' : 'Filter Categories';
         }
         window.toggleSidebar = toggleSidebar;

         const mediaModal = document.getElementById('mediaModal');
         const mediaContentPlaceholder = document.getElementById('media-content-placeholder');
         const modalTitle = document.getElementById('mediaModalLabel');

         if (mediaModal) {
             mediaModal.addEventListener('show.bs.modal', function(event) {
                 const button = event.relatedTarget;
                 const src = button.getAttribute('data-src');
                 const type = button.getAttribute('data-type');
                 const title = button.getAttribute('data-title');

                 modalTitle.textContent = title;

                 let contentHTML = '';

                 if (type === 'image') {
                     contentHTML =
                         `<img src="${src}" class="img-fluid" style="max-height: 90vh; max-width: 90vw; object-fit: contain;" alt="${title}">`;
                 } else if (type === 'youtube') {
                     let youtubeId = '';
                     if (src.includes('youtu.be/')) {
                         youtubeId = src.split('youtu.be/')[1].split('?')[0];
                     } else if (src.includes('v=')) {
                         youtubeId = src.split('v=')[1].split('&')[0];
                     }

                     if (youtubeId) {
                         contentHTML = `
                            <div class="ratio ratio-16x9 w-100 h-100" style="max-width: 1200px; max-height: 80vh;">
                                <iframe src="https://www.youtube.com/embed/${youtubeId}?autoplay=1&rel=0"
                                    title="${title}" frameborder="0"
                                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                    allowfullscreen>
                                </iframe>
                            </div>
                        `;
                     }
                 } else if (type === 'vimeo') {
                     let vimeoId = '';
                     const vimeoMatch = src.match(/vimeo\.com\/(\d+)/);
                     if (vimeoMatch) {
                         vimeoId = vimeoMatch[1];
                     }

                     if (vimeoId) {
                         contentHTML = `
                            <div class="ratio ratio-16x9 w-100 h-100" style="max-width: 1200px; max-height: 80vh;">
                                <iframe src="https://player.vimeo.com/video/${vimeoId}?autoplay=1&title=0&byline=0&portrait=0"
                                    title="${title}" frameborder="0"
                                    allow="autoplay; fullscreen; picture-in-picture" allowfullscreen>
                                </iframe>
                            </div>
                        `;
                     }
                 } else if (type === 'local-video') {
                     contentHTML = `
                        <video controls autoplay class="w-100 h-100" style="object-fit: contain;">
                            <source src="${src}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    `;
                 }

                 mediaContentPlaceholder.innerHTML = contentHTML;
             });

             mediaModal.addEventListener('hidden.bs.modal', function() {
                 mediaContentPlaceholder.innerHTML = '';
                 modalTitle.textContent = '';
             });
         }
     });
 </script>


@endsection
