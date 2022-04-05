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

/* producto/_form.html.twig */
class __TwigTemplate_6420311a79f5dd3d7b5db9d2f084d990551c1efea8804939dfca4ab113ad88eb extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/_form.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "producto/_form.html.twig"));

        // line 1
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "form_newproducto"]]);
        echo "
<form role=\"form\" action=\"";
        // line 2
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_producto_new");
        echo "\">
    <div class=\"row\">

        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    ";
        // line 8
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 8, $this->source); })()), 'errors');
        echo "
                </div>
                <div class=\"input-group\">

                    ";
        // line 12
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "nombre", [], "any", false, false, false, 12), 'widget');
        echo "

                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <!-- <label for=\"customFile\">Custom File</label> -->
                <div class=\"custom-file\">
                    ";
        // line 21
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "imagen", [], "any", false, false, false, 21), 'widget');
        echo "
                    <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar Imagen del Producto</label>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-left: 0;\">
            <div class=\"col-sm-7\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        ";
        // line 30
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "beneficioxventa", [], "any", false, false, false, 30), 'widget');
        echo "
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"form-check\">
                        ";
        // line 37
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 37, $this->source); })()), "tipomoneda", [], "any", false, false, false, 37), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-left: 0\">
            <div class=\"col-sm-8\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <label>I.V.A.</label>
                            ";
        // line 48
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 48, $this->source); })()), "iva", [], "any", false, false, false, 48), 'widget');
        echo "
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <input type=\"text\" name=\"nuevo\" class=\"form-control\" placeholder=\"Ingresar I.V.A.\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 67
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 67, $this->source); })()), "IDD", [], "any", false, false, false, 67), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        ";
        // line 76
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "Stock", [], "any", false, false, false, 76), 'widget');
        echo "
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"";
        // line 85
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo "\"> Cancelar</a>
    </div>
    ";
        // line 87
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 87, $this->source); })()), "_token", [], "any", false, false, false, 87), 'row');
        echo "
</form>
";
        // line 89
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 89, $this->source); })()), 'form_end');
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "producto/_form.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  167 => 89,  162 => 87,  157 => 85,  145 => 76,  133 => 67,  111 => 48,  97 => 37,  87 => 30,  75 => 21,  63 => 12,  56 => 8,  47 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{{ form_start(form, {'attr': {'id':'form_newproducto'}}) }}
<form role=\"form\" action=\"{{ path('app_producto_new') }}\">
    <div class=\"row\">

        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <div class=\"text-danger\">
                    {{ form_errors(form) }}
                </div>
                <div class=\"input-group\">

                    {{ form_widget(form.nombre) }}

                </div>
            </div>
        </div>
        <div class=\"col-sm-12\">
            <div class=\"form-group\">
                <!-- <label for=\"customFile\">Custom File</label> -->
                <div class=\"custom-file\">
                    {{ form_widget(form.imagen) }}
                    <label class=\"custom-file-label\" for=\"producto_imagen\">Adjuntar Imagen del Producto</label>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-left: 0;\">
            <div class=\"col-sm-7\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        {{ form_widget(form.beneficioxventa) }}
                    </div>
                </div>
            </div>
            <div class=\"col-sm-5\">
                <div class=\"form-group\">
                    <div class=\"form-check\">
                        {{ form_widget(form.tipomoneda) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"row\" style=\"margin-left: 0\">
            <div class=\"col-sm-8\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <label>I.V.A.</label>
                            {{ form_widget(form.iva) }}
                        </div>
                    </div>
                </div>
            </div>
            <div class=\"col-sm-4\">
                <div class=\"form-group\">
                    <div class=\"input-group\">
                        <div class=\"input-group-prepend\">
                            <input type=\"text\" name=\"nuevo\" class=\"form-control\" placeholder=\"Ingresar I.V.A.\">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.IDD) }}
                    </div>
                </div>
            </div>
        </div>
        <div class=\"col-sm-6\">
            <div class=\"form-group\">
                <div class=\"input-group\">
                    <div class=\"input-group-prepend\">
                        {{ form_widget(form.Stock) }}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div>
        <button type=\"submit\" class=\"btn btn-primary\" style=\"float: left;\"> Guardar</button>
        <a class=\"btn btn-danger\" style=\"float: right\" href=\"{{ path('app_login') }}\"> Cancelar</a>
    </div>
    {{ form_row(form._token) }}
</form>
{{ form_end(form) }}", "producto/_form.html.twig", "C:\\wamp64\\www\\magoyartesanos\\templates\\producto\\_form.html.twig");
    }
}
