<?php

declare(strict_types=1);

namespace Src\Builder;

require_once '../../vendor/autoload.php';

class Main
{
    /**
     * @param array<string> $args
     */
    public static function run($args): void
    {
        if (1 !== \count($args)) {
            self::usage();

            exit;
        }

        if ('text' === $args[0]) {
            $textBuilder = new TextBuilder();
            $director = new Director($textBuilder);
            $director->build();
            $result = $textBuilder->getTextResult();
            echo $result;
        } elseif ('html' === $args[0]) {
            $htmlBuilder = new HTMLBuilder();
            $director = new Director($htmlBuilder);
            $director->build();
            $fileName = $htmlBuilder->getHTMLResult();
            echo 'HTMLファイル'.$fileName.'が作成されました';
        } else {
            self::usage();

            exit;
        }
    }

    public static function usage(): void
    {
        echo "Usage: Main::run(['text'])  テキストで文書作成".PHP_EOL;
        echo "Usage: Main::run(['html'])  HTMLファイルで文書作成".PHP_EOL;
    }
}

Main::run(['html']);
