
<script src="https://cdnjs.cloudflare.com/ajax/libs/three.js/r123/three.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/vanta@latest/dist/vanta.halo.min.js"></script>

<script></script>
<script>
var setVanta = ()=>{
if (window.VANTA) window.VANTA.HALO({
  el: ".s-page-1 .s-section-1 .s-section",
  mouseControls: true,
  touchControls: true,
  gyroControls: false,
  minHeight: 200.00,
  minWidth: 200.00
})
}
_strk.push(function() {
  setVanta()
  window.edit_page.Event.subscribe( "Page.beforeNewOneFadeIn", setVanta )
})
</script>