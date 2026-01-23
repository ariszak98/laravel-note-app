<script>
    (function () {
        const focus = new URLSearchParams(window.location.search).get('focus');
        let el = null;
        if (focus === 'title') {
            el = document.getElementById('note-title');
        }
        if (focus === 'body') {
            el = document.getElementById('note-body');
        }
        if (!el) return;
        requestAnimationFrame(() => {
            el.focus();
            const len = el.value.length;
            el.setSelectionRange(len, len);
        });
    })();
</script>
