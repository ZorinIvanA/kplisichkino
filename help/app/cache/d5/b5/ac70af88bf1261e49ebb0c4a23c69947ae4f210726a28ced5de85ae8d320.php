<?php

/* forgot_mail_success.tpl */
class __TwigTemplate_d5b5ac70af88bf1261e49ebb0c4a23c69947ae4f210726a28ced5de85ae8d320 extends Twig_Template
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
        echo "<!DOCTYPE html PUBLIC \"-//W3C//DTD XHTML 1.0 Transitional//EN\" \"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd\">
<html xmlns=\"http://www.w3.org/1999/xhtml\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
<head>
<meta name=\"viewport\" content=\"width=device-width\" />
<meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\" />
<title>";
        // line 6
        echo twig_escape_filter($this->env, (isset($context["name_of_firm"]) ? $context["name_of_firm"] : null), "html", null, true);
        echo " - ";
        echo twig_escape_filter($this->env, (isset($context["MAIL_forgot_success"]) ? $context["MAIL_forgot_success"] : null), "html", null, true);
        echo "!</title>


<style type=\"text/css\">
img {
max-width: 100%;
}
body {
-webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6;
}
body { 
background-color: #f6f6f6;
}
@media only screen and (max-width: 640px) {
  body {
    padding: 0 !important;
  }
  h1 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h2 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h3 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h4 {
    font-weight: 800 !important; margin: 20px 0 5px !important;
  }
  h1 {
    font-size: 22px !important;
  }
  h2 {
    font-size: 18px !important;
  }
  h3 {
    font-size: 16px !important;
  }
  .container {
    padding: 0 !important; width: 100% !important;
  }
  .content {
    padding: 0 !important;
  }
  .content-wrap {
    padding: 10px !important;
  }
  .invoice {
    width: 100% !important;
  }
}
</style>
</head>

<body itemscope itemtype=\"http://schema.org/EmailMessage\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; -webkit-font-smoothing: antialiased; -webkit-text-size-adjust: none; width: 100% !important; height: 100%; line-height: 1.6; background: #f6f6f6; margin: 0;\">

<table class=\"body-wrap\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; width: 100%; background: #f6f6f6; margin: 0;\">
  <tr style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
    <td style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>
    <td class=\"container\" width=\"600\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; display: block !important; max-width: 600px !important; clear: both !important; margin: 0 auto;\" valign=\"top\">
      <div class=\"content\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; max-width: 600px; display: block; margin: 0 auto; padding: 20px;\">
        <table class=\"main\" width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; border-radius: 3px; background: #fff; margin: 0; border: 1px solid #e9e9e9;\">
          <tr style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
            <td class=\"alert alert-warning\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 16px; vertical-align: top; color: #fff; font-weight: 500; text-align: center; border-radius: 3px 3px 0 0; background: #dd4b39; margin: 0; padding: 20px;\" align=\"center\" valign=\"top\">

              <p class=\"lead\"> ";
        // line 71
        echo twig_escape_filter($this->env, (isset($context["MAIL_forgot_success"]) ? $context["MAIL_forgot_success"] : null), "html", null, true);
        echo "
</p>
            </td>
          </tr>
          <tr style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
            <td class=\"content-wrap\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 20px;\" valign=\"top\">
              <table width=\"100%\" cellpadding=\"0\" cellspacing=\"0\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                <tr style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                  <td class=\"content-block\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 0px;\" valign=\"top\">
                     <p style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">";
        // line 80
        echo twig_escape_filter($this->env, (isset($context["MAIL_forgot_success_ext"]) ? $context["MAIL_forgot_success_ext"] : null), "html", null, true);
        echo "  </p> 


                 

                  </td>
                </tr>

                <tr style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">
                  <td class=\"content-block\" style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0; padding: 0 0 20px;\" valign=\"top\">
 <table width=\"100%\" cellspacing=\"0\" cellpadding=\"3\" style=\"\">
  <tr style=\"\">
    <td colspan=\"2\" ><center>
      <strong style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">";
        // line 93
        echo twig_escape_filter($this->env, (isset($context["MAIL_info"]) ? $context["MAIL_info"] : null), "html", null, true);
        echo " </strong>
    </center></td>


  </tr>
  <tr>
    <td style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">";
        // line 99
        echo twig_escape_filter($this->env, (isset($context["MAIL_login"]) ? $context["MAIL_login"] : null), "html", null, true);
        echo ":</td>
    <td style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">";
        // line 100
        echo twig_escape_filter($this->env, (isset($context["login"]) ? $context["login"] : null), "html", null, true);
        echo "</td>
  </tr>
      <tr>
    <td style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">";
        // line 103
        echo twig_escape_filter($this->env, (isset($context["MAIL_pass"]) ? $context["MAIL_pass"] : null), "html", null, true);
        echo ":</td>
    <td style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; margin: 0;\">";
        // line 104
        echo twig_escape_filter($this->env, (isset($context["pass"]) ? $context["pass"] : null), "html", null, true);
        echo "</td>
  </tr>
    <tr>
    <td colspan=\"5\">&nbsp;</td>
  </tr>  
 
</table>
                  </td>
                </tr>

              </table>
            </td>
          </tr>
        </table>
</div>
    </td>
    <td style=\"font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif; box-sizing: border-box; font-size: 14px; vertical-align: top; margin: 0;\" valign=\"top\"></td>
  </tr>
</table>

</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "forgot_mail_success.tpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  147 => 104,  143 => 103,  137 => 100,  133 => 99,  124 => 93,  108 => 80,  96 => 71,  26 => 6,  19 => 1,);
    }
}
