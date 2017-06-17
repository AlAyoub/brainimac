<?php

/* memberlist_email.html */
class __TwigTemplate_bb2ce82a5447e86891a032334ccdcc287415202065ab4033d0dfd3c1a75098ea extends Twig_Template
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
        $location = "overall_header.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_header.html", "memberlist_email.html", 1)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
        // line 2
        echo "<div class=\"container\">
";
        // line 3
        // line 4
        echo "
";
        // line 5
        if ((isset($context["S_CONTACT_ADMIN"]) ? $context["S_CONTACT_ADMIN"] : null)) {
            // line 6
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("CONTACT_ADMIN");
            echo "</h2>
";
        } elseif (        // line 7
(isset($context["S_SEND_USER"]) ? $context["S_SEND_USER"] : null)) {
            // line 8
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL_USER");
            echo "</h2>
";
        } else {
            // line 10
            echo "<h2 class=\"titlespace\">";
            echo $this->env->getExtension('phpbb')->lang("EMAIL_TOPIC");
            echo "</h2>
";
        }
        // line 12
        echo "
<form method=\"post\" action=\"";
        // line 13
        echo (isset($context["S_POST_ACTION"]) ? $context["S_POST_ACTION"] : null);
        echo "\" id=\"post\">

\t";
        // line 15
        if ((isset($context["CONTACT_INFO"]) ? $context["CONTACT_INFO"] : null)) {
            // line 16
            echo "\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t\t\t<div class=\"postbody\">
\t\t\t\t<div class=\"content\">
\t\t\t\t\t";
            // line 20
            echo (isset($context["CONTACT_INFO"]) ? $context["CONTACT_INFO"] : null);
            echo "
\t\t\t\t</div>
\t\t\t</div>
\t\t</div>
\t</div>
\t\t<br class=\"clear\" />
\t";
        }
        // line 27
        echo "
\t<div class=\"panel\">
\t\t<div class=\"inner\">
\t<div class=\"content\">

\t\t";
        // line 32
        if ((isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null)) {
            echo "<p class=\"error\">";
            echo (isset($context["ERROR_MESSAGE"]) ? $context["ERROR_MESSAGE"] : null);
            echo "</p>";
        }
        // line 33
        echo "\t\t<fieldset class=\"fields2\">
\t\t";
        // line 34
        if ((isset($context["S_SEND_USER"]) ? $context["S_SEND_USER"] : null)) {
            // line 35
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 36
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 37
            echo (isset($context["USERNAME_FULL"]) ? $context["USERNAME_FULL"] : null);
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 40
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"1\" value=\"";
            // line 41
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } elseif (        // line 43
(isset($context["S_CONTACT_ADMIN"]) ? $context["S_CONTACT_ADMIN"] : null)) {
            // line 44
            echo "\t\t\t<dl>
\t\t\t\t<dt><label>";
            // line 45
            echo $this->env->getExtension('phpbb')->lang("RECIPIENT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><strong>";
            // line 46
            echo $this->env->getExtension('phpbb')->lang("ADMINISTRATOR");
            echo "</strong></dd>
\t\t\t</dl>
\t\t\t";
            // line 48
            if ( !(isset($context["S_IS_REGISTERED"]) ? $context["S_IS_REGISTERED"] : null)) {
                // line 49
                echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
                // line 50
                echo $this->env->getExtension('phpbb')->lang("SENDER_EMAIL_ADDRESS");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"1\" value=\"";
                // line 51
                echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
                // line 54
                echo $this->env->getExtension('phpbb')->lang("SENDER_NAME");
                echo $this->env->getExtension('phpbb')->lang("COLON");
                echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"2\" value=\"";
                // line 55
                echo (isset($context["NAME"]) ? $context["NAME"] : null);
                echo "\" /></dd>
\t\t\t</dl>
\t\t\t";
            }
            // line 58
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"subject\">";
            // line 59
            echo $this->env->getExtension('phpbb')->lang("SUBJECT");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"subject\" id=\"subject\" size=\"50\" tabindex=\"3\" value=\"";
            // line 60
            echo (isset($context["SUBJECT"]) ? $context["SUBJECT"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t";
        } else {
            // line 63
            echo "\t\t\t<dl>
\t\t\t\t<dt><label for=\"email\">";
            // line 64
            echo $this->env->getExtension('phpbb')->lang("EMAIL_ADDRESS");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"email\" name=\"email\" id=\"email\" size=\"50\" maxlength=\"100\" tabindex=\"2\" value=\"";
            // line 65
            echo (isset($context["EMAIL"]) ? $context["EMAIL"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"name\">";
            // line 68
            echo $this->env->getExtension('phpbb')->lang("REAL_NAME");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label></dt>
\t\t\t\t<dd><input class=\"inputbox autowidth\" type=\"text\" name=\"name\" id=\"name\" size=\"50\" tabindex=\"3\" value=\"";
            // line 69
            echo (isset($context["NAME"]) ? $context["NAME"] : null);
            echo "\" /></dd>
\t\t\t</dl>
\t\t\t<dl>
\t\t\t\t<dt><label for=\"lang\">";
            // line 72
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG");
            echo $this->env->getExtension('phpbb')->lang("COLON");
            echo "</label><br />
\t\t\t\t\t<span>";
            // line 73
            echo $this->env->getExtension('phpbb')->lang("DEST_LANG_EXPLAIN");
            echo "</span></dt>
\t\t\t\t<dd><select name=\"lang\">";
            // line 74
            echo (isset($context["S_LANG_OPTIONS"]) ? $context["S_LANG_OPTIONS"] : null);
            echo "</select></dd>
\t\t\t</dl>
\t\t";
        }
        // line 77
        echo "\t\t<dl>
\t\t\t<dt><label for=\"message\">";
        // line 78
        echo $this->env->getExtension('phpbb')->lang("MESSAGE_BODY");
        echo $this->env->getExtension('phpbb')->lang("COLON");
        echo "</label><br />
\t\t\t<span>";
        // line 79
        echo $this->env->getExtension('phpbb')->lang("EMAIL_BODY_EXPLAIN");
        echo "</span></dt>
\t\t\t<dd><textarea class=\"inputbox\" name=\"message\" id=\"message\" rows=\"15\" cols=\"76\" tabindex=\"4\">";
        // line 80
        echo (isset($context["MESSAGE"]) ? $context["MESSAGE"] : null);
        echo "</textarea></dd>
\t\t</dl>
\t\t";
        // line 82
        if ((isset($context["S_REGISTERED_USER"]) ? $context["S_REGISTERED_USER"] : null)) {
            // line 83
            echo "\t\t<dl>
\t\t\t<dt>&nbsp;</dt>
\t\t\t<dd><label for=\"cc_sender\"><input type=\"checkbox\" name=\"cc_sender\" id=\"cc_sender\" value=\"1\" checked=\"checked\" tabindex=\"5\" /> ";
            // line 85
            echo $this->env->getExtension('phpbb')->lang("CC_SENDER");
            echo "</label></dd>
\t\t</dl>
\t\t";
        }
        // line 88
        echo "\t\t</fieldset>
\t</div>

\t</div>
</div>

<div class=\"panel\">
\t<div class=\"inner\">
\t<div class=\"content\">
\t\t<fieldset class=\"submit-buttons\">
\t\t\t<input type=\"submit\" tabindex=\"6\" name=\"submit\" class=\"button1\" value=\"";
        // line 98
        echo $this->env->getExtension('phpbb')->lang("SEND_EMAIL");
        echo "\" />
\t\t</fieldset>
\t</div>
\t</div>
";
        // line 102
        echo (isset($context["S_FORM_TOKEN"]) ? $context["S_FORM_TOKEN"] : null);
        echo "
</div>

</form>
</div>
";
        // line 107
        $location = "overall_footer.html";
        $namespace = false;
        if (strpos($location, '@') === 0) {
            $namespace = substr($location, 1, strpos($location, '/') - 1);
            $previous_look_up_order = $this->env->getNamespaceLookUpOrder();
            $this->env->setNamespaceLookUpOrder(array($namespace, '__main__'));
        }
        $this->loadTemplate("overall_footer.html", "memberlist_email.html", 107)->display($context);
        if ($namespace) {
            $this->env->setNamespaceLookUpOrder($previous_look_up_order);
        }
    }

    public function getTemplateName()
    {
        return "memberlist_email.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  279 => 107,  271 => 102,  264 => 98,  252 => 88,  246 => 85,  242 => 83,  240 => 82,  235 => 80,  231 => 79,  226 => 78,  223 => 77,  217 => 74,  213 => 73,  208 => 72,  202 => 69,  197 => 68,  191 => 65,  186 => 64,  183 => 63,  177 => 60,  172 => 59,  169 => 58,  163 => 55,  158 => 54,  152 => 51,  147 => 50,  144 => 49,  142 => 48,  137 => 46,  132 => 45,  129 => 44,  127 => 43,  122 => 41,  117 => 40,  111 => 37,  106 => 36,  103 => 35,  101 => 34,  98 => 33,  92 => 32,  85 => 27,  75 => 20,  69 => 16,  67 => 15,  62 => 13,  59 => 12,  53 => 10,  47 => 8,  45 => 7,  40 => 6,  38 => 5,  35 => 4,  34 => 3,  31 => 2,  19 => 1,);
    }
}
/* <!-- INCLUDE overall_header.html -->*/
/* <div class="container">*/
/* <!-- EVENT memberlist_email_before -->*/
/* */
/* <!-- IF S_CONTACT_ADMIN-->*/
/* <h2 class="titlespace">{L_CONTACT_ADMIN}</h2>*/
/* <!-- ELSEIF S_SEND_USER -->*/
/* <h2 class="titlespace">{L_SEND_EMAIL_USER}</h2>*/
/* <!-- ELSE -->*/
/* <h2 class="titlespace">{L_EMAIL_TOPIC}</h2>*/
/* <!-- ENDIF -->*/
/* */
/* <form method="post" action="{S_POST_ACTION}" id="post">*/
/* */
/* 	<!-- IF CONTACT_INFO -->*/
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 			<div class="postbody">*/
/* 				<div class="content">*/
/* 					{CONTACT_INFO}*/
/* 				</div>*/
/* 			</div>*/
/* 		</div>*/
/* 	</div>*/
/* 		<br class="clear" />*/
/* 	<!-- ENDIF -->*/
/* */
/* 	<div class="panel">*/
/* 		<div class="inner">*/
/* 	<div class="content">*/
/* */
/* 		<!-- IF ERROR_MESSAGE --><p class="error">{ERROR_MESSAGE}</p><!-- ENDIF -->*/
/* 		<fieldset class="fields2">*/
/* 		<!-- IF S_SEND_USER -->*/
/* 			<dl>*/
/* 				<dt><label>{L_RECIPIENT}{L_COLON}</label></dt>*/
/* 				<dd><strong>{USERNAME_FULL}</strong></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="subject" id="subject" size="50" tabindex="1" value="{SUBJECT}" /></dd>*/
/* 			</dl>*/
/* 		<!-- ELSEIF S_CONTACT_ADMIN-->*/
/* 			<dl>*/
/* 				<dt><label>{L_RECIPIENT}{L_COLON}</label></dt>*/
/* 				<dd><strong>{L_ADMINISTRATOR}</strong></dd>*/
/* 			</dl>*/
/* 			<!-- IF not S_IS_REGISTERED -->*/
/* 			<dl>*/
/* 				<dt><label for="email">{L_SENDER_EMAIL_ADDRESS}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="email" id="email" size="50" maxlength="100" tabindex="1" value="{EMAIL}" /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="name">{L_SENDER_NAME}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="name" id="name" size="50" tabindex="2" value="{NAME}" /></dd>*/
/* 			</dl>*/
/* 			<!-- ENDIF -->*/
/* 			<dl>*/
/* 				<dt><label for="subject">{L_SUBJECT}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="subject" id="subject" size="50" tabindex="3" value="{SUBJECT}" /></dd>*/
/* 			</dl>*/
/* 		<!-- ELSE -->*/
/* 			<dl>*/
/* 				<dt><label for="email">{L_EMAIL_ADDRESS}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="email" name="email" id="email" size="50" maxlength="100" tabindex="2" value="{EMAIL}" /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="name">{L_REAL_NAME}{L_COLON}</label></dt>*/
/* 				<dd><input class="inputbox autowidth" type="text" name="name" id="name" size="50" tabindex="3" value="{NAME}" /></dd>*/
/* 			</dl>*/
/* 			<dl>*/
/* 				<dt><label for="lang">{L_DEST_LANG}{L_COLON}</label><br />*/
/* 					<span>{L_DEST_LANG_EXPLAIN}</span></dt>*/
/* 				<dd><select name="lang">{S_LANG_OPTIONS}</select></dd>*/
/* 			</dl>*/
/* 		<!-- ENDIF -->*/
/* 		<dl>*/
/* 			<dt><label for="message">{L_MESSAGE_BODY}{L_COLON}</label><br />*/
/* 			<span>{L_EMAIL_BODY_EXPLAIN}</span></dt>*/
/* 			<dd><textarea class="inputbox" name="message" id="message" rows="15" cols="76" tabindex="4">{MESSAGE}</textarea></dd>*/
/* 		</dl>*/
/* 		<!-- IF S_REGISTERED_USER -->*/
/* 		<dl>*/
/* 			<dt>&nbsp;</dt>*/
/* 			<dd><label for="cc_sender"><input type="checkbox" name="cc_sender" id="cc_sender" value="1" checked="checked" tabindex="5" /> {L_CC_SENDER}</label></dd>*/
/* 		</dl>*/
/* 		<!-- ENDIF -->*/
/* 		</fieldset>*/
/* 	</div>*/
/* */
/* 	</div>*/
/* </div>*/
/* */
/* <div class="panel">*/
/* 	<div class="inner">*/
/* 	<div class="content">*/
/* 		<fieldset class="submit-buttons">*/
/* 			<input type="submit" tabindex="6" name="submit" class="button1" value="{L_SEND_EMAIL}" />*/
/* 		</fieldset>*/
/* 	</div>*/
/* 	</div>*/
/* {S_FORM_TOKEN}*/
/* </div>*/
/* */
/* </form>*/
/* </div>*/
/* <!-- INCLUDE overall_footer.html -->*/
/* */
