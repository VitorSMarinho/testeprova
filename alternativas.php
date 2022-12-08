<?php include "cabecalho.php"; ?>

<div class="container px-4 text-center mt-4">
  <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="home.php">Home</a></li>
      <li class="breadcrumb-item"><a href="alternativas.php">Gerador de Provas</a></li>
    </ol>
  </nav>

  <div class="row gx-5">
    <div class="col ">

      <div class="d-flex justify-content-start p-4 border bg-light mt-4 ">
        <form method="POST" action="ver_resultado.php">
          <h1>Gerador de Testes</h1>
          <article>
            <p>
              <label>1 - Quantos dedos tem o lula?</label><br>
              <input type="radio" name="pergunta 1" value="opt1" />09 <br>
              <input type="radio" name="pergunta 1" value="opt2" />22 <br>
              <input type="radio" name="pergunta 1" value="opt3" />05 <br>
              <input type="radio" name="pergunta 1" value="opt4" />10 <br>
            </p>
            <p>
              <label>2 - Quantos anos o Professor Fernando tem?</label> <br>
              <input type="radio" name="pergunta 2" value="opt1">18 <br>
              <input type="radio" name="pergunta 2" value="opt2">29 <br>
              <input type="radio" name="pergunta 2" value="opt3">35 <br>
              <input type="radio" name="pergunta 2" value="opt4">52 <br>
            </p>
            <p>
              <label>3 - O numero preto é cor ou é numero?</label> <br>
              <input type="radio" name="pergunta 2" value="opt1">É cor <br>
              <input type="radio" name="pergunta 2" value="opt2">É numero <br>
              <input type="radio" name="pergunta 2" value="opt4">Estou confuso! <br>
              <input type="radio" name="pergunta 2" value="opt3">O numero preto não é numero, e sim, cor <br>
            </p>
            <p>
              <label>4 - Quantos paus é preciso para fazer uma canoa?</label> <br>
              <input type="radio" name="pergunta 2" value="opt1">10 <br>
              <input type="radio" name="pergunta 2" value="opt2">50 <br>
              <input type="radio" name="pergunta 2" value="opt3">02 <br>
              <input type="radio" name="pergunta 2" value="opt4">Não preciso de uma canoa, tenho que passar dessa matéria! <br>
            </p>
          </article>
          <input type="submit" value="Ver resultado">
        </form>
      </div>
    </div>
  </div>

  <?php include "rodape.php"; ?>