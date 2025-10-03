<div class="col-12 mb-3">
    <label for="is_display" class="form-label">Select Page</label>
    @php
        $pages = [
            'tex-exemption' => 'Tex Exemption',
            'donation_policy' => 'Donation Policy',
        ];

        $selectedPage = old(
            'is_display',
            isset($records->is_display) ? json_decode($records->is_display, true)[0] ?? null : null,
        );
    @endphp

    <select name="is_display" id="is_display" class="form-select" required>
        <option value="" disabled selected>Select a page</option>
        @foreach ($pages as $key => $page)
            <option value="{{ $key }}" {{ $selectedPage === $key ? 'selected' : '' }}>
                {{ $page }}
            </option>
        @endforeach
    </select>
</div>
