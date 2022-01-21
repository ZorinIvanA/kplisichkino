<?php

/* footer.view.tmpl */
class __TwigTemplate_5c723c49862e6f312ad7b4ca90684aa1dfbd5ebd1167979b149b7fe7eb6640d1 extends Twig_Template
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
        echo "
</div>
</div>

<div id=\"main-footer\" class=\"mf\" style=\" padding-bottom: 20px; ";
        // line 5
        echo twig_escape_filter($this->env, (isset($context["style_hide"]) ? $context["style_hide"] : null), "html", null, true);
        echo "\">
    <div class=\"\" style=\" padding: 20px; \">
        <div class=\"col-md-12\">
            <p class=\"text-muted credit pull-right\"><small>Developed by <a href=\"http://zenlix.com/\">ZENLIX</a> (с) ";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["date"]) ? $context["date"] : null), "html", null, true);
        echo ".</p>
            </small>
        </div>


    </div>
</div>

</div>     
                
             

<script type=\"text/javascript\">

";
        // line 22
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["JS_conf_arr"]) ? $context["JS_conf_arr"] : null));
        foreach ($context['_seq'] as $context["key"] => $context["item"]) {
            // line 23
            echo "var ";
            echo twig_escape_filter($this->env, $context["key"], "html", null, true);
            echo " = \"";
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "\";
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 25
        echo "    
</script>


";
        // line 29
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main_js_start"]) ? $context["main_js_start"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 30
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "


";
        // line 35
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["page_js"]) ? $context["page_js"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 36
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 38
        echo "

";
        // line 40
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["main_js_stop"]) ? $context["main_js_stop"] : null));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 41
            echo "<script src=\"";
            echo twig_escape_filter($this->env, (isset($context["hostname"]) ? $context["hostname"] : null), "html", null, true);
            echo twig_escape_filter($this->env, $context["item"], "html", null, true);
            echo "?";
            echo twig_escape_filter($this->env, (isset($context["version"]) ? $context["version"] : null), "html", null, true);
            echo "\"></script>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 43
        echo "



</body>
</html>
";
    }

    public function getTemplateName()
    {
        return "footer.view.tmpl";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  126 => 43,  114 => 41,  110 => 40,  106 => 38,  94 => 36,  90 => 35,  85 => 32,  73 => 30,  69 => 29,  63 => 25,  52 => 23,  48 => 22,  31 => 8,  25 => 5,  19 => 1,);
    }
}
