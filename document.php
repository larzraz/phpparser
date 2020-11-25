<?php
    class Document
    {
        // Henter hele filens content som en string. Først tjekker den dog lige om filen overhovedet eksistere.
        function getFileContent($fileName)
        {
            if (file_exists($fileName)) {
                $content = file_get_contents($fileName);
            } else {
                $content = "File doesnt exist";
            }
            return $content;
        }
        // Parser content fra arrayet/objectet(overrideData varialen) over placeholderteksten i templatefilen. Dette gøres via et loop der looper alle forskellelige values man ønsker at parse.
        // og str_replace finde så alle forekomster af placeholderen og erstatter den med den ønskede value. Når loopet er gennemkørt og alle placeholders er overskredet. returneres den nye templateContent med de overskrevne værdier
        function parse($templateContent, $overrideData)
        {
            foreach ($overrideData as $placeholderKey => $overrideValue) {
                $templateContent = str_replace("{{{$placeholderKey}}}", $overrideValue, $templateContent);
            }
            return $templateContent;
        }
    }
?>