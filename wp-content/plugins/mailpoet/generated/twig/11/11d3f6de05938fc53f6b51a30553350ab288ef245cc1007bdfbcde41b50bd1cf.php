<?php

if (!defined('ABSPATH')) exit;


use MailPoetVendor\Twig\Environment;
use MailPoetVendor\Twig\Error\LoaderError;
use MailPoetVendor\Twig\Error\RuntimeError;
use MailPoetVendor\Twig\Extension\SandboxExtension;
use MailPoetVendor\Twig\Markup;
use MailPoetVendor\Twig\Sandbox\SecurityError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedTagError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFilterError;
use MailPoetVendor\Twig\Sandbox\SecurityNotAllowedFunctionError;
use MailPoetVendor\Twig\Source;
use MailPoetVendor\Twig\Template;

/* newsletter/editor.html */
class __TwigTemplate_aa06caf4713b6d5ac2d6909b4a0a21f60afeea73e802e676faab4d7dcfdcb31a extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'templates' => [$this, 'block_templates'],
            'content' => [$this, 'block_content'],
            'after_css' => [$this, 'block_after_css'],
            'after_javascript' => [$this, 'block_after_javascript'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "newsletter/editor.html", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_templates($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        echo "  ";
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_tools_generic", "newsletter/templates/blocks/base/toolsGeneric.hbs");
        // line 7
        echo "
  ";
        // line 8
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_block", "newsletter/templates/blocks/automatedLatestContent/block.hbs");
        // line 11
        echo "
  ";
        // line 12
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_widget", "newsletter/templates/blocks/automatedLatestContent/widget.hbs");
        // line 15
        echo "
  ";
        // line 16
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_settings", "newsletter/templates/blocks/automatedLatestContent/settings.hbs");
        // line 19
        echo "
  ";
        // line 20
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_block", "newsletter/templates/blocks/automatedLatestContentLayout/block.hbs");
        // line 23
        echo "
  ";
        // line 24
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_widget", "newsletter/templates/blocks/automatedLatestContentLayout/widget.hbs");
        // line 27
        echo "
  ";
        // line 28
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_automated_latest_content_layout_settings", "newsletter/templates/blocks/automatedLatestContentLayout/settings.hbs");
        // line 31
        echo "
  ";
        // line 32
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_button_block", "newsletter/templates/blocks/button/block.hbs");
        // line 35
        echo "
  ";
        // line 36
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_button_widget", "newsletter/templates/blocks/button/widget.hbs");
        // line 39
        echo "
  ";
        // line 40
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_button_settings", "newsletter/templates/blocks/button/settings.hbs");
        // line 43
        echo "
  ";
        // line 44
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_block", "newsletter/templates/blocks/container/block.hbs");
        // line 47
        echo "
  ";
        // line 48
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_block_empty", "newsletter/templates/blocks/container/emptyBlock.hbs");
        // line 51
        echo "
  ";
        // line 52
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_one_column_widget", "newsletter/templates/blocks/container/oneColumnLayoutWidget.hbs");
        // line 55
        echo "
  ";
        // line 56
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget.hbs");
        // line 59
        echo "
  ";
        // line 60
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_12_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget12.hbs");
        // line 63
        echo "
  ";
        // line 64
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_two_column_21_widget", "newsletter/templates/blocks/container/twoColumnLayoutWidget21.hbs");
        // line 67
        echo "
  ";
        // line 68
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_three_column_widget", "newsletter/templates/blocks/container/threeColumnLayoutWidget.hbs");
        // line 71
        echo "
  ";
        // line 72
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_settings", "newsletter/templates/blocks/container/settings.hbs");
        // line 75
        echo "
  ";
        // line 76
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_container_column_settings", "newsletter/templates/blocks/container/columnSettings.hbs");
        // line 79
        echo "
  ";
        // line 80
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_divider_block", "newsletter/templates/blocks/divider/block.hbs");
        // line 83
        echo "
  ";
        // line 84
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_divider_widget", "newsletter/templates/blocks/divider/widget.hbs");
        // line 87
        echo "
  ";
        // line 88
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_divider_settings", "newsletter/templates/blocks/divider/settings.hbs");
        // line 91
        echo "
  ";
        // line 92
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_footer_block", "newsletter/templates/blocks/footer/block.hbs");
        // line 95
        echo "
  ";
        // line 96
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_footer_widget", "newsletter/templates/blocks/footer/widget.hbs");
        // line 99
        echo "
  ";
        // line 100
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_footer_settings", "newsletter/templates/blocks/footer/settings.hbs");
        // line 103
        echo "
  ";
        // line 104
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_header_block", "newsletter/templates/blocks/header/block.hbs");
        // line 107
        echo "
  ";
        // line 108
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_header_widget", "newsletter/templates/blocks/header/widget.hbs");
        // line 111
        echo "
  ";
        // line 112
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_header_settings", "newsletter/templates/blocks/header/settings.hbs");
        // line 115
        echo "
  ";
        // line 116
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_image_block", "newsletter/templates/blocks/image/block.hbs");
        // line 119
        echo "
  ";
        // line 120
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_image_widget", "newsletter/templates/blocks/image/widget.hbs");
        // line 123
        echo "
  ";
        // line 124
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_image_settings", "newsletter/templates/blocks/image/settings.hbs");
        // line 127
        echo "
  ";
        // line 128
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_posts_block", "newsletter/templates/blocks/posts/block.hbs");
        // line 131
        echo "
  ";
        // line 132
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_posts_widget", "newsletter/templates/blocks/posts/widget.hbs");
        // line 135
        echo "
  ";
        // line 136
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings", "newsletter/templates/blocks/posts/settings.hbs");
        // line 139
        echo "
  ";
        // line 140
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_display_options", "newsletter/templates/blocks/posts/settingsDisplayOptions.hbs");
        // line 143
        echo "
  ";
        // line 144
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection", "newsletter/templates/blocks/posts/settingsSelection.hbs");
        // line 147
        echo "
  ";
        // line 148
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_selection_empty", "newsletter/templates/blocks/posts/settingsSelectionEmpty.hbs");
        // line 151
        echo "
  ";
        // line 152
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_posts_settings_single_post", "newsletter/templates/blocks/posts/settingsSinglePost.hbs");
        // line 155
        echo "
  ";
        // line 156
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_products_block", "newsletter/templates/blocks/products/block.hbs");
        // line 159
        echo "
  ";
        // line 160
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_products_widget", "newsletter/templates/blocks/products/widget.hbs");
        // line 163
        echo "
  ";
        // line 164
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_products_settings", "newsletter/templates/blocks/products/settings.hbs");
        // line 167
        echo "
  ";
        // line 168
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_display_options", "newsletter/templates/blocks/products/settingsDisplayOptions.hbs");
        // line 171
        echo "
  ";
        // line 172
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_selection", "newsletter/templates/blocks/products/settingsSelection.hbs");
        // line 175
        echo "
  ";
        // line 176
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_selection_empty", "newsletter/templates/blocks/products/settingsSelectionEmpty.hbs");
        // line 179
        echo "
  ";
        // line 180
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_products_settings_single_post", "newsletter/templates/blocks/products/settingsSinglePost.hbs");
        // line 183
        echo "
  ";
        // line 184
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_acc_block", "newsletter/templates/blocks/abandonedCartContent/block.hbs");
        // line 187
        echo "
  ";
        // line 188
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_acc_widget", "newsletter/templates/blocks/abandonedCartContent/widget.hbs");
        // line 191
        echo "
  ";
        // line 192
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_acc_settings", "newsletter/templates/blocks/abandonedCartContent/settings.hbs");
        // line 195
        echo "
  ";
        // line 196
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_acc_settings_display_options", "newsletter/templates/blocks/abandonedCartContent/settingsDisplayOptions.hbs");
        // line 199
        echo "
  ";
        // line 200
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_social_block", "newsletter/templates/blocks/social/block.hbs");
        // line 203
        echo "
  ";
        // line 204
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_social_block_icon", "newsletter/templates/blocks/social/blockIcon.hbs");
        // line 207
        echo "
  ";
        // line 208
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_social_widget", "newsletter/templates/blocks/social/widget.hbs");
        // line 211
        echo "
  ";
        // line 212
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_social_settings", "newsletter/templates/blocks/social/settings.hbs");
        // line 215
        echo "
  ";
        // line 216
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon", "newsletter/templates/blocks/social/settingsIcon.hbs");
        // line 219
        echo "
  ";
        // line 220
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_icon_selector", "newsletter/templates/blocks/social/settingsIconSelector.hbs");
        // line 223
        echo "
  ";
        // line 224
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_social_settings_styles", "newsletter/templates/blocks/social/settingsStyles.hbs");
        // line 227
        echo "
  ";
        // line 228
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_spacer_block", "newsletter/templates/blocks/spacer/block.hbs");
        // line 231
        echo "
  ";
        // line 232
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_spacer_widget", "newsletter/templates/blocks/spacer/widget.hbs");
        // line 235
        echo "
  ";
        // line 236
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_spacer_settings", "newsletter/templates/blocks/spacer/settings.hbs");
        // line 239
        echo "
  ";
        // line 240
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_text_block", "newsletter/templates/blocks/text/block.hbs");
        // line 243
        echo "
  ";
        // line 244
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_text_widget", "newsletter/templates/blocks/text/widget.hbs");
        // line 247
        echo "
  ";
        // line 248
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_text_settings", "newsletter/templates/blocks/text/settings.hbs");
        // line 251
        echo "
  ";
        // line 252
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_heading", "newsletter/templates/components/heading.hbs");
        // line 255
        echo "
  ";
        // line 256
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_history", "newsletter/templates/components/history.hbs");
        // line 259
        echo "
  ";
        // line 260
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_save", "newsletter/templates/components/save.hbs");
        // line 263
        echo "
  ";
        // line 264
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_styles", "newsletter/templates/components/styles.hbs");
        // line 267
        echo "
  ";
        // line 268
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_newsletter_preview", "newsletter/templates/components/newsletterPreview.hbs");
        // line 271
        echo "
  ";
        // line 272
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_sidebar", "newsletter/templates/components/sidebar/sidebar.hbs");
        // line 275
        echo "
  ";
        // line 276
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_content", "newsletter/templates/components/sidebar/content.hbs");
        // line 279
        echo "
  ";
        // line 280
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_layout", "newsletter/templates/components/sidebar/layout.hbs");
        // line 283
        echo "
  ";
        // line 284
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_sidebar_styles", "newsletter/templates/components/sidebar/styles.hbs");
        // line 287
        echo "
  ";
        // line 288
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_woocommerce_new_account_content", "newsletter/templates/blocks/woocommerceContent/new_account.hbs");
        // line 291
        echo "
  ";
        // line 292
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_woocommerce_processing_order_content", "newsletter/templates/blocks/woocommerceContent/processing_order.hbs");
        // line 295
        echo "
  ";
        // line 296
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_woocommerce_completed_order_content", "newsletter/templates/blocks/woocommerceContent/completed_order.hbs");
        // line 299
        echo "
  ";
        // line 300
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_woocommerce_customer_note_content", "newsletter/templates/blocks/woocommerceContent/customer_note.hbs");
        // line 303
        echo "
  ";
        // line 304
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_woocommerce_content_widget", "newsletter/templates/blocks/woocommerceContent/widget.hbs");
        // line 307
        echo "
  ";
        // line 308
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_woocommerce_heading_block", "newsletter/templates/blocks/woocommerceHeading/block.hbs");
        // line 311
        echo "
  ";
        // line 312
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_woocommerce_heading_widget", "newsletter/templates/blocks/woocommerceHeading/widget.hbs");
        // line 315
        echo "
  ";
        // line 316
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_unknown_block_fallback_block", "newsletter/templates/blocks/unknownBlockFallback/block.hbs");
        // line 319
        echo "
  ";
        // line 320
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_unknown_block_fallback_widget", "newsletter/templates/blocks/unknownBlockFallback/widget.hbs");
        // line 323
        echo "
  ";
        // line 324
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_coupon_block", "newsletter/templates/blocks/coupon/block.hbs");
        // line 327
        echo "
  ";
        // line 328
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_coupon_widget", "newsletter/templates/blocks/coupon/widget.hbs");
        // line 331
        echo "
  ";
        // line 332
        echo $this->extensions['MailPoet\Twig\Handlebars']->generatePartial($this->env, $context, "newsletter_editor_template_coupon_settings", "newsletter/templates/blocks/coupon/settings.hbs");
        // line 335
        echo "
";
    }

    // line 338
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 339
        echo "<!-- Hidden heading for notices to appear under -->
<h1 style=\"display:none\">";
        // line 340
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Newsletter Editor");
        echo "</h1>
<div id=\"mailpoet_editor\">
  <div id=\"mailpoet_editor_steps_heading\"></div>
  <div class=\"clearfix\"></div>
  <div id=\"mailpoet_editor_heading_left\">
    <div id=\"mailpoet_editor_heading\"></div>
  </div>
  <div id=\"mailpoet_editor_heading_right\">
    <div id=\"mailpoet_editor_top\"></div>
  </div>
  <div class=\"clearfix\"></div>
  <div id=\"mailpoet_editor_main_wrapper\">
    <div id=\"mailpoet_editor_styles\"></div>
    <div id=\"mailpoet_editor_content_container\">
      <div class=\"mailpoet_newsletter_wrapper\">
        <div id=\"mailpoet_editor_content\"></div>
      </div>
    </div>
    <div id=\"mailpoet_editor_sidebar\"></div>
    <div class=\"clear\"></div>
  </div>
  <div id=\"mailpoet_editor_bottom\"></div>

  <div class=\"mailpoet_layer_overlay\" style=\"display:none;\"></div>
</div>
";
        // line 365
        if (($context["is_wc_transactional_email"] ?? null)) {
            // line 366
            echo "  <script type=\"text/javascript\">
    var mailpoet_beacon_articles = [
      '5de8c5cd2c7d3a7e9ae4c15f',
    ];
  </script>
";
        }
        // line 372
        echo "
<script type=\"text/javascript\">
  var mailpoet_email_editor_tutorial_seen  = '";
        // line 374
        echo \MailPoetVendor\twig_escape_filter($this->env, ($context["editor_tutorial_seen"] ?? null), "html", null, true);
        echo "';
  var mailpoet_email_editor_tutorial_url = '";
        // line 375
        echo $this->extensions['MailPoet\Twig\Assets']->generateCdnUrl("newsletter-editor/editor-drag-demo.20190226-1505.mp4");
        echo "';
  var mailpoet_installed_at = '";
        // line 376
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["settings"] ?? null), "installed_at", [], "any", false, false, false, 376), "html", null, true);
        echo "';
</script>

";
        // line 379
        if (\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["brand_styles"] ?? null), "available", [], "any", false, false, false, 379)) {
            // line 380
            echo "<script type=\"text/javascript\">
  var mailpoet_brand_styles = {
    available: true
  };
</script>
";
        }
        // line 386
        echo "
";
    }

    // line 389
    public function block_after_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 390
        echo "  ";
        echo $this->extensions['MailPoet\Twig\Assets']->generateStylesheet("mailpoet-editor.css");
        echo "
";
    }

    // line 393
    public function block_after_javascript($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 394
        echo "
  ";
        // line 395
        echo do_action("mailpoet_newsletter_editor_after_javascript");
        echo "

  <script type=\"text/javascript\">
    function renderWithFont(node) {
      if (!node.element) return node.text;
      var \$wrapper = jQuery('<span></span>');
      \$wrapper.css({'font-family': Handlebars.helpers.fontWithFallback(node.element.value)});
      \$wrapper.text(node.text);
      return \$wrapper;
    }
    function fontsSelect(selector) {
      jQuery(selector).select2({
        minimumResultsForSearch: Infinity,
        templateSelection: renderWithFont,
        templateResult: renderWithFont
      });
    }

    var templates = {
      styles: Handlebars.compile(
        jQuery('#newsletter_editor_template_styles').html()
      ),
      save: Handlebars.compile(
        jQuery('#newsletter_editor_template_save').html()
      ),
      heading: Handlebars.compile(
        jQuery('#newsletter_editor_template_heading').html()
      ),
      history: Handlebars.compile(
        jQuery('#newsletter_editor_template_history').html()
      ),

      sidebar: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar').html()
      ),
      sidebarContent: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_content').html()
      ),
      sidebarLayout: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_layout').html()
      ),
      sidebarStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_sidebar_styles').html()
      ),
      newsletterPreview: Handlebars.compile(
        jQuery('#newsletter_editor_template_newsletter_preview').html()
      ),

      genericBlockTools: Handlebars.compile(
        jQuery('#newsletter_editor_template_tools_generic').html()
      ),

      containerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block').html()
      ),
      containerEmpty: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_block_empty').html()
      ),
      oneColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_one_column_widget').html()
      ),
      twoColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_widget').html()
      ),
      twoColumn12LayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_12_widget').html()
      ),
      twoColumn21LayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_two_column_21_widget').html()
      ),
      threeColumnLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_three_column_widget').html()
      ),
      containerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_settings').html()
      ),
      containerBlockColumnSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_container_column_settings').html()
      ),

      buttonBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_block').html()
      ),
      buttonInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_widget').html()
      ),
      buttonBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_button_settings').html()
      ),

      dividerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_block').html()
      ),
      dividerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_widget').html()
      ),
      dividerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_divider_settings').html()
      ),

      footerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_block').html()
      ),
      footerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_widget').html()
      ),
      footerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_footer_settings').html()
      ),

      headerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_block').html()
      ),
      headerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_widget').html()
      ),
      headerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_header_settings').html()
      ),

      imageBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_block').html()
      ),
      imageInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_widget').html()
      ),
      imageBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_image_settings').html()
      ),

      socialBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block').html()
      ),
      socialIconBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_block_icon').html()
      ),
      socialInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_widget').html()
      ),
      socialBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings').html()
      ),
      socialSettingsIconSelector: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon_selector').html()
      ),
      socialSettingsIcon: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_icon').html()
      ),
      socialSettingsStyles: Handlebars.compile(
        jQuery('#newsletter_editor_template_social_settings_styles').html()
      ),

      spacerBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_block').html()
      ),
      spacerInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_widget').html()
      ),
      spacerBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_spacer_settings').html()
      ),

      automatedLatestContentBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_block').html()
      ),
      automatedLatestContentInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_widget').html()
      ),
      automatedLatestContentBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_settings').html()
      ),

      automatedLatestContentLayoutBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_block').html()
      ),
      automatedLatestContentLayoutInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_widget').html()
      ),
      automatedLatestContentLayoutBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_automated_latest_content_layout_settings').html()
      ),

      postsBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_block').html()
      ),
      postsInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_widget').html()
      ),
      postsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings').html()
      ),
      postSelectionPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection').html()
      ),
      emptyPostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_selection_empty').html()
      ),
      singlePostPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_single_post').html()
      ),
      displayOptionsPostsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_posts_settings_display_options').html()
      ),

      productsBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_block').html()
      ),
      productsInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_widget').html()
      ),
      productsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings').html()
      ),
      postSelectionProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_selection').html()
      ),
      emptyPostProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_selection_empty').html()
      ),
      singlePostProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_single_post').html()
      ),
      displayOptionsProductsBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_products_settings_display_options').html()
      ),

      abandonedCartContentBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_acc_block').html()
      ),
      abandonedCartContentInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_acc_widget').html()
      ),
      abandonedCartContentBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_acc_settings').html()
      ),
      displayOptionsAbandonedCartContentBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_acc_settings_display_options').html()
      ),

      textBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_block').html()
      ),
      textInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_widget').html()
      ),
      textBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_text_settings').html()
      ),

      woocommerceNewAccount: Handlebars.compile(
        jQuery('#newsletter_editor_template_woocommerce_new_account_content').html()
      ),
      woocommerceProcessingOrder: Handlebars.compile(
        jQuery('#newsletter_editor_template_woocommerce_processing_order_content').html()
      ),
      woocommerceCompletedOrder: Handlebars.compile(
        jQuery('#newsletter_editor_template_woocommerce_completed_order_content').html()
      ),
      woocommerceCustomerNote: Handlebars.compile(
        jQuery('#newsletter_editor_template_woocommerce_customer_note_content').html()
      ),
      woocommerceContentInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_woocommerce_content_widget').html()
      ),

      woocommerceHeadingBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_woocommerce_heading_block').html()
      ),
      woocommerceHeadingInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_woocommerce_heading_widget').html()
      ),

      unknownBlockFallbackBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_unknown_block_fallback_block').html()
      ),
      unknownBlockFallbackInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_unknown_block_fallback_widget').html()
      ),
      couponBlock: Handlebars.compile(
        jQuery('#newsletter_editor_template_coupon_block').html()
      ),
      couponInsertion: Handlebars.compile(
        jQuery('#newsletter_editor_template_coupon_widget').html()
      ),
      couponBlockSettings: Handlebars.compile(
        jQuery('#newsletter_editor_template_coupon_settings').html()
      ),
    };

    var currentUserEmail = '";
        // line 684
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "user_email", [], "any", false, false, false, 684), "html", null, true);
        echo "';
    var mailpoet_product_categories = ";
        // line 685
        echo json_encode(($context["product_categories"] ?? null));
        echo ";
    var mailpoet_products = ";
        // line 686
        echo json_encode(($context["products"] ?? null));
        echo ";

    var config = {
      availableStyles: {
        textSizes: [
          '9px', '10px', '11px', '12px', '13px', '14px', '15px', '16px',
          '17px', '18px', '19px', '20px', '21px', '22px', '23px', '24px'
        ],
        headingSizes: [
          '10px', '12px', '14px', '16px', '18px', '20px', '22px', '24px',
          '26px', '30px', '36px', '40px'
        ],
        lineHeights: [
          '1.0',
          '1.2',
          '1.4',
          '1.6',
          '1.8',
          '2.0',
        ],
        fonts: {
          standard: [
            'Arial',
            'Comic Sans MS',
            'Courier New',
            'Georgia',
            'Lucida',
            'Tahoma',
            'Times New Roman',
            'Trebuchet MS',
            'Verdana'
            ";
        // line 717
        if (($context["customFontsEnabled"] ?? null)) {
            // line 718
            echo "          ],
          custom: [
            'Arvo',
            'Lato',
            'Lora',
            'Merriweather',
            'Merriweather Sans',
            'Noticia Text',
            'Open Sans',
            'Playfair Display',
            'Roboto',
            'Source Sans Pro',
            'Oswald',
            'Raleway',
            'Permanent Marker',
            'Pacifico',
            ";
        }
        // line 735
        echo "          ]
        },
        socialIconSets: {
          'default': {
            'custom': '";
        // line 739
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 741
        echo "',
            'facebook': '";
        // line 742
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 744
        echo "',
            'twitter': '";
        // line 745
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 747
        echo "',
            'google-plus': '";
        // line 748
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Google-Plus.png");
        // line 750
        echo "',
            'youtube': '";
        // line 751
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Youtube.png");
        // line 753
        echo "',
            'website': '";
        // line 754
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Website.png");
        // line 756
        echo "',
            'email': '";
        // line 757
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Email.png");
        // line 759
        echo "',
            'instagram': '";
        // line 760
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Instagram.png");
        // line 762
        echo "',
            'pinterest': '";
        // line 763
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Pinterest.png");
        // line 765
        echo "',
            'linkedin': '";
        // line 766
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/LinkedIn.png");
        // line 768
        echo "'
          },
          'grey': {
            'custom': '";
        // line 771
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 773
        echo "',
            'facebook': '";
        // line 774
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Facebook.png");
        // line 776
        echo "',
            'twitter': '";
        // line 777
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Twitter.png");
        // line 779
        echo "',
            'google-plus': '";
        // line 780
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Google-Plus.png");
        // line 782
        echo "',
            'youtube': '";
        // line 783
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Youtube.png");
        // line 785
        echo "',
            'website': '";
        // line 786
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Website.png");
        // line 788
        echo "',
            'email': '";
        // line 789
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Email.png");
        // line 791
        echo "',
            'instagram': '";
        // line 792
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Instagram.png");
        // line 794
        echo "',
            'pinterest': '";
        // line 795
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/Pinterest.png");
        // line 797
        echo "',
            'linkedin': '";
        // line 798
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/02-grey/LinkedIn.png");
        // line 800
        echo "',
          },
          'circles': {
            'custom': '";
        // line 803
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 805
        echo "',
            'facebook': '";
        // line 806
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Facebook.png");
        // line 808
        echo "',
            'twitter': '";
        // line 809
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Twitter.png");
        // line 811
        echo "',
            'google-plus': '";
        // line 812
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Google-Plus.png");
        // line 814
        echo "',
            'youtube': '";
        // line 815
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Youtube.png");
        // line 817
        echo "',
            'website': '";
        // line 818
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Website.png");
        // line 820
        echo "',
            'email': '";
        // line 821
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Email.png");
        // line 823
        echo "',
            'instagram': '";
        // line 824
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Instagram.png");
        // line 826
        echo "',
            'pinterest': '";
        // line 827
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/Pinterest.png");
        // line 829
        echo "',
            'linkedin': '";
        // line 830
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/03-circles/LinkedIn.png");
        // line 832
        echo "',
          },
          'full-flat-roundrect': {
            'custom': '";
        // line 835
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 837
        echo "',
            'facebook': '";
        // line 838
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Facebook.png");
        // line 840
        echo "',
            'twitter': '";
        // line 841
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Twitter.png");
        // line 843
        echo "',
            'google-plus': '";
        // line 844
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Google-Plus.png");
        // line 846
        echo "',
            'youtube': '";
        // line 847
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Youtube.png");
        // line 849
        echo "',
            'website': '";
        // line 850
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Website.png");
        // line 852
        echo "',
            'email': '";
        // line 853
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Email.png");
        // line 855
        echo "',
            'instagram': '";
        // line 856
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Instagram.png");
        // line 858
        echo "',
            'pinterest': '";
        // line 859
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/Pinterest.png");
        // line 861
        echo "',
            'linkedin': '";
        // line 862
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/04-full-flat-roundrect/LinkedIn.png");
        // line 864
        echo "',
          },
          'full-gradient-square': {
            'custom': '";
        // line 867
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 869
        echo "',
            'facebook': '";
        // line 870
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Facebook.png");
        // line 872
        echo "',
            'twitter': '";
        // line 873
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Twitter.png");
        // line 875
        echo "',
            'google-plus': '";
        // line 876
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Google-Plus.png");
        // line 878
        echo "',
            'youtube': '";
        // line 879
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Youtube.png");
        // line 881
        echo "',
            'website': '";
        // line 882
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Website.png");
        // line 884
        echo "',
            'email': '";
        // line 885
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Email.png");
        // line 887
        echo "',
            'instagram': '";
        // line 888
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Instagram.png");
        // line 890
        echo "',
            'pinterest': '";
        // line 891
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/Pinterest.png");
        // line 893
        echo "',
            'linkedin': '";
        // line 894
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/05-full-gradient-square/LinkedIn.png");
        // line 896
        echo "',
          },
          'full-symbol-color': {
            'custom': '";
        // line 899
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 901
        echo "',
            'facebook': '";
        // line 902
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Facebook.png");
        // line 904
        echo "',
            'twitter': '";
        // line 905
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Twitter.png");
        // line 907
        echo "',
            'google-plus': '";
        // line 908
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Google-Plus.png");
        // line 910
        echo "',
            'youtube': '";
        // line 911
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Youtube.png");
        // line 913
        echo "',
            'website': '";
        // line 914
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Website.png");
        // line 916
        echo "',
            'email': '";
        // line 917
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Email.png");
        // line 919
        echo "',
            'instagram': '";
        // line 920
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Instagram.png");
        // line 922
        echo "',
            'pinterest': '";
        // line 923
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/Pinterest.png");
        // line 925
        echo "',
            'linkedin': '";
        // line 926
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/06-full-symbol-color/LinkedIn.png");
        // line 928
        echo "',
          },
          'full-symbol-black': {
            'custom': '";
        // line 931
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 933
        echo "',
            'facebook': '";
        // line 934
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Facebook.png");
        // line 936
        echo "',
            'twitter': '";
        // line 937
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Twitter.png");
        // line 939
        echo "',
            'google-plus': '";
        // line 940
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Google-Plus.png");
        // line 942
        echo "',
            'youtube': '";
        // line 943
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Youtube.png");
        // line 945
        echo "',
            'website': '";
        // line 946
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Website.png");
        // line 948
        echo "',
            'email': '";
        // line 949
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Email.png");
        // line 951
        echo "',
            'instagram': '";
        // line 952
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Instagram.png");
        // line 954
        echo "',
            'pinterest': '";
        // line 955
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/Pinterest.png");
        // line 957
        echo "',
            'linkedin': '";
        // line 958
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/07-full-symbol-black/LinkedIn.png");
        // line 960
        echo "',
          },
          'full-symbol-grey': {
            'custom': '";
        // line 963
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 965
        echo "',
            'facebook': '";
        // line 966
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Facebook.png");
        // line 968
        echo "',
            'twitter': '";
        // line 969
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Twitter.png");
        // line 971
        echo "',
            'google-plus': '";
        // line 972
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Google-Plus.png");
        // line 974
        echo "',
            'youtube': '";
        // line 975
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Youtube.png");
        // line 977
        echo "',
            'website': '";
        // line 978
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Website.png");
        // line 980
        echo "',
            'email': '";
        // line 981
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Email.png");
        // line 983
        echo "',
            'instagram': '";
        // line 984
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Instagram.png");
        // line 986
        echo "',
            'pinterest': '";
        // line 987
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/Pinterest.png");
        // line 989
        echo "',
            'linkedin': '";
        // line 990
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/08-full-symbol-grey/LinkedIn.png");
        // line 992
        echo "',
          },
          'line-roundrect': {
            'custom': '";
        // line 995
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 997
        echo "',
            'facebook': '";
        // line 998
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Facebook.png");
        // line 1000
        echo "',
            'twitter': '";
        // line 1001
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Twitter.png");
        // line 1003
        echo "',
            'google-plus': '";
        // line 1004
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Google-Plus.png");
        // line 1006
        echo "',
            'youtube': '";
        // line 1007
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Youtube.png");
        // line 1009
        echo "',
            'website': '";
        // line 1010
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Website.png");
        // line 1012
        echo "',
            'email': '";
        // line 1013
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Email.png");
        // line 1015
        echo "',
            'instagram': '";
        // line 1016
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Instagram.png");
        // line 1018
        echo "',
            'pinterest': '";
        // line 1019
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/Pinterest.png");
        // line 1021
        echo "',
            'linkedin': '";
        // line 1022
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/09-line-roundrect/LinkedIn.png");
        // line 1024
        echo "',
          },
          'line-square': {
            'custom': '";
        // line 1027
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/custom.png");
        // line 1029
        echo "',
            'facebook': '";
        // line 1030
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Facebook.png");
        // line 1032
        echo "',
            'twitter': '";
        // line 1033
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Twitter.png");
        // line 1035
        echo "',
            'google-plus': '";
        // line 1036
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Google-Plus.png");
        // line 1038
        echo "',
            'youtube': '";
        // line 1039
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Youtube.png");
        // line 1041
        echo "',
            'website': '";
        // line 1042
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Website.png");
        // line 1044
        echo "',
            'email': '";
        // line 1045
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Email.png");
        // line 1047
        echo "',
            'instagram': '";
        // line 1048
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Instagram.png");
        // line 1050
        echo "',
            'pinterest': '";
        // line 1051
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/Pinterest.png");
        // line 1053
        echo "',
            'linkedin': '";
        // line 1054
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/10-line-square/LinkedIn.png");
        // line 1056
        echo "',
          },
        },
        dividers: [
          'hidden',
          'dotted',
          'dashed',
          'solid',
          'double',
          'groove',
          'ridge'
        ]
      },
      socialIcons: {
        'facebook': {
          title: 'Facebook',
          linkFieldName: '";
        // line 1072
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.facebook.com',
        },
        'twitter': {
          title: 'Twitter',
          linkFieldName: '";
        // line 1077
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.twitter.com',
        },
        'google-plus': {
          title: 'Google Plus',
          linkFieldName: '";
        // line 1082
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://plus.google.com',
        },
        'youtube': {
          title: 'Youtube',
          linkFieldName: '";
        // line 1087
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.youtube.com',
        },
        'website': {
          title: '";
        // line 1091
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Website"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1092
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'email': {
          title: '";
        // line 1096
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Email"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1097
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Email"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
        'instagram': {
          title: 'Instagram',
          linkFieldName: '";
        // line 1102
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://instagram.com',
        },
        'pinterest': {
          title: 'Pinterest',
          linkFieldName: '";
        // line 1107
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.pinterest.com',
        },
        'linkedin': {
          title: 'LinkedIn',
          linkFieldName: '";
        // line 1112
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: 'http://www.linkedin.com',
        },
        'custom': {
          title: '";
        // line 1116
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Custom"), "js"), "html", null, true);
        echo "',
          linkFieldName: '";
        // line 1117
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Link"), "js"), "html", null, true);
        echo "',
          defaultLink: '',
        },
      },
      blockDefaults: {
        abandonedCartContent: {
          amount: '2',
          withLayout: true,
          contentType: 'product',
          postStatus: 'publish', // 'draft'|'pending'|'publish'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          pricePosition: 'below', // 'hidden'|'above'|'below'
          readMoreType: 'none', // 'link'|'button'|'none'
          readMoreText: '',
          readMoreButton: {},
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'abandonedCartContent.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        automatedLatestContent: {
          amount: '5',
          withLayout: false,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'belowTitle', // 'belowTitle'|'aboveTitle'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1167
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1169
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1171
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1173
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContent.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContent.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        automatedLatestContentLayout: {
          amount: '5',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1222
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1224
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'button', // 'link'|'button'
          readMoreText: '";
        // line 1226
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1228
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'automatedLatestContentLayout.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              }
            }
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'automatedLatestContentLayout.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        button: {
          text: '";
        // line 1266
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Button"), "js"), "html", null, true);
        echo "',
          url: '',
          styles: {
            block: {
              backgroundColor: '#2ea1cd',
              borderColor: '#0074a2',
              borderWidth: '1px',
              borderRadius: '5px',
              borderStyle: 'solid',
              width: '180px',
              lineHeight: '40px',
              fontColor: '#ffffff',
              fontFamily: 'Verdana',
              fontSize: '18px',
              fontWeight: 'normal',
              textAlign: 'center',
            },
          },
        },
        container: {
          image: {
            src: null,
            display: 'scale',
          },
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
          },
        },
        divider: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              padding: '13px',
              borderStyle: 'solid',
              borderWidth: '3px',
              borderColor: '#aaaaaa',
            },
          },
        },
        footer: {
          text: '<p><a href=\"[link:subscription_unsubscribe_url]\">";
        // line 1308
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Unsubscribe");
        echo "</a> | <a href=\"[link:subscription_manage_url]\">";
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Manage subscription");
        echo "</a><br />";
        echo $this->extensions['MailPoet\Twig\I18n']->translate("Add your postal address here!");
        echo "</p>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'none',
            },
          },
        },
        image: {
          link: '',
          src: '',
          alt: '";
        // line 1328
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("An image of..."), "js"), "html", null, true);
        echo "',
          fullWidth: false,
          width: '281px',
          height: '190px',
          styles: {
            block: {
              textAlign: 'center',
            },
          },
        },
        posts: {
          amount: '10',
          withLayout: true,
          contentType: 'post', // 'post'|'page'|'mailpoet_page'
          postStatus: 'publish', // 'draft'|'pending'|'private'|'publish'|'future'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'|'ul'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          showAuthor: 'no', // 'no'|'aboveText'|'belowText'
          authorPrecededBy: '";
        // line 1351
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Author:"), "js"), "html", null, true);
        echo "',
          showCategories: 'no', // 'no'|'aboveText'|'belowText'
          categoriesPrecededBy: '";
        // line 1353
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Categories:"), "js"), "html", null, true);
        echo "',
          readMoreType: 'link', // 'link'|'button'
          readMoreText: '";
        // line 1355
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Read more"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1357
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Read more"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'posts.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
            },
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'posts.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        products: {
          amount: '10',
          withLayout: true,
          contentType: 'product',
          postStatus: 'publish', // 'draft'|'pending'|'publish'
          inclusionType: 'include', // 'include'|'exclude'
          displayType: 'excerpt', // 'excerpt'|'full'|'titleOnly'
          titleFormat: 'h1', // 'h1'|'h2'|'h3'
          titleAlignment: 'left', // 'left'|'center'|'right'
          titleIsLink: false, // false|true
          imageFullWidth: false, // true|false
          featuredImagePosition: 'alternate', // 'centered'|'left'|'right'|'alternate'|'none',
          pricePosition: 'below', // 'hidden'|'above'|'below'
          readMoreType: 'link', // 'link'|'button'
          readMoreText: '";
        // line 1408
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Buy now", "Text of a button which links to an ecommerce product page"), "js"), "html", null, true);
        echo "',
          readMoreButton: {
            text: '";
        // line 1410
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translateWithContext("Buy now", "Text of a button which links to an ecommerce product page"), "js"), "html", null, true);
        echo "',
            url: '[postLink]',
            context: 'posts.readMoreButton',
            styles: {
              block: {
                backgroundColor: '#2ea1cd',
                borderColor: '#0074a2',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '180px',
                lineHeight: '40px',
                fontColor: '#ffffff',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
            },
          },
          sortBy: 'newest', // 'newest'|'oldest',
          showDivider: true, // true|false
          divider: {
            context: 'posts.divider',
            styles: {
              block: {
                backgroundColor: 'transparent',
                padding: '13px',
                borderStyle: 'solid',
                borderWidth: '3px',
                borderColor: '#aaaaaa',
              },
            },
          },
          backgroundColor: '#ffffff',
          backgroundColorAlternate: '#eeeeee',
        },
        social: {
          iconSet: 'default',
          styles: {
            block: {
              textAlign: 'center'
            }
          },
          icons: [
          {
            type: 'socialIcon',
            iconType: 'facebook',
            link: 'http://www.facebook.com',
            image: '";
        // line 1459
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Facebook.png");
        // line 1461
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1464
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Facebook"), "js"), "html", null, true);
        echo "',
          },
          {
            type: 'socialIcon',
            iconType: 'twitter',
            link: 'http://www.twitter.com',
            image: '";
        // line 1470
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/social-icons/01-social/Twitter.png");
        // line 1472
        echo "',
            height: '32px',
            width: '32px',
            text: '";
        // line 1475
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Twitter"), "js"), "html", null, true);
        echo "',
          },
          ],
        },
        spacer: {
          styles: {
            block: {
              backgroundColor: 'transparent',
              height: '40px',
            },
          },
        },
        text: {
          text: '";
        // line 1488
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_escape_filter($this->env, $this->extensions['MailPoet\Twig\I18n']->translate("Edit this to insert text."), "js"), "html", null, true);
        echo "',
        },
        header: {
          text: '<a href=\"[link:newsletter_view_in_browser_url]\">";
        // line 1491
        echo $this->extensions['MailPoet\Twig\I18n']->translate("View this in your browser.");
        echo "</a>',
          styles: {
            block: {
              backgroundColor: 'transparent',
            },
            text: {
              fontColor: '#222222',
              fontFamily: 'Arial',
              fontSize: '12px',
              textAlign: 'center',
            },
            link: {
              fontColor: '#6cb7d4',
              textDecoration: 'underline',
            },
          },
        },
        woocommerceHeading: {
          contents: ";
        // line 1509
        echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "email_headings", [], "any", false, false, false, 1509));
        echo ",
        },
        coupon: {
            type: 'coupon',
            discountType: ";
        // line 1513
        echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, \MailPoetVendor\twig_get_attribute($this->env, $this->source, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "coupon", [], "any", false, false, false, 1513), "defaults", [], "any", false, false, false, 1513), "discountType", [], "any", false, false, false, 1513));
        echo ",
            code: ";
        // line 1514
        echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, \MailPoetVendor\twig_get_attribute($this->env, $this->source, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "coupon", [], "any", false, false, false, 1514), "defaults", [], "any", false, false, false, 1514), "code", [], "any", false, false, false, 1514));
        echo ",
            amountMax: ";
        // line 1515
        echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, \MailPoetVendor\twig_get_attribute($this->env, $this->source, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "coupon", [], "any", false, false, false, 1515), "defaults", [], "any", false, false, false, 1515), "amountMax", [], "any", false, false, false, 1515));
        echo ",
            amount: 10,
            expiryDay: 10,
            styles: {
              block: {
                backgroundColor: '#ffffff',
                borderColor: '#000000',
                borderWidth: '1px',
                borderRadius: '5px',
                borderStyle: 'solid',
                width: '200px',
                lineHeight: '40px',
                fontColor: '#000000',
                fontFamily: 'Verdana',
                fontSize: '18px',
                fontWeight: 'normal',
                textAlign: 'center',
              },
          },
        },
      },
      shortcodes: ";
        // line 1536
        echo json_encode(($context["shortcodes"] ?? null));
        echo ",
      sidepanelWidth: '331px',
      newsletterPreview: {
        width: '1024px',
        height: '768px',
        previewTypeLocalStorageKey: 'newsletter_editor.preview_type'
      },
      validation: {
        validateUnsubscribeLinkPresent: ";
        // line 1544
        echo ((((($context["mss_active"] ?? null) && (($context["is_wc_transactional_email"] ?? null) != true)) && (($context["is_confirmation_email_template"] ?? null) != true))) ? ("true") : ("false"));
        echo ",
        validateReEngageLinkPresent: ";
        // line 1545
        echo ((((($context["mss_active"] ?? null) && (($context["is_wc_transactional_email"] ?? null) != true)) && (($context["is_confirmation_email_template"] ?? null) != true))) ? ("true") : ("false"));
        echo ",
        validateActivationLinkIsPresent: ";
        // line 1546
        echo ((($context["is_confirmation_email_template"] ?? null)) ? ("true") : ("false"));
        echo ",
      },
      urls: {
        send: '";
        // line 1549
        echo admin_url(("admin.php?page=mailpoet-newsletters#/send/" . intval($this->extensions['MailPoet\Twig\Functions']->params("id"))));
        echo "',
        imageMissing: '";
        // line 1550
        echo $this->extensions['MailPoet\Twig\Assets']->generateImageUrl("newsletter_editor/image-missing.svg");
        // line 1552
        echo "',
      },
      currentUserId: '";
        // line 1554
        echo \MailPoetVendor\twig_escape_filter($this->env, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["current_wp_user"] ?? null), "wp_user_id", [], "any", false, false, false, 1554), "html", null, true);
        echo "',
      mtaMethod: '";
        // line 1555
        echo \MailPoetVendor\twig_escape_filter($this->env, (($__internal_compile_0 = (($__internal_compile_1 = ($context["settings"] ?? null)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["mta"] ?? null) : null)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["method"] ?? null) : null), "html", null, true);
        echo "',
      woocommerceCustomizerEnabled: ";
        // line 1556
        echo ((\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "customizer_enabled", [], "any", false, false, false, 1556)) ? ("true") : ("false"));
        echo ",
      confirmationEmailCustomizerEnabled: ";
        // line 1557
        echo ((($context["is_confirmation_email_customizer_enabled"] ?? null)) ? ("true") : ("false"));
        echo ",
      ";
        // line 1558
        if (($context["is_wc_transactional_email"] ?? null)) {
            // line 1559
            echo "      overrideGlobalStyles: {
        text: {
          fontColor: ";
            // line 1561
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "text_color", [], "any", false, false, false, 1561));
            echo ",
        },
        h1: {
          fontColor: ";
            // line 1564
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "base_color", [], "any", false, false, false, 1564));
            echo ",
        },
        h2: {
          fontColor: ";
            // line 1567
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "base_color", [], "any", false, false, false, 1567));
            echo ",
        },
        h3: {
          fontColor: ";
            // line 1570
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "base_color", [], "any", false, false, false, 1570));
            echo ",
        },
        link: {
          fontColor: ";
            // line 1573
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "link_color", [], "any", false, false, false, 1573));
            echo ",
        },
        wrapper: {
          backgroundColor: ";
            // line 1576
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "body_background_color", [], "any", false, false, false, 1576));
            echo ",
        },
        body: {
          backgroundColor: ";
            // line 1579
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "background_color", [], "any", false, false, false, 1579));
            echo ",
        },
        woocommerce: {
          brandingColor: ";
            // line 1582
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "base_color", [], "any", false, false, false, 1582));
            echo ",
          headingFontColor: ";
            // line 1583
            echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "base_text_color", [], "any", false, false, false, 1583));
            echo ",
        },
      },
      hiddenWidgets: ['automatedLatestContentLayout', 'header', 'footer', 'posts', 'products'],
      ";
        }
        // line 1588
        echo "      ";
        if (($context["is_confirmation_email_template"] ?? null)) {
            // line 1589
            echo "      hiddenWidgets: ['automatedLatestContentLayout', 'header', 'footer', 'posts', 'products'],
      ";
        }
        // line 1591
        echo "      coupon: ";
        echo json_encode(\MailPoetVendor\twig_get_attribute($this->env, $this->source, \MailPoetVendor\twig_get_attribute($this->env, $this->source, ($context["woocommerce"] ?? null), "coupon", [], "any", false, false, false, 1591), "config", [], "any", false, false, false, 1591));
        echo ",
    };

    wp.hooks.doAction('mailpoet_newsletters_editor_initialize', config);

  </script>
";
    }

    public function getTemplateName()
    {
        return "newsletter/editor.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2165 => 1591,  2161 => 1589,  2158 => 1588,  2150 => 1583,  2146 => 1582,  2140 => 1579,  2134 => 1576,  2128 => 1573,  2122 => 1570,  2116 => 1567,  2110 => 1564,  2104 => 1561,  2100 => 1559,  2098 => 1558,  2094 => 1557,  2090 => 1556,  2086 => 1555,  2082 => 1554,  2078 => 1552,  2076 => 1550,  2072 => 1549,  2066 => 1546,  2062 => 1545,  2058 => 1544,  2047 => 1536,  2023 => 1515,  2019 => 1514,  2015 => 1513,  2008 => 1509,  1987 => 1491,  1981 => 1488,  1965 => 1475,  1960 => 1472,  1958 => 1470,  1949 => 1464,  1944 => 1461,  1942 => 1459,  1890 => 1410,  1885 => 1408,  1831 => 1357,  1826 => 1355,  1821 => 1353,  1816 => 1351,  1790 => 1328,  1763 => 1308,  1718 => 1266,  1677 => 1228,  1672 => 1226,  1667 => 1224,  1662 => 1222,  1610 => 1173,  1605 => 1171,  1600 => 1169,  1595 => 1167,  1542 => 1117,  1538 => 1116,  1531 => 1112,  1523 => 1107,  1515 => 1102,  1507 => 1097,  1503 => 1096,  1496 => 1092,  1492 => 1091,  1485 => 1087,  1477 => 1082,  1469 => 1077,  1461 => 1072,  1443 => 1056,  1441 => 1054,  1438 => 1053,  1436 => 1051,  1433 => 1050,  1431 => 1048,  1428 => 1047,  1426 => 1045,  1423 => 1044,  1421 => 1042,  1418 => 1041,  1416 => 1039,  1413 => 1038,  1411 => 1036,  1408 => 1035,  1406 => 1033,  1403 => 1032,  1401 => 1030,  1398 => 1029,  1396 => 1027,  1391 => 1024,  1389 => 1022,  1386 => 1021,  1384 => 1019,  1381 => 1018,  1379 => 1016,  1376 => 1015,  1374 => 1013,  1371 => 1012,  1369 => 1010,  1366 => 1009,  1364 => 1007,  1361 => 1006,  1359 => 1004,  1356 => 1003,  1354 => 1001,  1351 => 1000,  1349 => 998,  1346 => 997,  1344 => 995,  1339 => 992,  1337 => 990,  1334 => 989,  1332 => 987,  1329 => 986,  1327 => 984,  1324 => 983,  1322 => 981,  1319 => 980,  1317 => 978,  1314 => 977,  1312 => 975,  1309 => 974,  1307 => 972,  1304 => 971,  1302 => 969,  1299 => 968,  1297 => 966,  1294 => 965,  1292 => 963,  1287 => 960,  1285 => 958,  1282 => 957,  1280 => 955,  1277 => 954,  1275 => 952,  1272 => 951,  1270 => 949,  1267 => 948,  1265 => 946,  1262 => 945,  1260 => 943,  1257 => 942,  1255 => 940,  1252 => 939,  1250 => 937,  1247 => 936,  1245 => 934,  1242 => 933,  1240 => 931,  1235 => 928,  1233 => 926,  1230 => 925,  1228 => 923,  1225 => 922,  1223 => 920,  1220 => 919,  1218 => 917,  1215 => 916,  1213 => 914,  1210 => 913,  1208 => 911,  1205 => 910,  1203 => 908,  1200 => 907,  1198 => 905,  1195 => 904,  1193 => 902,  1190 => 901,  1188 => 899,  1183 => 896,  1181 => 894,  1178 => 893,  1176 => 891,  1173 => 890,  1171 => 888,  1168 => 887,  1166 => 885,  1163 => 884,  1161 => 882,  1158 => 881,  1156 => 879,  1153 => 878,  1151 => 876,  1148 => 875,  1146 => 873,  1143 => 872,  1141 => 870,  1138 => 869,  1136 => 867,  1131 => 864,  1129 => 862,  1126 => 861,  1124 => 859,  1121 => 858,  1119 => 856,  1116 => 855,  1114 => 853,  1111 => 852,  1109 => 850,  1106 => 849,  1104 => 847,  1101 => 846,  1099 => 844,  1096 => 843,  1094 => 841,  1091 => 840,  1089 => 838,  1086 => 837,  1084 => 835,  1079 => 832,  1077 => 830,  1074 => 829,  1072 => 827,  1069 => 826,  1067 => 824,  1064 => 823,  1062 => 821,  1059 => 820,  1057 => 818,  1054 => 817,  1052 => 815,  1049 => 814,  1047 => 812,  1044 => 811,  1042 => 809,  1039 => 808,  1037 => 806,  1034 => 805,  1032 => 803,  1027 => 800,  1025 => 798,  1022 => 797,  1020 => 795,  1017 => 794,  1015 => 792,  1012 => 791,  1010 => 789,  1007 => 788,  1005 => 786,  1002 => 785,  1000 => 783,  997 => 782,  995 => 780,  992 => 779,  990 => 777,  987 => 776,  985 => 774,  982 => 773,  980 => 771,  975 => 768,  973 => 766,  970 => 765,  968 => 763,  965 => 762,  963 => 760,  960 => 759,  958 => 757,  955 => 756,  953 => 754,  950 => 753,  948 => 751,  945 => 750,  943 => 748,  940 => 747,  938 => 745,  935 => 744,  933 => 742,  930 => 741,  928 => 739,  922 => 735,  903 => 718,  901 => 717,  867 => 686,  863 => 685,  859 => 684,  567 => 395,  564 => 394,  560 => 393,  553 => 390,  549 => 389,  544 => 386,  536 => 380,  534 => 379,  528 => 376,  524 => 375,  520 => 374,  516 => 372,  508 => 366,  506 => 365,  478 => 340,  475 => 339,  471 => 338,  466 => 335,  464 => 332,  461 => 331,  459 => 328,  456 => 327,  454 => 324,  451 => 323,  449 => 320,  446 => 319,  444 => 316,  441 => 315,  439 => 312,  436 => 311,  434 => 308,  431 => 307,  429 => 304,  426 => 303,  424 => 300,  421 => 299,  419 => 296,  416 => 295,  414 => 292,  411 => 291,  409 => 288,  406 => 287,  404 => 284,  401 => 283,  399 => 280,  396 => 279,  394 => 276,  391 => 275,  389 => 272,  386 => 271,  384 => 268,  381 => 267,  379 => 264,  376 => 263,  374 => 260,  371 => 259,  369 => 256,  366 => 255,  364 => 252,  361 => 251,  359 => 248,  356 => 247,  354 => 244,  351 => 243,  349 => 240,  346 => 239,  344 => 236,  341 => 235,  339 => 232,  336 => 231,  334 => 228,  331 => 227,  329 => 224,  326 => 223,  324 => 220,  321 => 219,  319 => 216,  316 => 215,  314 => 212,  311 => 211,  309 => 208,  306 => 207,  304 => 204,  301 => 203,  299 => 200,  296 => 199,  294 => 196,  291 => 195,  289 => 192,  286 => 191,  284 => 188,  281 => 187,  279 => 184,  276 => 183,  274 => 180,  271 => 179,  269 => 176,  266 => 175,  264 => 172,  261 => 171,  259 => 168,  256 => 167,  254 => 164,  251 => 163,  249 => 160,  246 => 159,  244 => 156,  241 => 155,  239 => 152,  236 => 151,  234 => 148,  231 => 147,  229 => 144,  226 => 143,  224 => 140,  221 => 139,  219 => 136,  216 => 135,  214 => 132,  211 => 131,  209 => 128,  206 => 127,  204 => 124,  201 => 123,  199 => 120,  196 => 119,  194 => 116,  191 => 115,  189 => 112,  186 => 111,  184 => 108,  181 => 107,  179 => 104,  176 => 103,  174 => 100,  171 => 99,  169 => 96,  166 => 95,  164 => 92,  161 => 91,  159 => 88,  156 => 87,  154 => 84,  151 => 83,  149 => 80,  146 => 79,  144 => 76,  141 => 75,  139 => 72,  136 => 71,  134 => 68,  131 => 67,  129 => 64,  126 => 63,  124 => 60,  121 => 59,  119 => 56,  116 => 55,  114 => 52,  111 => 51,  109 => 48,  106 => 47,  104 => 44,  101 => 43,  99 => 40,  96 => 39,  94 => 36,  91 => 35,  89 => 32,  86 => 31,  84 => 28,  81 => 27,  79 => 24,  76 => 23,  74 => 20,  71 => 19,  69 => 16,  66 => 15,  64 => 12,  61 => 11,  59 => 8,  56 => 7,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "newsletter/editor.html", "/home/circleci/mailpoet/mailpoet/views/newsletter/editor.html");
    }
}
