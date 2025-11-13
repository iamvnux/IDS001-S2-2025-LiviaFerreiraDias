<?php
include 'mailer_config.php';

function enviarEmailSimulado($para, $assunto, $mensagemHtml) {

    enviarEmail($para, $assunto, $mensagemHtml);
}
?>
