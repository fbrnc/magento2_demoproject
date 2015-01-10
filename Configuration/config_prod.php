<?php
return array(
    'backend' =>
        array(
            'frontName' => 'admin',
        ),
    'db' =>
        array(
            'table_prefix' => '',
            'connection' =>
                array(
                    'default' =>
                        array(
                            'host' => '###DB_HOST###',
                            'dbname' => '###DB_NAME###',
                            'username' => '###DB_USER###',
                            'password' => '###DB_PASSWORD###',
                            'model' => 'mysql4',
                            'initStatements' => 'SET NAMES utf8;',
                            'active' => '1',
                        ),
                ),
        ),
    'crypt' =>
        array(
            'key' => '4e8d62020927445269a4843c48816f6a',
        ),
    'install' =>
        array(
            'date' => 'Wed, 07 Jan 2015 00:05:36 -0500',
        ),
    'session' =>
        array(
            'save' => 'db',
        ),
    'resource' =>
        array(
            'default_setup' =>
                array(
                    'connection' => 'default',
                ),
        ),
    'modules' =>
        array(
            'Magento_Core' => 1,
            'Magento_Store' => 1,
            'Magento_Directory' => 1,
            'Magento_Backup' => 1,
            'Magento_Theme' => 1,
            'Magento_Eav' => 1,
            'Magento_Customer' => 1,
            'Magento_CatalogImportExport' => 1,
            'Magento_Indexer' => 1,
            'Magento_Cms' => 1,
            'Magento_Backend' => 1,
            'Magento_Catalog' => 1,
            'Magento_Rule' => 1,
            'Magento_CatalogInventory' => 1,
            'Magento_Payment' => 1,
            'Magento_CheckoutAgreements' => 1,
            'Magento_Sales' => 1,
            'Magento_CmsUrlRewrite' => 1,
            'Magento_ConfigurableImportExport' => 1,
            'Magento_Msrp' => 1,
            'Magento_Contact' => 1,
            'Magento_AdminNotification' => 1,
            'Magento_Cron' => 1,
            'Magento_Widget' => 1,
            'Magento_Bundle' => 1,
            'Magento_CustomerImportExport' => 1,
            'Magento_DesignEditor' => 1,
            'Magento_Dhl' => 1,
            'Magento_Authorization' => 1,
            'Magento_Downloadable' => 1,
            'Magento_Checkout' => 1,
            'Magento_Email' => 1,
            'Magento_Fedex' => 1,
            'Magento_GiftMessage' => 1,
            'Magento_GoogleAdwords' => 1,
            'Magento_GoogleAnalytics' => 1,
            'Magento_GoogleOptimizer' => 1,
            'Magento_GoogleShopping' => 1,
            'Magento_GroupedImportExport' => 1,
            'Magento_GroupedProduct' => 1,
            'Magento_ImportExport' => 1,
            'Magento_CatalogRule' => 1,
            'Magento_User' => 1,
            'Magento_LayeredNavigation' => 1,
            'Magento_Log' => 1,
            'Magento_ConfigurableProduct' => 1,
            'Magento_Multishipping' => 1,
            'Magento_Newsletter' => 1,
            'Magento_OfflinePayments' => 1,
            'Magento_SalesRule' => 1,
            'Magento_PageCache' => 1,
            'Magento_Centinel' => 1,
            'Magento_Persistent' => 1,
            'Magento_ProductAlert' => 1,
            'Magento_Reports' => 1,
            'Magento_RequireJs' => 1,
            'Magento_Review' => 1,
            'Magento_Rss' => 1,
            'Magento_CatalogWidget' => 1,
            'Magento_Captcha' => 1,
            'Magento_OfflineShipping' => 1,
            'Magento_Search' => 1,
            'Magento_Sendfriend' => 1,
            'Magento_Shipping' => 1,
            'Magento_Sitemap' => 1,
            'Magento_CatalogSearch' => 1,
            'Magento_Tax' => 1,
            'Magento_TaxImportExport' => 1,
            'Magento_CatalogUrlRewrite' => 1,
            'Magento_Translation' => 1,
            'Magento_Ui' => 1,
            'Magento_Ups' => 1,
            'Magento_UrlRewrite' => 1,
            'Magento_Integration' => 1,
            'Magento_Usps' => 1,
            'Magento_Webapi' => 1,
            'Magento_Weee' => 1,
            'Magento_CurrencySymbol' => 1,
            'Magento_Wishlist' => 1,
        ),
    'cache_types' =>
        array(
            'config' => 1,
            'layout' => 1,
            'block_html' => 1,
            'view_files_fallback' => 1,
            'view_files_preprocessing' => 1,
            'collections' => 1,
            'db_ddl' => 1,
            'eav' => 1,
            'full_page' => 1,
            'translate' => 1,
            'config_integration' => 1,
            'config_webservice' => 1,
            'config_integration_api' => 1,
        ),
    'cache' =>
        array(
            'frontend' => array(
                'default' => array(
                    'backend' => 'Cm_Cache_Backend_Redis',
                    'backend_options' => array(
                        'server' => '###REDIS_CACHE###',            // or absolute path to unix socket
                        'port' => '6379',
                        'persistent' => '',                 // Specify a unique string like "cache-db0" to enable persistent connections.
                        'database' => '0',
                        'password' => '',
                        'force_standalone' => '0',          // 0 for phpredis, 1 for standalone PHP
                        'connect_retries' => '1',           // Reduces errors due to random connection failures
                        'read_timeout' => '10',             // Set read timeout duration
                        'automatic_cleaning_factor' => '0', // Disabled by default
                        'compress_data' => '1',             // 0-9 for compression level, recommended: 0 or 1
                        'compress_tags' => '1',             // 0-9 for compression level, recommended: 0 or 1
                        'compress_threshold' => '20480',    // Strings below this size will not be compressed
                        'compression_lib' => 'gzip',        // Supports gzip, lzf and snappy,
                        'use_lua' => '0'                    // Lua scripts should be used for some operations
                    )
                ),
                'page_cache' => array(
                    'backend' => 'Cm_Cache_Backend_Redis',
                    'backend_options' => array(
                        'server' => '###REDIS_FPC###',          // or absolute path to unix socket
                        'port' => '6379',
                        'persistent' => '',               // Specify a unique string like "cache-db0" to enable persistent connections.
                        'database' => '1',                // Separate database 1 to keep FPC separately
                        'password' => '',
                        'force_standalone' => '0',        // 0 for phpredis, 1 for standalone PHP
                        'connect_retries' => '1',         // Reduces errors due to random connection failures
                        'lifetimelimit' => '57600',       // 16 hours of lifetime for cache record
                        'compress_data' => '0'            // DISABLE compression for EE FPC since it already uses compression
                    )
                )
            )
        ),
);
