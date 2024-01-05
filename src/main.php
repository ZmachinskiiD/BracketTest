<?php
function bracketStringAsessment(string $bracketExpression):bool
{
    $stack=[];
    $openingBracketString="([<{";
    foreach (str_split($bracketExpression) as $char)
    {
//        var_dump($char);
    if(str_contains($openingBracketString, $char))
    {
    $stack[] = $char;
    }
    else
    {
        switch($char)
        {
            case(")"):
                if(end($stack)==="(")
                {
                    array_pop($stack);

                }
                else
                {
                    return false;
                }
                break;
            case("]"):
                if(end($stack)==="[")
                {
                    array_pop($stack);
                }
                else
                {
                    echo("ams");
                }
               break;
            case("}"):
                if(end($stack)==="{")
                {
                    array_pop($stack);
                }
                else
                {
                    return false;
                }
               break;
            case(">"):
                if(end($stack)==="<")
                {
                    array_pop($stack);
                }
                else
                {
                    return false;
                }
                break;
            default:
                continue 2;
        }
    }
    }
    if($stack!==[])
    {
        return false;
    }
    return true;
}
echo(bracketStringAsessment("[]<><>{{<{}>}}test()(())"));