<?php

/* @mail/backend/index.twig */
class __TwigTemplate_368570e9ba960b730c2853d137c4e6240d85b934c13450c8e6036a456fd16624 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@mail/backend/index.twig", 1);
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
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@mail/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_head($context, array $blocks = array())
    {
        // line 6
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"emails\">
\t\t\t<i class=\"fa fa-envelope\"></i>";
        // line 8
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Emails")), "html", null, true);
        echo "
\t\t</a>
\t\t<a href=\"#\" class=\"tab\" data-target=\"notifications\">
\t\t\t<i class=\"fa fa-bell\"></i>";
        // line 11
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Notifications")), "html", null, true);
        echo "
\t\t</a>
\t</div>
";
    }

    // line 16
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 17
        echo "\t<div class=\"sc-header\">
\t\t<h2>";
        // line 18
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mails")), "html", null, true);
        echo "</h2>
\t\t<button data-save-settings class=\"save-settings sc-button icon-button primary\">
\t\t\t<i class=\"fa fa-save\"></i>
\t\t\t<span>";
        // line 21
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
        echo "</span>
\t\t</button>
\t</div>
";
    }

    // line 26
    public function block_main($context, array $blocks = array())
    {
        // line 27
        echo "\t<div class=\"sc-tab-content active\" data-tab=\"emails\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t";
        // line 32
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mail appears from")), "emails[mail-appears-from]", $this->getAttribute($this->getAttribute(        // line 35
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "mail-appears-from", array(), "array"), "mail-appears-from");
        // line 37
        echo "

\t\t\t\t\t";
        // line 39
        echo $context["options"]->getemailRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Mail appears from address")), "emails[mail-appears-from-address]", $this->getAttribute($this->getAttribute(        // line 42
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "mail-appears-from-address", array(), "array"), "mail-appears-from-address");
        // line 44
        echo "

\t\t\t\t\t";
        // line 46
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Use HTML for E-mails")), array(0 => array("name" => "emails[use-html-for-emails]", "value" => $this->getAttribute($this->getAttribute(        // line 50
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "use-html-for-emails", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 51
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "use-html-for-emails", array(), "array") == "true"))), "use-html-for-emails");
        // line 54
        echo "

\t\t\t\t\t";
        // line 56
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Welcome Email")), array(0 => array("name" => "emails[account-welcome-email]", "value" => $this->getAttribute($this->getAttribute(        // line 60
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-welcome-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 61
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-welcome-email", array(), "array") == "true"))), "account-welcome-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 76
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 78
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Welcome Email Subject")), "emails[account-welcome-email-subject]", $this->getAttribute($this->getAttribute(        // line 81
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-welcome-email-subject", array(), "array"), "account-welcome-email-subject", "style=\"display:none;\"");
        // line 84
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 86
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Welcome Email Body")), "emails[account-welcome-email-body]", $this->getAttribute($this->getAttribute(        // line 89
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-welcome-email-body", array(), "array"), "account-welcome-email-body", "style=\"display:none;\"");
        // line 92
        echo "

\t\t\t\t\t";
        // line 94
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Activation Email")), array(0 => array("name" => "emails[account-activation-email]", "value" => $this->getAttribute($this->getAttribute(        // line 98
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-activation-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 99
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-activation-email", array(), "array") == "true"))), "account-activation-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 114
        echo "

\t\t\t\t\t";
        // line 116
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Activation Email Subject")), "emails[account-activation-email-subject]", $this->getAttribute($this->getAttribute(        // line 119
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-activation-email-subject", array(), "array"), "account-activation-email-subject", "style=\"display:none;\"");
        // line 122
        echo "

\t\t\t\t\t";
        // line 124
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Activation Email Body")), "emails[account-activation-email-body]", $this->getAttribute($this->getAttribute(        // line 127
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-activation-email-body", array(), "array"), "account-activation-email-body", "style=\"display:none;\"");
        // line 130
        echo "

\t\t\t\t\t";
        // line 132
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pending Review Email")), array(0 => array("name" => "emails[pending-review-email]", "value" => $this->getAttribute($this->getAttribute(        // line 136
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "pending-review-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 137
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "pending-review-email", array(), "array") == "true"))), "pending-review-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 152
        echo "

\t\t\t\t\t";
        // line 154
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pending Review Email Subject")), "emails[pending-review-email-subject]", $this->getAttribute($this->getAttribute(        // line 157
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "pending-review-email-subject", array(), "array"), "pending-review-email-subject", "style=\"display:none;\"");
        // line 160
        echo "

\t\t\t\t\t";
        // line 162
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Pending Review Email Body")), "emails[pending-review-email-body]", $this->getAttribute($this->getAttribute(        // line 165
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "pending-review-email-body", array(), "array"), "pending-review-email-body", "style=\"display:none;\"");
        // line 168
        echo "

\t\t\t\t\t";
        // line 170
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Approved Email")), array(0 => array("name" => "emails[account-approved-email]", "value" => $this->getAttribute($this->getAttribute(        // line 174
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-approved-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 175
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-approved-email", array(), "array") == "true"))), "account-approved-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 190
        echo "

\t\t\t\t\t";
        // line 192
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Approved Email Subject")), "emails[account-approved-email-subject]", $this->getAttribute($this->getAttribute(        // line 195
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-approved-email-subject", array(), "array"), "account-approved-email-subject", "style=\"display:none;\"");
        // line 198
        echo "

\t\t\t\t\t";
        // line 200
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Approved Email Body")), "emails[account-approved-email-body]", $this->getAttribute($this->getAttribute(        // line 203
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-approved-email-body", array(), "array"), "account-approved-email-body", "style=\"display:none;\"");
        // line 206
        echo "

\t\t\t\t\t";
        // line 208
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Rejected Email")), array(0 => array("name" => "emails[account-rejected-email]", "value" => $this->getAttribute($this->getAttribute(        // line 212
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-rejected-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 213
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-rejected-email", array(), "array") == "true"))), "account-rejected-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 228
        echo "

\t\t\t\t\t";
        // line 230
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Rejected Email Subject")), "emails[account-rejected-email-subject]", $this->getAttribute($this->getAttribute(        // line 233
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-rejected-email-subject", array(), "array"), "account-rejected-email-subject", "style=\"display:none;\"");
        // line 236
        echo "

\t\t\t\t\t";
        // line 238
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Rejected Email Body")), "emails[account-rejected-email-body]", $this->getAttribute($this->getAttribute(        // line 241
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-rejected-email-body", array(), "array"), "account-rejected-email-body", "style=\"display:none;\"");
        // line 244
        echo "

\t\t\t\t\t";
        // line 246
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deactivation Email")), array(0 => array("name" => "emails[account-deactivation-email]", "value" => $this->getAttribute($this->getAttribute(        // line 250
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deactivation-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 251
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deactivation-email", array(), "array") == "true"))), "account-deactivation-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 266
        echo "

\t\t\t\t\t";
        // line 268
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deactivation Email Subject")), "emails[account-deactivation-email-subject]", $this->getAttribute($this->getAttribute(        // line 271
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deactivation-email-subject", array(), "array"), "account-deactivation-email-subject", "style=\"display:none;\"");
        // line 274
        echo "

\t\t\t\t\t";
        // line 276
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deactivation Email Body")), "emails[account-deactivation-email-body]", $this->getAttribute($this->getAttribute(        // line 279
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deactivation-email-body", array(), "array"), "account-deactivation-email-body", "style=\"display:none;\"");
        // line 282
        echo "

\t\t\t\t\t";
        // line 284
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deleted Email")), array(0 => array("name" => "emails[account-deleted-email]", "value" => $this->getAttribute($this->getAttribute(        // line 288
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deleted-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 289
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deleted-email", array(), "array") == "true"))), "account-deleted-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 304
        echo "

\t\t\t\t\t";
        // line 306
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deleted Email Subject")), "emails[account-deleted-email-subject]", $this->getAttribute($this->getAttribute(        // line 309
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deleted-email-subject", array(), "array"), "account-deleted-email-subject", "style=\"display:none;\"");
        // line 312
        echo "

\t\t\t\t\t";
        // line 314
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deleted Email Body")), "emails[account-deleted-email-body]", $this->getAttribute($this->getAttribute(        // line 317
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "account-deleted-email-body", array(), "array"), "account-deleted-email-body", "style=\"display:none;\"");
        // line 320
        echo "

\t\t\t\t\t";
        // line 322
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password Reset Email")), array(0 => array("name" => "emails[password-reset-email]", "value" => $this->getAttribute($this->getAttribute(        // line 326
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "password-reset-email", array(), "array"), "checked" => "true", "attributes" => "disabled=\"true\"")), "password-reset-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 343
        echo "
\t\t\t\t\t
\t\t\t\t\t";
        // line 345
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password Reset Email Subject")), "emails[password-reset-email-subject]", $this->getAttribute($this->getAttribute(        // line 348
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "password-reset-email-subject", array(), "array"), "password-reset-email-subject", "style=\"display:none;\"");
        // line 351
        echo "

\t\t\t\t\t";
        // line 353
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password Reset Email Body")), "emails[password-reset-email-body]", $this->getAttribute($this->getAttribute(        // line 356
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "password-reset-email-body", array(), "array"), "password-reset-email-body", "style=\"display:none;\"");
        // line 359
        echo "

\t\t\t\t\t";
        // line 361
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password Changed Email")), array(0 => array("name" => "emails[password-changed-email]", "value" => $this->getAttribute($this->getAttribute(        // line 365
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "password-changed-email", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 366
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "password-changed-email", array(), "array") == "true"))), "password-changed-email", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 381
        echo "

\t\t\t\t\t";
        // line 383
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password Changed Email Subject")), "emails[password-changed-email-subject]", $this->getAttribute($this->getAttribute(        // line 386
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "password-changed-email-subject", array(), "array"), "password-changed-email-subject", "style=\"display:none;\"");
        // line 389
        echo "

\t\t\t\t\t";
        // line 391
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Password Changed Email Body")), "emails[password-changed-email-body]", $this->getAttribute($this->getAttribute(        // line 394
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "password-changed-email-body", array(), "array"), "password-changed-email-body", "style=\"display:none;\"");
        // line 397
        echo "

\t\t\t\t\t";
        // line 399
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New friends and followers notification")), array(0 => array("name" => "emails[notification-friends-followers]", "value" => $this->getAttribute($this->getAttribute(        // line 403
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "notification-friends-followers", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 404
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "notification-friends-followers", array(), "array") == "true"))), "notification-friends-followers", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 419
        echo "

\t\t\t\t\t";
        // line 421
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends/Followers Notification Subject")), "emails[notification-friends-followers-subject]", $this->getAttribute($this->getAttribute(        // line 424
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "notification-friends-followers-subject", array(), "array"), "notification-friends-followers-subject", "style=\"display:none;\"");
        // line 427
        echo "

\t\t\t\t\t";
        // line 429
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends/Followers Notification Body")), "emails[notification-friends-followers-body]", $this->getAttribute($this->getAttribute(        // line 432
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "notification-friends-followers-body", array(), "array"), "notification-friends-followers-body", "style=\"display:none;\"");
        // line 435
        echo "

\t\t\t\t\t";
        // line 437
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message Recieve Notification")), array(0 => array("name" => "emails[message-recieve-notification]", "value" => $this->getAttribute($this->getAttribute(        // line 441
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "message-recieve-notification", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 442
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "message-recieve-notification", array(), "array") == "true"))), "message-recieve-notification", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 457
        echo "

\t\t\t\t\t";
        // line 459
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message Recieve Notification Subject")), "emails[message-recieve-notification-subject]", $this->getAttribute($this->getAttribute(        // line 462
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "message-recieve-notification-subject", array(), "array"), "message-recieve-notification-subject", "style=\"display:none;\"");
        // line 465
        echo "

\t\t\t\t\t";
        // line 467
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Message Recieve Notification Body")), "emails[message-recieve-notification-body]", $this->getAttribute($this->getAttribute(        // line 470
(isset($context["settings"]) ? $context["settings"] : null), "emails", array()), "message-recieve-notification-body", array(), "array"), "message-recieve-notification-body", "style=\"display:none;\"");
        // line 473
        echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"sc-tab-content\" data-tab=\"notifications\">
\t\t<div class=\"mp-options\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-12\">
\t\t\t\t\t
\t\t\t\t\t";
        // line 484
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages Refresh Period")), "notifications[messages-refresh-period]", (($this->getAttribute($this->getAttribute(        // line 486
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array(), "any", false, true), "messages-refresh-period", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "notifications", array(), "any", false, true), "messages-refresh-period", array(), "array"), 7)) : (7)), "messages-refresh-period");
        // line 488
        echo "

\t\t\t\t\t";
        // line 490
        echo $context["options"]->getemailRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Email address for notifications")), "notifications[notifications-email-address]", $this->getAttribute($this->getAttribute(        // line 492
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "notifications-email-address", array(), "array"), "notifications-email-address");
        // line 494
        echo "

\t\t\t\t\t";
        // line 496
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New User Notification")), array(0 => array("name" => "notifications[new-user-notification]", "value" => $this->getAttribute($this->getAttribute(        // line 500
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "new-user-notification", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 501
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "new-user-notification", array(), "array") == "true"))), "new-user-notification", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 516
        echo "

\t\t\t\t\t";
        // line 518
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New User Notification Subject")), "notifications[new-user-notification-subject]", $this->getAttribute($this->getAttribute(        // line 521
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "new-user-notification-subject", array(), "array"), "new-user-notification-subject", "style=\"display:none;\"");
        // line 524
        echo "

\t\t\t\t\t";
        // line 526
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("New User Notification Body")), "notifications[new-user-notification-body]", $this->getAttribute($this->getAttribute(        // line 529
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "new-user-notification-body", array(), "array"), "new-user-notification-body", "style=\"display:none;\"");
        // line 532
        echo "

\t\t\t\t\t";
        // line 534
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Needs Review Notification")), array(0 => array("name" => "notifications[account-needs-review-notification]", "value" => $this->getAttribute($this->getAttribute(        // line 538
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-needs-review-notification", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 539
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-needs-review-notification", array(), "array") == "true"))), "account-needs-review-notification", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 554
        echo "

\t\t\t\t\t";
        // line 556
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Needs Review Notification Subject")), "notifications[account-needs-review-notification-subject]", $this->getAttribute($this->getAttribute(        // line 559
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-needs-review-notification-subject", array(), "array"), "account-needs-review-notification-subject", "style=\"display:none;\"");
        // line 562
        echo "

\t\t\t\t\t";
        // line 564
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Needs Review Notification Body")), "notifications[account-needs-review-notification-body]", $this->getAttribute($this->getAttribute(        // line 567
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-needs-review-notification-body", array(), "array"), "account-needs-review-notification-body", "style=\"display:none;\"");
        // line 570
        echo "

\t\t\t\t\t";
        // line 572
        echo $context["options"]->getcheckboxSettingRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deletion Notification")), array(0 => array("name" => "notifications[account-deletion-notification]", "value" => $this->getAttribute($this->getAttribute(        // line 576
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-deletion-notification", array(), "array"), "checked" => ($this->getAttribute($this->getAttribute(        // line 577
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-deletion-notification", array(), "array") == "true"))), "account-deletion-notification", "", array("edit" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit"))), "send" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send Test"))), "reset" => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Reset to Default")))));
        // line 592
        echo "

\t\t\t\t\t";
        // line 594
        echo $context["options"]->getinputRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deletion Notification Subject")), "notifications[account-deletion-notification-subject]", $this->getAttribute($this->getAttribute(        // line 597
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-deletion-notification-subject", array(), "array"), "account-deletion-notification-subject", "style=\"display:none;\"");
        // line 600
        echo "

\t\t\t\t\t";
        // line 602
        echo $context["options"]->gettextareaRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Account Deletion Notification Body")), "notifications[account-deletion-notification-body]", $this->getAttribute($this->getAttribute(        // line 605
(isset($context["settings"]) ? $context["settings"] : null), "notifications", array()), "account-deletion-notification-body", array(), "array"), "account-deletion-notification-body", "style=\"display:none;\"");
        // line 608
        echo "

\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t<div class=\"mp-modal edit-email-options-modal sc-hidden\">
\t\t<div class=\"mp-option\" id=\"email-subject\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t<span id=\"email-subject-label\" title=\"\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<input id=\"email-subject-input\" class=\"sc-input\" name=\"\" value=\"\">
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t\t<div class=\"mp-option\" id=\"email-body\">
\t\t\t<div class=\"row\">
\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t<span id=\"email-body-label\" title=\"\"></span>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t<textarea style=\"width: 100%\" id=\"email-body-input\" class=\"sc-input\" name=\"\" rows=\"10\"></textarea>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
    }

    public function getTemplateName()
    {
        return "@mail/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  432 => 608,  430 => 605,  429 => 602,  425 => 600,  423 => 597,  422 => 594,  418 => 592,  416 => 577,  415 => 576,  414 => 572,  410 => 570,  408 => 567,  407 => 564,  403 => 562,  401 => 559,  400 => 556,  396 => 554,  394 => 539,  393 => 538,  392 => 534,  388 => 532,  386 => 529,  385 => 526,  381 => 524,  379 => 521,  378 => 518,  374 => 516,  372 => 501,  371 => 500,  370 => 496,  366 => 494,  364 => 492,  363 => 490,  359 => 488,  357 => 486,  356 => 484,  343 => 473,  341 => 470,  340 => 467,  336 => 465,  334 => 462,  333 => 459,  329 => 457,  327 => 442,  326 => 441,  325 => 437,  321 => 435,  319 => 432,  318 => 429,  314 => 427,  312 => 424,  311 => 421,  307 => 419,  305 => 404,  304 => 403,  303 => 399,  299 => 397,  297 => 394,  296 => 391,  292 => 389,  290 => 386,  289 => 383,  285 => 381,  283 => 366,  282 => 365,  281 => 361,  277 => 359,  275 => 356,  274 => 353,  270 => 351,  268 => 348,  267 => 345,  263 => 343,  261 => 326,  260 => 322,  256 => 320,  254 => 317,  253 => 314,  249 => 312,  247 => 309,  246 => 306,  242 => 304,  240 => 289,  239 => 288,  238 => 284,  234 => 282,  232 => 279,  231 => 276,  227 => 274,  225 => 271,  224 => 268,  220 => 266,  218 => 251,  217 => 250,  216 => 246,  212 => 244,  210 => 241,  209 => 238,  205 => 236,  203 => 233,  202 => 230,  198 => 228,  196 => 213,  195 => 212,  194 => 208,  190 => 206,  188 => 203,  187 => 200,  183 => 198,  181 => 195,  180 => 192,  176 => 190,  174 => 175,  173 => 174,  172 => 170,  168 => 168,  166 => 165,  165 => 162,  161 => 160,  159 => 157,  158 => 154,  154 => 152,  152 => 137,  151 => 136,  150 => 132,  146 => 130,  144 => 127,  143 => 124,  139 => 122,  137 => 119,  136 => 116,  132 => 114,  130 => 99,  129 => 98,  128 => 94,  124 => 92,  122 => 89,  121 => 86,  117 => 84,  115 => 81,  114 => 78,  110 => 76,  108 => 61,  107 => 60,  106 => 56,  102 => 54,  100 => 51,  99 => 50,  98 => 46,  94 => 44,  92 => 42,  91 => 39,  87 => 37,  85 => 35,  84 => 32,  77 => 27,  74 => 26,  66 => 21,  60 => 18,  57 => 17,  54 => 16,  46 => 11,  40 => 8,  36 => 6,  33 => 5,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@mail/backend/index.twig", "D:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\membership-by-supsystic\\src\\Membership\\Mail\\views\\backend\\index.twig");
    }
}
