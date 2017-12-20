<?php

/* @groups/backend/index.twig */
class __TwigTemplate_1d8eba955b835c219aeaad447e8aa35c50527ec2a515165af7c9e0c0c087f3a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@groups/backend/index.twig", 1);
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
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@groups/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_head($context, array $blocks = array())
    {
        // line 5
        echo "\t<div class=\"sc-tabs\">
\t\t<a href=\"#\" class=\"tab active\" data-target=\"main\">
\t\t\t<i class=\"fa fa-group\"></i>";
        // line 7
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Main Settings")), "html", null, true);
        echo "
\t\t</a>
\t</div>
";
    }

    // line 12
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 13
        echo "\t<div class=\"sc-header\">
\t\t";
        // line 14
        if (($this->getAttribute((isset($context["mainSettings"]) ? $context["mainSettings"] : null), "groups", array(), "array") == "true")) {
            // line 15
            echo "\t\t\t<h2>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), "html", null, true);
            echo "</h2>
\t\t\t<button data-save-settings class=\"save-settings sc-button icon-button primary\">
\t\t\t\t<i class=\"fa fa-save\"></i><span>";
            // line 17
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Save Settings")), "html", null, true);
            echo "</span>
\t\t\t</button>
\t\t";
        }
        // line 20
        echo "\t</div>
";
    }

    // line 23
    public function block_main($context, array $blocks = array())
    {
        // line 24
        echo "    ";
        if (($this->getAttribute((isset($context["mainSettings"]) ? $context["mainSettings"] : null), "groups", array(), "array") == "true")) {
            // line 25
            echo "    <link rel=\"stylesheet\" type=\"text/css\" href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("base", "lib/cropper/cropper.min.css"), "html", null, true);
            echo "\">
    <script async type=\"text/javascript\" src=\"";
            // line 26
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("base", "lib/cropper/cropper.min.js"), "html", null, true);
            echo "\"></script>

\t<div class=\"sc-tabs-container\">
\t\t\t<div class=\"mp-options\">
\t\t\t\t<div class=\"row\">
\t\t\t\t\t<div class=\"col-md-12\">

\t\t\t\t\t\t<div class=\"mp-option\" id=\"logo-size\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 36
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Logo Size")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 41
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-size", array(), "array"), "width", array()), "html", null, true);
            echo "\" name=\"logo-size[width]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 45
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-size", array(), "array"), "height", array()), "html", null, true);
            echo "\" name=\"logo-size[height]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mp-option\" id=\"logo-large-size\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 55
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Logo Thumbnail Large Size")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-large-size", array(), "array"), "width", array()), "html", null, true);
            echo "\" name=\"logo-large-size[width]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 64
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-large-size", array(), "array"), "height", array()), "html", null, true);
            echo "\" name=\"logo-large-size[height]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mp-option\" id=\"logo-medium-size\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 74
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Logo Thumbnail Medium Size")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 79
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-medium-size", array(), "array"), "width", array()), "html", null, true);
            echo "\" name=\"logo-medium-size[width]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 83
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-medium-size", array(), "array"), "height", array()), "html", null, true);
            echo "\" name=\"logo-medium-size[height]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mp-option\" id=\"logo-small-size\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 93
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Logo Thumbnail Small Size")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 98
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-small-size", array(), "array"), "width", array()), "html", null, true);
            echo "\" name=\"logo-small-size[width]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 102
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "logo-small-size", array(), "array"), "height", array()), "html", null, true);
            echo "\" name=\"logo-small-size[height]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

                        ";
            // line 109
            $context["defaultLogo"] = $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("groups", "images/group.jpg", false);
            // line 110
            echo "
\t\t\t\t\t\t<div class=\"mp-option\" id=\"default-logo\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 114
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default Logo Image")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-default-image\">
\t\t\t\t\t\t\t\t\t\t<img style=\"max-width:50px;max-height: 50px;\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 119
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo", array(), "array"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-change\">Change</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-set-to-default\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            if ((((isset($context["defaultLogo"]) ? $context["defaultLogo"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo", array(), "array")) || ((isset($context["defaultLogo"]) ? $context["defaultLogo"] : null) == $this->getAttribute((isset($context["setting"]) ? $context["setting"] : null), "default-logo-source", array(), "array")))) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display: none\" 
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t>Set to default</button>
                                        <input
                                                type=\"hidden\"
                                                name=\"default-logo\"
                                                value=\"";
            // line 130
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-logo-large\"
                                                value=\"";
            // line 135
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo-large", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-logo-medium\"
                                                value=\"";
            // line 140
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo-medium", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-logo-small\"
                                                value=\"";
            // line 145
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo-small", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-logo-source\"
                                                data-default-width-input-name=\"logo-size[width]\"
                                                data-default-height-input-name=\"logo-size[height]\"
                                                data-default-crop-input-name=\"default-logo-crop-data\"
                                                data-default-image=\"";
            // line 153
            echo twig_escape_filter($this->env, (isset($context["defaultLogo"]) ? $context["defaultLogo"] : null), "html", null, true);
            echo "\"
                                                value=\"";
            // line 154
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo-source", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-logo-crop-data\"
                                                value=\"";
            // line 159
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-logo-crop-data", array(), "array"), "html", null, true);
            echo "\"
                                        >
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mp-option\" id=\"cover-size\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 169
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Cover Size")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 174
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-size", array(), "array"), "width", array()), "html", null, true);
            echo "\" name=\"cover-size[width]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 178
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-size", array(), "array"), "height", array()), "html", null, true);
            echo "\" name=\"cover-size[height]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mp-option\" id=\"cover-medium-size\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 188
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cover Thumbnail Medium Size")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 193
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-medium-size", array(), "array"), "width", array()), "html", null, true);
            echo "\" name=\"cover-medium-size[width]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 197
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-medium-size", array(), "array"), "height", array()), "html", null, true);
            echo "\" name=\"cover-medium-size[height]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t<div class=\"mp-option\" id=\"cover-small-size\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 207
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Cover Thumbnail Small Size")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-sizes-input\">
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 212
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-small-size", array(), "array"), "width", array()), "html", null, true);
            echo "\" name=\"cover-small-size[width]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t\t<span>x</span>
\t\t\t\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t\t\t\t<input class=\"sc-input\" value=\"";
            // line 216
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "cover-small-size", array(), "array"), "height", array()), "html", null, true);
            echo "\" name=\"cover-small-size[height]\">
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t
                        ";
            // line 223
            $context["defaultCover"] = $this->env->getExtension('Membership_Base_Twig')->getAssetsPath("groups", "images/group-cover.jpg", false);
            // line 224
            echo "
\t\t\t\t\t\t<div class=\"mp-option\" id=\"default-cover\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t";
            // line 228
            echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Default Cover Image")));
            echo "
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-default-image\">
\t\t\t\t\t\t\t\t\t\t<img style=\"max-width:50px;max-height: 50px;\"
\t\t\t\t\t\t\t\t\t\t\tsrc=\"";
            // line 233
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover", array(), "array"), "html", null, true);
            echo "\"
\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-change\">Change</button>
\t\t\t\t\t\t\t\t\t\t<button class=\"mp-option-button sc-button primary mp-set-to-default\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 237
            if ((((isset($context["defaultCover"]) ? $context["defaultCover"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover", array(), "array")) || ((isset($context["defaultCover"]) ? $context["defaultCover"] : null) == $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-source", array(), "array")))) {
                // line 238
                echo "\t\t\t\t\t\t\t\t\t\t\t\tstyle=\"display: none\" 
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 240
            echo "\t\t\t\t\t\t\t\t\t\t>Set to default</button>
                                        <input
                                                type=\"hidden\"
                                                name=\"default-cover\"
                                                value=\"";
            // line 244
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-cover-medium\"
                                                value=\"";
            // line 249
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-medium", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-cover-small\"
                                                value=\"";
            // line 254
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-small", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-cover-source\"
                                                data-default-image=\"";
            // line 259
            echo twig_escape_filter($this->env, (isset($context["defaultCover"]) ? $context["defaultCover"] : null), "html", null, true);
            echo "\"
                                                data-default-width-input-name=\"cover-size[width]\"
                                                data-default-height-input-name=\"cover-size[height]\"
                                                data-default-crop-input-name=\"default-cover-crop-data\"
                                                value=\"";
            // line 263
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-source", array(), "array"), "html", null, true);
            echo "\"
                                        >
                                        <input
                                                type=\"hidden\"
                                                name=\"default-cover-crop-data\"
                                                value=\"";
            // line 268
            echo twig_escape_filter($this->env, $this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "default-cover-crop-data", array(), "array"), "html", null, true);
            echo "\"
                                        >
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>

\t\t\t\t\t\t";
            // line 275
            $context["permalinks"] = array(0 => array("value" => "groupalias", "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group alias")), "selected" => ($this->getAttribute(            // line 279
(isset($context["settings"]) ? $context["settings"] : null), "permalink-base", array(), "array") == "groupalias")), 1 => array("value" => "id", "title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group ID")), "selected" => ($this->getAttribute(            // line 284
(isset($context["settings"]) ? $context["settings"] : null), "permalink-base", array(), "array") == "id")));
            // line 287
            echo "
\t\t\t\t\t\t";
            // line 288
            echo $context["options"]->getselectRow(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group Permalink Base")),             // line 290
(isset($context["permalinks"]) ? $context["permalinks"] : null), "permalink-base", "permalink-base");
            // line 293
            echo "

                        ";
            // line 295
            $context["_roles"] = array();
            // line 296
            echo "
                        ";
            // line 297
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
            foreach ($context['_seq'] as $context["value"] => $context["role"]) {
                // line 298
                echo "                            ";
                $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute(                // line 299
$context["role"], "name", array()), "value" =>                 // line 300
$context["value"], "selected" => ($this->getAttribute(                // line 301
(isset($context["settings"]) ? $context["settings"] : null), "roles-to-invite", array(), "array") == $context["value"]))));
                // line 303
                echo "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 304
            echo "
\t\t\t\t\t\t";
            // line 305
            $context["_types"] = array(0 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All")), "name" => "inviting-type", "value" => "all", "checked" => ($this->getAttribute(            // line 309
(isset($context["settings"]) ? $context["settings"] : null), "inviting-type", array(), "array") == "all")), 1 => array("label" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Specific roles")), "name" => "inviting-type", "value" => "specific_roles", "checked" => ($this->getAttribute(            // line 315
(isset($context["settings"]) ? $context["settings"] : null), "inviting-type", array(), "array") == "specific_roles")));
            // line 317
            echo "
\t\t\t\t\t
\t\t\t\t\t\t<h3>";
            // line 319
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Group invites")), "html", null, true);
            echo "</h3>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"mp-option\" id=\"inviting-type\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-label inviting-type-label\">
\t\t\t\t\t\t\t\t\t\t<span title=\"";
            // line 325
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Who can invite")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Who can invite")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-8\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-controls\">
\t\t\t\t\t\t\t\t\t\t";
            // line 330
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["_types"]) ? $context["_types"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["radio"]) {
                // line 331
                echo "\t\t\t\t\t\t\t\t\t\t\t<label class=\"sc-radio\">
\t\t\t\t\t\t\t\t\t\t\t\t<input
\t\t\t\t\t\t\t\t\t\t\t\t\t\ttype=\"radio\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tname=\"";
                // line 334
                echo twig_escape_filter($this->env, $this->getAttribute($context["radio"], "name", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\tvalue=\"";
                // line 335
                echo twig_escape_filter($this->env, $this->getAttribute($context["radio"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 336
                if ($this->getAttribute($context["radio"], "checked", array())) {
                    // line 337
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tchecked
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 339
                echo "\t\t\t\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 340
                echo twig_escape_filter($this->env, $this->getAttribute($context["radio"], "label", array()), "html", null, true);
                echo "
\t\t\t\t\t\t\t\t\t\t\t\t<div class=\"sc-radio-state\"></div>
\t\t\t\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['radio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 344
            echo "\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-select inviting-type-roles\">
\t\t\t\t\t\t\t\t\t\t<select class=\"sc-input\" name=\"inviting-type-roles[]\" multiple>
\t\t\t\t\t\t\t\t\t\t\t";
            // line 347
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["_roles"]) ? $context["_roles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 348
                echo "\t\t\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 349
                if ($this->getAttribute($context["option"], "selected", array())) {
                    // line 350
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 352
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                if ($this->getAttribute($context["option"], "disabled", array())) {
                    // line 353
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\t\tdisabled
\t\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 355
                echo "\t\t\t\t\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 357
            echo "\t\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t\t<div class=\"mp-option\" id=\"roles-to-invite\">
\t\t\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t\t\t<div class=\"col-md-4\">
\t\t\t\t\t\t\t\t\t<div class=\"mp-option-label\">
\t\t\t\t\t\t\t\t\t\t<span title=\"";
            // line 367
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Who can be invited")), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Who can be invited")), "html", null, true);
            echo "</span>
\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t<div class=\"col-md-3\">
\t\t\t\t\t\t\t\t\t<select class=\"sc-input\" name=\"roles-to-invite\">
\t\t\t\t\t\t\t\t\t\t<option value=\"everyone\"
\t\t\t\t\t\t\t\t\t\t\t\t";
            // line 373
            if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "roles-to-invite", array(), "array") == "everyone")) {
                // line 374
                echo "\t\t\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 376
            echo "\t\t\t\t\t\t\t\t\t\t>";
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Everyone")), "html", null, true);
            echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            // line 377
            if (($this->getAttribute((isset($context["mainSettings"]) ? $context["mainSettings"] : null), "friends", array(), "array") == "true")) {
                // line 378
                echo "\t\t\t\t\t\t\t\t\t\t\t<option value=\"friends-only\"
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 379
                if (($this->getAttribute((isset($context["settings"]) ? $context["settings"] : null), "roles-to-invite", array(), "array") == "friends-only")) {
                    // line 380
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 382
                echo "\t\t\t\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Friends only")), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t\t";
            }
            // line 384
            echo "\t\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t\t
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t";
        } else {
            // line 394
            echo "\t\t<div>
\t\t\t<span>";
            // line 395
            echo sprintf(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups option is Turn Off, you can turn it On on the Main settings tab or click <a href=\"%s\">here</a>.")), (isset($context["mainSettingsLink"]) ? $context["mainSettingsLink"] : null));
            echo "</span>
\t\t</div>
    ";
        }
    }

    public function getTemplateName()
    {
        return "@groups/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  669 => 395,  666 => 394,  654 => 384,  648 => 382,  644 => 380,  642 => 379,  639 => 378,  637 => 377,  632 => 376,  628 => 374,  626 => 373,  615 => 367,  603 => 357,  594 => 355,  590 => 353,  587 => 352,  583 => 350,  581 => 349,  576 => 348,  572 => 347,  567 => 344,  557 => 340,  554 => 339,  550 => 337,  548 => 336,  544 => 335,  540 => 334,  535 => 331,  531 => 330,  521 => 325,  512 => 319,  508 => 317,  506 => 315,  505 => 309,  504 => 305,  501 => 304,  495 => 303,  493 => 301,  492 => 300,  491 => 299,  489 => 298,  485 => 297,  482 => 296,  480 => 295,  476 => 293,  474 => 290,  473 => 288,  470 => 287,  468 => 284,  467 => 279,  466 => 275,  456 => 268,  448 => 263,  441 => 259,  433 => 254,  425 => 249,  417 => 244,  411 => 240,  407 => 238,  405 => 237,  398 => 233,  390 => 228,  384 => 224,  382 => 223,  372 => 216,  365 => 212,  357 => 207,  344 => 197,  337 => 193,  329 => 188,  316 => 178,  309 => 174,  301 => 169,  288 => 159,  280 => 154,  276 => 153,  265 => 145,  257 => 140,  249 => 135,  241 => 130,  235 => 126,  231 => 124,  229 => 123,  222 => 119,  214 => 114,  208 => 110,  206 => 109,  196 => 102,  189 => 98,  181 => 93,  168 => 83,  161 => 79,  153 => 74,  140 => 64,  133 => 60,  125 => 55,  112 => 45,  105 => 41,  97 => 36,  84 => 26,  79 => 25,  76 => 24,  73 => 23,  68 => 20,  62 => 17,  56 => 15,  54 => 14,  51 => 13,  48 => 12,  40 => 7,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@groups/backend/index.twig", "D:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\membership-by-supsystic\\src\\Membership\\Groups\\views\\backend\\index.twig");
    }
}
