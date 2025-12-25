document.addEventListener("DOMContentLoaded", function() {
    
    // Cari semua elemen table-container
    const allTableContainers = document.querySelectorAll('.table-container');

    if (allTableContainers.length === 0) return;

    allTableContainers.forEach(container => {
        const topScrollbar = container.querySelector('.top-scrollbar-container');
        const topScrollbarContent = container.querySelector('.top-scrollbar-content');
        const tableWrapper = container.querySelector('.table-responsive');
        const table = container.querySelector('table'); // Pastikan ini menargetkan tabel yang benar

        if (!topScrollbar || !tableWrapper || !table) return;

        let isSyncing = false;

        function updateScrollbar() {
            // Gunakan scrollWidth untuk akurasi konten yang meluber
            topScrollbarContent.style.width = table.scrollWidth + 'px';

            if (tableWrapper.scrollWidth > tableWrapper.clientWidth) {
                topScrollbar.style.display = 'block';
                topScrollbar.scrollLeft = tableWrapper.scrollLeft;
            } else {
                topScrollbar.style.display = 'none';
            }
        }

        // 1. Scroll Atas -> Bawah
        topScrollbar.addEventListener('scroll', function() {
            if (isSyncing) return;
            isSyncing = true;
            
            tableWrapper.scrollLeft = topScrollbar.scrollLeft;
            
            window.requestAnimationFrame(() => { isSyncing = false; });
        });

        // 2. Scroll Bawah -> Atas (DENGAN FILTER VERTIKAL)
        tableWrapper.addEventListener('scroll', function() {
            if (isSyncing) return;

            // CEK DULU: Apakah posisi horizontal berubah?
            // Jika scrollLeft-nya SAMA, berarti user sedang scroll VERTIKAL (atas-bawah).
            // Jangan jalankan logika sinkronisasi agar Sticky Header tidak berat/macet.
            if (Math.abs(topScrollbar.scrollLeft - tableWrapper.scrollLeft) < 1) {
                return; 
            }

            isSyncing = true;
            topScrollbar.scrollLeft = tableWrapper.scrollLeft;
            
            window.requestAnimationFrame(() => { isSyncing = false; });
        });

        updateScrollbar();
        window.addEventListener('resize', updateScrollbar);
        
        // Observer untuk mendeteksi perubahan ukuran tabel (misal data nambah/hide kolom)
        const resizeObserver = new ResizeObserver(() => updateScrollbar());
        resizeObserver.observe(table);
    });
});