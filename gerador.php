<?php
function gerarSenha($comprimento = 12) {
    $letrasMaiusculas = 'ABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $letrasMinusculas = 'abcdefghijklmnopqrstuvwxyz';
    $numeros = '0123456789';
    $caracteresEspeciais = '!@#$%^&*()_+-=[]{}|;:,.<>?';

    $todosCaracteres = $letrasMaiusculas . $letrasMinusculas . $numeros . $caracteresEspeciais;
    $senha = '';
    $maximo = strlen($todosCaracteres) - 1;

    $senha .= $letrasMaiusculas[rand(0, strlen($letrasMaiusculas) - 1)];
    $senha .= $letrasMinusculas[rand(0, strlen($letrasMinusculas) - 1)];
    $senha .= $numeros[rand(0, strlen($numeros) - 1)];
    $senha .= $caracteresEspeciais[rand(0, strlen($caracteresEspeciais) - 1)];

    for ($i = 4; $i < $comprimento; $i++) {
        $senha .= $todosCaracteres[rand(0, $maximo)];
    }

    $senha = str_shuffle($senha);

    return $senha;
}

$comprimentoDaSenha = 12;
$senhaGerada = gerarSenha($comprimentoDaSenha);
echo "Senha Gerada: " . $senhaGerada;
?>