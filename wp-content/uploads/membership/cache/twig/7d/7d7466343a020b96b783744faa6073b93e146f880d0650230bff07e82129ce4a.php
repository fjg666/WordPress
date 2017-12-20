<?php

/* @base/macros/options.twig */
class __TwigTemplate_782ada47722691a18e1f0886a22b67b0ea47f230deba2365e810ad7b24be4409 extends Twig_Template
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
        // line 23
        echo "
";
        // line 66
        echo "
";
        // line 90
        echo "
";
        // line 120
        echo "
";
        // line 141
        echo "
";
        // line 147
        echo "
";
        // line 152
        echo "
";
        // line 157
        echo "
";
        // line 162
        echo "
";
        // line 167
        echo "
";
        // line 172
        echo "
";
        // line 183
        echo "
";
        // line 194
        echo "
";
        // line 201
        echo "
";
        // line 206
        echo "
";
        // line 211
        echo "
";
        // line 216
        echo "
";
        // line 221
        echo "
";
        // line 226
        echo "
";
        // line 231
        echo "
";
        // line 236
        echo "
";
        // line 241
        echo "
";
        // line 246
        echo "
";
        // line 251
        echo "
";
        // line 271
        echo "
";
        // line 290
        echo "
";
        // line 296
        echo "
";
        // line 300
        echo "
";
        // line 306
        echo "
";
        // line 312
        echo "
";
        // line 318
        echo "
";
        // line 324
        echo "
";
        // line 341
        echo "
";
        // line 357
        echo "
";
        // line 392
        echo "
";
        // line 414
        echo "
";
        // line 422
        echo "
";
        // line 430
        echo "
";
        // line 438
        echo "
";
        // line 451
        echo "
";
        // line 458
        echo "
";
        // line 487
        echo "
";
    }

    // line 1
    public function getrow($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 2
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 2);
            // line 3
            echo "\t";
            $context["options"] = $this;
            // line 4
            echo "\t<div class=\"mp-option\" ";
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
            // line 7
            echo $context["options"]->getlabel((isset($context["label"]) ? $context["label"] : null));
            echo "
    \t\t\t";
            // line 8
            if ( !(isset($context["withoutHelper"]) ? $context["withoutHelper"] : null)) {
                // line 9
                echo "\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t<div>";
                // line 12
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget((isset($context["id"]) ? $context["id"] : null))));
                }
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t\t";
            }
            // line 16
            echo "\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t";
            // line 18
            echo (isset($context["input"]) ? $context["input"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 24
    public function getsettingRow($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, $__buttons__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "buttons" => $__buttons__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 25
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 25);
            // line 26
            echo "    ";
            $context["options"] = $this;
            // line 27
            echo "    <div class=\"mp-option mp-option-setting\" ";
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
        <div class=\"row\">
            <div class=\"col-md-4\">
                ";
            // line 30
            echo $context["options"]->getlabel((isset($context["label"]) ? $context["label"] : null));
            echo "
    \t\t\t";
            // line 31
            if ( !(isset($context["withoutHelper"]) ? $context["withoutHelper"] : null)) {
                // line 32
                echo "\t\t\t\t<div class=\"mp-option-helper tooltip\">
                    <i class=\"fa fa-question sc-tooltip\"></i>
                    <div class=\"tooltip_content\">
                        <div>";
                // line 35
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget((isset($context["id"]) ? $context["id"] : null))));
                }
                echo "</div>
                    </div>
\t\t\t\t</div>
                ";
            }
            // line 39
            echo "            </div>
            <div class=\"col-md-8\">
                ";
            // line 41
            echo (isset($context["input"]) ? $context["input"] : null);
            echo "
                ";
            // line 42
            if ((isset($context["buttons"]) ? $context["buttons"] : null)) {
                // line 43
                echo "                ";
                if ($this->getAttribute((isset($context["buttons"]) ? $context["buttons"] : null), "edit", array())) {
                    // line 44
                    echo "                <button class=\"mp-option-setting-edit-button sc-button primary\">
                    <i class=\"fa fa-lg fa-edit\"></i>
                    ";
                    // line 46
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["buttons"]) ? $context["buttons"] : null), "edit", array()), "label", array()), "html", null, true);
                    echo "
                </button>
                ";
                }
                // line 49
                echo "                ";
                if ($this->getAttribute((isset($context["buttons"]) ? $context["buttons"] : null), "send", array())) {
                    // line 50
                    echo "                <button class=\"mp-option-setting-send-button sc-button primary\">
                    <i class=\"fa fa-lg fa-send\"></i>
                    ";
                    // line 52
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["buttons"]) ? $context["buttons"] : null), "send", array()), "label", array()), "html", null, true);
                    echo "
                </button>
                ";
                }
                // line 55
                echo "                ";
                if ($this->getAttribute((isset($context["buttons"]) ? $context["buttons"] : null), "reset", array())) {
                    // line 56
                    echo "                <button class=\"mp-option-setting-reset-button sc-button primary\">
                    <i class=\"fa fa-lg fa-asterisk\"></i>
                    ";
                    // line 58
                    echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["buttons"]) ? $context["buttons"] : null), "reset", array()), "label", array()), "html", null, true);
                    echo "
                </button>
                ";
                }
                // line 61
                echo "                ";
            }
            // line 62
            echo "            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 67
    public function getsettingRowWithSelect($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, $__select__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "select" => $__select__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 68
            echo "    ";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 68);
            // line 69
            echo "    ";
            $context["options"] = $this;
            // line 70
            echo "\t<div class=\"mp-option mp-option-setting\" ";
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
                ";
            // line 73
            echo $context["options"]->getlabel((isset($context["label"]) ? $context["label"] : null));
            echo "
    \t\t\t";
            // line 74
            if ( !(isset($context["withoutHelper"]) ? $context["withoutHelper"] : null)) {
                // line 75
                echo "\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t<div>";
                // line 78
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget((isset($context["id"]) ? $context["id"] : null))));
                }
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
                ";
            }
            // line 82
            echo "\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
                ";
            // line 84
            echo (isset($context["input"]) ? $context["input"] : null);
            echo "
\t\t\t\t";
            // line 85
            echo $context["options"]->getselectInput($this->getAttribute((isset($context["select"]) ? $context["select"] : null), "options", array()), $this->getAttribute((isset($context["select"]) ? $context["select"] : null), "name", array()));
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 91
    public function getsettingRowWithInput($__label__ = null, $__input1__ = null, $__id__ = null, $__attributes__ = null, $__input2__ = null, $__withHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input1" => $__input1__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "input2" => $__input2__,
            "withHelper" => $__withHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 92
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 92);
            // line 93
            echo "\t";
            $context["options"] = $this;
            // line 94
            echo "\t<div class=\"mp-option mp-option-setting\" ";
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4\">
\t\t\t\t";
            // line 97
            echo $context["options"]->getlabel((isset($context["label"]) ? $context["label"] : null));
            echo "
\t\t\t\t";
            // line 98
            if (((isset($context["withHelper"]) ? $context["withHelper"] : null) == 1)) {
                // line 99
                echo "\t\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t\t<div>";
                // line 102
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget((isset($context["id"]) ? $context["id"] : null))));
                }
                echo "</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t";
            }
            // line 106
            echo "\t\t\t</div>
\t\t\t<div class=\"col-md-8\">
\t\t\t\t<div class=\"mbs-check-with-input-block\">
\t\t\t\t\t<div class=\"mbs-cwib-check-block\">
\t\t\t\t\t\t";
            // line 110
            echo (isset($context["input1"]) ? $context["input1"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"mbs-cwib-input-block\">
\t\t\t\t\t\t";
            // line 113
            echo (isset($context["input2"]) ? $context["input2"] : null);
            echo "
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 121
    public function getsettingRowWpEditor($__label__ = null, $__input__ = null, $__id__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "input" => $__input__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 122
            echo "    ";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 122);
            // line 123
            echo "    ";
            $context["options"] = $this;
            // line 124
            echo "\t<div class=\"mp-option mp-option-setting\" ";
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
\t\t<div class=\"row\">
\t\t\t<div class=\"col-md-4 offset-md-8\">
                ";
            // line 127
            echo $context["options"]->getlabel((isset($context["label"]) ? $context["label"] : null));
            echo "
\t\t\t\t<div class=\"mp-option-helper tooltip\">
\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t<div>";
            // line 131
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget((isset($context["id"]) ? $context["id"] : null))));
            }
            echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"col-md-12\">
                ";
            // line 136
            echo (isset($context["input"]) ? $context["input"] : null);
            echo "
\t\t\t</div>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 142
    public function getlabel($__label__ = null, $__helper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "helper" => $__helper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 143
            echo "\t<div class=\"mp-option-label\">
\t\t<span title=\"";
            // line 144
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</span>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 148
    public function getradioRow($__label__ = null, $__radios__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "radios" => $__radios__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 149
            echo "\t";
            $context["options"] = $this;
            // line 150
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getradioInput((isset($context["radios"]) ? $context["radios"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 153
    public function getradioRowWithInput($__label__ = null, $__radios__ = null, $__id__ = null, $__attributes__ = null, $__input__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "radios" => $__radios__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "input" => $__input__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 154
            echo "\t";
            $context["options"] = $this;
            // line 155
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getradioWithInput((isset($context["radios"]) ? $context["radios"] : null), (isset($context["input"]) ? $context["input"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 158
    public function getselectRow($__label__ = null, $__options__ = null, $__name__ = null, $__id__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "options" => $__options__,
            "name" => $__name__,
            "id" => $__id__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 159
            echo "\t";
            $context["_options"] = $this;
            // line 160
            echo "\t";
            echo $context["_options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["_options"]->getselectInput((isset($context["options"]) ? $context["options"] : null), (isset($context["name"]) ? $context["name"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 163
    public function getmultipleSelectRow($__label__ = null, $__options__ = null, $__name__ = null, $__id__ = null, $__attributes__ = null, $__selectAttributes__ = null, $__description__ = null, $__withoutHelper__ = null, $__addClasses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "options" => $__options__,
            "name" => $__name__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "selectAttributes" => $__selectAttributes__,
            "description" => $__description__,
            "withoutHelper" => $__withoutHelper__,
            "addClasses" => $__addClasses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 164
            echo "\t";
            $context["_options"] = $this;
            // line 165
            echo "\t";
            echo $context["_options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["_options"]->getmultipleSelectInput((isset($context["options"]) ? $context["options"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["selectAttributes"]) ? $context["selectAttributes"] : null), (isset($context["description"]) ? $context["description"] : null), (isset($context["addClasses"]) ? $context["addClasses"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 168
    public function getwpEditorRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 169
            echo "\t";
            $context["_options"] = $this;
            // line 170
            echo "\t";
            echo $context["_options"]->getsettingRowWpEditor((isset($context["label"]) ? $context["label"] : null), $context["_options"]->getwpEditor((isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null)), (isset($context["id"]) ? $context["id"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 173
    public function getsubmitRow($__label__ = null, $__name__ = null, $__id__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 174
            echo "\t";
            $context["options"] = $this;
            // line 175
            echo "    <div class=\"mp-option mp-option-setting\" ";
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
            // line 178
            echo $context["options"]->getsubmit((isset($context["name"]) ? $context["name"] : null), (isset($context["label"]) ? $context["label"] : null), (isset($context["id"]) ? $context["id"] : null));
            echo "
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 184
    public function getsaveButtonRow($__label__ = null, $__id__ = null, $__attributes__ = null, $__addBtnClasses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "addBtnClasses" => $__addBtnClasses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 185
            echo "\t";
            $context["options"] = $this;
            // line 186
            echo "    <div class=\"mp-option mp-option-setting\" ";
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
        <div class=\"row\">
            <div class=\"col-md-12\">
\t\t\t\t";
            // line 189
            echo $context["options"]->getsaveButton((isset($context["label"]) ? $context["label"] : null), (isset($context["addBtnClasses"]) ? $context["addBtnClasses"] : null));
            echo "
            </div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 195
    public function getsaveButton($__label__ = null, $__addBtnClasses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "addBtnClasses" => $__addBtnClasses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 196
            echo "\t<button data-save-settings class=\"save-settings sc-button icon-button primary ";
            if ((isset($context["addBtnClasses"]) ? $context["addBtnClasses"] : null)) {
                echo twig_escape_filter($this->env, (isset($context["addBtnClasses"]) ? $context["addBtnClasses"] : null), "html", null, true);
            }
            echo "\">
\t\t<i class=\"fa fa-save\"></i>
\t\t<span>";
            // line 198
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</span>
\t</button>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 202
    public function getinputRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__inputAttributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "inputAttributes" => $__inputAttributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 203
            echo "\t";
            $context["options"] = $this;
            // line 204
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->gettextInput((isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["inputAttributes"]) ? $context["inputAttributes"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 207
    public function getemailRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 208
            echo "\t";
            $context["options"] = $this;
            // line 209
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getemailInput((isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 212
    public function gettextareaRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__cols__ = null, $__rows__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "cols" => $__cols__,
            "rows" => $__rows__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 213
            echo "\t";
            $context["options"] = $this;
            // line 214
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->gettextareaInput((isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null), (isset($context["cols"]) ? $context["cols"] : null), (isset($context["rows"]) ? $context["rows"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 217
    public function getcolorRow($__label__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 218
            echo "\t";
            $context["options"] = $this;
            // line 219
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getcolorInput((isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 222
    public function getinputRowWithButton($__label__ = null, $__buttonLabel__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "buttonLabel" => $__buttonLabel__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 223
            echo "\t";
            $context["options"] = $this;
            // line 224
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getinputWithButton((isset($context["buttonLabel"]) ? $context["buttonLabel"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 227
    public function getemailRowWithButton($__label__ = null, $__button__ = null, $__name__ = null, $__value__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "button" => $__button__,
            "name" => $__name__,
            "value" => $__value__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 228
            echo "\t";
            $context["options"] = $this;
            // line 229
            echo "\t";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getemailWithButton((isset($context["button"]) ? $context["button"] : null), (isset($context["name"]) ? $context["name"] : null), (isset($context["value"]) ? $context["value"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 232
    public function getcheckboxRow($__label__ = null, $__checkboxes__ = null, $__id__ = null, $__attributes__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 233
            echo "    ";
            $context["options"] = $this;
            // line 234
            echo "    ";
            echo $context["options"]->getrow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getcheckboxInput((isset($context["checkboxes"]) ? $context["checkboxes"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 237
    public function getcheckboxSettingRow($__label__ = null, $__checkboxes__ = null, $__id__ = null, $__attributes__ = null, $__buttons__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "buttons" => $__buttons__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 238
            echo "    ";
            $context["options"] = $this;
            // line 239
            echo "    ";
            echo $context["options"]->getsettingRow((isset($context["label"]) ? $context["label"] : null), $context["options"]->getcheckboxInput((isset($context["checkboxes"]) ? $context["checkboxes"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["buttons"]) ? $context["buttons"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 242
    public function getcheckboxSettingRowWithSelect($__label__ = null, $__checkboxes__ = null, $__id__ = null, $__attributes__ = null, $__select__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "select" => $__select__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 243
            echo "    ";
            $context["options"] = $this;
            // line 244
            echo "    ";
            echo $context["options"]->getsettingRowWithSelect((isset($context["label"]) ? $context["label"] : null), $context["options"]->getcheckboxInput((isset($context["checkboxes"]) ? $context["checkboxes"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["select"]) ? $context["select"] : null), (isset($context["withoutHelper"]) ? $context["withoutHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 247
    public function getcheckboxSettingRowWithInput($__label__ = null, $__checkboxes__ = null, $__input2__ = null, $__id__ = null, $__attributes__ = null, $__withHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "checkboxes" => $__checkboxes__,
            "input2" => $__input2__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "withHelper" => $__withHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 248
            echo "\t";
            $context["options"] = $this;
            // line 249
            echo "\t";
            echo $context["options"]->getsettingRowWithInput((isset($context["label"]) ? $context["label"] : null), $context["options"]->getcheckboxInput((isset($context["checkboxes"]) ? $context["checkboxes"] : null)), (isset($context["id"]) ? $context["id"] : null), (isset($context["attributes"]) ? $context["attributes"] : null), (isset($context["input2"]) ? $context["input2"] : null), (isset($context["withHelper"]) ? $context["withHelper"] : null));
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 252
    public function getcheckboxInput($__checkboxes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "checkboxes" => $__checkboxes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 253
            echo "\t<div class=\"mp-option-checkbox\">
\t\t";
            // line 254
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["checkboxes"]) ? $context["checkboxes"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 255
                echo "\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t<input
\t\t\t\t\t\ttype=\"checkbox\"
\t\t\t\t\t\tname=\"";
                // line 258
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "name", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\tvalue=\"";
                // line 259
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t";
                // line 260
                if ($this->getAttribute($context["option"], "checked", array())) {
                    // line 261
                    echo "\t\t\t\t\t\t\tchecked=\"true\"
\t\t\t\t\t\t";
                }
                // line 263
                echo "\t\t\t\t\t\t";
                echo $this->getAttribute($context["option"], "attributes", array());
                echo "
\t\t\t\t>
\t\t\t\t";
                // line 265
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "label", array()), "html", null, true);
                echo "
\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t</label>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 269
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 272
    public function getradioInput($__radios__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "radios" => $__radios__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 273
            echo "\t<div class=\"mp-option-controls\">
\t\t";
            // line 274
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["radios"]) ? $context["radios"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["radio"]) {
                // line 275
                echo "\t\t\t<label class=\"sc-radio\">
\t\t\t\t<input 
\t\t\t\t\ttype=\"radio\"
\t\t\t\t\tname=\"";
                // line 278
                echo twig_escape_filter($this->env, $this->getAttribute($context["radio"], "name", array()), "html", null, true);
                echo "\"
\t\t\t\t\tvalue=\"";
                // line 279
                echo twig_escape_filter($this->env, $this->getAttribute($context["radio"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t";
                // line 280
                if ($this->getAttribute($context["radio"], "checked", array())) {
                    // line 281
                    echo "\t\t\t\t\tchecked
\t\t\t\t\t";
                }
                // line 283
                echo "\t\t\t\t>
\t\t\t\t";
                // line 284
                echo twig_escape_filter($this->env, $this->getAttribute($context["radio"], "label", array()), "html", null, true);
                echo "
\t\t\t\t<div class=\"sc-radio-state\"></div>
\t\t\t</label>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['radio'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 288
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 291
    public function gettextInput($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 292
            echo "\t<div class=\"mp-option-input\">
\t\t<input class=\"sc-input\" name=\"";
            // line 293
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 297
    public function gethiddenInput($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 298
            echo "\t<input type=\"hidden\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"";
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo ">
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 301
    public function getwpEditor($__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 302
            echo "\t";
            echo twig_escape_filter($this->env, $this->env->getExtension('Membership_Base_Twig')->callFunction("wp_editor", (isset($context["value"]) ? $context["value"] : null), (isset($context["name"]) ? $context["name"] : null), array("drag_drop_upload" => 1)), "html", null, true);
            // line 304
            echo "
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 307
    public function getemailInput($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 308
            echo "\t<div class=\"mp-option-input\">
\t\t<input class=\"sc-input\" name=\"";
            // line 309
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" type=\"email\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\">
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 313
    public function gettextareaInput($__name__ = null, $__value__ = null, $__cols__ = 35, $__rows__ = 5, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "cols" => $__cols__,
            "rows" => $__rows__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 314
            echo "\t<div class=\"mp-option-input\">
\t\t<textarea class=\"sc-input\" name=\"";
            // line 315
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" cols=\"";
            echo twig_escape_filter($this->env, (isset($context["cols"]) ? $context["cols"] : null), "html", null, true);
            echo "\" rows=\"";
            echo twig_escape_filter($this->env, (isset($context["rows"]) ? $context["rows"] : null), "html", null, true);
            echo "\">";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "</textarea>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 319
    public function getcolorInput($__name__ = null, $__value__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "value" => $__value__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 320
            echo "\t<div class=\"mp-option-color-input\">
\t\t<input class=\"sc-input\" name=\"";
            // line 321
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\">
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 325
    public function getselectInput($__options__ = null, $__name__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "name" => $__name__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 326
            echo "\t<div class=\"mp-option-select\">
\t\t<select class=\"sc-input\" name=\"";
            // line 327
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\">
\t\t\t";
            // line 328
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 329
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\" 
\t\t\t\t\t";
                // line 330
                if ($this->getAttribute($context["option"], "selected", array())) {
                    // line 331
                    echo "\t\t\t\t\t\tselected
\t\t\t\t\t";
                }
                // line 332
                echo "\t
\t\t\t\t\t";
                // line 333
                if ($this->getAttribute($context["option"], "disabled", array())) {
                    // line 334
                    echo "\t\t\t\t\t\tdisabled
\t\t\t\t\t";
                }
                // line 336
                echo "\t\t\t\t>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 338
            echo "\t\t</select>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 342
    public function getcolorInput2($__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 343
            echo "\t<div class=\"mp-option-color-input\">
\t\t<input
\t\t\t";
            // line 345
            if (array_key_exists("attributes", $context)) {
                // line 346
                echo "\t\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
                foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                    // line 347
                    echo "\t\t\t\t\t";
                    if (twig_test_iterable($context["val"])) {
                        // line 348
                        echo "\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["val"]);
                        foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                            echo ":";
                            echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                            echo ";";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\"
\t\t\t\t\t";
                    } else {
                        // line 350
                        echo "\t\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
\t\t\t\t\t";
                    }
                    // line 352
                    echo "\t\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 353
                echo "\t\t\t";
            }
            // line 354
            echo "\t\t/>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 358
    public function getselectInput2($__optionsList__ = null, $__selectedOption__ = null, $__attributes__ = null, $__useWrapper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "optionsList" => $__optionsList__,
            "selectedOption" => $__selectedOption__,
            "attributes" => $__attributes__,
            "useWrapper" => $__useWrapper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 359
            echo "\t";
            if (((isset($context["useWrapper"]) ? $context["useWrapper"] : null) != 0)) {
                // line 360
                echo "\t\t<div class=\"mp-option-select\">
\t";
            }
            // line 362
            echo "\t<select
\t\t";
            // line 363
            if (array_key_exists("attributes", $context)) {
                // line 364
                echo "\t\t\t";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
                foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                    // line 365
                    echo "\t\t\t\t";
                    if (twig_test_iterable($context["val"])) {
                        // line 366
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($context["val"]);
                        foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                            echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                            echo ":";
                            echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                            echo ";";
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "\"
\t\t\t\t";
                    } else {
                        // line 368
                        echo "\t\t\t\t\t";
                        echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                        echo "=\"";
                        echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                        echo "\"
\t\t\t\t";
                    }
                    // line 370
                    echo "\t\t\t";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 371
                echo "\t\t";
            }
            // line 372
            echo "\t\">
\t\t";
            // line 373
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["optionsList"]) ? $context["optionsList"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 374
                echo "\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t";
                // line 375
                if (twig_test_iterable((isset($context["selectedOption"]) ? $context["selectedOption"] : null))) {
                    // line 376
                    echo "\t\t\t\t\t\t";
                    if (twig_in_filter($this->getAttribute($context["option"], "value", array()), (isset($context["selectedOption"]) ? $context["selectedOption"] : null))) {
                        // line 377
                        echo "\t\t\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t\t";
                    }
                    // line 379
                    echo "\t\t\t\t\t";
                } elseif (($this->getAttribute($context["option"], "value", array()) == (isset($context["selectedOption"]) ? $context["selectedOption"] : null))) {
                    // line 380
                    echo "\t\t\t\t\t\tselected=\"selected\"
\t\t\t\t\t";
                }
                // line 382
                echo "\t\t\t\t\t";
                if ($this->getAttribute($context["option"], "disabled", array())) {
                    // line 383
                    echo "\t\t\t\t\t\tdisabled=\"disabled\"
\t\t\t\t\t";
                }
                // line 385
                echo "\t\t\t>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 387
            echo "\t</select>
\t";
            // line 388
            if (((isset($context["useWrapper"]) ? $context["useWrapper"] : null) != 0)) {
                // line 389
                echo "\t\t</div>
\t";
            }
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 393
    public function getmultipleSelectInput($__options__ = null, $__name__ = null, $__attributes__ = null, $__description__ = null, $__addClasses__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "options" => $__options__,
            "name" => $__name__,
            "attributes" => $__attributes__,
            "description" => $__description__,
            "addClasses" => $__addClasses__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 394
            echo "\t<div class=\"mp-option-select\">
\t\t<select class=\"sc-input ";
            // line 395
            if ( !twig_test_empty((isset($context["addClasses"]) ? $context["addClasses"] : null))) {
                echo twig_escape_filter($this->env, (isset($context["addClasses"]) ? $context["addClasses"] : null), "html", null, true);
            }
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "[]\" ";
            echo (isset($context["attributes"]) ? $context["attributes"] : null);
            echo " multiple>
\t\t\t";
            // line 396
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["options"]) ? $context["options"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 397
                echo "\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\" 
\t\t\t\t\t";
                // line 398
                if ($this->getAttribute($context["option"], "selected", array())) {
                    // line 399
                    echo "\t\t\t\t\t\tselected
\t\t\t\t\t";
                }
                // line 400
                echo "\t
\t\t\t\t\t";
                // line 401
                if ($this->getAttribute($context["option"], "disabled", array())) {
                    // line 402
                    echo "\t\t\t\t\t\tdisabled
\t\t\t\t\t";
                }
                // line 404
                echo "\t\t\t\t>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 406
            echo "\t\t</select>
\t\t";
            // line 407
            if ( !twig_test_empty((isset($context["description"]) ? $context["description"] : null))) {
                // line 408
                echo "\t\t\t<div class=\"mp-option-select-description\" id=\"";
                echo twig_escape_filter($this->env, $this->getAttribute((isset($context["description"]) ? $context["description"] : null), "id", array()), "html", null, true);
                echo "\">
\t\t\t\t<span>";
                // line 409
                echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array($this->getAttribute((isset($context["description"]) ? $context["description"] : null), "title", array()))), "html", null, true);
                echo "</span>
\t\t\t</div>
\t\t";
            }
            // line 412
            echo "\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 415
    public function getinputWithButton($__buttonLabel__ = null, $__inputName__ = null, $__inputValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "buttonLabel" => $__buttonLabel__,
            "inputName" => $__inputName__,
            "inputValue" => $__inputValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 416
            echo "\t";
            $context["options"] = $this;
            // line 417
            echo "\t<div class=\"mp-option-input-with-button\">
\t\t<button class=\"mp-option-button sc-button primary\">";
            // line 418
            echo twig_escape_filter($this->env, (isset($context["buttonLabel"]) ? $context["buttonLabel"] : null), "html", null, true);
            echo "</button>
\t\t";
            // line 419
            echo $context["options"]->gettextInput((isset($context["inputName"]) ? $context["inputName"] : null), (isset($context["inputValue"]) ? $context["inputValue"] : null));
            echo "
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 423
    public function getemailWithButton($__button__ = null, $__inputName__ = null, $__inputValue__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "button" => $__button__,
            "inputName" => $__inputName__,
            "inputValue" => $__inputValue__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 424
            echo "\t";
            $context["options"] = $this;
            // line 425
            echo "\t<div class=\"mp-option-input-with-button\">
\t\t";
            // line 426
            echo twig_escape_filter($this->env, (isset($context["button"]) ? $context["button"] : null), "html", null, true);
            echo "
\t\t";
            // line 427
            echo $context["options"]->getemailInput((isset($context["inputName"]) ? $context["inputName"] : null), (isset($context["inputValue"]) ? $context["inputValue"] : null));
            echo "
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 431
    public function getradioWithInput($__radios__ = null, $__input__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "radios" => $__radios__,
            "input" => $__input__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 432
            echo "\t";
            $context["options"] = $this;
            // line 433
            echo "\t<div class=\"mp-option-input-with-input\">
\t\t";
            // line 434
            echo $context["options"]->getradioInput((isset($context["radios"]) ? $context["radios"] : null));
            echo "
\t\t";
            // line 435
            echo twig_escape_filter($this->env, (isset($context["input"]) ? $context["input"] : null), "html", null, true);
            echo "
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 439
    public function getbutton($__label__ = null, $__id__ = null, $__class__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "id" => $__id__,
            "class" => $__class__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 440
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 440);
            // line 441
            echo "    <div class=\"tooltip\">
        <button
                class=\"mp-option-button sc-button primary";
            // line 443
            if ((isset($context["class"]) ? $context["class"] : null)) {
                echo " ";
                echo twig_escape_filter($this->env, (isset($context["class"]) ? $context["class"] : null), "html", null, true);
            }
            echo "\"
                ";
            // line 444
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" title=\"\"";
            }
            // line 445
            echo "        >";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "</button>
        <div class=\"tooltip_content\">
            <div>";
            // line 447
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget((isset($context["id"]) ? $context["id"] : null))));
            }
            echo "</div>
        </div>
    </div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 452
    public function getsubmit($__name__ = null, $__label__ = null, $__id__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "name" => $__name__,
            "label" => $__label__,
            "id" => $__id__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 453
            echo "\t<input type=\"submit\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["label"]) ? $context["label"] : null), "html", null, true);
            echo "\"
\t\t\tclass=\"mp-option-button sc-button primary\"
\t\t\t";
            // line 455
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            // line 456
            echo "\t/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 459
    public function getenablePluginRow($__label__ = null, $__inputName__ = null, $__id__ = null, $__attributes__ = null, $__buttonName__ = null, $__withoutHelper__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "label" => $__label__,
            "inputName" => $__inputName__,
            "id" => $__id__,
            "attributes" => $__attributes__,
            "buttonName" => $__buttonName__,
            "withoutHelper" => $__withoutHelper__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 460
            echo "\t";
            $context["tooltips"] = $this->loadTemplate("@base/macros/tooltips-templates.twig", "@base/macros/options.twig", 460);
            // line 461
            echo "\t";
            $context["options"] = $this;
            // line 462
            echo "
\t<div class=\"row\" ";
            // line 463
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t<div class=\"col-xs-4 mpp-mrgn-top-8\">
\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t<input type=\"checkbox\" name=\"";
            // line 466
            echo twig_escape_filter($this->env, (isset($context["inputName"]) ? $context["inputName"] : null), "html", null, true);
            echo "[enabled]\" value=\"1\" ";
            echo twig_escape_filter($this->env, (($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "input", array(), "any", true, true)) ? ($this->getAttribute((isset($context["attributes"]) ? $context["attributes"] : null), "input", array())) : (null)), "html", null, true);
            echo ">
\t\t\t\t";
            // line 467
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array((isset($context["label"]) ? $context["label"] : null))), "html", null, true);
            echo "
\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t</label>
\t\t\t";
            // line 470
            if ( !(isset($context["withoutHelper"]) ? $context["withoutHelper"] : null)) {
                // line 471
                echo "\t\t\t\t<div class=\"mpp-tooltip tooltip\">
\t\t\t\t\t<i class=\"fa fa-question sc-tooltip\"></i>
\t\t\t\t\t<div class=\"tooltip_content\">
\t\t\t\t\t\t<div>";
                // line 474
                if ((isset($context["id"]) ? $context["id"] : null)) {
                    echo call_user_func_array($this->env->getFunction('translate')->getCallable(), array($context["tooltips"]->getget((isset($context["id"]) ? $context["id"] : null))));
                }
                echo "</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t";
            }
            // line 478
            echo "\t\t</div>
\t\t<div class=\"col-xs-8\">
\t\t\t<button class=\"mpp-button sc-button primary\" ";
            // line 480
            if ((isset($context["id"]) ? $context["id"] : null)) {
                echo "id=\"button-";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\" data-toogle=\"toogle-";
                echo twig_escape_filter($this->env, (isset($context["id"]) ? $context["id"] : null), "html", null, true);
                echo "\"";
            }
            echo ">
\t\t\t\t<i class=\"fa fa-angle-down\"></i>
\t\t\t\t<span>";
            // line 482
            echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array((isset($context["buttonName"]) ? $context["buttonName"] : null))), "html", null, true);
            echo "</span>
\t\t\t</button>
\t\t</div>
\t</div>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    // line 488
    public function getinput($__type__ = "text", $__name__ = null, $__value__ = null, $__attributes__ = null, ...$__varargs__)
    {
        $context = $this->env->mergeGlobals(array(
            "type" => $__type__,
            "name" => $__name__,
            "value" => $__value__,
            "attributes" => $__attributes__,
            "varargs" => $__varargs__,
        ));

        $blocks = array();

        ob_start();
        try {
            // line 489
            echo "\t<input type=\"";
            echo twig_escape_filter($this->env, (isset($context["type"]) ? $context["type"] : null), "html", null, true);
            echo "\" name=\"";
            echo twig_escape_filter($this->env, (isset($context["name"]) ? $context["name"] : null), "html", null, true);
            echo "\" value=\"";
            echo twig_escape_filter($this->env, (isset($context["value"]) ? $context["value"] : null), "html", null, true);
            echo "\"
\t\t";
            // line 490
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["attributes"]) ? $context["attributes"] : null));
            foreach ($context['_seq'] as $context["attribute"] => $context["val"]) {
                // line 491
                echo "\t\t\t";
                if (twig_test_iterable($context["val"])) {
                    // line 492
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    $context['_parent'] = $context;
                    $context['_seq'] = twig_ensure_traversable($context["val"]);
                    foreach ($context['_seq'] as $context["attr"] => $context["param"]) {
                        echo twig_escape_filter($this->env, $context["attr"], "html", null, true);
                        echo ":";
                        echo twig_escape_filter($this->env, $context["param"], "html", null, true);
                        echo ";";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['attr'], $context['param'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    echo "\"
\t\t\t";
                } else {
                    // line 494
                    echo "\t\t\t\t";
                    echo twig_escape_filter($this->env, $context["attribute"], "html", null, true);
                    echo "=\"";
                    echo twig_escape_filter($this->env, $context["val"], "html", null, true);
                    echo "\"
\t\t\t";
                }
                // line 496
                echo "\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['attribute'], $context['val'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 497
            echo "\t/>
";
        } catch (Exception $e) {
            ob_end_clean();

            throw $e;
        } catch (Throwable $e) {
            ob_end_clean();

            throw $e;
        }

        return ('' === $tmp = ob_get_clean()) ? '' : new Twig_Markup($tmp, $this->env->getCharset());
    }

    public function getTemplateName()
    {
        return "@base/macros/options.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  2468 => 497,  2462 => 496,  2454 => 494,  2436 => 492,  2433 => 491,  2429 => 490,  2420 => 489,  2405 => 488,  2385 => 482,  2374 => 480,  2370 => 478,  2361 => 474,  2356 => 471,  2354 => 470,  2348 => 467,  2342 => 466,  2332 => 463,  2329 => 462,  2326 => 461,  2323 => 460,  2306 => 459,  2290 => 456,  2284 => 455,  2276 => 453,  2262 => 452,  2241 => 447,  2235 => 445,  2229 => 444,  2222 => 443,  2218 => 441,  2215 => 440,  2201 => 439,  2183 => 435,  2179 => 434,  2176 => 433,  2173 => 432,  2160 => 431,  2142 => 427,  2138 => 426,  2135 => 425,  2132 => 424,  2118 => 423,  2100 => 419,  2096 => 418,  2093 => 417,  2090 => 416,  2076 => 415,  2060 => 412,  2054 => 409,  2049 => 408,  2047 => 407,  2044 => 406,  2035 => 404,  2031 => 402,  2029 => 401,  2026 => 400,  2022 => 399,  2020 => 398,  2015 => 397,  2011 => 396,  2001 => 395,  1998 => 394,  1982 => 393,  1965 => 389,  1963 => 388,  1960 => 387,  1951 => 385,  1947 => 383,  1944 => 382,  1940 => 380,  1937 => 379,  1933 => 377,  1930 => 376,  1928 => 375,  1923 => 374,  1919 => 373,  1916 => 372,  1913 => 371,  1907 => 370,  1899 => 368,  1881 => 366,  1878 => 365,  1873 => 364,  1871 => 363,  1868 => 362,  1864 => 360,  1861 => 359,  1846 => 358,  1829 => 354,  1826 => 353,  1820 => 352,  1812 => 350,  1794 => 348,  1791 => 347,  1786 => 346,  1784 => 345,  1780 => 343,  1768 => 342,  1751 => 338,  1742 => 336,  1738 => 334,  1736 => 333,  1733 => 332,  1729 => 331,  1727 => 330,  1722 => 329,  1718 => 328,  1714 => 327,  1711 => 326,  1698 => 325,  1678 => 321,  1675 => 320,  1662 => 319,  1638 => 315,  1635 => 314,  1620 => 313,  1600 => 309,  1597 => 308,  1584 => 307,  1568 => 304,  1565 => 302,  1551 => 301,  1529 => 298,  1515 => 297,  1493 => 293,  1490 => 292,  1476 => 291,  1460 => 288,  1450 => 284,  1447 => 283,  1443 => 281,  1441 => 280,  1437 => 279,  1433 => 278,  1428 => 275,  1424 => 274,  1421 => 273,  1409 => 272,  1393 => 269,  1383 => 265,  1377 => 263,  1373 => 261,  1371 => 260,  1367 => 259,  1363 => 258,  1358 => 255,  1354 => 254,  1351 => 253,  1339 => 252,  1321 => 249,  1318 => 248,  1301 => 247,  1283 => 244,  1280 => 243,  1263 => 242,  1245 => 239,  1242 => 238,  1225 => 237,  1207 => 234,  1204 => 233,  1188 => 232,  1170 => 229,  1167 => 228,  1149 => 227,  1131 => 224,  1128 => 223,  1110 => 222,  1092 => 219,  1089 => 218,  1072 => 217,  1054 => 214,  1051 => 213,  1032 => 212,  1014 => 209,  1011 => 208,  994 => 207,  976 => 204,  973 => 203,  956 => 202,  938 => 198,  930 => 196,  917 => 195,  897 => 189,  885 => 186,  882 => 185,  867 => 184,  847 => 178,  835 => 175,  832 => 174,  817 => 173,  799 => 170,  796 => 169,  781 => 168,  763 => 165,  760 => 164,  740 => 163,  722 => 160,  719 => 159,  703 => 158,  685 => 155,  682 => 154,  665 => 153,  647 => 150,  644 => 149,  628 => 148,  608 => 144,  605 => 143,  592 => 142,  572 => 136,  562 => 131,  555 => 127,  543 => 124,  540 => 123,  537 => 122,  522 => 121,  500 => 113,  494 => 110,  488 => 106,  479 => 102,  474 => 99,  472 => 98,  468 => 97,  456 => 94,  453 => 93,  450 => 92,  433 => 91,  413 => 85,  409 => 84,  405 => 82,  396 => 78,  391 => 75,  389 => 74,  385 => 73,  373 => 70,  370 => 69,  367 => 68,  350 => 67,  332 => 62,  329 => 61,  323 => 58,  319 => 56,  316 => 55,  310 => 52,  306 => 50,  303 => 49,  297 => 46,  293 => 44,  290 => 43,  288 => 42,  284 => 41,  280 => 39,  271 => 35,  266 => 32,  264 => 31,  260 => 30,  248 => 27,  245 => 26,  242 => 25,  225 => 24,  205 => 18,  201 => 16,  192 => 12,  187 => 9,  185 => 8,  181 => 7,  169 => 4,  166 => 3,  163 => 2,  147 => 1,  142 => 487,  139 => 458,  136 => 451,  133 => 438,  130 => 430,  127 => 422,  124 => 414,  121 => 392,  118 => 357,  115 => 341,  112 => 324,  109 => 318,  106 => 312,  103 => 306,  100 => 300,  97 => 296,  94 => 290,  91 => 271,  88 => 251,  85 => 246,  82 => 241,  79 => 236,  76 => 231,  73 => 226,  70 => 221,  67 => 216,  64 => 211,  61 => 206,  58 => 201,  55 => 194,  52 => 183,  49 => 172,  46 => 167,  43 => 162,  40 => 157,  37 => 152,  34 => 147,  31 => 141,  28 => 120,  25 => 90,  22 => 66,  19 => 23,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@base/macros/options.twig", "D:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\membership-by-supsystic\\src\\Membership\\Base\\views\\macros\\options.twig");
    }
}
