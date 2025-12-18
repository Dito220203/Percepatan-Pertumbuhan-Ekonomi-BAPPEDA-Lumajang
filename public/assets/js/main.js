document.addEventListener("DOMContentLoaded", function() {
    
    // Cari semua elemen table-container
    const allTableContainers = document.querySelectorAll('.table-container');

    // Jika tidak ada tabel, berhenti (biar gak error di halaman dashboard)
    if (allTableContainers.length === 0) return;

    allTableContainers.forEach(container => {
        // Ambil elemen-elemen penting
        const topScrollbar = container.querySelector('.top-scrollbar-container');
        const topScrollbarContent = container.querySelector('.top-scrollbar-content');
        const tableWrapper = container.querySelector('.table-responsive');
        const table = container.querySelector('table');

        // Cek kelengkapan elemen
        if (!topScrollbar || !tableWrapper || !table) return;

        let isSyncing = false;

        // FUNGSI UTAMA: Update lebar scrollbar atas
        function updateScrollbar() {
            // 1. Samakan lebar konten dummy atas dengan lebar tabel asli
            topScrollbarContent.style.width = table.offsetWidth + 'px';

            // 2. Cek apakah tabel overflow (kepotong) secara horizontal
            // Jika scrollWidth (lebar asli) > clientWidth (lebar layar), maka munculkan scrollbar atas
            if (tableWrapper.scrollWidth > tableWrapper.clientWidth) {
                topScrollbar.style.display = 'block';
                // Sinkronkan posisi awal
                topScrollbar.scrollLeft = tableWrapper.scrollLeft;
            } else {
                // Jika tabel muat di layar, sembunyikan scrollbar atas
                topScrollbar.style.display = 'none';
            }
        }

        // Event: Saat Scrollbar Atas digeser -> Geser Tabel Bawah
        topScrollbar.addEventListener('scroll', function() {
            if (isSyncing) return;
            isSyncing = true;
            tableWrapper.scrollLeft = topScrollbar.scrollLeft;
            window.requestAnimationFrame(() => { isSyncing = false; });
        });

        // Event: Saat Tabel Bawah digeser -> Geser Scrollbar Atas
        tableWrapper.addEventListener('scroll', function() {
            if (isSyncing) return;
            isSyncing = true;
            topScrollbar.scrollLeft = tableWrapper.scrollLeft;
            window.requestAnimationFrame(() => { isSyncing = false; });
        });

        // Jalankan fungsi update saat halaman dimuat
        updateScrollbar();

        // Jalankan lagi jika ukuran layar berubah (resize)
        window.addEventListener('resize', updateScrollbar);
        
        // Opsional: Jalankan ulang setelah 500ms (jaga-jaga jika ada delay loading font/style)
        setTimeout(updateScrollbar, 500);
    });
});