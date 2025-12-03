<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GreenUp</title>
    <link rel="stylesheet" href="estilopri.css">
</head>
<body>

<header>
    <div class="logo">
        <h3>GreenUp</h3>
    </div>
    <nav>
        <ul class="menu">
            <li><a href="../primeira_tela/index.html">Inicio</a></li>
            <li><a href="contato.html">Contato</a></li>
        </ul>
    </nav>
</header>
<div class="conteudo">
<div class="texto">
    <div class="titulo">
        <h2>Cálculo de IMC (Índice de Massa Corporal)</h2>
    </div>

    <p>
        O <strong>IMC (Índice de Massa Corporal)</strong> é uma medida utilizada mundialmente para avaliar 
        se uma pessoa está dentro do peso considerado adequado para a sua altura. Ele é um dos métodos 
        mais simples e rápidos para identificar possíveis riscos relacionados ao peso corporal, como 
        desnutrição, sobrepeso e obesidade.
    </p>

    <h3>Como o IMC é calculado?</h3>
    <p>O cálculo do IMC é feito usando a seguinte fórmula:</p>

    <p><strong>IMC = peso (kg) ÷ altura² (m)</strong></p>

    <p>
        Exemplo: uma pessoa com 70 kg e 1,70 m de altura teria:<br>
        <strong>IMC = 70 ÷ 1,70² = 70 ÷ 2,89 = 24,22</strong>
    </p>

    <h3>Para que o IMC serve?</h3>

    <p>O IMC não é um diagnóstico, mas é uma ferramenta útil para:</p>

    <ul>
        <li>Avaliar rapidamente o estado nutricional de um adulto.</li>
        <li>Identificar riscos para a saúde, como doenças cardiovasculares, diabetes e hipertensão.</li>
        <li>Acompanhar mudanças corporais ao longo do tempo.</li>
        <li>Orientar hábitos de vida mais saudáveis.</li>
    </ul>

    <h3>Classificação do IMC (Adultos - OMS)</h3>

    <ul>
        <li>Abaixo de 18,5 — Abaixo do peso</li>
        <li>18,5 – 24,9 — Peso normal</li>
        <li>25,0 – 29,9 — Sobrepeso</li>
        <li>30,0 – 34,9 — Obesidade Grau I</li>
        <li>35,0 – 39,9 — Obesidade Grau II</li>
        <li>40,0 ou mais — Obesidade Grau III</li>
    </ul>

    <h3>Observações importantes</h3>

    <p>Apesar de ser muito usado, o IMC não considera fatores como:</p>

    <ul>
        <li>Percentual de gordura corporal</li>
        <li>Massa muscular</li>
        <li>Idade</li>
        <li>Distribuição de gordura</li>
    </ul>

    <p>
        Por isso, atletas ou pessoas muito musculosas podem ter IMC elevado sem estarem acima do peso.
    </p>
</div>

<div class="servico1">
    <form method="post">
        <h3>Calcule o IMC da criança</h3>

        <p>Peso (kg)</p>
        <input type="text" name="peso">

        <p>Altura (m)</p>
        <input type="text" name="altura">

        <br><br>
        <button type="submit" class="botaoimc" autocomplete="off">Calcular</button>
        <br><br>

        <?php
        // serviço calcule imc //
        if(isset($_POST['peso']) && isset($_POST['altura'])){
            $peso = floatval($_POST['peso']);
            $altura = floatval($_POST['altura']);

            if($peso > 0 && $altura > 0){
                $imc = $peso / ($altura * $altura);
                echo "<p><strong>IMC:</strong> " . number_format($imc, 2) . " — ";

                if($imc < 13.4){
                    echo "Magreza acentuada";
                } elseif($imc < 14.0){
                    echo "Magreza";
                } elseif($imc < 17.3){
                    echo "Eutrofia (peso adequado)";
                } elseif($imc < 18.9){
                    echo "Sobrepeso";
                } else{
                    echo "Obesidade";
                }

                echo "</p>";
            }
        }
        // fim do serviço calcule imc //
        ?>
    </form>
</div>
</div>
</body>
</html>
