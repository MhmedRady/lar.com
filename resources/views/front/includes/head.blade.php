
<!-- -- HI MY FIRST LARAVEL PRO -- -->
<!-- begin index.tpl -->
<!doctype html>
<html lang="ar">
<head>


    <meta charset="utf-8">


    <meta http-equiv="x-ua-compatible" content="ie=edge">



    <title>@yield('title')</title>
    <meta name="description" content="المتجر مدعوم من طرف بريستاشوب">
    <meta name="keywords" content="">



    <meta name="viewport" content="initial-scale=1, maximum-scale=1, user-scalable=yes">



    <link rel="icon" type="image/vnd.microsoft.icon" href="/savemart/img/favicon.ico?1531456858">
    <link rel="shortcut icon" type="image/x-icon" href="/savemart/img/favicon.ico?1531456858">


    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,600,700,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Oswald:300,400,500,600,700,900" rel="stylesheet">



    <link rel="stylesheet" href="http://demo.bestprestashoptheme.com/savemart/themes/vinova_savemart/assets/cache/theme-4527f124.css" type="text/css" media="all">






    <script type="text/javascript">
        var added_to_wishlist = "The product was successfully added to your wishlist.";
        var isLogged = false;
        var isLoggedWishlist = false;
        var loggin_required = "You must be logged in to manage your wishlist.";
        var prestashop = {"cart":{"products":[],"totals":{"total":{"type":"total","label":"\u0627\u0644\u0625\u062c\u0645\u0627\u0644\u064a","amount":0,"value":"0.00\u00a0UK\u00a3"},"total_including_tax":{"type":"total","label":"\u0627\u0644\u0625\u062c\u0645\u0627\u0644\u064a (\u0634\u0627\u0645\u0644 \u0644\u0644\u0636\u0631\u064a\u0628\u0629)","amount":0,"value":"0.00\u00a0UK\u00a3"},"total_excluding_tax":{"type":"total","label":"\u0627\u0644\u0625\u062c\u0645\u0627\u0644\u064a (\u0628\u062f\u0648\u0646 \u0627\u0644\u0636\u0631\u064a\u0628\u0629)","amount":0,"value":"0.00\u00a0UK\u00a3"}},"subtotals":{"products":{"type":"products","label":"\u0625\u062c\u0645\u0627\u0644\u064a \u0627\u0644\u0637\u0644\u0628","amount":0,"value":"0.00\u00a0UK\u00a3"},"discounts":null,"shipping":{"type":"shipping","label":"\u0627\u0644\u0634\u062d\u0646","amount":0,"value":"\u0645\u062c\u0627\u0646\u0627\u064b"},"tax":null},"products_count":0,"summary_string":"0 \u0645\u0646\u062a\u062c\u0627\u062a","vouchers":{"allowed":0,"added":[]},"discounts":[],"minimalPurchase":0,"minimalPurchaseRequired":""},"currency":{"name":"\u062c\u0646\u064a\u0647 \u0625\u0633\u062a\u0631\u0644\u064a\u0646\u064a","iso_code":"GBP","iso_code_num":"826","sign":"UK\u00a3"},"customer":{"lastname":null,"firstname":null,"email":null,"birthday":null,"newsletter":null,"newsletter_date_add":null,"optin":null,"website":null,"company":null,"siret":null,"ape":null,"is_logged":false,"gender":{"type":null,"name":null},"addresses":[]},"language":{"name":"\u0627\u0644\u0644\u063a\u0629 \u0627\u0644\u0639\u0631\u0628\u064a\u0629 (Arabic)","iso_code":"ar","locale":"ar-SA","language_code":"ar-sa","is_rtl":"1","date_format_lite":"Y-m-d","date_format_full":"Y-m-d H:i:s","id":6},"page":{"title":"","canonical":null,"meta":{"title":"Prestashop_Savemart","description":"\u0627\u0644\u0645\u062a\u062c\u0631 \u0645\u062f\u0639\u0648\u0645 \u0645\u0646 \u0637\u0631\u0641 \u0628\u0631\u064a\u0633\u062a\u0627\u0634\u0648\u0628","keywords":"","robots":"index"},"page_name":"index","body_classes":{"lang-ar":true,"lang-rtl":true,"country-GB":true,"currency-GBP":true,"layout-full-width":true,"page-index":true,"tax-display-enabled":true},"admin_notifications":[]},"shop":{"name":"Prestashop_Savemart","logo":"\/savemart\/img\/prestashopsavemart-logo-1531456858.jpg","stores_icon":"\/savemart\/img\/logo_stores.png","favicon":"\/savemart\/img\/favicon.ico"},"urls":{"base_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/","current_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/?home=home_3&SubmitCurrency=1&id_currency=1","shop_domain_url":"http:\/\/demo.bestprestashoptheme.com","img_ps_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/","img_cat_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/c\/","img_lang_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/l\/","img_prod_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/","img_manu_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/m\/","img_sup_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/su\/","img_ship_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/s\/","img_store_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/st\/","img_col_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/co\/","img_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/themes\/vinova_savemart\/assets\/img\/","css_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/themes\/vinova_savemart\/assets\/css\/","js_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/themes\/vinova_savemart\/assets\/js\/","pic_url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/upload\/","pages":{"address":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u0644\u0639\u0646\u0648\u0627\u0646","addresses":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u0644\u0639\u0646\u0627\u0648\u064a\u0646","authentication":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u062a\u0633\u062c\u064a\u0644 \u0627\u0644\u062f\u062e\u0648\u0644","cart":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0639\u0631\u0628\u0629 \u0627\u0644\u062a\u0633\u0648\u0642","category":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=category","cms":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=cms","contact":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u062a\u0635\u0644 \u0628\u0646\u0627","discount":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u062e\u0635\u0645","guest_tracking":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u062a\u062a\u0628\u0639 \u0627\u0644\u0637\u0644\u0628","history":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0633\u062c\u0644 \u0637\u0644\u0628\u0627\u062a \u0627\u0644\u0634\u0631\u0627\u0621","identity":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u0644\u0647\u0648\u064a\u0629","index":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/","my_account":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u0644\u062d\u0633\u0627\u0628 \u0627\u0644\u0634\u062e\u0635\u064a","order_confirmation":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u062a\u0623\u0643\u064a\u062f \u0637\u0644\u0628 \u0627\u0644\u0634\u0631\u0627\u0621","order_detail":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=order-detail","order_follow":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u062a\u062a\u0628\u0639 \u0627\u0644\u0637\u0644\u0628","order":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0637\u0644\u0628 \u0634\u0631\u0627\u0621","order_return":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=order-return","order_slip":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u064a\u0635\u0627\u0644 \u0627\u0644\u062f\u0641\u0639","pagenotfound":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0635\u0641\u062d\u0629 \u063a\u064a\u0631 \u0645\u0648\u062c\u0648\u062f\u0629","password":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u0633\u062a\u0639\u0627\u062f\u0629 \u0643\u0644\u0645\u0629 \u0627\u0644\u0645\u0631\u0648\u0631","pdf_invoice":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=pdf-invoice","pdf_order_return":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=pdf-order-return","pdf_order_slip":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=pdf-order-slip","prices_drop":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u0644\u062a\u062e\u0641\u064a\u0636\u0627\u062a","product":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/index.php?controller=product","search":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0628\u062d\u062b","sitemap":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u062e\u0631\u064a\u0637\u0629 \u0627\u0644\u0645\u0648\u0642\u0639","stores":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0645\u062a\u0627\u062c\u0631","supplier":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0627\u0644\u0645\u0648\u0631\u062f","register":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u062a\u0633\u062c\u064a\u0644 \u0627\u0644\u062f\u062e\u0648\u0644?create_account=1","order_login":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0637\u0644\u0628 \u0634\u0631\u0627\u0621?login=1"},"alternative_langs":{"en-us":"http:\/\/demo.bestprestashoptheme.com\/savemart\/en\/?home=home_3&SubmitCurrency=1&id_currency=1","fr-fr":"http:\/\/demo.bestprestashoptheme.com\/savemart\/fr\/?home=home_3&SubmitCurrency=1&id_currency=1","es-es":"http:\/\/demo.bestprestashoptheme.com\/savemart\/es\/?home=home_3&SubmitCurrency=1&id_currency=1","it-it":"http:\/\/demo.bestprestashoptheme.com\/savemart\/it\/?home=home_3&SubmitCurrency=1&id_currency=1","pl-pl":"http:\/\/demo.bestprestashoptheme.com\/savemart\/pl\/?home=home_3&SubmitCurrency=1&id_currency=1","ar-sa":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/?home=home_3&SubmitCurrency=1&id_currency=1"},"theme_assets":"\/savemart\/themes\/vinova_savemart\/assets\/","actions":{"logout":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/?mylogout="},"no_picture_image":{"bySize":{"cart_default":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-cart_default.jpg","width":125,"height":125},"small_default":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-small_default.jpg","width":150,"height":150},"medium_default":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-medium_default.jpg","width":210,"height":210},"home_default":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-home_default.jpg","width":600,"height":600},"large_default":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-large_default.jpg","width":600,"height":600}},"small":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-cart_default.jpg","width":125,"height":125},"medium":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-medium_default.jpg","width":210,"height":210},"large":{"url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/img\/p\/ar-default-large_default.jpg","width":600,"height":600},"legend":""}},"configuration":{"display_taxes_label":true,"display_prices_tax_incl":true,"is_catalog":false,"show_prices":true,"opt_in":{"partner":true},"quantity_discount":{"type":"discount","label":"\u062e\u0635\u0645"},"voucher_enabled":0,"return_enabled":0},"field_required":[],"breadcrumb":{"links":[{"title":"\u0627\u0644\u0635\u0641\u062d\u0629 \u0627\u0644\u0631\u0626\u064a\u0633\u064a\u0629","url":"http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/"}],"count":1},"link":{"protocol_link":"http:\/\/","protocol_content":"http:\/\/"},"time":1590861359,"static_token":"28add935523ef131c8432825597b9928","token":"cad5fe8236d849a3b4023c4e5ca6a313"};
        var psr_icon_color = "#F19D76";
        var search_url = "http:\/\/demo.bestprestashoptheme.com\/savemart\/ar\/\u0628\u062d\u062b";
    </script>




    <!-- begin modules/novnivoslider/views/templates/hook/header.tpl -->

    <!-- end modules/novnivoslider/views/templates/hook/header.tpl -->

    <!-- begin modules/novblockwishlist/novblockwishlist_top.tpl -->

    <script type="text/javascript">
        var baseDir = "/savemart/";
        var static_token = "28add935523ef131c8432825597b9928";
    </script>


    <!-- end modules/novblockwishlist/novblockwishlist_top.tpl -->


    <style type="text/css">
        #main-site {background-color: #ffffff;}@media (min-width: 1200px) {.container {width: 1200px;}#header .container {width: 1200px;}.footer .container {width: 1200px;}#index .container {width: 1200px;}}#popup-subscribe .modal-dialog .modal-content {background-image: url(/savemart/modules/novthemeconfig/images/newsletter_bg-1.png);}
    </style>

</head>
