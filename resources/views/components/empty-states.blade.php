@props(['title' => 'Data Masih Kosong', 'span' => 6, 'buttonName', 'actionRoute'])
<tr>
    <td colspan="{{ $span }}">
        <div class="empty">
            <div class="empty-img"><img src="{{ asset('dist/img/undraw_printing_invoices_5r4r.svg') }}" height="128"
                    alt="">
            </div>
            <p class="empty-title">{{ $title }}</p>
            @if (isset($buttonName))
                <div class="empty-action">
                    <button class="btn btn-primary d-none d-sm-inline-block" data-bs-toggle="modal"
                        data-bs-target={{ $actionRoute }}>
                        <!-- Download SVG icon from http://tabler-icons.io/i/plus -->
                        <svg xmlns="http://www.w3.org/2000/svg" class="icon" width="24" height="24"
                            viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                            <path d="M12 5l0 14" />
                            <path d="M5 12l14 0" />
                        </svg>
                        {{ $buttonName }}
                    </button>
                </div>
            @endif
        </div>
    </td>
</tr>
