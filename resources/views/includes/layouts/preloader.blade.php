<div class="d-flex flex-column">
    <div class="page page-center">
        <div class="container container-slim py-4">
            <div class="text-center">
                <div class="mb-3">
                    <a href="." class="navbar-brand navbar-brand-autodark"><img src="{{ asset('logo-mini.svg') }}"
                            height="36" alt=""></a>
                </div>
                <div id="loadingText" class="text-muted mb-3">Preparing Data</div>
                <div id="progressContainer" class="progress progress-sm">
                    <div id="progressBar" class="progress-bar progress-bar-indeterminate"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Mengganti teks
        var loadingText = document.getElementById('loadingText');
        if (loadingText) {
            loadingText.textContent = 'Data is Ready!';
        }

        // Menghentikan animasi progress bar
        var progressBar = document.getElementById('progressBar');
        if (progressBar) {
            progressBar.classList.remove('progress-bar-indeterminate');
            progressBar.style.width = '100%';
        }

        // Menghilangkan elemen page loader setelah beberapa detik (contoh: 3 detik)
        setTimeout(function() {
            var pageLoader = document.querySelector('.page-center');
            if (pageLoader) {
                pageLoader.style.display = 'none';
            }
        }, 5000000);
    });
</script>
