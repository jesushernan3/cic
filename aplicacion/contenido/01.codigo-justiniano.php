<?php
  $raiz = '/';
  include '../estructura/cabecera.php';
?>

<main class="columns">
  
  <div class="column is-four-fifths">
    
    <section class="section">
        <h2 class="title has-text-black">CODEX IUSTINIANO</h2>
        <h3 class="subtitle">Reconocidovía y retractavit Paulus Krueger</h3>
    <p class="has-text-justified">
      El Código de Justiniano (Codex Iustinianus) forma parte del Corpus Iuris Civilis. Recoge las constituciones de los emperadores romanos. El estatuto más antiguo conservado en el código fue promulgado por el emperador Adriano; los últimos provienen del propio Justiniano. Los compiladores del código pudieron basarse en obras anteriores como el Codex Theodosianus oficial y colecciones privadas como el Codex Gregorianus y el Codex Hermogenianus. Debido a reformas legales del propio Justiniano, esta obra necesitó ser actualizada posteriormente, por lo que se publicó una segunda edición del Códice en el año 534, después del Digesto.
    </p>
    </section>

  </div>
  <div class="column submenu">
    <?php
      include '../estructura/parciales/menu-codigos.php'
    ?>
  </div>
  <hr>
</main>

<?php include '../estructura/fondo.php'; ?>
