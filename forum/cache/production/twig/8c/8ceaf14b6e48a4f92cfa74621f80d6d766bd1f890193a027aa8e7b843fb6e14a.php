<?php

/* memberlist_body.html */
class __TwigTemplate_e7df57415a433fbb8e50ceb3f12ba512edd8c7484db8ee3a79937deaf2482529 extends Twig_Template
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
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 2
            echo "\t";
            $location = "simple_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_header.html", "memberlist_body.html", 2)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 3
            echo "        <div class=\"container\">
\t";
            // line 4
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 4)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 5
            echo "\t<form method=\"post\" id=\"results\" action=\"";
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\" onsubmit=\"insert_marked_users('#results', this.user); return false;\" data-form-name=\"";
            echo (isset($context["S_FORM_NAME"]) ? $context["S_FORM_NAME"] : null);
            echo "\" data-field-name=\"";
            echo (isset($context["S_FIELD_NAME"]) ? $context["S_FIELD_NAME"] : null);
            echo "\">

";
        } else {
            // line 8
            echo "\t";
            $location = "overall_header.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_header.html", "memberlist_body.html", 8)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 9
            echo "        <div class=\"container\">
\t<div class=\"panel\" id=\"memberlist_search\"";
            // line 10
            if ( !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null)) {
                echo " style=\"display: none;\"";
            }
            echo ">
\t";
            // line 11
            $location = "memberlist_search.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("memberlist_search.html", "memberlist_body.html", 11)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 12
            echo "\t</div>
\t<form method=\"post\" action=\"";
            // line 13
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">

";
        }
        // line 16
        echo "
\t";
        // line 17
        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
            // line 18
            echo "\t\t<h2 class=\"group-title\"";
            if ((isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null)) {
                echo " style=\"color:#";
                echo (isset($context["GROUP_COLOR"]) ? $context["GROUP_COLOR"] : null);
                echo ";\"";
            }
            echo ">";
            echo (isset($context["GROUP_NAME"]) ? $context["GROUP_NAME"] : null);
            echo "</h2>
\t\t";
            // line 19
            if ((isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null)) {
                // line 20
                echo "\t\t\t<p class=\"right responsive-center manage rightside\"><a href=\"";
                echo (isset($context["U_MANAGE"]) ? $context["U_MANAGE"] : null);
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("MANAGE_GROUP");
                echo "</a></p>
\t\t";
            }
            // line 22
            echo "\t\t<p>";
            echo (isset($context["GROUP_DESC"]) ? $context["GROUP_DESC"] : null);
            echo " ";
            echo (isset($context["GROUP_TYPE"]) ? $context["GROUP_TYPE"] : null);
            echo "</p>

\t\t<p>
\t\t\t";
            // line 25
            if ((isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null)) {
                echo (isset($context["AVATAR_IMG"]) ? $context["AVATAR_IMG"] : null);
            }
            // line 26
            echo "\t\t\t";
            if ((isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null)) {
                echo (isset($context["RANK_IMG"]) ? $context["RANK_IMG"] : null);
            }
            // line 27
            echo "\t\t\t";
            if ((isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null)) {
                echo (isset($context["GROUP_RANK"]) ? $context["GROUP_RANK"] : null);
            }
            // line 28
            echo "\t\t</p>
\t";
        } else {
            // line 30
            echo "\t\t<h2 class=\"solo\">";
            echo (isset($context["PAGE_TITLE"]) ? $context["PAGE_TITLE"] : null);
            if ((isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null)) {
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo " <a href=\"";
                echo (isset($context["U_SEARCH_WORDS"]) ? $context["U_SEARCH_WORDS"] : null);
                echo "\">";
                echo (isset($context["SEARCH_WORDS"]) ? $context["SEARCH_WORDS"] : null);
                echo "</a>";
            }
            echo "</h2>

\t\t<div class=\"action-bar bar-top\">
\t\t\t<div class=\"member-search panel\">
\t\t\t\t";
            // line 34
            if (((isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_FIND_MEMBER"]) ? $context["U_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "</a> &bull; ";
            } elseif ((((isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null) && (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null)) &&  !(isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null))) {
                echo "<a href=\"";
                echo (isset($context["U_HIDE_FIND_MEMBER"]) ? $context["U_HIDE_FIND_MEMBER"] : null);
                echo "\" id=\"member_search\" data-alt-text=\"";
                echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
                echo "\">";
                echo $this->env->getExtension('phpbb')->lang("HIDE_MEMBER_SEARCH");
                echo "</a> &bull; ";
            }
            // line 35
            echo "\t\t\t\t<strong>
\t\t\t\t";
            // line 36
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "first_char", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["first_char"]) {
                // line 37
                echo "\t\t\t\t\t<a href=\"";
                echo $this->getAttribute($context["first_char"], "U_SORT", array());
                echo "\">";
                echo $this->getAttribute($context["first_char"], "DESC", array());
                echo "</a>&nbsp;
\t\t\t\t";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['first_char'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 39
            echo "\t\t\t\t</strong>
\t\t\t</div>

\t\t\t<div class=\"pagination\">
\t\t\t\t";
            // line 43
            echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
            echo "
\t\t\t\t";
            // line 44
            if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
                // line 45
                echo "\t\t\t\t\t";
                $location = "pagination.html";
                $namespace = false;
                if (strpos($location, '@') === 0) {
                    $namespace = substr($location, 1, strpos($location, '/') - 1);
                    $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                    $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
                }
                $this->loadTemplate("pagination.html", "memberlist_body.html", 45)->display($context);
                if ($namespace) {
                    $this->env->setNamespaceLookUpOrder($previous_look_up_order);
                }
                // line 46
                echo "\t\t\t\t";
            } else {
                // line 47
                echo "\t\t\t\t\t &bull; ";
                echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
                echo "
\t\t\t\t";
            }
            // line 49
            echo "\t\t\t</div>
\t\t</div>
\t";
        }
        // line 52
        echo "
\t";
        // line 53
        if ((((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) ||  !(isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) ||  !twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
            // line 54
            echo "\t<div class=\"forumbg forumbg-table\">
\t\t<div class=\"inner\">

\t\t<table class=\"table1 memberlist\" id=\"memberlist\">
\t\t<thead>
\t\t<tr>
\t\t\t<th class=\"name\" data-dfn=\"";
            // line 60
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "\"><span class=\"rank-img\"><a href=\"";
            echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("RANK");
            echo "</a></span><a href=\"";
            echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
            echo "\">";
            if (((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null) && twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array())))) {
                echo $this->env->getExtension('phpbb')->lang("GROUP_LEADER");
            } else {
                echo $this->env->getExtension('phpbb')->lang("USERNAME");
            }
            echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
            // line 61
            echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("POSTS");
            echo "</a></th>
\t\t\t<th class=\"info\">";
            // line 62
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "custom_fields", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                    echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                    echo " ";
                }
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
            // line 63
            echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
            echo "#memberlist\">";
            echo $this->env->getExtension('phpbb')->lang("JOINED");
            echo "</a></th>
\t\t\t";
            // line 64
            if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                echo "<th class=\"active\"><a href=\"";
                echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                echo "#memberlist\">";
                echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                echo "</a></th>";
            }
            // line 65
            echo "\t\t</tr>
\t\t</thead>
\t\t<tbody>
\t";
        }
        // line 69
        echo "\t\t";
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "memberrow", array()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["memberrow"]) {
            // line 70
            echo "\t\t\t";
            if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                // line 71
                echo "\t\t\t\t";
                if (( !$this->getAttribute($context["memberrow"], "S_GROUP_LEADER", array()) &&  !$this->getAttribute((isset($context["definition"]) ? $context["definition"] : null), "S_MEMBER_HEADER", array()))) {
                    // line 72
                    echo "\t\t\t\t";
                    if (((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null) && $this->getAttribute($context["memberrow"], "S_FIRST_ROW", array()))) {
                        // line 73
                        echo "\t\t\t\t<tr class=\"bg1\">
\t\t\t\t\t<td colspan=\"";
                        // line 74
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "5";
                        } else {
                            echo "4";
                        }
                        echo "\">&nbsp;</td>
\t\t\t\t</tr>
\t\t\t\t";
                    }
                    // line 77
                    if ((isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 78
                        echo "\t\t</tbody>
\t\t</table>

\t</div>
</div>
";
                    }
                    // line 84
                    echo "<div class=\"forumbg forumbg-table\">
\t<div class=\"inner\">

\t<table class=\"table1\">
\t<thead>
\t<tr>
\t";
                    // line 90
                    if ( !(isset($context["S_LEADERS_SET"]) ? $context["S_LEADERS_SET"] : null)) {
                        // line 91
                        echo "\t\t<th class=\"name\" data-dfn=\"";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                        echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        echo "\"><span class=\"rank-img\"><a href=\"";
                        echo (isset($context["U_SORT_RANK"]) ? $context["U_SORT_RANK"] : null);
                        echo "\">";
                        echo $this->env->getExtension('phpbb')->lang("RANK");
                        echo "</a></span><a href=\"";
                        echo (isset($context["U_SORT_USERNAME"]) ? $context["U_SORT_USERNAME"] : null);
                        echo "\">";
                        if ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                            echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        } else {
                            echo $this->env->getExtension('phpbb')->lang("USERNAME");
                        }
                        echo "</a></th>
\t\t\t<th class=\"posts\"><a href=\"";
                        // line 92
                        echo (isset($context["U_SORT_POSTS"]) ? $context["U_SORT_POSTS"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</a></th>
\t\t\t<th class=\"info\">";
                        // line 93
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t\t<th class=\"joined\"><a href=\"";
                        // line 94
                        echo (isset($context["U_SORT_JOINED"]) ? $context["U_SORT_JOINED"] : null);
                        echo "#memberlist\">";
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</a></th>
\t\t\t";
                        // line 95
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\"><a href=\"";
                            echo (isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null);
                            echo "#memberlist\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</a></th>";
                        }
                        // line 96
                        echo "\t";
                    } elseif ((isset($context["S_SHOW_GROUP"]) ? $context["S_SHOW_GROUP"] : null)) {
                        // line 97
                        echo "\t\t<th class=\"name\">";
                        echo $this->env->getExtension('phpbb')->lang("GROUP_MEMBERS");
                        echo "</th>
\t\t<th class=\"posts\">";
                        // line 98
                        echo $this->env->getExtension('phpbb')->lang("POSTS");
                        echo "</th>
\t\t<th class=\"info\">";
                        // line 99
                        $context['_parent'] = $context;
                        $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
                        foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                            if ( !$this->getAttribute($context["custom_fields"], "S_FIRST_ROW", array())) {
                                echo $this->env->getExtension('phpbb')->lang("COMMA_SEPARATOR");
                                echo " ";
                            }
                            echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_NAME", array());
                        }
                        $_parent = $context['_parent'];
                        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
                        $context = array_intersect_key($context, $_parent) + $_parent;
                        echo "</th>
\t\t<th class=\"joined\">";
                        // line 100
                        echo $this->env->getExtension('phpbb')->lang("JOINED");
                        echo "</th>
\t\t";
                        // line 101
                        if ((isset($context["U_SORT_ACTIVE"]) ? $context["U_SORT_ACTIVE"] : null)) {
                            echo "<th class=\"active\">";
                            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
                            echo "</th>";
                        }
                        // line 102
                        echo "\t";
                    }
                    // line 103
                    echo "\t</tr>
\t</thead>
\t<tbody>
\t\t\t\t\t";
                    // line 106
                    $value = 1;
                    $context['definition']->set('S_MEMBER_HEADER', $value);
                    // line 107
                    echo "\t\t\t\t";
                }
                // line 108
                echo "\t\t\t";
            }
            // line 109
            echo "
\t<tr class=\"";
            // line 110
            if (($this->getAttribute($context["memberrow"], "S_ROW_COUNT", array()) % 2 == 0)) {
                echo "bg1";
            } else {
                echo "bg2";
            }
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " inactive";
            }
            echo "\">
\t\t<td><span class=\"rank-img\">";
            // line 111
            if ($this->getAttribute($context["memberrow"], "RANK_IMG", array())) {
                echo $this->getAttribute($context["memberrow"], "RANK_IMG", array());
            } else {
                echo $this->getAttribute($context["memberrow"], "RANK_TITLE", array());
            }
            echo "</span>";
            if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
                echo "<input type=\"checkbox\" name=\"user\" value=\"";
                echo $this->getAttribute($context["memberrow"], "USERNAME", array());
                echo "\" /> ";
            }
            echo $this->getAttribute($context["memberrow"], "USERNAME_FULL", array());
            if ($this->getAttribute($context["memberrow"], "S_INACTIVE", array())) {
                echo " (";
                echo $this->env->getExtension('phpbb')->lang("INACTIVE");
                echo ")";
            }
            if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
                echo "<br />[&nbsp;<a href=\"#\" onclick=\"insert_single_user('#results', '";
                echo $this->getAttribute($context["memberrow"], "A_USERNAME", array());
                echo "'); return false;\">";
                echo $this->env->getExtension('phpbb')->lang("SELECT");
                echo "</a>&nbsp;]";
            }
            echo "</td>
\t\t<td class=\"posts\">";
            // line 112
            if (($this->getAttribute($context["memberrow"], "POSTS", array()) && (isset($context["S_DISPLAY_SEARCH"]) ? $context["S_DISPLAY_SEARCH"] : null))) {
                echo "<a href=\"";
                echo $this->getAttribute($context["memberrow"], "U_SEARCH_USER", array());
                echo "\" title=\"";
                echo $this->env->getExtension('phpbb')->lang("SEARCH_USER_POSTS");
                echo "\">";
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
                echo "</a>";
            } else {
                echo $this->getAttribute($context["memberrow"], "POSTS", array());
            }
            echo "</td>
\t\t<td class=\"info\">";
            // line 113
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($context["memberrow"], "custom_fields", array()));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["custom_fields"]) {
                echo "<div>";
                echo $this->getAttribute($context["custom_fields"], "PROFILE_FIELD_VALUE", array());
                echo "</div>";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                echo "&nbsp;";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['custom_fields'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            echo "</td>
\t\t<td>";
            // line 114
            echo $this->getAttribute($context["memberrow"], "JOINED", array());
            echo "</td>
\t\t";
            // line 115
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "<td>";
                echo $this->getAttribute($context["memberrow"], "LAST_ACTIVE", array());
                echo "&nbsp;</td>";
            }
            // line 116
            echo "\t</tr>
\t\t";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 118
            echo "\t<tr class=\"bg1\">
\t\t<td colspan=\"";
            // line 119
            if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
                echo "5";
            } else {
                echo "4";
            }
            echo "\">";
            echo $this->env->getExtension('phpbb')->lang("NO_MEMBERS");
            echo "</td>
\t</tr>
\t\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['memberrow'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 122
        echo "\t</tbody>
\t</table>

\t</div>
</div>

";
        // line 128
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SELECT_SINGLE"]) ? $context["S_SELECT_SINGLE"] : null))) {
            // line 129
            echo "<fieldset class=\"display-actions\">
\t<input type=\"submit\" name=\"submit\" value=\"";
            // line 130
            echo $this->env->getExtension('phpbb')->lang("SELECT_MARKED");
            echo "\" class=\"button2\" />
\t<div><a href=\"#\" onclick=\"marklist('results', 'user', true); return false;\">";
            // line 131
            echo $this->env->getExtension('phpbb')->lang("MARK_ALL");
            echo "</a> &bull; <a href=\"#\" onclick=\"marklist('results', 'user', false); return false;\">";
            echo $this->env->getExtension('phpbb')->lang("UNMARK_ALL");
            echo "</a></div>
</fieldset>
";
        }
        // line 134
        echo "
";
        // line 135
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 136
            echo "</form>
<form method=\"post\" id=\"sort-results\" action=\"";
            // line 137
            echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
            echo "\">
";
        }
        // line 139
        echo "
";
        // line 140
        if (((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null) &&  !(isset($context["S_SEARCH_USER"]) ? $context["S_SEARCH_USER"] : null))) {
            // line 141
            echo "<fieldset class=\"display-options\">
\t<label for=\"sk\">";
            // line 142
            echo $this->env->getExtension('phpbb')->lang("SELECT_SORT_METHOD");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo " <select name=\"sk\" id=\"sk\">";
            echo (isset($context["S_MODE_SELECT"]) ? $context["S_MODE_SELECT"] : null);
            echo "</select></label>
\t<label for=\"sd\">";
            // line 143
            echo $this->env->getExtension('phpbb')->lang("ORDER");
            echo " <select name=\"sd\" id=\"sd\">";
            echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
            echo "</select></label>
\t<input type=\"submit\" name=\"sort\" value=\"";
            // line 144
            echo $this->env->getExtension('phpbb')->lang("SUBMIT");
            echo "\" class=\"button2\" />
</fieldset>
";
        }
        // line 147
        echo "
</form>

<div class=\"action-bar bar-bottom\">
\t<div class=\"pagination\">
\t\t";
        // line 152
        echo (isset($context["TOTAL_USERS"]) ? $context["TOTAL_USERS"] : null);
        echo "
\t\t";
        // line 153
        if (twig_length_filter($this->env, $this->getAttribute((isset($context["loops"]) ? $context["loops"] : null), "pagination", array()))) {
            // line 154
            echo "\t\t\t";
            $location = "pagination.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("pagination.html", "memberlist_body.html", 154)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 155
            echo "\t\t";
        } else {
            // line 156
            echo "\t\t\t &bull; ";
            echo (isset($context["PAGE_NUMBER"]) ? $context["PAGE_NUMBER"] : null);
            echo "
\t\t";
        }
        // line 158
        echo "\t</div>
</div>

";
        // line 161
        if ((isset($context["S_IN_SEARCH_POPUP"]) ? $context["S_IN_SEARCH_POPUP"] : null)) {
            // line 162
            echo "</div>
\t";
            // line 163
            $location = "simple_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("simple_footer.html", "memberlist_body.html", 163)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        } else {
            // line 165
            echo "\t";
            $location = "jumpbox.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("jumpbox.html", "memberlist_body.html", 165)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
            // line 166
            echo "        
\t";
            // line 167
            $location = "overall_footer.html";
            $namespace = false;
            if (strpos($location, '@') === 0) {
                $namespace = substr($location, 1, strpos($location, '/') - 1);
                $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
                $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
            }
            $this->loadTemplate("overall_footer.html", "memberlist_body.html", 167)->display($context);
            if ($namespace) {
                $this->env->setNamespaceLookUpOrder($previous_look_up_order);
            }
        }
    }

    public function getTemplateName()
    {
        return "memberlist_body.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  725 => 167,  722 => 166,  709 => 165,  696 => 163,  693 => 162,  691 => 161,  686 => 158,  680 => 156,  677 => 155,  664 => 154,  662 => 153,  658 => 152,  651 => 147,  645 => 144,  639 => 143,  632 => 142,  629 => 141,  627 => 140,  624 => 139,  619 => 137,  616 => 136,  614 => 135,  611 => 134,  603 => 131,  599 => 130,  596 => 129,  594 => 128,  586 => 122,  571 => 119,  568 => 118,  562 => 116,  556 => 115,  552 => 114,  534 => 113,  520 => 112,  493 => 111,  482 => 110,  479 => 109,  476 => 108,  473 => 107,  470 => 106,  465 => 103,  462 => 102,  456 => 101,  452 => 100,  437 => 99,  433 => 98,  428 => 97,  425 => 96,  417 => 95,  411 => 94,  396 => 93,  390 => 92,  371 => 91,  369 => 90,  361 => 84,  353 => 78,  351 => 77,  341 => 74,  338 => 73,  335 => 72,  332 => 71,  329 => 70,  323 => 69,  317 => 65,  309 => 64,  303 => 63,  288 => 62,  282 => 61,  260 => 60,  252 => 54,  250 => 53,  247 => 52,  242 => 49,  236 => 47,  233 => 46,  220 => 45,  218 => 44,  214 => 43,  208 => 39,  197 => 37,  193 => 36,  190 => 35,  172 => 34,  156 => 30,  152 => 28,  147 => 27,  142 => 26,  138 => 25,  129 => 22,  121 => 20,  119 => 19,  108 => 18,  106 => 17,  103 => 16,  97 => 13,  94 => 12,  82 => 11,  76 => 10,  73 => 9,  60 => 8,  49 => 5,  37 => 4,  34 => 3,  21 => 2,  19 => 1,);
    }
}
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* 	<!-- INCLUDE simple_header.html -->*/
/*         <div class="container">*/
/* 	<!-- INCLUDE memberlist_search.html -->*/
/* 	<form method="post" id="results" action="{S_MODE_ACTION}" onsubmit="insert_marked_users('#results', this.user); return false;" data-form-name="{S_FORM_NAME}" data-field-name="{S_FIELD_NAME}">*/
/* */
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE overall_header.html -->*/
/*         <div class="container">*/
/* 	<div class="panel" id="memberlist_search"<!-- IF not S_SEARCH_USER --> style="display: none;"<!-- ENDIF -->>*/
/* 	<!-- INCLUDE memberlist_search.html -->*/
/* 	</div>*/
/* 	<form method="post" action="{S_MODE_ACTION}">*/
/* */
/* <!-- ENDIF -->*/
/* */
/* 	<!-- IF S_SHOW_GROUP -->*/
/* 		<h2 class="group-title"<!-- IF GROUP_COLOR --> style="color:#{GROUP_COLOR};"<!-- ENDIF -->>{GROUP_NAME}</h2>*/
/* 		<!-- IF U_MANAGE -->*/
/* 			<p class="right responsive-center manage rightside"><a href="{U_MANAGE}">{L_MANAGE_GROUP}</a></p>*/
/* 		<!-- ENDIF -->*/
/* 		<p>{GROUP_DESC} {GROUP_TYPE}</p>*/
/* */
/* 		<p>*/
/* 			<!-- IF AVATAR_IMG -->{AVATAR_IMG}<!-- ENDIF -->*/
/* 			<!-- IF RANK_IMG -->{RANK_IMG}<!-- ENDIF -->*/
/* 			<!-- IF GROUP_RANK -->{GROUP_RANK}<!-- ENDIF -->*/
/* 		</p>*/
/* 	<!-- ELSE -->*/
/* 		<h2 class="solo">{PAGE_TITLE}<!-- IF SEARCH_WORDS -->{L_COLON} <a href="{U_SEARCH_WORDS}">{SEARCH_WORDS}</a><!-- ENDIF --></h2>*/
/* */
/* 		<div class="action-bar bar-top">*/
/* 			<div class="member-search panel">*/
/* 				<!-- IF U_FIND_MEMBER and not S_SEARCH_USER --><a href="{U_FIND_MEMBER}" id="member_search" data-alt-text="{L_HIDE_MEMBER_SEARCH}">{L_FIND_USERNAME}</a> &bull; <!-- ELSEIF S_SEARCH_USER and U_HIDE_FIND_MEMBER and not S_IN_SEARCH_POPUP --><a href="{U_HIDE_FIND_MEMBER}" id="member_search" data-alt-text="{L_FIND_USERNAME}">{L_HIDE_MEMBER_SEARCH}</a> &bull; <!-- ENDIF -->*/
/* 				<strong>*/
/* 				<!-- BEGIN first_char -->*/
/* 					<a href="{first_char.U_SORT}">{first_char.DESC}</a>&nbsp;*/
/* 				<!-- END first_char -->*/
/* 				</strong>*/
/* 			</div>*/
/* */
/* 			<div class="pagination">*/
/* 				{TOTAL_USERS}*/
/* 				<!-- IF .pagination -->*/
/* 					<!-- INCLUDE pagination.html -->*/
/* 				<!-- ELSE -->*/
/* 					 &bull; {PAGE_NUMBER}*/
/* 				<!-- ENDIF -->*/
/* 			</div>*/
/* 		</div>*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<!-- IF S_LEADERS_SET or not S_SHOW_GROUP or not .memberrow -->*/
/* 	<div class="forumbg forumbg-table">*/
/* 		<div class="inner">*/
/* */
/* 		<table class="table1 memberlist" id="memberlist">*/
/* 		<thead>*/
/* 		<tr>*/
/* 			<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}<!-- IF S_SHOW_GROUP and .memberrow -->{L_GROUP_LEADER}<!-- ELSE -->{L_USERNAME}<!-- ENDIF -->"><span class="rank-img"><a href="{U_SORT_RANK}">{L_RANK}</a></span><a href="{U_SORT_USERNAME}"><!-- IF S_SHOW_GROUP and .memberrow -->{L_GROUP_LEADER}<!-- ELSE -->{L_USERNAME}<!-- ENDIF --></a></th>*/
/* 			<th class="posts"><a href="{U_SORT_POSTS}#memberlist">{L_POSTS}</a></th>*/
/* 			<th class="info"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 			<th class="joined"><a href="{U_SORT_JOINED}#memberlist">{L_JOINED}</a></th>*/
/* 			<!-- IF U_SORT_ACTIVE --><th class="active"><a href="{U_SORT_ACTIVE}#memberlist">{L_LAST_ACTIVE}</a></th><!-- ENDIF -->*/
/* 		</tr>*/
/* 		</thead>*/
/* 		<tbody>*/
/* 	<!-- ENDIF -->*/
/* 		<!-- BEGIN memberrow -->*/
/* 			<!-- IF S_SHOW_GROUP -->*/
/* 				<!-- IF not memberrow.S_GROUP_LEADER and not $S_MEMBER_HEADER -->*/
/* 				<!-- IF S_LEADERS_SET and memberrow.S_FIRST_ROW -->*/
/* 				<tr class="bg1">*/
/* 					<td colspan="<!-- IF U_SORT_ACTIVE -->5<!-- ELSE -->4<!-- ENDIF -->">&nbsp;</td>*/
/* 				</tr>*/
/* 				<!-- ENDIF -->*/
/* <!-- IF S_LEADERS_SET -->*/
/* 		</tbody>*/
/* 		</table>*/
/* */
/* 	</div>*/
/* </div>*/
/* <!-- ENDIF -->*/
/* <div class="forumbg forumbg-table">*/
/* 	<div class="inner">*/
/* */
/* 	<table class="table1">*/
/* 	<thead>*/
/* 	<tr>*/
/* 	<!-- IF not S_LEADERS_SET -->*/
/* 		<th class="name" data-dfn="{L_RANK}{L_COMMA_SEPARATOR}{L_USERNAME}"><span class="rank-img"><a href="{U_SORT_RANK}">{L_RANK}</a></span><a href="{U_SORT_USERNAME}"><!-- IF S_SHOW_GROUP -->{L_GROUP_MEMBERS}<!-- ELSE -->{L_USERNAME}<!-- ENDIF --></a></th>*/
/* 			<th class="posts"><a href="{U_SORT_POSTS}#memberlist">{L_POSTS}</a></th>*/
/* 			<th class="info"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 			<th class="joined"><a href="{U_SORT_JOINED}#memberlist">{L_JOINED}</a></th>*/
/* 			<!-- IF U_SORT_ACTIVE --><th class="active"><a href="{U_SORT_ACTIVE}#memberlist">{L_LAST_ACTIVE}</a></th><!-- ENDIF -->*/
/* 	<!-- ELSEIF S_SHOW_GROUP -->*/
/* 		<th class="name">{L_GROUP_MEMBERS}</th>*/
/* 		<th class="posts">{L_POSTS}</th>*/
/* 		<th class="info"><!-- BEGIN custom_fields --><!-- IF not custom_fields.S_FIRST_ROW -->{L_COMMA_SEPARATOR} <!-- ENDIF -->{custom_fields.PROFILE_FIELD_NAME}<!-- END custom_fields --></th>*/
/* 		<th class="joined">{L_JOINED}</th>*/
/* 		<!-- IF U_SORT_ACTIVE --><th class="active">{L_LAST_ACTIVE}</th><!-- ENDIF -->*/
/* 	<!-- ENDIF -->*/
/* 	</tr>*/
/* 	</thead>*/
/* 	<tbody>*/
/* 					<!-- DEFINE $S_MEMBER_HEADER = 1 -->*/
/* 				<!-- ENDIF -->*/
/* 			<!-- ENDIF -->*/
/* */
/* 	<tr class="<!-- IF memberrow.S_ROW_COUNT is even -->bg1<!-- ELSE -->bg2<!-- ENDIF --><!-- IF memberrow.S_INACTIVE --> inactive<!-- ENDIF -->">*/
/* 		<td><span class="rank-img"><!-- EVENT memberlist_body_rank_prepend --><!-- IF memberrow.RANK_IMG -->{memberrow.RANK_IMG}<!-- ELSE -->{memberrow.RANK_TITLE}<!-- ENDIF --><!-- EVENT memberlist_body_rank_append --></span><!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE --><input type="checkbox" name="user" value="{memberrow.USERNAME}" /> <!-- ENDIF --><!-- EVENT memberlist_body_username_prepend -->{memberrow.USERNAME_FULL}<!-- IF memberrow.S_INACTIVE --> ({L_INACTIVE})<!-- ENDIF --><!-- EVENT memberlist_body_username_append --><!-- IF S_IN_SEARCH_POPUP --><br />[&nbsp;<a href="#" onclick="insert_single_user('#results', '{memberrow.A_USERNAME}'); return false;">{L_SELECT}</a>&nbsp;]<!-- ENDIF --></td>*/
/* 		<td class="posts"><!-- IF memberrow.POSTS and S_DISPLAY_SEARCH --><a href="{memberrow.U_SEARCH_USER}" title="{L_SEARCH_USER_POSTS}">{memberrow.POSTS}</a><!-- ELSE -->{memberrow.POSTS}<!-- ENDIF --></td>*/
/* 		<td class="info"><!-- BEGIN custom_fields --><div>{memberrow.custom_fields.PROFILE_FIELD_VALUE}</div><!-- BEGINELSE -->&nbsp;<!-- END custom_fields --></td>*/
/* 		<td>{memberrow.JOINED}</td>*/
/* 		<!-- IF S_VIEWONLINE --><td>{memberrow.LAST_ACTIVE}&nbsp;</td><!-- ENDIF -->*/
/* 	</tr>*/
/* 		<!-- BEGINELSE -->*/
/* 	<tr class="bg1">*/
/* 		<td colspan="<!-- IF S_VIEWONLINE -->5<!-- ELSE -->4<!-- ENDIF -->">{L_NO_MEMBERS}</td>*/
/* 	</tr>*/
/* 		<!-- END memberrow -->*/
/* 	</tbody>*/
/* 	</table>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP and not S_SELECT_SINGLE -->*/
/* <fieldset class="display-actions">*/
/* 	<input type="submit" name="submit" value="{L_SELECT_MARKED}" class="button2" />*/
/* 	<div><a href="#" onclick="marklist('results', 'user', true); return false;">{L_MARK_ALL}</a> &bull; <a href="#" onclick="marklist('results', 'user', false); return false;">{L_UNMARK_ALL}</a></div>*/
/* </fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* </form>*/
/* <form method="post" id="sort-results" action="{S_MODE_ACTION}">*/
/* <!-- ENDIF -->*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP and not S_SEARCH_USER -->*/
/* <fieldset class="display-options">*/
/* 	<label for="sk">{L_SELECT_SORT_METHOD}{L_COLON} <select name="sk" id="sk">{S_MODE_SELECT}</select></label>*/
/* 	<label for="sd">{L_ORDER} <select name="sd" id="sd">{S_ORDER_SELECT}</select></label>*/
/* 	<input type="submit" name="sort" value="{L_SUBMIT}" class="button2" />*/
/* </fieldset>*/
/* <!-- ENDIF -->*/
/* */
/* </form>*/
/* */
/* <div class="action-bar bar-bottom">*/
/* 	<div class="pagination">*/
/* 		{TOTAL_USERS}*/
/* 		<!-- IF .pagination -->*/
/* 			<!-- INCLUDE pagination.html -->*/
/* 		<!-- ELSE -->*/
/* 			 &bull; {PAGE_NUMBER}*/
/* 		<!-- ENDIF -->*/
/* 	</div>*/
/* </div>*/
/* */
/* <!-- IF S_IN_SEARCH_POPUP -->*/
/* </div>*/
/* 	<!-- INCLUDE simple_footer.html -->*/
/* <!-- ELSE -->*/
/* 	<!-- INCLUDE jumpbox.html -->*/
/*         */
/* 	<!-- INCLUDE overall_footer.html -->*/
/* <!-- ENDIF -->*/
/* */
