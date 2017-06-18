
<footer>
<div class="fermeture">
  <p>Site réalisé par Chrichri SAS, +33.(0) 6 ** ** ** **/ Mentions Légales</p>
  
</div>



<!-- meta slide javascript -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
</body>
<script>

jQuery(document).ready(function()
{

  // On cache la zone de texte
  jQuery('.menu').hide();
  // toggle() lorsque le lien avec l'ID #toggler est cliqué
  jQuery('span.glyphicon').click(function()
  {
  jQuery('.menu').toggle(400);
  return false;
  });

});
</script>

</html>
