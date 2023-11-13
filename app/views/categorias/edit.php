<?php
require_once __DIR__ . "/../../src/dao/categoriadao.php";

$id = filter_input(INPUT_GET, "id", FILTER_SANITIZE_NUMBER_INT) ?? 0;

$dao = new CategoriaDAO();
$row = $dao->getById($id);
// echo "<pre>"; var_dump($row, $id); exit;

if (!$row) {
    header("location: index.php?error=Categoria não encontrado!", 301);
}
?>
<main>
    <div class="main_opc">

        <section class="main_course" id="escola">
            <header class="novo__form__titulo">
                <h2>Categorias</h2>
            </header>

            <div class="novo__form__section">
                <form method="post" action="store.php" class="novo__form">
                    <input type="hidden" name="id" value="<?=$row['id']?>">    

                    <div class="novo__form__section">
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Informe o nome" value="<?=$row['nome']?>" required>
                    </div>
                    
                    <div class="novo__form__section">
                        <label>Descrição</label>
                        <input type="text" name="descricao" placeholder="Informe a descrição"  value="<?=$row['descricao']?>" required>
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