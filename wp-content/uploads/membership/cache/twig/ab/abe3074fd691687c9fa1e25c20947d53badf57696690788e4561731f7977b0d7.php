<?php

/* @membership/backend/index.twig */
class __TwigTemplate_c6287bdf8b8f003bde48131410ba2765b4978408bb6b23b530b84e0fae91dc61 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@membership/backend/index.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'mainHeader' => array($this, 'block_mainHeader'),
            'main' => array($this, 'block_main'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@base/layouts/backend.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 2
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@membership/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"main\">
\t\t\t<i class=\"fa fa-cog\"></i>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"pages\">
\t\t\t<i class=\"fa fa-file-text-o\"></i>";
        // line 10
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pages")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"security\">
\t\t\t<i class=\"fa fa-lock\"></i>";
        // line 13
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Security")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"uploads\">
\t\t\t<i class=\"fa fa-upload\"></i>";
        // line 16
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Uploads")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"seo\">
\t\t\t<i class=\"fa fa-search\"></i>";
        // line 19
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("SEO")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"import\">
\t\t\t<i class=\"fa fa-download\"></i>";
        // line 22
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Data")), "html", null, true);
        echo "
\t\t</a>
        ";
        // line 24
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainContentTab"), "method"), "html", null, true);
        echo "
\t</div>
";
    }

    // line 28
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 29
        echo "\t<div class=\"sc-header\">
\t\t<h2>";
        // line 30
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "html", null, true);
        echo "</h2>
\t\t<button data-save-settings class=\"save-settings sc-button icon-button primary\">
\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t<span>";
        // line 33
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
\t\t</button>
\t</div>
";
    }

    // line 38
    public function block_main($context, array $blocks = array())
    {
        // line 39
        echo "
\t<div class=\"sc-tab-content active\" data-tab=\"main\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 45
        echo $context["options"]->getemailRowWithButton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Admin Email")),         // line 47
$context["options"]->getbutton(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test Email")), "admin-email-button", "tooltip"), "main[admin-email]", $this->getAttribute($this->getAttribute(        // line 53
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "admin-email", array(), "array"), "admin-email");
        // line 55
        echo "

\t\t\t\t\t";
        // line 57
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[messages]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 63
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "messages", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[messages]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 69
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "messages", array()) == "false"))), "messages");
        // line 72
        echo "

\t\t\t\t\t";
        // line 74
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[groups]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 80
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "groups", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[groups]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 86
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "groups", array()) == "false"))), "groups");
        // line 89
        echo "

\t\t\t\t\t";
        // line 91
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[friends]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 97
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "friends", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[friends]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 103
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "friends", array()) == "false"))), "friends");
        // line 106
        echo "

\t\t\t\t\t";
        // line 108
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activity")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[activity]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 114
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "activity", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[activity]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 120
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "activity", array()) == "false"))), "activity");
        // line 123
        echo "

\t\t\t\t\t";
        // line 125
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Followers")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[followers]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 131
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "followers", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[followers]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 137
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "followers", array()) == "false"))), "followers");
        // line 140
        echo "

                    ";
        // line 142
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Posts")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[posts]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 148
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "posts", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[posts]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 154
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "posts", array()) == "false"))), "posts");
        // line 157
        echo "

                    ";
        // line 159
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Comments")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "main[comments]", "value" => "true", "checked" => ($this->getAttribute($this->getAttribute(        // line 165
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "comments", array()) == "true")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "main[comments]", "value" => "false", "checked" => ($this->getAttribute($this->getAttribute(        // line 171
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "comments", array()) == "false"))), "comments");
        // line 174
        echo "

                    ";
        // line 176
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "adminMainSettingsOptions"), "method"), "html", null, true);
        echo "

\t\t\t\t\t";
        // line 178
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after registration to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-registration-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute(        // line 184
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-registration-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-registration-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 190
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-registration-action", array(), "array") == "redirect-to-url"))), "after-registration-action", "",         // line 194
$context["options"]->gettextInput("main[after-registration-redirect-url]", $this->getAttribute($this->getAttribute(        // line 196
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-registration-redirect-url", array(), "array")));
        // line 198
        echo "

\t\t\t\t\t";
        // line 200
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after login to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "name" => "main[after-login-action]", "value" => "redirect-to-profile", "checked" => ($this->getAttribute($this->getAttribute(        // line 206
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-login-action", array(), "array") == "redirect-to-profile")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-login-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 212
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-login-action", array(), "array") == "redirect-to-url"))), "after-login-action", "",         // line 216
$context["options"]->gettextInput("main[after-login-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 218
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-login-action-redirect-url", array(), "array")));
        // line 220
        echo "

\t\t\t\t\t";
        // line 222
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after logout to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-logout-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute(        // line 228
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-logout-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-logout-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 234
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-logout-action", array(), "array") == "redirect-to-url"))), "after-logout-action", "",         // line 238
$context["options"]->gettextInput("main[after-logout-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 240
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-logout-action-redirect-url", array(), "array")));
        // line 242
        echo "

\t\t\t\t\t";
        // line 244
        echo $context["options"]->getradioRowWithInput(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect after account is deleted to")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-main", "checked" => ($this->getAttribute($this->getAttribute(        // line 250
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-delete-account-action", array(), "array") == "redirect-to-main")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("URL")), "name" => "main[after-delete-account-action]", "value" => "redirect-to-url", "checked" => ($this->getAttribute($this->getAttribute(        // line 256
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-delete-account-action", array(), "array") == "redirect-to-url"))), "after-delete-account-action", "",         // line 260
$context["options"]->gettextInput("main[after-delete-account-action-redirect-url]", $this->getAttribute($this->getAttribute(        // line 262
(isset($context["settings"]) ? $context["settings"] : null), "main", array()), "after-delete-account-action-redirect-url", array(), "array")));
        // line 264
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
    <div class=\"sc-tab-content\" data-tab=\"pages\">
        <div class=\"mp-action-panel\">
            <button class=\"create-pages sc-button icon-button primary\">
                <i class=\"fa fa-plus\"></i>
                <span>";
        // line 274
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create all unassigned pages")), "html", null, true);
        echo "</span>
            </button>
            <button class=\"save-pages sc-button icon-button primary\">
                <i class=\"fa fa-save\"></i>
                <span>";
        // line 278
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Pages")), "html", null, true);
        echo "</span>
            </button>
        </div>
        <div class=\"mp-options\">
            <div class=\"row\">
                <div class=\"col-md-12\">
                    ";
        // line 284
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["pages"]) ? $context["pages"] : null));
        foreach ($context['_seq'] as $context["slug"] => $context["page"]) {
            // line 285
            echo "\t\t\t\t\t\t";
            if (($context["slug"] == "contact_form")) {
                // line 286
                echo "\t\t\t\t\t\t\t";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainPagesTab", 1 => array(0 => $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "pages", array()))), "method"), "html", null, true);
                echo "
\t\t\t\t\t\t";
            } else {
                // line 288
                echo "\t\t\t\t\t\t\t<div class=\"mp-option mp-page-option\" data-page-slug=\"";
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t\t\t<span title=\"";
                // line 292
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "\">";
                echo twig_escape_filter($this->env, $this->getAttribute($context["page"], "title", array()), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input-with-button\">
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-button\" ";
                // line 297
                if ($this->getAttribute($context["page"], "id", array())) {
                    echo "style=\"display: none\"";
                }
                echo ">
\t\t\t\t\t\t\t\t\t\t\t\t<button class=\"sc-button icon-button create-page-button primary\" data-page-slug=\"";
                // line 298
                echo twig_escape_filter($this->env, $context["slug"], "html", null, true);
                echo "\">
\t\t\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-plus\"></i>
\t\t\t\t\t\t\t\t\t\t\t\t\t<span>";
                // line 300
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create page")), "html", null, true);
                echo "</span>
\t\t\t\t\t\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-select\">
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 304
                echo $this->env->getExtension('Membership_Base_Twig')->callFunction("wp_dropdown_pages", array("name" => (("pages[" . $context["slug"]) . "]"), "selected" => $this->getAttribute($context["page"], "id", array()), "class" => "sc-input wp-pages-list", "echo" => false, "show_option_none" => "Select Page", "option_none_value" => "__none"));
                echo "
\t\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t";
            }
            // line 311
            echo "                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['slug'], $context['page'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 312
        echo "
                </div>
            </div>
        </div>

    </div>
\t<div class=\"sc-tab-content\" data-tab=\"security\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 323
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Global Site Access")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Everyone")), "name" => "security[global-site-access]", "value" => "everyone", "checked" => ($this->getAttribute($this->getAttribute(        // line 328
(isset($context["settings"]) ? $context["settings"] : null), "security", array()), "global-site-access", array(), "array") == "everyone")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Site Accessible to Logged In Users")), "name" => "security[global-site-access]", "value" => "logged-in-users", "checked" => ($this->getAttribute($this->getAttribute(        // line 334
(isset($context["settings"]) ? $context["settings"] : null), "security", array()), "global-site-access", array(), "array") == "logged-in-users"))), "global-site-access");
        // line 337
        echo "

                    ";
        // line 339
        echo $context["options"]->getradioRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Protect all Pages")), array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "security[protect-all-pages]", "value" => "yes", "checked" => ($this->getAttribute($this->getAttribute(        // line 344
(isset($context["settings"]) ? $context["settings"] : null), "security", array()), "protect-all-pages", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "security[protect-all-pages]", "value" => "no", "checked" => ($this->getAttribute($this->getAttribute(        // line 350
(isset($context["settings"]) ? $context["settings"] : null), "security", array()), "protect-all-pages", array(), "array") == "no"))), "protect-all-pages");
        // line 353
        echo "

\t\t\t\t\t";
        // line 355
        echo $context["options"]->getrow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Redirect from backend login screen to membership login page")),         // line 356
$context["options"]->getradioInput(array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Yes")), "name" => "security[backend-login-screen-redirect]", "value" => "yes", "checked" => ($this->getAttribute($this->getAttribute(        // line 360
(isset($context["settings"]) ? $context["settings"] : null), "security", array()), "backend-login-screen-redirect", array(), "array") == "yes")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No")), "name" => "security[backend-login-screen-redirect]", "value" => "no", "checked" => ($this->getAttribute($this->getAttribute(        // line 366
(isset($context["settings"]) ? $context["settings"] : null), "security", array()), "backend-login-screen-redirect", array(), "array") == "no")))), "backend-login-screen-redirect");
        // line 369
        echo "

\t\t\t\t\t";
        // line 371
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Blocked IP Addresses")), "security[blocked-ip]", (($this->getAttribute($this->getAttribute(        // line 373
(isset($context["settings"]) ? $context["settings"] : null), "security", array(), "any", false, true), "blocked-ip", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "security", array(), "any", false, true), "blocked-ip", array(), "array"), $this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "blocked-ip"), "method"))) : ($this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "blocked-ip"), "method"))), "blocked-ip");
        // line 375
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"uploads\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t<div class=\"mp-option\" id=\"max-image-size\">
\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t";
        // line 388
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum Image Size")));
        echo "
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 393
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads", array()), "max-image-size", array(), "array"), "width", array()), "html", null, true);
        echo "\" name=\"uploads[max-image-size][width]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
        // line 397
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads", array()), "max-image-size", array(), "array"), "height", array()), "html", null, true);
        echo "\" name=\"uploads[max-image-size][height]\">
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t<input type=\"hidden\"
\t\t\t\t\t\t\t   class=\"sc-input\"
\t\t\t\t\t\t\t   name=\"uploads[max-file-size]\"
\t\t\t\t\t\t\t   value=\"";
        // line 408
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "uploads", array()), "max-file-size", array(), "array"), "html", null, true);
        echo "\"
\t\t\t\t\t\t\t   max=\"";
        // line 409
        echo twig_escape_filter($this->env, (isset($context["maxFileUpload"]) ? $context["maxFileUpload"] : null), "html", null, true);
        echo "\"
\t\t\t\t\t\t>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 413
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum File Size (Mb)")), "uploads[max-file-size-mb]", ($this->getAttribute($this->getAttribute(        // line 416
(isset($context["settings"]) ? $context["settings"] : null), "uploads", array()), "max-file-size", array(), "array") / (1024 * 1024)), "max-file-size-mb", "", (("max=\"" . (        // line 419
(isset($context["maxFileUpload"]) ? $context["maxFileUpload"] : null) / (1024 * 1024))) . "\""));
        // line 420
        echo "
\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t<div class=\"mp-option-input-description\">
\t\t\t\t\t\t\t<div class=\"description\">
\t\t\t\t\t\t\t\t<span>";
        // line 426
        echo twig_escape_filter($this->env, sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Maximum available file upload size is %d Mb")), ((isset($context["maxFileUpload"]) ? $context["maxFileUpload"] : null) / (1024 * 1024))), "html", null, true);
        echo "</span>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t\t";
        // line 431
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Image Quality")), "uploads[image-quality]", $this->getAttribute($this->getAttribute(        // line 433
(isset($context["settings"]) ? $context["settings"] : null), "uploads", array()), "image-quality", array(), "array"), "image-quality");
        // line 435
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"seo\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 446
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Title")), "seo[profile-title]", $this->getAttribute($this->getAttribute(        // line 448
(isset($context["settings"]) ? $context["settings"] : null), "seo", array()), "profile-title", array(), "array"), "profile-title");
        // line 450
        echo "

\t\t\t\t\t";
        // line 452
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("User Profile Dynamic Meta Description")), "seo[profile-description]", (($this->getAttribute($this->getAttribute(        // line 454
(isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "profile-description", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "profile-description", array(), "array"), $this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "profile-description"), "method"))) : ($this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "profile-description"), "method"))), "profile-description");
        // line 456
        echo "

\t\t\t\t\t";
        // line 458
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Title")), "seo[group-title]", $this->getAttribute($this->getAttribute(        // line 460
(isset($context["settings"]) ? $context["settings"] : null), "seo", array()), "group-title", array(), "array"), "group-title");
        // line 462
        echo "

\t\t\t\t\t";
        // line 464
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Dynamic Meta Description")), "seo[group-description]", (($this->getAttribute($this->getAttribute(        // line 466
(isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "group-description", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "seo", array(), "any", false, true), "group-description", array(), "array"), $this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "group-description"), "method"))) : ($this->getAttribute((isset($context["templates"]) ? $context["templates"] : null), "get", array(0 => "group-description"), "method"))), "group-description");
        // line 468
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t<div class=\"sc-tab-content\" data-tab=\"import\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t
\t\t\t\t\t";
        // line 479
        if ((isset($context["isBuddyPressExists"]) ? $context["isBuddyPressExists"] : null)) {
            // line 480
            echo "\t\t\t\t\t\t<h3 class=\"header\">BuddyPress</h3>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-fields\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-fields\">";
            // line 486
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import User Fields")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-groups\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-groups\">";
            // line 493
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Groups")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-friends\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-friends\">";
            // line 500
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Friends")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"bp-activity\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-activity\">";
            // line 507
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Activity")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin: 2em 0\">
\t\t\t\t\t\t\t<button class=\"import-buddy-press-data sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 513
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Buddy Press Data")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 517
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 518
        if ((isset($context["isUltimateMemberExists"]) ? $context["isUltimateMemberExists"] : null)) {
            // line 519
            echo "\t\t\t\t\t\t<h3 class=\"header\">Ultimate Member</h3>
\t\t\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t<input type=\"checkbox\" id=\"um-fields\" value=\"true\" checked=\"checked\">
\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t<label for=\"bp-fields\">";
            // line 525
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import User Fields")), "html", null, true);
            echo "</label>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div style=\"margin: 2em 0\">
\t\t\t\t\t\t\t<button class=\"import-ultimate-member-data sc-button icon-button primary\">
\t\t\t\t\t\t\t\t<i class=\"fa fa-plus-circle\"></i>
\t\t\t\t\t\t\t\t<span>";
            // line 531
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Import Ultimate Member Data")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t</button>
\t\t\t\t\t\t</div>
\t\t\t\t\t";
        }
        // line 535
        echo "\t\t\t\t\t
\t\t\t\t\t";
        // line 536
        if (( !(isset($context["isBuddyPressExists"]) ? $context["isBuddyPressExists"] : null) &&  !(isset($context["isUltimateMemberExists"]) ? $context["isUltimateMemberExists"] : null))) {
            // line 537
            echo "\t\t\t\t\t\t";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("No supported plugins found. Currently we support:")), "html", null, true);
            echo " BuddyPress, Ultimate Member.
\t\t\t\t\t";
        }
        // line 539
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

    ";
        // line 545
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["environment"]) ? $context["environment"] : null), "dispatcher", array()), "dispatch", array(0 => "backendSettingsMainContentSettings"), "method"), "html", null, true);
        echo "
";
    }

    public function getTemplateName()
    {
        return "@membership/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  584 => 545,  576 => 539,  570 => 537,  568 => 536,  565 => 535,  558 => 531,  549 => 525,  541 => 519,  539 => 518,  536 => 517,  529 => 513,  520 => 507,  510 => 500,  500 => 493,  490 => 486,  482 => 480,  480 => 479,  467 => 468,  465 => 466,  464 => 464,  460 => 462,  458 => 460,  457 => 458,  453 => 456,  451 => 454,  450 => 452,  446 => 450,  444 => 448,  443 => 446,  430 => 435,  428 => 433,  427 => 431,  419 => 426,  411 => 420,  409 => 419,  408 => 416,  407 => 413,  400 => 409,  396 => 408,  382 => 397,  375 => 393,  367 => 388,  352 => 375,  350 => 373,  349 => 371,  345 => 369,  343 => 366,  342 => 360,  341 => 356,  340 => 355,  336 => 353,  334 => 350,  333 => 344,  332 => 339,  328 => 337,  326 => 334,  325 => 328,  324 => 323,  311 => 312,  305 => 311,  295 => 304,  288 => 300,  283 => 298,  277 => 297,  267 => 292,  259 => 288,  253 => 286,  250 => 285,  246 => 284,  237 => 278,  230 => 274,  218 => 264,  216 => 262,  215 => 260,  214 => 256,  213 => 250,  212 => 244,  208 => 242,  206 => 240,  205 => 238,  204 => 234,  203 => 228,  202 => 222,  198 => 220,  196 => 218,  195 => 216,  194 => 212,  193 => 206,  192 => 200,  188 => 198,  186 => 196,  185 => 194,  184 => 190,  183 => 184,  182 => 178,  177 => 176,  173 => 174,  171 => 171,  170 => 165,  169 => 159,  165 => 157,  163 => 154,  162 => 148,  161 => 142,  157 => 140,  155 => 137,  154 => 131,  153 => 125,  149 => 123,  147 => 120,  146 => 114,  145 => 108,  141 => 106,  139 => 103,  138 => 97,  137 => 91,  133 => 89,  131 => 86,  130 => 80,  129 => 74,  125 => 72,  123 => 69,  122 => 63,  121 => 57,  117 => 55,  115 => 53,  114 => 47,  113 => 45,  105 => 39,  102 => 38,  94 => 33,  88 => 30,  85 => 29,  82 => 28,  75 => 24,  70 => 22,  64 => 19,  58 => 16,  52 => 13,  46 => 10,  40 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@membership/backend/index.twig", "D:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\membership-by-supsystic\\src\\Membership\\Membership\\views\\backend\\index.twig");
    }
}
