<main>
    <div class="main_opc">

        <section class="main_course" id="escola">
            <header class="novo__form__titulo">
                <h2>Categorias</h2>
            </header>

            <div class="novo__form__section">
                <form method="post" action="store.php" class="novo__form">
                    <div class="novo__form__section">
                        <label>Nome</label>
                        <input type="text" name="nome" placeholder="Informe o nome" required>
                    </div>
                    
                    <div class="novo__form__section">
                        <label>Descrição</label>
                        <input type="text" name="descricao" placeholder="Informe a descrição" required>
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