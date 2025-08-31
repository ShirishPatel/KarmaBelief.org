<script src="{{ asset('assets/backend/vendor/libs/jquery/jquery.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/libs/popper/popper.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/js/bootstrap.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/libs/perfect-scrollbar/perfect-scrollbar.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/js/menu.js') }}"></script>
<script src="{{ asset('assets/backend/vendor/libs/apex-charts/apexcharts.js') }}"></script>
<script src="{{ asset('assets/backend/js/main.js') }}"></script>
<script src="{{ asset('assets/backend/js/dashboards-analytics.js') }}"></script>
<script src="{{ asset('assets/backend/js/pages-account-settings-account.js')}}"></script>
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-select/1.14.0-beta3/js/bootstrap-select.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.6.2/tinymce.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<script src="https://cdn.datatables.net/2.2.1/js/dataTables.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/pdfmake.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/pdfmake/0.2.7/vfs_fonts.js"></script>
<script
    src="https://cdn.datatables.net/v/bs4/jszip-3.10.1/dt-2.2.1/b-3.2.0/b-colvis-3.2.0/b-html5-3.2.0/b-print-3.2.0/datatables.min.js">
    </script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/autosize.js/4.0.2/autosize.min.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.4/js/dataTables.responsive.js"></script>
<script src="https://cdn.datatables.net/responsive/3.0.4/js/responsive.dataTables.js"></script>
<script src="https://cdn.jsdelivr.net/npm/notyf@3/notyf.min.js"></script>

{{-- <script>
    document.getElementById('add-description').addEventListener('click', function () {
        const wrapper = document.getElementById('description-wrapper');

        const newField = document.createElement('div');
        newField.classList.add('input-group', 'mb-2');

        newField.innerHTML = `
            <textarea name="description[]" class="form-control" rows="3"></textarea>
            <button type="button" class="btn btn-danger remove-btn">Remove</button>
        `;

        wrapper.appendChild(newField);
    });

    document.addEventListener('click', function (e) {
        if (e.target && e.target.classList.contains('remove-btn')) {
            e.target.parentElement.remove();
        }
    });
</script>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const wrapper = document.getElementById('dynamic-fields-wrapper');
        const addMoreBtn = document.getElementById('add-more');

        addMoreBtn.addEventListener('click', function () {
            const newBlock = wrapper.firstElementChild.cloneNode(true);
            newBlock.querySelectorAll('input, textarea').forEach(el => el.value = '');
            newBlock.querySelector('.remove-block').classList.remove('d-none');
            wrapper.appendChild(newBlock);
        });

        wrapper.addEventListener('click', function (e) {
            if (e.target.classList.contains('remove-block')) {
                e.target.closest('.heading-desc-group').remove();
            }
        });
    });
</script> --}}