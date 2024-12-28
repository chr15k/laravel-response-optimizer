<?php

return [

    'minify' => [

        /**
         * Enable or disable the HTML minification.
         */
        'enabled' => env('RESPONSE_OPTIMIZER_MINIFY_HTML_ENABLED', true),

        /**
         * The minimum size of the HTML content to be minified.
         * Default is 5 KB.
         */
        'min_size' => env('RESPONSE_OPTIMIZER_MINIFY_HTML_MIN_SIZE', 5120),

    ],

    'compression' => [

        /**
         * Enable or disable the response compression.
         */
        'enabled' => env('RESPONSE_OPTIMIZER_COMPRESSION_ENABLED', true),

        /**
         * The compression algorithm to use. Can be either 'gzip' or 'br'.
         */
        'algorithm' => env('RESPONSE_OPTIMIZER_COMPRESSION_ALGORITHM', 'gzip'),

        /**
         * The minimum length of the response content to be compressed.
         */
        'min_length' => env('RESPONSE_OPTIMIZER_COMPRESSION_MIN_LENGTH', 1024),

        'gzip' => [
            /**
             * The level of compression. Can be given as 0 for no compression up to 9
             * for maximum compression. If not given, the default compression level will
             * be the default compression level of the zlib library.
             *
             * @see https://www.php.net/manual/en/function.gzencode.php
             */
            'level' => env('RESPONSE_OPTIMIZER_COMPRESSION_GZIP_LEVEL', 5),
        ],

        'br' => [
            /**
             * The level of compression. Can be given as 0 for no compression up to 11
             * for maximum compression. If not given, the default compression level will
             * be the default compression level of the brotli library.
             *
             * @see https://www.php.net/manual/en/function.brotli-compress.php
             */
            'level' => env('RESPONSE_OPTIMIZER_COMPRESSION_BROTLI_LEVEL', 5),
        ],

    ],

];
