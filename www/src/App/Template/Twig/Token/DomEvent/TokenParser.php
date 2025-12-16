<?php

namespace App\Template\Twig\Token\DomEvent;

use App\Template\Twig\Token\DomEvent\Node;

class TokenParser extends \Twig\TokenParser\AbstractTokenParser
{    
    /**
     * parse
     * 
     * Twig token for DomEvent.
     * Automatically generates hook names.
     * 
     * Examples:
     * {% domevent name="test" %}
     * {% domevent "test" %} example {% enddomevent %}
     * {% domevent "test", "div.class1,class2#id" %} example {% enddomevent %}
     *
     * @param \Twig\Token $token
     * @return Node
     */
    public function parse(\Twig\Token $token)
    {
        $parser = $this->parser;
        $stream = $parser->getStream();
        $lineno = $token->getLine();

        $tag = 'div';

        $withElements = false;
        if ($stream->test(\Twig\Token::NAME_TYPE))
        {
            $stream->expect(\Twig\Token::NAME_TYPE);
            $stream->expect(\Twig\Token::OPERATOR_TYPE, '=');
            $name = $stream->getCurrent()->getValue();
            $body = $this->parser->getExpressionParser()->parseExpression();
            $stream->expect(\Twig\Token::BLOCK_END_TYPE);
        }
        else
        {
            $withElements = true;
            $name = $stream->expect(\Twig\Token::STRING_TYPE)->getValue();
            if ($stream->getCurrent()->getValue())
            {
                $stream->expect(\Twig\Token::PUNCTUATION_TYPE, ',');
                $tag = $stream->expect(\Twig\Token::STRING_TYPE)->getValue();
            }
            if ($stream->nextIf(\Twig\Token::BLOCK_END_TYPE))
            {
                $body = $this->parser->subparse([$this, 'decideDomTagEnd'], true);
            }
            $stream->expect(\Twig\Token::BLOCK_END_TYPE); 
        }

        return new Node($withElements, $name, $tag, $body, $lineno);
    }

    public function getTag()
    {
        return 'domevent';
    }

    public function decideDomTagEnd(\Twig\Token $token)
    {
        return $token->test('enddomevent');
    }
}
