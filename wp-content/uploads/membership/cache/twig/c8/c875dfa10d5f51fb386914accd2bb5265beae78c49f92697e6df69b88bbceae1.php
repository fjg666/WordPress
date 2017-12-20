<?php

/* @design/styles.twig */
class __TwigTemplate_fdf2a058f430a22c2bd1ee105854ddd8d8b62dcd5d44999a3e3990499b528675 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<style id=\"membership-custom-styles\">
\t
\t";
        // line 3
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "default-theme-colors", array(), "array") == "false")) {
            // line 4
            echo "\t
\t
\t\t.sc-membership .ui.primary.button,
\t\t.ui.modals .ui.primary.button {
\t\t\tbackground: ";
            // line 8
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "primary-button-color", array(), "array"), "html", null, true);
            echo "!important;
\t\t\t";
            // line 10
            echo "\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "primary-button-text-color", array(), "array", true, true)) {
                // line 11
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "primary-button-text-color", array(), "array"), "html", null, true);
                echo "!important;
\t\t\t";
            }
            // line 13
            echo "\t\t}
\t

\t\t.sc-membership .ui.primary.button:active,
\t\t.sc-membership .ui.primary.buttons .button:active,
\t\t.ui.modals .ui.primary.button:active,
\t\t.ui.modals .ui.primary.buttons .button:active,
\t\t.sc-membership .ui.primary.button:hover,
\t\t.sc-membership .ui.primary.buttons .button:hover,
\t\t.ui.modals .ui.primary.button:hover,
\t\t.ui.modals .ui.primary.buttons .button:hover {
\t\t\t";
            // line 24
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "primary-button-hover-color", array(), "array")) {
                // line 25
                echo "\t\t\t\tbackground: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "primary-button-hover-color", array(), "array"), "html", null, true);
                echo "!important;
\t\t\t";
            }
            // line 27
            echo "\t\t}


\t\t.sc-membership .ui.secondary.button,
\t\t.ui.modals .ui.secondary.button {
\t\t\tbackground: ";
            // line 32
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "secondary-button-color", array(), "array"), "html", null, true);
            echo "!important;
\t\t\t";
            // line 34
            echo "\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "secondary-button-text-color", array(), "array", true, true)) {
                // line 35
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "secondary-button-text-color", array(), "array"), "html", null, true);
                echo "!important;
\t\t\t";
            }
            // line 37
            echo "\t\t}

\t\t.sc-membership .ui.secondary.button:hover,
\t\t.sc-membership .ui.secondary.buttons .button:hover,
\t\t.ui.modals .ui.secondary.button:hover,
\t\t.ui.modals .ui.secondary.buttons .button:hover {
\t\t\tbackground: ";
            // line 43
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "secondary-button-hover-color", array(), "array"), "html", null, true);
            echo "!important;
\t\t}
\t\t";
            // line 46
            echo "\t\t.post-activity-buttons .button[data-action=\"add-smile-to-text\"] {
\t\t\tbackground-color: ";
            // line 47
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smile-button-bg-color", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smile-button-bg-color", array(), "array"), "#fff")) : ("#fff")), "html", null, true);
            echo " !important;
\t\t}
\t\t.post-activity-buttons .button[data-action=\"add-smile-to-text\"]:hover {
\t\t\tbackground-color: ";
            // line 50
            echo twig_escape_filter($this->env, (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smile-button-hover-bg-color", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smile-button-hover-bg-color", array(), "array"), "#ddd")) : ("#ddd")), "html", null, true);
            echo " !important;
\t\t}
\t\t";
            // line 53
            echo "\t\t";
            $context["smileBtnIconSize"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smiles-button-icon-size-text-font-size-number", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smiles-button-icon-size-text-font-size-number", array(), "array"), 20)) : (20));
            // line 54
            echo "\t\t";
            $context["smileBtnIconSizeUnits"] = (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smiles-button-icon-size-text-font-unit-select", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "smiles-button-icon-size-text-font-unit-select", array(), "array"), "px")) : ("px"));
            // line 55
            echo "\t\t";
            $context["smileBtnIconWidthAndHeightSize"] = ((((isset($context["smileBtnIconSizeUnits"]) ? $context["smileBtnIconSizeUnits"] : null) == "em")) ? (((isset($context["smileBtnIconSize"]) ? $context["smileBtnIconSize"] : null) + 1)) : (((isset($context["smileBtnIconSize"]) ? $context["smileBtnIconSize"] : null) + 16)));
            // line 56
            echo "\t\t";
            // line 62
            echo "\t\t";
            $context["smileWrapperIconSizeWidth"] = ((((isset($context["smileBtnIconSizeUnits"]) ? $context["smileBtnIconSizeUnits"] : null) == "em")) ? (((isset($context["smileBtnIconSize"]) ? $context["smileBtnIconSize"] : null) * 6)) : (((((6 * (isset($context["smileBtnIconSize"]) ? $context["smileBtnIconSize"] : null)) + (6 * 5)) + (6 * 8)) + (6 * 8))));
            // line 63
            echo "\t\t.post-activity-buttons .button[data-action=\"add-smile-to-text\"] {
\t\t\tfont-size: ";
            // line 64
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSize"]) ? $context["smileBtnIconSize"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSizeUnits"]) ? $context["smileBtnIconSizeUnits"] : null), "html", null, true);
            echo "!important;
\t\t}
\t\t.mbs-smiles-wrapper {
\t\t\twidth: ";
            // line 67
            echo twig_escape_filter($this->env, (isset($context["smileWrapperIconSizeWidth"]) ? $context["smileWrapperIconSizeWidth"] : null), "html", null, true);
            echo "px;
\t\t}
\t\t.mbs-sw-one-smile {
\t\t\twidth: ";
            // line 70
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconWidthAndHeightSize"]) ? $context["smileBtnIconWidthAndHeightSize"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSizeUnits"]) ? $context["smileBtnIconSizeUnits"] : null), "html", null, true);
            echo "!important;
\t\t\theight: ";
            // line 71
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconWidthAndHeightSize"]) ? $context["smileBtnIconWidthAndHeightSize"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSizeUnits"]) ? $context["smileBtnIconSizeUnits"] : null), "html", null, true);
            echo "!important;
\t\t\tfont-size: ";
            // line 72
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSize"]) ? $context["smileBtnIconSize"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSizeUnits"]) ? $context["smileBtnIconSizeUnits"] : null), "html", null, true);
            echo "!important;
\t\t\tline-height: ";
            // line 73
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSize"]) ? $context["smileBtnIconSize"] : null), "html", null, true);
            echo twig_escape_filter($this->env, (isset($context["smileBtnIconSizeUnits"]) ? $context["smileBtnIconSizeUnits"] : null), "html", null, true);
            echo "!important;
\t\t}

\t\t.ui.form input, .ui.form textarea {
\t\t\tborder-color: ";
            // line 77
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-border-color", array(), "array"), "html", null, true);
            echo "!important;
\t\t\tbackground-color: ";
            // line 78
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-background-color", array(), "array"), "html", null, true);
            echo "!important;
\t\t\t";
            // line 80
            echo "\t\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "input-text-color", array(), "array", true, true)) {
                // line 81
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-text-color", array(), "array"), "html", null, true);
                echo "!important;
\t\t\t";
            }
            // line 83
            echo "\t\t}

\t\t.ui.form input:focus, .ui.form textarea:focus {
\t\t\tborder-color: ";
            // line 86
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-border-focus-color", array(), "array"), "html", null, true);
            echo "!important;
\t\t\tbackground-color: ";
            // line 87
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-background-focus-color", array(), "array"), "html", null, true);
            echo "!important;
\t\t}

\t\t.ui.form input::-webkit-input-placeholder { color: ";
            // line 90
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important; }
\t\t.ui.form textarea::-webkit-input-placeholder { color: ";
            // line 91
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important; }
\t\t.ui.form input:-moz-placeholder { color: ";
            // line 92
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important;}
\t\t.ui.form textarea:-moz-placeholder { color: ";
            // line 93
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important;}
\t\t.ui.form input::-moz-placeholder {color: ";
            // line 94
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important;}
\t\t.ui.form textarea::-moz-placeholder {color: ";
            // line 95
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important;}
\t\t.ui.form input:-ms-input-placeholder {color: ";
            // line 96
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important;}
\t\t.ui.form textarea:-ms-input-placeholder {color: ";
            // line 97
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "input-placeholder-color", array(), "array"), "html", null, true);
            echo "!important;}

\t\t";
            // line 100
            echo "\t\t";
            if ($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array(), "any", false, true), "general", array(), "any", false, true), "label-text-color", array(), "array", true, true)) {
                // line 101
                echo "\t\t\t.ui.form label {
\t\t\t\tcolor: ";
                // line 102
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "label-text-color", array(), "array"), "html", null, true);
                echo "!important;
\t\t\t}
\t\t";
            }
            // line 105
            echo "\t";
        }
        // line 106
        echo "
\t#mp-profile .ui.container {
\t\twidth: ";
        // line 108
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "profile", array()), "container-max-width", array(), "array"), "html", null, true);
        echo "!important;
\t}

\t.mp-profile-header {
\t\tbackground-color: ";
        // line 112
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "profile", array()), "header-background-color", array(), "array"), "html", null, true);
        echo "!important;
\t\tbackground-color: ";
        // line 113
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "profile", array()), "avatar-style", array(), "array"), "html", null, true);
        echo "!important;
\t}

\t";
        // line 116
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "avatar-style", array(), "array") == "round")) {
            // line 117
            echo "\t\t.sc-membership .mp-avatar,
\t\t.sc-membership .mp-avatar img,
\t\t.sc-membership .mp-avatar .mp-update-avatar-overlay,
\t\t.sc-membership .mp-user-card .mp-user-avatar,
\t\t.sc-membership .mp-user-card .mp-user-avatar img,
\t\t.sc-membership .mp-group-card .mp-group-logo,
\t\t.sc-membership .mp-group-card .mp-group-logo img,
\t\t#conversations .conversation-image,
\t\t#conversations .mp-message-avatar,
\t\t#conversations .mp-message-avatar img,
\t\t.sc-membership .mp-activity-container .mp-activity-header-image,
\t\t.sc-membership .mp-activity-container .mp-activity-header-image img,
\t\t.sc-membership .mp-activity-post-form .mp-activity-post-avatar,
\t\t.sc-membership .mp-activity-post-form .mp-activity-post-avatar img,
\t\t.sc-membership .mp-logo,
\t\t.sc-membership .mp-logo img,
\t\t.sc-membership .mp-logo .mp-update-logo-overlay,
\t\t.sc-membership .mp-activity-container .activity-author-group,
\t\t.sc-membership .mp-activity-container .activity-author-user,
\t\t.sc-membership .mp-activity-container .comment-container .avatar,
\t\t.sc-membership .mp-activity-container .comment-container .avatar img,
\t\t.sc-membership .mp-activity-container .mp-comment-form-author,
\t\t.sc-membership .mp-activity-container .mp-comment-form-author img,
\t\t.sc-membership .mp-activity-container .menu img.avatar
\t\t{
\t\t\tborder-radius: 5px;
\t\t}
\t";
        }
        // line 145
        echo "
\t";
        // line 146
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "avatar-style", array(), "array") == "circle")) {
            // line 147
            echo "\t\t.sc-membership .mp-avatar,
\t\t.sc-membership .mp-avatar img,
\t\t.sc-membership .mp-avatar .mp-update-avatar-overlay,
\t\t.sc-membership .mp-user-card .mp-user-avatar,
\t\t.sc-membership .mp-user-card .mp-user-avatar img,
\t\t.sc-membership .mp-group-card .mp-group-logo,
\t\t.sc-membership .mp-group-card .mp-group-logo img,
\t\t#conversations .conversation-image,
\t\t#conversations .mp-message-avatar,
\t\t#conversations .mp-message-avatar img,
\t\t.sc-membership .mp-activity-container .mp-activity-header-image,
\t\t.sc-membership .mp-activity-container .mp-activity-header-image img,
\t\t.sc-membership .mp-activity-post-form .mp-activity-post-avatar,
\t\t.sc-membership .mp-activity-post-form .mp-activity-post-avatar img,
\t\t.sc-membership .mp-logo,
\t\t.sc-membership .mp-logo img,
\t\t.sc-membership .mp-logo .mp-update-logo-overlay,
\t\t.sc-membership .mp-activity-container .activity-author-group,
\t\t.sc-membership .mp-activity-container .activity-author-user,
\t\t.sc-membership .mp-activity-container .comment-container .avatar,
\t\t.sc-membership .mp-activity-container .comment-container .avatar img,
\t\t.sc-membership .mp-activity-container .mp-comment-form-author,
\t\t.sc-membership .mp-activity-container .mp-comment-form-author img,
\t\t.sc-membership .mp-activity-container .menu img.avatar
\t\t{
\t\t\tborder-radius: 50%;
\t\t}

\t";
        }
        // line 175
        echo "\t

\t";
        // line 177
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "general", array()), "avatar-style", array(), "array") == "square")) {
            // line 178
            echo "\t\t.sc-membership .mp-avatar,
\t\t.sc-membership .mp-avatar img,
\t\t.sc-membership .mp-avatar .mp-update-avatar-overlay,
\t\t.sc-membership .mp-user-card .mp-user-avatar,
\t\t.sc-membership .mp-user-card .mp-user-avatar img,
\t\t.sc-membership .mp-group-card .mp-group-logo,
\t\t.sc-membership .mp-group-card .mp-group-logo img,
\t\t#conversations .conversation-image,
\t\t#conversations .mp-message-avatar,
\t\t#conversations .mp-message-avatar img,
\t\t.sc-membership .mp-activity-container .mp-activity-header-image,
\t\t.sc-membership .mp-activity-container .mp-activity-header-image img,
\t\t.sc-membership .mp-activity-post-form .mp-activity-post-avatar,
\t\t.sc-membership .mp-activity-post-form .mp-activity-post-avatar img,
\t\t.sc-membership .mp-logo,
\t\t.sc-membership .mp-logo img,
\t\t.sc-membership .mp-logo .mp-update-logo-overlay,
\t\t.sc-membership .mp-activity-container .activity-author-group,
\t\t.sc-membership .mp-activity-container .activity-author-user,
\t\t.sc-membership .mp-activity-container .comment-container .avatar,
\t\t.sc-membership .mp-activity-container .comment-container .avatar img,
\t\t.sc-membership .mp-activity-container .mp-comment-form-author,
\t\t.sc-membership .mp-activity-container .mp-comment-form-author img,
\t\t.sc-membership .mp-activity-container .menu img.avatar
\t\t{
\t\t\tborder-radius: 0;
\t\t}
\t";
        }
        // line 206
        echo "
\t";
        // line 207
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "profile", array()), "show-display-name", array(), "array") == "false")) {
            // line 208
            echo "\t\t.sc-membership .mp-cover-container .mp-user-display-name {
\t\t\tdisplay: none;
\t\t}
\t";
        }
        // line 212
        echo "
\t";
        // line 213
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "auth", array()), "login-secondary-button", array(), "array") == "false")) {
            // line 214
            echo "\t\t.sc-membership .ui.button.mp-login-secondary-button {
\t\t\tdisplay: none;
\t\t}
\t";
        }
        // line 218
        echo "
    ";
        // line 219
        if (($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "members", array()), "show-friends-and-followers", array(), "array") != "true")) {
            // line 220
            echo "        .mp-social-stats {
            display: none!important;
        }
    ";
        }
        // line 224
        echo "\t";
        // line 225
        echo "\t";
        // line 226
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-color-check", array(), "array") == 1))) {
            // line 227
            echo "\t\t.ui.modals .ui.button.primary,
\t\t.sc-membership .ui.button.primary {
\t\t\t";
            // line 229
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 230
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 231
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 233
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-family-check", array(), "array") == 1)) {
                // line 234
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 236
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-color-check", array(), "array") == 1)) {
                // line 237
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "primary-buttons-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 239
            echo "\t\t}
\t";
        }
        // line 241
        echo "\t";
        // line 242
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-color-check", array(), "array") == 1))) {
            // line 243
            echo "\t\t.ui.modals .ui.secondary.button,
\t\t.sc-membership .ui.button.secondary:not(.icon) {
\t\t\t";
            // line 245
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 246
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 247
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 249
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-family-check", array(), "array") == 1)) {
                // line 250
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 252
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-color-check", array(), "array") == 1)) {
                // line 253
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "secondary-buttons-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 255
            echo "\t\t}
\t";
        }
        // line 257
        echo "\t";
        // line 258
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-color-check", array(), "array") == 1))) {
            // line 259
            echo "\t\t.entry-header .entry-title {
\t\t\t";
            // line 260
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 261
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 262
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 264
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-family-check", array(), "array") == 1)) {
                // line 265
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 267
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-color-check", array(), "array") == 1)) {
                // line 268
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "page-header-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 270
            echo "\t\t}
\t";
        }
        // line 272
        echo "\t";
        // line 273
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-color-check", array(), "array") == 1))) {
            // line 274
            echo "\t\t.sc-membership input[type=\"text\"],
\t\t/*.sc-membership input[type=\"password\"],*/
\t\t/*.sc-membership input[type=\"email\"],*/
\t\t.sc-membership .ui.form input[type=\"text\"],
\t\t.sc-membership .ui.form input[type=\"text\"]:focus,
\t\t.sc-membership .ui.form input[type=\"password\"],
\t\t.sc-membership .ui.form input[type=\"email\"] {
\t\t\t";
            // line 281
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 282
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 283
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 285
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-family-check", array(), "array") == 1)) {
                // line 286
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 288
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-color-check", array(), "array") == 1)) {
                // line 289
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "text-input-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 291
            echo "\t\t}
\t";
        }
        // line 293
        echo "\t";
        // line 294
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-color-check", array(), "array") == 1))) {
            // line 295
            echo "\t\t.sc-membership .ui.form label {
\t\t\t";
            // line 296
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 297
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 298
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 300
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-family-check", array(), "array") == 1)) {
                // line 301
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 303
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-color-check", array(), "array") == 1)) {
                // line 304
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "labels-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 306
            echo "\t\t}
\t";
        }
        // line 308
        echo "\t";
        // line 309
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-color-check", array(), "array") == 1))) {
            // line 310
            echo "\t\t.sc-membership .ui.form label small {
\t\t\t";
            // line 311
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 312
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 313
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 315
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-family-check", array(), "array") == 1)) {
                // line 316
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 318
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-color-check", array(), "array") == 1)) {
                // line 319
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "small-labels-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 321
            echo "\t\t}
\t";
        }
        // line 323
        echo "\t";
        // line 324
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-color-check", array(), "array") == 1))) {
            // line 325
            echo "\t\t.sc-membership .ui.form a {
\t\t\t";
            // line 326
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 327
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 328
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 330
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-family-check", array(), "array") == 1)) {
                // line 331
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 333
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-color-check", array(), "array") == 1)) {
                // line 334
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "general", array()), "links-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 336
            echo "\t\t}
\t";
        }
        // line 338
        echo "\t";
        // line 339
        echo "\t";
        // line 340
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-color-check", array(), "array") == 1))) {
            // line 341
            echo "\t\t.sc-membership .mp-user-display-name {
\t\t\t";
            // line 342
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 343
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 344
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 346
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-family-check", array(), "array") == 1)) {
                // line 347
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 349
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-color-check", array(), "array") == 1)) {
                // line 350
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "user-name-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 352
            echo "\t\t}
\t";
        }
        // line 354
        echo "\t";
        // line 355
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-color-check", array(), "array") == 1))) {
            // line 356
            echo "\t\t.sc-membership .mp-profile-social-stats a.statistic div.value {
\t\t\t";
            // line 357
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 358
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 359
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 361
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-family-check", array(), "array") == 1)) {
                // line 362
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 364
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-color-check", array(), "array") == 1)) {
                // line 365
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 367
            echo "\t\t}
\t";
        }
        // line 369
        echo "\t";
        // line 370
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-color-check", array(), "array") == 1))) {
            // line 371
            echo "\t\t.sc-membership .mp-profile-social-stats a.statistic div.label {
\t\t\t";
            // line 372
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 373
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 374
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 376
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-family-check", array(), "array") == 1)) {
                // line 377
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 379
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-color-check", array(), "array") == 1)) {
                // line 380
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "counters-label-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 382
            echo "\t\t}
\t";
        }
        // line 384
        echo "\t";
        // line 385
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-color-check", array(), "array") == 1))) {
            // line 386
            echo "\t\t.sc-membership .profile-nav-menu a.item,
\t\t.sc-membership .profile-nav-menu .ui.dropdown .menu a.item {
\t\t\t";
            // line 388
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 389
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 390
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 392
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-family-check", array(), "array") == 1)) {
                // line 393
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 395
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-color-check", array(), "array") == 1)) {
                // line 396
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 398
            echo "\t\t}
\t";
        }
        // line 400
        echo "\t";
        // line 401
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-color-check", array(), "array") == 1))) {
            // line 402
            echo "\t\t.sc-membership .profile-nav-menu a.item:hover,
\t\t.sc-membership .profile-nav-menu .ui.dropdown .menu a.item:hover {
\t\t\t";
            // line 404
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 405
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 406
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 408
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-family-check", array(), "array") == 1)) {
                // line 409
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 411
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-color-check", array(), "array") == 1)) {
                // line 412
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "tab-menu-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 414
            echo "\t\t}
\t";
        }
        // line 416
        echo "\t";
        // line 417
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-color-check", array(), "array") == 1))) {
            // line 418
            echo "\t\t.sc-membership .mp-activity-container .mp-form-textarea {
\t\t\t";
            // line 419
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 420
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 421
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 423
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-family-check", array(), "array") == 1)) {
                // line 424
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 426
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-color-check", array(), "array") == 1)) {
                // line 427
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "message-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 429
            echo "\t\t}
\t";
        }
        // line 431
        echo "\t";
        // line 432
        echo "\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-color-check", array(), "array") == 1))) {
            // line 433
            echo "\t\t.ui.modals .ui.secondary.button.icon,
\t\t.sc-membership .ui.button.secondary.icon {
\t\t";
            // line 435
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 436
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 437
                echo "\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t";
            }
            // line 439
            echo "\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-color-check", array(), "array") == 1)) {
                // line 440
                echo "\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t";
            }
            // line 442
            echo "\t\t}
\t";
        }
        // line 444
        echo "\t";
        // line 445
        echo "\t";
        if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-color-check", array(), "array") == 1))) {
            // line 446
            echo "\t\t.sc-membership .post-form-buttons .icon.button:hover {
\t\t\t";
            // line 447
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 448
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 449
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 451
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-color-check", array(), "array") == 1)) {
                // line 452
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-buttons-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 454
            echo "\t\t}
\t";
        }
        // line 456
        echo "\t";
        // line 457
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-color-check", array(), "array") == 1))) {
            // line 458
            echo "\t\t.sc-membership .mp-activity .ui.basic a,
\t\t.sc-membership .mp-activity-comments .mp-comment-content a.author,
\t\t.sc-membership .mp-activity-header-title a {
\t\t\t";
            // line 461
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 462
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 463
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 465
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-family-check", array(), "array") == 1)) {
                // line 466
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 468
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-color-check", array(), "array") == 1)) {
                // line 469
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-user-name-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 471
            echo "\t\t}
\t";
        }
        // line 473
        echo "\t";
        // line 474
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-color-check", array(), "array") == 1))) {
            // line 475
            echo "\t\t.sc-membership .mp-activity-content {
\t\t\t";
            // line 476
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 477
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 478
                echo "\t\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t\t";
            }
            // line 480
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-family-check", array(), "array") == 1)) {
                // line 481
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 483
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-color-check", array(), "array") == 1)) {
                // line 484
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-text-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 486
            echo "\t\t}
\t";
        }
        // line 488
        echo "\t";
        // line 489
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-color-check", array(), "array") == 1))) {
            // line 490
            echo "\t\t.sc-membership .mp-activity .ui.basic,
\t\t.sc-membership .mp-activity-header-title {
\t\t\t";
            // line 492
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 493
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 494
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 496
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-family-check", array(), "array") == 1)) {
                // line 497
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 499
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-color-check", array(), "array") == 1)) {
                // line 500
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-other-text-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 502
            echo "\t\t}
\t";
        }
        // line 504
        echo "

\t";
        // line 507
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-color-check", array(), "array") == 1))) {
            // line 508
            echo "\t\t.sc-membership .mp-activity-comments .mp-comment-content .text {
\t\t\t";
            // line 509
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 510
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 511
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 513
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-family-check", array(), "array") == 1)) {
                // line 514
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 516
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-color-check", array(), "array") == 1)) {
                // line 517
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-comment-text-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 519
            echo "\t\t}
\t";
        }
        // line 521
        echo "\t";
        // line 522
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-color-check", array(), "array") == 1))) {
            // line 523
            echo "\t\t.sc-membership .mp-activity-comments .date,
\t\t.sc-membership .mp-activity-header-title .date {
\t\t\t";
            // line 525
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 526
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 527
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 529
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-family-check", array(), "array") == 1)) {
                // line 530
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 532
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-color-check", array(), "array") == 1)) {
                // line 533
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-date-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 535
            echo "\t\t}
\t";
        }
        // line 537
        echo "\t";
        // line 538
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-color-check", array(), "array") == 1))) {
            // line 539
            echo "\t\t.sc-membership .mp-activity-actions a {
\t\t\t";
            // line 540
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 541
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 542
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 544
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-family-check", array(), "array") == 1)) {
                // line 545
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 547
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-color-check", array(), "array") == 1)) {
                // line 548
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 550
            echo "\t\t}
\t";
        }
        // line 552
        echo "\t";
        // line 553
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-color-check", array(), "array") == 1))) {
            // line 554
            echo "\t\t.sc-membership .mp-activity-actions a:hover {
\t\t\t";
            // line 555
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 556
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 557
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 559
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-family-check", array(), "array") == 1)) {
                // line 560
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 562
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-color-check", array(), "array") == 1)) {
                // line 563
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "post-icons-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 565
            echo "\t\t}
\t";
        }
        // line 567
        echo "\t";
        // line 568
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-color-check", array(), "array") == 1))) {
            // line 569
            echo "\t\t.sc-membership .mp-activity .mp-activity-content.mp-activity-removed {
\t\t\t";
            // line 570
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 571
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 572
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 574
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-family-check", array(), "array") == 1)) {
                // line 575
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 577
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-color-check", array(), "array") == 1)) {
                // line 578
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "deleted-post-entry-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 580
            echo "\t\t}
\t";
        }
        // line 582
        echo "\t";
        // line 583
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-color-check", array(), "array") == 1))) {
            // line 584
            echo "\t\t.sc-membership .mp-activity-menu .item {
\t\t\t";
            // line 585
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 586
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 587
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 589
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-family-check", array(), "array") == 1)) {
                // line 590
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 592
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-color-check", array(), "array") == 1)) {
                // line 593
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 595
            echo "\t\t}
\t";
        }
        // line 597
        echo "\t";
        // line 598
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-color-check", array(), "array") == 1))) {
            // line 599
            echo "\t\t.sc-membership .mp-activity-menu .item:hover {
\t\t\t";
            // line 600
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 601
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 602
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 604
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-family-check", array(), "array") == 1)) {
                // line 605
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 607
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-color-check", array(), "array") == 1)) {
                // line 608
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "profile", array()), "menu-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 610
            echo "\t\t}
\t";
        }
        // line 612
        echo "
\t";
        // line 614
        echo "\t";
        // line 615
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-color-check", array(), "array") == 1))) {
            // line 616
            echo "\t\t.sc-membership .activity-filter {
\t\t\t";
            // line 617
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 618
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 619
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 621
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-family-check", array(), "array") == 1)) {
                // line 622
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 624
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-color-check", array(), "array") == 1)) {
                // line 625
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 627
            echo "\t\t}
\t";
        }
        // line 629
        echo "\t";
        // line 630
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-color-check", array(), "array") == 1))) {
            // line 631
            echo "\t\t.sc-membership .activity-filter:hover {
\t\t\t";
            // line 632
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 633
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 634
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 636
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-family-check", array(), "array") == 1)) {
                // line 637
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 639
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-color-check", array(), "array") == 1)) {
                // line 640
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 642
            echo "\t\t}
\t";
        }
        // line 644
        echo "\t";
        // line 645
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-color-check", array(), "array") == 1))) {
            // line 646
            echo "\t\t.sc-membership .activity-filter .header,
\t\t.sc-membership .activity-filter .activity-filter-item,
\t\t.sc-membership .activity-filter .menu .activity-type-item {
\t\t\t";
            // line 649
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 650
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 651
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 653
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-family-check", array(), "array") == 1)) {
                // line 654
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 656
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-color-check", array(), "array") == 1)) {
                // line 657
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 659
            echo "\t\t}
\t";
        }
        // line 661
        echo "\t";
        // line 662
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-color-check", array(), "array") == 1))) {
            // line 663
            echo "\t\t.sc-membership .activity-filter .header:hover,
\t\t.sc-membership .activity-filter .activity-filter-item:hover,
\t\t.sc-membership .activity-filter .menu .activity-type-item:hover {
\t\t\t";
            // line 666
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 667
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 668
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 670
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-family-check", array(), "array") == 1)) {
                // line 671
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 673
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-color-check", array(), "array") == 1)) {
                // line 674
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "activity", array()), "filter-button-menu-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 676
            echo "\t\t}
\t";
        }
        // line 678
        echo "
\t";
        // line 680
        echo "\t";
        // line 681
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-color-check", array(), "array") == 1))) {
            // line 682
            echo "\t\t.sc-membership .mp-user-card a.header {
\t\t\t";
            // line 683
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 684
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 685
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 687
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-family-check", array(), "array") == 1)) {
                // line 688
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 690
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-color-check", array(), "array") == 1)) {
                // line 691
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 693
            echo "\t\t}
\t";
        }
        // line 695
        echo "\t";
        // line 696
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-color-check", array(), "array") == 1))) {
            // line 697
            echo "\t\t.sc-membership .mp-user-card a.header:hover {
\t\t\t";
            // line 698
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 699
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 700
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 702
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-family-check", array(), "array") == 1)) {
                // line 703
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 705
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-color-check", array(), "array") == 1)) {
                // line 706
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "user-name-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 708
            echo "\t\t}
\t";
        }
        // line 710
        echo "\t";
        // line 711
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-color-check", array(), "array") == 1))) {
            // line 712
            echo "\t\t.sc-membership .mp-user-card .statistic div.value {
\t\t\t";
            // line 713
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 714
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 715
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 717
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-family-check", array(), "array") == 1)) {
                // line 718
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 720
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-color-check", array(), "array") == 1)) {
                // line 721
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 723
            echo "\t\t}
\t";
        }
        // line 725
        echo "\t";
        // line 726
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-color-check", array(), "array") == 1))) {
            // line 727
            echo "\t\t.sc-membership .mp-user-card .statistic div.label {
\t\t\t";
            // line 728
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 729
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 730
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 732
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-family-check", array(), "array") == 1)) {
                // line 733
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 735
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-color-check", array(), "array") == 1)) {
                // line 736
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "members", array()), "counters-label-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 738
            echo "\t\t}
\t";
        }
        // line 740
        echo "\t";
        // line 741
        echo "\t";
        // line 742
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-color-check", array(), "array") == 1))) {
            // line 743
            echo "\t\t.sc-membership .groups-tab-items a.item {
\t\t\t";
            // line 744
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 745
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 746
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 748
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-family-check", array(), "array") == 1)) {
                // line 749
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 751
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-color-check", array(), "array") == 1)) {
                // line 752
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "tab-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 754
            echo "\t\t}
\t";
        }
        // line 756
        echo "\t";
        // line 757
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-color-check", array(), "array") == 1))) {
            // line 758
            echo "\t\t.sc-membership .ui.card.mp-group-card a.header {
\t\t\t";
            // line 759
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 760
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 761
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 763
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-family-check", array(), "array") == 1)) {
                // line 764
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 766
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-color-check", array(), "array") == 1)) {
                // line 767
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 769
            echo "\t\t}
\t";
        }
        // line 771
        echo "\t";
        // line 772
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-color-check", array(), "array") == 1))) {
            // line 773
            echo "\t\t.sc-membership .ui.card.mp-group-card a.header:hover {
\t\t\t";
            // line 774
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 775
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 776
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 778
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-family-check", array(), "array") == 1)) {
                // line 779
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 781
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-color-check", array(), "array") == 1)) {
                // line 782
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "user-name-hover-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 784
            echo "\t\t}
\t";
        }
        // line 786
        echo "\t";
        // line 787
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-color-check", array(), "array") == 1))) {
            // line 788
            echo "\t\t.sc-membership .ui.card.mp-group-card .mbs-group-g-type small {
\t\t\t";
            // line 789
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 790
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 791
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 793
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-family-check", array(), "array") == 1)) {
                // line 794
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 796
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-color-check", array(), "array") == 1)) {
                // line 797
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "group-type-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 799
            echo "\t\t}
\t";
        }
        // line 801
        echo "\t";
        // line 802
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-color-check", array(), "array") == 1))) {
            // line 803
            echo "\t\t.sc-membership .ui.card.mp-group-card .mbs-group-followers small {
\t\t\t";
            // line 804
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 805
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 806
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 808
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-family-check", array(), "array") == 1)) {
                // line 809
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 811
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-color-check", array(), "array") == 1)) {
                // line 812
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "groups", array()), "follower-count-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 814
            echo "\t\t}
\t";
        }
        // line 816
        echo "
\t";
        // line 818
        echo "\t";
        // line 819
        echo "\t";
        if (((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-size-check", array(), "array") == 1) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-family-check", array(), "array") == 1)) || ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-color-check", array(), "array") == 1))) {
            // line 820
            echo "\t\t.sc-membership .ui.message {
\t\t\t";
            // line 821
            if ((($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-size-check", array(), "array") == 1) && twig_in_filter($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(            // line 822
(isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-unit-select", array(), "array"), array(0 => "px", 1 => "em")))) {
                // line 823
                echo "\t\t\t\tfont-size: ";
                echo twig_escape_filter($this->env, ($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-size-number", array(), "array") . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-unit-select", array(), "array")), "html", null, true);
                echo "  !important;
\t\t\t";
            }
            // line 825
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-family-check", array(), "array") == 1)) {
                // line 826
                echo "\t\t\t\tfont-family: \"";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-font-family-select", array(), "array"), "html", null, true);
                echo "\" !important;
\t\t\t";
            }
            // line 828
            echo "\t\t\t";
            if (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-color-check", array(), "array") == 1)) {
                // line 829
                echo "\t\t\t\tcolor: ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "design", array()), "fonts", array()), "search", array()), "nothing-found-text-color-input", array(), "array"), "html", null, true);
                echo " !important;
\t\t\t";
            }
            // line 831
            echo "\t\t}
\t";
        }
        // line 833
        echo "</style>
";
    }

    public function getTemplateName()
    {
        return "@design/styles.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  1942 => 833,  1938 => 831,  1932 => 829,  1929 => 828,  1923 => 826,  1920 => 825,  1914 => 823,  1912 => 822,  1911 => 821,  1908 => 820,  1905 => 819,  1903 => 818,  1900 => 816,  1896 => 814,  1890 => 812,  1887 => 811,  1881 => 809,  1878 => 808,  1872 => 806,  1870 => 805,  1869 => 804,  1866 => 803,  1863 => 802,  1861 => 801,  1857 => 799,  1851 => 797,  1848 => 796,  1842 => 794,  1839 => 793,  1833 => 791,  1831 => 790,  1830 => 789,  1827 => 788,  1824 => 787,  1822 => 786,  1818 => 784,  1812 => 782,  1809 => 781,  1803 => 779,  1800 => 778,  1794 => 776,  1792 => 775,  1791 => 774,  1788 => 773,  1785 => 772,  1783 => 771,  1779 => 769,  1773 => 767,  1770 => 766,  1764 => 764,  1761 => 763,  1755 => 761,  1753 => 760,  1752 => 759,  1749 => 758,  1746 => 757,  1744 => 756,  1740 => 754,  1734 => 752,  1731 => 751,  1725 => 749,  1722 => 748,  1716 => 746,  1714 => 745,  1713 => 744,  1710 => 743,  1707 => 742,  1705 => 741,  1703 => 740,  1699 => 738,  1693 => 736,  1690 => 735,  1684 => 733,  1681 => 732,  1675 => 730,  1673 => 729,  1672 => 728,  1669 => 727,  1666 => 726,  1664 => 725,  1660 => 723,  1654 => 721,  1651 => 720,  1645 => 718,  1642 => 717,  1636 => 715,  1634 => 714,  1633 => 713,  1630 => 712,  1627 => 711,  1625 => 710,  1621 => 708,  1615 => 706,  1612 => 705,  1606 => 703,  1603 => 702,  1597 => 700,  1595 => 699,  1594 => 698,  1591 => 697,  1588 => 696,  1586 => 695,  1582 => 693,  1576 => 691,  1573 => 690,  1567 => 688,  1564 => 687,  1558 => 685,  1556 => 684,  1555 => 683,  1552 => 682,  1549 => 681,  1547 => 680,  1544 => 678,  1540 => 676,  1534 => 674,  1531 => 673,  1525 => 671,  1522 => 670,  1516 => 668,  1514 => 667,  1513 => 666,  1508 => 663,  1505 => 662,  1503 => 661,  1499 => 659,  1493 => 657,  1490 => 656,  1484 => 654,  1481 => 653,  1475 => 651,  1473 => 650,  1472 => 649,  1467 => 646,  1464 => 645,  1462 => 644,  1458 => 642,  1452 => 640,  1449 => 639,  1443 => 637,  1440 => 636,  1434 => 634,  1432 => 633,  1431 => 632,  1428 => 631,  1425 => 630,  1423 => 629,  1419 => 627,  1413 => 625,  1410 => 624,  1404 => 622,  1401 => 621,  1395 => 619,  1393 => 618,  1392 => 617,  1389 => 616,  1386 => 615,  1384 => 614,  1381 => 612,  1377 => 610,  1371 => 608,  1368 => 607,  1362 => 605,  1359 => 604,  1353 => 602,  1351 => 601,  1350 => 600,  1347 => 599,  1344 => 598,  1342 => 597,  1338 => 595,  1332 => 593,  1329 => 592,  1323 => 590,  1320 => 589,  1314 => 587,  1312 => 586,  1311 => 585,  1308 => 584,  1305 => 583,  1303 => 582,  1299 => 580,  1293 => 578,  1290 => 577,  1284 => 575,  1281 => 574,  1275 => 572,  1273 => 571,  1272 => 570,  1269 => 569,  1266 => 568,  1264 => 567,  1260 => 565,  1254 => 563,  1251 => 562,  1245 => 560,  1242 => 559,  1236 => 557,  1234 => 556,  1233 => 555,  1230 => 554,  1227 => 553,  1225 => 552,  1221 => 550,  1215 => 548,  1212 => 547,  1206 => 545,  1203 => 544,  1197 => 542,  1195 => 541,  1194 => 540,  1191 => 539,  1188 => 538,  1186 => 537,  1182 => 535,  1176 => 533,  1173 => 532,  1167 => 530,  1164 => 529,  1158 => 527,  1156 => 526,  1155 => 525,  1151 => 523,  1148 => 522,  1146 => 521,  1142 => 519,  1136 => 517,  1133 => 516,  1127 => 514,  1124 => 513,  1118 => 511,  1116 => 510,  1115 => 509,  1112 => 508,  1109 => 507,  1105 => 504,  1101 => 502,  1095 => 500,  1092 => 499,  1086 => 497,  1083 => 496,  1077 => 494,  1075 => 493,  1074 => 492,  1070 => 490,  1067 => 489,  1065 => 488,  1061 => 486,  1055 => 484,  1052 => 483,  1046 => 481,  1043 => 480,  1037 => 478,  1035 => 477,  1034 => 476,  1031 => 475,  1028 => 474,  1026 => 473,  1022 => 471,  1016 => 469,  1013 => 468,  1007 => 466,  1004 => 465,  998 => 463,  996 => 462,  995 => 461,  990 => 458,  987 => 457,  985 => 456,  981 => 454,  975 => 452,  972 => 451,  966 => 449,  964 => 448,  963 => 447,  960 => 446,  957 => 445,  955 => 444,  951 => 442,  945 => 440,  942 => 439,  936 => 437,  934 => 436,  933 => 435,  929 => 433,  926 => 432,  924 => 431,  920 => 429,  914 => 427,  911 => 426,  905 => 424,  902 => 423,  896 => 421,  894 => 420,  893 => 419,  890 => 418,  887 => 417,  885 => 416,  881 => 414,  875 => 412,  872 => 411,  866 => 409,  863 => 408,  857 => 406,  855 => 405,  854 => 404,  850 => 402,  847 => 401,  845 => 400,  841 => 398,  835 => 396,  832 => 395,  826 => 393,  823 => 392,  817 => 390,  815 => 389,  814 => 388,  810 => 386,  807 => 385,  805 => 384,  801 => 382,  795 => 380,  792 => 379,  786 => 377,  783 => 376,  777 => 374,  775 => 373,  774 => 372,  771 => 371,  768 => 370,  766 => 369,  762 => 367,  756 => 365,  753 => 364,  747 => 362,  744 => 361,  738 => 359,  736 => 358,  735 => 357,  732 => 356,  729 => 355,  727 => 354,  723 => 352,  717 => 350,  714 => 349,  708 => 347,  705 => 346,  699 => 344,  697 => 343,  696 => 342,  693 => 341,  690 => 340,  688 => 339,  686 => 338,  682 => 336,  676 => 334,  673 => 333,  667 => 331,  664 => 330,  658 => 328,  656 => 327,  655 => 326,  652 => 325,  649 => 324,  647 => 323,  643 => 321,  637 => 319,  634 => 318,  628 => 316,  625 => 315,  619 => 313,  617 => 312,  616 => 311,  613 => 310,  610 => 309,  608 => 308,  604 => 306,  598 => 304,  595 => 303,  589 => 301,  586 => 300,  580 => 298,  578 => 297,  577 => 296,  574 => 295,  571 => 294,  569 => 293,  565 => 291,  559 => 289,  556 => 288,  550 => 286,  547 => 285,  541 => 283,  539 => 282,  538 => 281,  529 => 274,  526 => 273,  524 => 272,  520 => 270,  514 => 268,  511 => 267,  505 => 265,  502 => 264,  496 => 262,  494 => 261,  493 => 260,  490 => 259,  487 => 258,  485 => 257,  481 => 255,  475 => 253,  472 => 252,  466 => 250,  463 => 249,  457 => 247,  455 => 246,  454 => 245,  450 => 243,  447 => 242,  445 => 241,  441 => 239,  435 => 237,  432 => 236,  426 => 234,  423 => 233,  417 => 231,  415 => 230,  414 => 229,  410 => 227,  407 => 226,  405 => 225,  403 => 224,  397 => 220,  395 => 219,  392 => 218,  386 => 214,  384 => 213,  381 => 212,  375 => 208,  373 => 207,  370 => 206,  340 => 178,  338 => 177,  334 => 175,  303 => 147,  301 => 146,  298 => 145,  268 => 117,  266 => 116,  260 => 113,  256 => 112,  249 => 108,  245 => 106,  242 => 105,  236 => 102,  233 => 101,  230 => 100,  225 => 97,  221 => 96,  217 => 95,  213 => 94,  209 => 93,  205 => 92,  201 => 91,  197 => 90,  191 => 87,  187 => 86,  182 => 83,  176 => 81,  173 => 80,  169 => 78,  165 => 77,  157 => 73,  152 => 72,  147 => 71,  142 => 70,  136 => 67,  129 => 64,  126 => 63,  123 => 62,  121 => 56,  118 => 55,  115 => 54,  112 => 53,  107 => 50,  101 => 47,  98 => 46,  93 => 43,  85 => 37,  79 => 35,  76 => 34,  72 => 32,  65 => 27,  59 => 25,  57 => 24,  44 => 13,  38 => 11,  35 => 10,  31 => 8,  25 => 4,  23 => 3,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@design/styles.twig", "D:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\membership-by-supsystic\\src\\Membership\\Design\\views\\styles.twig");
    }
}
