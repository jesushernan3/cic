<?php
  $raiz = '/';
  include '../estructura/cabecera.php';
?>

<main class="columns">
  
  <div class="column is-four-fifths">
    <div class="hero">
      <div class="hero-body">
        <h2 class="title has-text-black">DIGESTO</h2>
        <P class="subtitle">Reconocidovía Theodorus Mommsen / Retractavit Paulus Krueger</P>
        <h3>( Corpus Iuris Civilis, vol. I )</h3>
      </div>
    </div>
      <p>
         Tél Digesto (Digesta), o Pandects (Pandecta), era una parte de la gran colección de leyes romanas conocida como la Corpus Iuris Civilis. El Digest fue emitido en AD 533 bajo la dirección de el cuestor imperial Triboniano. Compiló los escritos de los grandes Juristas romanos como Ulpian junto con los edictos actuales. Constituyó tanto la ley actual de la época, como un punto de inflexión en el Derecho Romano : a partir de entonces, se subsumió la jurisprudencia a veces contradictoria del pasado en un sistema legal ordenado.
      </p>
      
  </div>
  <div class="column">
    <?php
      include '../estructura/parciales/menu-digesto.php'
    ?>
  </div>
  <hr>
</main>

<?php include '../estructura/fondo.php'; ?>
