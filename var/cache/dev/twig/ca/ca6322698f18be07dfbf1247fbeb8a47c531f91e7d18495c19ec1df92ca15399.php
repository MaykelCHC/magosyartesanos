<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* asignar_productoa_user/_form.html.twig */
class __TwigTemplate_5f326799fe57aa380a7ea87107bb590d291b7fef19b5dac4e933a5a52fe3e092 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "asignar_productoa_user/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "asignar_productoa_user/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newasignacion"]]);
        echo "
<form role=\"form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_productoa_user_new");
        echo "\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <!-- select -->
            <div class=\"form-group\">
                <label>Usuarios: </label>
                <select class=\"form-control select2 select2-hidden-accessible\"
                        data-select2-id=\"1\" tabindex=\"-1\"
                        aria-hidden=\"true\" name=\"usuario_search\"
                        data-placeholder=\"Seleccione el Usuario\"
                        title=\"Usuarios\">
                    <option></option>
                    ";
        // line 14
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 14, $this->source); })()), "usuario", [], "any", false, false, false, 14), 'widget');
        echo "
                </select>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <!-- Select multiple-->
            <div class=\"form-group\" style=\"float: right\">
                <label>Seleccione Productos:</label>
                ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 22, $this->source); })()), "producto", [], "any", false, false, false, 22), 'widget');
        echo "
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 28
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_asignar_producto");
        echo "\"> Cancelar</a>
    </div>
    ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "_token", [], "any", false, false, false, 30), 'row');
        echo "
</form>
";
        // line 32
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 32, $this->source); })()), 'form_end');
        echo "
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "asignar_productoa_user/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  92 => 32,  87 => 30,  82 => 28,  73 => 22,  62 => 14,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newasignacion'}}) }}
<form role=\"form\" action=\"{{ path('app_asignar_productoa_user_new') }}\">
    <div class=\"row\">
        <div class=\"col-sm-4\">
            <!-- select -->
            <div class=\"form-group\">
                <label>Usuarios: </label>
                <select class=\"form-control select2 select2-hidden-accessible\"
                        data-select2-id=\"1\" tabindex=\"-1\"
                        aria-hidden=\"true\" name=\"usuario_search\"
                        data-placeholder=\"Seleccione el Usuario\"
                        title=\"Usuarios\">
                    <option></option>
                    {{ form_widget(form.usuario) }}
                </select>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <!-- Select multiple-->
            <div class=\"form-group\" style=\"float: right\">
                <label>Seleccione Productos:</label>
                {{ form_widget(form.producto) }}
            </div>
        </div>
    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_asignar_producto') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}
", "asignar_productoa_user/_form.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\asignar_productoa_user\\_form.html.twig");
    }
}
