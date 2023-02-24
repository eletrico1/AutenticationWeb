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

/* main.twig */
class __TwigTemplate_f9a9b71996d6f497d014d29cdb3c876f46359c8b32a54ebe495294292411c9bd extends \Twig\Template
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
        // line 1
        echo "<?php
    session_start() ;
    include (\"conexao.php\");
    if(isset(\$_SESSION[\"usuario\"]) && is_array(\$_SESSION[\"usuario\"])){
        \$adm = \$_SESSION[\"usuario\"][1];
        \$nome = \$_SESSION[\"usuario\"][0];

    } else {

    }
?>
<html>
<link rel=\"stylesheet\" href=\"../../public/css/login.css\">
<head>
    <title> Area Principal </title>
</head>
<body>
<div id=\"main\">
    <ul>
        <li><a href=\"#\">Admin Panel</a></li>
        <li><a href=\"main.twig\">Home</a></li>


        <li style=\"float:right\"><a class=\"active\" href=\"logout.php\">Logout</a></li>
    </ul>
    <h3> Area Principal você está logado como usuário <?php echo \$nome; ?></h3>
</div>
</body>

</html>

";
    }

    public function getTemplateName()
    {
        return "main.twig";
    }

    public function getDebugInfo()
    {
        return array (  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("", "main.twig", "C:\\wamp64\\www\\AutenticationWebVoxline\\app\\Pages\\main.twig");
    }
}
