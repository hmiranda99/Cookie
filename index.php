<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title>Cookie & Cor</title>
</head>

<body>
    <?php
    //empty: verifica se o conteúdo está vazio
    //isset: verifica se ele foi criado (usar esse)
    if (isset($_COOKIE['selectedColor'])) {
        switch ($color = $_COOKIE['selectedColor']) {
            case 1:
                echo ('
                <body bgcolor= #303030>
                <main>
                    <div class="animate" id="bg"></div>
                    <section class="dark">
                         <h2>Você conhece os cookies?</h2>
                        <p class="default">
                            Os cookies são dados guardados no browser do seu computador, para gerar uma melhor experiência para você!
                        </p>
                        <form action="register.php" method="post">
                            <label class="default">Selecione a cor</label>
                            <div>
                                <select name="selectColor">
                                    <option value="0">Selecione</option>
                                    <option value="1">Dark</option>
                                    <option value="2">Azul</option>
                                    <option value="3">Vermelho</option>
                                    <option value="4">Rosa</option>
                                    <option value="5">Verde</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Aplicar">
                            </div>
                        </form>
                    </section>
                </main>
            ');
                break;

            case 2:
                echo ('
                <body bgcolor= #1C54F5>
                <main>
                    <div class="animate" id="bg"></div>
                    <section class="blue">
                         <h2 class="blue">Você conhece os cookies?</h2>
                        <p class="default">
                            Os cookies são dados guardados no browser do seu computador, para gerar uma melhor experiência para você!
                        </p>
                        <form action="register.php" method="post">
                            <label class="default">Selecione a cor</label>
                            <div>
                                <select name="selectColor">
                                    <option value="0">Selecione</option>
                                    <option value="1">Dark</option>
                                    <option value="2">Azul</option>
                                    <option value="3">Vermelho</option>
                                    <option value="4">Rosa</option>
                                    <option value="5">Verde</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Aplicar">
                            </div>
                        </form>
                    </section>
                </main>
            ');
                break;

            case 3:
                echo ('
                <body bgcolor= #C60E08>
                <main>
                    <div class="animate" id="bg"></div>
                    <section class="red">
                        <h2 class="default">Você conhece os cookies?</h2>
                        <p class="default">
                            Os cookies são dados guardados no browser do seu computador, para gerar uma melhor experiência para você!
                        </p>
                        <form action="register.php" method="post">
                            <label class="default">Selecione a cor</label>
                            <div>
                                <select name="selectColor">
                                    <option value="0">Selecione</option>
                                    <option value="1">Dark</option>
                                    <option value="2">Azul</option>
                                    <option value="3">Vermelho</option>
                                    <option value="4">Rosa</option>
                                    <option value="5">Verde</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Aplicar">
                            </div>
                        </form>
                    </section>
                </main>
            ');
                break;

            case 4:
                echo ('
                <body bgcolor= #FF008A>
                <main>
                    <div class="animate" id="bg"></div>
                    <section class="pink">
                        <h2 class="blue">Você conhece os cookies?</h2>
                        <p class="default">
                            Os cookies são dados guardados no browser do seu computador, para gerar uma melhor experiência para você!
                        </p>
                        <form action="register.php" method="post">
                            <label class="default">Selecione a cor</label>
                            <div>
                                <select name="selectColor">
                                    <option value="0">Selecione</option>
                                    <option value="1">Dark</option>
                                    <option value="2">Azul</option>
                                    <option value="3">Vermelho</option>
                                    <option value="4">Rosa</option>
                                    <option value="5">Verde</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Aplicar">
                            </div>
                        </form>
                    </section>
                </main>
            ');
                break;

            case 5:
                echo ('
                <body bgcolor= #00881F>
                <main>
                    <div class="animate" id="bg"></div>
                    <section class="green">
                        <h2 class="green">Você conhece os cookies?</h2>
                        <p class="default">
                            Os cookies são dados guardados no browser do seu computador, para gerar uma melhor experiência para você!
                        </p>
                        <form action="register.php" method="post">
                            <label class="default">Selecione a cor</label>
                            <div>
                                <select name="selectColor">
                                    <option value="0">Selecione</option>
                                    <option value="1">Dark</option>
                                    <option value="2">Azul</option>
                                    <option value="3">Vermelho</option>
                                    <option value="4">Rosa</option>
                                    <option value="5">Verde</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Aplicar">
                            </div>
                        </form>
                    </section>
                </main>
            ');
                break;

            default:
                echo ('
                <body bgcolor= #D1DCFD>
                <main>
                    <div class="animate" id="bg"></div>
                    <section class="default">
                        <h2>Você conhece os cookies?</h2>
                        <p>
                            Os cookies são dados guardados no browser do seu computador, para gerar uma melhor experiência para você!
                        </p>
                        <form action="register.php" method="post">
                            <label>Selecione a cor</label>
                            <div>
                                <select name="selectColor">
                                    <option value="0">Selecione</option>
                                    <option value="1">Dark</option>
                                    <option value="2">Azul</option>
                                    <option value="3">Vermelho</option>
                                    <option value="4">Rosa</option>
                                    <option value="5">Verde</option>
                                </select>
                            </div>
                            <div>
                                <input type="submit" value="Aplicar">
                            </div>
                        </form>
                    </section>
                </main>
                ');
                break;
        }
    } else {
        echo ('
             <body bgcolor= #D1DCFD>
             <main>
                <div class="animate" id="bg"></div>
                <section class="default">
                    <h2>Você conhece os cookies?</h2>
                    <p>
                        Os cookies são dados guardados no browser do seu computador, para gerar uma melhor experiência para você!
                    </p>
                    <form action="register.php" method="post">
                        <label>Selecione a cor</label>
                        <div>
                            <select name="selectColor">
                                <option value="0">Selecione</option>
                                <option value="1">Dark</option>
                                <option value="2">Azul</option>
                                <option value="3">Vermelho</option>
                                <option value="4">Rosa</option>
                                <option value="5">Verde</option>
                            </select>
                        </div>
                        <div>
                            <input type="submit" value="Aplicar">
                        </div>
                    </form>
                </section>
            </main>
            ');
    }
    ?>
</body>

</html>