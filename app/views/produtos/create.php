<?php
require_once __DIR__ . "/../../src/dao/categoriadao.php";

$categoriaDAO = new CategoriaDAO();
$rows = $categoriaDAO->getAll();
?>
<main>
    <div class="main_opc">

        <section class="main_course" id="escola">
            <header class="novo__form__titulo">
                <h2>Produtos</h2>
            </header>

            <div class="novo__form__section">
                <form method="post" action="store.php" class="novo__form">
                    <div class="novo__form__section">
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Informe o nome" required>
                    </div>
                    
                    <div class="novo__form__section">
                        <label>Descrição</label>
                        <textarea name="descricao" id="" cols="30" rows="10"></textarea>
                    </div>
                    
                    <div class="novo__form__section">
                        <label>Valor</label>
                        <input type="text" name="valor" placeholder="Informe o valor" required>
                    </div>
                    
                    <div class="novo__form__section">
                        <label>Categoria</label>
                        <select name="categoria">
                            <?php foreach ($rows as $row) : ?>
                                <option value="<?= $row['id'] ?>"><?= $row['nome'] ?></option>
                            <?php endforeach ?>
                        </select>
                    </div>
                    
                    <div class="novo__form__section">
                        <label>Imagem</label>
                        <input type="file" name="nomeurl">
                    </div>

                    
                    <div class="novo__form__section">
                        <button type="submit" class="btn">Save</button>
                        <a href="index.php" class="btn">Voltar</a>
                    </div>
                </form>

            </div>
        </section>
    </div>
</main>

</body>

</html>