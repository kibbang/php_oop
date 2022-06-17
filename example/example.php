<?php
/**
 * PHP
 * PHP: Hypertext Preprocessor
 * website is php.net
 */
abstract class AbstractPageTemplate
{
    public function render(): string
    {
        return $this->template();
    }

    protected abstract function header();

    protected abstract function article();

    protected abstract function footer();

    protected final function template(): string
    {
        $result = $this->header();
        $result .= $this->article();
        $result .= $this->footer();

        return $result;
    }
}
class TextPage extends AbstractPageTemplate
{

    protected function header(): string
    {
        return "PHP\n";
    }

    protected function article(): string
    {
        return "PHP: Hypertext Preprocessor\n";
    }

    protected function footer(): string
    {
        return "website is php.net\n";
    }
}

class HtmlPage extends AbstractPageTemplate
{
    protected function header(): string
    {
        return "<header>PHP</header>";
    }

    protected function article(): string
    {
        return "<article>PHP: Hypertext Preprocessor</article>";
    }

    protected function footer(): string
    {
        return "<footer>website is php.net</footer>";
    }
    public function render(): string
    {
        $result = '<html>';
        $result .= $this->template();
        return $result.'</html>';
    }
}
echo '<h1>text</h1>';
$text = new TextPage();
echo $text->render();
echo '<h1>text</h1>';
$html = new HtmlPage();
echo $html->render();