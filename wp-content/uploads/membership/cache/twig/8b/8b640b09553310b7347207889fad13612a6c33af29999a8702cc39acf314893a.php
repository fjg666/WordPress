<?php

/* @roles/backend/index.twig */
class __TwigTemplate_a5ea31b5845bf3149b412167ad816198dfb9d4f36b9ed504e20c05824fdf2f8f extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@base/layouts/backend.twig", "@roles/backend/index.twig", 1);
        $this->blocks = array(
            'mainHeader' => array($this, 'block_mainHeader'),
            'head' => array($this, 'block_head'),
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
        $context["options"] = $this->loadTemplate("@base/macros/options.twig", "@roles/backend/index.twig", 2);
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_mainHeader($context, array $blocks = array())
    {
        // line 5
        echo "
";
    }

    // line 8
    public function block_head($context, array $blocks = array())
    {
        // line 9
        echo "\t";
    }

    // line 18
    public function block_main($context, array $blocks = array())
    {
        // line 19
        echo "\t";
        $context["_roles"] = array(0 => array("title" => call_user_func_array($this->env->getFunction('translate')->getCallable(), array("All")), "value" => "all"));
        // line 23
        echo "\t
\t";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["value"] => $context["role"]) {
            // line 25
            echo "\t\t";
            if (($this->getAttribute($context["role"], "type", array()) != "__guest__")) {
                // line 26
                echo "\t\t\t";
                $context["_roles"] = twig_array_merge((isset($context["_roles"]) ? $context["_roles"] : null), array(0 => array("title" => $this->getAttribute(                // line 27
$context["role"], "name", array()), "value" => $this->getAttribute(                // line 28
$context["role"], "id", array()))));
                // line 30
                echo "\t\t";
            }
            // line 31
            echo "\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['value'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "\t
\t<div class=\"sc-tabs-container\">
\t\t<div class=\"sc-tab-content active\" data-tab=\"roles\">
\t\t\t<h2 class=\"sc-header\">";
        // line 35
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Roles")), "html", null, true);
        echo "</h2>
\t\t\t<button class=\"sc-button primary add-new-role\">";
        // line 36
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add new role")), "html", null, true);
        echo "</button>
\t\t\t<div class=\"roles-table-wrap\">
\t\t\t\t<table class=\"sc-table roles\">
\t\t\t\t\t<tr>
\t\t\t\t\t\t<th>";
        // line 40
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Role Name")), "html", null, true);
        echo "</th>
\t\t\t\t\t\t";
        // line 41
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 42
            echo "\t\t\t\t\t\t\t<th data-id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "id", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t<div>
\t\t\t\t\t\t\t\t\t<input style=\"max-width: calc(100% - 30px);\" type=\"text\" class=\"sc-input\" name=\"name\" value=\"";
            // line 44
            echo twig_escape_filter($this->env, $this->getAttribute($context["role"], "name", array()), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 45
            if (($this->getAttribute($context["role"], "type", array()) != "__guest__")) {
                // line 46
                echo "\t\t\t\t\t\t\t\t\t\t<div style=\"margin: 0 10px; display: inline; cursor: pointer\" class=\"remove-role\">
\t\t\t\t\t\t\t\t\t\t\t<i class=\"fa fa-remove\"></i>
\t\t\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t\t\t";
            }
            // line 50
            echo "\t\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t\t</th>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 53
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>";
        // line 55
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Administrative permissions")), "html", null, true);
        echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 58
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Access to admin dashboard")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 59
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 60
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"can-access-wp-admin\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 63
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "can-access-wp-admin", array(), "array") == "true")) {
                // line 64
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 66
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 67
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 69
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 74
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 76
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("See dashboard bar")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 77
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 78
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"can-see-admin-bar\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 81
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "can-see-admin-bar", array(), "array") == "true")) {
                // line 82
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 84
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 85
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 87
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 92
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>";
        // line 94
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Activities")), "html", null, true);
        echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 97
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Edit or delete other users activity")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 99
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"edit-activities\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 102
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "edit-activity", array(), "array") == "true")) {
                // line 103
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 105
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 106
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 108
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 113
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>";
        // line 115
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Profile")), "html", null, true);
        echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 118
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Delete their account")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 119
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 120
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"can-delete-their-account\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 123
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "can-delete-their-account", array(), "array") == "true")) {
                // line 124
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 126
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 127
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 129
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 134
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 136
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Access to user profiles with specific roles")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 137
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 138
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<select class=\"sc-input\" name=\"access-to-specific-roles-page\" multiple=\"\"
\t\t\t\t\t\t\t\t        data-value=\"";
            // line 140
            echo twig_escape_filter($this->env, twig_jsonencode_filter((isset($context["_roles"]) ? $context["_roles"] : null)), "html", null, true);
            echo "\">
\t\t\t\t\t\t\t\t\t";
            // line 141
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable((isset($context["_roles"]) ? $context["_roles"] : null));
            foreach ($context['_seq'] as $context["_key"] => $context["option"]) {
                // line 142
                echo "\t\t\t\t\t\t\t\t\t\t<option value=\"";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "value", array()), "html", null, true);
                echo "\"
\t\t\t\t\t\t\t\t\t\t\t\t";
                // line 143
                if (twig_in_filter($this->getAttribute($context["option"], "value", array()), $this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "access-to-specific-roles-page", array(), "array"))) {
                    // line 144
                    echo "\t\t\t\t\t\t\t\t\t\t\t\t\tselected
\t\t\t\t\t\t\t\t\t\t\t\t";
                }
                // line 146
                echo "\t\t\t\t\t\t\t\t\t\t>";
                echo twig_escape_filter($this->env, $this->getAttribute($context["option"], "title", array()), "html", null, true);
                echo "</option>
\t\t\t\t\t\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 148
            echo "\t\t\t\t\t\t\t\t</select>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 151
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 153
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Allow to change privacy settings")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 154
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 155
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"change-privacy-settings\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 158
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "change-privacy-settings", array(), "array") == "true")) {
                // line 159
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 161
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 162
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 164
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 169
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 171
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Apply WordPress role")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 172
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 173
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t";
            // line 174
            echo $context["options"]->getselectInput2(            // line 175
(isset($context["wpRoles"]) ? $context["wpRoles"] : null), (($this->getAttribute($this->getAttribute(            // line 176
$context["role"], "settings", array(), "any", false, true), "wp-role", array(), "array", true, true)) ? (_twig_default_filter($this->getAttribute($this->getAttribute($context["role"], "settings", array(), "any", false, true), "wp-role", array(), "array"), (isset($context["wpDefaultRole"]) ? $context["wpDefaultRole"] : null))) : ((isset($context["wpDefaultRole"]) ? $context["wpDefaultRole"] : null))), array("name" => "wp-role", "data-role-id" => $this->getAttribute(            // line 179
$context["role"], "id", array())));
            // line 181
            echo "
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 184
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>";
        // line 186
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Groups")), "html", null, true);
        echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 189
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Create groups")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 190
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 191
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"can-create-groups\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 194
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "can-create-groups", array(), "array") == "true")) {
                // line 195
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 197
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 198
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 200
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 205
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 207
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Join groups")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 208
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 209
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"join-groups\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 212
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "join-groups", array(), "array") == "true")) {
                // line 213
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 215
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 216
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 218
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 223
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 225
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Read groups")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 226
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 227
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"read-groups\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 230
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "read-groups", array(), "array") == "true")) {
                // line 231
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 233
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 238
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 240
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Block groups")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 241
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 242
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"can-block-groups\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 245
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "can-block-groups", array(), "array") == "true")) {
                // line 246
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 248
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 249
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 251
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 256
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>";
        // line 258
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Messages")), "html", null, true);
        echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 261
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Send and receive messages")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 262
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 263
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"send-and-receive-messages\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 266
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "send-and-receive-messages", array(), "array") == "true")) {
                // line 267
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 269
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 270
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 272
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 277
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>";
        // line 279
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Access to specific pages")), "html", null, true);
        echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 282
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Members page")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 283
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 284
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"access-to-members-page\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 287
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "access-to-members-page", array(), "array") == "true")) {
                // line 288
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 290
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 295
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 297
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Global activity page")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 298
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 299
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"access-to-global-activity-page\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 302
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "access-to-global-activity-page", array(), "array") == "true")) {
                // line 303
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 305
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 310
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 312
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Users profile activity page")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 313
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 314
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"access-to-profile-activity-page\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 317
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "access-to-profile-activity-page", array(), "array") == "true")) {
                // line 318
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 320
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 325
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td><b>";
        // line 327
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Social")), "html", null, true);
        echo "</b></td>
\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 330
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Add remove friends")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 331
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 332
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"add-friends\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 335
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "add-friends", array(), "array") == "true")) {
                // line 336
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 338
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 339
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 341
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 346
        echo "\t\t\t\t\t</tr>
\t\t\t\t\t<tr>
\t\t\t\t\t\t<td>";
        // line 348
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Follow unfollow users")), "html", null, true);
        echo "</td>
\t\t\t\t\t\t";
        // line 349
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["roles"]) ? $context["roles"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["role"]) {
            // line 350
            echo "\t\t\t\t\t\t\t<td>
\t\t\t\t\t\t\t\t<label class=\"sc-checkbox\">
\t\t\t\t\t\t\t\t\t<input type=\"checkbox\" value=\"true\" name=\"follow\"
\t\t\t\t\t\t\t\t\t\t\t";
            // line 353
            if (($this->getAttribute($this->getAttribute($context["role"], "permissions", array()), "follow", array(), "array") == "true")) {
                // line 354
                echo "\t\t\t\t\t\t\t\t\t\t\t\tchecked=\"checked\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 356
            echo "\t\t\t\t\t\t\t\t\t\t\t";
            if (($this->getAttribute($context["role"], "type", array()) == "__guest__")) {
                // line 357
                echo "\t\t\t\t\t\t\t\t\t\t\t\tdisabled=\"true\"
\t\t\t\t\t\t\t\t\t\t\t";
            }
            // line 359
            echo "\t\t\t\t\t\t\t\t\t>
\t\t\t\t\t\t\t\t\t<div class=\"sc-checkbox-state\"></div>
\t\t\t\t\t\t\t\t</label>
\t\t\t\t\t\t\t</td>
\t\t\t\t\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['role'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 364
        echo "\t\t\t\t\t</tr>
\t\t\t\t</table>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"new-role-template\" style=\"display:none;\">
\t\t\t\t<div class=\"mp-option\">
\t\t\t\t\t<div class=\"row\">
\t\t\t\t\t\t<div class=\"col-md-5\">
\t\t\t\t\t\t\t";
        // line 372
        echo $context["options"]->getlabel(call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Role name")));
        echo "
\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"col-md-7\">
\t\t\t\t\t\t\t<div class=\"mp-option-input\">
\t\t\t\t\t\t\t\t<input class=\"sc-input\" name=\"name\">
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t
\t\t\t<div class=\"remove-role-template\" style=\"display:none;\">
\t\t\t\t<div>";
        // line 384
        echo twig_escape_filter($this->env, call_user_func_array($this->env->getFunction('translate')->getCallable(), array("Are you sure you want to delete this role?")), "html", null, true);
        echo "</div>
\t\t\t</div>
\t\t</div>
\t</div>

\t
";
    }

    public function getTemplateName()
    {
        return "@roles/backend/index.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  847 => 384,  832 => 372,  822 => 364,  812 => 359,  808 => 357,  805 => 356,  801 => 354,  799 => 353,  794 => 350,  790 => 349,  786 => 348,  782 => 346,  772 => 341,  768 => 339,  765 => 338,  761 => 336,  759 => 335,  754 => 332,  750 => 331,  746 => 330,  740 => 327,  736 => 325,  726 => 320,  722 => 318,  720 => 317,  715 => 314,  711 => 313,  707 => 312,  703 => 310,  693 => 305,  689 => 303,  687 => 302,  682 => 299,  678 => 298,  674 => 297,  670 => 295,  660 => 290,  656 => 288,  654 => 287,  649 => 284,  645 => 283,  641 => 282,  635 => 279,  631 => 277,  621 => 272,  617 => 270,  614 => 269,  610 => 267,  608 => 266,  603 => 263,  599 => 262,  595 => 261,  589 => 258,  585 => 256,  575 => 251,  571 => 249,  568 => 248,  564 => 246,  562 => 245,  557 => 242,  553 => 241,  549 => 240,  545 => 238,  535 => 233,  531 => 231,  529 => 230,  524 => 227,  520 => 226,  516 => 225,  512 => 223,  502 => 218,  498 => 216,  495 => 215,  491 => 213,  489 => 212,  484 => 209,  480 => 208,  476 => 207,  472 => 205,  462 => 200,  458 => 198,  455 => 197,  451 => 195,  449 => 194,  444 => 191,  440 => 190,  436 => 189,  430 => 186,  426 => 184,  418 => 181,  416 => 179,  415 => 176,  414 => 175,  413 => 174,  410 => 173,  406 => 172,  402 => 171,  398 => 169,  388 => 164,  384 => 162,  381 => 161,  377 => 159,  375 => 158,  370 => 155,  366 => 154,  362 => 153,  358 => 151,  350 => 148,  341 => 146,  337 => 144,  335 => 143,  330 => 142,  326 => 141,  322 => 140,  318 => 138,  314 => 137,  310 => 136,  306 => 134,  296 => 129,  292 => 127,  289 => 126,  285 => 124,  283 => 123,  278 => 120,  274 => 119,  270 => 118,  264 => 115,  260 => 113,  250 => 108,  246 => 106,  243 => 105,  239 => 103,  237 => 102,  232 => 99,  228 => 98,  224 => 97,  218 => 94,  214 => 92,  204 => 87,  200 => 85,  197 => 84,  193 => 82,  191 => 81,  186 => 78,  182 => 77,  178 => 76,  174 => 74,  164 => 69,  160 => 67,  157 => 66,  153 => 64,  151 => 63,  146 => 60,  142 => 59,  138 => 58,  132 => 55,  128 => 53,  120 => 50,  114 => 46,  112 => 45,  108 => 44,  102 => 42,  98 => 41,  94 => 40,  87 => 36,  83 => 35,  78 => 32,  72 => 31,  69 => 30,  67 => 28,  66 => 27,  64 => 26,  61 => 25,  57 => 24,  54 => 23,  51 => 19,  48 => 18,  44 => 9,  41 => 8,  36 => 5,  33 => 4,  29 => 1,  27 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("", "@roles/backend/index.twig", "D:\\xampp\\htdocs\\wordpress\\wp-content\\plugins\\membership-by-supsystic\\src\\Membership\\Roles\\views\\backend\\index.twig");
    }
}
