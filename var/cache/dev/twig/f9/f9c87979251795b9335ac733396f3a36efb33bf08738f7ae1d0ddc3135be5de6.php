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

/* solicitar_recogida/_form.html.twig */
class __TwigTemplate_8604b428429bfde9d0960e1f2cf87b41a666a3d9bd589e8ea5e7580de49ff8df extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_recogida/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "solicitar_recogida/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newrecogida"]]);
        echo "
<form role=\"form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_new");
        echo "\">
    <div class=\"row\">

        <div class=\"form-group\">
            <div class=\"text-danger\">
                ";
        // line 7
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 7, $this->source); })()), 'errors');
        echo "
            </div>
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    ";
        // line 11
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 11, $this->source); })()), "nombreempresa", [], "any", false, false, false, 11), 'widget');
        echo "
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"input-group date\" id=\"reservationdate\" data-target-input=\"nearest\">
                ";
        // line 18
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 18, $this->source); })()), "fecharecogida", [], "any", false, false, false, 18), 'widget');
        echo "
                <div class=\"input-group-append\" data-target=\"#reservationdate\" data-toggle=\"datetimepicker\">
                    <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"bootstrap-timepicker\">
            <div class=\"form-group\">
                <div class=\"input-group date\" id=\"timepicker\" data-target-input=\"nearest\">
                    ";
        // line 27
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "horarecogida", [], "any", false, false, false, 27), 'widget');
        echo "
                    <div class=\"input-group-append\" data-target=\"#timepicker\" data-toggle=\"datetimepicker\">
                        <div class=\"input-group-text\"><i class=\"far fa-clock\"></i></div>
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 40
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "numeroenvio", [], "any", false, false, false, 40), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    ";
        // line 49
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 49, $this->source); })()), "estado", [], "any", false, false, false, 49), 'widget');
        echo "
                </div>
            </div>
        </div>

    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Solicitar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 57
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_solicitar_recogida_index");
        echo "\"> Cancelar</a>
    </div>
    ";
        // line 59
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 59, $this->source); })()), "_token", [], "any", false, false, false, 59), 'row');
        echo "
</form>
";
        // line 61
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 61, $this->source); })()), 'form_end');
        echo "



";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "solicitar_recogida/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 61,  128 => 59,  123 => 57,  112 => 49,  100 => 40,  84 => 27,  72 => 18,  62 => 11,  55 => 7,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newrecogida'}}) }}
<form role=\"form\" action=\"{{ path('app_solicitar_recogida_new') }}\">
    <div class=\"row\">

        <div class=\"form-group\">
            <div class=\"text-danger\">
                {{ form_errors(form) }}
            </div>
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    {{ form_widget(form.nombreempresa) }}
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"input-group date\" id=\"reservationdate\" data-target-input=\"nearest\">
                {{ form_widget(form.fecharecogida) }}
                <div class=\"input-group-append\" data-target=\"#reservationdate\" data-toggle=\"datetimepicker\">
                    <div class=\"input-group-text\"><i class=\"fa fa-calendar\"></i></div>
                </div>
            </div>
        </div>
        <div class=\"bootstrap-timepicker\">
            <div class=\"form-group\">
                <div class=\"input-group date\" id=\"timepicker\" data-target-input=\"nearest\">
                    {{ form_widget(form.horarecogida) }}
                    <div class=\"input-group-append\" data-target=\"#timepicker\" data-toggle=\"datetimepicker\">
                        <div class=\"input-group-text\"><i class=\"far fa-clock\"></i></div>
                    </div>
                </div>
                <!-- /.input group -->
            </div>
            <!-- /.form group -->
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.numeroenvio) }}
                    </div>
                </div>
            </div>
        </div>

        <div class=\"form-group\">
            <div class=\"input-group\">
                <div class=\"input-group-prepend\">
                    {{ form_widget(form.estado) }}
                </div>
            </div>
        </div>

    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Solicitar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_solicitar_recogida_index') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}



", "solicitar_recogida/_form.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\solicitar_recogida\\_form.html.twig");
    }
}
