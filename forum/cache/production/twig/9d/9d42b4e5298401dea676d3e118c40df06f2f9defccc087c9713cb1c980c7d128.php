<?php

/* memberlist_search.html */
class __TwigTemplate_764b9be8afa3b34708c1946f34bd06a616ae6491bc5405f1dd59c72eb59b2497 extends Twig_Template
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
        echo "<div class=\"container\">
<h2 class=\"solo\">";
        // line 2
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME");
        echo "</h2>

<form method=\"post\" action=\"";
        // line 4
        echo (isset($context["S_MODE_ACTION"]) ? $context["S_MODE_ACTION"] : null);
        echo "\" id=\"search_memberlist\">
<div class=\"panel\">
\t<div class=\"inner\">

\t<p>";
        // line 8
        echo $this->env->getExtension('phpbb')->lang("FIND_USERNAME_EXPLAIN");
        echo "</p>

\t";
        // line 10
        // line 11
        echo "\t<fieldset class=\"fields1 column1\">
\t<dl style=\"overflow: visible;\">
\t\t<dt><label for=\"username\">";
        // line 13
        echo $this->env->getExtension('phpbb')->lang("USERNAME");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd>
\t\t\t";
        // line 15
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            echo "<div class=\"dropdown-container dropdown-";
            echo (isset($context["S_CONTENT_FLOW_END"]) ? $context["S_CONTENT_FLOW_END"] : null);
            echo "\">";
        }
        // line 16
        echo "\t\t\t<input type=\"text\" name=\"username\" id=\"username\" value=\"";
        echo (isset($context["USERNAME"]) ? $context["USERNAME"] : null);
        echo "\" class=\"inputbox\"";
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            echo " autocomplete=\"off\" data-filter=\"phpbb.search.filter\" data-ajax=\"member_search\" data-min-length=\"3\" data-url=\"";
            echo (isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null);
            echo "\" data-results=\"#user-search\" data-overlay=\"false\"";
        }
        echo " />
\t\t\t";
        // line 17
        if ((isset($context["U_LIVE_SEARCH"]) ? $context["U_LIVE_SEARCH"] : null)) {
            // line 18
            echo "\t\t\t\t<div class=\"dropdown live-search hidden\" id=\"user-search\">
\t\t\t\t\t<div class=\"pointer\"><div class=\"pointer-inner\"></div></div>
\t\t\t\t\t<ul class=\"dropdown-contents search-results\">
\t\t\t\t\t\t<li class=\"search-result-tpl\"><span class=\"search-result\"></span></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t";
        }
        // line 26
        echo "\t\t</dd>
\t</dl>
";
        // line 28
        if ((isset($context["S_EMAIL_SEARCH_ALLOWED"]) ? $context["S_EMAIL_SEARCH_ALLOWED"] : null)) {
            // line 29
            echo "\t<dl>
\t\t<dt><label for=\"email\">";
            // line 30
            echo $this->env->getExtension('phpbb')->lang("EMAIL");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"email\" id=\"email\" value=\"";
            // line 31
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
        // line 34
        if ((isset($context["S_JABBER_ENABLED"]) ? $context["S_JABBER_ENABLED"] : null)) {
            // line 35
            echo "\t<dl>
\t\t<dt><label for=\"jabber\">";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("JABBER");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input type=\"text\" name=\"jabber\" id=\"jabber\" value=\"";
            // line 37
            echo (isset($context["JABBER"]) ? $context["JABBER"] : null);
            echo "\" class=\"inputbox\" /></dd>
\t</dl>
";
        }
        // line 40
        echo "\t<dl>
\t\t<dt><label for=\"search_group_id\">";
        // line 41
        echo $this->env->getExtension('phpbb')->lang("GROUP");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"search_group_id\" id=\"search_group_id\">";
        // line 42
        echo (isset($context["S_GROUP_SELECT"]) ? $context["S_GROUP_SELECT"] : null);
        echo "</select></dd>
\t</dl>
\t";
        // line 44
        // line 45
        echo "\t<dl>
\t\t<dt><label for=\"sk\" class=\"label3\">";
        // line 46
        echo $this->env->getExtension('phpbb')->lang("SORT_BY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"sk\" id=\"sk\">";
        // line 47
        echo (isset($context["S_SORT_OPTIONS"]) ? $context["S_SORT_OPTIONS"] : null);
        echo "</select> <select name=\"sd\">";
        echo (isset($context["S_ORDER_SELECT"]) ? $context["S_ORDER_SELECT"] : null);
        echo "</select></dd>
\t</dl>
\t</fieldset>

\t<fieldset class=\"fields1 column2\">
\t<dl>
\t\t<dt><label for=\"joined\">";
        // line 53
        echo $this->env->getExtension('phpbb')->lang("JOINED");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"joined_select\">";
        // line 54
        echo (isset($context["S_JOINED_TIME_OPTIONS"]) ? $context["S_JOINED_TIME_OPTIONS"] : null);
        echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"joined\" id=\"joined\" value=\"";
        echo (isset($context["JOINED"]) ? $context["JOINED"] : null);
        echo "\" /></dd>
\t</dl>
";
        // line 56
        if ((isset($context["S_VIEWONLINE"]) ? $context["S_VIEWONLINE"] : null)) {
            // line 57
            echo "\t<dl>
\t\t<dt><label for=\"active\">";
            // line 58
            echo $this->env->getExtension('phpbb')->lang("LAST_ACTIVE");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><select name=\"active_select\">";
            // line 59
            echo (isset($context["S_ACTIVE_TIME_OPTIONS"]) ? $context["S_ACTIVE_TIME_OPTIONS"] : null);
            echo "</select> <input class=\"inputbox medium\" type=\"text\" name=\"active\" id=\"active\" value=\"";
            echo (isset($context["ACTIVE"]) ? $context["ACTIVE"] : null);
            echo "\" /></dd>
\t</dl>
";
        }
        // line 62
        echo "\t<dl>
\t\t<dt><label for=\"count\">";
        // line 63
        echo $this->env->getExtension('phpbb')->lang("POSTS");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label></dt>
\t\t<dd><select name=\"count_select\">";
        // line 64
        echo (isset($context["S_COUNT_OPTIONS"]) ? $context["S_COUNT_OPTIONS"] : null);
        echo "</select> <input class=\"inputbox medium\" type=\"number\" min=\"0\" name=\"count\" id=\"count\" value=\"";
        echo (isset($context["COUNT"]) ? $context["COUNT"] : null);
        echo "\" /></dd>
\t</dl>
";
        // line 66
        if ((isset($context["S_IP_SEARCH_ALLOWED"]) ? $context["S_IP_SEARCH_ALLOWED"] : null)) {
            // line 67
            echo "\t<dl>
\t\t<dt><label for=\"ip\">";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("POST_IP");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t<dd><input class=\"inputbox medium\" type=\"text\" name=\"ip\" id=\"ip\" value=\"";
            // line 69
            echo (isset($context["IP"]) ? $context["IP"] : null);
            echo "\" /></dd>
\t</dl>
";
        }
        // line 72
        echo "\t";
        // line 73
        echo "\t</fieldset>

\t<div class=\"clear\"></div>

\t<hr />

\t<fieldset class=\"submit-buttons\">
\t\t<input type=\"reset\" value=\"";
        // line 80
        echo $this->env->getExtension('phpbb')->lang("RESET");
        echo "\" name=\"reset\" class=\"button2\" />&nbsp;
\t\t<input type=\"submit\" name=\"submit\" value=\"";
        // line 81
        echo $this->env->getExtension('phpbb')->lang("SEARCH");
        echo "\" class=\"button1\" />
\t\t";
        // line 82
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
\t</fieldset>

\t</div>
</div>

</form>
</div>
";
    }

    public function getTemplateName()
    {
        return "memberlist_search.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  228 => 82,  224 => 81,  220 => 80,  211 => 73,  209 => 72,  203 => 69,  198 => 68,  195 => 67,  193 => 66,  186 => 64,  181 => 63,  178 => 62,  170 => 59,  165 => 58,  162 => 57,  160 => 56,  153 => 54,  148 => 53,  137 => 47,  132 => 46,  129 => 45,  128 => 44,  123 => 42,  118 => 41,  115 => 40,  109 => 37,  104 => 36,  101 => 35,  99 => 34,  93 => 31,  88 => 30,  85 => 29,  83 => 28,  79 => 26,  69 => 18,  67 => 17,  56 => 16,  50 => 15,  44 => 13,  40 => 11,  39 => 10,  34 => 8,  27 => 4,  22 => 2,  19 => 1,);
    }
}
/* <div class="container">*/
/* <h2 class="solo">{L_FIND_USERNAME}</h2>*/
/* */
/* <form method="post" action="{S_MODE_ACTION}" id="search_memberlist">*/
/* <div class="panel">*/
/* 	<div class="inner">*/
/* */
/* 	<p>{L_FIND_USERNAME_EXPLAIN}</p>*/
/* */
/* 	<!-- EVENT memberlist_search_fields_before -->*/
/* 	<fieldset class="fields1 column1">*/
/* 	<dl style="overflow: visible;">*/
/* 		<dt><label for="username">{L_USERNAME}{L_COLON}</label></dt>*/
/* 		<dd>*/
/* 			<!-- IF U_LIVE_SEARCH --><div class="dropdown-container dropdown-{S_CONTENT_FLOW_END}"><!-- ENDIF -->*/
/* 			<input type="text" name="username" id="username" value="{USERNAME}" class="inputbox"<!-- IF U_LIVE_SEARCH --> autocomplete="off" data-filter="phpbb.search.filter" data-ajax="member_search" data-min-length="3" data-url="{U_LIVE_SEARCH}" data-results="#user-search" data-overlay="false"<!-- ENDIF --> />*/
/* 			<!-- IF U_LIVE_SEARCH -->*/
/* 				<div class="dropdown live-search hidden" id="user-search">*/
/* 					<div class="pointer"><div class="pointer-inner"></div></div>*/
/* 					<ul class="dropdown-contents search-results">*/
/* 						<li class="search-result-tpl"><span class="search-result"></span></li>*/
/* 					</ul>*/
/* 				</div>*/
/* 			</div>*/
/* 			<!-- ENDIF -->*/
/* 		</dd>*/
/* 	</dl>*/
/* <!-- IF S_EMAIL_SEARCH_ALLOWED -->*/
/* 	<dl>*/
/* 		<dt><label for="email">{L_EMAIL}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" name="email" id="email" value="{EMAIL}" class="inputbox" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* <!-- IF S_JABBER_ENABLED -->*/
/* 	<dl>*/
/* 		<dt><label for="jabber">{L_JABBER}{L_COLON}</label></dt>*/
/* 		<dd><input type="text" name="jabber" id="jabber" value="{JABBER}" class="inputbox" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="search_group_id">{L_GROUP}{L_COLON}</label></dt>*/
/* 		<dd><select name="search_group_id" id="search_group_id">{S_GROUP_SELECT}</select></dd>*/
/* 	</dl>*/
/* 	<!-- EVENT memberlist_search_sorting_options_before -->*/
/* 	<dl>*/
/* 		<dt><label for="sk" class="label3">{L_SORT_BY}{L_COLON}</label></dt>*/
/* 		<dd><select name="sk" id="sk">{S_SORT_OPTIONS}</select> <select name="sd">{S_ORDER_SELECT}</select></dd>*/
/* 	</dl>*/
/* 	</fieldset>*/
/* */
/* 	<fieldset class="fields1 column2">*/
/* 	<dl>*/
/* 		<dt><label for="joined">{L_JOINED}{L_COLON}</label></dt>*/
/* 		<dd><select name="joined_select">{S_JOINED_TIME_OPTIONS}</select> <input class="inputbox medium" type="text" name="joined" id="joined" value="{JOINED}" /></dd>*/
/* 	</dl>*/
/* <!-- IF S_VIEWONLINE -->*/
/* 	<dl>*/
/* 		<dt><label for="active">{L_LAST_ACTIVE}{L_COLON}</label></dt>*/
/* 		<dd><select name="active_select">{S_ACTIVE_TIME_OPTIONS}</select> <input class="inputbox medium" type="text" name="active" id="active" value="{ACTIVE}" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* 	<dl>*/
/* 		<dt><label for="count">{L_POSTS}{L_COLON}</label></dt>*/
/* 		<dd><select name="count_select">{S_COUNT_OPTIONS}</select> <input class="inputbox medium" type="number" min="0" name="count" id="count" value="{COUNT}" /></dd>*/
/* 	</dl>*/
/* <!-- IF S_IP_SEARCH_ALLOWED -->*/
/* 	<dl>*/
/* 		<dt><label for="ip">{L_POST_IP}{L_COLON}</label></dt>*/
/* 		<dd><input class="inputbox medium" type="text" name="ip" id="ip" value="{IP}" /></dd>*/
/* 	</dl>*/
/* <!-- ENDIF -->*/
/* 	<!-- EVENT memberlist_search_fields_after -->*/
/* 	</fieldset>*/
/* */
/* 	<div class="clear"></div>*/
/* */
/* 	<hr />*/
/* */
/* 	<fieldset class="submit-buttons">*/
/* 		<input type="reset" value="{L_RESET}" name="reset" class="button2" />&nbsp;*/
/* 		<input type="submit" name="submit" value="{L_SEARCH}" class="button1" />*/
/* 		{S_FORM_TOKEN}*/
/* 	</fieldset>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* </form>*/
/* </div>*/
/* */
