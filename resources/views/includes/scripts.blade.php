<script>
function ta(item) {
  const body = item.querySelector('.ab');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.ai.open').forEach(i => {
    i.classList.remove('open');
    i.querySelector('.ab').style.maxHeight = '0';
  });
  if (!isOpen) {
    item.classList.add('open');
    body.style.maxHeight = body.scrollHeight + 'px';
  }
}

function tfc(item) {
  const body = item.querySelector('.fcb');
  const isOpen = item.classList.contains('open');
  item.classList.toggle('open', !isOpen);
  body.style.maxHeight = isOpen ? '0' : body.scrollHeight + 'px';
}

<!-- Add this line at the BOTTOM (before closing body tag) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</script>
<script>
function ta(item) {
  const body = item.querySelector('.ab');
  const isOpen = item.classList.contains('open');
  document.querySelectorAll('.ai.open').forEach(i => {
    i.classList.remove('open');
    i.querySelector('.ab').style.maxHeight = '0';
  });
  if (!isOpen) {
    item.classList.add('open');
    body.style.maxHeight = body.scrollHeight + 'px';
  }
}

function tfc(item) {
  const body = item.querySelector('.fcb');
  const isOpen = item.classList.contains('open');
  item.classList.toggle('open', !isOpen);
  body.style.maxHeight = isOpen ? '0' : body.scrollHeight + 'px';
}
</script>

<!-- Bootstrap (optional - add this only if you use Bootstrap) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>