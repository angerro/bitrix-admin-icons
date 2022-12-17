<?php

$iconClasses = [
    'fav_menu_icon',
    'iblock_menu_icon_iblocks',
    'fileman_menu_icon',
    'clouds_menu_icon',
    'iblock_menu_icon_types',
    'smile_menu_icon',
    'rating_menu_icon',
    'support_menu_icon',
    'sonet_menu_icon',
    'forum_menu_icon',
    'bizproc_menu_icon',
    'blog_menu_icon',
    'mail_menu_icon',
    'sale_menu_icon_orders',
    'sale_menu_icon_crm',
    'sale_menu_icon_statistic',
    'sale_menu_icon_buyers',
    'sale_menu_icon_store',
    'sale_menu_icon_bigdata',
    'update_menu_icon_partner',
    'update_menu_icon',
    'user_menu_icon',
    'search_menu_icon',
    'security_menu_icon',
    'currency_menu_icon',
    'ldap_menu_icon',
    'translate_menu_icon',
    'cluster_menu_icon',
    'sys_menu_icon',
    'util_menu_icon',
    'perfmon_menu_icon',
    'fileman_menu_icon_sections',
    'main_menu_icon_folder',
    'iblock_menu_icon_sections',
    'workflow_menu_icon',
    'highloadblock_menu_icon',
    'iblock_menu_icon_settings',
    'sale_menu_icon',
    'sale_menu_icon_buyers_affiliate',
    'sale_menu_icon_marketplace',
    'update_marketplace',
    'update_marketplace_modules',
    'statistic_icon_online',
    'statistic_icon_visitors',
    'statistic_icon_searchers',
    'default_menu_icon',
    'statistic_icon_events',
    'statistic_icon_traffic',
    'statistic_icon_summary',
    'statistic_icon_advert',
    'statistic_icon_sites',
    'fileman_sticker_icon',
    'form_menu_icon',
    'controller_menu_icon',
    'vote_menu_icon',
    'subscribe_menu_icon',
    'advertising_menu_icon',
    'xdimport_menu_icon',
    'bitrixcloud_menu_icon',
    'sale_menu_icon_catalog',
    'xmpp_menu_icon',
    'fav_menu_icon_yellow',
    'extension_menu_icon',
    'acct_customers_menu_icon',
    'trade_catalog_menu_icon',
    'learning_menu_icon',
    'learning_icon_courses',
    'learning_icon_lessons',
    'learning_icon_chapters',
    'learning_icon_certification',
    'learning_icon_gradebook',
    'learning_icon_attempts',
    'learning_icon_export',
    'learning_icon_question',
    'learning_icon_tests',
    'learning_icon_groups',
    'seo_menu_icon',
    'scale_menu_icon',
    'sender_menu_icon',
    'sender_trig_menu_icon',
    'mobile_menu_icon',
    'seo_adv_menu_icon',
    'abtest_menu_icon',
    'conversion_pulse_menu_icon',
    'conversion_model_menu_icon',
    'security_menu_ddos_icon',
    'crm-cashbox-icon',
    'promo_https_menu_icon',
    'landing_menu_icon',
    'sender_ads_menu_icon',
    'sale_crm_site_master_icon',
];

?>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
    <link type="text/css" rel="stylesheet" href="/bitrix/panel/main/admin.css">
    <title>Иконки административного меню Битрикс</title>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col">
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Класс</th>
                    <th scope="col">Иконка</th>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($iconClasses as $key => $iconClass): ?>
                    <tr>
                        <th scope="row"><?= $key ?></th>
                        <td><?= $iconClass ?></td>
                        <td><span class="adm-submenu-item-link-icon <?= $iconClass ?>"></span></td>
                    </tr>
                <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>
</body>
</html>
