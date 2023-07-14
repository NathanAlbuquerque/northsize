<?php

namespace App\Helpers;

class Helpers
{
    public static function trata_imagens($imagem, $largura, $altura, $pasta)
    {
        // Salva a imagem e recupera o caminho completo
        $nomeImagem = str_replace('public/uploads/'.$pasta.'/', '', $imagem->store('public/uploads/'.$pasta));
        $caminhoCompleto = public_path('uploads/'.$pasta.'/'.$nomeImagem);
        // Recura alguns dados da imagem
        list($largura_original, $altura_original, $tipo, $atributo) = getimagesize($imagem);
        $tipos = array("jpeg", "png", "gif");

        // // Determina as novas dimensões sem perder a proporção (comentar caso não haja interesse de manter proporção)
        // // Se largura é maior que altura, dividimos a largura determinada pela original e multiplicamos a altura pelo resultado, para manter a proporção da imagem
        // if($largura_original > $altura_original) {
        //     $altura = ($largura/$largura_original)*$altura_original;
        // // Se altura é maior que largura, dividimos a altura determinada pela original e multiplicamos a largura pelo resultado, para manter a proporção da imagem
        // } elseif($largura_original < $altura_original) {
        //     $largura = ($altura/$altura_original)*$largura_original;
        // }

        // Criando a imagem com o novo tamanho
        $novaImagem = imagecreatetruecolor($largura, $altura);

        switch($tipo){
            // Se o tipo da imagem for gif
            case 1:
            // Obtém a imagem gif original
            $origem = imagecreatefromgif($caminhoCompleto);
            // Copia a imagem original para a imagem com novo tamanho
            imagecopyresampled($novaImagem, $origem, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);
            // Envia a nova imagem gif para o lugar da antiga
            imagegif($novaImagem, $caminhoCompleto);
            break;

            // Se o tipo da imagem for jpg
            case 2:
            $origem = imagecreatefromjpeg($caminhoCompleto);
            imagecopyresampled($novaImagem, $origem, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);
            imagejpeg($novaImagem, $caminhoCompleto);
            break;

            // Se o tipo da imagem for png
            case 3:
            $origem = imagecreatefrompng($caminhoCompleto);
            imagecopyresampled($novaImagem, $origem, 0, 0, 0, 0, $largura, $altura, $largura_original, $altura_original);
            imagepng($novaImagem, $caminhoCompleto);
            break;
        }

        // Destrói a imagem nova criada e já salva no lugar da original
        imagedestroy($novaImagem);
        // Destrói a cópia de nossa imagem original
        imagedestroy($origem);

        return $nomeImagem;
    }

    public static function tira_acentos($texto)
    {
      return str_replace(" ", "", preg_replace(array("/(á|à|ã|â|ä)/","/(Á|À|Ã|Â|Ä)/","/(é|è|ê|ë)/","/(É|È|Ê|Ë)/","/(í|ì|î|ï)/","/(Í|Ì|Î|Ï)/","/(ó|ò|õ|ô|ö)/","/(Ó|Ò|Õ|Ô|Ö)/","/(ú|ù|û|ü)/","/(Ú|Ù|Û|Ü)/","/(ñ)/","/(Ñ)/","/(ç)/","/(Ç)/","/(\/)/","/(:)/","/(,)/","/(!)/","/(?)/",'/\(|\)/'),explode(" ","a A e E i I o O u U n N c C - - - - "),$texto));
    }

    public static function formata_data($date)
    {
        $months = [0, 'Janeiro', 'Fevereiro', 'Março', 'Abril', 'Maio', 'Junho', 'Julho', 'Agosto', 'Setembro', 'Outubro', 'Novembro', 'Dezembro'];
        // $months = array('Jan', 'Fev', 'Mar', 'Abr', 'Mai', 'Jun', 'Jul', 'Ago', 'Set', 'Out', 'Nov', 'Dez');

        return date('d', strtotime($date)) . ' de ' . $months[intval(date('m', strtotime($date)))] . ' de ' . date('Y', strtotime($date)); // 19 de Abril de 2023
        // return date('d', strtotime($date)) . ' de ' . $months[intval(date('m', strtotime($date)))] . ', ' . date('Y', strtotime($date)); // 19 de Abril, 2023
        // return $months[intval(date('m', strtotime($date)))] . ' ' . date('d', strtotime($date)) . ', ' . date('Y', strtotime($date)); // Abril 19, 2023
    }
}
