<div class="w-100">
    <label class="form-label">Where to show blog</label>
    <div class="row">
        <div class="col-auto">
            <div class="form-check">
                <input class="form-check-input" type="checkbox" id="selectAll"
                    onchange="toggleAllPages(this)">
                <label class="form-check-label" for="selectAll">
                    All
                </label>
            </div>
        </div>
        @php
            $pages = getPages();
            $selectedPages = old('is_display', isset($records->is_display) ? json_decode($records->is_display, true) : []);
            $selectedPages = is_array($selectedPages) ? $selectedPages : [];
        @endphp
        @foreach($pages as $key => $page)
            <div class="col-auto">
                <div class="form-check">
                    <input class="form-check-input page-checkbox" type="checkbox" name="is_display[]"
                        id="page_{{ $key }}" value="{{ $key }}" {{ in_array($key, $selectedPages) ? 'checked' : '' }}>
                    <label class="form-check-label" for="page_{{ $key }}">
                        {{ $page }}
                    </label>
                </div>
            </div>
        @endforeach
    </div>
</div>

@push('backend_scripts')
    <script>

        function toggleAllPages(checkbox) {
            const pageCheckboxes = document.querySelectorAll('.page-checkbox');
            pageCheckboxes.forEach(cb => {
                cb.checked = checkbox.checked;
            });
        }

        document.addEventListener('DOMContentLoaded', function () {
            const pageCheckboxes = document.querySelectorAll('.page-checkbox');
            const selectAllCheckbox = document.getElementById('selectAll');

            pageCheckboxes.forEach(cb => {
                cb.addEventListener('change', function () {
                    selectAllCheckbox.checked = Array.from(pageCheckboxes).every(checkbox => checkbox.checked);
                });
            });

            // Check if all pages are initially selected
            selectAllCheckbox.checked = Array.from(pageCheckboxes).every(checkbox => checkbox.checked);
        });
    </script>
@endpush