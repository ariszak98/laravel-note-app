<script>
    (function () {
        const ta = document.getElementById('note-body');
        if (!ta) return;
        const autoGrow = () => {
            ta.style.height = 'auto';
            ta.style.height = ta.scrollHeight + 'px';
        };
        autoGrow();
        ta.addEventListener('input', autoGrow);
    })();
</script>
